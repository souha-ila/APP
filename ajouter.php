  <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="news.css">
	<link rel="stylesheet" href="ajouter.css">
	<link rel="stylesheet" href="nav.css">
	<title>Login</title>
</head>
<body>
	<div class="topnav" id="myTopnav">
				  <a href="login.php" class="active">Logout</a>
				  <a href="news.php">Retourner</a>
	</div>
		 <?php  

	 if(isset($_POST['AJOUTER']))
{
	$id=htmlspecialchars($_POST['id']);
	$titre=htmlspecialchars($_POST['titre']);
	$resume=htmlspecialchars($_POST['resume']);
	$contenue=htmlspecialchars($_POST['contenue']);
	$date=htmlspecialchars($_POST['date']);
     
    include 'connexion.php';

    $insert="insert into news(id_news,titre,resume,contenu,date_pub) values('$id','$titre','$resume','$contenue','$date')";
    $conn->query($insert);

        if ($conn->query($insert)) {
     header("location: voir.php");
} else {
 header("location: voir.php");
}
		
	}	
	?>
	
		<div class="ajout">
			<form method="POST">
				<h1>AJOUTER LA NEWS</h1>

				<p>ID</p>
				<input type="number" name="id" id="id" placeholder="Donner id de la news"> 

				<p>titre</p>
				<input type="text" name="titre" id="titre" placeholder="DONNER LE TITRE DE LA NEWS">

				<p>resume</p>
				<textarea name="resume"	id="resume" placeholder="ECRIRE LE RESUME DE VOTRE NEWS"></textarea>

				<p>contenue</p>
				<textarea name="contenue" id="contenue" placeholder="ECRIRE LE centenue DE VOTRE NEWS" style="height:100px"></textarea>

				<p>date_pub</p>
				<input type="date" name="date" id="date" placeholder="DONNER ID DE NEWS">

				<input type="submit" name="AJOUTER" id="AJOUTER" value="AJOUTER">

		</div>
	</form>
	
</body>
</html>