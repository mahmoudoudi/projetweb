<?PHP
include "../core/employeE.php";
$employe1P=new employeE();
$listeemploye=$employe1P->afficheremployes();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Nom</td>
<td>Prenom</td>
<td>Poste</td>
</tr>

<?PHP
foreach($listeemploye as $row){
  ?>
  <tr>
  <td><?PHP echo $row['Nom']; ?></td>
  <td><?PHP echo $row['Prenom']; ?></td>
  <td><?PHP echo $row['Poste']; ?></td>
  <td>
    <form method="POST" action="supprimeremploye.php">
      <input type="hidden" value="<?= $row['cin'] ?>" name="cin">
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


