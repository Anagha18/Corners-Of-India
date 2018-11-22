<?php include('C:\xampp\htdocs\WT\server2.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../sstyles.css">
		<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
		<title>Chhattisgarh</title>
	</head>
	<body>

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

		<div class="name">Chhattisgarh
		<p>--- The home of Gods ---<p>
		</div>
		<br>
		<div class="slideshow-container">
			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
  			<img src="slideshowch1.jpg" style="width:100%">
 			</div>
			<div class="mySlides fade">
 			<div class="numbertext">2 / 3</div>
  			<img src="slideshowch2.jpg" style="width:100%">
			</div>
			<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="slideshowch3.jpg" style="width:100%">
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
		<p class="explain">Chhattisgarh is one of the 29 states of India, located in the centre-east of the country. It is the tenth-largest state in India, with an area of 135,191 km2 (52,198 sq mi). With a population of 25.5 million, Chhattisgarh is the 17th-most populated state in the country. A resource-rich state, it is a source of electricity and steel for the country, accounting for 15% of the total steel produced.Chhattisgarh is one of the fastest-developing states in India.

		The state was formed on 1 November 2000 by partitioning 10 Chhattisgarhi and 6 Gondi speaking southeastern districts of Madhya Pradesh. The capital city is Raipur. Chhattisgarh borders the states of Madhya Pradesh in the northwest, Uttar Pradesh in the north, Jharkhand in northeast, Maharashtra in the southwest, Telangana and Andhra Pradesh in the south, Odisha in the southeast. Currently the state comprises 27 districts.
	</p></div>
		<br>
		<br>
		<div class="places1">
			<div class="name">Must visits... </div>
			<hr/>
			<br>
			<br>
			<div class="row">
			<div class="column">
			<a href="#Raipur">
			<div class="container">
	  		<img src="ch1.jpg" class="image"/>
  			<div class="overlay">
    			<div class="text">Raipur</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Jagdalpur">
	  		<img src="ch2.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Jagdalpur</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Bhilai">
	  		<img src="ch3.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Bhilai</div>
  			</div>
			</div>
			</a>
			</div>
			</div>
			<div class="row">
			<div class="column">
			<div class="container">
			<a href="#Durg">
	  		<img src="ch4.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Durg</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Kanger Ghati National Park">
	  		<img src="ch5.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Kanger Ghati National Park</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Raigarh">
	  		<img src="ch6.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Raigarh</div>
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
		<div class="name" id="Raipur">Raipur... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Raipur is the capital city of Chhattisgarh state in central India. In the center, the ancient Dudhadhari Math temple is a sacred monument dedicated to Lord Rama, decorated with scenes from the epic poem “Ramayana.” Nearby, a statue of the Hindu monk Swami Vivekananda towers over Vivekananda Sarovar lake. Southeast, Purkhouti Muktangan is an open-air museum featuring landscaped grounds, statues and tribal artifacts.
			Raipur is located near the centre of a large plain, sometimes referred as the "rice bowl of India", where hundreds of varieties of rice are grown.   The Mahanadi River flows to the east of the city of Raipur, and the southern side has dense forests. The Maikal Hills rise on the north-west of Raipur; on the north, the land rises and merges with the Chota Nagpur Plateau, which extends north-east across Jharkhand state. On the south of Raipur lies the Deccan Plateau.

		</p>
		</div>
		<div class="name" id="Jagdalpur">Jagdalpur... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Jagdalpur is a city in the tribal district of Bastar in Chhattisgarh, a state in central India. On the banks of the Indravati River, ornate Bastar Palace was built by the region’s former kings. The nearby Anthropological Museum displays tribal artifacts. West of the city, Chitrakote Falls cascades over broad cliffs. To the southeast, tigers roam through teak and bamboo forests at Kanger Valley National Park.
Jagdalpur's is primarily an agarian economy, although it has many small scale and afew large scale industries as well. Furniture Industries and rice mills are the most common industries in this region. Nagarnar Steel Plant, being set up at its outskirts, is at an advanced construction and is slated for commissioning in October 2018.

		</p>
		</div>
		<div class="name" id="Bhilai">Bhilai... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Bhilai, officially called Bhilai Nagar, is a city in the district of Durg, Chhattisgarh, in eastern central India.

			The city is known for its steel and chemical industry, notably the Bhilai Steel Plant.
			Bhilai is home to the Bhilai Steel Plant, the first Indian plant to produce steel rails, which was established with help from the Soviet Union in 1955.   The facility underwent modernization and expansion, and is amongst leading manufacturer of iron and steel in Asia
		</p>
	</div>
		<div class="name" id="Durg">Durg... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Situated on the east bank of river Shivnath, District Durg is herald of Chhattisgarh’s Industrial Development, Cultural competence, Social harmony and Meaningful use of resources. It is a symbol of status , prestige and glory of Chhattisgarh. History of Durg is like conducive inspiration which is unique mixture of oldness and modernity, culture-rite and entrepreneurship. Bhilai known as “Mini India” for Industrial development, social harmony and cultural diversity is a twin city of Durg.

		</p>
	</div>

		<div class="name" id="Kanger Ghati National Park">Kanger Ghati National Park... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Kanger Ghati National Park is a city in the Indian state of Jharkhand. It is the second most populated city in Jharkhand. Kanger Ghati National Park along with its adjacent urban areas ranks 42nd in population amongst other cities in India. Kanger Ghati National Park shares its land borders with Asansol, West Bengal. Kanger Ghati National Park has some of the largest coal mines in India and is called Coal Capital of India. Tata Steel, Bharat Coking Coal Limited, Eastern Coalfields Limited and Indian Iron And Steel Company are some of the companies who operate coal mines in the district. The engineering institute IIT, Kanger Ghati National Park is located in Kanger Ghati National Park. Among the rail divisions of Indian Railway, Kanger Ghati National Park Rail Division is the second-largest in revenue generation after the Mumbai division. The city has one parliamentary seat and six seats in the Legislative Assembly. </p>
		</div>
		<div class="name" id="Raigarh">Raigarh... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Raigarh is a city and municipal corporation in the Raigarh district of the Indian state of Chhattisgarh. The administrative headquarters of Raigarh district, it is known for its coal reserves and power generation for the state as well as the country.It is also known as Sanskardhani i.e. Cultural capital of Chhattisgarh. With a population of just about 150,000, it is a rapidly growing industrial city and home to the Mohan Jute Mill, one of the oldest jute mills in India and the only one in Madhya Pradesh prior to the splitting off of Chhattisgarh in 2000. Raigarh is also a major producer of steel and iron ore as well as the cultural and industrial capital of Chhattisgarh. Jindal Steel and Power Limited is a major steel plant based in Raigarh.Raigarh is a major rice producing district with a net production of 350,000 tonnes per annum. A major rice processing industry in the district is Raigarh Foods & Hotel Business Pvt Ltd. Raigarh consists of various shopping complexes, broad four-lane roads, 3 star hotels, upcoming malls and much more. Ela Mall, galaxy mall, Grand Mall are some malls in raigarh.

		</p>
	</div>
	<div class="name" id="food">Cuisine... </div>
	<hr/>
	<div class="pdheader">
	<p class="explain">
		The State of Chhattisgarh is known as the rice bowl of India and has a rich tradition of food culture.
		Red Velvet Mite is used as Medicine in Traditional Healing of Chhattisgarh
		Most of the traditional and tribal foods are made of rice and rice flour, curd and a variety of green leafy vegetables like lal bhaaji, chowlai bhaaji, chech bhaji, kaanda bhaaji, kheksi,kathal,kochai patta, kohda and bohar bhaji. Badi and Bijori are optional food categories; gulgula (bobra), bidiya, dhoodh fara, bafauli, kusli, balooshahi,singhara, tikhur ,anarsa and khurmi fall in sweet categories. Some well known breakfast dishes made out of Rice & rice flour include fara/muthiya (rice rolls in white sauce), cheela(dosa like dish made with rice batter), angakar roti, chousela roti (rice puris), etc. One of the common meal had during the scorching summer is Bore Baasi ( literally means dipped rice from last cooked meal) which mainly consists of cooked rice dipped water/dahi/buttermilk. It is mostly accompanied by pickle and raw onion. It helps maintain the water levels in the body, keeping it cool and hydrated during the hot and arid summer days.
	</p>
	</div>
	<div class="name" id="culture">Culture... </div>
	<hr/>
	<div class="pdheader">
	<p class="explain">Chhattisgarh is the central state of the union of India and is now-a-days one of the burgeoning tourist destinations of India. People are bound to get captivated by its culture that finds expression in its dance styles, cuisine, and music. The culture of Chhattisgarh speaks for the state and is quite apparent in the lifestyle of the local people. From the normal day routine to any auspicious occasion, Chhattisgarh embodies the essence of true Indianness.

	</p></div>
	<div class="name" id="florafouna">Flora & Fauna</div>
	<hr/>
	<div class="pdheader">
	<p class="explain">
		Some distinct varieties of common birds are also found in Bastar. For instance, the Jungle Crow is pitch dark and slightly larger than the domestic crow. It has a heavy-duty bill and a deep and hoarse "caw." It is more audacious in attacking the nests of gentler birds and even the pups of smaller animals. Its movement in the forest often leads to tiger or panther kills.

		Other species of avifauna include partridges (which nest in shrubs outside villages and run almost as fast as they fly), cattle egret, pond heron, babblers, parrots and parakeets, blue jay, wagtails, quails (both black and grey varieties), b ul bul , k oel , fly catchers, woodpeckers, sun bird and weaver bird.
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
