<?PHP
include "../core/EmployeE.php";
$employe1E=new employeE();
$listeemploye=$employe1E->afficheremployes();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>cin/td>
<td>nom</td>
<td>prenom</td>
<td>tel</td>
<td>poste</td>
<td>horaire</td>
<td>salaire/td>
</tr>

<?PHP
foreach($listeemploye as $row){
  ?>
  <tr>
  <td><?PHP echo $row['cin']; ?></td>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['prenom']; ?></td>
  <td><?PHP echo $row['tel']; ?></td>
  <td><?PHP echo $row['poste']; ?></td>
  <td><?PHP echo $row['horaire']; ?></td>
  <td><?PHP echo $row['salaire']; ?></td>

  <td>
    <form method="POST" action="supprimeremploye.php">
      <input type="hidden" value="<?= $row['id'] ?>" name="id">
  <input type="submit" name="supprimer" value="supprimer">
  
  </form>
  </td>
  <td><a href="tables-employe.html?id=<?PHP echo $row['cin']; ?>">
  Modifier</a></td>
  </tr>
  <?PHP
}
?>
</table>


