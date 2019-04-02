<?php
include "C:/wamp/www/tameplate/config.php";
/**
 * 
 */

 class LivraisonC 
{
	
function ajouterLivraison($livraison)
	{

 	$sql="INSERT INTO livraison (idcommande,datecommande,montantcommande,etatcommande,lieuLivraison,prixlivraison,idlivreur,idclient,etat) VALUES(:idcommande,:datecommande,:montantcommande,:etatcommande,:lieuLivraison,:prixlivraison,:idlivreur,:idclient,:etat)";
 	$db = config::getConnexion();
 		try{

        $req=$db->prepare($sql);		
        $idcommande=$livraison->get_idCommande();
        $datecommande=$livraison->get_dateCommande();
        $montantcommande=$livraison->get_montantCommande();
        $etatcommande=$livraison->get_etatCommande();
        $lieuLivraison=$livraison->get_lieuLivraison();
        $prixlivraison=$livraison->get_prixLivraison();
        $idlivreur=$livraison->get_idLivreur();
        $idclient=$livraison->get_idClient();
        $etat=$livraison->get_etat();
		$req->bindValue(':idcommande',$idcommande);
		$req->bindValue(':datecommande',$datecommande);
		$req->bindValue(':montantcommande',$montantcommande);
		$req->bindValue(':etatcommande',$etatcommande);
		$req->bindValue(':lieuLivraison',$lieuLivraison);
	    $req->bindValue(':prixlivraison',$prixlivraison);
		$req->bindValue(':idlivreur',$idlivreur);
		$req->bindValue(':idclient',$idclient);
		$req->bindValue(':etat',$etat);

            if($req->execute())
            {
            	echo "data insrted successul";
            }
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}



function modifierlivraison($Livraison,$idcommande)
    {
        $db = config::getConnexion();
        $sql="UPDATE livraison SET  datecommande=:datecommande, montantcommande=:montantcommande, etatcommande=:etatcommande, lieuLivraison=:lieuLivraison, prixlivraison=:prixlivraison, idlivreur=:idlivreur, idclient=:idclient, etat=:etat where idcommande=$idcommande";
        try{

        $req=$db->prepare($sql);        
        $datecommande=$Livraison->get_dateCommande();
        $montantcommande=$Livraison->get_montantCommande();
        $etatcommande=$Livraison->get_etatCommande();
        $lieulivraison=$Livraison->get_lieuLivraison();
        $prixlivraison=$Livraison->get_prixLivraison();
        $idlivreur=$Livraison->get_idLivreur();
        $idclient=$Livraison->get_idClient();
        $etat=$Livraison->get_etat();
                $req->bindValue(':idcommande',$idcommande);

        $req->bindValue(':datecommande',$datecommande);
        $req->bindValue(':montantcommande',$montantcommande);
        $req->bindValue(':etatcommande',$etatcommande);
        $req->bindValue(':lieulivraison',$lieulivraison);
        $req->bindValue(':prixlivraison',$prixlivraison);
        $req->bindValue(':idlivreur',$idlivreur);
        $req->bindValue(':idclient',$idclient);
        $req->bindValue(':etat',$etat);


           if( $req->execute())
           {
            echo 'aaaaaaaaaaaaaaaa';
           }
           else 
            echo 'nnnnnnnnnnnn';
        }
        catch (Exception $e)
        {

            echo 'Erreur: '.$e->getMessage();
        }
    }
   

function recupererlivraison($idcommande){
        $sql="SELECT * from livraison where idcommande=$idcommande";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        $req->execute();
        $livraison= $req->fetchALL(PDO::FETCH_OBJ);
        return $livraison;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
function Supprimerlivraison($idcommande){
        $sql="DELETE  from livraison where idcommande=$idcommande";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function afficherlivraison()
    {
        $db = config::getConnexion();
            $sql="SELECT *FROM livraison";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $livraison= $req->fetchALL(PDO::FETCH_OBJ);
        return $livraison;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

function recherche($search_value){
        $db = config::getConnexion();
            $sql="select * from livreur where login like '%$search_value%'";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $livraison= $req->fetchALL(PDO::FETCH_OBJ);
        echo $livraison["login"];
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }    
}

}
?>