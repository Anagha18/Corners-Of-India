<?php include('C:\xampp\htdocs\WT\server2.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../sstyles.css">
		<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
		<title>Jharkhand</title>
	</head>
	<body>
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
		<div class="name">Jharkhand
		<p>--- Mineral wealth of the country ---<p>
		</div>
		<br>
		<div class="slideshow-container">
			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
  			<img src="slideshowja1.jpg" style="width:100%">
 			</div>
			<div class="mySlides fade">
 			<div class="numbertext">2 / 3</div>
  			<img src="slideshowja2.jpg" style="width:100%">
			</div>
			<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="slideshowja3.jpg" style="width:100%">
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
				<p class="explain">Jharkhand is a state in eastern India. It's known for its waterfalls, the elegant Jain temples of Parasnath Hill and the elephants and tigers of Betla National Park. The state capital of Ranchi is a gateway to the park. It features the 17th-century Jagannath Temple, a Hindu shrine and the Jharkhand War Memorial. Tagore Hill is a monument honoring Nobel Prize-winning author Rabindranath Tagore.
		Jharkhand suffers from resource curse;   It accounts for more than 40% of the mineral resources of India,   but it suffers widespread poverty as 39.1% of the population is below the poverty line and 19.6% of the children under five years of age are malnourished. The state is primarily rural, with only 24% of the population living in cities.<br>
	</p>
		</div><br>
		<div class="places1">
			<div class="name">Must visits... </div>
			<hr/>
			<br>
			<br>
			<div class="row">
			<div class="column">
			<a href="#Ranchi">
			<div class="container">
	  		<img src="j1.jpg" class="image"/>
  			<div class="overlay">
    			<div class="text">Ranchi</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Jamshedpur">
	  		<img src="j2.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Jamshedpur</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Purulia">
	  		<img src="j3.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Purulia</div>
  			</div>
			</div>
			</a>
			</div>
			</div>
			<div class="row">
			<div class="column">
			<div class="container">
			<a href="#Deoghar">
	  		<img src="j4.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Deoghar</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Dhanbadh">
	  		<img src="j5.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Dhanbadh</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Hazaribagh">
	  		<img src="j6.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Hazaribagh</div>
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
		<div class="name" id="Ranchi">Ranchi... </div>
		<hr/>
		<div class="pdheader">
				<p class="explain">Ranchi is the state capital of Jharkhand in northeast India. At the top of central Ranchi Hill, Pahari Mandir is a Hindu temple dedicated to Shiva, with panoramic city views. Nearby, leafy Nakshatra Van is a large park with trees planted to represent stars of the zodiac. The region is known for its tribal heritage, and exhibits at the Tribal Museum include musical instruments and jewelry from the state’s many tribes.
			North of the center near Tagore Hill, Ranchi Science Centre includes a 3D cinema, a fibreglass model of a forest and busts of celebrated Indian scientists. The Rock Garden is a peaceful, tree-lined space beside Kanke Dam. Southwest of the city, Jagannath Temple is a 17th-century Hindu site with elaborately carved towers. The nearby Sun Temple resembles a chariot drawn by 7 white horses. On the city’s northeastern outskirts, the State Museum Hotwar exhibits medieval sculpture and ancient ceramics. East of Ranchi are the dramatic Hundru and Jonha waterfalls.</p>
		</div>
		<div class="name" id="Jamshedpur">Jamshedpur... </div>
		<hr/>
		<div class="pdheader">
				<p class="explain">Jamshedpur is a large city set between the Subarnarekha and Kharkai rivers in the east Indian state of Jharkhand. It’s known for huge, tree-lined Jubilee Park, where the Tata Steel Zoological Park has resident species including tigers and leopards. To the east, the hilltop Bhuvaneshwari Temple has an elaborate 5-story entrance tower. North of the city, elephants roam through the forests at Dalma Wildlife Sanctuary.Jamshedpur is situated in the southern end of the state of Jharkhand and is bordered by the states of Odisha and West Bengal. The average elevation of the city is 135 metres   while the range is from 129 m to 151 m.   Total geographical area of Jamshedpur is 209 km square.   Jamshedpur is primarily located in a hilly region and is surrounded by the Dalma Hills running from west to east and covered with dense forests. The other smaller hill ranges near the city are Ukam Hill and the Jadugoda-musabani hill range.[19] The city is also a part of the larger Chota Nagpur Plateau region. The region is formed of the sedimentary, metamorphic and igneous rocks belonging to the Dharwarian period.</p>
			</div>
			<div class="name" id="Purulia">Purulia... </div>
		<hr/>
		<div class="pdheader">
				<p class="explain">Purulia City, also known as "Manbhum City", is a city located in West Bengal state, India, and was constituted in 1876. It is the location of the district headquarters of Purulia district. Purulia is located on the north of the Kangsabati River.
			Purulia is located at 23.33°N 86.37°E.  It has an average elevation of 228 metres (748 feet). Summers are hot and dry with temperatures ranging from lows of 23 °C to highs above 48 °C. The temperature reached the highest level in the country on June 18, 2005 at 51.1 °C.   Winters are dry and cool with daily temperatures ranging from 5 °C to 20 °C. Most of the rainfall occurs during the wet monsoons.
		</p>
	</div>
		<div class="name" id="Deoghar">Deoghar... </div>
		<hr/>
		<div class="pdheader">
				<p class="explain">Deoghar is a holy city beside the Mayurakshi River, in the east Indian state of Jharkhand. The ancient Baba Baidyanath Temple complex is a significant Hindu pilgrimage site. Nearby, Shiv Ganga is a sacred pool where devotees of Shiva bathe. There is a shrine to Krishna in the ornate, stone-carved Naulakha Mandir temple. Northeast of town, Harila Jori is the site of a whitewashed Shiva temple and a sacred water tank.
				New Deoghar is well connected with rest of India. The city has two main Railway Stations. Jasidih Junction and Madhupur Junction is the main two railway station. Soon Deoghar will be connected to Airways. A new airport is being constructed and soon it will be operational within November 2019.
		</p>
	</div>
		<div class="name" id="Dhanbadh">Dhanbad... </div>
		<hr/>
		<div class="pdheader">
				<p class="explain">Dhanbad is a city in the Indian state of Jharkhand. It is the second most populated city in Jharkhand. Dhanbad along with its adjacent urban areas ranks 42nd in population amongst other cities in India. Dhanbad shares its land borders with Asansol, West Bengal. Dhanbad has some of the largest coal mines in India and is called Coal Capital of India. Tata Steel, Bharat Coking Coal Limited, Eastern Coalfields Limited and Indian Iron And Steel Company are some of the companies who operate coal mines in the district. The engineering institute IIT, Dhanbad is located in Dhanbad. Among the rail divisions of Indian Railway, Dhanbad Rail Division is the second-largest in revenue generation after the Mumbai division. The city has one parliamentary seat and six seats in the Legislative Assembly.</p>
			</div>
			<div class="name" id="Hazaribagh">Hazaribagh... </div>
		<hr/>
		<div class="pdheader">
				<p class="explain">Hazaribagh is a city and a municipality in Hazaribagh district in the Indian state of Jharkhand. It is the divisional headquarters of North Chotanagpur division. It is famous as a health resort and for Hazaribag Wildlife Sanctuary. It is represented in the Indian Lok Sabha by its Member of Parliament Jayant Sinha.
				Hazaribagh has the second highest coal reserve in Jharkhand (Dhanbad region has the first), and it is still largely intact. Recently there has been a spurt in the coal mining activities in the region by Central Coalfields Ltd., a subsidiary of Coal India Limited. Work is currently going on for the development of NTPC's 3000 MW. Reliance Power's 3600 MW Super Thermal Power Projects was also proposed but was later pulled out due to the failure of the negotiations between government and company on land distributions. Demotand and Chaano are industrial areas.
		</p>
	</div>
		<div class="name" id="food">Cuisine... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">
				Jharkhand cuisine encompasses the cuisine of the Indian state of Jharkhand. Staple food of Jharkhand are rice, dal, vegetable and tubers. Common meals often consist of vegetables that are cooked in various ways, such as curried, fried, roasted and boiled.  Traditional dishes of Jharkhand may not be available at restaurants.   However, on a visit to a local village, one can get a chance to taste such exotic foods. Some dish preparations may be mild with a low oil and spice content, although pickles and festive dishes may have such characteristics.</p>
		</div>
		<div class="name" id="culture">Culture... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Jharkhand has proudly emerged culturally as an important multi ethnic state. Over thirty indigenous communities exist harmoniously in Jharkhand. Some of the major tribes are the Santhals, Oraons, Mundas, Kharias, Hos and Cheros. Rich in culture and traditions, these communities have several colourful festivals.	</p></div>
		<div class="name" id="florafouna">Flora & Fauna</div>
		<hr/>
		<div class="pdheader">
		<p class="explain">
				harkhand, which literally means 'the territory of forests', is known for its dense evergreen forests and wildlife. In fact, the state of Jharkhand is known to possess the richest evergreen forests in India. Statistics prove that about 200 species of avifauna is found in the territory of Jharkhand.
				Moreover, talking about the flora of Jharkhand, it can be said that the Jharkhand flora mostly consists of dry and moist deciduous forests. It is noteworthy in this context that Jharkhand possess a semi-arid landscape, which suffers an acute shortage of water during the hot summer months: therefore, dry deciduous trees are common in the territory of Jharkhand. Among the important trees that form an important part of the fauna at Jharkhand are sal, jackfruit, jamun, kendu, gambhar, shisham, mahua, katha, lac, pesar, mango, aasan, baheda and bamboo.

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
