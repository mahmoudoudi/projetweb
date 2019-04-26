<?php

include "../config.php";


 $id=$_POST['id'];
 $pain = $_POST['pain'];
 $patisserie = $_POST['patisserie'];
 $viennoiserie=$_POST['viennoiserie'];
 $divers=$_POST['divers'];
 $premiere=$_POST['premiere'];
 $charge=$divers+$premiere;

 $recette=$pain+$patisserie+$viennoiserie;

 $net=$recette-$divers;


$db=config::getConnexion();
$result=$db->prepare("UPDATE finance SET `id`='$id' , `pain`='$pain', `patisserie`='$patisserie', `viennoiserie`='$viennoiserie', `divers`='$divers', `premiere`='$premiere', `charge`='$charge', `recette`='$recette',`net`='$net' WHERE `finance`.`id`='$id' ");
$result->execute();
header('location: tables-finance.php');


  ?>

