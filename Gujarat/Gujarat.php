<?php include('C:\xampp\htdocs\WT\server2.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../sstyles.css">
		<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
		<title>Gujarat</title>
		
	</head>
	<body class="bodypart">
		<ul class="statusboxul">
 	<?php
    if(isset($_SESSION['success']))
    {
  ?>
  <li class="statusboxli"><a href="../after_login_homepage.php">HOME</a></li>
  <li class="statusboxli"><a href="../after_login_homepage.php#dest">DESTINATION</a></li>
  <?php
    } else {
  ?>
   <li class="statusboxli"><a href="../mainhomepage.php">HOME</a></li>
  <li class="statusboxli"><a href="../mainhomepage.php#dest">DESTINATION</a></li>
  <?php
}
?>
  <?php
    if(isset($_SESSION['success']))
    {
  ?>
  <li class="statusboxli"><a href="../iterniary.php">ITERINARY</a></li>
   <li class="statusboxli"><a href="../saved.php">YOUR ITERINARIES</a></li>
  <li style="float:right" class="statusboxli"><a href="../mainhomepage.php?logout='1'">LOGOUT</a></li>
  <?php
    } else {
  ?>
   <li style="float:right" class="statusboxli"><a href="../login.php">LOGIN</a></li>
   <?php
    }
   ?>
 </ul>
</div>
		<br>
		<div class="name" class="name">Gujarat
		<p>--- The Land of Legends ---<p>
		</div>
		<br>
		<div class="slideshow-container">
			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
  			<img src="ss131.jpg" style="width:100%">
 			</div>
			<div class="mySlides fade">
 			<div class="numbertext">2 / 3</div>
  			<img src="ss132.jpg" style="width:100%">
			</div>
			<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="ss133.jpg" style="width:100%">
			</div>
		</div>
		<br>
		<div style="text-align:center">
  		<span class="dot"></span>
  		<span class="dot"></span>
  		<span class="dot"></span>
		</div>
		<br>

		<div class="name">About... </div>
		<hr/>
		<div class="pdheader"
		<p class="explain" style="font-size:24px;font-family:comic sans ms">Home to several architectural marvels, Gujarat is famous for its vibrant culture and rich heritage apart from the scenic landscapes and mouth-watering cuisine. Offering a broad range of the most spectacular attractions, Gujarat, also known as 'The Land of Legends', presents a perfect blend of art, history, music and culture.

Being the sole home of the pure Asiatic Lions, the Gir Forest harbours a rich diversity of flora and fauna. Gujarat offers scenic beauty from Great Rann of Kutch to the hills of Satpura. Apart from picturesque landscapes and long stretches of coastlines, the ancient cave paintings, historic murals, holy temples, historic capitals, wildlife sanctuaries, beaches, hill resorts, fascinating handicrafts, are totally worth seeing. The cultural exuberance of the people of the state will give you a rejuvenating experience.</p>
	</div>
		<br>
		<div class="places1">
			<div class="name">Must visits... </div>
			<hr/>
			<br>
			<br>
			<div class="row">
			<div class="column">
			<a href="#one">
			<div class="container">
	  		<img src="ahm.jpg" class="image"/>
  			<div class="overlay">
    			<div class="text">Ahmedabad</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#two">
	  		<img src="kut.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Kutch</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#three">
	  		<img src="som.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Somnath</div>
  			</div>
			</div>
			</a>
			</div>
			</div>
			<div class="row">
			<div class="column">
			<div class="container">
			<a href="#four">
	  		<img src="por.png" class="image">
  			<div class="overlay">
    			<div class="text">Porbandar</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#five">
	  		<img src="jun.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Junagadh</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#six">
	  		<img src="gir.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Gir</div>
  			</div>
			</div>
			</a>
			</div>
			</div>
		</div>
		<br>
		<br>
		<div class="name">Explore... </div>
		<hr/>
		<br>
		<center><div class="row1">
			<div class="column1">
			<a href="#food">
			<div class="container1">
	  		<img src="cui14.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Cuisine</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#culture">
			<div class="container1">
	  		<img src="cul14.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Culture</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#floraandfauna">
			<div class="container1">
	  		<img src="flo14.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Flora & Fauna</div>
  			</div>
			</div>
			</a>
			</div>
		</div></center>
		<br>
		<div class="name" id="one">Ahmedabad... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">A rapidly growing metropolis, an industrial hub, an educational hotspot, and a city with a magnificent past – Ahmedabad is one of the most important cities in Gujarat and is fast becoming a very popular tourist destination as well. Home to a plethora of remarkable temples, intriguing museums, serene lakes, good restaurants, and classy market, with a little bit of colonial history attached to it, Ahmedabad is a great example of how a city can still retain every bit of its old-world charm while still rapidly progressing on the path of globalization and commercialization. Located on the banks of the Sabarmati river, Ahmedabad is the former capital of Gujarat, and its delicious food, colourful culture and amazing hospitality attract a huge number of tourists all year round.

Nothing portrays the extreme down-to-earth lifestyle of Ahmedabad’s citizens better than the Sabarmati Ashram. Situated directly beside the Sabarmati river, this quaint and peaceful ashram was built by Mahatma Gandhi after he returned from South Africa. To this date, Gandhiji’s living quarters are preserved here and is now used as a museum where visitors can learn all about his life and his teachings. The infamous Dandi Salt March, which was a key point in India’s independence struggle, originated from this ashram. It is the most significant place of tourist interest in Ahmedabad, and a huge number of Indian, as well as international tourists, visit this place all year round to visit this ashram which holds a very important place in India’s history.

Unbeknownst to many, Ahmedabad is home to the Jama Masjid, which was built during the era of the Delhi Sultanate, and is as majestic and spectacular as its namesake in Delhi. The structure is made entirely out of yellow sandstone, and its architecture depicts a beautiful amalgamation of Islamic and Hindu styles.</p>
	</div>
		<div class="name" id="two">Kutch... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Virtually an island that resembles the shape of a tortoise, Kutch is an erstwhile princely state of India holding onto its grandeur nature from the past.

Kutch is probably one of the most beautiful, yet surreal places in India. With the vast expanses of white salt desert in the Rann of Kutch area, this is an amazing experience to witness. One would be able to see just stretches of pure white land as far as the eyesight goes. The place comes to life during the winters when the Rann Festival is held during December-February everywhere in which there are huge camp settlements with cultural programs, functions and adventure activities like hot-air ballooning. Kutch is also among the largest district of India with a terribly low population density. Also, Kutch lies on the India-Pakistan border and you can see parts of Pakistan from Kutch. Kutch is also famous for crafts and embroidery works, Flamingo Sanctuary and Wild Ass Sanctuary. Bhuj is an ideal starting point to visit the Rann of Kutch. Beautiful beaches of Mandvi near Bhuj are also totally worth visiting during your trip to Kutch. Don't miss to see the ancient town of Dholavira.</p>
	</div>
		<div class="name" id="three">Gir... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Gir National Park is the only remaining home for the Asiatic Lions that are almost a definition to this park in Gujarat, which has a lot more to offer.

Gir provides you with the unique experience of visiting a place which almost singularly plays a crucial and defining role in the preservation and sustaining of a certain species. The preservation of these lions was initiated by the Nawab of Junagadh when these were just about to enter the phase of extinction due to hunting. Official count said that there were 411 lions in 2010. Also, there are roughly different 2375 species of fauna here with 38 species of mammals, over 300 species of birds, 37 species of reptiles and over 2000 species of insects.

Other important wildlife forms found here are leopard, chausingha, spotted deer, hyena, sambar deer and chinkara.</p>

</div>
		<div class="name" id="four">Somnath... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Somnath, literally meaning 'lord of the moon' is a pilgrim center and is home to one of the 12 Jyotirlingas. It is a town which derives much of its identity from the mythology, religion, and legends that surround it.

Primarily a temple town, Somnath is a place where a strong scent of religion and legends lingers around tourism and even daily life. Its spiritual environment is ornamented by the huge number of temples in the area, however, Somnath also offers beaches, museums and other attractions. While the Somnath temple and Somnath beach are the primary places to visit here, Gita Mandir, Balukha Tirtha, Kamnath Mahadev Temple, Somnath Museum are some of the other places that one can visit.</p>

</div>
		<div class="name" id="five">Porbandar... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">The birth place of Mahatma Gandhi, Porbandar is a beautiful beach town with some temples and dams, and is now also a popular trading hub.

The coastal city with a significant event in its history is a tourist destination which modestly offers a number of attractions. Apart from the haveli where Gandhiji was born which has now been converted into a temple, there are a few more temples, dams, reservoirs, serene beaches and wildlife spots as well to add to your experience in Porbandar. It attracts pilgrims with temples such as the Sudama Mandir, Bharat Mandir, Ram Dhoon Mandir, Hanuman temple and more.</p>

</div>
		<div class="name" id="six">Junagadh... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Being the capital of Junagadh Princely State once, the town shines with historical significance with many historical monuments to see.

Junagad is also very close to the Girnar Hills and the world renowned Gir National Park. Catch a glimpse of the wild in the Sakkabaug Zoo and the Wildlife Museum. Also visit the Girnar Hills and get a feel of the serene yet religious atmosphere. The fort at Uperkot is another tourist magnet. .One of the places in Junagadh that's a must visit is Mausoleum of Bahaduddnbhai Hasainbhai, this place is a mausoleum and its unique architecture makes it one of the most important attractions of Junagarh.

It houses the tombs of Mohabbat khanji in the Mohabbat Maqabra and tomb of Bahaduddin Hasainbhai in the Bahaduddinhassainbhai Maqabra and it was built in the late 19th century. This monument is a unique example of Indo-Islamic and Gothic architecture with finely designed arches, elaborate stone carvings on the walls and windows, silver-decorated portals, the winding staircases encircling its four tall minarters, the old step-well in the grounds and its onion shaped dome. Jama Masjid is also located nearby.</p>

	</div>
		<br>
		<div class="name" id="food">Cuisine... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">
Gujarati state|state]] in western India. Despite having an extensive coastline providing wholesome seafood, Gujarat is primarily a vegetarian state due to the influence of Jain vegetarianism. Many communities, however, do include seafood, chicken, and goat in their diet.
The typical Gujarati thali consists of rotli, dal or kadhi, rice, and shaak/sabzi (a dish made up of several different combinations of vegetables and spices, which may be either spicy or sweet). The thali will also include preparations made from pulses or whole beans (called kathor in Gujarati) such as mung, black eyed beans etc., a snack item (farsaan) like dhokla, pathra, samosa etc. and a sweet (mishthaan) like mohanthal, jalebi, doodh pak etc. Gujarati cuisine varies widely in flavour and heat, depending on a family's tastes as well as the region of Gujarat to which they belong. North Gujarat, Kathiawad, Kachchh, Central Gujarat and South Gujarat are the five major regions of Gujarat that contribute their unique touch to Gujarati cuisine. Many Gujarati dishes are distinctively sweet, salty, and spicy simultaneously.


</p>

	</div>
		<br>
		<div class="name" id="culture">Culture... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Gujarat is also called as “Jewel of Western India” is known for its unique and rich culture. It bordered by Rajasthan, Maharashtra, Madhya Pradesh and the Arabian Sea an is home to Gujars, who ruled the area during 700’s.

It was the main center of the Indus Valley Civilization and Harappan civilization. The Gujarati culture is a blend of there beliefs, customs, inventions, values and technology. It is a flourishing state with cultural diversity. This vibrant state forms an integral part of the Indian culture. Gujarati culture is the blend of traditions, beliefs, customs, arts, values and modernization. Despite of being among the most industrialized state India, Gujarat preserves its rich culture and tradition of the ancient past. The people of Gujarat are commonly referred as Gujaratis and the main language spoken by them is Gujarati. The diverse ethnic groups constituting the Gujarati population are Hindu, Muslim and Jain minorities. The rest of the populace includes the native Bhil tribe which show mixed characteristics of ethnic diversity.</p>

	</div>
		<br>
		<div class="name" id="floraandfauna">Flora & Fauna... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Gujarat is rich in its store of flora and fauna. The geography of Gujarat boasts of having a wide variety of flora and fauna which are spread throughout its length and breadth.

In Gujarat, one can find as many as 500 varieties of mammals, more than 2000 species of birds, a wide range of insects, fishes, amphibians, reptiles, etc. - this aspect, indeed, makes Gujarat rich in terms of flora and fauna.</p>

	</div>
		<br>
		<script type="text/javascript" src="script.js"></script>

<div class="bottom" style="background-color:black">
			<br>
			<center><h2 style="color:white;">"Corners of India"</h2>
			<p style="font-size: 17px; color:white;"> Explore and plan your trip with us 
			 <br>Email: cornersofindia@gmail.com 
			 <br>Ph:080-22233389 </p></center>
			 <br>
		</div>
	</body>
</html>
