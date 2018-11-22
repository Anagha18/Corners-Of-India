<?php include('C:\xampp\htdocs\WT\server2.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../sstyles.css">
		<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
		<title>Punjab</title>
		
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
		<div class="name" class="name">Punjab
		<p>--- The Smiling state of India ---<p>
		</div>
		<br>
		<div class="slideshow-container">
			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
  			<img src="ss11.jpg" style="width:100%">
 			</div>
			<div class="mySlides fade">
 			<div class="numbertext">2 / 3</div>
  			<img src="ss12.jpg" style="width:100%">
			</div>
			<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="ss13.jpg" style="width:100%">
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
		<p class="explain" style="font-size:24px;font-family:comic sans ms">Punjab literally means the land of five rivers. A network of five rivers - the Ravi, Beas, Sutlej, Chenab and Jhelum, irrigates this land and agriculture is the 'culture' of the state of Punjab. Known for its cuisine, culture and history Punjab is visited by tourists who want to enjoy culture, ancient civilization, spirituality and history.

The rich land of farms and forts, Punjab has been aptly nicknamed the smiling soul of India where you will always see smiles on the faces and joy in hearts of the inhabitants who take pride in their religion and culture. Though the state does not have any major adventure activity to offer, yet entertainment is guaranteed as trip to this smiling state is like visiting joy and merry. 

There are many Forts in the state telling the tale of their past and history while the temples offer a calm and peaceful atmosphere. Golden Temple, Wagah border, Jallianwala Bagh, Sheesh Mahal are some of the major tourists attractions while the list is endless as every street of Punjab is an attraction in itself, each color of Punjab has a different story and unique beauty enfolded in it</p>
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
	  		<img src="amr.jpg" class="image"/>
  			<div class="overlay">
    			<div class="text">Amritsar...</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#two">
	  		<img src="pat.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Patiala</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#three">
	  		<img src="lud.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Ludhiana</div>
  			</div>
			</div>
			</a>
			</div>
			</div>
			<div class="row">
			<div class="column">
			<div class="container">
			<a href="#four">
	  		<img src="bha.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Bhatinda</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#five">
	  		<img src="path.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Pathankot</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#six">
	  		<img src="wag.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Wagah Border</div>
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
	  		<img src="cui2.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Cuisine</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#culture">
			<div class="container1">
	  		<img src="cul2.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Culture</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#floraandfauna">
			<div class="container1">
	  		<img src="flo2.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Flora & Fauna</div>
  			</div>
			</div>
			</a>
			</div>
		</div></center>
		<br>
		<div class="name" id="one">Amritsar... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain" >Home of the glorious Golden Temple, the iconic city of Amritsar, portrays the heroic character of the Punjab. A day in this peaceful city starts with the spiritual prayers from Gurudwaras. The original name of first the ancient lake, then of the temple complex, and later the surrounding city, meaning "pool of ambrosial nectar."

Amritsar is the spiritual and cultural centre of the Sikh Religion. Baisakhi festival brings out Amritsar's resplendent face with its finest food, clothes and merry-making. This place is also famous for its Jallianwala Bagh massacre and its proximity to Wagah Border. The satiating food and generous dollops of legendary Punjabi hospitality further connive to cast a spell upon the visitor. From the Operation Blue Star in the Golden Temple to the tragedy of the Jallianwala Bagh massacre, Amritsar has seen the worst of situations and yet emerged like a phoenix through testing times. Amritsar today is a thriving city with active trade and tourism industries. One of the most agriculturally productive cities of India, Amritsar is well connected with most of the important cities of India</p>
	</div>
		<div class="name" id="two">Patiala </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">The fourth largest city in the state of Punjab, Patiala is nestled in the southeast of the golden land. Situated in the Malwa region, it is a princely state and also the capital of PEPSU (Punjab and East Punjab States Union). It has strong historic and cultural roots, surrounded by architectural marvels and cultural heritage, it is a preferred destination for exploring the core traditions of Punjab.

Patiala was once an erstwhile princely state founded by Baba Ala Singh from the Sidhu Dynasty. The Patiala Gharana of Hindustani classical music traces its roots to this state. Post independence, Patiala grew as a major educational centre in Punjab. Being a princely state, Patiala is home to palaces like the Moti Bagh Palace built in 1847, Quila Androon, Rang Mahal and Sheesh Mahal, all known for their architectural marvel. Patiala is also famous for its colourful clothes and dresses.</p>
	</div>
		<div class="name" id="three">Ludhiana... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Situated on the banks of river Sutlej, Ludhiana is Punjab’s largest town. Named after the Lodi dynasty, the tinsel city is one the largest manufacturing hub in India. Grand primal buildings to one side and sacred shrines to the other, the city retains the old world charm, keeps the spirituality intact but also does not fail to keep up with the changing times and traditions of the country. Apart from being an industrial town, Ludhiana draws pilgrims and tourists from worldwide owing to its Gurudwaras, forts and ancient ruins.

Situated on the banks of river Sutlej, Ludhiana, Punjab's largest city, is one of the biggest commercial hubs in India. Lodi chiefs, Yusaf Khan and Nihang Khan converted the village Mir Hota to Ludhiana. Ludhiana also hosts the famous Rural Olympics at Qila Raipur each year in the month of January-February. Ludhiana is famous for the ancient ruins of the Lodi dynasty, the war museum and its hosiery industries. You can also witness the Rural Olympics if you plan your trip according to the dates of the Games next year.</p>

</div>
		<div class="name" id="four">Bhatinda... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">One of the oldest cities of Punjab, Bhatinda is famous as a historical and religious centre dating back to 7000 BC.

However modern Bhatinda came into existence in 965 AD, established by Bala Rao Bhatti - a Bhati Rajput king. This is also the very city where Guru Gobind Singhji fought against the Mughals. Similar to the fascinating and significant history that the area has, it offers various attractions to tourists like Quila Mubarak, Bahia Fort, Chetak Park, Zoological Gardens, Dhobhi Bazaar as well as the Mazaar of Peer Haji Rattan. This town is a good choice to experience the right bits of history and get the feel of Punjab.</p>

</div>
		<div class="name" id="five">Pathankot... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">A gateway to Jammu & Kashmir and Himachal, Pathankot situated in the foothills of Kangra is best known for its serene green beauty and a rich historical past.

With the river Chakki passing by, Pathankot was the seat of the Loi and shawl weaving industry for many centuries. It also currently houses the base for the defence forces - Indian Army and the Indian Air Force. Pathankot also introduces you to some beautiful religious places like Mukteshwar Temple, Kathgarh temple, Nagni temple and Shahpurkandi Fort. A place that embodies your chaos and leaves you with tranquillity. Pathankot has its own railway station which is connected with most of the major railway stations of India and that makes it a very important place to the surrounding areas of Dalhousie, Dharamsala, Kangra, Manali and parts of Jammu and Kashmir.</p>

</div>
		<div class="name" id="six">Wagah Border... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Wagah Border is the border line running along the Grand Trunk Road between Amritsar in Punjab, India, and Punjab in Lahore, Pakistan. People from all across the country visit this place to witness the Beating Retreat Ceremony that is held every day before sunset. This ceremony includes the closing of the international gates and lowering the flags of both the countries. The flag ceremony is conducted by the Indian Border Security Force and Pakistan Rangers since 1959.

The Wagah Border is located at a distance of 22 km from Lahore and 28 km from Amritsar. Every evening, just before the sunset, the soldiers from the Indian and Pakistan military meet at this border post to engage in a 30-minute display of military showmanship. Officially, the purpose of the ceremony is to formally close the border for the night and lower the national flag. However, it is an entertainment ceremony and a patriotic display for the thousands of people who come here every day. During the build-up to the ceremony, the crowd witnesses national anthem chanting, rounds of applause and Bollywood-style dancing.

People from both sides visit the Wagah border. The crowd is more on the weekend with people sitting in the stands and applauding the soldiers performing the ceremony. Seating arrangements are enabled for the spectators so that they can watch the ceremony. On both sides of the border, there is a massive gate which is inscribed as "Swarn Jayanti Dwar". A panoramic landscape of Wagah can be witnessed by climbing on top of this gate. Visiting the Wagah Border and experiencing the Beating Retreat ceremony is utterly gripping, one which leaves you full of pride and patriotism!</p>

	</div>
		<br>
		<div class="name" id="food">Cuisine... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Punjab is a major producer of wheat, rice and dairy products. These products also form the staple diet of the Punjabi people. The state of Punjab has one of the highest capita usage of dairy products in India. Therefore, dairy products form an important component of Punjabi diet.Dairy products like
Clarified butter, sunflower oil, paneer and butter are used in Punjabi cooking.

Some north Punjab villages have also developed a local cheese variant known as dhaag, but the tradition of making dhaag is dying out.</p>

	</div>
		<br>
		<div class="name" id="culture">Culture... </div>
		<hr/>
<div class="pdheader">
		<p class="explain"> Unique, colourful and extravagant, these are the attributes of the heartland of India, Punjab. Popular and distinguished across the globe, the culture of Punjab is indeed overwhelming. It melts your heart and soothes your senses. The delicious Punjabi food appeases your taste buds like never before. Colourful fancy clothes and Bhangra attract you like nothing else. The beauty of Punjab is as magical as it becomes.

When you visit Punjab,  you can experience hospitable and heartwarming vibes. Punjabis are known to be very helpful, welcoming and proud people. They welcome everyone with open hearts (and of course a glass of Lassi and typical Punjabi food). They celebrate their festivals with great zeal and zest, with great food, music, dances and revelry.

</p>

	</div>
		<br>
		<div class="name" id="floraandfauna">Floara & Fauna... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">The plains in the state of Punjab do not have any thick forests, the only available patches are of grass, small bush and shrubs. In the southern east part of state of Punjab and the areas of Hoshiarpur and Multan, the delicious mango fruit is grown. The other varieties of fruits that are grown in abundance here are orange, apple, fig, quince, almond, pomegranate, peach, mulberry, apricot and plum. The region that has rich flora and fauna can be majorly seen in the Shivalik ranges in the state of Punjab</p>

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
