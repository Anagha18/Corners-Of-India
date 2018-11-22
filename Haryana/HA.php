<?php include('C:\xampp\htdocs\WT\server2.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../sstyles.css">
		<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
		<title>Haryana</title>
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
		<div class="name">Haryana
		<p>--- The home of Gods ---<p>
		</div>
		<br>
		<div class="slideshow-container">
			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
  			<img src="slideshowha1.jpg" style="width:100%">
 			</div>
			<div class="mySlides fade">
 			<div class="numbertext">2 / 3</div>
  			<img src="slideshowha2.jpg" style="width:100%">
			</div>
			<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="slideshowha3.jpg" style="width:100%">
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
					<p class="explain">Haryana is a North Indian state surrounding New Delhion 3 sides. The Yamuna River runs along its eastern border with Uttar Pradesh. Shared with Punjab, the state capital Chandigarh is known for its modernist buildings and gridlike street plan designed by Swiss architect, Le Corbusier. The Zakir Hussain Rose Garden features 1,600 species, while its Rock Garden showcases sculptures made with recycled materials.</p>
		</div>
		<br>
		<br>
		<div class="places1">
			<div class="name">Must visits... </div>
			<hr/>
			<br>
			<br>
			<div class="row">
			<div class="column">
			<a href="#New Delhi">
			<div class="container">
	  		<img src="j1.jpg" class="image"/>
  			<div class="overlay">
    			<div class="text">New Delhi</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Noida">
	  		<img src="j2.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Noida</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Faridabad">
	  		<img src="j3.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Faridabad</div>
  			</div>
			</div>
			</a>
			</div>
			</div>
			<div class="row">
			<div class="column">
			<div class="container">
			<a href="#Panipat">
	  		<img src="j4.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Panipat</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Sonipat">
	  		<img src="j5.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Sonipat</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Rohtak">
	  		<img src="j6.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Rohtak</div>
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
		<div class="name" id="New Delhi">New Delhi... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">New Delhi is the state capital of Jharkhand in northeast India. At the top of central New DelhiHill, Pahari Mandir is a Hindu temple dedicated to Shiva, with panoramic city views. Nearby, leafy Nakshatra Van is a large park with trees planted to represent stars of the zodiac. The region is known for its tribal heritage, and exhibits at the Tribal Museum include musical instruments and jewelry from the state’s many tribes.
			North of the center near Tagore Hill, New DelhiScience Centre includes a 3D cinema, a fibreglass model of a forest and busts of celebrated Indian scientists. The Rock Garden is a peaceful, tree-lined space beside Kanke Dam. Southwest of the city, Jagannath Temple is a 17th-century Hindu site with elaborately carved towers. The nearby Sun Temple resembles a chariot drawn by 7 white horses. On the city’s northeastern outskirts, the State Museum Hotwar exhibits medieval sculpture and ancient ceramics. East of New Delhiare the dramatic Hundru and Jonha waterfalls.</p>
		</div>
		<div class="name" id="Noida">Noida... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Noida is a large city set between the Subarnarekha and Kharkai rivers in the east Indian state of Jharkhand. It’s known for huge, tree-lined Jubilee Park, where the Tata Steel Zoological Park has resident species including tigers and leopards. To the east, the hilltop Bhuvaneshwari Temple has an elaborate 5-story entrance tower. North of the city, elephants roam through the forests at Dalma Wildlife Sanctuary.</p>
		</div>
		<div class="name" id="Faridabad">Faridabad... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Faridabad City, also known as "Manbhum City", is a city located in West Bengal state, India, and was constituted in 1876. It is the location of the district headquarters of Faridabad district. Faridabad is located on the north of the Kangsabati River.
			Faridabad is located at 23.33°N 86.37°E.  It has an average elevation of 228 metres (748 feet). Summers are hot and dry with temperatures ranging from lows of 23 °C to highs above 48 °C. The temperature reached the highest level in the country on June 18, 2005 at 51.1 °C.   Winters are dry and cool with daily temperatures ranging from 5 °C to 20 °C. Most of the rainfall occurs during the wet monsoons.
		</p>
	</div>
		<div class="name" id="Panipat">Panipat... </div>
		<hr/>
		<div class="pdheader"></div>
		<p class="explain">Panipat is a holy city beside the Mayurakshi River, in the east Indian state of Jharkhand. The ancient Baba Baidyanath Temple complex is a significant Hindu pilgrimage site. Nearby, Shiv Ganga is a sacred pool where devotees of Shiva bathe. There is a shrine to Krishna in the ornate, stone-carved Naulakha Mandir temple. Northeast of town, Harila Jori is the site of a whitewashed Shiva temple and a sacred water tank.
				New Panipat is well connected with rest of India. The city has two main Railway Stations. Jasidih Junction and Madhupur Junction is the main two railway station. Soon Panipat will be connected to Airways. A new airport is being constructed and soon it will be operational within November 2019.
		</p>
	</div>

		<div class="name" id="Sonipat">Sonipat... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Sonipat is a city in the Indian state of Jharkhand. It is the second most populated city in Jharkhand. Sonipat along with its adjacent urban areas ranks 42nd in population amongst other cities in India. Sonipat shares its land borders with Asansol, West Bengal. Sonipat has some of the largest coal mines in India and is called Coal Capital of India. Tata Steel, Bharat Coking Coal Limited, Eastern Coalfields Limited and Indian Iron And Steel Company are some of the companies who operate coal mines in the district. The engineering institute IIT, Sonipat is located in Sonipat. Among the rail divisions of Indian Railway, Sonipat Rail Division is the second-largest in revenue generation after the Mumbai division. The city has one parliamentary seat and six seats in the Legislative Assembly. </p>
		</div>
		<div class="name" id="Rohtak">Rohtak... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Rohtak is a city and a municipality in Rohtak district in the Indian state of Jharkhand. It is the divisional headquarters of North Chotanagpur division. It is famous as a health resort and for Hazaribag Wildlife Sanctuary. It is represented in the Indian Lok Sabha by its Member of Parliament Jayant Sinha.
				Rohtak has the second highest coal reserve in Jharkhand (Sonipat region has the first), and it is still largely intact. Recently there has been a spurt in the coal mining activities in the region by Central Coalfields Ltd., a subsidiary of Coal India Limited. Work is currently going on for the development of NTPC's 3000 MW. Reliance Power's 3600 MW Super Thermal Power Projects was also proposed but was later pulled out due to the failure of the negotiations between government and company on land distributions. Demotand and Chaano are industrial areas.
		</p>
	</div>
	<div class="name" id="food">Cuisine... </div>
	<hr/>
	<div class="pdheader">
	<p class="explain">
			Haryanvi cuisine is like the people of Haryana - simple, earthy and inextricably linked to the land. In Haryana, the emphasis is on food that is wholesome, fresh and prepared with little or no fuss at all. Food always evolves out of a certain cultural context. The simpler the culture or civilisation, so is the cuisine which is uncomplicated and essentially implies sustenance. Haryana with its essentially agrarian culture has retained simplicity in its cuisine.

			The 'Land of Rotis' is an apt title for Haryana, as people are fond of eating different kinds of rotis here. Wheat rotis are common and so are baajre ki roti. In earlier times, rotis would be made from a flour of wheat, gram and barley, a truly nutritious and healthy combination. Then there is the gochini atta made from wheat and gram flour. However with the rising price of gram and barley, people prefer the comparatively cheaper wheat flour, a loss both in terms of taste and nutrients.
	</p>
	</div>
	<div class="name" id="culture">Culture... </div>
	<hr/>
	<div class="pdheader">
	<p class="explain">HARYANA has a rich cultural heritage from the Vedic times. The state is rich in folklore. The people of Haryana follow their own traditions. People of HARYANA still follow the old age customs of meditation, chanting of Vedic Mantras and Yoga. The religious and seasonal festivals shows the culture of this region. The haryanvi dance is the mother of all arts. Music and poetry exist in environment, architecture and painting in space. The dance is not just a form of recreation but something needed to release the physical and emotional energy. Folk dances, helps in removing the performer's worries and cares.

			The traditional clothes for females is Ghagra Choli and Dhoti kurta for men in HARYANA. But with the change of times metropolitan dresses are also being worn because of effect of television. Earlier the females had ghugta from the elder males in their in-laws family. But with change of times the custom and traditions are also changing. The men and women work together in fields.
		</p></div>
	<div class="name" id="florafouna">Flora & Fauna</div>
	<hr/>
	<div class="pdheader">
	<p class="explain">
			Forest Cover in the state in 2013 was 3.59% (1586 km2) and the Tree Cover in the state was 2.90% (1282 km2), giving a total forest and tree Cover of 6.49%.[107] In 2016-17, 18,412 hectares were brought under tree cover by planting 14.1 million seedlings.   Thorny, dry, deciduous forest and thorny shrubs can be found all over the state. During the monsoon, a carpet of grass covers the hills. Mulberry, eucalyptus, pine, kikar, shisham and babul are some of the trees found here. The species of fauna found in the state of Haryana include black buck, nilgai, panther, fox, mongoose, jackal and wild dog. More than 450 species of birds are found here.
			Haryana has two national parks, eight wildlife sanctuaries, two wildlife conservation areas, four animal and bird breeding centers, one deer park and three zoos, all of which are managed by the Haryana Forest Department of the Government of Haryana
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
