<?php
include "../core/financeF.php";
require ('db.php');


ob_start();
?>
<page backtop="1mm">
	 <h1> Listes des Recettes </h1>
		<table cellspacing="7" style=" border-bottom: 1px solid #ddd;" >
		<tr>

														  <th cellspacing="7" scope="col" style="text-align: left; background-color: #4CAF50; color: white;">ID  .</th>
													      <th scope="col" style="text-align: right; background-color: #4CAF50; color: white;">Pain  .</th>
													      <th scope="col" style="text-align: right;background-color: #4CAF50; color: white;">Patisserie  .</th>
													      <th scope="col" style="text-align: right; background-color: #4CAF50; color: white;">Viennoiserie  .</th>
													      <th scope="col" style="text-align: right; background-color: #4CAF50; color: white;">Divers .</th>
													      <th scope="col" style="text-align: right; background-color: #4CAF50; color: white;">Matiére  premiére  .</th>
													      <th scope="col" style="text-align: right; background-color: #4CAF50; color: white;">Recette . </th>
													      <th scope="col" style="text-align: right; background-color: #4CAF50; color: white;">Charges . </th>
													      <th scope="col" style="text-align: right; background-color: #4CAF50; color: white;">Reccete NET  .</th>
																					  
													      
													    
													</tr>
													
		<?php
		$test=0;
	$finances=new financeF();
$listcommandes=$finances->recupererhistorique();
		foreach($listcommandes as $row) {
			?>
		  <tr>
		  											
		  											<td scope="col" style="text-align: left;"> <?php echo $row["id"] ; ?></td>
												    <td scope="col" style="text-align: right;"> <?php echo $row["pain"] ; ?>DT</td> 
												    <td scope="col" style="text-align: right;"> <?php echo $row["patisserie"] ; ?>DT</td> 
												    <td scope="col" style="text-align: right;"> <?php echo $row["viennoiserie"] ; ?> DT</td> 
												    <td scope="col" style="text-align: right;"> <?php echo $row["divers"]; ?> DT</td> 
												    <td scope="col" style="text-align: right;"> <?php echo $row["premiere"]; ?> DT</td> 
												    <td scope="col" style="text-align: right;"> <?php echo $row["recette"] ; ?>DT</td> 
                                                    <td scope="col" style="text-align: right;"> <?php echo $row["charge"] ; ?>DT</td> 
                                                    <td scope="col" style="text-align: right;"> <?php echo $row["net"] ; ?>DT</td> 

												    


 												      
												   
												              
												    </tr>
			<?php
			$test=$row["net"]+$test;  
		}
		

?>
</table>
<?php
echo "<br><p style='text-align: right;'> Total : ";echo $test;
		echo "DT</p>";
?>
	<p style="text-align: right;"><b>Banette - Cité les Palmerais</b><br/>+216 24 439 055<br/>+216 24 929 922 </p>

</page>

<?php
$content= ob_get_clean();
require('html2pdf/html2pdf.class.php');
try{
$pdf=new html2pdf('p','A4','fr','true','UTF-8');
$pdf->pdf->SetDisplayMode('fullpage');

$pdf->writeHTML($content);
//$pdf->pdf->IncludeJS('print(true)');
$pdf->Output('recette.pdf');
}
catch(HTML2PDF_exception $e)
{
	die($e);
}

?>