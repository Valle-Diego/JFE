<?php
$pageTitle = 'Video';
$sectionLabel = 'Ensemble';
$activePage = 'ensemble';
$basePath = '../../';
$channelUrl = 'https://www.youtube.com/channel/UCoiLJ0_6B3rY2Cl3GgaNsiA';
$channelVideosUrl = $channelUrl . '/videos';
// YouTube's uploads playlist is the channel ID with "UC" replaced by "UU".
$uploadsPlaylistId = 'UUoiLJ0_6B3rY2Cl3GgaNsiA';
require dirname(__DIR__, 2) . '/includes/header.php';
?>
<main id="contenuto">
  <div class="page-header">
    <div class="container">
      <p class="section-tag">
        <?= htmlspecialchars($sectionLabel, ENT_QUOTES, 'UTF-8') ?>
      </p>
      <h1>
        <?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>
      </h1>
      <p class="content-notice">Guarda i concerti e le attività del Joy Flute Ensemble sul nostro canale YouTube.</p>
    </div>
  </div>
  <section class="section bg-cream">
    <div class="container">
      <div class="video-feature-grid">
        <div class="video-player-wrap">
          <h2>Gli ultimi video</h2>
          <div class="video-player-frame">
            <iframe
              src="https://www.youtube-nocookie.com/embed/videoseries?list=<?= htmlspecialchars($uploadsPlaylistId, ENT_QUOTES, 'UTF-8') ?>"
              title="Video recenti del Joy Flute Ensemble su YouTube"
              loading="lazy"
              referrerpolicy="strict-origin-when-cross-origin"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen>
            </iframe>
          </div>
          <p class="video-player-caption">Il player mostra i video pubblicati sul canale, a partire dai più recenti.</p>
        </div>
        <section class="youtube-channel-data" data-youtube-channel data-endpoint="<?= htmlspecialchars($basePath . 'api/youtube-channel.php', ENT_QUOTES, 'UTF-8') ?>" 
        aria-labelledby="youtube-channel-heading">
          <h2 id="youtube-channel-heading">Il canale in numeri</h2>
          <div class="youtube-channel-stats">
            <div>
              <strong data-channel-subscribers>—</strong>
              <span>Iscritti</span>
            </div>
            <div>
              <strong data-channel-videos>—</strong>
              <span>Video</span>
            </div>
          </div>
          <h3>Descrizione</h3>
          <p class="youtube-channel-description" data-channel-description>La descrizione verrà caricata dal canale.</p>
          <p class="youtube-channel-status" data-channel-status role="status" aria-live="polite">Caricamento dati del canale…</p>
        </section>
      </div>
      <a class="youtube-channel-poster" href="<?= htmlspecialchars($channelVideosUrl, ENT_QUOTES, 'UTF-8') ?>" 
      target="_blank" rel="noopener noreferrer" aria-label="Apri il canale YouTube Joy Flute Ensemble APS">
        <img src="<?= htmlspecialchars($basePath . 'assets/logo.png', ENT_QUOTES, 'UTF-8') ?>" alt="Logo Joy Flute Ensemble APS">
        <span class="poster-copy">
          <span class="poster-eyebrow">Seguici su YouTube</span>
          <strong>Joy Flute Ensemble APS</strong>
          <span class="poster-link-label">
            Visita il canale 
            <span aria-hidden="true">↗</span>
          </span>
        </span>
        <span class="poster-play" aria-hidden="true">
          <svg viewBox="0 0 24 24">
            <path fill="#ff0000" d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.6 12 3.6 12 3.6s-7.5 0-9.4.5A3 3 0 0 0 .5 6.2 31 31 0 0 0 0 
            12a31 31 0 0 0 .5 5.8 3 3 0 0 0 2.1 2.1c1.9.5 9.4.5 9.4.5s7.5 0 9.4-.5a3 3 0 0 0 2.1-2.1A31 31 0 0 0 24 12a31 31 0 0 0-.5-5.8Z"/>
            <path fill="#fff" d="m9.6 15.6V8.4l6.3 3.6-6.3 3.6Z"/>
          </svg>
        </span>
      </a>
    </div>
  </section>
</main>
<?php require dirname(__DIR__, 2) . '/includes/footer.php'; ?>
