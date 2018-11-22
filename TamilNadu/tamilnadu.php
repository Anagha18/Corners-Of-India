<?php include('C:\xampp\htdocs\WT\server2.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../sstyles.css">
		<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
		<title>Tamil Nadu</title>
		
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
		<div class="name" class="name">Tamil Nadu
		<p>--- Enchanting Tamil Nadu ---<p>
		</div>
		<br>
		<div class="slideshow-container">
			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
  			<img src="ss61.jpg" style="width:100%">
 			</div>
			<div class="mySlides fade">
 			<div class="numbertext">2 / 3</div>
  			<img src="ss62.jpg" style="width:100%">
			</div>
			<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="ss63.jpg" style="width:100%">
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
		<p class="explain" style="font-size:24px;font-family:comic sans ms">A land of cultural and religious heritage, Tamil Nadu offers every chance to the tourist or pilgrims to be enchanted with the vast plethora of history and beauty that it has. It is a blend of modern and ancient, that makes Tamil Nadu a beautiful destination to explore our past cultural heritage with all the amenities of the present.

Lying along the Bay of Bengal, Tamil Nadu with its glorious history spanning thousands of years and today is paving the way to becoming one of the promising states of the country. This state has seen the rise and fall of many Dynasties of Cholas, Cheras, Pallavas, and each dynasty has enriched the place with its own customs and traditions. Tamil Nadu sees a lot of tourists coming to see the famous Meenakshi Temple, tip of India - Kanyakumari or the beautiful hill station of Ooty. There is a great fascination to explore the ruins of the forts and palaces of the then great Dynasties. The intricately carved structure of Mahabalipuram offers an insight into the architectural splendour of the Indian Civilization.</p>
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
	  		<img src="oot.jpg" class="image"/>
  			<div class="overlay">
    			<div class="text">Ooty</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#two">
	  		<img src="kod.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Kodaikanal</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#three">
	  		<img src="mah.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Mahabalipuram</div>
  			</div>
			</div>
			</a>
			</div>
			</div>
			<div class="row">
			<div class="column">
			<div class="container">
			<a href="#four">
	  		<img src="mad.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Madurai</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#five">
	  		<img src="yer.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Yercaud</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#six">
	  		<img src="tha.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Thanjavur</div>
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
	  		<img src="cui7.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Cuisine</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#culture">
			<div class="container1">
	  		<img src="cul7.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Culture</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#floraandfauna">
			<div class="container1">
	  		<img src="flo7.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Flora & Fauna</div>
  			</div>
			</div>
			</a>
			</div>
		</div></center>
		<br>
		<div class="name" id="one">Ooty... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">The Blue Mountains have always been shrouded in mysticism, and Ooty is no exception to that. For every mountain lover, the very idea of travelling to the city known as the Queen of the Hills holds an allure like no other. Once regarded as the summer headquarters of the East India Company (and for a very good reason), Ooty, also known as Udagamandalam, is a hill station in Tamil Nadu which serves as a very popular tourist destination for anyone looking for a picturesque place to relax and unwind. Ooty is nestled amidst the Nilgiri hills at an altitude of 2,240 meters above sea level and enjoys a favourable climate all year round. 

Ooty oozes simplicity, devoid of any boundaries, so anyone who visits the place can feel at one with the local culture. The journey to Ooty itself is dotted with magnificent sights of the awe-inspiring Nilgiri hills, tea gardens, and serene waterfalls. The cool, peaceful landscape of Ooty is almost movie-like – winding country lanes that you can spend hours simply walking on, and the charm of old-world colonial architecture infuses fresh air into the souls of travellers. For anyone looking for a respite from the mind-boggling humidity and the scorching Indian sun, Ooty is the place to be.</p>
	</div>
		<div class="name" id="two">Kodaikanal... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Located in the state of Tamil Nadu, Kodaikanal is one of the most famous honeymoon destinations in India. When you think of Kodaikanal, you think of a wonderful climate, cliffs covered in mist, cloud-capped mountains and beautiful lakes and valleys, and once you visit this hill station, you will find that every bit of what you have imagined it to be is true. Nestled amidst the rolling slopes of the Palani Hills in Tamil Nadu, Kodaikanal stands at an altitude of 7200 feet above sea level and has a cool, pleasant climate all year round. Kodaikanal means the gift of the forests.

Famously known as the Princess of Hill Stations, Kodaikanal offers the perfect mix of culture and nature to tourists, and its perfectly manicured slopes, scenic waterfalls, rolling hills and clear lakes all come together to create the perfect setting for an ideal mountain getaway. Kodaikanal is a place you can go to take a break from the rigours of daily city life, and this hill station lets you sit back and connect with nature as you head out on biking or trekking trails or take a stroll through the huge forests surrounding the town.</p>
	</div>
		<div class="name" id="three">Mahabalipuram... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Famous for its intricately carved temples and rock-cut caves, Mamallapuram or Mahabalipuram as it is famously known, is a historically important and well-loved tourist location situated on the Coromandel Coast along the Bay of Bengal, in the state of Tamil Nadu.


Once the abode of the famous demon king Mahabali, Mahabalipuram was later renamed Mamallapuram. The serenity, the alluring atmosphere and the impressive setting with many beautiful white sandy beaches dotted with casuarina trees are all reasons as to why one would want to visit this wonderful town. 

Some famous tourist spots include the UNESCO world heritage site Group of Monuments like the Shore Temple and the Five Rathas, the Crocodile Bank which is home to some exquisite species of crocodiles and alligators, and the beach resorts in Kovalam and Sadras.</p>

</div>
		<div class="name" id="four">Madurai... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Madurai is one of the oldest cities of India located in Tamil Nadu. It was ruled by Pandya kings for the longest time in its history and is constructed in the form of a lotus.

Madurai is considered to be the cultural capital of Tamil Nadu. The place has a great cultural heritage and strong mythological history to be passed on to the coming generations. The reason most people visit the city is the Meenakshi Temple, dedicated to the goddess Meenakshi with a sanctum for her consort, Sundareshwarar. Thiruparankundram is one of the important old temples dedicated to Lord Muruga(Karthikeya) and is located on a hillock approximately 8 km from the city. Gandhi Museum houses Gandhi's bloodstained dhoti and some other artefacts. The city is known for its lively and bustling markets. Shopping here is fun and affordable. Another thing Madurai is popular for its amazing street food. Heritage walks are conducted throughout the day. Those who wish to know more about the freedom struggle, though, will be interested in the extensive text housed here. Tamil speakers and long-term visitors may be interested in the classes and workshops offered in subjects as diverse as t'ai chi and local herbs.</p>

</div>
		<div class="name" id="five">Yercaud... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Nestled in the Eastern Ghats, Yercaud is a hill station called poor man's Ooty with abundant forests, vast coffee plantations and some unique species of flora and fauna resulting in gorgeous views. Yercaud is a hill station in Salem District, in Tamil Nadu, India. It is located in the Shevaroys range of hills in the Eastern Ghats. It is situated at an altitude of 1515 metres (4970 ft) above sea level, and the highest point in Yercaud is the Servarayan temple, at 5,326 feet (1,623 m). The hill station is named owing to the abundance of forest near the lake, the name signifying Lake Forest.

The total extent of Yercaud Taluk is 382.67 km<sup>2</sup>, including reserve forest. The entire county is administered as a township. Yercaud also has a village council.</p>

</div>
		<div class="name" id="six">Thanjavur... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Also known as Tanjore or the city of temples, Thanjavur has a lot of cultural value and is known for its famous Tanjore paintings, antiques and handicrafts, textiles and saris , its Carnatic music and musical instruments and of course the temples.

Thanjavur enjoys a rich historical heritage and holds a very important position in the moulding of ancient as well modern south Indian civilization. Being of religious importance, this place is a must for all pilgrims. There are many religious places in and around the district. Siva Ganga Garden, Art Gallery, Palace & Saraswathi Mahal Library, Sangeetha Mahal are the main tourist attractions. This is a place where you can constantly witness the magnificent and dynamic cultures of the past and present breathing life into and living in the everyday, giving the area a unique and glorious identity.</p>

	</div>
		<br>
		<div class="name" id="food">Cuisine... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Tamil cuisine is a cuisine native to the Tamil people who are native to the Indian state of Tamil Nadu and northern Sri Lanka. It is also the cuisine of the Tamil-speaking population of Karnataka, Kerala and Andhra Pradesh in India and of the Tamil communities of Singapore and Malaysia.

Tamil Nadu is famous for its deep belief that serving food to others is a service to humanity, as it is common in many regions of India. The region has a rich cuisine involving both traditional vegetarian and non-vegetarian dishes. Rice, legumes and lentils are used extensively and flavor is achieved by the blending of various spices. Vegetables and dairy products are essential accompaniments and tamarind is used as the favored souring agent.

On special occasions, traditional Tamil dishes are prepared in an elaborate and leisurely way and served in traditional style on a banana leaf. The traditional way of eating a meal involves being seated on the floor, having the food served on a banana leaf, and using clean fingers of the right hand to transfer the food to the mouth. After the meal, the fingers are washed, and the banana leaf becomes food for cows. Typically breakfast includes idli or dosa and rice accompanied by sambar and rasam, followed by curd for lunch</p>

	</div>
		<br>
		<div class="name" id="culture">Culture... </div>
		<hr/>
<div class="pdheader">
		<p class="explain"> Out of 74 million Tamil people in the world, around 62 million live in Tamil Nadu. Rest of the Tamilians are scattered in different parts of India and the world, mostly in the northeast of Sri Lanka. People who live in the state understand the ethnicity of their culture and how it marks their identity in the world. They are very adherent towards their rituals and traditions like following the caste system, religion and community traits, etc. 

Tamil is the official language of the state. It is a derivative of Brahmi script, and the letters represent sounds, much like the Mandarin language. Not only most of the people in Tamil Nadu speak Tamil, but it is also spoken by many in Sri Lanka, Mauritius, Singapore, and Malaysia

</p>

	</div>
		<br>
		<div class="name" id="floraandfauna">Floara & Fauna... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Tamil Nadu is rich in flora and fauna and some of its major wildlife sanctuaries like Mudumalai and Annamalai (or Indira Gandhi Wildlife Sanctuary), are situated in the Western Ghats. 

These hills are ideal havens for elephants, tigers, bison, monkeys and deer. Of the 3,000 and more plant species found in Tamil Nadu, a majority is found in the mixed deciduous forests of this region. 

One of the most noteworthy flowers is the Kurinji of Kodaikanal, which blooms once in 12 years. Cinchona, from which the anti-malarial drug quinine is extracted, and the medicinal eucalyptus grow, abundantly in the Nilgiri hills. Forests of other medicinal herbs are found in Palani hills and Courtallam. 

Palmyra trees grow profusely in Tirunelveli and its products are used as raw materials for several cottage industries. Rubber is the main plantation crop in Kanyakumari and sandalwood grows in the Javadhu hills of Vellore district.</p>

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
