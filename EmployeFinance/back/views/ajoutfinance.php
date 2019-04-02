<?PHP
include "../entities/finance.php";
include "../core/financeF.php";



if (/*isset($_POST['id']) and*/ isset($_POST['pain']) and isset($_POST['patisserie']) and isset($_POST['viennoiserie']) and isset($_POST['divers']) and isset($_POST['premiere']) /*and isset($_POST['charge']) and isset($_POST['recette']) and isset($_POST['net'])*/)  {
$finance1=new employe($_POST['0'],$_POST['pain'],$_POST['patisserie'],$_POST['viennoiserie'],$_POST['divers'],$_POST['premiere'],$_POST['0'],$_POST['0'],$_POST['0']);
$financeF1=new financeF();
$financeF1->ajouterfinance($finance1);
header('Location: tables-finance.php');
	
}
else{
	echo "vérifier les champs";
}

?>