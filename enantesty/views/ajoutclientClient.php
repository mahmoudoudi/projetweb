<?php
include "../entities/client.php";
include "../core/clientC.php";

if ( isset($_POST['ndc']) && isset($_POST['mdp'])&& isset($_POST['categoriec'])&& isset($_POST['cmdp']))
{
$client=new client($_POST['idc'],$_POST['ndc'],$_POST['mdp'],$_POST['categoriec']);
$clientC=new clientC();
$clientC->ajouterClient($client);
//header('Location: afficherReclamation.php');
						
if ( $_POST['cmdp'] != $_POST['mdp'] ) 
{
	echo "Les 2 mots de passe sont différents";
	
}


  echo "<META http-equiv='refresh' content='0;URL=interface.php'>";

}
else
echo "veuillez remplir tous les champs";
?>