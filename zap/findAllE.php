<!DOCTYPE html>
<html>
<title>Universite</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="dist/css/bootstrap.min.css">
  
  <script src="dist/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="dist/js/bootstrap.min.js"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">


<?php
    
    require 'Autoloader.php'; 
    Autoloader::register(); 
include 'menu.php';
?>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <?php
        include 'headerE.php';
        ?>

  
  




  

  <!-- Contact Section -->
  <div class="w3-container w3-padding-large ">
    <h4 id="contact"><b>Liste etudiant</b></h4>
   
    <hr class="w3-opacity">
  
<div class="container">

             
  <table class="table">
    <thead>
    
        <th>Matricule</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Telephone</th>
        <th>Date</th>
        </thead>
        <tbody>

      <?php
    

$serv = new Insertion();


foreach($serv->findAll("etudiant") as $etu){
  $id=$etu ->id_etudiant;
  $matricule=$etu ->matricule;
  $nom= $etu ->nom;
  $prenom=$etu ->prenom;
  $email=$etu ->email;
  $tel=$etu ->telephone;
  $date=$etu ->datenaissance;
echo  '<tr><td>'. $matricule.'</td>'.
'<td>'.$nom.'</td>'.
'<td>'.  $prenom.'</td>'.
'<td>'. $email.'</td>'.
'<td>'. $tel.'</td>'.
'<td>'. $date.'</td>';
/* echo "<td ><a href='editE.php?id=$id&matricule=$matricule&nom=$nom&prenom=$prenom&email=$email&tel=$tel&date=$date' class='btn btn-primary'><i class='fa fa-fw fa-edit'></i>modifier</a></td>";
echo "<td ><a href='deleteE.php?id=$id' class='btn btn-danger'><i class='fa fa-fw fa-close'></i>delete</a></td>";
 */echo "</tr> ";

;
}
?>
    
   

    
    </tbody>
  </table>
</div>
  </div>

  <!-- Footer -->
 
  
  

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
