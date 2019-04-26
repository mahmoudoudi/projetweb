<?PHP
require_once "../config.php"; 
class CategorieC {
	/****************afficher produit***************/
    function afficherCategorie($categorie)
    {
		echo "Numero de catégorie: ".$categorie->getNumcat()."<br>";
		echo "Nom de catégorie: ".$categorie->getNomcat()."<br>";
		
	}
	/********************calcul salaire*************
	function calculerSalaire($employe)
	{
		echo $employe->getNbHeures() * $employe->getTarifHoraire();
	}
	*****************ajout****************************/
	function ajouterCategorie($categorie)
	{
		$sql="insert into categories (numcat,nomcat) values (:numcat,:nomcat)"; // requete sql
		$db = config::getConnexion();
		try
		{
        $req=$db->prepare($sql);  //???
		
        $numcat=$categorie->getNumcat();
        $nomcat=$categorie->getNomcat();
		$req->bindValue(':numcat',$numcat);
		$req->bindValue(':nomcat',$nomcat);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	/**********************affichage**********************/
	function afficherCategories()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From categories";  //tout afficher
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
	function supprimerCategorie($numcat){
		$sql="DELETE FROM categories where numcat= :numcat"; // supprimer un emp selon un cin donné 
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':numcat',$numcat);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	/********** modifier ****************************/
	function modifierCategorie($categorie,$numcat){
		$sql="UPDATE categories SET nomcat=:nomcat WHERE numcat=:numcat"; // modifier un emp selon cin donné
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try{		
        $req=$db->prepare($sql);
		$numcatt=$categorie->getNumcat();
        $nomcat=$categorie->getNomcat();
		$datas = array(':numcat'=>$numcat,':nomcat'=>$nomcat);
	
		$req->bindValue(':numcat',$numcat);
		$req->bindValue(':nomcat',$nomcat);
		
		
		
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
	function recupererCategorie($numcat)
	{
		$sql="SELECT * from categories where numcat=$numcat";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    /********************************* recherche ************************************
	function rechercherListeCategorie($prix)
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
	}****/
}

?>