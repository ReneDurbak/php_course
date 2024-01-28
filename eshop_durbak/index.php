<?php
require "./products.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Shop</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <section>
    <?php foreach($games as $game):?>
        <section class="
            <?php if($game['availability'] < 10): ?>
                low
            <?php elseif($game['availability'] > 100): ?>
                lastPiece
            <?php elseif($game['availability'] < 25 and $game['availability'] > 10): ?>
                lessAvailable
            <?php elseif($game['availability'] < 100 and $game['availability'] > 25): ?>
                available
            <?php endif; ?>
        ">
            <div class="title">
                <?= $game['title']?>
            </div>

            <div class="price">
                price:<?= $game['price']?>€
            </div>

            <div class="availability">
                
                <?php if($game['availability'] < 10): ?>
                    <div>availability:low</div>
                <?php elseif($game['availability'] > 100): ?>
                    <div>availability:last piece</div>
                <?php elseif($game['availability'] < 25 and $game['availability'] > 10): ?>
                    <div>availability:less available</div>
                <?php elseif($game['availability'] < 100 and $game['availability'] > 25): ?>
                    <div>availability:available</div>
                <?php endif; ?>
            </div>

   
            <img class="image" src="<?= $game['image'] ?>" alt="<?= $game['title'] ?> Image">
   
        </section>
    <?php endforeach ?>
</section>

</body>
</html>