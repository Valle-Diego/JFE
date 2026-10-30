<?php
$pageTitle = 'Contatti';
$sectionLabel = 'Informazioni';
$activePage = 'info';
$basePath = '../';
$panelIcons = ['✉', '📍'];
$pageIntro = 'Puoi contattare Joy Flute Ensemble – APS via email oppure scrivere all’associazione presso la sede indicata.';
$contentPanels = [
  ['title' => 'Recapiti', 'items' => ['Email: joy.flute.ensemble@gmail.com', 'Sede: Via Monviso 144, Garbagnate Milanese (MI), Italia']],
  ['title' => 'Dati associativi', 'items' => ['Codice fiscale: 97763630155', 'Codice RUNTS: 464098', 'Numero di repertorio: 30737']],
  ['title' => 'Modulo messaggi', 'body' => 'Da completare: collegare un modulo funzionante e aggiungere le informazioni sul trattamento dei dati. I campi per email e messaggio restano vuoti per chi visita il sito.'],
];
require dirname(__DIR__) . '/includes/page-template.php';
?>
