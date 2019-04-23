<?PHP
include "../core/reclamationC.php";
$reclamation1C=new reclamationC();
$listeReclamations=$reclamation1C->afficherReclamations();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
	<td>ID</td>
<td>Nom</td>
<td>Prenom</td>
<td>Numero telephone</td>
<td>Adresse</td>
<td>Mail</td>
<td>Description</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeReclamations as $row){
	?>
	<tr>
	<td><?PHP echo $row['idr']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['tel']; ?></td>
	<td><?PHP echo $row['adresse']; ?></td>
	<td><?PHP echo $row['mail']; ?></td>
	<td><?PHP echo $row['description']; ?></td>

	<td><form method="POST" action="supprimerReclamation.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['idr']; ?>" name="idr">
	</form>
	</td>
	<td><a href="modifierReclamation.php?idr=<?PHP echo $row['idr']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


