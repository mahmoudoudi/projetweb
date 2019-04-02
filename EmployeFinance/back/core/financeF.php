<?PHP
include "../config.php";
class financeF {
function afficherfinance ($finance){
		
		echo "id: ".$finance->getid()."<br>";
		echo "pain: ".$finance->getpain()."<br>";
		echo "patisserie: ".$finance->getpatisserie()."<br>";
		echo "viennoiserie: ".$finance->getviennoiserie()."<br>";
		echo "divers: ".$finance->getdivers()."<br>";
		echo "premiere: ".$finance->getpremiere()."<br>";
		echo "recette: ".$finance->getrecette()."<br>";
		echo "charge: ".$finance->getcharge()."<br>";
		echo "net: ".$finance->getnet()."<br>";
			
	}
	
	function ajouterfinance($finance){
		$sql = "insert INTO `finance` (id,pain,patisserie,viennoiserie,divers,premiere,recette,charge,net) VALUES (:id,:pain,:patisserie,:viennoiserie,:divers,:premiere,:pain+patisserie+viennoiserie,:premiere+divers,:pain+patisserie+viennoiserie-premiere-divers)";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id',$finance->getid());
		$req->bindValue(':pain',$finance->getpain());
		$req->bindValue(':patisserie',$finance->getpatisserie());
		$req->bindValue(':viennoiserie',$finance->getviennoiserie());
		$req->bindValue(':divers',$finance->getdivers());
		$req->bindValue(':premiere',$finance->getpremiere());
		$req->bindValue(':recette',$finance->getrecette());
		$req->bindValue(':charge',$finance->getcharge());
		$req->bindValue(':net',$finance->getnet());

		try{
		$req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
		
	}
	
	function afficherfinances(){
		$sql="SElECT * From finance ORDER by id desc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerfinance($id){
		$sql="DELETE FROM finance where id= :id";
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
	function modifieremploye($finance,$id){
		$sql="UPDATE finance SET pain=:pain, patisserie=:patisserie, viennoiserie=:viennoiserie, divers=:divers, premiere=:premiere, recette=:pain+patisserie+viennoiserie, charge=:divers+premiere, net=:pain+patisserie+viennoiserie-premiere-divers WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $idn=$finance->getid();
        $id_client=$finance->getid_client();
        $total=$finance->gettotal();
		$datas = array(':id1'=>$id1,':id'=>$id, ':pain'=>$pain,':patisserie'=>$patisserie, ':viennoiserie'=>$viennoiserie, ':divers'=>$divers, ':premiere'=>$premiere, ':pain+patisserie+viennoiserie'=>$recette,':divers+premiere'=>$charge, ':pain+patisserie+viennoiserie-premiere-divers'=>$net);
		$req->bindValue(':id1',$id1);
		$req->bindValue(':id',$finance->getid());
		$req->bindValue(':pain',$finance->getpain());
		$req->bindValue(':patisserie',$finance->getpatisserie());
		$req->bindValue(':viennoiserie',$finance->getviennoiserie());
		$req->bindValue(':divers',$finance->getdivers());
		$req->bindValue(':premiere',$finance->getpremiere());
		$req->bindValue(':pain+patisserie+viennoiserie',$finance->getrecette());
		$req->bindValue(':charge',$finance->getcharge());
		$req->bindValue(':net',$finance->getnet());
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupereremploye($id){
		$sql="SELECT * from finance where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeemploye($id){
		$sql="SELECT * from finance where id=$id";
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