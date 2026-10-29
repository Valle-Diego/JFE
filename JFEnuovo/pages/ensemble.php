<?php
$pageTitle = 'Ensemble';
$sectionLabel = 'Ensemble';
$activePage = 'ensemble';
$basePath = '../';
$panelIcons = ['🎵', '📷', '▶️'];
$pageIntro = 'Le sezioni Ensemble presenti nel sito di riferimento sono I nostri flautisti, Foto ricordo e Video.';
$contentPanels = [
  ['title' => 'I nostri flautisti', 'body' => 'È disponibile l’elenco pubblicato per l’anno accademico 2024. Controlla la pagina dedicata e conferma che nomi e direzione siano aggiornati.'],
  ['title' => 'Foto ricordo', 'body' => 'Da completare: selezionare le fotografie, aggiungere didascalie e verificare i consensi alla pubblicazione.'],
  ['title' => 'Video', 'body' => 'Da completare: inserire i collegamenti ai video e i relativi titoli e date.'],
];
require dirname(__DIR__) . '/includes/page-template.php';
?>
