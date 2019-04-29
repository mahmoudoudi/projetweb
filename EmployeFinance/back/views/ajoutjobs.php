<?PHP
include "../entities/jobs.php";
include "../core/jobsJ.php";

if ( /*isset($_POST['id']) and*/ ($_POST['poste']) and isset($_POST['salaire']) and isset($_POST['experience']) and isset($_POST['horaire']) and isset($_POST['etat'])){ 
$jobs1=new jobs($_POST['0'],$_POST['poste'],$_POST['salaire'],$_POST['experience'],$_POST['horaire'],$_POST['etat']);
$jobsC1=new jobsJ();
$jobsC1->ajouterjobs($jobs1);
header('Location: tables-jobs.php');
	
}
else{
	echo "vérifier les champs";
}

?>