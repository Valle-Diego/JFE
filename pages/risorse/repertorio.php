<?php
$pageTitle = 'Repertorio';
$sectionLabel = 'Risorse e Pubblicazioni';
$activePage = 'risorse';
$basePath = '../../';
$panelIcons = ['📖', '♫'];
$pageNotice = 'Il programma leggibile nel sito di riferimento è indicato come RSA – 2023: verificare che repertorio e arrangiamenti siano ancora attuali.';
$pageIntro = 'Programma musicale per le RSA di Bareggio (MI) e Cusago (MI), come riportato nella pagina online.';
$contentPanels = [
  ['title' => 'Programma Musicale RSA · 2023', 'items' => [
    'Michele Novaro — Fratelli d’Italia (Inno Nazionale)',
    'Johann S. Bach — Aria sulla Quarta Corda',
    'Giuseppe Verdi — La donna è mobile (Rigoletto); Marcia trionfale (Aida); Noi siam zingarelle e Libiam ne’ lieti calici (La Traviata)',
    'G. Puccini — Coro a bocca chiusa; O mio babbino caro',
    'G. Rossini — Il Barbiere di Siviglia',
    'Wolfgang A. Mozart — Una piccola serenata notturna',
    'Felix Mendelssohn — Marcia nuziale (da Sogno di una notte)',
    'Richard Wagner — Marcia nuziale (da Lohengrin)',
    'Johann Strauss — Pizzicato Polka; Marcia di Radetzky',
  ]],
  ['title' => 'Da aggiornare', 'body' => 'Verificare il programma corrente, i titoli e gli arrangiamenti prima di pubblicare o ristampare questo repertorio. Il programma online riporta come presidente il Prof. Donato Pierri.'],
];
require dirname(__DIR__, 2) . '/includes/page-template.php';
?>
