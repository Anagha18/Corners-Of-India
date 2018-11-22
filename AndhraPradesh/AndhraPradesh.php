<?php include('C:\xampp\htdocs\WT\server2.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../sstyles.css">
		<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
		<title>Andhra Pradesh</title>
		
	</head>
	<br>
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
		<div class="name" class="name">Andhra Pradesh
		<p>--- The Land of Opportunity ---<p>
		</div>
		<br>
		<div class="slideshow-container">
			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
  			<img src="ss121.jpg" style="width:100%">
 			</div>
			<div class="mySlides fade">
 			<div class="numbertext">2 / 3</div>
  			<img src="ss122.jpg" style="width:100%">
			</div>
			<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="ss123.jpg" style="width:100%">
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
		<p class="explain" style="font-size:24px;font-family:comic sans ms">Blessed with two beautiful rivers, Krishna and Godavari, Andhra Pradesh also has the Bay of Bengal to its west, and it boasts of a coastline of 972km, the longest in the country. This state is widely advertised as the Kohinoor of India by the tourism department. The state is most visited for its world famous Tirupati temple. Srisailam Mallikarjuneswar temple is another famous Shiva shrine and is one of the 12 Jyotirlinga temples in India.

In spite of the recent division of the state of Andhra Pradesh, which resulted in the formation Seemandhra which is what was left of Andhra Pradesh after Telangana region was carved out. Seemandhra seems to have got the better share regarding tourism. Places like Belum caves, NagarjunaKonda, Borra caves and Pulicat Lake have all come under Seemandhra. Apart from this, it retains the better part of the culture and cuisine of Andhra Pradesh and already established tourism development as opposed to Telangana which has to start from scratch. The state is home to various centres that have quite a lot of Buddhist influence like Dhulikatta, Bavikonda, Thotlakonda, Amravati, Nagarjuna Konda, etc. </p>
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
	  		<img src="tir.jpg" class="image"/>
  			<div class="overlay">
    			<div class="text">Tirupati</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#two">
	  		<img src="viz.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Vishakapatnam</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#three">
	  		<img src="vij.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Vijayawada</div>
  			</div>
			</div>
			</a>
			</div>
			</div>
			<div class="row">
			<div class="column">
			<div class="container">
			<a href="#four">
	  		<img src="sir.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Sirsailam</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#five">
	  		<img src="gun.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Guntur</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#six">
	  		<img src="kur.gif" class="image">
  			<div class="overlay">
    			<div class="text">Kurnool</div>
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
	  		<img src="cui13.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Cuisine</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#culture">
			<div class="container1">
	  		<img src="cul13.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Culture</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#floraandfauna">
			<div class="container1">
	  		<img src="flo13.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Flora & Fauna</div>
  			</div>
			</div>
			</a>
			</div>
		</div></center>
		<br>
		<div class="name" id="one">Tirupati... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">The very name Tirupati is enough to evoke strong spiritual feelings, and while the name ‘God’s Abode’ indeed does justice to the place, Tirupati has quite a few other tourist attractions as well that make it a city worth visiting. Situated in the Chittoor district of Andhra Pradesh, Tirupati is one of the most popular pilgrimage centres in the country. Home to many heritage sites, and a plethora of ancient temples and monuments, Tirupati is one of the oldest cities of India, and finds mention in plenty of ancient texts.

The primary attraction of Tirupati is, of course, the Sri Venkateshwara Temple, which is the highlight of the town. The non-stop chanting of ‘Om Namo Venkatesaya’, the mad pilgrim rush, the heavy security surrounding the entire area, and the awe-inspiring 8-feet tall idol of Lord Venkateshwara – everything about the Sri Venkateshwara Temple is majestic and overwhelming. Spread over an area of 26 kilometres, the temple is also commonly referred to as the Temple of Seven Hills, as it is located in Tirumala, a little hill town home to the Tirumala Hills, which comprise of seven peaks. The Sri Venkateshwara Temple is situated on the seventh hill and is a religious landmark where thousands of people come to pay their respects every day. This temple is the wealthiest temple in the entire Indian subcontinent, owing mainly due to the fact that it receives a staggering number of donations each day. Standing under a gilded dome and looking up at the gigantic idol of Lord Venkateshwara adorned with flowers, gold and diamonds is a marvellous spiritual experience in itself – it is much like chancing upon serenity amidst a lot of chaos, and it is a feeling you won’t forget anytime soon.</p>
	</div>
		<div class="name" id="two">Vishakapatnam(Vizag)... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Visakhapatnam, also commonly known as Vizag, is one of the oldest port cities in the country. Situated in the heart of Andhra Pradesh, Visakhapatnam is known for its picturesque beaches and serene landscape, as well as a rich cultural past, which makes it an ideal spot for a fantastic coastal vacation. The port of Visakhapatnam is renowned for being home to the oldest shipyard in all of India, and with a plethora of manmade wonders and natural spectacles, Visakhapatnam is a must-visit tourist destination in South India.

You simply cannot go to a coastal city like Visakhapatnam and not see its beaches. Vizag is dotted with many beaches along its coastline, with the most famous one being the Yarada Beach. One of the most stunning places to see in all of Visakhapatnam, Yarada beach is surrounded by majestic hills on three sides, and by the Bay of Bengal on the other side. One of the best things about Vizag’s beaches is that they are a lot cleaner and a lot less crowded than other famous beaches along the Indian coastline, and Yarada beach is no exception. It is the perfect place to sit back on the golden sands and witness a marvellous sunrise or sunset. Located a short distance away from Visakhapatnam, Araku Valley is one of the prime attractions of Vizag. Situated at a lofty 910 metres above sea level, Araku Valley is a hill station replete with gushing waterfalls, crystal clear streams, and lush green gardens. The valley is inhabited by a number of tribes who have strongly held on to their vibrant traditions and culture, refusing to let themselves be taken over by commercialization. Araku Valley offers some challenging trekking trails which you can avail if you're up for it.</p>
	</div>
		<div class="name" id="three">Vijayawada... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">With scrumptious fruits, sensational sweets and scenic marvels, Vijayawada literally translates to 'The Place of Victory'.

It is often also known as Bezawada. Vijayawada is the third largest city inÊAndhra Pradesh, Êholds the credit of being the largest railway junction in South India. Located on the banks of the Krishna River, Vijayawada is bounded by the lndrakeeladri Hills on the west and the Budameru river on the north. The Kondapalli Fort, Mogalarajapuram Caves, Gandhi Stupa and Undavalli Caves are extremely known in the city and showcase a blend of history and nature unimaginable.</p>

</div>
		<div class="name" id="four">Sirsailam... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Srisailam is a celebrated hill town set on a lofty natural setting on the banks of the River Krishna, in Kurnool district of Andhra Pradesh. Srisailam is identified with its many ancient temples including a Jyotirlinga, a wildlife sanctuary and a dam.

Srisailam hills are very canorous in scenic attractions with mind-boggling wildlife. Sirsailam is a must visit if you are looking for a vacation which is peaceful, quiet and where the calmness can refresh your senses. You could seek the blessings of the almighty by visiting the many majestic temples in the city such as the one dedicated to Lord Shiva (it is renowned as Sikhareswara Swamy temple) or the famous Bhramaramba Mallikarjunaswamy Temple which is located at a height of around 457m from sea level. The Nallamala forest ranges with densely arboraceous trees and multifarious flora and fauna lie in close proximity to the Srisailam hills.</p>

</div>
		<div class="name" id="five">Guntur... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Guntur houses the newly coined Andhra Capital of Amravathi, which lies about 30 km away. It serves as the administrative headquarters of Guntur district and has some unique distinctions to its name, having the largest chilli market yard in Asia being one of them. Guntur is also the third most populous town in Andhra Pradesh. With a busy industrial activity scenario, it forms part of the prominent Vishakhapatnam-Guntur Industrial corridor.  It lies on the banks of River Krishna which melts into the sea further along the way. The city takes credit for housing the only Buddhist pilgrimage in South India which is situated in Amravathi.

The city displays plethora of captivating relics of its past including Amravati Caves, Nagarjunakonda and many more. Also renowned as textile hub and transport hub of India, it is a center of learning as well. Once being the home to numerous great dynasties, today this city is more known for its industrial growth and exports of chili products to various parts of the globe. An ideal place for history lovers, Guntur was once occupied by several mighty rulers and today promises to take you back once again to the excursion trip of its glorious past.</p>

</div>
		<div class="name" id="six">Kurnool... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">A place of much historical value with beautiful surrounding areas, Kurnool, is a small town in Andhra Pradesh where much of history left its imprints.

Kurnool has in its domain remains of the palace of Gopal Raju ( the last Hindu king ), ruins of a medieval fort built by Vijaynagar Empire having ancient Persian and Arabic inscriptions and the summer palace built by Kurnool rulers during the 16th century. A town which blends religious and historical significance, it houses some of the most sacred of temples in its demesne such as the Peta Anjanyeswami temple, the Venugopalaswami temple, the newÊShirdiÊSai Baba Temple, to name a few. The Belum caves, Birla Mandir, Oravakallu Rock Garden, Rollapadu Wildlife Sanctuary, Tomb of Abdul Wahab are other major attractions. The Kondareddy Buruz which is protected by the Ancient Monuments Preservation Act is also an interesting place to visit.</p>

	</div>
		<br>
		<div class="name" id="food">Cuisine... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">
Andhra Pradesh is known for its spicy food all around the country. The inspiration behind such delicious variations of food lies in the opulent culture of the state, where exotic food is being prepared in the kitchen of the Nawabs since the year of its origin. The Andhra cuisine comprises of both mouth-watering vegetarian and non-vegetarian dishes. The famous Hyderabadi dishes include appetising Biryanis, delectable rice and some tangy pickles and chutneys.
</p>

	</div>
		<br>
		<div class="name" id="culture">Culture... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Andhra Pradesh, also known as the Rice Bowl of India is like a melting pot of varied cultures. It is a region which has been governed by different dynasties and empires. This diverse exposure to the cultures and traditions of the empires has had an indelible influence in forming the Culture of Andhra Pradesh. The conglomeration of many cultures has formed the present day culture of the region. Some of the primary rulers of the region were the Ikshvakus, Pallavas, Chalukyas, Kakatiyas, Vijayanagars and Mughals.
</p>

	</div>
		<br>
		<div class="name" id="floraandfauna">Flora & Fauna... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">In Andhra Pradesh,  vegetation that is seen usually belongs to dry deciduous form of vegetation that is a mix of Teak and a variety of species belonging to genera Dalbergias, Terminalia, Anogeissus, Pterocarpus, etc. Too much diversity is seen in flora and fauna Eastern Ghats add more thereby providing endemism centers for birds, plants, and lesser animal life forms. Diverse fauna are harbored in varied habitat including Tiger, Wolf, Panr, Wild Dog, Sloth Bear, Hyena, Gaur, Chinkara, Black Buck, Nilgai, Chowsingha, Sambar, Cheetal and a wide variety of reptiles and birds. Nesting ground is offered by the vast sea coast for sea turtles. It also offers feed grounds for Grey Pelican & Flamingo that can be seen in Pulicat Lake’s back water. Rich mangrove forests found here are supported by River Krishna and Godavari’s estuaries. It contains key species of Otters and Fishing Cat.

Andhra Pradesh also possesses some rare plant species like Cycas beddomei, Terminalia pallida, Pterocarpus santalinus, Syzygium alternifolium, Shorea tumburgia, Shorea talura, Psilotum nudam etc. Similarly Golden Gecko, Double banded, also referred to as Jerdon’s Courser, and Slender Loris that are quite endangered and rare species can be seen in this state.</p>

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
