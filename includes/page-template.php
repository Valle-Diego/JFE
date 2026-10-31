<?php
require __DIR__ . '/header.php';
$panelIcons = $panelIcons ?? ['♫', '♬'];
$pageIntro = $pageIntro ?? 'I contenuti specifici di questa pagina non sono presenti nella versione del sito di riferimento consultata.';
$contentPanels = $contentPanels ?? [
  ['title' => 'Da completare', 'body' => 'Aggiungi qui le informazioni aggiornate, i testi e gli eventuali collegamenti.'],
  ['title' => 'Materiali da inserire', 'body' => 'Aggiungi immagini, documenti o altri materiali dopo aver verificato che siano quelli corretti.'],
];
?>
<main id="contenuto">
  <div class="page-header">
    <div class="container">
      <p class="section-tag">
        <?= htmlspecialchars($sectionLabel ?? '', ENT_QUOTES, 'UTF-8') ?>
      </p>
      <h1>
        <?= htmlspecialchars($pageTitle ?? '', ENT_QUOTES, 'UTF-8') ?>
      </h1>
      <?php if (!empty($pageNotice)): ?>
        <p class="content-notice">
          <?= htmlspecialchars($pageNotice, ENT_QUOTES, 'UTF-8') ?>
        </p>
      <?php endif; ?>
    </div>
  </div>
  <section class="section bg-cream">
    <div class="container">
      <p class="section-intro">
        <?= htmlspecialchars($pageIntro, ENT_QUOTES, 'UTF-8') ?>
      </p>
      <div class="grid-2 content-panel-grid">
        <?php foreach ($contentPanels as $index => $panel): ?>
          <article class="card reveal">
            <div class="card-body">
              <div class="feature-icon" aria-hidden="true">
                <?= htmlspecialchars($panelIcons[$index] ?? '♫', ENT_QUOTES, 'UTF-8') ?>
              </div>
              <h2>
                <?= htmlspecialchars($panel['title'] ?? 'Da completare', ENT_QUOTES, 'UTF-8') ?>
              </h2>
              <?php if (!empty($panel['lead'])): ?>
                <p class="content-panel-lead">
                  <strong>
                    <?= htmlspecialchars($panel['lead'], ENT_QUOTES, 'UTF-8') ?>
                  </strong>
                </p>
              <?php endif; ?>
              <?php if (!empty($panel['items'])): ?>
                <ul class="content-list">
                  <?php foreach ($panel['items'] as $item): ?>
                    <li>
                      <?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8') ?>
                    </li>
                  <?php endforeach; ?>
                </ul>
              <?php elseif (!empty($panel['body'])): ?>
                <p>
                  <?= htmlspecialchars($panel['body'], ENT_QUOTES, 'UTF-8') ?>
                </p>
              <?php endif; ?>
              <?php if (!empty($panel['footer'])): ?>
                <p class="content-panel-footer">
                  <?= htmlspecialchars($panel['footer'], ENT_QUOTES, 'UTF-8') ?>
                </p>
              <?php endif; ?>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>
<?php require __DIR__ . '/footer.php'; ?>
