<?php
$base = isset($basePath) ? $basePath : './';
$active = isset($activePage) ? $activePage : '';
$href = static fn(string $path): string => htmlspecialchars($base . ltrim($path, '/'), ENT_QUOTES, 'UTF-8');
$isCurrent = static fn(string $key): string => $active === $key ? ' active' : '';
?>
<!doctype html>
<html lang="it">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#2a2360">
  <title>
    <?= htmlspecialchars($pageTitle ?? 'Joy Flute Ensemble - APS', ENT_QUOTES, 'UTF-8') ?>
  </title>
  <link rel="icon" href="<?= $href('assets/logo.png') ?>" type="image/png">
  <link rel="stylesheet" href="<?= $href('css/tokens.css') ?>">
  <link rel="stylesheet" href="<?= $href('css/base.css') ?>">
  <link rel="stylesheet" href="<?= $href('css/header.css') ?>?v=<?= filemtime(dirname(__DIR__) . '/css/header.css') ?>">
  <link rel="stylesheet" href="<?= $href('css/footer.css') ?>">
  <link rel="stylesheet" href="<?= $href('css/home.css') ?>">
  <link rel="stylesheet" href="<?= $href('css/pages.css') ?>?v=<?= filemtime(dirname(__DIR__) . '/css/pages.css') ?>">
  <link rel="stylesheet" href="<?= $href('css/style.css') ?>">
  <script defer src="<?= $href('js/site.js') ?>?v=<?= filemtime(dirname(__DIR__) . '/js/site.js') ?>"></script>
</head>
<body>
<div class="topbar">
  <div class="topbar-inner">
    <div class="topbar-left">
      <a href="mailto:joy.flute.ensemble@gmail.com">joy.flute.ensemble@gmail.com</a>
      <span class="topbar-sep">·</span>
      <span>Garbagnate Milanese (MI)</span>
    </div>
    <nav class="topbar-social" aria-label="Seguici sui social">
      <a class="social-icon" href="https://www.youtube.com/channel/UCoiLJ0_6B3rY2Cl3GgaNsiA" target="_blank" rel="noopener noreferrer" aria-label="YouTube Joy Flute Ensemble APS">
        <svg viewBox="0 0 24 24" aria-hidden="true">
          <path d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.6 12 3.6 12 3.6s-7.5 0-9.4.5A3 3 0 0 0 .5 6.2 31 31 0 0 0 0 
          12a31 31 0 0 0 .5 5.8 3 3 0 0 0 2.1 2.1c1.9.5 9.4.5 9.4.5s7.5 0 9.4-.5a3 3 0 0 0 2.1-2.1A31 31 0 0 0 24 12a31 31 0 0 0-.5-5.8ZM9.6 15.6V8.4l6.3 3.6-6.3 3.6Z"/>
        </svg>
      </a>
      <a class="social-icon" href="https://www.instagram.com/joyfluteensemble_aps/" target="_blank" rel="noopener noreferrer" aria-label="Instagram Joy Flute Ensemble APS">
        <svg viewBox="0 0 24 24" aria-hidden="true">
          <path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5Zm0 2.2A2.8 2.8 0 0 0 4.2 7v10A2.8 2.8 0 0 0 7 
          19.8h10a2.8 2.8 0 0 0 2.8-2.8V7A2.8 2.8 0 0 0 17 4.2H7Zm5 3.1a4.7 4.7 0 1 1 0 9.4 4.7 4.7 0 0 1 0-9.4Zm0 2.2a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 
          0-5Zm5.1-3.5a1.1 1.1 0 1 1 0 2.2 1.1 1.1 0 0 1 0-2.2Z"/>
        </svg>
      </a>
      <a class="social-icon" href="https://www.facebook.com/people/Joy-Flute-Ensemble-APS/100063625676238/" 
      target="_blank" rel="noopener noreferrer" aria-label="Facebook Joy Flute Ensemble APS">
        <svg viewBox="0 0 24 24" aria-hidden="true">
          <path d="M13.5 21v-8h2.7l.4-3.1h-3.1v-2c0-.9.3-1.5 1.6-1.5h1.7V3.6c-.3 0-1.3-.1-2.5-.1-2.5 0-4.2 1.5-4.2 4.3v2.1H7.3V13h2.8v8A10 10 0 1 1 13.5 21Z"/>
        </svg>
      </a>
    </nav>
  </div>
</div>
<header class="header">
  <div class="header-inner">
    <a href="<?= $href('index.php') ?>" class="logo" aria-label="Joy Flute Ensemble — Home">
      <img src="<?= $href('assets/logo.png') ?>" alt="" class="logo-img">
      <span class="logo-text-wrap">
        <span class="logo-name">Joy Flute Ensemble</span>
        <span class="logo-tagline">Orchestra di Flauto Traverso · APS</span>
      </span>
    </a>
    <nav class="nav" aria-label="Navigazione principale">
      <ul class="nav-list">
        <li class="nav-item">
          <a href="<?= $href('index.php') ?>" class="nav-link<?= $isCurrent('home') ?>">Home</a>
        </li>
        <li class="nav-item">
          <a href="<?= $href('pages/chi-siamo.php') ?>" class="nav-link<?= $isCurrent('chi-siamo') ?>">Chi Siamo</a>
        </li>
        <li class="nav-item">
          <a href="<?= $href('pages/ensemble/flautisti.php') ?>" class="nav-link<?= $isCurrent('ensemble') ?>">Ensemble 
            <svg class="chevron" viewBox="0 0 12 8" aria-hidden="true">
              <path d="M1 1l5 5 5-5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
          <div class="dropdown">
            <a href="<?= $href('pages/ensemble/flautisti.php') ?>">
              <span class="d-icon">🎵</span>
              I Nostri Flautisti
            </a>
            <a href="<?= $href('pages/ensemble/foto.php') ?>">
              <span class="d-icon">📷</span>
              Foto Ricordo
            </a>
            <a href="<?= $href('pages/ensemble/video.php') ?>">
              <span class="d-icon">▶️</span>
              Video
            </a>
          </div>
        </li>
        <li class="nav-item">
          <a href="<?= $href('pages/eventi/prossimo.php') ?>" class="nav-link<?= $isCurrent('eventi') ?>">Eventi 
            <svg class="chevron" viewBox="0 0 12 8" aria-hidden="true">
              <path d="M1 1l5 5 5-5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
          <div class="dropdown">
            <a href="<?= $href('pages/eventi/masterclass.php') ?>">
              <span class="d-icon">🎓</span>
              Masterclass
            </a>
            <a href="<?= $href('pages/eventi/passati.php') ?>">
              <span class="d-icon">📅</span>
              Eventi Passati
            </a>
            <a href="<?= $href('pages/eventi/prossimo.php') ?>">
              <span class="d-icon">🔔</span>
              Prossimo Concerto
            </a>
          </div>
        </li>
        <li class="nav-item">
          <a href="<?= $href('pages/risorse/repertorio.php') ?>" class="nav-link<?= $isCurrent('risorse') ?>">Risorse e Pubblicazioni 
            <svg class="chevron" viewBox="0 0 12 8" aria-hidden="true">
              <path d="M1 1l5 5 5-5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
          <div class="dropdown">
            <a href="<?= $href('pages/risorse/edizioni.php') ?>">
              <span class="d-icon">🎼</span>
              Edizioni Musicali
            </a>
            <a href="<?= $href('pages/risorse/flauti-acquisto.php') ?>">
              <span class="d-icon">🛒</span>
              Flauti Acquisto
            </a>
            <a href="<?= $href('pages/risorse/repertorio.php') ?>">
              <span class="d-icon">📖</span>
              Repertorio
            </a>
            <a href="<?= $href('pages/risorse/partiture.php') ?>">
              <span class="d-icon">📄</span>
              Nostre Partiture
            </a>
            <a href="<?= $href('pages/risorse/usati.php') ?>">
              <span class="d-icon">♻️</span>
              Flauti & Accessori Usati
            </a>
            <a href="<?= $href('pages/biblioteca.php') ?>">
              <span class="d-icon">📚</span>
              Biblioteca JFE-APS
            </a>
          </div>
        </li>
        <li class="nav-item">
          <a href="<?= $href('pages/info/contatti.php') ?>" class="nav-link<?= $isCurrent('info') ?>">Informazioni varie 
            <svg class="chevron" viewBox="0 0 12 8" aria-hidden="true">
              <path d="M1 1l5 5 5-5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
          <div class="dropdown">
            <a href="<?= $href('pages/info/bilanci.php') ?>">
              <span class="d-icon">📋</span>
              Bilanci & Regolamenti
            </a>
            <a href="<?= $href('pages/info/contatti.php') ?>">
              <span class="d-icon">📬</span>
              Contatti
            </a>
            <a href="<?= $href('pages/info/socio.php') ?>">
              <span class="d-icon">🎓</span>
              Diventa Socio JFE-APS
            </a>
            <a href="<?= $href('pages/info/statuto.php') ?>">
              <span class="d-icon">📜</span>
              Statuto
            </a>
          </div>
        </li>
        <li class="nav-item">
          <a href="<?= $href('pages/donazioni/dona.php') ?>" class="nav-link<?= $isCurrent('donazioni') ?>">Donazioni 
            <svg class="chevron" viewBox="0 0 12 8" aria-hidden="true">
              <path d="M1 1l5 5 5-5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
          <div class="dropdown">
            <a href="<?= $href('pages/donazioni/dona.php') ?>">
              <span class="d-icon">💜</span>
              Fai una Donazione
            </a>
            <a href="<?= $href('pages/donazioni/sostenitori.php') ?>">
              <span class="d-icon">⭐</span>
              I Nostri Sostenitori
            </a>
          </div>
        </li>
      </ul>
    </nav>
    <a href="<?= $href('pages/info/contatti.php') ?>" class="btn btn-primary btn-sm header-cta">Contattaci</a>
    <button class="hamburger" id="hamburger" type="button" aria-label="Apri menu" aria-expanded="false" aria-controls="navPanel"><span></span><span></span><span></span></button>
  </div>
</header>
<div class="nav-drawer" id="navDrawer">
  <div class="nav-panel" id="navPanel">
    <div class="nav-panel-header">
      <a href="<?= $href('index.php') ?>" class="logo">
        <img src="<?= $href('assets/logo.png') ?>" class="logo-img" alt="">
        <span class="logo-text-wrap">
          <span class="logo-name">Joy Flute Ensemble</span>
          <span class="logo-tagline">APS</span>
        </span>
      </a>
      <button class="nav-close" id="navClose" type="button" aria-label="Chiudi menu">✕</button>
    </div>
    <ul class="nav-mobile-list">
      <li>
        <a href="<?= $href('index.php') ?>">Home</a>
      </li>
      <li>
        <a href="<?= $href('pages/chi-siamo.php') ?>">Chi Siamo</a>
      </li>
      <li>
        <button class="mob-accordion-trigger" type="button" aria-expanded="false">Ensemble 
          <span class="mob-chevron">▾</span>
        </button>
        <div class="mob-accordion-body">
          <a href="<?= $href('pages/ensemble/flautisti.php') ?>">🎵 I Nostri Flautisti</a>
          <a href="<?= $href('pages/ensemble/foto.php') ?>">📷 Foto Ricordo</a>
          <a href="<?= $href('pages/ensemble/video.php') ?>">▶️ Video</a>
        </div>
      </li>
      <li>
        <button class="mob-accordion-trigger" type="button" aria-expanded="false">Eventi 
          <span class="mob-chevron">▾</span>
        </button>
        <div class="mob-accordion-body">
          <a href="<?= $href('pages/eventi/masterclass.php') ?>">🎓 Masterclass</a>
          <a href="<?= $href('pages/eventi/passati.php') ?>">📅 Eventi Passati</a>
          <a href="<?= $href('pages/eventi/prossimo.php') ?>">🔔 Prossimo Concerto</a>
        </div>
      </li>
      <li>
        <button class="mob-accordion-trigger" type="button" aria-expanded="false">Risorse 
          <span class="mob-chevron">▾</span>
        </button>
        <div class="mob-accordion-body">
          <a href="<?= $href('pages/risorse/edizioni.php') ?>">🎼 Edizioni Musicali</a>
          <a href="<?= $href('pages/risorse/flauti-acquisto.php') ?>">🛒 Flauti Acquisto</a>
          <a href="<?= $href('pages/risorse/repertorio.php') ?>">📖 Repertorio</a>
          <a href="<?= $href('pages/risorse/partiture.php') ?>">📄 Nostre Partiture</a>
          <a href="<?= $href('pages/risorse/usati.php') ?>">♻️ Usati</a>
          <a href="<?= $href('pages/biblioteca.php') ?>">📚 Biblioteca</a>
        </div>
      </li>
      <li>
        <button class="mob-accordion-trigger" type="button" aria-expanded="false">Informazioni 
          <span class="mob-chevron">▾</span>
        </button>
        <div class="mob-accordion-body">
          <a href="<?= $href('pages/info/bilanci.php') ?>">📋 Bilanci</a>
          <a href="<?= $href('pages/info/contatti.php') ?>">📬 Contatti</a>
          <a href="<?= $href('pages/info/socio.php') ?>">🎓 Diventa Socio</a>
          <a href="<?= $href('pages/info/statuto.php') ?>">📜 Statuto</a>
        </div>
      </li>
      <li>
        <button class="mob-accordion-trigger" type="button" aria-expanded="false">Donazioni 
          <span class="mob-chevron">▾</span>
        </button>
        <div class="mob-accordion-body">
          <a href="<?= $href('pages/donazioni/dona.php') ?>">💜 Fai una Donazione</a>
          <a href="<?= $href('pages/donazioni/sostenitori.php') ?>">⭐ Sostenitori</a>
        </div>
      </li>
    </ul>
  </div>
</div>
