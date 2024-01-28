<?php

$error = [
    "option" => false,
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['selected_languages'])) {
        $error["option"] = true;
    }
}

$prLanguages = [
    ["id" => 0, "title" => "PHP"],
    ["id" => 1, "title" => "Javascript"],
    ["id" => 2, "title" => "Python"],
    ["id" => 3, "title" => "Rust"],
    ["id" => 4, "title" => "Kotlin"],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="checkbox-form" action="" method="POST">

        <?php foreach ($prLanguages as $prLanguage): ?>
            <input 
                type="checkbox"
                name="selected_languages[]"
                id="<?php echo $prLanguage['id']; ?>"
                value="<?php echo $prLanguage['title']; ?>"
            />
            
            <label for="<?php echo $prLanguage['id']; ?>">
                <?php echo $prLanguage['title']; ?>
            </label><br>

        <?php endforeach; ?>

        <?php if ($error['option']): ?>
            <section>
                Form contains errors!!!
            </section>
        <?php endif; ?>

        <?php print_r($_POST) ?>

        <button type="submit">Send</button>
    </form>
</body>
</html>
