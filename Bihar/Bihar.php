<?php include('C:\xampp\htdocs\WT\server2.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../sstyles.css">
		<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
		<title>Bihar</title>
		
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
		<div class="name" class="name">Bihar
		<p>--- The Land of Buddha ---<p>
		</div>
		<br>
		<div class="slideshow-container">
			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
  			<img src="ss111.jpg" style="width:100%">
 			</div>
			<div class="mySlides fade">
 			<div class="numbertext">2 / 3</div>
  			<img src="s123.jpg" style="width:100%">
			</div>
			<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="ss113.jpg" style="width:100%">
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
		<p class="explain" style="font-size:24px;font-family:comic sans ms">A land where Buddha once lived, a land of monasteries, Bihar is visited by huge number of Buddhist followers as well as tourists of other faiths all round the year. Its association with Buddhism and Jainism makes it a must visit place for peace seekers, for people who like to feel the rural touch along with tribal culture and glorious past.

Derived from the Sanskrit word "Vihara" which means monastery, Bihar has one of the most glorious past in the context of Indian history. Bihar is located in the eastern parts of India, situated in the Gangetic plains and it shares its borders with Uttar Pradesh on its west, Jharkhand on its south, West Bengal on its east, and Nepal on its North. The spiritual importance of Bihar comes from the fact that it is the place where Buddha once lived, attained Nirvana and his footsteps can be traced in his teachings and monuments which stand still to guide people and show them the right path.

Bihar is a blessed land as it was here that under a Bodhi Tree that Prince Siddhartha meditated to attain enlightenment and came to be known as Buddha forever after that. Not just for Buddhists but Bihar is also a significant destination for Jains, and it is the amalgamation of religion, spirituality, history and education which makes the state one of its kind. While every city of Bihar has something to offer some of the major attraction cities are Bodh Gaya, Rajgir, Patna, Vaishali, Pawapuri and Nalanda.</p>
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
	  		<img src="bod.jpg" class="image"/>
  			<div class="overlay">
    			<div class="text">Bodh Gaya</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#two">
	  		<img src="patna.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Patna</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#three">
	  		<img src="nala.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Nalanda</div>
  			</div>
			</div>
			</a>
			</div>
			</div>
			<div class="row">
			<div class="column">
			<div class="container">
			<a href="#four">
	  		<img src="madh.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Madhubani</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#five">
	  		<img src="raj.webp" class="image">
  			<div class="overlay">
    			<div class="text">Rajgir</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#six">
	  		<img src="sit.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Sitamarhi</div>
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
	  		<img src="cui12.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Cuisine</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#culture">
			<div class="container1">
	  		<img src="cul12.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Culture</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#floraandfauna">
			<div class="container1">
	  		<img src="flo12.gif" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Flora & Fauna</div>
  			</div>
			</div>
			</a>
			</div>
		</div></center>
		<br>
		<div class="name" id="one">Bodh Gaya... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">One of the most important pilgrimage sites for Buddhists, Bodhgaya is a village in the state of Bihar. It was here under the Bodhi tree that Gautama Buddha attained enlightenment. The place is bustling with pilgrims all through the year who come to pay their homage in the monasteries, shrines and temples. It also attracts tourists from India and abroad owing to its magnificent Buddha statue, the Mahabodhi Temple and the Bodhi tree.

Bodh Gaya is the very place that houses the Mahabodhi tree, under which Gautam Buddha meditated and attained enlightenment. The Mahabodhi temple built near the Mahabodhi tree is highly revered and it is an enriching experience to visit the temple. One can still find the remnants and descendants of the original Mahabodhi Tree. Bodh Gaya is the single biggest pilgrimage for all sects of Buddhists throughout the world. It is now one of the UNESCO World Heritage Sites and a lot of foreign countries including Japan and China have helped the Indian government in building facilities for the Buddhist pilgrims. Bodh Gaya also has other various temples and monasteries dedicated to Buddhism. Located near the river Neranjana, Bodh Gaya was earlier known as Uruwela. It was also known as Sambodhi, Vajrasana or Mahabodhi until the 18th century CE. A trip to Bodh Gaya provides valuable insights into the culture of Indian religious philosophies and also showcases some architectural masterpieces that would leave one spellbound.</p>
	</div>
		<div class="name" id="two">Patna... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Prospering along the southern banks of river Ganges and set in the conglomerated backdrop of rich ancient heritage and a glorious historical past, Patna boasts of a dominating presence in history and enjoys the distinction of being one of the oldest cities in the world. Originally called as Pataliputra, Patna is currently a hot-bed for the culminating political fortunes. In addition to being one of the major and most popular tourist destinations in India- owing to its plethora of artefacts, monuments and grand architectural heritage which provide a peek in the bygone era, this capital city of Bihar also holds significant religious and spiritual importance. It is a gateway to pilgrimage sites of Hindus, Sikhs, Jains and Buddhists.

The capital city of Bihar, Patna is one of the oldest continuously inhabited places in the world. Originally known as Pataliputra, it played a major role in Indian culture and even today has great historical and religious significance. Having belonged to the blue family of cities with a royal heritage, it has an amazing past and various artefacts to provide a peek into the bygone era and also displays a brisk pace of modern development. Located on the banks of river Ganges, Patna is also an important pilgrimage centre and it is close to nearby religious centres of Hindus, Sikhs, Jains and the Buddhists like Bodh Gaya, Vaishali, Nalanda and Pawapuri. Patna is also the birthplace of the tenth Sikh Guru, Guru Gobind Singh and hence an important pilgrimage for Sikhs.
</p>
	</div>
		<div class="name" id="three">Nalanda... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">The most popular Mahavihara of the ancient times, a significant Buddhist seat of academic excellence and a modest pilgrim center, all wrapped in a wisp of spirituality, Nalanda continues to be an equally enriching location in the present. It offers vibrant substance of spirituality, history, culture, architecture, and tourism.

This city houses one of the world's oldest and finest residential universities which itself was an architectural masterpiece. Although in ruins, the entire complex presents a pretty picture and is flocked by tourists day in and day out. It has “viharas” or monasteries to the east and “chaiyas” or temples to the west. In addition to this, the complex houses a charming little museum, which has a collection of several of original Buddhist stupas, Hindu and Buddhist bronzes, coins, terracotta jars, a sample of burnt rice etc. The district is believed to be a cradle of religions. Apart from Buddhism, it is an important center for Jainism, Hinduism, and Sufism as well. Considering the rich heritage and the historical importance, it is a hot tourist destination.</p>

</div>
		<div class="name" id="four">Madhubani... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">An ancient city, Madhubani in Bihar is known for the richness in art and culture that the district strives for. Mentioned in the Ramayana, the city is known for the world popular Madhubani paintings whose origin lie here.

Madhubani emerged from the Darbhanga district of Bihar in 1972 during the reshuffling of territorial boundaries. This small district is slowly growing as a popular tourist destination among art enthusiasts coming here for Madhubani paintings. With Nepal on the north, Darbhanga to the south, Sitamarhi and Supaul on either side, Madhubani is also an important commercial town in the Madhubani district. The town has multiple temples which are the main attraction points of the town for the locals. However, the town is not very tourist-friendly, and there isn't much to do if you are thinking of a sightseeing tour.</p>

</div>
		<div class="name" id="five">Rajgir... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Rajgir is town where the air that surrounds its beautiful sceneries carries hints of spirituality and vibrant hues of history with links with both Buddhism and Jainism.

Set in a green valley and surrounded by rocky hills, Rajgir is a spiritual town with natural serenity amongst the dense forests, mysterious caves and springs. Rajgir houses many religious destinations which are majorly dedicated to either Buddhism or Jainism. Both lord Buddha and Lord Mahavir have said to spent time here giving it huge spiritual and religious importance. One can visit various ruins, temples and sites here and also spend some time indulging in its refreshing calmness.</p>

</div>
		<div class="name" id="six">Sitamarhi... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Sitamarhi, a town and the district headquarters of the Sitamarhi District in Bihar is the birthplace of the wife of Lord Ram, Sita. Bordered by Nepal in the North, Muzaffarpur in the south, Champaran and Sheohar in the west and Darbhanga and Madhubani in the east, Sitamarhi is a town of great historical importance and has a large number of modern tourist attractions. Rivers like Baghmati, Aghwara, Lakhandei and Manusmara flow through the Sitamarhi District and the northern part of Sitamarhi District is located in the foothills of the Himalaya. The place has a moderate climate and is rich in alluvial soil. Sitamarhi is filled with spots of religious, historic and modern tourist attractions.

According to mythology, Mata Sita was born in an earthen pot under the land of the Sitamarhi district. Janaki Temple at Sitamarhi, Janaki Temple at Punaura, Deokuli, Haleshwar Sthan, Baghi Math, Goraul Sharif, Shukeshwar Sthan, Bodhayan-Sar and Sabhagachhi Sasaula are the places you must travel to on your visit to Sitamarhi. Sitamarhi has a rich culture of folk arts, dance and music. It is well known for its lac bangles and the world-renowned Madhubani paintings are painted in many places of this district.</p>

	</div>
		<br>
		<div class="name" id="food">Cuisine... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">
Dairy products are consumed frequently throughout the year, with common foods including yogurt known as dahi and also buttermilk known as mattha, ghee, lassi and butter. The cuisine of Bihar is similar to a great extent to North Indian cuisine but has an influence from other East Indian Cuisine (for example like Bengali cuisine). It is highly seasonal, with watery foods such as watermelon and Sherbet made of pulp of the wood-apple fruit being consumed mainly in the summer months and dry foods, preparations made of sesame seeds, poppy seeds in the winter months.

Some dishes for which Bihar is famous for include Bihari Kebab, Bihari Boti, Bihari Chicken Masala, Sattu Paratha, which are parathas stuffed with fried chickpea flour, chokha (spicy mashed potatoes), fish curry and', Postaa-dana kaa halwaa.

</p>

	</div>
		<br>
		<div class="name" id="culture">Culture... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Bihar is as old as civilisation itself. Bihar is one of the states of India with culturaly mixed population. In addition to different religious (hindu, muslim, jain, buddhists, sikhs, christians) groups, there are variations on the basis of race (aryans, dravidians, mongolians), geographical (bengalis, marwadis, gujratis, Punjabis . . .) and lingusitic (bengali, urdu, nepali, marwadi, gujarati, nepali in addition to bhojpuri, maithili, magahi and vajjika) basis. Since ancient era it has been home for extraordinary intellectual work. Associated with 'samudra manthan' of vedic era, Sita of Rama and karna of Mahabharata, Bihar has a rich cultural background to be proud of. The present society reflects its cultural prosperity adequately.

</p>

	</div>
		<br>
		<div class="name" id="floraandfauna">Flora & Fauna... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Bihar has 21 animal sanctuaries, 3 national parks which is astonishing in itself. Casing the entire region of 800 km squares, the Valmiki National Park is situated in the West-Champaran region of Bihar neighboring Nepal.

 

The Kabar Lake is positioned in the Begusarai, Bihar. It is the biggest Fresh Water Oxbow lake in Asia. Vikramshila Gangetic Dolphin Sanctuary is positioned in Bhagalpur, Bihar. Major wildlife in Bihar comprises of tigers, qild boar, nilgai, sambar, kakkar and cheetal. The fauna includes mangroves, sheesham, scrubs, khair and bent.</p>

	</div>
		<br>
		<script type="text/javascript" src="script.js"></script>

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
