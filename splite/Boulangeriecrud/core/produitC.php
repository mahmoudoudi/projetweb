<?PHP
include "../config.php";  //connexion a la db
class ProduitC {
	/****************afficher produit***************/
    function afficherProduit($produit)
    {
		echo "Identifiant: ".$produit->getCin()."<br>";
		echo "Nom: ".$produit->getNom()."<br>";
		echo "Quantité: ".$produit->getQuantite()."<br>";
		echo "Prix: ".$produit->getPrix()."<br>";
	}
	/********************calcul salaire*************
	function calculerSalaire($employe)
	{
		echo $employe->getNbHeures() * $employe->getTarifHoraire();
	}
	*****************ajout****************************/
	function ajouterProduit($produit)
	{
		$sql="insert into boulangerie (identifiant,nom,quantite,prix) values (:identifiant,:nom,:quantite,:prix)"; // requete sql
		$db = config::getConnexion();
		try
		{
        $req=$db->prepare($sql);  //???
		
        $identifiant=$produit->getCin();
        $nom=$produit->getNom();
        $quantite=$produit->getQuantite();
        $prix=$produit->getPrix();
		$req->bindValue(':identifiant',$identifiant);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':prix',$prix);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	/**********************affichage**********************/
	function afficherProduits()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From boulangerie";  //tout afficher
		$db = config::getConnexion();
		try
		{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	/************  supprimer ******************************/
	function supprimerProduit($identifiant){
		$sql="DELETE FROM boulangerie where identifiant= :identifiant"; // supprimer un emp selon un cin donné 
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':identifiant',$identifiant);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	/********** modifier ****************************/
	function modifierProduit($produit,$identifiant){
		$sql="UPDATE boulangerie SET  nom=:nom,quantite=:quantite,prix=:prix WHERE identifiant=:identifiant"; // modifier un emp selon cin donné
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try{		
        $req=$db->prepare($sql);
		$identifiant=$produit->getCin();
        $nom=$produit->getNom();
        $quantite=$produit->getQuantite();
        $prix=$produit->getPrix();
		$datas = array( ':identifiant'=>$identifiant, ':nom'=>$nom,':quantite'=>$quantite,':prix'=>$prix);
		$req->bindValue(':identifiant',$identifiant);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':prix',$prix);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
             print_r($datas);
        }
		
	}
	/************************** recuperer emp *****************************/
	function recupererProduit($identifiant)
	{
		$sql="SELECT * from boulangerie where identifiant=$identifiant";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    /********************************* recherche ************************************/	
	function rechercherListeProduit($prix)
	{
		$sql="SELECT * from boulangerie where prix=$prix"; // recherche selon tarif donné
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>