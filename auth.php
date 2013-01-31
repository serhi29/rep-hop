<?php include("include/bd.php"); ?>  
<?php include("include/function.php"); ?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>rep-hop.ua</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
<div id="contayner">
<?php include("include/head.php"); ?>
<div id="content">
<?php 
include("include/bd.php");	include("include/function.php");

//Присвоюємо глобальній перемінній просту перемінну
if(isset($_POST['email'])){$email = $_POST['email'];}
if(isset($_POST['password'])){$password = $_POST['password'];}
if(isset($_POST['sess'])){$sess = $_POST['sess'];}

//Обробляємо наші поля щоб нам не написали html або js
$email = trim(htmlspecialchars($_POST['email'],ENT_QUOTES));
$password = trim(htmlspecialchars($_POST['password'],ENT_QUOTES));

//Порівнюємо паролі
$select = mysql_query("SELECT * FROM user WHERE email='$email'") or die (mysql_error());
$row = mysql_fetch_array($select);
if($email == $row['email']){
	if($_POST['sess'] == "on"){
		$_SESSION['id'] = $row['id'];	//Реєструємо сесію
		$_COOKIE['id'] = $row['id'];	//Реєструємо куки	
		}	
	?>
<script>document.location.href="user.php";</script>
<?php
}else{return exit("<center><strong>Авторизація невдалася</strong></center>");}
?>
</div>
</div>
</body>
</html>
