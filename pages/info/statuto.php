<?php
$pageTitle = 'Statuto';
$sectionLabel = 'Informazioni';
$activePage = 'info';
$basePath = '../../';
require dirname(__DIR__, 2) . '/includes/header.php';
$statuteUrl = $basePath . 'assets/documenti/statuto-joy-flute-ensemble-aps-2026.pdf';
?>
<main id="contenuto">
  <div class="page-header">
    <div class="container">
      <p class="section-tag"><?= htmlspecialchars($sectionLabel, ENT_QUOTES, 'UTF-8') ?></p>
      <h1><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></h1>
      <p class="content-notice">Statuto Joy Flute Ensemble APS · 2026</p>
    </div>
  </div>

  <section class="section bg-cream">
    <div class="container statute-container">
      <div class="statute-heading">
        <div>
          <p class="section-tag">Documento ufficiale</p>
          <h2>Statuto 2026</h2>
        </div>
        <a class="btn btn-primary" href="<?= htmlspecialchars($statuteUrl, ENT_QUOTES, 'UTF-8') ?>" download="Statuto-Joy-Flute-Ensemble-APS-2026.pdf">Scarica il PDF</a>
      </div>
      <div class="statute-viewer">
        <iframe src="<?= htmlspecialchars($statuteUrl, ENT_QUOTES, 'UTF-8') ?>#view=FitH" title="Statuto Joy Flute Ensemble APS 2026"></iframe>
      </div>
      <p class="statute-fallback">Se il documento non viene visualizzato qui, <a href="<?= htmlspecialchars($statuteUrl, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener">aprilo in una nuova scheda</a> oppure scaricalo con il pulsante.</p>
    </div>
  </section>
</main>
<?php require dirname(__DIR__, 2) . '/includes/footer.php'; ?>
