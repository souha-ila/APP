<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sitecss.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="touslesnews.css">
    <title style="color: red;">MAROC</title>
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
                  </a>
                </div>
                </ul>
            </nav></div>
        </header>
        
         
        <div id="barrier_img"></div>

        <div id="video"><video controls="controls"><source src="image/maroc.mp4"></div> 
        <section><div id="text">


            <article><h1><img src="image/logo.jpg" class="ico_categorie">The best country ever</h1>
                <h1 class="new">TOUS LES NEWS</h1>
                 <?php 
            include 'connexion.php';

            $select="select titre,contenu,date_pub from news
                     where id_news=1 
                     order by date_pub desc ";

            $rec=mysqli_query($conn,$select);

         while($row=mysqli_fetch_array($rec))
             {

                ?>
            <div class="about">
                
                <h3><?php echo $row['titre']; ?></h3>
                <p><?php echo $row['contenu']; ?></p>
                <p><?php echo $row['date_pub']; ?></p>
            </div>  
         <?php } ?>
               
            </article></div>
            <aside>
                <div id="side">
                    <ul>
                    <li><a href="monument.html">Sites et Monuments  </a></li>
                    <li><a href="ville.html">Index des villes</a></li>
                    <li><a href="https://www.google.com/maps/place/Afrique/data=!4m2!3m1!1s0x10a06c0a948cf5d5:0x108270c99e90f0b3?sa=X&ved=2ahUKEwiUjI-ElZ_uAhU-URUIHRMLBsYQ8gEwAnoECBIQAQ">localisation du pays</a></li>
                    <li><a href="faculte.html">liens utiles</a></li>
                </ul>
                </div>
            </aside>
               </section>



        <footer>
            <div id="foter">
                <ul>
                    <li>Suggestions</li>
                    <li>Condition d’utilisation </li>
                    <li>Copyright xxxxx 2020-2021</li>
                </ul>
                
            </div>
        </footer>

    
</body>
</html>