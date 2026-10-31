<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: public, max-age=300, stale-while-revalidate=60');

$channelId = 'UCoiLJ0_6B3rY2Cl3GgaNsiA';
$envFile = dirname(__DIR__) . '/.env';
$apiKey = getenv('YOUTUBE_API_KEY') ?: '';

if ($apiKey === '' && is_readable($envFile)) {
  $envContents = file_get_contents($envFile);
  if (is_string($envContents) && preg_match('/^\s*YOUTUBE_API_KEY\s*=\s*(.*?)\s*$/m', $envContents, $matches)) {
    $apiKey = trim($matches[1], " \t\n\r\0\x0B\"'");
  }
}

$respondError = static function (int $statusCode): never {
  http_response_code($statusCode);
  echo json_encode(['error' => 'Dati del canale non disponibili al momento.'], JSON_UNESCAPED_UNICODE);
  exit;
};

if ($apiKey === '' || !function_exists('curl_init')) {
  $respondError(503);
}

$apiUrl = 'https://www.googleapis.com/youtube/v3/channels?' . http_build_query([
  'part' => 'snippet,statistics',
  'id' => $channelId,
]);

$curl = curl_init($apiUrl);
curl_setopt_array($curl, [
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => false,
  CURLOPT_CONNECTTIMEOUT => 4,
  CURLOPT_TIMEOUT => 8,
  CURLOPT_SSL_VERIFYPEER => true,
  CURLOPT_SSL_VERIFYHOST => 2,
  CURLOPT_USERAGENT => 'JoyFluteEnsembleWebsite/1.0',
  CURLOPT_HTTPHEADER => ['x-goog-api-key: ' . $apiKey],
]);
$responseBody = curl_exec($curl);
$httpStatus = (int) curl_getinfo($curl, CURLINFO_RESPONSE_CODE);
curl_close($curl);

if (!is_string($responseBody) || $httpStatus !== 200) {
  $respondError(502);
}

$payload = json_decode($responseBody, true);
$channel = $payload['items'][0] ?? null;
if (!is_array($channel)) {
  $respondError(502);
}

$statistics = $channel['statistics'] ?? [];
$subscriberCount = !empty($statistics['hiddenSubscriberCount'])
  ? null
  : (int) ($statistics['subscriberCount'] ?? 0);

echo json_encode([
  'title' => (string) ($channel['snippet']['title'] ?? ''),
  'description' => (string) ($channel['snippet']['description'] ?? ''),
  'subscriberCount' => $subscriberCount,
  'videoCount' => (int) ($statistics['videoCount'] ?? 0),
  'updatedAt' => gmdate(DATE_ATOM),
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
