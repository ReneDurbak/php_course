<?php
//include "./control.php";
require "./control.php";
$vek = 10;



/* $auta = [
    "Mercedes",
    "VW",
    "Audi"
]; */

$auta = [
    ["znacka" => "VW",
    "model" => "Golf",
    "rok" => 2000,
    "cena"=> 2500,
],
[
    "znacka" => "Skoda",
    "model" => "Octavia",
    "rok" => 2015,
    "cena"=> 25000,
],
[
    "znacka" => "Ferrari",
    "model" => "SF90",
    "rok" => 2023,
    "cena"=> 255000,
]
];





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cards.css">
    <title>Podmienky</title>
</head>
<body>
    
<div>
    <?php
    if($vek < 6){
        debug("<h1>Lahke casy</h1>");

    }else if($vek > 6 && $vek <= 16){
        debug("<h1>Tazke casy</h1>");

    }else{
        debug("<h1>Nevyjadrujem sa</h1>");

    }
    ?>
</div>

<div class="card_container">
    <div class="cards">
    <h2 class="cars_title">Cars</h2>
        <?php
            foreach($auta as $auto){
                
                echo '<div class="card">';
                echo "<br>"."car: ".$auto['znacka']."<br>"."model: ".$auto['model']."<br>"."year: ". $auto['rok']."<br>" ."price: ". $auto['cena']. " Eur";
                echo '</div>';

            }        
        ?>
    </div>
</div>
</body>
</html>