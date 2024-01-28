<?php
    //kontrola

    // premenna, v ktorej budem mat vsetky polozky pre radio
    $genders = [
        [ "id" => 1, "label" => "Muz" ],
        [ "id" => 2, "label" => "Zena" ],
        [ "id" => 3, "label" => "Ine" ],
    ];

   $error = [
    'radio' => false,
   ];

   if($_POST){
    if(!isset($_POST['gender']) || empty($_POST['gender'])){
        $error['radio'] = true;
    }
   }

?>

        <form   id="article-form" 
                action=""
                method="POST"
        >
            <section class="group-container">
                <div class="
                        label
                        
                ">Pohlavie</div>
                <section class="list">
                    <?php foreach($genders as $gender): ?>
      

                      <input  type="radio" id="gender-<?= $gender["id"] ?>"
                                    name="gender" value="<?= $gender["id"] ?>"
                                    
                            >
                            <label for="gender-<?= $gender["id"] ?>"><?= $gender["label"] ?></label>
                        </section>
                    <?php endforeach ?>
                </section>
                <?php
                    if($error['radio']){
                        echo '<div class="error-message">Zvol pohlavie!!!</div>';
                    }
                ?>


<?php
print_r($_POST)
?>
            </section>
            <input name="submit" type="submit" value="Ulozit">
        </form>