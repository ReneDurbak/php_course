<?php


$delivery_options = [
    ["id" => 1, "option" => "Express delivery"],
    ["id" => 2, "option" => "Insure the package"],

];

$sneakers = [
    ["id" => 1, "sneaker" => "Air max 90"],
    ["id" => 2, "sneaker" => "Air jordan 4"],
    ["id" => 3, "sneaker" => "Air jordan 3"],
    ["id" => 4, "sneaker" => "Air jordan 1"],
    ["id" => 5, "sneaker" => "Air force 1"],
];


$genders = [
    ["id" => 1, "gender" => "Men"],
    ["id" => 2, "gender" => "Women"],

];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css"/>
    <title></title>
</head>

<body>


    <div class="form_container">
        <h1>Sneakrs</h1>

        <form id="sneakers-form" action="" method="POST">

            <section>
                <input type="text" placeholder="fullname" />
            </section>

            <section>
                <textarea placeholder="description"></textarea>
            </section>


            <section class="genders_container">
                <?php foreach ($genders as $gender): ?>
                    <input 
                    type="radio" 
                    name="gender"
                    id="<?php echo ($gender["id"]) ?>"
                    value="<?php echo ($gender["gender"]) ?>"
                    />

                    <label for="<?php echo ($gender["gender"]) ?>">
                        <?php echo ($gender["gender"]) ?>
                    </label>
                <?php endforeach; ?>
            </section>


            <section class="sneakers_container">
            
                <select name="sneakers">
                <?php foreach($sneakers as $sneaker): ?>
                    <option value="<?php echo($sneaker["sneaker"]) ?>"><?php echo($sneaker["sneaker"]) ?></option>
                <?php endforeach; ?>
                </select>
  
            </section>



            <section class="delivery_container">
                <h3>Extra delivery options</h3>
                <?php foreach($delivery_options as $delivery_option): ?>
                    <input 
                        type="checkbox"
                        name="delivery_options[]"
                        id="<?php echo($delivery_option["id"]); ?>"
                        value="<?php echo($delivery_option["option"]); ?>"
                    />

                    <label for="<?php echo($delivery_option["sneaker"]); ?>"><?php echo($delivery_option["option"]); ?></label>
                <?php endforeach; ?>
            </section>




            <button type="submit">Send</button>
        </form>
        <?php
        print_r($_POST)
            ?>
    </div>

</body>

</html>