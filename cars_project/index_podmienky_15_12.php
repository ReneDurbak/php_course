<?php
require "./cars.php"
    
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podmienky</title>
    <link rel="stylesheet" href="karticky_15_12.css">
</head>
<body>
    

    <section>
        <h1>Karty k autu + css</h1>
        <section class="zoznam">
            <?php foreach($auta as $auto): ?>
                <section class="karta
                            <?php if($rok - $auto['rok'] < 5 ): ?> 
                                vek-5
                            <?php elseif(($rok - $auto['rok']) >= 6 and ($rok - $auto['rok'] <= 15 )): ?> 
                                vek-6-15
                            <?php elseif(($rok - $auto['rok']) >= 16 and ($rok - $auto['rok'] <= 25 )): ?> 
                                vek-16-25
                            <?php elseif($rok - $auto['rok'] > 26 ): ?> 
                                veteran
                            <?php endif ?>"
                >
                    <section class="znacka">
                        <?= $auto["znacka"] ?>
                    </section>
                    <section>
                        <?= $auto["model"] ?>
                     </section>
                    <section class="cena">
                        <?= $auto["cena"] ?>€
                    </section>
                    <a href="">Detail</a>
                </section>
            <?php endforeach ?>
        </section>
    </section>
                           
</body>
</html>
