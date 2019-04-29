<?PHP
include "tables-jobs.php";
$jobsJ=new jobsJ();
if (isset($_POST["id"])){
	$jobsJ->supprimerjobs($_POST["id"]);
	//header('tables-employe.php');
}

?>