<?php
$pageTitle = 'Masterclass di Flauto - 2024';
$sectionLabel = 'Evento passato';
$activePage = 'eventi';
$basePath = '../../';
$collinoBio = 'Flautista e direttore d\'orchestra, terminati gli studi al Conservatorio di Milano con M. Kessick, G. Cambursano, G. Garbarino ed E. Fadini,
 suona in Italia, Germania, Francia, Svizzera e Romania. A 18 anni debutta come solista con l\'Orchestra da Camera Ambrosiana diretta da Daniele Gatti; 
 collabora poi come primo flauto con il Teatro di Alessandria, il Teatro Massimo di Palermo, il Teatro alla Scala e i Pomeriggi Musicali di Milano.
 \n\nInvitato dalle maggiori istituzioni concertistiche, ha suonato nelle principali sale e per varie associazioni musicali europee. 
 Ha lavorato con orchestre come Orchester Pro-Musica, Bad Camberg Kammerorchester, Les Solistes de Versailles, Accademia Filarmonica di Milano, 
 Ensemble Garbarino e Orchestra RAI di Milano, e con solisti come A. Díaz, G. Carmignola, S. Perticaroli, i Solisti RAI di Roma, S. Gazzelloni, 
 R. Fabbriciani, M. Kessick e C. Chailly. Ha collaborato con M. Marvulli, F. Rossi e M. Frischenschlager. Ha registrato per la RAI e la Radio Svizzera 
 e inciso LP e CD per Rusty Records e Tirreno.\n\nDal 1986 tiene masterclass. Nel 2008 ha tenuto corsi e conferenze negli Stati Uniti, 
 tra cui il Summer Chamber Music Workshop alla Manhattan School of Music di New York e allo Snow College di Ephraim, Utah. Membro di giuria in concorsi, 
 è stato docente di flauto, musica d\'insieme per fiati ed esercitazioni orchestrali nei Conservatori di Vibo Valentia, Fermo, Como, Messina, Trieste e Venezia. 
 Nel 1992 si è classificato tra i primi al Concorso Nazionale per cattedre di flauto nei Conservatori. Dal 2003 è docente al Conservatorio di Milano.';
$photoGroups = [
  [
    'title' => 'Momenti della Masterclass di Flauto',
    'photos' => [
      [
        'file' => 'confronto-tra-maestri.jpeg', 
        'alt' => 'Confronto tra i maestri durante la masterclass', 
        'caption' => 'Confronto tra maestri'
      ],
      [
        'file' => 'prova-insieme-federico.jpeg', 
        'alt' => 'M° Federico De Lauro durante una prova d\'insieme', 
        'caption' => 'M° Federico De Lauro · Prova d\'insieme'
      ],
      [
        'file' => 'prova-insieme-collino.jpeg', 
        'alt' => 'M° Diego Collino durante una prova d\'insieme', 
        'caption' => 'M° Diego Collino · Prova d\'insieme'
      ],
    ],
  ],
  [
    'title' => 'Lezioni e lavoro d\'insieme',
    'photos' => [
      [
        'file' => 'birmingham-tango.JPG', 
        'alt' => 'La masterclass lavora sul brano The Birmingham Tango', 
        'caption' => 'The Birmingham Tango · Studio d\'insieme', 
        'size' => 'photo-slot--wide'
      ],
      [
        'file' => 'suoni-armonici.jpg', 
        'alt' => 'Lezione su suoni armonici e intonazione', 
        'caption' => 'Suoni armonici e intonazione · Come emettere il suono', 
        'size' => 'photo-slot--wide'
      ],
    ],
  ],
  [
    'title' => 'Prova a sezioni · Sala Teatro 2',
    'photos' => [
      [
        'file' => 'prova-sezioni-01.JPG', 
        'alt' => 'Prova a sezioni nella Sala Teatro 2', 
        'caption' => 'M° Federico De Lauro · Sala Teatro 2, prova a sezioni', 
        'size' => 'photo-slot--wide'
      ],
      [
        'file' => 'prova-sezioni-02.JPG', 
        'alt' => 'Musicisti durante la prova a sezioni nella Sala Teatro 2', 
        'caption' => 'M° Federico De Lauro · Sala Teatro 2, prova a sezioni', 
        'size' => 'photo-slot--wide'
      ],
    ],
  ],
  [
    'title' => 'Masterclass 2024',
    'photos' => [
      [
        'file' => 'masterclass-2024-01.JPG', 
        'alt' => 'Un momento della Masterclass di Flauto 2024', 
        'caption' => 'M° Diego Collino · Studio d\'insieme',
        'size' => 'photo-slot--wide'
      ],
      [
        'file' => 'masterclass-2024-02.JPG', 
        'alt' => 'Un momento della Masterclass di Flauto 2024', 
        'caption' => 'M° Diego Collino · Studio d\'insieme',
        'size' => 'photo-slot--wide'
      ],
      [
        'file' => 'masterclass-2024-03.jpg', 
        'alt' => 'I partecipanti alla Masterclass di Flauto 2024',
        'caption' => 'M° Diego Collino · Concerto',
      ],
      [
        'file' => 'masterclass-2024-04.jpeg', 
        'alt' => 'I partecipanti alla Masterclass di Flauto 2024',
        'caption' => 'I maestri insieme',
      ],
      [
        'file' => 'masterclass-2024-05.JPG', 
        'alt' => 'Un momento della Masterclass di Flauto 2024', 
        'caption' => 'Il gruppo post-concerto',
        'size' => 'photo-slot--wide'
      ],
    ],
  ],
];
$masterclassVideos = [
  ['id' => 'KM5J8DFacKM', 'description' => 'Video Concerto', ''],
  ['id' => 'yBO19tBO9oM', 'description' => 'Video Concerto'],
  ['id' => 'Po1xMpUtJAc', 'description' => 'Video di studio'],
  ['id' => 'VDg5aTqyKNE', 'description' => 'Video Concerto'],
];
require dirname(__DIR__, 2) . '/includes/header.php';
?>
<main id="contenuto">
  <div class="page-header">
    <div class="container">
      <p class="section-tag"><?= htmlspecialchars($sectionLabel, ENT_QUOTES, 'UTF-8') ?></p>
      <h1><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></h1>
      <p class="content-notice">Prima edizione · Aprile 2024 · In collaborazione con ANBIMA Lombardia</p>
    </div>
  </div>

  <section class="section bg-cream masterclass-memory-section">
    <div class="container">
      <div class="masterclass-event-intro reveal">
        <p class="section-tag">Un evento unico, già concluso</p>
        <h2>Una giornata di studio e musica</h2>
        <p>La prima Masterclass di Flauto del Joy Flute Ensemble - APS si è svolta nell'aprile 2024 in collaborazione con ANBIMA Lombardia.</p>
      </div>

      <article class="masterclass-instructor-card card reveal">
        <img src="<?= htmlspecialchars($basePath . 'assets/masterclass-2024/diego-collino.jpg', ENT_QUOTES, 'UTF-8') ?>" 
        alt="M° Diego Collino, docente della Masterclass" class="masterclass-instructor-photo">
        <div class="masterclass-instructor-copy">
          <p class="section-tag">Docente</p>
          <h2>M° Diego Collino</h2>
          <p class="masterclass-instructor-role">Conservatorio di Musica “Giuseppe Verdi” di Milano</p>
          <div class="masterclass-biography"><?= nl2br(htmlspecialchars(str_replace('\\n\\n', "\n\n", $collinoBio), ENT_QUOTES, 'UTF-8')) ?></div>
        </div>
      </article>

      <div class="masterclass-guides-grid">
        <article class="masterclass-guide card reveal">
          <p class="section-tag">Joy Flute Ensemble - APS</p>
          <h3>M° Donato Pierri</h3>
          <p>Presidente e fondatore del Joy Flute Ensemble - APS</p>
        </article>
        <article class="masterclass-guide card reveal">
          <p class="section-tag">Joy Flute Ensemble - APS</p>
          <h3>M° Federico De Lauro</h3>
          <p>Pianista e direttore del Joy Flute Ensemble - APS</p>
        </article>
      </div>

      <div class="masterclass-gallery-heading">
        <p class="section-tag">Il ricordo dell'incontro</p>
        <h2>Fotografie</h2>
      </div>
      <?php foreach ($photoGroups as $groupIndex => $group): ?>
        <section class="masterclass-photo-group" aria-labelledby="masterclass-gallery-<?= $groupIndex ?>">
          <h3 id="masterclass-gallery-<?= $groupIndex ?>">
            <?= htmlspecialchars($group['title'], ENT_QUOTES, 'UTF-8') ?>
          </h3>
          <div class="photo-gallery-grid masterclass-photo-grid<?= count($group['photos']) === 3 ? ' masterclass-photo-grid--three' : '' ?>">
            <?php foreach ($group['photos'] as $photo): ?>
              <figure class="photo-slot<?= !empty($photo['size']) ? ' ' . htmlspecialchars($photo['size'], ENT_QUOTES, 'UTF-8') : '' ?>">
                <div class="photo-slot-image">
                  <a class="masterclass-photo-link" href="<?= htmlspecialchars($basePath . 'assets/masterclass-2024/' . $photo['file'], ENT_QUOTES, 'UTF-8') ?>">
                    <img class="masterclass-photo" src="<?= htmlspecialchars($basePath . 'assets/masterclass-2024/' . $photo['file'], ENT_QUOTES, 'UTF-8') ?>" 
                    alt="<?= htmlspecialchars($photo['alt'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
                  </a>
                </div>
                <figcaption class="photo-slot-caption<?= empty($photo['caption']) ? ' photo-slot-caption--empty' : '' ?>">
                  <?php if (!empty($photo['caption'])): ?>
                    <span>
                      <?= htmlspecialchars($photo['caption'], ENT_QUOTES, 'UTF-8') ?>
                    </span>
                  <?php else: ?>
                    <span class="photo-caption-space" aria-hidden="true"></span>
                  <?php endif; ?>
                </figcaption>
              </figure>
            <?php endforeach; ?>
          </div>
        </section>
      <?php endforeach; ?>

      <section class="masterclass-final-video" aria-labelledby="masterclass-video-title">
        <p class="section-tag">Masterclass 2024</p>
        <h2 id="masterclass-video-title">Video della Masterclass</h2>
        <div class="masterclass-video-grid">
          <?php foreach ($masterclassVideos as $videoIndex => $video): ?>
            <article class="masterclass-video-card">
              <div class="masterclass-video-frame">
                <iframe src="https://www.youtube-nocookie.com/embed/<?= htmlspecialchars($video['id'], ENT_QUOTES, 'UTF-8') ?>" title="Video <?= $videoIndex + 1 ?> 
                  della Masterclass 2024" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" allow="accelerometer; autoplay; clipboard-write; 
                  encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                </iframe>
              </div>
              <div class="masterclass-video-description<?= $video['description'] === '' ? ' masterclass-video-description--empty' : '' ?>">
                <?= htmlspecialchars($video['description'], ENT_QUOTES, 'UTF-8') ?>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </section>
    </div>
  </section>
</main>
<?php require dirname(__DIR__, 2) . '/includes/footer.php'; ?>
