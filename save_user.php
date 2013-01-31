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
<?Php
include("include/bd.php");	include("include/function.php");	
//Присвоюємо глобальній перемінній просту перемінну
if(isset($_POST['email'])){$email = $_POST['email'];}
if(isset($_POST['password'])){$password = $_POST['password'];}
if(isset($_POST['repassword'])){$repassword = $_POST['repassword'];}
if(isset($_POST['name'])){$name = $_POST['name'];}
if(isset($_POST['lastname'])){$lastname = $_POST['lastname'];}

//Обробляємо наші поля щоб нам не написали html або js
$email = trim(htmlspecialchars($_POST['email'],ENT_QUOTES));
$password = trim(htmlspecialchars($_POST['password'],ENT_QUOTES));
$repassword = trim(htmlspecialchars($_POST['repassword'],ENT_QUOTES));
$name = trim(htmlspecialchars($_POST['name'],ENT_QUOTES));
$lastname = trim(htmlspecialchars($_POST['lastname'],ENT_QUOTES));

//Шифруємо пароль
$newpassword = md5($password);

//Перевіряємо чи є користувач з таким емейлом в нашій БД
tmp_email($email);

//Додаємо дані в БД
bd_insert($email,$newpassword,$repassword,$name,$lastname);
echo "<center><strong>Вітаємо вас ви успішно зареєстровані, тепер ви можите зайти на свою <a href='index.php'>сторінку</a></center></center>";
?>
</div>
</div>
</body>
</html>
