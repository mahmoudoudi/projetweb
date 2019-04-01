<?PHP
include "../core/panierC.php";
$evenement=new panierC();

if (isset($_POST["ide"])){
    $evenement->supprimerprod($_POST["ide"]);
header('Location: panierBE.php');
}

?>