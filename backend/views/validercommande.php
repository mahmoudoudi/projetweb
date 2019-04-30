<?PHP
include "../Core/produitC.php";
include "../Core/commandeC.php";
include "../Entities/commande.php";
include_once "../core/clientC.php";
session_start();
$_SESSION['id']=2;
if(isset($_SESSION['id']))
{
$produitC=new produitC();
$commandeC=new commandeC();
if (isset($_POST["idCommande"]))
{

	$commande=$commandeC->recuperercommande($_POST["idCommande"]);
	$info=$commande->fetch();
	$commande=new commande($info["idCommande"],$info["dateCommande"],$info["montantCommande"],$info["etatCommande"],$info["lieuLivraison"],$info["prixLivraison"],$info["idClient"]);


	$valider="Validee";
	$commande->set_etatCommande($valider);
	$dateactuelle = date("Y-m-d");
	$commande->set_dateCommande($dateactuelle);
	
	$somme=0;
	$clientC=new clientC();
    $client1=$clientC->recupererclient($_SESSION['id']);
    $client=$client1->fetch();
    $mail=$client["Email"];
   

    $clientC->mailcommande($mail,$somme,$dateactuelle);


	$commandeC->ajouterhistorique($commande);
	$commandeC->supprimercommande($_POST["idCommande"]);
	header('Location: affichercommande.php');
}

if ($valider="Validee")
{

include "../Nexmo/src/NexmoMessage.php" ;

/**
	 * To send a text message.
	 *
	 */

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('767b4bec','6wLOyMQIPaaYMXyV');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText( '21626041010', 'Banette', 'Votre commande a été Validée ' );

	// Step 3: Display an overview of the message
	

	// Done!  
}
}

?>

