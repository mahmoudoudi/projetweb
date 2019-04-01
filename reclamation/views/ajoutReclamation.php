<?PHP
include "../entities/reclamation.php";
include "../core/reclamationC.php";

if (  isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['tel']) && isset($_POST['adresse']) && isset($_POST['mail']) && isset($_POST['description'])){
$reclamation1=new reclamation($_POST['nom'],$_POST['prenom'],$_POST['tel'],$_POST['adresse'],$_POST['mail'],$_POST['description']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$reclamation1C=new reclamationC();
$reclamation1C->ajouterReclamation($reclamation1);
//header('Location: afficherReclamation.php');
  echo "<META http-equiv='refresh' content='0;URL=afficherReclamation.php'>";
	
}
//*/

?>