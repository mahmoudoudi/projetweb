<?PHP
include "../config.php";
class employeE {
function afficheremploye ($employe){
		
		echo "cin: ".$employe->getcin()."<br>";
		echo "nom: ".$employe->getnom()."<br>";
		echo "prenom: ".$employe->getprenom()."<br>";
		echo "tel: ".$employe->gettel()."<br>";
		echo "poste: ".$employe->getposte()."<br>";
		echo "horaire: ".$employe->gethoraire()."<br>";
		echo "salaire: ".$employe->getsalaire()."<br>";		
	}
	
	function ajouteremploye($employe){
		$sql = "insert INTO `employe` (cin,nom,prenom,tel,poste,horaire,salaire) VALUES (:cin,:nom,:prenom,:tel,:poste,:horaire,:salaire)";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':cin',$employe->getcin());
		$req->bindValue(':nom',$employe->getnom());
		$req->bindValue(':prenom',$employe->getprenom());
		$req->bindValue(':tel',$employe->gettel());
		$req->bindValue(':poste',$employe->getposte());
		$req->bindValue(':horaire',$employe->gethoraire());
		$req->bindValue(':salaire',$employe->getsalaire());

		try{
		$req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
		
	}
	
	function afficheremployes(){
		$sql="SElECT * From employe ORDER by salaire desc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimeremploye($cin){
		$sql="DELETE FROM employe where cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifieremploye($employe,$cin){
		$sql="UPDATE employe SET nom=:nom, prenom=:prenom, tel=:tel, poste=:poste, horaire=:horaire, salaire=:salaire WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $idn=$employe->getid();
        $id_client=$employe->getid_client();
        $total=$employe->gettotal();
		$datas = array(':cin1'=>$cin1,':cin'=>$cin, ':nom'=>$nom,':tel'=>$tel, ':poste'=>$poste, ':horaire'=>$horaire, ':salaire'=>$salaire);
		$req->bindValue(':cin1',$cin1);
		$req->bindValue(':cin',$employe->getcin());
		$req->bindValue(':nom',$employe->getnom());
		$req->bindValue(':prenom',$employe->getprenom());
		$req->bindValue(':tel',$employe->gettel());
		$req->bindValue(':poste',$employe->getposte());
		$req->bindValue(':horaire',$employe->gethoraire());
		$req->bindValue(':salaire',$employe->getsalaire());
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupereremploye($cin){
		$sql="SELECT * from employe where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeemploye($cin){
		$sql="SELECT * from employe where cin=$cin";
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
            $sql="select * from employe where nom like '%$search_value%' or prenom like '%$search_value%'";
        try{
        $req=$db->prepare($sql);
        $req->execute();
        $employe= $req->fetchALL(PDO::FETCH_OBJ);
        return $employe;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }    
}
function trier(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        
       $db = config::getConnexion();
            $sql="SElECT * From employe ORDER BY salaire ASC";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $employe= $req->fetchALL(PDO::FETCH_OBJ);
        return $employe;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }    
}
function trier1(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        
       $db = config::getConnexion();
            $sql="SElECT * From employe ORDER BY salaire DESC";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $employe= $req->fetchALL(PDO::FETCH_OBJ);
        return $employe;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }    
}
}

	
?>

