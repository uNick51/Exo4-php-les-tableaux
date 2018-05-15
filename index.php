<!DOCTYPE HTML>
<html>
<head>
<title>Exemple</title>
</head>
<body>

<?php

// -------------------Exercice1---------------
  $mois = array ("janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre");

// -------------------Exercice2---------------
  $mois = array ("janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre");
  echo $mois[2]."<br />";

  // -------------------Exercice3---------------
  $mois = array ("janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre");
  echo $mois[5]."<br />";

  // -------------------Exercice4---------------
  $mois = array ("janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre");
  $mois[7] = août;
  echo $mois[7]."<br />
  ";
  // -------------------Exercice5---------------
  $occ = array (
    "9"=>"Ariège",
    "11"=>"Aude",
    "12"=>"Aveyron",
    "30"=>"Gard",
    "31"=>"Haute-Garonne",
    "32"=>"Gers",
    "46"=>"Lot",
    "32"=>"Gers" ,
    "34"=>"Hérault",
    "46"=>"Lot",
    "48"=>"Lozère" ,
    "65"=>"Haute-Pyrénées",
    "66"=>"Pyrénées-orientales",
    "81"=>"Tarn",
    "82"=>"Tarn-et-garonne");

  // -------------------Exercice6---------------
  $occ = array (
    "9"=>"Ariège",
    "11"=>"Aude",
    "12"=>"Aveyron",
    "30"=>"Gard",
    "31"=>"Haute-Garonne",
    "32"=>"Gers",
    "46"=>"Lot",
    "32"=>"Gers" ,
    "34"=>"Hérault",
    "46"=>"Lot",
    "48"=>"Lozère" ,
    "65"=>"Haute-Pyrénées",
    "66"=>"Pyrénées-orientales",
    "81"=>"Tarn",
    "82"=>"Tarn-et-garonne");
  echo $occ[30]."<br />";

  // -------------------Exercice7---------------
  $occ = array (
    "9"=>"Ariège",
    "11"=>"Aude",
    "12"=>"Aveyron",
    "30"=>"Gard",
    "31"=>"Haute-Garonne",
    "32"=>"Gers",
    "46"=>"Lot",
    "32"=>"Gers" ,
    "34"=>"Hérault",
    "46"=>"Lot",
    "48"=>"Lozère" ,
    "65"=>"Haute-Pyrénées",
    "66"=>"Pyrénées-orientales",
    "81"=>"Tarn",
    "82"=>"Tarn-et-garonne");
  echo "narbonne est dans l' ".$occ[11]."<br />";

  // -------------------Exercice8---------------
  $mois = array ("janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre");
    for ($i=0; $i < 13 ; $i++) {
      echo $i."<br />";
    }
  // -------------------Exercice9 et 10---------------
  $occ = array (
    "9"=>"Ariège",
    "11"=>"Aude",
    "12"=>"Aveyron",
    "30"=>"Gard",
    "31"=>"Haute-Garonne",
    "32"=>"Gers",
    "46"=>"Lot",
    "32"=>"Gers" ,
    "34"=>"Hérault",
    "46"=>"Lot",
    "48"=>"Lozère" ,
    "65"=>"Haute-Pyrénées",
    "66"=>"Pyrénées-orientales",
    "81"=>"Tarn",
    "82"=>"Tarn-et-garonne");
    foreach ($occ as $key => $value) {
      echo "le ".$key." correspond à ".$value."<br />";
    }
    
?>

</body>
</html>
