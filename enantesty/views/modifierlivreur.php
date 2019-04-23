<?php 
include ('C:/wamp64/www/enantesty/entities/livreur.php');
include ('C:/wamp64/www/enantesty/core/livreurC.php');


$livreurC=new livreurC();

 ?>
    <style>
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  bottom: 23px;

}


/* The popup form - hidden by default */
.form-popup {
  display: none;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

body {font-family: Arial, Helvetica, sans-serif;}

</style>


<script src="controleSaisie.js"></script>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <?php
    if (($_GET['login'])){
    $result=$livreurC->livreur_details($_GET['login']);
    foreach($result as $row){
      
?>

     <form  class="form-container" method="post"> 
    <h1> modifier un livreur </h1>
  
        <label > login  </label> 
        <input type="text" name="login" class="form-control" value="<?php echo $row['login'] ?>">
 
 

    

    

      
     <label > nom  </label> 
<input type="text" name="nom" class="form-control" value="<?php echo $row['nom'] ?>">
 

    

    

     <label > prenom  </label> 
      <input type="text" name="prenom" class="form-control"value="<?php echo $row['prenom'] ?>"></th>
    
 

   

        <label > dispo  </label> 
    <input type="text" name="dispo" class="form-control"value="<?php echo $row['dispo'] ?>">
    


      

      <label > secteur  </label> 
    <input type="text" name="secteur" class="form-control" value="<?php echo $row['secteur'] ?>">
    
   

      <label > tel  </label> 
      <br>
     <input type="text" name="tel" class="form-control" value="<?php echo $row['tel'] ?>">

<br>
       <label > date_naiss  </label> 
       <br>
   <input type="text" name="date_naiss"  class="form-control" value="<?php echo $row['date_naiss'] ?>">
    
  
<br>
           <label > mail  </label> 
           <br>
     <input type="text" name="mail"  class="form-control"value="<?php echo $row['mail'] ?>">
    
    
<br>
             <label > mdp  </label> 

      <input type="text" name="mdp"  class="form-control"value="<?php echo $row['mdp'] ?>">
    
    

      <label > num_permis  </label> 
      <input type="text" name="num_permis"  class="form-control"value="<?php echo $row['num_permis'] ?>">
    

    

   
  
      <input type="submit" name="modifier" onclick="return verifa()" class="btn" value="modifier" >
<input type="hidden" name="login_ini" value="<?PHP echo $_GET['login'];?>">

</form>
<?php } 

if (isset($_POST['modifier'])){
  $login=$_POST['login_ini'];
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $dispo=$_POST['dispo'];
  $secteur=$_POST['secteur'];
  $tel=$_POST['tel'];
  $date_naiss=$_POST['date_naiss'];
  $mail=$_POST['mail'];
  $mdp=$_POST['mdp'];
  $num_permis=$_POST['num_permis'];

$livreur=new livreur($login,$nom,$prenom,$tel,$secteur,$date_naiss,$mail,$mdp,$num_permis,$dispo);
  $livreurC->modifierlivreur($livreur,$_POST['login_ini']);
}
} ?>
</body>
</html>