<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/categorie.php";
include "../core/categorieC.php";
if (isset($_GET['numcat'])){
	$categorieC=new CategorieC();
    $result=$categorieC->recupererCategorie($_GET['numcat']);
	foreach($result as $row){
		$numcat=$row['numcat'];
		$nomcat=$row['nomcat'];
		
?>

<form method="POST">
<table>
<caption>Modifier Categorie</caption>
<tr>
<td>Numero de categorie</td>
<td><input type="number" name="numcat" value="<?PHP echo $numcat ?>"></td>
</tr>
<tr>
<td>Nom de categorie</td>
<td><input type="text" name="nomcat" value="<?PHP echo $nomcat ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="numcat_ini" value="<?PHP echo $_GET['numcat'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$categorie=new Categorie($_POST['numcat'],$_POST['nomcat']);
	$categorieC->modifierCategorie($categorie,$_POST['numcat_ini']);
	echo $_POST['numcat_ini'];
	header('Location: afficherCategorie.php');
}
?>
</body>
</HTMl>