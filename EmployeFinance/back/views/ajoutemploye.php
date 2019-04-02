<?PHP
include "../entities/employe.php";
include "../core/employeE.php";

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['tel']) and isset($_POST['poste']) and isset($_POST['horaire']) and isset($_POST['salaire'])){ 
$employe1=new employe($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['tel'],$_POST['poste'],$_POST['horaire'],$_POST['salaire']);
$employeC1=new employeE();
$employeC1->ajouteremploye($employe1);
header('Location: tables-employe.php');
	
}
else{
	echo "vérifier les champs";
}

?>