<?PHP
include "../core/categorie.php";
$categorieC=new CategorieC();
if (isset($_POST["numcat"])){
	$categorieC->supprimerCategorie($_POST["numcat"]);
	header('Location: afficherCategorie.php');
}

?>