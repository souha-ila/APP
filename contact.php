<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="sitecss.css">
	<link rel="stylesheet" href="contact.css">
	<link rel="stylesheet" href="nav.css">
	<title>Document</title>
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


         
       

        <div id="video"><video controls="controls"><source src="image/maroc.mp4"></div>	
        <section>
        	
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


	 if(isset($_POST['envoyer']))
{
	$nom=htmlspecialchars($_POST['nom']);
	$prenom=htmlspecialchars($_POST['prenom']);
	$email=htmlspecialchars($_POST['email']);
	$message=htmlspecialchars($_POST['message']);
     
    include 'connexion.php';
    $insert="insert into message(nom,prenom,email,messages) values('$nom','$prenom','$email','$message')";
    $conn->query($insert);
	}	
	?>
        	<div id="text">
        	      <form method="POST">
        	      	<h1>VEUILLEZ REMPLIR SE FORMULAIRE</h1>
							<label for="fname">First Name</label>
                            <input type="text" id="nom" name="nom" placeholder="Entrez votre nom">
							<?php echo $nomMess; ?>
						<br><br>
							 <label for="lname">Last Name</label>
                             <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prenom">
							<?php echo $prenomMess; ?>
						<br><br>
						     <label for="email">email</label>
		                    <input type="text"  id="email" name="email" placeholder="Entrez votre email">
		                    <?php echo $emailMess; ?>
		                <br><br>
		                     <label for="message">Subject</label>
                             <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

		                     <input type="submit" value="ENVOYER" name="envoyer">

        	</div>
        	<aside>
        		<div id="side">
        			<ul>

        			<li><a href="monument.html">Sites et Monuments  </a></li>
					<li><a href="ville.html">Index des villes</a></li>
					<li><a href="https://www.google.com/maps/place/Afrique/@28.5282687,-12.4225124,4.75z/data=!4m5!3m4!1s0x10a06c0a948cf5d5:0x108270c99e90f0b3!8m2!3d-8.783195!4d34.508523">localisation du pays</a></li>
					
				</ul>
        		</div>
        	</aside>
               </section>



       
	
</body>
</html>