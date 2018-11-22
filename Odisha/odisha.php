<?php include('C:\xampp\htdocs\WT\server2.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../sstyles.css">
		<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
		<title>Odisha</title>
		
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
		<div class="name" class="name">Odisha
		<p>--- The Land of Splendour and Beauty ---<p>
		</div>
		<br>
		<div class="slideshow-container">
			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
  			<img src="ss31.jpg" style="width:100%">
 			</div>
			<div class="mySlides fade">
 			<div class="numbertext">2 / 3</div>
  			<img src="ss32.jpg" style="width:100%">
			</div>
			<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="ss33.jpg" style="width:100%">
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
		<p class="explain" style="font-size:24px;font-family:comic sans ms">Rajasthan is one of the most popular tourist destinations in India, for both domestic and international tourists. Rajasthan attracts tourists for its historical forts, palaces, art and culture with its slogan 'Padharo mahare desh'. Every third foreign tourist visiting India travels to Rajasthan as it is part of the Golden Triangle for tourists visiting India.

The palaces of Jaipur, lakes of Udaipur, and desert forts of Jodhpur, Bikaner & Jaisalmer are among the most preferred destinations of many tourists, Indian and foreign. Tourism accounts for eight percent of the state's domestic product. Many old and neglected palaces and forts have been converted into heritage hotels</p>
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
	  		<img src="pur.jpg" class="image"/>
  			<div class="overlay">
    			<div class="text">Puri</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#two">
	  		<img src="bhu.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Bhubaneshwar</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#three">
	  		<img src="kon.jpeg" class="image">
  			<div class="overlay">
    			<div class="text">Konark</div>
  			</div>
			</div>
			</a>
			</div>
			</div>
			<div class="row">
			<div class="column">
			<div class="container">
			<a href="#four">
	  		<img src="cut.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Cuttack</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#five">
	  		<img src="tal.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Talasari Beach</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#six">
	  		<img src="gop.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Gopalpur</div>
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
	  		<img src="cui4.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Cuisine</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#culture">
			<div class="container1">
	  		<img src="cul4.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Culture</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#floraandfauna">
			<div class="container1">
	  		<img src="flo4.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Flora & Fauna</div>
  			</div>
			</div>
			</a>
			</div>
		</div></center>
		<br>
		<div class="name" id="one">Puri... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">One of the four must-visit pilgrimage sites for Hindus (Char-Dham), Puri is a beach city with its most famous attraction as the Jagannath temple.

Known as the resting place of Lord Shiva, Puri in the state of Orissa is situated alongside the coast of Bay of Bengal. This town is home to one of the most sacred temples in Hindu mythology, the Jagannath Temple. The majestic history and heritage of Puri date back to the 3rd century B. C. Puri, Konark and Bhubaneshwar complete the Golden Triangle of Orissa, with their religious significance and cultural heritage being the centres of tourism in this state. There are a lot of places near Puri that one must visit, like the Chilika lake, Puri beach, Gundicha Ghar and the very famous Sun temple of Konark. Puri is soon turning into an industrial hub with major manufacturing companies coming here. The Rath Yatra(chariot festival) which takes place during the month of June-July should not be missed if you are planning to visit during this time.</p>
	</div>
		<div class="name" id="two">Bhubaneshwar... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Bhubaneswar, the temple city of India, once known for its architecture and grand temples, is presently a thriving centre for commerce and business.

Bhubaneshwar is an ancient city replete with beautiful historic temples which attract pilgrims and tourists from all over the country. The name of the city literally means Lord of the Universe, rightly reflected in the number of temples here and the religious fervor of its locals. This is now a bustling city where the history is beautifully intertwined with its modern and progressive present. Bhubaneshwar being the centre for religious tourism has a number of majestic temples built centuries ago which have still retained their original over all these years. Among them the Lingaraj temple and the Parasurameswara temple are must-visits and attract tourists for all parts of the country.</p>
	</div>
		<div class="name" id="three">Konark... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Konark, in the state of Orissa is renowned world over for the Sun Temple which is also a UNESCO World Heritage Site, the Annual dance festival and its beautiful sandy beaches.

Konark's Sun Temple is an architectural marvel and is one of the most beautiful monuments of India. The Annual Dance Festival is a five day-long cultural extravaganza which invites unique dancing talent from all over the country. This festival is a grand celebration of our country's rich cultural and artistic legacy, an event to truly rejoice the various dance forms that our country has invented. The celebrations happen with the backdrop of the Sun temple, adding grandeur and magnificence to the whole program. Besides this, Konark also hosts the Sun Festival, where devotees offer prayers to the Sun God by taking dips in the sea. The Dance Festival also hosts a Handicrafts Mela where one can buy unique and exquisitely handcrafted pieces which beautifully reflect the Oriya art form.</p>

</div>
		<div class="name" id="four">Cuttack... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Referred to as the cultural capital of Orissa, Cuttack is a commercial city with plenty of impressive tourist attractions.

Cuttack is the second largest city in Orissa and is the centre of all commercial activities and the local handicrafts of this state are displayed and traded in this very city. The inflow and outflow of the rare artefacts which so beautifully define the quintessential Oriyan form of art takes place from this very city. Cuttack is always buzzing with cultural activities and plays host to a variety of festivals like the Baliyatra, which commemorates the ancient trade links the countries like Java, Bali and Sumatra and the Kite Festival which is held in the month of January. Cuttack is a highly-planned city and has a number of tourist attractions which will make a person's trip here a memorable one.</p>

</div>
		<div class="name" id="five">Talasari Beach... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Located in Baleswar district of Odisha and at a distance of 10 Km from Digha, the Talasari beach is pristine, serene and has been bestowed with spectacular panorama.

There are secret beaches, beaches which are beyond the reach of contamination, beaches that refresh our senses and Talasari is one such place. This virgin beach has sand dunes, calmer waves amid several palm trees, coconut trees, cashew trees known to be the last beach on the north eastern coast of India. Talasari gets its name from Tala (rhythm) and Sari (row)- the rhythm formed by a well arrayed lush green belt and golden sands with an occasional red fleck (thanks to the red crabs ambling around) meeting the enormous sea, which is almost melodious. Being a fisherman's paradise, Talasari doesn't experience much tourist rush. There is a concrete structure where fishermen trap their fishes and sell them in a fish market near the beach where you can also find cooked chicken, crabs and fish. You can simply walk across the river bed or enjoy boat rides and high tides the high tides here. Apart from being a sea beach, Talasari also is a river bank of Subornorekha river which flows to merge into the Bay of Bengal.</p>

</div>
		<div class="name" id="six">Gopalpur... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">In the southern coastline of Odisha just 15 km from the city of Behrampur is located a quaint, tiny town of Gopalpur which was a sea port, bustling with trade and commerce, in the Colonial Era.

What was once a bustling port city before being deserted, is today, one of the best beaches in the eastern coastline of the country. It is know for being an offbeat destination and a place for relaxation. The sea port remains though largely in ruins, the British have gone too but what remains is one of India's most loved beaches. The Gopalpur-on-sea is considered to be one of India's most beautiful beaches largely due to its remoteness, its peace and its offbeat crowd. The beaches are sparkling gold which along with the azure water of the Bay of Bengal providing a perfect place to relax and immerse yourself in nature. Besides the beach, the food is also pretty great in the town with many shanties providing tongue tickling sea food. Gopalpur is rapidly becoming one of the most sought after beaches in the country, with more and more people becoming aware of its beauty.</p>

	</div>
		<br>
		<div class="name" id="food">Cuisine... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Compared to other regional Indian cuisines, Odia cuisine uses less oil and is less spicy while nonetheless remaining flavourful. Rice is the staple food of this region. Mustard oil is used in some dishes as the cooking medium, but ghee (made of cow's milk) is preferred in temples.In old times food was traditionally served on banana leaves or disposable plates made of sal leaves.

Odia cooks, particularly from the Puri region, were much sought after due to their ability to cook food in accordance with Hindu scriptures.
Yoghurt is used in dishes. Many sweets of the region are based on chhena (cheese).</p>

	</div>
		<br>
		<div class="name" id="culture">Culture... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">The sacred environs of Lord Jagannath temple, the eroticism of Konark's Sun temple, the wondrous caves of Jainism, the mystical monasteries of Buddhism, the paintings of folklore and the weaver's magic; all stand as meek evidences of an eloquent past and continuing golden present of Odisha (Orissa).

Expressions of the soul find way in the form of indigenous theatres namely 'Prahalad-Nataka' or the 'Dhanuyatra' here. Dance and music form an inseparable part of the rich culture of the state. The exotic classical dance of the region evolved from the cult of the 'devadasis' or female temple dancers. Folk dances like 'Chhow' and 'Sambalpuri' along with tribal dances like 'Ghumura' & 'Paraja' leave every spirit truly elated. Then there are fairs like 'Bali Jatra' that come as a reminder of an ancient maritime links with Bali. And to crown it all is the universally-acclaimed 'Rathyatra' of Lord Jagannath which has become an absolute synonym to Orissan culture.

</p>

	</div>
		<br>
		<div class="name" id="floraandfauna">Flora & Fauna... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">The flora and fauna of Odisha, a state in eastern India, is extremely diverse and gives the state a reputation for abundance of natural beauty and wildlife. The districts in the interior are thickly covered by forests both of the tropical moist deciduous type as well as tropical dry deciduous. The hills, plateaus and isolated areas of the northeastern part of the state are covered by the tropical moist deciduous forests whereas the second types of the forests are located in the southwest region of the state. Some of the trees which grow in abundance in Odisha are bamboo, teak, rosewood, sal, piasal, sanghvan and haldi. There are 479 species of birds, 86 species of mammals, 19 species of amphibians and 110 species of reptiles present in Odisha. The state is also an important habitat for the endangered olive ridley turtles and Irrawaddy dolphins. Koraft district of southern Odisha has been identified by Food and Agriculture Organisation (FAO) of UN as Global Agricultural Heritage site which is among only other three sites in the world.Other sites are in Peru, China and Philippines.</p>

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
