<?PHP
include "../core/reclamationC.php";
$reclamationC=new reclamationC();
if (isset($_POST["idr"])){
	$reclamationC->supprimerReclamation($_POST["idr"]);
	header('Location: panierBE.php');
}

?>