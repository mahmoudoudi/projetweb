<?php
include "../entities/coupon.php";
include "../core/couponC.php";

if (isset($_POST['idprod']) && isset($_POST['nomp']) && isset($_POST['valeur']) && isset($_POST['dateE']) && isset($_POST['prix1']))
{
$promotion=new promotion($_POST['idprod'],$_POST['nomp'],$_POST['valeur'],$_POST['dateE'],$_POST['prix1']);
$couponC=new couponC();
$couponC->ajouter($promotion);

 echo "<META http-equiv='refresh' content='0;URL=panierBE.php'>";

}
else
echo "nnnnnnnnnnnnnnnnnnnnnnnn";
?>