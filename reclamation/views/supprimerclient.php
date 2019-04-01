<?PHP
include "../core/clientC.php";
$client=new clientC();

if (isset($_POST["idC"])){
    $client->supprimerclient($_POST["idC"]);
header('Location: panierBE.php');
}

?>