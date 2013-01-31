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
<?php 
include("include/head.php"); 
?>
<div id="content">
<?php 
	if(isset($_SESSION['id'])){
		include("user.php");						
	}else{		
		echo "<center>
				<h2>Реєстрація</h2>
				<form action='save_user.php' method='post'>
					<p><span class='text_form_aut'><strong>Е-маіл:</strong></span><br> 
					<input name='email' type='text' class='style_form_aut'></p>
					<p><span class='text_form_aut'><strong>Пароль:</strong></span><br> 
					<input name='password' type='password' class='style_form_aut'></p>
					<p><span class='text_form_aut'><strong>Підтверження пароля:</strong></span><br> 
					<input name='repassword' type='password' class='style_form_aut'></p>
					<p><span class='text_form_aut'><strong>Ім'я:</strong></span><br> 
					<input name='name' type='tex' class='style_form_aut'></p>
					<p><span class='text_form_aut'><strong>Прізвище:</strong></span><br> 
					<input name='lastname' type='text' class='style_form_aut'></p>
					<input name='register' type='submit' value='Зарегнися' class='style_button_reg' onclick='return thisform(this.form)'>
				</form>
			  </center>";	
	}
?>

</div>
</div>
</body>
</html>
