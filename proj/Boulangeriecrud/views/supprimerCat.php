<?PHP
include "../core/categorieC.php";
$categorieC=new CategorieC();
if (isset($_POST["numcat"])){
	$categorieC->supprimerCategorie($_POST["numcat"]);
	header('Location: editable.php');
}

?>