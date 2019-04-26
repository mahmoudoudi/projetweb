<?PHP
include "tables-finance.php";
$financeF=new financeF();
if (isset($_POST["id"])){
	$financeF->supprimerfinance($_POST["id"]);
	//header('tables-finance.php');
}

?>