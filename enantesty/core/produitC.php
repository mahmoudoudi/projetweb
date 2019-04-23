<?PHP
include "../config.php";  //connexion a la db
class ProduitC {
	/****************afficher produit***************/
    function afficherProduit($produit)
    {
		echo "Identifiant: ".$produit->getCin()."<br>";
		echo "Nom: ".$produit->getNom()."<br>";
		echo "Url: ".$produit->getUrl()."<br>";
		echo "Num cat: ".$produit->getNumcat()."<br>";
		echo "Quantité: ".$produit->getQuantite()."<br>";
		echo "Prix: ".$produit->getPrix()."<br>";
	}
	
	/*****************ajout****************************/
	function ajouterProduit($produit)
	{
		$sql="insert into produits (identifiant,nom,url,numcat,quantite,prix) values (:identifiant,:nom,:url,:numcat,:quantite,:prix)"; // requete sql
		$db = config::getConnexion();
		try
		{
        $req=$db->prepare($sql);  //???
		
        $identifiant=$produit->getCin();
        $nom=$produit->getNom();
		$url=$produit->getUrl();
		$numcat=$produit->getNumcat();
        $quantite=$produit->getQuantite();
        $prix=$produit->getPrix();
		$req->bindValue(':identifiant',$identifiant);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':url',$url);
		$req->bindValue(':numcat',$numcat);
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
		$sql="SElECT * From produits";  //tout afficher
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
	/**********************affichage**********************/
	function afficherProduitsparcat()
	{
		$sql="SElECT* From produits inner join categories on produits.numcat=categories.numcat";
		
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
		$sql="DELETE FROM produits where identifiant= :identifiant"; // supprimer un emp selon un cin donné 
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
		$sql="UPDATE produits SET  nom=:nom,url=:url,numcat=:numcat,quantite=:quantite,prix=:prix WHERE identifiant=:identifiant"; // modifier un emp selon cin donné
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try{		
        $req=$db->prepare($sql);
		$identifiant=$produit->getCin();
        $nom=$produit->getNom();
		$url=$produit->getUrl();
		$numcat=$produit->getNumcat();
        $quantite=$produit->getQuantite();
        $prix=$produit->getPrix();
		$datas = array( ':identifiant'=>$identifiant, ':nom'=>$nom, ':url'=>$url, ':numcat'=>$numcat,':quantite'=>$quantite,':prix'=>$prix);
		$req->bindValue(':identifiant',$identifiant);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':url',$url);
		$req->bindValue(':numcat',$numcat);
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
		$sql="SELECT * from produits where identifiant=$identifiant";
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
	function rechercherListeProduit($identifiant)
	{
		$sql="SELECT * from produits where identifiant like '%$identifiant%' or nom like '%$identifiant%' or numcat like '%$identifiant%' or prix like '%$identifiant%' or quantite like '%$identifiant%'    "; 
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	/*******************************Tri*******************************/
	function triProduits()
	{ $sql="SElECT * From produits order by identifiant ";  //tout afficher
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
	
	/*****************************Tri pour front par prix*******************/
	function triPrixAsc()
	{ $sql="SElECT * From produits order by prix ASC ";  //tout afficher
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
	
	function triPrixDesc()
	{ $sql="SElECT * From produits order by prix DESC ";  //tout afficher
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
}

?>