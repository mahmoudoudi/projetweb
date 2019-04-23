<?php

include ('C:/wamp64/www/enantesty/entities/livreur.php');
include ('C:/wamp64/www/enantesty/core/livreurC.php');
$log=$_GET['login'];
$ec= new livreurC();
$ec->Supprimerlivreur($log);
header('Location: afficherlivreur.php');  
?>