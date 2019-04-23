<?php

include ('C:/wamp64/www/enantesty/livraison.php');
include ('C:/wamp64/www/enantesty/core/livraisonC.php');

$id=$_GET['id'];
$ec= new LivraisonC();
$ec->Supprimerlivraison($id);
header('Location: livraisons.php');  
?>