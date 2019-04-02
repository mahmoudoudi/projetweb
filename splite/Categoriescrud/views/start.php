<?PHP
include "../entities/categorie.php";
include "../core/categorieC.php";
$categorie=new Categrorie(75757575,'BEN Ahmed'); // ajout d'un emp via php
$categorieC=new CategrorieC();
$categorieC->afficherCategorie($categorie);
echo "****************";
echo "<br>";
echo "numero:".$categorie->getNumcat();
echo "<br>";
echo "nom:".$categorie->getNomcat();
echo "<br>";

/*echo "le salaire est : ";
$produitC->calculerSalaire($produit); 
echo "<br>";*/


?>