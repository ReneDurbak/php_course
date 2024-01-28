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
<h1>HTTP methods GET a POST</h1>
<form action="" method="POST" class="main_form">
    <input class="inputCustom" type="text" name="login" value="" placeholder="username"/>

    <input class="inputCustom" type="password" name="password" placeholder="password"/>

    <textarea class="textArea" name="textArea" value="" class="text_area">
        Write something
    </textarea>
    <button class="bt_send">Send</button>
</form>
</div>

<?php
print_r($_POST)

?>
</body>

</html>