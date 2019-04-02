<?PHP
include "../config1.php";  //connexion a la db
class ProdC {
	/****************afficher produit***************/
    function afficherProd($produit)
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
	function ajouterProd($produit)
	{
		$sql="insert into patisserie (identifiant,nom,quantite,prix) values (:identifiant,:nom,:quantite,:prix)"; // requete sql
		$db = config1::getConnexion();
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
	function afficherProds()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From patisserie";  //tout afficher
		$db = config1::getConnexion();
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
	function supprimerProd($identifiant){
		$sql="DELETE FROM patisserie where identifiant= :identifiant"; // supprimer un emp selon un cin donné 
		$db = config1::getConnexion();
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
	function modifierProd($produit,$identifiant){
		$sql="UPDATE patisserie SET  nom=:nom,quantite=:quantite,prix=:prix WHERE identifiant=:identifiant"; // modifier un emp selon cin donné
		
		$db = config1::getConnexion();
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
	function recupererProd($identifiant)
	{
		$sql="SELECT * from patisserie where identifiant=$identifiant";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    /********************************* recherche ************************************/	
	function rechercherListeProd($prix)
	{
		$sql="SELECT * from patisserie where prix=$prix"; // recherche selon tarif donné
		$db = config1::getConnexion();
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