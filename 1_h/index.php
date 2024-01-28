<?php

//

$pozdrav = "...Hello friday";
// $znacka = "BMW";
// $model = "M4";
// $rok = 2022;

// echo $pozdrav . ", my car is a " . $rok . " " . $znacka . " " . $model . ".";
// echo "<br>"
// echo "MOJE {$znacka} {$model}"


//


/* $auta = [
    "znacka"=> ["BMW",
    "Mercedes",
    "VW",
    "Audi"],
    "model" => "M4"
]; */


// print_r($auta);
// echo "<br>";
// var_dump($auta);
// echo "<br> <i>$auta[0]</i> <br>";
// print($auta[2])

// print_r($auta["znacka"][1]);
// echo "<br>";
// print_r($auta["model"]);





$auta = [
    "BMW",
    "Mercedes",
    "VW",
    "Audi"
];

foreach( $auta as $auto ){
 
  print("$auto <br>");
 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first PHP?</title>
</head>
<body>
    <h1><?php echo $pozdrav ?></h1>
    <h2><?php print_r($auta) ?></h2>
    <h3><pre><?php var_dump($auta) ?></pre></h3>
    <h1>
        <div><i><u>Vypis pola cez forEach v html:</u></i> <br></div>
        <?php
            foreach($auta as $auto){
                print("$auto<br>");
            }
        
        ?>
    </h1>
</body>
</html>
