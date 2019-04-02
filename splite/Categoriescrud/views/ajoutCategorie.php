<?PHP
include "../entities/categorie.php";
include "../core/categorieC.php";

if (isset($_POST['numcat']) and isset($_POST['nomcat']))
{
$categorie1=new Categorie($_POST['numcat'],$_POST['nomcat']); // creation d'un  nouveau employe ayant les attributs entres ds le formulaire
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$categorie1C=new CategorieC(); // creation d'un nouveau employeC
$categorie1C->ajouterCategorie($categorie1); // affecter les attributs de employe a employeC
header('Location: afficherCategorie.php');
	
}
else
{
	echo "vĂ©rifier les champs";
}
//*/

?>