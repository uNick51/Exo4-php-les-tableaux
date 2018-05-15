<!DOCTYPE HTML>
<html>
<head>
<title>Exemple</title>
</head>
<body>

<?php
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
