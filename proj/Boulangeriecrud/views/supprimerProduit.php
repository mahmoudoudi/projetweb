<?PHP
include "../core/produitC.php";
include "../entities/produit.php";
$produitC=new ProduitC();
if (isset($_POST["identifiant"])){
	$produitC->supprimerProduit($_POST["identifiant"]);
	header('Location: editable.php');
}

?>