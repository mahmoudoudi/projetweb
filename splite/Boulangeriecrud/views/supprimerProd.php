<?PHP
include "../core/prodC.php";
include "../entities/prod.php";
$prodC=new ProdC();
if (isset($_POST["identifiant"])){
	$prodC->supprimerProd($_POST["identifiant"]);
	header('Location: table.php');
}

?>