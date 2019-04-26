<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/reclamation.php";
include "../core/reclamationC.php";
if (isset($_GET['idr'])){
	$reclamationC=new reclamationC();
    $result=$reclamationC->recupererReclamation($_GET['idr']);
	foreach($result as $row){
		$idr=$row['idr'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$tel=$row['tel'];
		$adresse=$row['adresse'];
			$mail=$row['mail'];
				$description=$row['description'];
?>
<form method="POST">
<table>
<caption>Modifier Reclamation</caption>
<tr>
<td>ID</td>
<td><input type="text" name="idr" value="<?PHP echo $idr ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>numero telephone</td>
<td><input type="number" name="tel" value="<?PHP echo $tel ?>"></td>
</tr>
<tr>
<td>Adresse</td>
<td><input type="text" name="adresse" value="<?PHP echo $adresse ?>"></td>
</tr>
<tr>
<td>Mail</td>
<td><input type="text" name="mail" value="<?PHP echo $mail ?>"></td>
</tr>
<tr>
<td>Description</td>
<td><input type="text" name="description" value="<?PHP echo $description ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idr_ini" value="<?PHP echo $_GET['idr'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$reclamation=new reclamation($_POST['idr'],$_POST['nom'],$_POST['prenom'],$_POST['tel'],$_POST['adresse'],$_POST['mail'],$_POST['description']);
	$reclamationC->modifierReclamation($reclamation,$_POST['idr_ini']);
	echo $_POST['idr_ini'];
		//header('Location: afficherReclamation.php');
		  echo "<META http-equiv='refresh' content='0;URL=panierBE.php'>";

}
?>
</body>
</HTMl>