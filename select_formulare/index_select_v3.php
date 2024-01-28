<?php
    //---dolnte kontrolu ---
    $error = [
        'option' => false,
    ];

    if ($_POST) {
        if ($_POST['kategorie'] == 0) {
            $error['option'] = true;
        }
    }

    //vytvorte asociativne pole v ktorom budu kategorie na vyber(5)
    $kategorie = [
        ["id" => 0, "label" => "Vyber kategoriu"],
        ["id" => 1, "label" => "Auto"],
        ["id" => 2, "label" => "Dodavka"],
        ["id" => 3, "label" => "Motorka"],
        ["id" => 4, "label" => "Kamion"],
        ["id" => 5, "label" => "Stvorkolka"],
        ["id" => 6, "label" => "Skuter"],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulare - select</title>
</head>
<body>
    <section id="app">
        <form id="article-form" action="" method="POST">
            <select name="kategorie">
                <?php foreach ($kategorie as $kategoria): ?>
                    <option value="<?php echo $kategoria['id']; ?>">
                        <?php echo $kategoria['label']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <button type="submit">Ulozit</button>
        </form>

        <?php if ($_POST && $error['option']): ?>
            <section class="alert error">
                Formular obsahuje chyby!!!
            </section>
        <?php endif; ?>
    </section>
</body>
</html>
