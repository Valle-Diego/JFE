<?php
$pageTitle = 'I Nostri Flautisti';
$sectionLabel = 'Ensemble';
$activePage = 'ensemble';
$basePath = '../../';
$pageNotice = 'Elenco riportato dal sito di riferimento per l\'anno accademico 2024: verificare i nominativi prima della pubblicazione definitiva.';
$flutists = [
  ['first' => 'Giulia', 'last' => 'Affinito'],
  ['first' => 'Nicola', 'last' => 'Affinito'],
  ['first' => 'Giulia', 'last' => 'Bersano'],
  ['first' => 'Rebecca', 'last' => 'Borghi'],
  ['first' => 'Matteo', 'last' => 'Gallanti'],
  ['first' => 'Alice', 'last' => 'Iovine'],
  ['first' => 'Demis', 'last' => 'Mangione'],
  ['first' => 'Mario', 'last' => 'Moretto'],
  ['first' => 'Alice', 'last' => 'Paglia'],
  ['first' => 'Fabio', 'last' => 'Crivellari'],
  ['first' => 'Aurora', 'last' => 'Succu'],
  ['first' => 'Diego', 'last' => 'Valle'],
  ['first' => 'Alice', 'last' => 'Vavassori'],
  ['first' => 'Beatrice', 'last' => 'Villa'],
  ['first' => 'Eleonora', 'last' => 'Villa'],
  ['first' => 'Mariagrazia', 'last' => 'Sferrazza'],
  ['first' => 'Laura', 'last' => 'Malinverno', 'title' => 'Prof.'],
  ['first' => 'Martino', 'last' => 'Pignatta', 'title' => 'Prof.'],
  ['first' => 'Alessandro', 'last' => 'Baglioni', 'title' => 'Prof.'],
  ['first' => 'Lorenzo', 'last' => 'Messina', 'title' => 'Prof.'],
  ['first' => 'Laura', 'last' => 'Bellini', 'title' => 'Prof.'],
  ['first' => 'Ileana', 'last' => 'De Santis', 'title' => 'Prof.'],
  ['first' => 'Ercolano', 'last' => 'Grazioli', 'title' => 'Prof.'],
  ['first' => 'Giada', 'last' => 'Guzzetti', 'title' => 'Prof.'],
  ['first' => 'Maurizio', 'last' => 'Guzzetti'],
];
$directors = [
  ['first' => 'Federico', 'last' => 'De Lauro'],
  ['first' => 'Donato', 'last' => 'Pierri'],
];
$otherMusicians = [
  ['first' => 'Annasofia', 'last' => 'Giudici', 'instrument' => 'Violoncello'],
  ['first' => 'Milo', 'last' => 'Costanzo', 'instrument' => 'Fagotto'],
];
$basePath = '../../';
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
      <p class="content-notice">
        <?= htmlspecialchars($pageNotice, ENT_QUOTES, 'UTF-8') ?>
      </p>
    </div>
  </div>

  <section class="section bg-cream">
    <div class="container">
      <div class="roster-section-heading">
        <p class="section-tag">Anno accademico 2024</p>
        <h2>Flautisti</h2>
        <p>Ogni scheda è pronta per accogliere la fotografia e la scuola del musicista.</p>
      </div>
      <div class="team-grid team-grid--roster">
        <?php foreach ($flutists as $person): ?>
          <?php $fullName = trim(($person['title'] ?? '') . ' ' . $person['first'] . ' ' . $person['last']); ?>
          <article class="team-card reveal">
            <div class="team-card-photo profile-photo-placeholder" role="img" aria-label="Spazio per la fotografia di <?= htmlspecialchars($fullName, ENT_QUOTES, 'UTF-8') ?>">
              <span class="profile-photo-icon" aria-hidden="true">📷</span>
              <span class="profile-photo-caption">Foto da inserire</span>
            </div>
            <div class="team-card-body">
              <p class="profile-field-label">Nome e cognome</p>
              <h3 class="team-card-name">
                <?= htmlspecialchars($fullName, ENT_QUOTES, 'UTF-8') ?>
              </h3>
              <p class="profile-school">
                <span class="profile-field-label">Scuola</span>
                <span class="profile-placeholder">Da inserire</span>
              </p>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section directors-section" id="direttori">
    <div class="container">
      <div class="roster-section-heading">
        <p class="section-tag">Direzione musicale</p>
        <h2>I Direttori</h2>
      </div>
      <div class="team-grid team-grid--directors">
        <?php foreach ($directors as $person): ?>
          <?php $fullName = $person['first'] . ' ' . $person['last']; ?>
          <article class="team-card reveal">
            <div class="team-card-photo profile-photo-placeholder" role="img" aria-label="Spazio per la fotografia di M° <?= htmlspecialchars($fullName, ENT_QUOTES, 'UTF-8') ?>">
              <span class="profile-photo-icon" aria-hidden="true">📷</span>
              <span class="profile-photo-caption">Foto da inserire</span>
            </div>
            <div class="team-card-body">
              <p class="team-card-role">Direttore</p>
              <h3 class="team-card-name">
                M° 
                <?= htmlspecialchars($fullName, ENT_QUOTES, 'UTF-8') ?>
              </h3>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section bg-cream other-musicians-section">
    <div class="container">
      <div class="roster-section-heading">
        <p class="section-tag">Ensemble</p>
        <h2>Altri musicisti</h2>
      </div>
      <div class="team-grid team-grid--other-musicians">
        <?php foreach ($otherMusicians as $person): ?>
          <?php $fullName = $person['first'] . ' ' . $person['last']; ?>
          <article class="team-card reveal">
            <div class="team-card-photo profile-photo-placeholder" role="img" aria-label="Spazio per la fotografia di <?= htmlspecialchars($fullName, ENT_QUOTES, 'UTF-8') ?>">
              <span class="profile-photo-icon" aria-hidden="true">📷</span>
              <span class="profile-photo-caption">Foto da inserire</span>
            </div>
            <div class="team-card-body">
              <p class="team-card-role">Altri musicisti</p>
              <h3 class="team-card-name">
                <?= htmlspecialchars($fullName, ENT_QUOTES, 'UTF-8') ?>
              </h3>
              <p class="profile-school">
                <span class="profile-field-label">Strumento</span>
                <span>
                  <?= htmlspecialchars($person['instrument'], ENT_QUOTES, 'UTF-8') ?>
                </span>
              </p>
              <p class="profile-school">
                <span class="profile-field-label">Scuola</span>
                <span class="profile-placeholder">Da inserire</span>
              </p>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>
<?php require dirname(__DIR__, 2) . '/includes/footer.php'; ?>
