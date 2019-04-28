

<?php
$login= isset($_POST['login']) ? $_POST['login'] : '';
$password= isset($_POST['password']) ? $_POST['password'] : '';
if($login==''){ header('Location:session.php?error=1');}
elseif ($password != "1234") { header('Location:session.php?error=2&password='.$password);}
else {
	session_start();
   $_SESSION['login'] = $login;
   $_SESSION['password'] = $password;
   $_SESSION['logged'] = true;
header('Location: formulaire.php');
}


?>