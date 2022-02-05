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

	 if(isset($_POST['suprimer']))
{
	$id=htmlspecialchars($_POST['id']);

     
    include 'connexion.php';

    $insert="delete from news where id_news=$id";
    $conn->query($insert);
    if ($conn->query($insert)) {
     header("location: voir.php");
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
	}	
	?>
	
		<div class="ajout">
			<form method="POST">
				<h1>CONFIRMER LA SUPRESSION</h1>

				<p>ID</p>
				<input type="number" name="id" id="id" placeholder="Donner id de la news que vous voulez suprimer"> 

				<input type="submit" name="suprimer" id="suprimer" value="suprimer">

		</div>
	</form>
	
</body>
</html>