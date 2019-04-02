<?PHP
include "../entities/prod.php";
include "../core/prodC.php";

if (isset($_POST['identifiant']) and isset($_POST['nom']) and isset($_POST['quantite']) and isset($_POST['prix']))
{
$produit1=new Prod($_POST['identifiant'],$_POST['nom'],$_POST['quantite'],$_POST['prix']); // creation d'un  nouveau employe ayant les attributs entres ds le formulaire
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$prod1C=new ProdC(); // creation d'un nouveau employeC
$prod1C->ajouterProd($produit1); // affecter les attributs de employe a employeC
header('Location: datatables.php');
	
}
else
{
	echo "vĂ©rifier les champs";
}


?>