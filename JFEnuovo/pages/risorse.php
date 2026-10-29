<?php
$pageTitle = 'Risorse e Pubblicazioni';
$sectionLabel = 'Risorse e Pubblicazioni';
$activePage = 'risorse';
$basePath = '../';
$panelIcons = ['📚', '📄'];
$pageIntro = 'Il sito di riferimento organizza le risorse in queste sezioni. I titoli sono verificati; disponibilità, cataloghi e collegamenti vanno completati.';
$contentPanels = [
  ['title' => 'Sezioni delle risorse', 'items' => ['Edizioni Musicali', 'Flauti Acquisto', 'Repertorio', 'Nostre Partiture', 'Flauti e Accessori Usati', 'Biblioteca JFE-APS']],
  ['title' => 'Cataloghi e disponibilità', 'body' => 'Da completare: inserire descrizioni, cataloghi, prezzi o condizioni, collegamenti ai materiali e indicazioni aggiornate sulla disponibilità.'],
];
require dirname(__DIR__) . '/includes/page-template.php';
?>
