<?PHP
include "../core/reclamationC.php";
$reclamationC=new reclamationC();
if (isset($_POST["ids"])){
	$reclamationC->supprimerReclamation($_POST["ids"]);
	//header('Location: panierBE.php');
	  echo "<META http-equiv='refresh' content='0;URL=interface.php'>";

}

?>