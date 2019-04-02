<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<?php
											if(isset($_POST['submit'])){
											$to='sarahgmiha@gmail.com';
											$sujet='test mail en local';
											$texte=$_POST['texte'];
											$header='From :  test@gmail.com';
											mail($to,$sujet,$texte,$header);
									     	}

									     	header('Location: mail-compose.php');

												?>
													
</form>
</body>
</html>