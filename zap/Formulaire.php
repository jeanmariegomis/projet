<?php


        
require_once "Autoloader.php";
Autoloader :: register();


if (  isset($_POST['ajouter']) && !empty($_POST['adresse']) ) {

  $matricule=$_POST['matricule'];
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
 
  $email=$_POST['email'];
  $tel=$_POST['tel'];
  $datenaissance=$_POST['datenaissance'];
  $adresse=$_POST['adresse'];
  $nob= new Insertion();
  $nb= new NonBoursier($matricule,$nom,$prenom,$email,$tel,$datenaissance,$adresse);
 
  $nob->addNonBoursier($nb);

}


 if (  isset($_POST['statut']) && isset($_POST['ajouter'])) {
	
	  $matricule=$_POST['matricule'];
	  $prenom=$_POST['prenom'];
	  $nom=$_POST['nom'];
	  $email=$_POST['email'];
	  $tel=$_POST['tel'];
	  
	
	  $datenaissance=$_POST['datenaissance'];
	  $statut=$_POST['statut'];
	  $bour= new Insertion();
	  $b= new Boursier($matricule,$nom,$prenom,$email,$tel,$datenaissance,$statut);

	    $bour->addBoursier($b);
   
} 

if (  isset($_POST['ajouter']) && !empty($_POST['chambre'])  &&empty($_POST['statut'])) {

    $matricule=$_POST['matricule'];
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $chambre=$_POST['chambre'];
   // $batiment=$_POST['batiment'];
   
	$datenaissance=$_POST['datenaissance'];

	$bour= new Insertion();
    $b= new Loger($matricule,$nom,$prenom,$email,$tel,$datenaissance,$chambre);
   
    $bour->addLoger($b);

  }

            
            
            
            
            ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Etudiant</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="images/jpg" href="images/icons/favicon.ico"/>
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>



 <!-- Navigation -->
 
 <nav class="    w3-sidebar w3-collapse w3-white w3-animate-left" id="mainNav"  >
    <div class="container">
      
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="form.php">Aller sur d'autres pages</a>
          </li>
          
          
        </ul>
      </div>
    </div>
  </nav>

	<div class="container-contact100">
		<div class="wrap-contact100">
			<form  action="Formulaire.php" method="POST" class="contact100-form validate-form">
				<span class="contact100-form-title">
					Bienvenue!!!
				</span>



				<div class="wrap-input100 validate-input" data-validate="Matricule is required">
					<label class="label-input100" for="text">Matricule</label>
					<input id="text" class="input100" type="text" name="matricule" placeholder="Entrer votre matricule...">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<label class="label-input100" for="name">Nom</label>
					<input id="name" class="input100" type="text" name="nom" placeholder="Entrer votre nom...">
					<span class="focus-input100"></span>
				</div>



				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<label class="label-input100" for="name">Prenom</label>
					<input id="name" class="input100" type="text" name="prenom" placeholder="Entrer votre prenom...">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<label class="label-input100" for="email">Email</label>
					<input id="email" class="input100" type="text" name="email" placeholder="Entrer votre email...">
					<span class="focus-input100"></span>
				</div>



				<div class="wrap-input100 validate-input" data-validate="Phone is required">
					<label class="label-input100" for="phone">Telephone</label>
					<input id="phone" class="input100" type="tel" name="tel" placeholder="Entrer votre numero...">
					<span class="focus-input100"></span>
				</div>



				<div class="wrap-input100 validate-input" data-validate="Date is required">
					<label class="label-input100" for="date">Date de naissance</label>
					<input id="date" class="input100" type="date" name="datenaissance" placeholder="Entrer votre date de naissance...">
					<span class="focus-input100"></span>
				</div>



				<div class="wrap-input100 validate-input" >
					<label class="label-" for="name">Adresse</label>
					<input id="name" class="" type="text" name="adresse" placeholder="Entrer votre adresse...">
					<span class="focus-input100"></span>
				</div>


                <input type="radio" name="opt_rad" id="NonBoursier" value="oui" onclick="showHideBourse()"/>Non Boursier
      <!--label for="nonBoursier"></label> <br-->
       <fieldset id="infoNonBoursier" hidden>

      <label for="name">Adresse :</label> 
        
        </fieldset>  

        <input type="radio" name="opt_rad" id="Boursier" value="nom" onclick="showHideBourse()"/>Boursier
        <fieldset id="infoBoursier" >

        <label for="statut">type de bourse</label> 
        <select name="statut"  size=1 >
          <optgroup>
		  <option value=""></option>
		    <option value=1>Demi bourse</option>
            <option value=2>Bourse Entiere</option>
          </optgroup>
          </select> 
          </fieldset> <br> <br>
          
          <input type="radio" name="opt_rad" id="Loger" value="nom" onclick="showHideBourse()"/>Loger

          
            <fieldset id="infoLoger">
              
         
             

            <label for="batiment">Chambre</label>
        <select name="Chambre" id="Chambre" size=1 >
          <optgroup>
		  <option value=''></option>
		    <option value=1>Chambre A</option>
            <option value=2>Chambre B</option>
            <option value=3>Chambre C</option>
            <option value=4>Chambre D</option> 
          </optgroup>
          </select> 
          </fieldset> 
        
        </label>
        </p>
        </li>

					

				
				<div class="container-contact100-form-btn">
					<input type="submit" value="AJOUTER"  name="ajouter" class="contact100-form-btn">
						
					
				</div>

				<div class="contact100-form-social flex-c-m">
					<a href="#" class="contact100-form-social-item flex-c-m bg1 m-r-5">
						<i class="fa fa-facebook-f" aria-hidden="true"></i>
					</a>

					<a href="#" class="contact100-form-social-item flex-c-m bg2 m-r-5">
						<i class="fa fa-twitter" aria-hidden="true"></i>
					</a>

					<a href="#" class="contact100-form-social-item flex-c-m bg3">
						<i class="fa fa-youtube-play" aria-hidden="true"></i>
					</a>
				</div>
			</form>


           

			<div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
			</div>
		</div>
	</div>





<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
		$(".js-select2").each(function(){
			$(this).on('select2:open', function (e){
				$(this).parent().next().addClass('eff-focus-selection');
			});
		});
		$(".js-select2").each(function(){
			$(this).on('select2:close', function (e){
				$(this).parent().next().removeClass('eff-focus-selection');
			});
		});

	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

<script>

 document.getElementById('infoNonBoursier').style.display='none';
 document.getElementById('infoBoursier').style.display='none';
 document.getElementById('infoLoger').style.display='none';

 function showHideBourse(){
      if (document.getElementById('NonBoursier').checked){
        document.getElementById('infoNonBoursier').style.display='block';
        document.getElementById('infoBoursier').style.display='none';
       document.getElementById('infoLoger').style.display='none';
      }else if(document.getElementById('Boursier').checked) {
        document.getElementById('infoBoursier').style.display='block';
        document.getElementById('infoNonBoursier').style.display='none';
        document.getElementById('infoLoger').style.display='none';
      }

      else if(document.getElementById('Loger').checked){
        document.getElementById('infoLoger').style.display='block';
        document.getElementById('infoBoursier').style.display='none'; 
        document.getElementById('infoNonBoursier').style.display='none';
      }
 }
</script>

</body>
</html>
