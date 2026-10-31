<?php
$pageTitle = 'I Nostri Flautisti';
$sectionLabel = 'Ensemble';
$activePage = 'ensemble';
$basePath = '../../';
$pageNotice = 'Profili, fotografie e scuole dell\'anno accademico 2026:';
$flutists = [
  ['first' => 'Nicola', 'last' => 'Affinito', 'school' => ''],
  ['first' => 'Khadija', 'last' => 'Badran', 'school' => ''],
  ['first' => 'Giulia', 'last' => 'Bersano', 'school' => 'Liceo Artistico Lucio Fontana'],
  ['first' => 'Matilde', 'last' => 'Femiano', 'school' => ''],
  ['first' => 'Matteo', 'last' => 'Gallanti', 'school' => ''],
  ['first' => 'Alice', 'last' => 'Iovine', 'school' => ''],
  ['first' => 'Anna', 'last' => 'Irde', 'school' => ''],
  ['first' => 'Emma', 'last' => 'Leonello',],
  ['first' => 'Demis', 'last' => 'Mangione', 'school' => ''],
  ['first' => 'Mario', 'last' => 'Moretto', 'school' => ''],
  ['first' => 'Samanta', 'last' => 'Principe',],
  ['first' => 'Davide', 'last' => 'Rossetto', 'school' => ''],
  ['first' => 'Alessandro', 'last' => 'Russo', 'school' => ''],
  ['first' => 'Mariagrazia', 'last' => 'Sferrazza', 'school' => ''],
  ['first' => 'Aurora', 'last' => 'Succu', 'school' => ''],
  ['first' => 'Diego', 'last' => 'Valle', 'school' => 'ITT Informatico Stanislao Cannizzaro'],
];
$professors = [
  ['first' => 'Pippo', 'last' => 'Asta','title' => 'Prof.',],
  ['first' => 'Alessandro', 'last' => 'Baglioni','title' => 'Prof.',],
  ['first' => 'Ercolano', 'last' => 'Grazioli','title' => 'Prof.',],
  ['first' => 'Giada', 'last' => 'Guzzetti','title' => 'Prof.',],
  ['first' => 'Laura', 'last' => 'Malinverno','title' => 'Prof.',],
  ['first' => 'Lorenzo', 'last' => 'Messina','title' => 'Prof.',],
];
$directors = [
  ['first' => 'Federico', 'last' => 'De Lauro'],
  ['first' => 'Donato', 'last' => 'Pierri'],
];
$otherMusicians = [
  ['first' => 'Milo', 'last' => 'Costanzo', 'instrument' => 'Fagotto',],
  ['first' => 'Annasofia', 'last' => 'Giudici', 'instrument' => 'Violoncello', 'school' => ''],
  ['first' => 'Roberto', 'last' => 'Principe','instrument' => 'Batteria',],
  ['first' => 'Valeria', 'last' => 'Villa', 'instrument' => 'Oboe',],
];
$windrose = [
  ['first' => 'Letizia', 'last' => 'Caspani', 'title' => 'M°',],
  ['first' => 'Marta', 'last' => 'D\'Aleo', 'title' => 'M°',],
  ['first' => 'Giacomo', 'last' => 'Genovese', 'title' => 'M°',],
];
require dirname(__DIR__, 2) . '/includes/header.php';
?>
<main id="contenuto">
  <div class="page-header">
    <div class="container">
      <p class="section-tag"><?= htmlspecialchars($sectionLabel, ENT_QUOTES, 'UTF-8') ?></p>
      <h1><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></h1>
      <p class="content-notice"><?= htmlspecialchars($pageNotice, ENT_QUOTES, 'UTF-8') ?></p>
    </div>
  </div>

  <section class="section bg-cream" id="flautisti">
    <div class="container">
      <div class="roster-section-heading">
        <p class="section-tag">Anno accademico 2026</p>
        <h2>Flautisti</h2>
        <p>I nostri musicisti, studenti e liberi.</p>
      </div>
      <div class="team-grid team-grid--roster">
        <?php foreach ($flutists as $person): ?>
          <?php $fullName = $person['first'] . ' ' . $person['last']; ?>
          <article class="team-card reveal">
            <div class="team-card-photo profile-photo-placeholder" role="img" aria-label="Spazio per la fotografia di <?= htmlspecialchars($fullName, ENT_QUOTES, 'UTF-8') ?>">
              <span class="profile-photo-icon" aria-hidden="true">📷</span>
              <span class="profile-photo-caption">Foto da inserire</span>
            </div>
            <div class="team-card-body">
              <p class="profile-field-label">Nome e cognome</p>
              <h3 class="team-card-name"><?= htmlspecialchars($fullName, ENT_QUOTES, 'UTF-8') ?></h3>
              <p class="profile-school">
                <span class="profile-field-label">Scuola</span>
                <?php if ($person['school'] !== ''): ?>
                  <span><?= htmlspecialchars($person['school'], ENT_QUOTES, 'UTF-8') ?></span>
                <?php else: ?>
                  <span class="profile-placeholder">Da inserire</span>
                <?php endif; ?>
              </p>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section professors-section" id="professori">
    <div class="container">
      <div class="roster-section-heading">
        <p class="section-tag">Docenti</p>
        <h2>I Professori</h2>
        <p>Sezione separata dai flautisti, con spazio per la fotografia e la scuola di appartenenza.</p>
      </div>
      <div class="team-grid team-grid--professors">
        <?php foreach ($professors as $person): ?>
          <?php $fullName = $person['first'] . ' ' . $person['last']; ?>
          <article class="team-card reveal">
            <div class="team-card-photo profile-photo-placeholder" role="img" aria-label="Spazio per la fotografia di Prof. <?= htmlspecialchars($fullName, ENT_QUOTES, 'UTF-8') ?>">
              <span class="profile-photo-icon" aria-hidden="true">📷</span>
              <span class="profile-photo-caption">Foto da inserire</span>
            </div>
            <div class="team-card-body">
              <p class="team-card-role">Professore</p>
              <h3 class="team-card-name">Prof. <?= htmlspecialchars($fullName, ENT_QUOTES, 'UTF-8') ?></h3>
              <p class="profile-school">
                <span class="profile-field-label">Scuola</span>
                <?php if ($person['school'] !== ''): ?>
                  <span><?= htmlspecialchars($person['school'], ENT_QUOTES, 'UTF-8') ?></span>
                <?php else: ?>
                  <span class="profile-placeholder">Da inserire</span>
                <?php endif; ?>
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
              <h3 class="team-card-name">M° <?= htmlspecialchars($fullName, ENT_QUOTES, 'UTF-8') ?></h3>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section bg-cream other-musicians-section" id="altri-musicisti">
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
              <h3 class="team-card-name"><?= htmlspecialchars($fullName, ENT_QUOTES, 'UTF-8') ?></h3>
              <p class="profile-school">
                <span class="profile-field-label">Strumento</span>
                <span><?= htmlspecialchars($person['instrument'], ENT_QUOTES, 'UTF-8') ?></span>
              </p>
              <p class="profile-school">
                <span class="profile-field-label">Scuola</span>
                <?php if ($person['school'] !== ''): ?>
                  <span><?= htmlspecialchars($person['school'], ENT_QUOTES, 'UTF-8') ?></span>
                <?php else: ?>
                  <span class="profile-placeholder">Da inserire</span>
                <?php endif; ?>
              </p>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section affiliated-ensemble-section" id="windrose">
    <div class="container">
      <div class="roster-section-heading">
        <p class="section-tag">Affiliati</p>
        <h2>Wind Rose Flute Quartet</h2>
      </div>
      <div class="team-grid team-grid--windrose">
        <?php foreach ($windrose as $person): ?>
          <?php $fullName = trim(($person['title'] ?? '') . ' ' . $person['first'] . ' ' . $person['last']); ?>
          <article class="team-card reveal">
            <div class="team-card-photo profile-photo-placeholder" role="img" aria-label="Spazio per la fotografia di <?= htmlspecialchars($fullName, ENT_QUOTES, 'UTF-8') ?> di Windrose">
              <span class="profile-photo-icon" aria-hidden="true">📷</span>
              <span class="profile-photo-caption">Foto da inserire</span>
            </div>
            <div class="team-card-body">
              <p class="team-card-role">Componente Wind Rose Flute Quartet</p>
              <h3 class="team-card-name"><?= htmlspecialchars($fullName, ENT_QUOTES, 'UTF-8') ?></h3>
              </p>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>
<?php require dirname(__DIR__, 2) . '/includes/footer.php'; ?>
