<?php include('C:\xampp\htdocs\WT\server2.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../sstyles.css">
		<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
		<title>Jammu and Kashmir</title>
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
  <li class="statusboxli"><a href="../iterinary.php">ITERINARY</a></li>
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
		<div class="name">Jammu and Kashmir
		<p>--- Paradise on Earth ---<p>
		</div>
		<br>
		<div class="slideshow-container">
			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
  			<img src="slideshowjk1.jpg" style="width:100%">
 			</div>
			<div class="mySlides fade">
 			<div class="numbertext">2 / 3</div>
  			<img src="slideshowjk2.jpg" style="width:100%">
			</div>
			<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="slideshowjk3.jpg" style="width:100%">
			</div>
		</div>
		<br>
		<div style="text-align:center">
  		<span class="dot"></span>
  		<span class="dot"></span>
  		<span class="dot"></span>
		</div>
		<br>
		<br>
		<br>
		<div class="name">About... </div>
		<hr/>
		<div class="pdheader">
				<p class="explain">Jammu and Kashmir is a state in northern India, often denoted by its acronym, J&K. It is located mostly in the Himalayan mountains, and shares borders with the states of Himachal Pradesh and Punjab to the south. The Line of Control separates it from the Pakistani-administered territories of Azad Kashmir and Gilgit-Baltistan in the west and north respectively, and a Line of Actual Control separates it from the Chinese-administered territory of Aksai Chin in the east.
			 The state has special autonomy under Article 370 of the Constitution of India.</p>
		</div><br>
		<br>
		<div class="places1">
			<div class="name">Must visits... </div>
			<hr/>
			<br>
			<br>
			<div class="row">
			<div class="column">
			<a href="#Ladakh">
			<div class="container">
	  		<img src="jk1.jpg" class="image"/>
  			<div class="overlay">
    			<div class="text">Leh Ladakh</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Pangong">
	  		<img src="jk2.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Pangong Tso</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Patnitop">
	  		<img src="jk3.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Patnitop</div>
  			</div>
			</div>
			</a>
			</div>
			</div>
			<div class="row">
			<div class="column">
			<div class="container">
			<a href="#Sonamarg">
	  		<img src="jk4.jpg" class="image">
  			<div class="overlay">
    			<div class="text">sonamarg</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Pahalgam">
	  		<img src="jk5.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Pahalgam</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Baltal">
	  		<img src="jk6.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Baltal</div>
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
		<center>
		<div class="row1">
			<div class="column1">
			<a href="#food">
			<div class="container1">
	  		<img src="f1.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Cuisine</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#culture">
			<div class="container1">
	  		<img src="c1.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Culture</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#florafouna">
			<div class="container1">
	  		<img src="ff1.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Flora & Fauna</div>
  			</div>
			</div>
			</a>
			</div>
		</div>
	</center>
		<div class="name" id="Ladakh">Leh Ladakh... </div>
		<hr/>
		<div class="pdheader">
				<p class="explain">Leh, a high-desert city in the Himalayas, is the capital of the Leh region in northern India’s Jammu and Kashmir state. Originally a stop for trading caravans, Leh is now known for its Buddhist sites and nearby trekking areas. Massive 17th-century Leh Palace, modeled on the Dalai Lama’s former home (Tibet’s Potala Palace), overlooks the old town’s bazaar and mazelike lanes.
		Ladakh is a region in the Indian state of Jammu and Kashmir that currently extends from the Siachen Glacier in the Karakoram range to the main Great Himalayas to the south, inhabited by people of Indo-Aryan and Tibetan descent.</p>
		</div>
		<div class="name" id="Pangong">Pangong Tso... </div>
		<hr/>

		<div class="pdheader">
		<p class="explain">Pangong Tso, Tibetan for "high grassland lake", also referred to as Pangong Lake, is an endorheic lake in the Himalayas situated at a height of about 4,350 m. It is 134 km long and extends from India to China. Approximately 60% of the length of the lake lies in China. The lake is 5 km wide at its broadest point.
		Eastern part of the lake is fresh, with the content of total dissolved solids at 0.68 g/L. Western part of the lake is saline, with the salinity at 11.02 g/L.   The brackish water   of the lake has very low micro-vegetation. Guides report that there are no fish or other aquatic life on the Indian side of the lake, except for some small crustaceans. On the other hand, visitors see numerous ducks and gulls over and on the lake surface. There are some species of scrub and perennial herbs that grow in the marshes around the la.
	</p></div>
		<div class="name" id="Patnitop">Patnitop... </div>
		<hr/>
		<div class="pdheader">
				<p class="explain">Patnitop or Patni Top is a hilltop tourist location in Udhampur district in Jammu and Kashmir state of India on National Highway 44 112 km (70 mi) from Jammu on the way from Udhampur to Srinagar. Situated on a plateau in the Shivalik belt of the Himalayas, Patnitop sits at an altitude of 2,024 m (6,640 ft). The river Chenab flows in close proximity to this location.</p>
		</div>
		<div class="name" id="Sonamarg">Sonamarg... </div>
		<hr/>
		<div class="pdheader">
				<p class="explain">Sonmarg (translation: "Meadow of Gold") is a hill station in Ganderbal district in the Indian state of Jammu and Kashmir about 80 km north-east of Srinagar.
				Sonmarg gives rise to The Three Sisters (Kashmir). In its vicinity lies the great Himalayan glaciers of Kashmir Valley namely Kolhoi Glacier and Machoi Glacier with some peaks of above 5,000 m: Sirbal Peak, Kolhoi Peak, Amarnath Peak and Machoi Peak. Sonmarg is situated in a valley at the bank of Nallah Sindh, 87 km north-east from Srinagar. It is a popular tourist destination, nestled within the imposing Himalayan peaks.
		</p>
	</div>
		<div class="name" id="Pahalgam">Pahalgam... </div>
		<hr/>
		<div class="pdheader">
				<p class="explain">Pahalgam is a hill station in the north Indian state of Jammu and Kashmir. Mountain trails run northeast to Amarnath Cave Temple, a Hindu shrine and site of the annual Amarnath Yatra pilgrimage. Overa Aru Wildlife Sanctuary is home to animals including brown bears and musk deer. Northeast, the Lidder River runs through scenic Betaab Valley. Southeast, Tulian Lake is flanked by mountain peaks and often frozen.</p>
		</div>
		<div class="name" id="Baltal">Baltal... </div>
		<hr/>
		<div class="pdheader">
				<p class="explain">Baltal is a camping ground for pilgrims, 15 km north of Sonamarg on the Sind River at the base of Zojila pass in Jammu and Kashmir. This little valley is only a day's journey away from and provides a shorter high-altitude alternate route to the sacred cave of Amarnath.
				Renowned for its scenic beauty, Baltal meadows offers tent accommodation for the pilgrims and tourists alike at reasonable prices. Both pony rides or, for those who can afford, helicopter services are available to the holy Amarnath Caves. Helicopter passengers have to disembark at Panjtarni and foot it, or take a pony ride, to the cave, 5 km away. For the hikers, the 14 km distance from Baltal to Amarnath takes about 4 hours on a winding steep trail. Basic teashops are available on route
				</div></p>
				<div class="name" id="food">Cuisine... </div>
<hr/>
<div class="pdheader">
<p class="explain">
		The cuisine of Jammu and Kashmir combines influences from Indian Hindus and Muslims, as well as, Persian and Afghan invaders. It is said that chefs from Samarkand were brought to Kashmir during the Timur invasion. They settled down and influenced Kashmiri cuisine to a great extent. This culinary skill is popular even today. Travelers from all over the world love the rich flavors and delicious aroma of these culinary delights.

		Various tribes and sections of society have added their own flavor to Kashmiri food. The style of preparation of Kashmiri Brahmins or Pandits and Kashmiri Muslims are radically different. Brahmins use generous quantities of curd along with asafetida and ginger in their food, excluding egg, onions and garlic. Muslims use onions, garlic and egg liberally in their food preparations. Saffron and Kashmiri chilies are common spices in the cuisine of Jammu and Kashmir.

		Meat - Mutton (specially), fish and chicken are essential ingredients in Kashmiri food. Meat is prepared in a number of ways and is usually mixed with vegetables and spices such as cinnamon, saffron, cardamom, cloves and so on.
</p>
</div>
<div class="name" id="culture">Culture... </div>
<hr/>
<div class="pdheader">
<p class="explain">

		Traditional Dresses of Kashmir
		The culture of Kashmir refers to the culture and traditions of Kashmir, a region in northern India (consisting of Jammu and Kashmir), northeast Pakistan (consisting of Azad Kashmir and Gilgit–Baltistan) and the Chinese Occupied territory of Aksai Chin.

		The culture of Kashmir is a diverse blend and highly influenced by northern South Asian, Persian as well as Central Asian culture. Along with its scenic beauty, Kashmir is famous for its cultural heritage; it amalgamates Muslim, Hindu, Sikh and Buddhist philosophies and has involved composite culture based on the values of humanism and tolerance which is collectively known as Kashmiriyat. Jammu, Kashmir and Ladakh each have their own distinct culture.
</p></div>
<div class="name" id="florafouna">Flora & Fauna</div>
<hr/>
<div class="pdheader">
<p class="explain">The state is rich in flora and fauna. In Jammu, the flora ranges from the thorn bush type of the arid plain to the temperate and alpine flora of the higher altitudes. Of the broad-leaf trees, there are maple, horse chestnuts, silver fir, etc. At the higher altitudes, there are birch, rhododendron, and a large number of herbal plants. Kashmir is also resplendent with many hues of wood and game. The most magnificent of the Kashmir trees is the chinar which is found throughout the valley. Mountain ranges in the valley have dense deodar, pine and fir. Walnut, willow, almond and cider also add to the rich flora of Kashmir.

		In the hilly regions of Doda, Udhampur, Poonch and Rajouri, there is a large and varied fauna including leopard, cheetah and deer, wild sheep, bear, brown musk shrew, and muskrat. Varieties of snakes, bats, lizards and frogs are also found in the region.
		</p></div>

		<br>
		<br>
		<script type="text/javascript" src="../script.js"></script>
		<br>
		<br>
		<br>
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
