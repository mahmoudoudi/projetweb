<?php


include "../config.php";

class couponC
{
	function ajouter($promotion)
	{
		$sql="insert into promotion (idprod,nomp,valeur,dateA,dateE,prix1) values (:idprod,:nomp,:valeur,:dateA,:dateE,:prix1)";
		$db=config::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$idprod=$promotion->getidprod();
			$nomp=$promotion->getnomp();
			$valeur=$promotion->getvaleur();
			$dateA=$promotion->getdateA();
			$dateE=$promotion->getdateE();
			$prix1=$promotion->getprix1();
		   

			$req->bindValue(':idprod',$idprod);
			$req->bindValue(':nomp',$nomp);
			$req->bindValue(':valeur',$valeur);
			$req->bindValue(':dateA',$dateA);
			$req->bindValue(':dateE',$dateE);
			$req->bindValue(':prix1',$prix1);
			
			$req->execute();





		}
		catch(Exception $e)
		{
			echo 'Erreur' .$e->getMessage();
		}
	}

	function afficherpromotion()
	{
		$sql="select * from promotion";
		$db=config::getConnexion();
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

	function supprimercoupon($idprod)
	{

		$sql="DELETE FROM promotion where idprod=:idprod";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idprod',$idprod);
		try{
            $req->execute();
          //header('Location: panierBE.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function modifiercoupon($promotion,$idprod)
	{

		 $sql="UPDATE promotion SET nomp=:nomp, valeur=:valeur, dateE=:dateE, prix1=:prix1 WHERE idprod=:idprod";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		$idprod=$promotion->getidprod();
		$nomp=$promotion->getnomp();
        $valeur=$promotion->getvaleur();
        $dateE=$promotion->getdateE();
        $prix1=$promotion->getprix1();
        

		$datas = array(':idprod'=>$idprod,':nomp'=>$nomp,':valeur'=>$valeur,':dateE'=>$dateE,':prix1'=>$prix1);
		$req->bindValue(':idprod',$idprod);
		$req->bindValue(':nomp',$nomp);	
		$req->bindValue(':valeur',$valeur);
		$req->bindValue(':dateE',$dateE);
		$req->bindValue(':prix1',$prix1);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
	}

	function getid($idprod){
		$sql="SELECT * from promotion where idprod=$idprod";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function getnom($nomp){
		$sql="SELECT * from promotion where nomp=$nomp";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return true;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
           
        }
	}

	function affichertrie()
	{
		$sql="select * from promotion order by idprod";
		$db=config::getConnexion();
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

function rechercherparpourcentage($valeur)
	{
		$sql="SELECT * from promotion where valeur like '%$valeur%' or nomp like '%$valeur%' or idprod like '%$valeur%'"; // recherche selon tarif donné
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