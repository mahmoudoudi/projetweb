<?php

include "../config.php";
 $cin=$_POST['cin'];
 $nom = $_POST['nom'];
 $prenom = $_POST['prenom'];
 $tel=$_POST['tel'];
 $poste=$_POST['poste'];
 $horaire=$_POST['horaire'];
 $salaire=$_POST['salaire'];



$db=config::getConnexion();
$result=$db->prepare("UPDATE employe SET `cin`='$cin' , `nom`='$nom', `prenom`='$prenom', `tel`='$tel', `poste`='$poste', `horaire`='$horaire', `salaire`='$salaire' WHERE `employe`.`cin`='$cin' ");
$result->execute();
header('location: tables-employe.php');


  ?>

