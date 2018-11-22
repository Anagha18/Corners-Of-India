<?php include('C:\xampp\htdocs\WT\server2.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../sstyles.css">
		<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
		<title>Sikkim</title>
		
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
		<div class="name" class="name">Sikkim
		<p>--- The Land of Mystique---<p>
		</div>
		<br>
		<div class="slideshow-container">
			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
  			<img src="ss41.jpg" style="width:100%">
 			</div>
			<div class="mySlides fade">
 			<div class="numbertext">2 / 3</div>
  			<img src="ss42.webp" style="width:100%">
			</div>
			<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="ss43.jpg" style="width:100%">
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
		<p class="explain" style="font-size:24px;font-family:comic sans ms">Sikkim, the smallest state of India, is the land of large variety of plants, animals, rivers, mountains, lakes and waterfalls. The mountain peaks, holy lakes, ancient monasteries, orchid nurseries and stunning trekking routes make Sikkim a perfect Holiday destination for you.

The north eastern charm coupled with the majestic Himalayan snow make Sikkim one of the most beautiful state of the country. Sikkim is endowed with excellent natural resources, gorgeous mountains, beautiful waterfalls and some wonderful landscapes. The ethnic people and the natural beauty, along with modern city life give the city its own character. The Nepalis called this state as 'Sukhim' or the New Place, the Bhutias called it as the 'Demazong' or the Valley of rice and the Lepchas called it as the 'Nye-mae-el lang' or the abode of the Gods. If you are the one whose aesthetic sense is superb, and the one who longs to spend a moment in the lap of Mother Nature then Sikkim invites you with clear sky and fresh air.</p>
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
	  		<img src="gan.jpg" class="image"/>
  			<div class="overlay">
    			<div class="text">Gangtok</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#two">
	  		<img src="nors.jpg" class="image">
  			<div class="overlay">
    			<div class="text">North Sikkim</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#three">
	  		<img src="wess.jpg" class="image">
  			<div class="overlay">
    			<div class="text">West Sikkim</div>
  			</div>
			</div>
			</a>
			</div>
			</div>
			<div class="row">
			<div class="column">
			<div class="container">
			<a href="#four">
	  		<img src="sous.jpeg" class="image">
  			<div class="overlay">
    			<div class="text">South Sikkim</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#five">
	  		<img src="napa.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Nathu La Pass</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#six">
	  		<img src="cho.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Cholamu Lake</div>
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
	  		<img src="cui5.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Cuisine</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#culture">
			<div class="container1">
	  		<img src="cul5.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Culture</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#floraandfauna">
			<div class="container1">
	  		<img src="flo5.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Flora & Fauna</div>
  			</div>
			</div>
			</a>
			</div>
		</div></center>
		<br>
		<div class="name" id="one">Gangtok... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Extremely alluring, pleasantly boisterous and wreathed in clouds - Gangtok, the capital city of the Sikkim can also give you a spectacular view of Mt. Kanchenjunga, at a distant skyline. The pristine hill station nestled in mountains and clouds is also a base for a whole lot of trekkers to the Himalayan mountain ranges. The mesmerising prismatic beauty and the beautiful winding hill roads are even more breathtaking if seen from a bird’s eye view in a cable car.

The name meaning hill-top, Gangtok can be safely said to be one of the most beautiful hill stations in the country. With everything in just the right amount from a blend of cultural identities to urbanisation, Gangtok is a breathing and dynamic bit of paradise of the northeast. It has an amazing view of mount Kanchenjunga, the third highest mountain peak in the world. Also like everything around it, Gangtok is abundant in natural beauty and has various natural attractions such as the Tsomgo Lake, Ban Jhakri falls, Tashi viewpoint and more. Other places to visit include the Enchey Monastery, Ganesh Tok, Do Drul Chorten Rumtek Monastery, etc. Also, river Teesta is one of the best spots for white water rafting in North East India.</p>
	</div>
		<div class="name" id="two">North Sikkim... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">One of the most uninhabited areas of the country, yet extremely beautiful and charming, North Sikkim shares its boundary with China and Nepal.

Mangan is the headquarters of the North Sikkim district. It is one of the most mystically beautiful though unexplored areas due to the harsh conditions found here. Located at an altitude of 956 meters the town of Mangan serves as a base for trekking and hiking trips in the mountains and forests. North Sikkim is famous for the Gurudongmar Lake which is one of the highest lakes of India. It also has religious importance. Apart from lakes, there are some important monasteries in this area too.</p>
	</div>
		<div class="name" id="three">West Sikkim... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">West Sikkim, located at the foothills of Mount Kanchenjunga, offers one of the best views of Southeast face of Mt. Kangchenjunga.

West Sikkim offers one of the best views of the south-east face of Mt. Kangchenjunga. This place is also famous for few of the oldest and holiest Buddhist Monasteries of the world. With the beautiful amalgamation of nature and religious history, the calm and peaceful environment of Pelling makes it a famous tourist destination in Sikkim. West Sikkim owes its tranquillity and calmness to the beautiful and age-old monasteries like Sangachoeling and Pemayansgtse Monasteries. The Kchehepalri Lake, situated in the midst of a dense forest is considered holy and is mesmerising to devotees and tourists alike.</p>

</div>
		<div class="name" id="four">South Sikkim... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Surrounded by beautiful forests and majestic hills, South Sikkim is the perfect vacation spot for someone looking for a retreat in the midst of nature in its most natural form.

The town of Namchi is the headquarters of South Sikkim and it is situated at an altitude of 5500 feet at a distance of around 100 kms fromÊGangtok. South Sikkim, since years has been famous for its monasteries and stupas and devotees flock to this town for its religious significance. But recently, this district has risen to the position of an eminent tourist destination. Ralang Monastery, Siddheswara Dham, Statue of Guru Rinpoche are among the popular attractions here</p>

</div>
		<div class="name" id="five">Nathu La Pass... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Nathula, one of the highest drive roads in the world, is a mountain pass in the Himalayan peaks that co-joins Sikkim and China. Nathula Pass is situated on the Indo-Chinese border and is one of the biggest tourist attractions in India. Several tourists flock here every year for trekking in the valley and enjoying the scenic beauty. There are a number of waterfalls that gush along the way from Gangtok to Nathula. It also offers an opportunity to see beautiful snow peaks encircling the area.

Situated on the Indo-Tibetan border 14450 ft. above sea level, Nathu La is one of the most important Himalayan passes in the country. Nathu means 'listening ears' and La means 'pass', the mountain pass is situated a few kms away from Gangtok in Sikkim. Nathu La is one of the three open trading border posts between India and China and is famous for its picturesque beauty and beautiful environment. The temperature here remains low for most parts of the year and Nathu La becomes a hotspot for tourists during summer. The cold wind blowing across at great speed is a phenomenon worth experiencing.

A number of enchanting waterfalls are present on the way from Gangtok to Nathula. Tsomgo Lake is a popular tourist destination in the region and though it does not have human inhabitation, the place is a home for birds like a black eagle, blue whistling thrush, redstarts, folk tails, tit-babblers, etc. The region also supports Himalayan wildlife like Tibetan gazelle, snow leopard, yaks, Tibetan wolves, etc. Nathu La has a rich variety of flora apart from a spectacular wildlife range.</p>

</div>
		<div class="name" id="six">Cholamu Lake... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">14th highest lake in the world and the highest lake in India, the Cholamu Lake in North Sikkim is situated at an altitude of 18000 feet from the sea level. While coming down the slope around 300 feet from Donkiala pass ( 18300 feet ), you can get the first sight of this moderately sized, almost frozen lake. Cholamu Lake is only a few kms away from the Tibet border and is off limits for commonplace tourists. One needs special permits, from Army and Sikkim police/administration to visit the Cholamu Lake.

It is difficult to get permission to visit this lake and it is advisable not to visit this place in monsoons or winters. Also, if you are on a family trip avoid visiting Cholamu Lake and visit the Gurudongmar Lake instead. However, if weather permits, and you get a permit easily then opt for Cholamu Lake. Since mostly no travel agencies risk their vehicles and driver in this risky terrain you can trek up to the Cholamu Lake. The landscape of Chomalu Lake is simple in its elements, stern and solemn. The world does not have too many such place with more sublime associations than this calm sheet of water, 17,000 feet above the sea, with the shadows of mountains 22,000 to 24,000 feet high, resting on its surface.</p>

	</div>
		<br>
		<div class="name" id="food">Cuisine... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Sikkimese cuisine is the traditional cuisine of Sikkim, a state of India. Sikkimese are traditionally rice eaters. Nepalese cuisine is very popular in Sikkim because Sikkim is the only state of India with an ethnic Nepali majority.A few dishes are: Dal bhat - is a boiled rice and lentil soup with vegetable tarkari and chutney
Dhindo - Traditional Nepalese food of Sikkim
Gya thuk or Thukpa - is a noodle based soup with vegetables or meat.
Momo - stuffing minced meat, vegetables or cheese in flour dough and then making them into dumplings.
Phagshapa - is strip of pork fat stewed with radishes and dried chillies.
Sha Phaley - bread stuffed with seasoned beef and cabbage.</p>

	</div>
		<br>
		<div class="name" id="culture">Culture... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">The People of Sikkim consist of three ethnic groups, that is, Lepcha, Bhutia and Nepali. Communities of different hues intermingle freely in Sikkim to constitute a homogenous blend. Hindu Temples coexist with Buddhist Monasteries, Churches, Mosque and Gurudwara. The predominant Communities are Lepchas, Bhutias and Nepalese. These myriad Cultures has produced a quintessential Sikkimese Culture that encompasses all ways and walk of life, but has also managed to preserve their own identity. These can also be seen in the various places of Worship, Festivals and Cultural dances that are celebrated through the year.

</p>

	</div>
		<br>
		<div class="name" id="floraandfauna">Flora & Fauna... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Sikkim is situated in an ecological hotspot of the lower Himalayas, one of only three among the ecoregions of India. The forested regions of the state exhibit a diverse range of fauna and flora. Owing to its altitudinal gradation, the state has a wide variety of plants, from tropical species to temperate, alpine and tundra ones, and is perhaps one of the few regions to exhibit such a diversity within such a small area. Nearly 81 per cent of the area of Sikkim comes under the administration of its forest department.</p>

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
