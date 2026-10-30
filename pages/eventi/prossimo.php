<?php
$pageTitle = 'Prossimo Concerto';
$sectionLabel = 'Eventi';
$activePage = 'eventi';
$basePath = '../../';
$panelIcons = ['🔔', '♫'];
$pageNotice = 'ATTENZIONE: la data qui riportata è passata. Il sito di riferimento la indicava come prossimo concerto, ma non contiene una data futura verificata.';
$pageIntro = 'Ultimo concerto indicato come prossimo nella pagina consultata: usarlo come riferimento storico e inserire la nuova data prima di presentare questa pagina come aggiornata.';
$contentPanels = [
  ['title' => 'Concerto di Natale · 1 dicembre 2024', 'body' => 'Domenica 1 dicembre 2024, ore 16:30 · Auditorium “Aldo Moro”, Viale Achille Varzi 13, Arese (MI). Evento organizzato dall’Uniter di Arese, in collaborazione con Wind Rose Flute Quartet. Direttore: M° Donato Pierri.'],
  ['title' => 'Da aggiornare', 'items' => ['Nuova data e ora', 'Luogo e indirizzo', 'Organizzatori e collaborazioni', 'Direttore e programma musicale', 'Locandina e modalità di partecipazione']],
];
require dirname(__DIR__, 2) . '/includes/page-template.php';
?>
