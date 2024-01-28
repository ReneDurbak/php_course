<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />

</head>

<body>
<div class="main_container">
<h1>Create article</h1>
<form action="" method="POST" class="main_form">
    <input class="inputCustom" type="text" name="articleTitle" value="<?php $_POST['articleTitle'];
?>" placeholder="write an article title..."/>

    <textarea class="textArea" name="articleContent" value="<?php $_POST['articleContent'];
?>" class="text_area">
        Article content...
    </textarea>
    <button class="bt_send">Send</button>
</form>
</div>

<?php

?>
</body>

</html>