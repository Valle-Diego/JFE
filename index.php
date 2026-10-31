<?php
$pageTitle = 'Joy Flute Ensemble - APS';
$activePage = 'home';
$basePath = './';
$missionItems = [
  ['title' => 'Collaborazione', 'body' => 'È un mondo musicale a sé stante che vogliamo condividere con tutti.'],
  ['title' => 'Imparare gli uni dagli altri', 'body' => 'Riuniamo le persone per crescere individualmente e insieme.'],
  ['title' => 'Viaggio di scoperta musicale', 'body' => 'Sviluppo musicale ottimale in un ambiente sicuro e stimolante.'],
  ['title' => 'La forma fisica e mentale', 'body' => 'Solo se tutto va bene, si può creare e fare della bella musica.'],
  ['title' => 'Esprimere e sfidare', 'body' => 'La sfida di sorprendere il pubblico con musica e performance.'],
  ['title' => 'Muoversi al passo con i tempi', 'body' => 'Mantenere ciò che è buono e adattare i programmi secondo le esigenze dei tempi.'],
];
require __DIR__ . '/includes/header.php';
?>
<main id="contenuto">
  <section class="hero">
    <div class="hero-bg-notes" aria-hidden="true"></div>
    <div class="hero-inner">
      <div class="hero-content">
        <p class="hero-pretitle">Associazione di Promozione Sociale</p>
        <h1 class="hero-title">Joy Flute Ensemble <em>- APS</em></h1>
        <div class="hero-desc">
          <p>Crediamo in una vivace comunità di flautisti in cui c'è spazio per l'ispirazione, lo sviluppo e la connessione.</p>
          <p>Il nostro motto è: <strong>divertiti e condividi la tua passione per il Flauto!</strong></p>
        </div>
        <div class="hero-actions">
          <a href="pages/ensemble/flautisti.php" class="btn btn-primary btn-lg">Scopri l'Ensemble</a>
          <a href="pages/eventi/prossimo.php" class="btn btn-ghost btn-lg">Prossimo Concerto</a>
        </div>
      </div>
      <div class="hero-visual">
        <div class="hero-logo-wrap">
          <div class="hero-logo-ring"></div>
          <div class="hero-logo-ring-2"></div>
          <img src="assets/logo.png" alt="Joy Flute Ensemble" class="hero-logo-img">
        </div>
      </div>
    </div>
  </section>
  <section class="section bg-cream" id="chi-siamo">
    <div class="container">
      <div class="about-grid">
        <div class="about-image-wrap reveal">
          <div class="about-image empty-image" aria-hidden="true"></div>
          <div class="about-image-badge">
            <strong>APS</strong>
          </div>
        </div>
        <div class="reveal">
          <p class="section-tag">Chi Siamo</p>
          <h2 class="section-title">Una comunità di flautisti</h2>
          <div class="divider"></div>
          <p>Joy Flute Ensemble - APS è un gruppo eterogeneo per età e livelli, nato dalla passione comune per il flauto. 
            L'obiettivo è affiancare e unire giovani talenti per far crescere la loro gioia e professionalità nel suonare.</p>
          <div class="home-about-actions">
            <a href="pages/chi-siamo.php" class="btn btn-primary">La nostra storia</a>
            <a href="pages/ensemble/flautisti.php" class="btn btn-outline">Conosci i flautisti</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section home-mission-section">
    <div class="container">
        <div class="text-center reveal home-mission-heading">
          <p class="section-tag">La nostra missione</p>
          <h2>Divertiti e condividi la tua passione per il Flauto!</h2>
        </div>
      <div class="features-grid">
        <?php foreach ($missionItems as $index => $item): ?>
          <article class="feature-item reveal">
            <div class="feature-icon" aria-hidden="true">
              <?= ['🎵','🌱','🤝','🎓','🎭','💜'][$index] ?>
            </div>
            <h3>
              <?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?>
            </h3>
            <p>
              <?= htmlspecialchars($item['body'], ENT_QUOTES, 'UTF-8') ?>
            </p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <section class="section bg-cream" id="eventi">
    <div class="container">
      <div class="home-events-heading">
        <div class="reveal">
          <p class="section-tag">Agenda</p>
          <h2>Eventi</h2><p class="content-notice content-notice--dark">Vi aspettiamo ai prossimi eventi.</p>
        </div>
        <a href="pages/eventi/passati.php" class="btn btn-outline reveal">Tutti gli eventi →</a>
      </div>
      <div class="events-grid">
        <article class="event-card card reveal">
          <div class="event-card-header">📅
            <span class="event-card-date">29 novembre 2026 · 16:00</span>
          </div>
          <div class="card-body">
            <h3>Concerto di Natale</h3>
            <p>Auditorium “Aldo Moro”, Viale Achille Varzi 13, Arese (MI). </p>
            <a href="pages/eventi/prossimo.php" class="btn btn-outline btn-sm">Dettagli</a>
          </div>
        </article>
      </div>
    </div>
  </section>
  <section class="section-sm home-cta-section">
    <div class="container">
      <div class="cta-banner reveal">
        <div class="cta-banner-text">
          <h2>Condividi la tua passione per il Flauto!</h2>
          <p>Per le modalità di adesione e sostegno, consulta le rispettive pagine.</p>
        </div>
        <div class="cta-banner-actions">
          <a href="pages/info/socio.php" class="btn btn-gold btn-lg">Diventa Socio</a>
          <a href="pages/donazioni/dona.php" class="btn btn-ghost btn-lg">Sostienici</a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
