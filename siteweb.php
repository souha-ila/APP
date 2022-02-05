<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="sitecss.css">
	<link rel="stylesheet" href="nav.css">
	<link rel="stylesheet" href="afficher.css">
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

         <div class="news">
            <h1>LAST NEWS</h1>

         	<?php 
         	include 'connexion.php';

         	$select="select titre,resume,date_pub from news 
                     order by date_pub desc 
                     limit 2";

         	$rec=mysqli_query($conn,$select);

         while($row=mysqli_fetch_array($rec))
             {

         		?>
         	<div class="vi">
         		
         		<h3><?php echo $row['titre']; ?></h3>
         		<p><?php echo $row['resume']; ?></p>
                <p><?php echo $row['date_pub']; ?></p>
         		 <a href="plus.php">Plus d'information</a>
         	</div>	
         <?php } ?>
                 <a href="touslesnews.php".>VOIR tous les news</a><br><br><br>
        <div id="video"><video controls="controls"><source src="image/maroc.mp4"></div>

       </div>
        



        <section><div id="text">


         


        	<article><h1><img src="image/logo.jpg" class="ico_categorie">The best country ever</h1>
        		<p>Morocco (/məˈrɒkoʊ/ (About this soundlisten); Arabic: المغرب‎, romanized: al-maḡrib, lit. 'place the sun sets; the west'; Standard Moroccan Tamazight: ⵍⵎⵖⵔⵉⴱ, romanized: lmeɣrib), officially the Kingdom of Morocco (Arabic: المملكة المغربية‎, romanized: al-mamlaka al-maḡribiyya, lit. 'The Western Kingdom'; Standard Moroccan Tamazight: ⵜⴰⴳⵍⴷⵉⵜ ⵏ ⵍⵎⵖⵔⵉⴱ, romanized: tageldit n lmeɣrib), is a country located in the Maghreb region of North Africa. It overlooks the Mediterranean Sea to the north and the Atlantic Ocean to the west, with land borders with Algeria to the east and Western Sahara (status disputed) to the south. Morocco also claims the exclaves of Ceuta, Melilla and Peñón de Vélez de la Gomera, all of them under Spanish jurisdiction, as well as several small Spanish-controlled islands off its coast.[14] The capital is Rabat and the largest city is Casablanca.[15] Morocco spans an area of 710,850 km2 (274,460 sq mi) and has a population of over 36 million.

Since the foundation of the first Moroccan state by Idris I in 788 AD, the country has been ruled by a series of independent dynasties, reaching its zenith under Almoravid and Almohad rule, when it spanned parts of Iberia and northwestern Africa.[16] The Portuguese Empire began in Morocco in the 15th century, following Portuguese conquests along the Moroccan coast, founding settlements which lasted into the 17th and 18th centuries. The Marinid and Saadi dynasties resisted foreign domination into the 17th century, allowing Morocco to remain the only northwest African country to avoid Ottoman occupation. The Alaouite dynasty, which rules to this day, seized power in 1631. The country's strategic location near the mouth of the Mediterranean attracted the interest of Europe, and in 1912, Morocco was divided into French and Spanish protectorates, with an international zone in Tangier. It regained its independence in 1956, and has since remained comparatively stable and prosperous by regional standards, with the fifth largest economy in Africa.[17]

Morocco claims the non-self-governing territory of Western Sahara, formerly Spanish Sahara, as its Southern Provinces. After Spain agreed to decolonise the territory to Morocco and Mauritania in 1975, a guerrilla war arose with local forces. Mauritania relinquished its claim in 1979, and the war lasted until a ceasefire in 1991. Morocco currently occupies two thirds of the territory, and peace processes have thus far failed to break the political deadlock.

The sovereign state is a unitary Semi-constitutional monarchy with an elected parliament. The country wields significant influence in both Africa and the Arab world, and is considered a regional power and a middle power. The King of Morocco holds vast executive and legislative powers, especially over the military, foreign policy and religious affairs. Executive power is exercised by the government, while legislative power is vested in both the government and the two chambers of parliament, the Assembly of Representatives and the Assembly of Councillors. The king can issue decrees called dahirs, which have the force of law. He can also dissolve the parliament after consulting the Prime Minister and the president of the constitutional court.

Morocco's predominant religion is Islam, and its official languages are Arabic and Berber, the latter achieving official recognition in 2011,[18] having been the native language of Morocco before the Muslim conquest in the seventh century C.E.[19] The Moroccan dialect of Arabic, referred to as Darija, and French are also widely spoken. Moroccan culture is a blend of Berber, Arab, Sephardi Jews, West African and European influences.

Morocco is a member of the Arab League, the Union for the Mediterranean and the African Union.</p>
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
