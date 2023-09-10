<html>
<head>
<link rel="stylesheet" href="style2.css">
</head>
<body>


<div class="formularz">
<h1>Twoje dane</h1>
    <?php
$imie = $_GET["imie"];
$nazwisko = $_GET["nazwisko"];
$plec = $_GET["plec"];
$klasa = $_GET["klasa"];
$opis = $_GET["opis"];
$szkola = $_GET["szkola"];
echo "<p>Imię: </p>$imie<br>";
echo "<p>Nazwisko: </p>$nazwisko<br>";
echo "<p>Płeć: </p>$plec<br>";
echo "<p>Klasa: </p>$klasa<br>";
echo "<p>Szkoła: </p>$szkola<br>";
echo "<p>Opis: </p>$opis<br>";
?>
</div>
</body>
</html>


