<?php

include "../config.php";
 $id=$_POST['id'];
 $poste = $_POST['poste'];
 $salaire = $_POST['salaire'];
 $experience=$_POST['experience'];
 $horaire=$_POST['horaire'];
 $etat=$_POST['etat'];



$db=config::getConnexion();
$result=$db->prepare("UPDATE jobs SET `id`='$id' , `poste`='$poste', `salaire`='$salaire', `experience`='$experience', `horaire`='$horaire', `etat`='$etat' WHERE `jobs`.`id`='$id' ");
$result->execute();
header('location: tables-jobs.php');


  ?>

