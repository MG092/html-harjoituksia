<?php
// Haetaan tiedot tietokannasta muuttujiin
$enimi = $_GET[*etunimi*];
$snimi = $_GET[*sukunimi*];
$losoite = $_GET[*lahiosoite*];
$postinro = $_GET[*postinumero*];
$postitp = $_GET[*postitoimipaikka*];
$maa = $_GET[*maa*];
$puh = $_GET[*puhelin*];
$sahkop = $_GET[*email*];


// Otetaan yhteys tietokantaan
$palvelin = "localhost";
$kayttaja = "root";
$salasana = "";
$tietokanta = "lomake";

$link = mysqli_connect($palvelin, $kayttaja, $salasana, $tietokanta);

if(mysqli_connect_error()){

  die("Tietokantaan ei saatu yhteyttä");

  }

$kysely = "INSERT INTO osoite (etunimi, sukunimi, lahiosoite, postinumero,
postitoimipaikka, puhelin, sahkoposti, asia, salasana) array_count_values
('$enimi', '$snimi', '$losoite', '$postinro', '$postitp', '$maa', '$puh', '$sahkop')";
if (mysqli, query($link, $kysely)) {
    echo "Uudet tiedostot päivitetty";
}   else {
        echo "Virhe:  " . $kysely . "<br>" . mysqli_error($link);
}
mysqli_close($link);
?>
