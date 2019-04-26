<?php


include "../config1.php";

class clientC
{
	function ajouterClient($client)
	{
		$sql="insert into clients (idc,ndc,mdp,categoriec) values (:idc,:ndc,:mdp,:categoriec)";
		$db=config1::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$idc=$client->getidc();
			$ndc=$client->getndc();
			$mdp=$client->getmdp();
			$categoriec=$client->getcategoriec();

		
			$req->bindValue(':idc',$idc);
			$req->bindValue(':ndc',$ndc);
			$req->bindValue(':mdp',$mdp);
			$req->bindValue(':categoriec',$categoriec);
	
			
			$req->execute();





		}
		catch(Exception $e)
		{
			echo 'Erreur' .$e->getMessage();
		}
	}

	function afficherclient()
	{
		$sql="select * from clients";
		$db=config1::getConnexion();
		try
		{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e)
		{
			echo 'Erreur' .$e->getMessage();
		}
	}

		function afficherclienttrie()
	{
		$sql="select * from clients order by idc";
		$db=config1::getConnexion();
		try
		{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e)
		{
			echo 'Erreur' .$e->getMessage();
		}
	}
	
	function afficherclienttriendc()
	{
		$sql="select * from clients order by ndc";
		$db=config1::getConnexion();
		try
		{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e)
		{
			echo 'Erreur' .$e->getMessage();
		}
	}

	function supprimerclient($idc)
	{

		$sql="DELETE FROM clients where idc=:idc";
		$db = config1::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idc',$idc);
		try{
            $req->execute();
          //header('Location: panierBE.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function modifierclient($client,$idc)
	{

		 $sql="UPDATE clients SET ndc=:ndc, mdp=:mdp, categoriec=:categoriec WHERE idc=:idc";
		
		$db = config1::getConnexion();
try{		
        $req=$db->prepare($sql);
		$idc=$client->getidc();
		$ndc=$client->getndc();
        $mdp=$client->getmdp();
        $categoriec=$client->getcategoriec();
		$datas = array(':idc'=>$idc,':ndc'=>$ndc,':mdp'=>$mdp,':categoriec'=>$categoriec);
		$req->bindValue(':idc',$idc);
		$req->bindValue(':ndc',$ndc);	
		$req->bindValue(':mdp',$mdp);
		$req->bindValue(':categoriec',$categoriec);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
	}

	function getidc($idc){
		$sql="SELECT * from clients where idc=$idc";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function getndc($ndc){
		$sql="SELECT * from clients where ndc=$ndc";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return true;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
           
        }
	}
	
	function getmdp($mdp){
		$sql="SELECT * from clients where mdp=$mdp";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return true;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
           
        }
	}
	
	
	function rechercherListeClients($idc)
	{
		$sql="SELECT * from clients where idc like '%$idc%' or ndc like '%$idc%' or categoriec like '%$idc%'"; // recherche selon tarif donné
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