<?PHP
include "../entities/produit.php";
include "../core/produitC.php";

if (isset($_POST['identifiant']) and isset($_POST['nom']) and isset($_POST['url']) and isset($_POST['numCat']) and isset($_POST['quantite']) and isset($_POST['prix']))
{
$produit1=new Produit($_POST['identifiant'],$_POST['nom'],$_POST['url'],$_POST['numCat'],$_POST['quantite'],$_POST['prix']); // creation d'un  nouveau employe ayant les attributs entres ds le formulaire
//Partie2
/*
var_dump($produit1);
}
*/
//Partie3

$produit1C=new ProduitC(); // creation d'un nouveau employeC
$produit1C->ajouterProduit($produit1); // affecter les attributs de employe a employeC
header('Location: taboulangerie.php');
	
}
else
{
	echo "vĂ©rifier les champs";
}


?>