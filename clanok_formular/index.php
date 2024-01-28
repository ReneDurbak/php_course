<?php

    // premenna, do ktorej budeme ukladat chyby
    $error = [
        'title' =>false,
        'text' =>false
    ];

    // kontrola formulara
    if($_POST) {
        // kontrola elementu title clanku
        if(!$_POST['title']) {
            $error['title'] = true;
        }
        
        // kontrola elementu text clanku
        if(!$_POST['text']) {
            $error['text'] = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulare - GET, POST, input:text, textarea</title>

    <link rel="stylesheet" href="alert.css">
</head>
<body>
    <section id="app">
        <h1>Novy clanok</h1>

        <?php if($error['title']||$error['text']): ?>
            <section class="alert error">
                Formular obsahuje chyby!!!
            </section>
        <?php endif ?>

        <form  id="article-form" action="" method="POST">
            <input  type="text" name="title" placeholder="Nazov clanku" value="<?= $_POST['title'] ?>" 
                    class="
                        <?php if($error["title"]): ?>
                            error-border
                        <?php endif ?>
                    "
            >
            <textarea   name="text"
                        placeholder="text clanku"    
                        class="
                            <?php if($error['text']): ?>
                                error-border
                            <?php endif ?>
                        "
            ><?= $_POST['text'] ?></textarea>
            <button>Ulozit</button>
        </form>
    </section>
</body>
</html>
