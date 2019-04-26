<?php 
include ('C:/wamp/www/tameplate/entities/livreur.php');
include ('C:/wamp/www/tameplate\core/livreurC.php');


$livreurC=new livreurC();

 ?>



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

  <form method="POST">
    <table class="table table-dark" border="">
  <thead>
      <tr>
      
      <th scope="col">login</th>
<th><input type="text" name="login" value="<?php echo $row['login'] ?>"></th>
 

    

    </tr>
      <tr>
      
      <th scope="col">nom</th>
<th><input type="text" name="nom" value="<?php echo $row['nom'] ?>"></th>
 

    

    </tr>
          <tr>

      <th scope="col">prenom</th>
      <th><input type="text" name="prenom" value="<?php echo $row['prenom'] ?>"></th>
    
    </tr>

      <tr>

      <th scope="col">dispo</th>
      <th><input type="text" name="dispo"value="<?php echo $row['dispo'] ?>"></th>
    
    </tr>

      <tr>

      <th scope="col">secteur</th>
      <th><input type="text" name="secteur"value="<?php echo $row['secteur'] ?>"></th>
    
    </tr>

     <tr>

      <th scope="col">tel</th>
      <th><input type="number" name="tel"value="<?php echo $row['tel'] ?>"></th>
    
    </tr>

     <tr>

      <th scope="col">date_naiss</th>
      <th><input type="date" name="date_naiss"value="<?php echo $row['date_naiss'] ?>"></th>
    
    </tr>


     <tr>

      <th scope="col">mail</th>
      <th><input type="Email" name="mail"value="<?php echo $row['mail'] ?>"></th>
    
    </tr>


       <tr>

      <th scope="col">mdp</th>
      <th><input type="text" name="mdp"value="<?php echo $row['mdp'] ?>"></th>
    
    </tr>

       <tr>

      <th scope="col">num_permis</th>
      <th><input type="number" name="num_permis"value="<?php echo $row['num_permis'] ?>"></th>
    
    </tr>
    

    <tr>
      <th></th>
      <th><input type="submit" name="modifier" value="modifier" >
<input type="hidden" name="login_ini" value="<?PHP echo $_GET['login'];?>"></th>

    </tr>
     
  </thead>

 
  
</table>
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