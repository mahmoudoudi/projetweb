<?php
include "../entities/produit.php";
$db=config::getConnexion();
$result=$db->query('SELECT * FROM produit');
$result1=$db->query('SELECT * FROM produit WHERE prix > 499 ');
$result2=$db->query('SELECT * FROM produit WHERE prix > 249 ');

$produittotal=0;
$nombre1=0;
$nombre2=0;
while ($row = $result->fetch()) 
 {
 $produittotal++;
 }
 while ($row = $result1->fetch()) 
 {
 $nombre1++;
 }
  while ($row = $result2->fetch()) 
 {
 $nombre2++;
 }
  $pourcentage1=($nombre1*100)/$produittotal;
  $var1=100-$pourcentage1;

  $pourcentage2=($nombre2*100)/$produittotal;
  $var2=100-$pourcentage2;

  $small1=$produittotal-$nombre1;
  $small2=$produittotal-$nombre2;

  ?>

  <!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endiff]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Statistiques Produits </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets\js\inscription.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['+500', <?php echo $nombre1?>],
          ['-500', <?php echo $small1 ?>],
          ['+250', <?php echo $nombre2?>],
          ['-250', <?php echo $small2 ?>]
        ]);

        var options = {
          title: 'Prix'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

</head>

<body>
  <?php
    backUp();
    ?>
	
	    <div id="piechart" style="width: 900px; height: 500px;"></div>
		<br>
<table style="width:100%">
  <tr>
  	 <th>Produits total </th>
    <th>Prix + 500 </th>
    <th>Prix - 500 </th>
    <th> Prix + 250 </th> 
    <th> Prix -250 </th>
 </tr>
  <tr>
    <td> <?php  echo $produittotal;?></td>
    <td><?php  echo $nombre1;?></td>
    <td><?php  echo $small1;?></td>
    <td><?php  echo $nombre2;?></td>
    <td><?php  echo $small2;?></td> 
   </tr>
  <tr>
    <td> 100 %</td>
    <td> <?php echo $pourcentage1?> %</td> 
    <td> <?php echo $var1?> %</td> 
    <td> <?php echo $pourcentage2?> %</td> 
    <td> <?php echo $var2?> %</td> 
  
  </tr>

  </table>
<?php
    backDown();
    ?>     				                                                                                      
</body>
</html>
 