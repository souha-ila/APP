  <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" href="nav.css">
	<title>Login</title>
</head>
<body>
	<div class="topnav" id="myTopnav">
				  <a href="siteweb.php" class="active">ACCEUIL</a>
				  <a href="quisuisje.html">Quisuis-je?</a>
				  <a href="contact.php">Contact</a>
				  <a href="about.html">About</a>
				  <a href="inscrir.php">s'inscrir</a>
          <a href="login.php">Login</a>
			</nav></div>
			 <?php  
	        $nomMes = $pswMess = '';

      if($_SERVER['REQUEST_METHOD']  == 'POST'){
            $nom = htmlspecialchars($_POST['nom']);
			$psw = htmlspecialchars($_POST['psw']);

			if(preg_match("#^souhaila$#", $nom) && preg_match("#^souhaila$#", $psw)){
				header("location: news.php");
			}
            else {
            	if(!preg_match("#^souhaila$#", $nom)){
                   $nomMes = 'LE NOM EST INVALIDE!!';
            	}
            	if (!preg_match("#^souhaila$#", $psw)) {
            		$pswMess = 'LE MOT DE PASSE EST INVALIDE!!';
            	}
            }
}
?>
		
	<form class="box" method="POST">
		<h1>LOGIN</h1>
		<input type="text" id="nom" name="nom" placeholder="username">
		<?php echo $nomMes; ?>
		<input type="password" id="psw" name="psw" placeholder="password">
		<?php echo $pswMess; ?> 
		<input type="submit" name="Login" value="Login">
	</form>
	
</body>
</html>