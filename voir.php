<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="voir.css">
	<link rel="stylesheet" href="nav.css">
	<title>News</title>
</head>
<body>
		<div class="topnav" id="myTopnav">
				  <a href="login.php" class="active">Logout</a>
				  <a href="news.php">Retourner</a>
	</div>

	
	 <table border="1" align="center">
	 	<h1>NEWS</h1>
    <tr>
        <th>Id news</th>
        <th>titre</th>
        <th>resume</th>
        <th>contenu</th>
        <th>datepub</th>
        <th>modification</th>
        <th>supression</th>

     </tr>

     <?php 
     include 'connexion.php';

     $select="select * from news";

     $rec=mysqli_query($conn,$select);

     while($row=mysqli_fetch_array($rec))
     {
     	?>

     <tr>
     	<td><?php echo $row['id_news']; ?></td>
     	<td><?php echo $row['titre']; ?></td>
     	<td><?php echo $row['resume']; ?></td>
     	<td><?php echo $row['contenu']; ?></td>
     	<td><?php echo $row['date_pub']; ?></td>
     	<td><a href="modifier.php"><input type="submit" name="modifier" value="modifier"></a></td>
        <td><a href="suprimer.php"><input type="submit" name="suprimer" value="suprimer"></a></td>
     </tr>

          <?php 
     } ?>


</table>


</body>
</html>