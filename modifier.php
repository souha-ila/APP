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
				  <a href="voir.php">Retourner</a>
	</div>
	 <?php  

	 if(isset($_POST['MODIFIER']))
{
	$id=htmlspecialchars($_POST['id']);
	$titre=htmlspecialchars($_POST['titre']);
	$resume=htmlspecialchars($_POST['resume']);
	$contenu=htmlspecialchars($_POST['contenue']);
	$date=htmlspecialchars($_POST['date']);
     
    include 'connexion.php';

    $insert="update news
             set titre='$titre',resume='$resume',contenu='$contenu',date_pub='$date'
             where id_news=$id";
    

    if ($conn->query($insert)) {
     header("location: voir.php");
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
	}	
	?>
		<div class="ajout">
			<form method="POST">
				<h1>CONFIRMER LA MODIFICATION</h1>

				<p>ID</p>
				<input type="number" name="id" id="id" placeholder="Donner id de la news que vous voulez Modifier"> 

				<p>titre</p>
				<input type="text" name="titre" id="titre" placeholder="DONNER LE TITRE DE LA NEWS">

				<p>resume</p>
				<textarea name="resume"	id="resume" placeholder="ECRIRE LE RESUME DE VOTRE NEWS"></textarea>

				<p>contenue</p>
				<textarea name="contenue"	id="contenue" placeholder="ECRIRE LE centenue DE VOTRE NEWS" style="height:100px"></textarea>

				<p>date_pub</p>
				<input type="date" name="date" id="date" placeholder="DONNER ID DE NEWS">

				<input type="submit" name="MODIFIER" id="MODIFIER" value="Modifier">

		</div>
	</form>
	
</body>
</html>