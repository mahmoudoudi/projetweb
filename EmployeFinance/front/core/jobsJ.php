<?PHP
include "../config.php";
class jobsJ {
function afficherjobs ($jobs){
		
		echo "id: ".$jobs->getid()."<br>";
		echo "poste: ".$jobs->getposte()."<br>";
		echo "salaire: ".$jobs->getsalaire()."<br>";
		echo "experience: ".$jobs->getexperience()."<br>";
		echo "horaire: ".$jobs->gethoraire()."<br>";
		echo "etat: ".$jobs->getetat()."<br>";		
	}
	
	function ajouterjobs($jobs){
		$sql = "insert INTO `jobs` (id,poste,salaire,experience,horaire,etat) VALUES (:id,:poste,:salaire,:experience,:horaire,:etat)";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id',$jobs->getid());
		$req->bindValue(':poste',$jobs->getposte());
		$req->bindValue(':salaire',$jobs->getsalaire());
		$req->bindValue(':experience',$jobs->getexperience());
		$req->bindValue(':horaire',$jobs->gethoraire());
		$req->bindValue(':etat',$jobs->getetat());

		try{
		$req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
		
	}
	
	function afficherjobss(){
		$sql="SElECT * From jobs where etat=1";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerjobs($id){
		$sql="DELETE FROM jobs where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierjobs($jobs,$id){
		$sql="UPDATE jobs SET poste=:poste, salaire=:salaire, experience=:experience, horaire=:horaire, etat=:etat WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $idn=$jobs->getid();
        $id_client=$jobs->getid_client();
        $total=$jobs->gettotal();
		$datas = array(':id1'=>$id1,':id'=>$id, ':poste'=>$poste,':experience'=>$experience, ':horaire'=>$horaire, ':etat'=>$etat);
		$req->bindValue(':id1',$id1);
		$req->bindValue(':id',$jobs->getid());
		$req->bindValue(':poste',$jobs->getposte());
		$req->bindValue(':salaire',$jobs->getsalaire());
		$req->bindValue(':experience',$jobs->getexperience());
		$req->bindValue(':horaire',$jobs->gethoraire());
		$req->bindValue(':etat',$jobs->getetat());
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererjobs($id){
		$sql="SELECT * from jobs where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListejobs($id){
		$sql="SELECT * from jobs where poste=$poste";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function recherche($search_value){
        $db = config::getConnexion();
            $sql="select * from jobs where poste like '%$search_value%'";
        try{
        $req=$db->prepare($sql);
        $req->execute();
        $jobs= $req->fetchALL(PDO::FETCH_OBJ);
        return $jobs;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }    
}
function trier() { 
        //$sql="SElECT * From jobs e inner join formationphp.jobs a on e.id= a.id";
        
       $db = config::getConnexion();
            $sql="SELECT * From jobs ORDER BY etat ASC";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $jobs= $req->fetchALL(PDO::FETCH_OBJ);
        return $jobs;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }    

}
function trier1(){
        //$sql="SElECT * From jobs e inner join formationphp.jobs a on e.id= a.id";
        
       $db = config::getConnexion();
            $sql="SELECT * From jobs ORDER BY etat DESC";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $jobs= $req->fetchALL(PDO::FETCH_OBJ);
        return $jobs;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }    
}

}	
?>

