<?PHP
include "../entities/produit.php";
include "../core/produitC.php";
$produit=new Produit(75757575,'BEN Ahmed',50,20); // ajout d'un emp via php
$produitC=new ProduitC();
$produitC->afficherProduit($produit);
echo "****************";
echo "<br>";
echo "identifiant:".$produit->getCin();
echo "<br>";
echo "nom:".$produit->getNom();
echo "<br>";
echo "quantite:".$produit->getQuantite();
echo "<br>";
echo "prix:".$produit->getPrix();
echo "<br>";
/*echo "le salaire est : ";
$produitC->calculerSalaire($produit); 
echo "<br>";*/


?>