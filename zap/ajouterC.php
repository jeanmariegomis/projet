<?php
require 'Autoloader.php';
Autoloader::register();
$numero_chambre =  $bat = "";
$isSuccess = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero_chambre = verifyInput($_POST['numero_chambre']);
    $bat = verifyInput($_POST['bat']);

    $isSuccess = true;
    //var_dump($_POST);
    if (empty($numero_chambre)) {
        $numero_chambreError = "Entrer le numero de la chambre";
        $isSuccess = false;
    }


   
}

if ($isSuccess) {

    $serv = new Insertion();
    $batt = new Chambre($numero_chambre, $bat);
    $t = $serv->addChambre($batt);
    
    
}
function verifyInput($var)
{
    $var = trim($var);
    $var = stripcslashes($var);
    $var = htmlspecialchars($var);

    return $var;
}


?>


<!DOCTYPE html>
<html>
<title>Universite</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="dist/css/font-awesome.min.css">


<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Raleway", sans-serif
    }

    .comments {
        font-style: italic;
        font-size: 18px;
        color: #d82c2e;
        height: 25px;
    }
</style>

<body class="w3-light-grey w3-content" style="max-width:1600px">

    <?php
    include 'menu.php';
    ?>


    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity"  style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px">

        <!-- Header -->
        







        <!-- Contact Section -->
        <div class="w3-container w3-padding-large ">
            <h4 id="contact"><b>ajout chambre</b></h4>

            <hr class="w3-opacity">
            <form action=""  method="post">

                <div class="w3-section">
                    <label>numero chambre</label>
                    <input class="w3-input w3-border" type="num" name="nom">
                    <p class="comments"><?php echo $numro_chambreError; ?></p>
                </div>

                <div class="w3-section">
                
                <select id="type" class="form-control" name="bat">
                            
                                <?php
                                  
                                $type = new Insertion();


                                foreach ($type->findAll("batiment") as $lib) {
                                    echo "<option value=$lib->id_batiment>$lib->numero_batiment</option>";
                                }

                                ?>
                            </select>
                </div>
                <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-plus w3-margin-right"></i>Ajouter</button>
                
            </form>
        </div>



        

        <!-- End page content -->
    </div>


</body>

</html>