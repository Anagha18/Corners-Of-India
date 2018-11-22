<?php include('C:\xampp\htdocs\WT\server2.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../sstyles.css">
		<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
		<title>Telangana</title>
		
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
		<center><div class="name" class="name" align="center">Telangana
		<p align="center">--- The Newest State of India---<p></center>
		</div>
		<br>
		<div class="slideshow-container">
			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
  			<img src="tela.jpg" style="width:100%">
 			</div>
			<div class="mySlides fade">
 			<div class="numbertext">2 / 3</div>
  			<img src="ss52.jpg" style="width:100%">
			</div>
			<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="ss53.jpg" style="width:100%">
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
		<p class="explain" style="font-size:24px; font-family:comic sans ms">Telangana is the newly born 29th state of India, consisting of the ten north-western districts of Andhra Pradesh. It was originally part of the region comprising Hyderabad in Andhra Pradesh. With the separation, Telangana has got a whole new identity, packed with rich history and culture this state is exploring its tourism strengths.

The capital city of Hyderabad is shared between Telangana and Andhra Pradesh. The famous Char Minar is located here, which is also a shared monument among the two states. However, Telangana has a lot more to offer than just that. The Chowmahalla Palace, the Golkonda fort are some of the historically significant sites situated in this state. 

The Kuntala waterfalls born out of a love story between a prince and a sage's daughter is one the largest waterfalls in this state which offer a cool respite to the tourists. Apart from this, there are many famous temples here such as Bhadrachalam and Mahabalipuram Temples; of which the Mahabalipuram temple is also called the Shore Temple owing to it's proximity to the beach.</p>
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
	  		<img src="hyd.jpg" class="image"/>
  			<div class="overlay">
    			<div class="text">Hyderabad</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#two">
	  		<img src="pap.jpg" class="image">
  			<div class="overlay">
    			<div class="text">North Sikkim</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#three">
	  		<img src="nag.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Nagarjuna Sagar</div>
  			</div>
			</div>
			</a>
			</div>
			</div>
			<div class="row">
			<div class="column">
			<div class="container">
			<a href="#four">
	  		<img src="bhad.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Bhadrachalam</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#five">
	  		<img src="nal.jpeg" class="image">
  			<div class="overlay">
    			<div class="text">Nalgonda</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#six">
	  		<img src="kha.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Khammam</div>
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
	  		<img src="cui6.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Cuisine</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#culture">
			<div class="container1">
	  		<img src="cul6.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Culture</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#floraandfauna">
			<div class="container1">
	  		<img src="flo6.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Flora & Fauna</div>
  			</div>
			</div>
			</a>
			</div>
		</div></center>
		<br>
		<div class="name" id="one">Hyderabad... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">A veritable melting pot of the old and the new, Hyderabad, also known as the City of the Nawabs, is a city that exudes an old-world charm of its own while still coexisting with the rapidly growing onslaught of commercialization in perfect harmony. Steeped in history, Hyderabad is home to old mosques and bazaars lined parallelly alongside swanky new office buildings and malls, and it is these very contrasts – these glimpses into the city’s rich past with inherent promises of an even better future – this is what exactly makes Hyderabad a city worth visiting. Maybe even more than once.<br>The most iconic landmark of Hyderabad is the Charminar, which is a distinguished monument that clearly exhibits the Indo-Islamic architecture of its times. Charminar, which literally translates to four minarets, is built entirely out of limestone and granite, with four minarets on four sides, each of them facing a different street. The Charminar is the oldest mosque in Hyderabad, and it has stairs leading to the second level, which is open for devotees to come and pray in. The entire stretch outside the monument is lined with little stalls selling pearls, bangles, and other jewellery, and this bazaar is bustling with both tourists and locals at any given hour of the day.</p>
	</div>
		<div class="name" id="two">Papikondalu... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Papikondalu mountain range runs along the River Godavari (Western Godavari) and is located in Rajahmundry, Andhra Pradesh. Papikondalu is a sheer fest to the eyes in terms of its scenic beauty. As the hills become closer and closer to the visitor, the width of the mighty Godavari becomes narrower. In accordance with this view resembling the middle partition of a woman's hair, it was initially named as 'Papidi' Kondalu- Paidi in Telugu means the middle partition of a woman’s hair. Later, it came to be known as Papikondalu in the local language. The river narrowing, its twists and turns along with the Papi Hills form a breathtaking visual experience.

Its beauty is often compared to that of Kashmir as the area around the ranges is quaint and bountiful with nature. The ranges also boast of waterfalls at Munivaatnam.</p>
	</div>
		<div class="name" id="three">Nagarjunasagar... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Nagarjunasagar is a site of spectacular man-made marvel flanked by equally enchanting panoramic vistas of lush green surrounding. Lying in the Nalgonda District of Andhra Pradesh, the most popular landmark of the town is world's tallest masonry dam Nagarjunasagar dam built over Krishna River.

With the capacity of irrigating around 10 acres of land, this modern architectural grandeur is a sight to behold. Other than that, the town is also renowned for much the talked about the excavation of Buddhist Civilization. An island named as Nagarjuna Konda lying amidst the man-made lake is a site where the relics of such great significance are preserved. In fact, the town got its present name from a Buddhist saint and scholar Acharya Nagarjuna. The town of Nagarjunasagar or Vijayapuri as it was earlier known is today blessed by the Mother Nature in full glory. Visit this absolutely bewitching site to connect yourself with nature and various aspects of Buddhism.</p>

</div>
		<div class="name" id="four">Bhadrachalam... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Bhadrachalam can be a refreshing place to visit with a share of instances from the Ramayana, a glorious palace, a vibrant river and mystical terrain and surroundings.

The majestic River Godavari is found winding with its vast stretch of sand all throughout the town and is considered to be very holy. It can also be the host to a number of activities that let the river be a completely enjoyable experience. One can visit the Sri Sitaramachandra Swamy Temple and the Abhaya Anjaneya temple</p>
</div>
		<div class="name" id="five">Nalgonda... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Nalgonda is a city with deep rooted rich history and equally intriguing cultural heritage. With its roots going back to Paleolithic Age proved by enough evidence excavated from Yeleswaram, Nalgonda also displays the hints of Neolithic culture with further unearthing of sling stones and other such objects.

The city derives its name from a combination of two Telugu words 'Nalla' and 'Konda' meaning 'Black Hills'. In fact, today the city of Nalgonda presents a colourful blend of diverse religious cultures and traditions reflecting the beautiful past of the city that was once ruled by several Hindu and Muslim rulers at different points of time. The city is also renowned for its strong political taste which was mainly established under the reign of Mauryas, however it was during the rule of Satavahanas that the trade with Roman Empire commenced. At present this amazing place called Nalgonda is blessed with the footprints left behind by several great kingdoms and dynasties that called this place their home.</p>

</div>
		<div class="name" id="six">Khammam... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Khammam city, erstwhile known as Kammamet, is located in the state of Telangana, approximately 200 km from the capital Hyderabad. A historically important city, Khammam hosted many movements during India’s freedom struggle. The Khammam Fort, which had periods of reign by both Hindu and Muslim leaders, is an important cultural landmark of the city, and a popular tourist destination.

According to legends, the Narsimhadri temple situated here on a hilltop is said to have existed since 1.6 million years, the city derives its name from the vertical rock that acts as pillar or 'Khamba' below the temple. With the recent addition of 14 nearby village the city earned the status of a municipal corporation.</p>

	</div>
		<br>
		<div class="name" id="food">Cuisine... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">The cuisine in Telangana has two personalities to it. One being a simple and traditional Telugu platter and other an elaborate, spicy and tangy Nawabi cuisine. The area is the largest producer of rice, which naturally, also happens to be a staple ingredient here. Though the food is traditionally vegetarian, the areas closer to sea, have seafood as a more staple part of their platters, while, Coconut oil is an essential and distinct ingredient in both. The cuisine of the area is also lined with a variety of pickles with Aavakaya, a mango pickle, being a local favorite. Muruku (a preparation of rice), Appadams, Onion Pakodas, Vadas, Idlis are the highlights of the Telugu cuisine here. So are the sweets like Bandhar Ladoo, Payasam, Sheer Khurma, Bobbaltu, Putharekulu. On the other hand, the Nawabi bit of cuisine here, uses a generous dash of spice, tanginess and a flattering use of oil. It derives influences from Arab, Turkish and Mughal cuisines. Hyderabadi Biryani, Kebabs, Moghlai Shwarma, Kodi Iguru, Gongura Mutton, Kodi Pulusu are the delicacies with which the cuisine of the area is identified. The main ingredients used are Lamb, Chicken and fish. Sheer Korma, Khubani ka meetha, Gajar ka Halwa, Seviyan ka Zarda are the sweets that define the desserts in the area.</p>

	</div>
		<br>
		<div class="name" id="culture">Culture... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">The Indian state of Telangana has a cultural history of about 5,000 years. The region emerged as the foremost centre of culture in Indian subcontinent during the rule of Hindu Kakatiya dynasty and the Muslim Qutb Shahi and Asaf Jahi dynasties— (also known as the Nizams of Hyderabad). The rulers' patronage and interest for arts and culture transformed Telangana into a unique multi-cultural region where two different cultures coexist together, thus making Telangana the representative of the Deccan Plateau and its heritage with Warangal and Hyderabad being its epicenter. The regions' major cultural events celebrated are "Kakatiya Festival" and Deccan Festival along with religious festivals Bonalu, Bathukamma, Dussehra, Ugadi, Sankranthi, Milad un Nabi and Ramadan.

Telangana State has long been a meeting place for diverse languages and cultures. It is known as "South of North and North of South". It is also known for its Ganga-Jamuna Tehzeeb and the capital Hyderabad is known as a miniature India

</p>

	</div>
		<br>
		<div class="name" id="floraandfauna">Flora & Fauna... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Vegetation cover of Telangana as of 2012
Telangana, located strategically in the central region of the Indian sub-continent, has representatives of Indian plant and animal life. The vegetation found in the state is largely of dry deciduous type with a mixture of teak, and species of the genera Terminalia, Pterocarpus, Anogeissus etc.The varied habitat harbors a diversity of fauna which includes tiger, panther, wolf, wild dog, hyena, sloth bear, Gaur, Black Buck, Chinkara, Chowsingha, Nilgai, Cheetal, Sambar and a number of birds and reptiles in the forest.etc</p>

	</div>
		<br>
		<script type="text/javascript" src="../script.js"></script>

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
