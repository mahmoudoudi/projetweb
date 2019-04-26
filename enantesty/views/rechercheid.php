<?PHP
include "../core/couponC.php";?>
<table border="1">
<tr>
<td>idprod</td>
<td>nom</td>
<td>pourentage</td>
<td>date d expiration</td>
<td>prix avant promotion</td>

</tr>

<?php
    
        if (isset($_POST['chr'])) {
           
            //$q = $db->real_escape_string($_POST['q']);
            //$sql = $db->query("SELECT matricule_employe FROM employe_table WHERE matricule_employe LIKE '%$q%'");
			$coupon1C=new couponC();
            $listecoupon=$coupon1C->rechercherparpourcentage($_POST['q']);
            foreach($listecoupon as $row){
            	//var_dump($listecoupon);
          ?>       
				
 <tr>
    <td>  <?PHP echo $row['idprod']; ?>   </td>
	<td><?PHP echo $row['nomp']; ?></td>
	<td><?PHP echo $row['valeur']; ?></td>
	<td><?PHP echo $row['dateE']; ?></td>
    <td><?PHP echo $row['prix1']; ?></td>
	</tr>
                  
			<?php  
            } 
        }
      
    ?>


