<?php
include "../entities/coupon.php";
include "../core/couponC.php";

if (isset($_POST['idprod']) && isset($_POST['nomp']) && isset($_POST['valeur']) && isset($_POST['dateE']))
{
$promotion=new promotion($_POST['idprod'],$_POST['nomp'],$_POST['valeur'],$_POST['dateE']);
$couponC=new couponC();
$couponC->ajouter($promotion);

 echo "<META http-equiv='refresh' content='0;URL=panierBE.php'>";

}
else
echo "nnnnnnnnnnnnnnnnnnnnnnnn";
?>