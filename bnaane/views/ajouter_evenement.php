<?php
include "../entities/panier.php";
include "../core/panierC.php";

if (isset($_POST['ide']) && isset($_POST['typee']) && isset($_POST['descriptione']) && isset($_POST['prixe']))
{
$evenement=new evenement($_POST['ide'],$_POST['typee'],$_POST['descriptione'],$_POST['prixe']);
$panierC=new panierC();
$panierC->ajouterprod($evenement);

 echo "<META http-equiv='refresh' content='0;URL=gestionevnmnt.php'>";

}
else
echo "nnnnnnnnnnnnnnnnnnnnnnnn";
?>