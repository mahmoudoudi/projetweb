<?PHP
include "../config.php";
class reclamationC {
function afficherReclamation ($reclamation){
			echo "idReclamation: ".$reclamation->getidr()."<br>";
		echo "Nom: ".$reclamation->getNom()."<br>";
		echo "Prénom: ".$reclamation->getPrenom()."<br>";
		echo "Numero telephone: ".$reclamation->getTel()."<br>";
		echo "Adresse: ".$reclamation->getAdresse()."<br>";
		echo "Mail: ".$reclamation->getMail()."<br>";
		echo "Description: ".$reclamation->getDescription()."<br>";


	}

	function ajouterReclamation($reclamation){
		$sql="insert into reclamations (idr,nom,prenom,tel,adresse,mail,description) values (:idr,:nom,:prenom,:tel,:adresse,:mail,:description)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
  			$idr=$reclamation->getidr();
        $nom=$reclamation->getNom();
        $prenom=$reclamation->getPrenom();
        $tel=$reclamation->getTel();
				$adresse=$reclamation->getAdresse();
        $mail=$reclamation->getMail();
				$description=$reclamation->getDescription();
				
		$req->bindValue(':idr',$idr);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':description',$description);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherReclamations(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From reclamations";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerReclamation($idr){
		$sql="DELETE FROM reclamations where idr=:idr";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idr',$idr);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierReclamation($reclamation,$idr){
		$sql="UPDATE reclamations SET  nom=:nom, prenom=:prenom, tel=:tel,adresse=:adresse, mail=:mail,description=:description WHERE idr=$idr";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $nom=$reclamation->getNom();
        $prenom=$reclamation->getPrenom();
			  $tel=$reclamation->getTel();
				$adresse=$reclamation->getAdresse();
        $mail=$reclamation->getMail();
        $description=$reclamation->getDescription();
				
  
		$datas = array(':nom'=>$nom,':prenom'=>$prenom,':tel'=>$tel,':adresse'=>$adresse,':mail'=>$mail,':description'=>$description);
			$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':adresse',$adresse);
				$req->bindValue(':mail',$mail);
		$req->bindValue(':description',$description);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererReclamation($idr){
		$sql="SELECT * from reclamations where idr=$idr";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeReclamation($adresse){
		$sql="SELECT * from reclamations where adresse=$adresse";
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

?>