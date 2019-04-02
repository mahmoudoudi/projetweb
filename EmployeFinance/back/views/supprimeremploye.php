<?PHP
include "tables-employe.php";
$employeE=new employeE();
if (isset($_POST["cin"])){
	$employeE->supprimeremploye($_POST["cin"]);
	//header('tables-employe.php');
}

?>