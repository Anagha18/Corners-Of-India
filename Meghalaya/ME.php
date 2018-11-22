<?php include('C:\xampp\htdocs\WT\server2.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../sstyles.css">
		<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
		<title>Meghalaya</title>

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
		<div class="name" >Meghalaya
		<p>--- Scotland of the east ---<p>
		</div>
		<br>
		<div class="slideshow-container">
			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
  			<img src="slideshowme1.jpg" style="width:100%">
 			</div>
			<div class="mySlides fade">
 			<div class="numbertext">2 / 3</div>
  			<img src="slideshowme2.jpg" style="width:100%">
			</div>
			<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="slideshowme3.jpg" style="width:100%">
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
		<div class="pdheader">
		<p class="explain">Meghalaya (UK: /meɪˈɡɑːləjə/,   US: /ˌmeɪɡəˈleɪə/)   is a state in Northeast India. The name means "the abode of clouds" in Sanskrit. The population of Meghalaya as of 2016 is estimated to be 3,211,474.   Meghalaya covers an area of approximately 22,430 square kilometers, with a length to breadth ratio of about 3:1.

				The state is bounded to the south by the Bangladeshi divisions of Mymensingh and Sylhet, to the west by the Bangladeshi division of Rangpur, and to the north and east by India's State of Meghalaya. The capital of Meghalaya is Shillong. During the British rule of India, the British imperial authorities nicknamed it the "Scotland of the East".   Meghalaya was previously part of Meghalaya, but on 21 January 1972, the districts of Khasi, Garo and Jaintia hills became the new state of Meghalaya. English is the official language of Meghalaya. The other principal languages spoken include Khasi, Garo, Pnar, Biate Hajong, Meghalayaese and Bengali. Unlike many Indian states, Meghalaya has historically followed a matrilineal system where the lineage and inheritance are traced through women; the youngest daughter inherits all wealth and she also takes care of her parents.
			</p>
	</div>
		<br>
		<div class="places1">
			<div class="name">Must visits... </div>
			<hr/>
			<br>
			<br>
			<div class="row">
			<div class="column">
			<a href="#Guwahati">
			<div class="container">
	  		<img src="me1.jpg" class="image"/>
  			<div class="overlay">
    			<div class="text">Guwahati</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Shillong">
	  		<img src="me2.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Shillong</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Cherrapunji">
	  		<img src="me3.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Cherrapunji</div>
  			</div>
			</div>
			</a>
			</div>
			</div>
			<div class="row">
			<div class="column">
			<div class="container">
			<a href="#Dawki ">
	  		<img src="me4.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Dawki </div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Mawlynnong">
	  		<img src="me5.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Mawlynnong</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Nongriat ">
	  		<img src="me6.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Nongriat </div>
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
		<br>
		<div class="name" id="Guwahati">Guwahati... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Guwahati is a sprawling city beside the Brahmaputra River in the northeast Indian state of Meghalaya. It’s known for holy sites like the hilltop Kamakhya Temple, featuring shrines to the Hindu deities Shiva and Vishnu. To the east, 18th-century Navagraha Temple is an astronomical center with planetary shrines. Umananda Temple, dedicated to Shiva and covered with engravings, stands on Peacock Island in the river.
				Near the large Digholi Pukhuri pond, the MeghalayaState Museum displays sculptures, textiles and regional coins. Close by, the Guwahati Planetarium offers stargazing and light shows. In the east of the city, the MeghalayaState Zoo Cum Botanical Garden is a vast, leafy space that's home to an orchid house and rare animals such as white tigers and one-horned rhinos. Farther southeast, the Srimanta Sankaradeva Kalakshetra arts complex contains a cultural museum and an open-air theater, and hosts plays and exhibitions. West of the city, Deepor Beel Bird Sanctuary’s lily-covered wetlands attract spot-billed pelicans and whistling teals.</p>
			</div>
		<div class="name" id="Shillong">Shillong... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Shillong (English: /ʃɪˈlɔːŋ/;     Khasi: Shillong) is a hill station in the northeastern part of India and the capital of Meghalaya, which means "The Abode of Clouds" and is one of the smallest states in India. It is the headquarters of the East Khasi Hills district and is situated at an average altitude of 4,908 feet (1,496 m) above sea level, with the highest point being Shillong Peak at 6,449 feet (1,966 m). Shillong is the 330th most populous city in India with a population of 143,229 according to the 2011 census. It is said that the rolling hills around the town reminded the European settlers of Scotland. Hence, they would also refer to it as the "Scotland of the East".

                Shillong has steadily grown in size since it was made the civil station of the Khasi and Jaintia Hills in 1864 by the British. In 1874, on the formation of Meghalayaas the Chief Commissioner's Province, it was chosen as the headquarters of the new administration because of its convenient location between the Brahmaputra and Surma valleys and more so because the climate of Shillong was much cooler than tropical India. Shillong remained the capital of undivided Meghalayauntil the creation of the new state of Meghalaya on 21 January 1972, when Shillong became the capital of Meghalaya, and Meghalayamoved its capital to Dispur in Guwahati.</p>
	</div>
		<div class="name" id="Cherrapunji">Cherrapunji... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Cherrapunji (/ˌtʃɛrəˈpʌndʒi, -ˈpʊn-/ (About this soundlisten); with the native name Sohra being more commonly used, and can also be spelled Cherrapunjee or Cherrapunji) is a subdivisional town in the East Khasi Hills district in the Indian state of Meghalaya. It is the traditional capital of aNongkhlaw hima (Khasi tribal chieftainship constituting a petty state), both known as Sohra or Churra.

                Cherrapunji has often been credited as being the wettest place on Earth, but for now nearby Mawsynram currently holds that distinction. Cherrapunji still holds the all-time record for the most rainfall in a calendar month and in a year, however: it received 9,300 millimetres (370 in; 30.5 ft) in July 1861 and 26,461 millimetres (1,041.8 in; 86.814 ft) between 1 August 1860 and 31 July 1861.
                Cherrapunji is located at 25.30°N 91.70°E. It has an average elevation of 1,484 metres (4,869 ft) and sits on a plateau in the southern part of the Khasi Hills, facing the plains of Bangladesh. The plateau rises 660 meters above the surrounding valleys.

                Soils on the plateau are poor owing to deforestation and washout caused by heavy rainfall. Owing to winter droughts, the vegetation in this location is even xerophytic in spite of the fame of Cherrapunji as an extremely wet place. Additional pressure on local ecosystems is created by the rapid increase of the population — from a Sohra-area population of 7,000 in 1960, it grew to over 100,000 by 2000.</p>

</div>
		<div class="name" id="Dawki ">Dawki ... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Dawki or Dauki is a town in West Jaintia Hills district, Meghalaya, India.
                Dawki Integrated Check Post or Dawki border crossing is on Dawki-Tamabil is one of the few road border crossings between India and Bangladesh in West Jaintia Hills district in the state of Meghalaya,India, the corresponding post in Bangladesh is Tamabil post. Dawki ICP foundation stone was laid in January 2017 and will become operation in 2-18.   It is used mainly for coal transportation to Bangladesh. Some 500 trucks cross the border every day in peak season.

                Some shared transport is available from Barabazar in Shillong to the border post at Dawki every morning. Buses are also available for the 70 kilometres (43 mi) journey from Shillong. On the other side inside Bangladesh the Tamabil bus station, 1.5 kilometres (0.93 mi) away, has regular bus service to Sylhet 55 kilometres (34 mi) away.
        </p>

</div>
		<div class="name" id="Mawlynnong">Mawlynnong... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Mawlynnong is a village in the East Khasi Hills district of the Meghalaya state in North East India.  It is famous for its cleanliness and natural attraction.

                It comes under the Pynursla community development block and Vidhan Sabha (legislative assembly) constituency.
                Mawlynnong is located 90 km from Shillong, along the India-Bangladesh border.   Kalain "The Gateway Of Barak Valley" is 187 km from Mawlynnong.
                Mawlynnong is known for its cleanliness.   The waste is collected in the dustbins made of bamboo, directed to a pit and then used as manure.   A community initiative mandates that all residents should participate in cleaning up the village. Smoking and use of polythene is banned while rainwater harvesting is encouraged.

The travel magazine Discover India declared the village as the cleanest in Asia in 2003, and the cleanest in India in 2005.   This reputation has boosted local tourism; in 2017 NPR reported that, according to the village headsman, incomes had increased by 60 percent due to increased tourism.

            </p>
</div>
		<div class="name" id="Nongriat ">Nongriat ... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Nongriat is a village in the East Khasi Hills district of Meghalaya State, in north-eastern India. It is perhaps best known for its living root bridges; one an impressive double-decker suspension bridge called Jingkieng Nongriat. The village has three functional root bridges. These are crafted by hand, as the Khasi people have done in the Khasi Hills for centuries, intertwining and weaving together the aerial roots of banyan trees on opposite sides of a stream-filled gorge. Jingkieng Nongriat, better known simply as Double Decker, has been featured on international television programs such as the Human Planet series filmed in 2008 by BBC Wales, and a documentary by Mr. Osamu Monden in June 2004 for Asahi TV in Japan. There is another functioning living root bridge upstream from Nongriat, along with a hybrid structure that is made from both roots and steel wire. Near Nongriat, and best viewed from the neighboring village of Laitkynsew during the autumn monsoon season as a magnificent cascade, is the waterfall of Ka Likai. A succession of stone steps connect the community with neighboring village of Tyrna, just below the Cherrapunji-Laitkynsew bridle-path.

        </p>


</div>
<div class="name" id="food">Cuisine... </div>
<hr/>
<div class="pdheader">
<p class="explain">Meghalayan cuisine is the local cuisine of the Indian state of Meghalaya. Meghalaya is home to three Mongoloid tribes; it has a unique cuisine, different from the other Seven Sister States of northeast India. The staple food of the people is rice with spicy meat and fish preparations. They rear goats, pigs, fowl, ducks and cows and relish their meat.

        The popular dishes of Khasis and Jaintia are Jadoh, Ki Kpu, Tung-rymbai, and pickled bamboo shoots; bamboo shoots are also a favorite dish of the Garos. Garos eat most non-domesticated animals, though their everyday staples are simple foods such as rice with kapa, cooked with a special ingredient called purambhi masala.</p></div>
<div class="name" id="culture">Culture... </div>
<hr/>
<div class="pdheader">
<p class="explain">The Khasi, Jaintia, Bhoi, War collectively known as the Hynniewtrep people predominantly inhabit the districts of East Meghalaya, also known to be one of the earliest ethnic group of settlers in the Indian sub-continent, belonging to the Proto Austroloid Monkhmer race.

        The Garo Hills is predominantly inhabited by the Garos, belonging to the Bodo family of the Tibeto-Burman race, said to have migrated from Tibet. The Garos prefer to call themselves as Achiks and the land they inhabit as the Achik-land.
    </p></div>
<div class="name" id="florafouna">Flora & Fauna</div>
<hr/>
<div class="pdheader">
<p class="explain">About 70% of the state is forested, of which 9,496 km2 (3,666 sq mi) is dense primary subtropical forest.   The Meghalayan forests are considered to be among the richest botanical habitats of Asia. These forests receive abundant rainfall and support a vast variety of floral and faunal biodiversity. A small portion of the forest area in Meghalaya is under what are known as "sacred groves" (see Sacred groves of India). These are small pockets of ancient forest that have been preserved by the communities for hundreds of years due to religious and cultural beliefs. These forests are reserved for religious rituals and generally remain protected from any exploitation. These sacred groves harbour many rare plant and animal species. The Nokrek Biosphere Reserve in the West Garo Hills and the Balphakram National Park in the South Garo Hills are considered to be the most biodiversity-rich sites in Meghalaya. In addition, Meghalaya has three wildlife sanctuaries. These are the Nongkhyllem Wildlife Sanctuary, the Siju Sanctuary and the Baghmara Sanctuary, which is also the home of the insect eating pitcher plant Nepenthes khasiana also called "Me'mang Koksi" in local language.</p></div>
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
