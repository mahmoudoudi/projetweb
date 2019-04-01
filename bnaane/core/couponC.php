<?php


include "../config.php";

class couponC
{
	function ajouter($promotion)
	{
		$sql="insert into promotion (idprod,nomp,valeur,dateA,dateE) values (:idprod,:nomp,:valeur,:dateA,:dateE)";
		$db=config::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$idprod=$promotion->getidprod();
			$nomp=$promotion->getnomp();
			$valeur=$promotion->getvaleur();
			$dateA=$promotion->getdateA();
			$dateE=$promotion->getdateE();
		
			$req->bindValue(':idprod',$idprod);
			$req->bindValue(':nomp',$nomp);
			$req->bindValue(':valeur',$valeur);
			$req->bindValue(':dateA',$dateA);
			$req->bindValue(':dateE',$dateE);
			
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

		 $sql="UPDATE promotion SET nomp=:nomp, valeur=:valeur, dateE=:dateE WHERE idprod=:idprod";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		$idprod=$promotion->getidprod();
		$nomp=$promotion->getnomp();
        $valeur=$promotion->getvaleur();
        $dateE=$promotion->getdateE();
		$datas = array(':idprod'=>$idprod,':nomp'=>$nomp,':valeur'=>$valeur,':dateE'=>$dateE);
		$req->bindValue(':idprod',$idprod);
		$req->bindValue(':nomp',$nomp);	
		$req->bindValue(':valeur',$valeur);
		$req->bindValue(':dateE',$dateE);
		
		
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
	
}