<?php
include "../core/produitC.php";
//require ('db.php');


ob_start();
?>
<page backtop="20mm">
	 <h1> Produits Disponibles </h1>
		<table style="width:100%;border: 3px  " >
		<tr>

														  <th scope="col">Identifiant</th>
													      <th scope="col">Nom</th>
													      <th scope="col">Url</th>
													      <th scope="col">Numcat</th>
													      <th scope="col">Quantite</th>
													      <th scope="col">Prix</th>
													  
													      
													    
													      <th scope="col">action</th>
													</tr>
													
		<?php
	$produits=new ProduitC();
$listproduits=$produits->afficherProduits();
		foreach($listproduits as $row) {
			?>
		  <tr>
												      <td> <?php echo $row["identifiant"] ; ?></td> 
												      <td> <?php echo $row["nom"] ; ?></td> 
												       <td> <?php echo $row["url"] ; ?></td> 
												      <td> <?php echo $row["numcat"] ; ?></td> 
                                                     <td> <?php echo $row["quantite"] ; ?></td> 
													  <td> <?php echo $row["prix"] ; ?></td> 


 												      
												   
												              
												    </tr>
			<?php  
		}

?>
	</table>


</page>

<?php
$content= ob_get_clean();
require('html2pdf/html2pdf.class.php');
try{
$pdf=new html2pdf('p','A4','fr','true','UTF-8');
$pdf->pdf->SetDisplayMode('fullpage');

$pdf->writeHTML($content);
//$pdf->pdf->IncludeJS('print(true)');
$pdf->Output('test.pdf');
}
catch(HTML2PDF_exception $e)
{
	die($e);
}

?>