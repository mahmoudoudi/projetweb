<?PHP
include "../core/produitC.php";
$produit1C=new ProduitC();
$listeProduits=$produit1C->afficherProduits();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Identifiant</td>
<td>Nom</td>
<td>Quantite</td>
<td>Prix</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeProduits as $row){
	?>
	<tr>
	<td><?PHP echo $row['identifiant']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['quantite']; ?></td>
	<td><?PHP echo $row['prix']; ?></td>
	<td><form method="POST" action="supprimerProduit.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['identifiant']; ?>" name="identifiant">
	</form>
	</td>
	<td><a href="modifierProduit.php?identifiant=<?PHP echo $row['identifiant']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


