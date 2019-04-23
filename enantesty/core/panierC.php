<?php


include "../config1.php";

class panierC
{
	function ajouterprod($evenement)
	{
		$sql="insert into evenement (ide,typee,descriptione,prixe) values (:ide,:typee,:descriptione,:prixe)";
		$db=config1::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$ide=$evenement->getide();
			$typee=$evenement->gettypee();
			$prixe=$evenement->getprixe();
			$descriptione=$evenement->getdescriptione();
			$req->bindValue(':ide',$ide);
			$req->bindValue(':typee',$typee);
			
			$req->bindValue(':descriptione',$descriptione);
			$req->bindValue(':prixe',$prixe);
			$req->execute();





		}
		catch(Exception $e)
		{
			echo 'Erreur' .$e->getMessage();
		}
	}

	function afficherprod()
	{
		$sql="select * from evenement";
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

	function supprimerprod($ide)
	{

		$sql="DELETE FROM evenement where ide=:ide";
		$db = config1::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':ide',$ide);
		try{
            $req->execute();
          //header('Location: panierBE.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function modifierpanier($evenement,$ide)
	{

		 $sql="UPDATE evenement SET  typee=:typee, prixe=:prixe, descriptione=:descriptione WHERE ide=:ide";
		
		$db = config1::getConnexion();
try{		
        $req=$db->prepare($sql);
			$ide=$evenement->getide();
			$typee=$evenement->gettypee();
			$prixe=$evenement->getprixe();
			$descriptione=$evenement->getdescriptione();
			
		$datas = array(':ide'=>$ide,':typee'=>$typee,':prixe'=>$prixe,':descriptione'=>$descriptione);
		    $req->bindValue(':ide',$ide);
			$req->bindValue(':typee',$typee);
			$req->bindValue(':prixe',$prixe);
			$req->bindValue(':descriptione',$descriptione);
			
			
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
	}

	function getid($ide){
		$sql="SELECT * from evenement where ide=$ide";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function gettype($typee){
		$sql="SELECT * from evenement where typee=$typee";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return true;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
}