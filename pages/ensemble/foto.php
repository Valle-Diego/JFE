<?php
$pageTitle = 'Foto Ricordo';
$sectionLabel = 'Ensemble';
$activePage = 'ensemble';
$basePath = '../../';
$years = range(2026, 2016);
$photoSizes = ['photo-slot--wide', 'photo-slot--tall', 'photo-slot--standard', 'photo-slot--standard'];
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
      <p class="content-notice">Una raccolta di immagini da completare con i ricordi del Joy Flute Ensemble.</p>
    </div>
  </div>

  <nav class="photo-year-nav" aria-label="Vai all'anno">
    <div class="container photo-year-nav-inner">
      <?php foreach ($years as $year): ?>
        <a href="#anno-<?= $year ?>">
          <?= $year ?>
        </a>
      <?php endforeach; ?>
    </div>
  </nav>

  <?php foreach ($years as $year): ?>
    <section class="section photo-year-section<?= $year % 2 === 0 ? ' bg-cream' : '' ?>" id="anno-<?= $year ?>">
      <div class="container">
        <div class="photo-year-heading">
          <p class="section-tag">Archivio fotografico</p>
          <h2>
            <?= $year ?>
          </h2>
          <?php if ($year === 2026): ?>
            <p class="photo-year-notice">Anno in corso: la raccolta verrà aggiornata durante l'anno.</p>
          <?php endif; ?>
        </div>

        <?php foreach (['Primo concerto', 'Secondo concerto', 'Attività extra'] as $index => $albumTitle): ?>
          <section class="photo-album reveal" aria-labelledby="album-<?= $year ?>-<?= $index ?>">
            <h3 id="album-<?= $year ?>-<?= $index ?>">
              <?= htmlspecialchars($albumTitle, ENT_QUOTES, 'UTF-8') ?>
            </h3>
            <div class="photo-gallery-grid">
              <?php foreach ($photoSizes as $slot => $sizeClass): ?>
                <div class="photo-slot <?= $sizeClass ?>">
                  <div class="photo-slot-image" role="img" aria-label="Spazio per una foto: <?= htmlspecialchars($albumTitle, ENT_QUOTES, 'UTF-8') ?>, 
                  <?= $year ?>, immagine <?= $slot + 1 ?>">
                    <span class="photo-slot-icon" aria-hidden="true">+</span>
                    <span>Foto da inserire</span>
                  </div>
                  <div class="photo-slot-caption">
                    <span class="photo-caption-space" aria-hidden="true"></span>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </section>
        <?php endforeach; ?>
      </div>
    </section>
  <?php endforeach; ?>
</main>
<?php require dirname(__DIR__, 2) . '/includes/footer.php'; ?>
