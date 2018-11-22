<?php include('C:\xampp\htdocs\WT\server2.php'); ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../sstyles.css">
		<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
		<title>Uttarakhand</title>
		
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
		<div class="name" class="name">Uttarakhand
		<p>--- The Land of Gods ---<p>
		</div>
		<br>
		<div class="slideshow-container">
			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
  			<img src="ss81.webp" style="width:100%">
 			</div>
			<div class="mySlides fade">
 			<div class="numbertext">2 / 3</div>
  			<img src="ss82.jpg" style="width:100%">
			</div>
			<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="ss83.jpg" style="width:100%">
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
		<p class="explain" style="font-size:24px;font-family:comic sans ms">Famously known as Devbhumi, or the Land of the Gods, Uttarakhand is a land of untouched natural beauty and sublime spirituality. Carved out from Uttar Pradesh, the state, formerly known as Uttaranchal, is a place that not only boasts of a scintillating view of the Himalayas but also exhibits a cultural ethos which speaks of a simplistic and harmonic coexistence with nature. With oaks, birches, silver firs and rhododendrons adorning the steep mountain slopes, Uttarakhand offers you a glimpse into an untainted, idyllic world, straight out of the pages of some ancient pastoral literature.

Uttarakhand is a very popular pilgrimage site, seeing as it is the originating spot of the Ganga and the Yamuna, two of the most sacred rivers for Hindus. Uttarakhand is home to the Char Dhams, which are four of the most pious sites of pilgrimage revered by the Hindus – Gangotri, Yamunotri, Kedarnath, and Badrinath. Thousands of tourists visit Uttarakhand annually to pay homage to the Char Dhams.

Ancient temples, forest reserves, national parks, hill stations, and mountain peaks welcome you in the calm, cooling air of Uttarakhand and the joy doubly increases as we reveal that you can visit some of the famous hill stations of India in Uttarakhand. Mussoorie, Nainital, Dhanaulti, Lansdowne, Sattal, Almora, Kausani, Bhimtal, and Ranikhet are ever embracing hill stations in the state best for all kinds of trips be it a family holiday or a honeymoon.</p>
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
	  		<img src="ris.jpg" class="image"/>
  			<div class="overlay">
    			<div class="text">Rishikesh</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#two">
	  		<img src="hari.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Haridwar</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#three">
	  		<img src="aul.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Auli</div>
  			</div>
			</div>
			</a>
			</div>
			</div>
			<div class="row">
			<div class="column">
			<div class="container">
			<a href="#four">
	  		<img src="ked.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Kedarnath</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#five">
	  		<img src="nai.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Nainital</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#six">
	  		<img src="badr.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Badrinath</div>
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
	  		<img src="cui9.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Cuisine</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#culture">
			<div class="container1">
	  		<img src="cul9.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Culture</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#floraandfauna">
			<div class="container1">
	  		<img src="flo9.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Flora & Fauna</div>
  			</div>
			</div>
			</a>
			</div>
		</div></center>
		<br>
		<div class="name" id="one">Rishikesh... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Situated along the convergence of Ganga and Chandrabhaga, Rishikesh on the foothills of Himalayas is the hub of many ancient temples, popular cafes, yoga ashrams and adventure sports.
Rishikesh is the most beautiful blend of spiritual and adrenaline pumping experiences. With Whitewater Rafting industry growing and a number of camping and cafe spots springing up, Rishikesh has grown immensely as a favourite, catering to people with different needs.

Rishikesh, over the years, has become extremely popular as the top spiritual destination in the world, especially after the Beatles association with Maharishi Mahesh Yogi here in the late '60s. As it lies on the holy banks of river Ganga, this place has been a hub of Sadhus (saints) and there are numerous ashrams teaching spirituality, yoga, meditation and Ayurveda. With the tourists coming in, there has been a surge in the number of cafes and restaurants in the town and there a lot of cafes serving English and American food and beverages. However, in the last few years, Rishikesh has also been developed as the hub of Adventure Sports in India as there is a multitude of options including White Water Rafting, Bungee Jumping, Flying Fox, Mountain Biking, etc. here. It also serves as the gateway to many Himalayan treks and is used as a popular camping site. Rishikesh is a must visit for everyone visiting India to truly experience something new.</p>
	</div>
		<div class="name" id="two">Haridwar... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">No spiritual journey can ever be considered complete without a visit to Haridwar, one of the holiest pilgrimage sites for Hindus. Literally meaning 'the abode of Lord Vishnu', Haridwar, located in the Garhwal region of Uttarakhand, is a land of legends and myths. Considered as one of the seven holiest cities in India, Haridwar sees millions of people flock to it every year to pay their respects to the Lord, or to wash away their sins. However, with the passage of time, Haridwar has evolved from being a mere religious city to a multifaceted cultural and spiritual centre, and only after exploring Haridwar will you realize that there is a lot more to the city than just visiting temples and taking a dip in the holy Har ki Pauri. Haridwar has a perennial mystical air around i, and is the perfect holiday option for anyone seeking spiritual connection as well as a chance to indulge in and get closer to nature.

Har Ki Pauri is, of course, the most visited place in Haridwar. Har ki Pauri is essentially a ghat built by King Vikramaditya in the memory of his brother, and the location is thronged by devotees all year round. Every evening, as the sun goes down, the Ganga aarti is performed at the ghat, turning the place into a glittering, sensory spectacle. With flaming torches and ringing bells wherever you look, the evening aarti at Har ki Pauri is a mesmerising event that should in no way be missed out on. Other ghats in Haridwar that you can visit are the Gau ghat and the Vishnu Ghat.</p>
	</div>
		<div class="name" id="three">Auli... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Dotted with the apple orchards, old oaks and pine trees there is no dearth of natural beauty in Auli. Apart from skiing you can also go for numerous treks in the hills of Garhwal Himalayas and enjoy the spellbinding views of the snow-draped mountains. Auli is a popular hill resort in the Himalayan range dating back to 8th Century AD.

Auli is a popular skiing destination in India because of its glittering slopes and clean environment. Dotted with apple orchards, oaks and deodars, Auli is a popular hill town with numerous ski resorts situated amidst the Himalayan range. Located at 2800 meters above sea levels, it is home to mountain ranges of Nanda Devi, Mana Parvat and Kamat Kamet. Many religious destinations are also scattered around Auli. It is believed that Shankracharya had blessed Auli with his visit.</p>

</div>
		<div class="name" id="four">Kedarnath... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Atop 3584 mts, this is one of the Char Dhams and one of the busiest pilgrim centres in the Garhwal Himalayas. It is believed that in order to evade the Pandavas, Lord Shiva hid himself in the form of a bull at Kedarnath, and when found by the Pandavas, he went further into the earth leaving the hump on the surface.

Kedarnath is popular for its ancient Shiva Temple, shrines, Himalayan ranges and undulating landscapes. Marked by the Kedarnath temple, near Chorabari Glacier, the area is flanked by the Kedarnath peaks and countless more ranges with peaks silver with snow. The most remote of the Char Dhams, and maybe hence, one of the most majestically beautiful, Kedarnath remains closed for the six months of winters due to unbearable temperatures and heavy snowfall</p>

</div>
		<div class="name" id="five">Nainital... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">One of the most beautiful tourist destinations in Uttarakhand, Nainital, which is nestled amidst the Kumaon Hills, is a quaint hill station built around a uniquely shaped lake known as the 'Naini Lake' (thus contributing to its name Nainital). Also famously known as 'City of Lakes,' Nainital abounds in natural beauty, with its snow-capped hills and tranquil lakes lending it a nostalgic charm of its own. Situated at an altitude of 1938 km above sea level, Nainital has a pleasant climate all year round, and can rightfully be called a picturesque paradise for all travel lovers.

Whether you're going for the weather, the lakes, the adventure, the food, or even the shopping, Nainital has something for every tourist.  The Naini Lake flows through the heart of the city and is a popular spot for various activities such as paddle boating and row boating. Other lakes that you can visit are the Sariyatal Lake, Bhimtal Lake, and Khurpatal Lake. Even if you don’t want to go on a boat ride, you can simply take a walk along the promenade on the banks, and you will still be able to enjoy the ethereal beauty of the lakes. Owing to its gorgeous landscape, Nainital has quite a few hilltops that offer extraordinary vistas of the city and its surrounding regions to visitors. These include Naina Peak, Tiffin Top, and Snow View Point, all of which are very popular tourist spots</p>

</div>
		<div class="name" id="six">Badrinath... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Badrinath is a pilgrim centre (among one of the Char Dham) set in the backdrop of Neelkanth Mountain Peak dedicated to Lord Vishnu.

Placed between Nar and Narayan mountain ranges, Badrinath has been mentioned in various Vedas as well. It also derives huge importance due to mention in Hindu mythology especially related to Lord Shiva and given the array of legends, tales and beliefs that surround it providing it the nature of a holy destination. It is a popular pilgrim destination with devotion and spirituality sensed in almost all aspects of the town. However Badrinath will also give you some of the most splendid and magnificent sceneries, and an absolutely awe inspiring natural beauty. Badrinath can also be your domain for a number of exciting activities</p>

	</div>
		<br>
		<div class="name" id="food">Cuisine... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">The cuisine of Uttarakhand is similar to its people, simple yet incredible. The two distinct regions, Kumaon and Garhwal offer palates of flavoursome dishes that are high on nutrition as well. The cuisine of the state is meticulously chosen to not only offer delight the taste buds but also to make most of the resources available. Where great care is taken to include all the necessary elements to keep one well-prepared for the tough climate and trails, special attention is paid to maintaining the look and taste of the dishes as well. A balanced flavour is the key to authentic Uttarakhand cuisine that is mostly cooked over slow fire and consists of lentils. Although Kumaon and Garhwal are divided in different regions; they unite as one in its methods of cooking and the choice of ingredients. There are also several dishes that two regions are common but have different names. The food habit in the state also witness variation with the changing season; where in winter in Mathir and Til Laddus or Madua Rotis are preferred, in summers, Dubkas with Chholia Rotis are relished.

</p>

	</div>
		<br>
		<div class="name" id="culture">Culture... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Uttarakhand has a cultured and colourful society. Uttarakhand has every thing that any tourist could want. The most significant donor for giving mass appeal to tourism in Uttarakhand is the state’s rich culture, an excellent intermingling of exoticism as well as the way of life. Frequently thought-out to be the belt of Hindu culture, the Uttarakhand’s culture is beyond doubt one of the most vital tourist attractions of Uttarakhand.


 
The Uttarakhandi culture are its history, people, religion and dances. All of them are a beautiful amalgamation of different influences from all the races and dynasties it has been ruled by. Its history is chequered in comparison to the arts culture but still interesting enough to hold a person’s consideration. Its dances are connected to life and human existence and exhibit myriad human emotions. Any trip to this tranquil will be incomplete unless you explore the wonderful culture and lifestyle of the local people.The religious, social and cultural urges of the people of Uttarakhand find an expression in various fairs and festivals, which are in turn closely linked to the social and economic activities of the region.

</p>

	</div>
		<br>
		<div class="name" id="floraandfauna">Flora & Fauna... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Uttarakhand is home to may species of deer – the magnificent Sambar with heavy antlers, which is called Jarau in the hills, the beautiful Chital, the rare Barasinga or swamp deer, the Kasturi or musk deer, so named because the buck has a gland beneath the skin of the abdomen that secretes musk, the Kakar, rib-faced or barking deer which is a very pretty little animal, bright chestnut in colour with forked  horns, and many others.

Other interesting animals are  the Goral of the antelope family  also known as the Himalayan Chamois, the Bharal or wild blue sheep, the Ibex, a handsome animal and usually greyish in colour but now rarely seen in the Uttarakhand mountains, the  brown and black bears, the agile Himalayan Thar, the Himalayan Fox, a fine beast with a thick coat of fur, indigenous sheep etc.  With these, there also are the killers, the Himalayan leopard and tiger who are being squeezed into the diminishing forests.  The foothills near Haridwar, Kotdwara, Ramnagar, Dhikala have large herds of elephants , some of them easy to observe in the Corbet national Park and Rajaji Park. And if one is lucky, the tigers of Corbet fame may be sighted as a matter of chance. The flowers, shrubs and trees are wide in variety, colourful and fragrant in this land of Uttarakhand – blue poppies, pink and purple primulas, asters, potentilas of many colour, varied alpine flowers, the heavily perfumed brahma kamal, rhododendrons with large ruby-red flowers, fragrant white syringa, cotoneaster with its red berries, sweet jasmine, lillies of different kinds, acacia, cypresses, pines, oaks, deodars, firs, spruces etc. 

Medicinal and aromatic plants – Junipers, Digitalis Purpurea (fox glove), its leaves are used in curing heart disease, Gentiana (gentian), the flowers are purple, intense blue, white and yellow (root of which is used in medicine to stimulate digestion); Pyrethrum (feverfew) has aromatic yellow leaves which are used in insecticides,  Seasamum Indicum (sesame) has small oily seeds which yield  a tasteless oil  used in cooking and some cosmetics, Mentha Viridis (spearmint) the oil obtained by distillation from the fresh herb in flower is good in cases of cholic, nausea etc. ( this para is here with the help of some botanist friend). </p>

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
