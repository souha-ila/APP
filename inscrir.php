<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="sitecss.css">
	<link rel="stylesheet" href="inscrir.css">
	<link rel="stylesheet" href="nav.css">
	<title>Iscription</title>
</head>
<body>
	<header>
			<div id="titre">
			    <div id="logo">
			       <img src="image/logo.jpg">
			    </div>
			       <h1>MAROC</h1>
			</div>
			<div id="acc"><nav>
				<div class="topnav" id="myTopnav">
				  <a href="siteweb.php" class="active">ACCEUIL</a>
				  <a href="quisuisje.html">Quisuis-je?</a>
				  <a href="contact.php">Contact</a>
				  <a href="about.html">About</a>
				  <a href="inscrir.php">S'inscrir</a>
				  <a href="login.php">Login</a>
				</div>
				</ul>
			</nav></div>
		</header>
         
			
			 <?php  
 
        $nomMess = $emailMess = $prenomMess= '';

		if($_SERVER['REQUEST_METHOD']  == 'POST'){

			$nom = htmlspecialchars($_POST['nom']);
			$email = htmlspecialchars($_POST['email']);
			$prenom = htmlspecialchars($_POST['prenom']);


			if(!preg_match("#^[a-zA-Z]+$#", $nom)){
				$nomMess = 'Format de nom invalide !!';
			}

			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				$emailMess = 'Format d\'email invalide !!';
			}

			if(!preg_match("#^[a-zA-Z]+$#", $prenom)){
				$prenomMess = 'Format de prenom invalide !!';
			}
		}


	 if(isset($_POST['s\'inscrir']))
{
	$nom=htmlspecialchars($_POST['nom']);
	$prenom=htmlspecialchars($_POST['prenom']);
	$email=htmlspecialchars($_POST['email']);
     
    include 'connexion.php';
    $insert="insert into internaute(nom,prenom,email) values('$nom','$prenom','$email')";
    $conn->query($insert);
	}	
	?>

        <div id="video"><video controls="controls"><source src="image/maroc.mp4"></div>	
        <section>
        <form method="POST">
          <div id="inscri">
          	<h1>VEUILLER REMPLIR CE FORMULAIRE</h1>
               <article>

			<div class="inscrir">
				<input type="text" name="nom" id="nom" placeholder="enter votre nom">
				<?php echo $nomMess; ?>
		
				<input class="inscrir" type="text" name="prenom" id="prenom" placeholder="enter votre prenom">
				<?php echo $prenomMess; ?>
		
				<input class="inscrir" type="text" name="email" id="email" placeholder="enter votre email">
				<?php echo $emailMess; ?>
				

		        <input type="submit" name="s'inscrir" value="s'inscrir">
         
        	 
        </article> </div></form>
        	<aside>
        		<div id="side">
        			<ul>
						
        			<li><a href="monument.html">Sites et Monuments  </a></li>
					<li><a href="ville.html">Index des villes</a></li>
					<li><a href="https://www.google.com/maps/place/Afrique/data=!4m2!3m1!1s0x10a06c0a948cf5d5:0x108270c99e90f0b3?sa=X&ved=2ahUKEwiUjI-ElZ_uAhU-URUIHRMLBsYQ8gEwAnoECBIQAQ">localisation du pays</a></li>
				
				</ul>
        		</div>
        	</aside>
               </section>



        
</body>
</html>

