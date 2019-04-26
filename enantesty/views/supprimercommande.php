<?PHP
include "../core/produitC.php";
include "../core/commandeC.php";
include "../entities/commande.php";
session_start();
$_SESSION['id']=2;
if(isset($_SESSION['id']))
{
$commandeC=new commandeC();
if (isset($_POST["idCommande"]))
{
	$commande=$commandeC->recuperercommande($_POST["idCommande"]);
	$info=$commande->fetch();
	$commande=new commande($info["idCommande"],$info["dateCommande"],$info["montantCommande"],$info["etatCommande"],$info["lieuLivraison"],$info["prixLivraison"],$info["idClient"]);


	$annuler="Annulee";
	$commande->set_etatCommande($annuler);
	$dateactuelle = date("Y-m-d");
	$commande->set_dateCommande($dateactuelle);

	$commandeC->ajouterhistorique($commande);
	$commandeC->supprimercommande($_POST["idCommande"]);
	$commandeC->supprimercontenucommande($_POST["idCommande"]);
	header('Location: affichercommande.php');
}

}

?>