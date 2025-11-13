<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING); // Pomijaj ostrzeżenia
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Projekt PHP - Fotografia">
    <meta name="keywords" content="HTML, CSS, JS, PHP, projekt, fotografia">
    <meta name="author" content="Konrad Sendlewski">
    <title>Fotografia - moja pasja</title>
    <link rel="stylesheet" href="styles.css">
    <script src="timedate.js" type="text/javascript"></script>
</head>

<body onload="startclock()">
<div id="zegarek"></div>
<div id="data"></div>

<header>
    <h1>📸 Fotografia - moja pasja</h1>
</header>

<!-- MENU -->
<nav>
    <ul class="menu">
        <li><a href="index.php?idp=glowna">Strona główna</a></li>
        <li><a href="index.php?idp=strona2">Strona 2</a></li>
        <li><a href="index.php?idp=strona3">Strona 3</a></li>
        <li><a href="index.php?idp=strona4">Strona 4</a></li>
        <li><a href="index.php?idp=strona5">Strona 5</a></li>
        <li><a href="index.php?idp=filmy">Filmy</a></li>
    </ul>
</nav>

<main>
<?php
// 🔸 Dynamiczne ładowanie podstron
$idp = $_GET['idp'];

switch ($idp) {
    case '':
    case 'glowna':
        $strona = 'html/glowna.html';
        break;
    case 'strona2':
        $strona = 'html/strona2.html';
        break;
    case 'strona3':
        $strona = 'html/strona3.html';
        break;
    case 'strona4':
        $strona = 'html/strona4.html';
        break;
    case 'strona5':
        $strona = 'html/strona5.html';
        break;
    case 'filmy':
        $strona = 'html/filmy.html';
        break;
    default:
        echo "<p class='error'>Nie znaleziono strony!</p>";
        $strona = '';
}

// 🔸 Zabezpieczenie przed błędami include
if ($strona && file_exists($strona)) {
    include($strona);
} else if ($strona != '') {
    echo "<p class='error'>Błąd: plik <strong>$strona</strong> nie istnieje.</p>";
}
?>
</main>

<footer>
<?php
$nr_indeksu = '175495';
$nrGrupy = 'ISI3';
echo "<p>Autor: <strong>Konrad Sendlewski</strong> | Indeks: $nr_indeksu | Grupa: $nrGrupy</p>";
?>
</footer>

</body>
</html>
