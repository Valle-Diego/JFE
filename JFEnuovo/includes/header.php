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
  <title><?= htmlspecialchars($pageTitle ?? 'Joy Flute Ensemble – APS', ENT_QUOTES, 'UTF-8') ?></title>
  <link rel="icon" href="<?= $href('assets/logo.png') ?>" type="image/png">
  <link rel="stylesheet" href="<?= $href('css/tokens.css') ?>">
  <link rel="stylesheet" href="<?= $href('css/base.css') ?>">
  <link rel="stylesheet" href="<?= $href('css/header.css') ?>">
  <link rel="stylesheet" href="<?= $href('css/footer.css') ?>">
  <link rel="stylesheet" href="<?= $href('css/home.css') ?>">
  <link rel="stylesheet" href="<?= $href('css/pages.css') ?>">
  <link rel="stylesheet" href="<?= $href('css/style.css') ?>">
  <script defer src="<?= $href('js/site.js') ?>"></script>
</head>
<body>
<div class="topbar">
  <div class="topbar-inner">
    <div class="topbar-left">
      <a href="mailto:joy.flute.ensemble@gmail.com">joy.flute.ensemble@gmail.com</a>
      <span class="topbar-sep">·</span>
      <span>Garbagnate Milanese (MI)</span>
    </div>
  </div>
</div>
<header class="header">
  <div class="header-inner">
    <a href="<?= $href('index.php') ?>" class="logo" aria-label="Joy Flute Ensemble — Home">
      <img src="<?= $href('assets/logo.png') ?>" alt="" class="logo-img">
      <span class="logo-text-wrap"><span class="logo-name">Joy Flute Ensemble</span><span class="logo-tagline">Orchestra di Flauto Traverso · APS</span></span>
    </a>
    <nav class="nav" aria-label="Navigazione principale">
      <ul class="nav-list">
        <li class="nav-item"><a href="<?= $href('index.php') ?>" class="nav-link<?= $isCurrent('home') ?>">Home</a></li>
        <li class="nav-item"><a href="<?= $href('pages/chi-siamo.php') ?>" class="nav-link<?= $isCurrent('chi-siamo') ?>">Chi Siamo</a></li>
        <li class="nav-item">
          <a href="<?= $href('pages/ensemble/flautisti.php') ?>" class="nav-link<?= $isCurrent('ensemble') ?>">Ensemble <svg class="chevron" viewBox="0 0 12 8" aria-hidden="true"><path d="M1 1l5 5 5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
          <div class="dropdown">
            <a href="<?= $href('pages/ensemble/flautisti.php') ?>"><span class="d-icon">🎵</span>I Nostri Flautisti</a>
            <a href="<?= $href('pages/ensemble/foto.php') ?>"><span class="d-icon">📷</span>Foto Ricordo</a>
            <a href="<?= $href('pages/ensemble/video.php') ?>"><span class="d-icon">▶️</span>Video</a>
          </div>
        </li>
        <li class="nav-item">
          <a href="<?= $href('pages/eventi/prossimo.php') ?>" class="nav-link<?= $isCurrent('eventi') ?>">Eventi <svg class="chevron" viewBox="0 0 12 8" aria-hidden="true"><path d="M1 1l5 5 5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
          <div class="dropdown">
            <a href="<?= $href('pages/eventi/masterclass.php') ?>"><span class="d-icon">🎓</span>Masterclass</a>
            <a href="<?= $href('pages/eventi/passati.php') ?>"><span class="d-icon">📅</span>Eventi Passati</a>
            <a href="<?= $href('pages/eventi/prossimo.php') ?>"><span class="d-icon">🔔</span>Prossimo Concerto</a>
          </div>
        </li>
        <li class="nav-item">
          <a href="<?= $href('pages/risorse/repertorio.php') ?>" class="nav-link<?= $isCurrent('risorse') ?>">Risorse e Pubblicazioni <svg class="chevron" viewBox="0 0 12 8" aria-hidden="true"><path d="M1 1l5 5 5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
          <div class="dropdown">
            <a href="<?= $href('pages/risorse/edizioni.php') ?>"><span class="d-icon">🎼</span>Edizioni Musicali</a>
            <a href="<?= $href('pages/risorse/flauti-acquisto.php') ?>"><span class="d-icon">🛒</span>Flauti Acquisto</a>
            <a href="<?= $href('pages/risorse/repertorio.php') ?>"><span class="d-icon">📖</span>Repertorio</a>
            <a href="<?= $href('pages/risorse/partiture.php') ?>"><span class="d-icon">📄</span>Nostre Partiture</a>
            <a href="<?= $href('pages/risorse/usati.php') ?>"><span class="d-icon">♻️</span>Flauti &amp; Accessori Usati</a>
            <a href="<?= $href('pages/biblioteca.php') ?>"><span class="d-icon">📚</span>Biblioteca JFE-APS</a>
          </div>
        </li>
        <li class="nav-item">
          <a href="<?= $href('pages/info/contatti.php') ?>" class="nav-link<?= $isCurrent('info') ?>">Informazioni varie <svg class="chevron" viewBox="0 0 12 8" aria-hidden="true"><path d="M1 1l5 5 5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
          <div class="dropdown">
            <a href="<?= $href('pages/info/bilanci.php') ?>"><span class="d-icon">📋</span>Bilanci &amp; Regolamenti</a>
            <a href="<?= $href('pages/info/contatti.php') ?>"><span class="d-icon">📬</span>Contatti</a>
            <a href="<?= $href('pages/info/socio.php') ?>"><span class="d-icon">🎓</span>Diventa Socio JFE-APS</a>
            <a href="<?= $href('pages/info/statuto.php') ?>"><span class="d-icon">📜</span>Statuto</a>
          </div>
        </li>
        <li class="nav-item">
          <a href="<?= $href('pages/donazioni/dona.php') ?>" class="nav-link<?= $isCurrent('donazioni') ?>">Donazioni <svg class="chevron" viewBox="0 0 12 8" aria-hidden="true"><path d="M1 1l5 5 5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
          <div class="dropdown">
            <a href="<?= $href('pages/donazioni/dona.php') ?>"><span class="d-icon">💜</span>Fai una Donazione</a>
            <a href="<?= $href('pages/donazioni/sostenitori.php') ?>"><span class="d-icon">⭐</span>I Nostri Sostenitori</a>
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
      <a href="<?= $href('index.php') ?>" class="logo"><img src="<?= $href('assets/logo.png') ?>" class="logo-img" alt=""><span class="logo-text-wrap"><span class="logo-name">Joy Flute Ensemble</span><span class="logo-tagline">APS</span></span></a>
      <button class="nav-close" id="navClose" type="button" aria-label="Chiudi menu">✕</button>
    </div>
    <ul class="nav-mobile-list">
      <li><a href="<?= $href('index.php') ?>">Home</a></li>
      <li><a href="<?= $href('pages/chi-siamo.php') ?>">Chi Siamo</a></li>
      <li><button class="mob-accordion-trigger" type="button" aria-expanded="false">Ensemble <span class="mob-chevron">▾</span></button><div class="mob-accordion-body"><a href="<?= $href('pages/ensemble/flautisti.php') ?>">🎵 I Nostri Flautisti</a><a href="<?= $href('pages/ensemble/foto.php') ?>">📷 Foto Ricordo</a><a href="<?= $href('pages/ensemble/video.php') ?>">▶️ Video</a></div></li>
      <li><button class="mob-accordion-trigger" type="button" aria-expanded="false">Eventi <span class="mob-chevron">▾</span></button><div class="mob-accordion-body"><a href="<?= $href('pages/eventi/masterclass.php') ?>">🎓 Masterclass</a><a href="<?= $href('pages/eventi/passati.php') ?>">📅 Eventi Passati</a><a href="<?= $href('pages/eventi/prossimo.php') ?>">🔔 Prossimo Concerto</a></div></li>
      <li><button class="mob-accordion-trigger" type="button" aria-expanded="false">Risorse <span class="mob-chevron">▾</span></button><div class="mob-accordion-body"><a href="<?= $href('pages/risorse/edizioni.php') ?>">🎼 Edizioni Musicali</a><a href="<?= $href('pages/risorse/flauti-acquisto.php') ?>">🛒 Flauti Acquisto</a><a href="<?= $href('pages/risorse/repertorio.php') ?>">📖 Repertorio</a><a href="<?= $href('pages/risorse/partiture.php') ?>">📄 Nostre Partiture</a><a href="<?= $href('pages/risorse/usati.php') ?>">♻️ Usati</a><a href="<?= $href('pages/biblioteca.php') ?>">📚 Biblioteca</a></div></li>
      <li><button class="mob-accordion-trigger" type="button" aria-expanded="false">Informazioni <span class="mob-chevron">▾</span></button><div class="mob-accordion-body"><a href="<?= $href('pages/info/bilanci.php') ?>">📋 Bilanci</a><a href="<?= $href('pages/info/contatti.php') ?>">📬 Contatti</a><a href="<?= $href('pages/info/socio.php') ?>">🎓 Diventa Socio</a><a href="<?= $href('pages/info/statuto.php') ?>">📜 Statuto</a></div></li>
      <li><button class="mob-accordion-trigger" type="button" aria-expanded="false">Donazioni <span class="mob-chevron">▾</span></button><div class="mob-accordion-body"><a href="<?= $href('pages/donazioni/dona.php') ?>">💜 Fai una Donazione</a><a href="<?= $href('pages/donazioni/sostenitori.php') ?>">⭐ Sostenitori</a></div></li>
    </ul>
  </div>
</div>
