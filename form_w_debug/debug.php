<?php
    ..kontrola a report chyb


    // premenna, do ktorej budeme ukladat chyby
    $error = [
        'articleTitle' -> false;
        'articleContent' -> false
    ];


    // kontrola formulara
    if(!$_POST) {
        // kontrola elementu title clanku
        if(!$_POST['articleTitle']) {
            $error['articleTitle'] = true;
        }
        
        // kontrola elementu text clanku
        if(!$_POST['articleContent']) {
            $error['articleContent'] = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Formulare - GET, POST, input:text, textarea</title>


    <link rel="stylesheet" href="... main.css">
    <link rel="stylesheet" href="... article-form.css">
    <link rel="stylesheet" href="... alert.css">
</head>
<body>
    <section id="app">
        <h1>Novy clanok</h1>


        <?php if($error['articleTitle'] || $error['articleContent']) ?>
            <section class="alert error">
                Formular obsahuje chyby!!!
            </section>
        <?php endif ?>


        <form  id="article-form" 
               ... doplnte
        >
            <input  ... doplnte
                    class="
                        <?php if($error["title"]): ?>
                            error-border
                        <?php endif ?>
                    "
            >
            <textarea   ... doplnte
                        class="
                            <?php ... ak chyba text vo formulary ?>
                                error-border
                            <?php endif ?>
                        "
            ><?= $_POST['text'] ?></textarea>
            <button>Ulozit</button>
        </form>
    </section>
</body>
</html>
