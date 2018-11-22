<?php include('C:\xampp\htdocs\WT\server2.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../sstyles.css">
		<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
		<title>Himachal Pradesh</title>

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
		<div class="name" >Himachal Pradesh
		<p>--- The state of hills ---<p>
		</div>
		<br>
		<div class="slideshow-container">
			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
  			<img src="slideshow1.jpg" style="width:100%">
 			</div>
			<div class="mySlides fade">
 			<div class="numbertext">2 / 3</div>
  			<img src="slideshow2.jpg" style="width:100%">
			</div>
			<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="slideshow3.jpg" style="width:100%">
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
		<p class="explain">Himachal Pradesh is a state in north-western India, and offers much for those looking to experience the Himalayas. While it does not claim the highest peaks in the range, there is plenty to do aside from mountaineering. Its name literally means "Abode of Snow". Hindi, Pahari, Punjabi and English are the main languages found in the state. Pahari is a dialect more closely related to the Dogri language in lower Himachal. In upper Himachal languages of Tibetan origin are used in daily conversation. Every district has its own dialect e.g. bilaspuri mandyali.</p>
	</div>
		<br>
		<div class="places1">
			<div class="name">Must visits... </div>
			<hr/>
			<br>
			<br>
			<div class="row">
			<div class="column">
			<a href="#shimla">
			<div class="container">
	  		<img src="p1.jpg" class="image"/>
  			<div class="overlay">
    			<div class="text">Shimla</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#manali">
	  		<img src="p2.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Manali</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#dharamshala">
	  		<img src="p3.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Dharamshala</div>
  			</div>
			</div>
			</a>
			</div>
			</div>
			<div class="row">
			<div class="column">
			<div class="container">
			<a href="#dalhousie">
	  		<img src="p4.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Dalhousie</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#kullu">
	  		<img src="p5.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Kullu</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#kufri">
	  		<img src="p6.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Kufri</div>
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
		<div class="name" id="shimla">Shimla... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Shimla (English: /ˈʃɪmlə/; Hindi: [ˈʃɪmlaː] (About this sound listen)), also known as Simla, is the capital and the largest city of the northern Indian state of Himachal Pradesh. Shimla is also a district which is bounded by the state of Uttarakhand in the south-east, districts of Mandi and Kullu in the north, Kinnaur in the east, Sirmaur in the south and Solan in the west. In 1864, Shimla was declared as the summer capital of British India, succeeding Murree, northeast of Rawalpindi. After independence, the city became the capital of Punjab and was later named the capital of Himachal Pradesh. It is the principal commercial, cultural and educational centre of the state.</p>
	</div>
		<div class="name" id="manali">Manali... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Manali is a resort town nestled in the mountains of the Indian state of Himachal Pradesh near the northern end of the Kullu Valley in the Beas River Valley. It is located in the Kullu district, about 270 km (168 mi) north of the state capital, Shimla, 309 km (192 miles) northeast of Chandigarh and 544 km (338 miles) northeast of Delhi, the federal capital. The small town, with a population of 8,096,  is the beginning of an ancient trade route to Ladakh and from there over the Karakoram Pass on to Yarkand and Khotan in the Tarim Basin. It is a popular tourist destination and serves as the gateway to Lahaul and Spiti district as well as Leh.</p>
	</div>
		<div class="name" id="dharamshala">Dharamshala... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Dharamshala (also spelled Dharamsala) is the district headquarters of Kangra district in India. It was formerly known as Bhagsu. The Dalai Lama's residence and the headquarters of the Central Tibetan Administration (the Tibetan government in exile) are in Dharamshala. Dharamshala is 18 kilometers from Kangra.Dharamshala has been selected as one of the hundred Indian cities to be developed as a smart city under PM Narendra Modi's flagship Smart Cities Mission.  .On 19 January 2017, Chief Minister Virbhadra Singh declared Dharamshala as the second capital of Himachal Pradesh state, making Himachal Pradesh the third state of India with two capitals after Jammu and Kashmir and Maharashtra.</p>

</div>
		<div class="name" id="dalhousie">Dalhousie... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Dalhousie is a hill station in Himachal Pradesh, established in 1854 by the British Empire's government in British India as a summer retreat for its troops and officials after annexation of the Sikh Empire, Punjab.It is built on and around five hills, Kathalagh, Potreyn, Terah, Bakrota and Bhangora.   Located on the western edge of the Dhauladhar mountain range of the Himalayas, it is surrounded by snow-capped peaks. Dalhousie is situated between 6,000 and 9,000 feet
		(2,700 m) above sea level. It was established on the land of the Sikh Empire Punjab after being annexed by British. Dalhousie remained part of Punjab until 1966, when it was excised from Punjab by the Punjab Reorganisation Act, 1966.</p>

</div>
		<div class="name" id="kullu">Kullu... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Kullu or Kulu is the capital town of the Kullu district in the Indian state of Himachal Pradesh. It is located on the banks of the Beas River in the Kullu Valley about 10 kilometres (6.2 mi) north of the airport at Bhuntar.
Kullu Valley is a broad open valley formed by the Beas River between Manali and Largi. This valley is known for its temples and its hills covered with pine and deodar forest and sprawling apple orchards. The course of the Beas river presents a succession of magnificent, clad with forests of deodar, towering above trees of pine on the lower rocky ridges. Kullu valley is sandwiched between the Pir Panjal, Lower Himalayan and Great Himalayan Ranges.</p>

</div>
		<div class="name" id="kufri">Kufri... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Kufri is a small hill station in Shimla district of Himachal Pradesh state in India. It is located 20 km from the state capital Shimla on the National Highway No.22.
Kufri with NH-22, Shimla district.
The name Kufri is derived from the word kufr meaning "lake" in the local language.
Bear in the Kufri zoo
The highest point in the surrounding region,  Kufri has a Himalayan wild life zoo which hosts rare antelopes, felines and birds including the Himalayan monal, the state bird of Himachal Pradesh. During winter a meandering path through the potato plantations turns into a popular ski track.</p>


</div>
<div class="name" id="food">Cuisine... </div>
<hr/>
<div class="pdheader">
<p class="explain">The day-to-day food of Himachalis is very similar to that of the rest of north India.
	They too have lentil, broth, rice, vegetables and bread. As compared to other states in north India non-vegetarian cuisine is preferred.
	 Traditionally, Himachali cuisine is dominated by red meat and wheat bread. Thick and rich gravy, with aromatic spices, is used in abundance as the base of many dishes. Now, steamed momos (dumplings) and noodles are also readily available and popular with travellers who want to graduate to Indian food slowly.   Some of the specialities of Himachal include Manee, Mandra or "Madra", "Palda", "Redu" Patode, Chouck, Bhagjery and chutney of til(sesame seeds).</p>
</div>
<div class="name" id="culture">Culture... </div>
<hr/>
<div class="pdheader">
<p class="explain">Himachal Pradesh, the North Indian state, was one of the few states that had remained largely untouched by external customs, largely due to its difficult terrain. With the technological advancements, the state has changed very rapidly. Himachal Pradesh is a multireligional, multicultural as well as multilingual state like other Indian states. Some of the most commonly spoken languages are Hindi and the various Pahari languages.  The Hindu communities residing in Himachal include the Brahmins, Rajputs, Kannets, Rathis and Kolis. There are also tribal population in the state which mainly comprise Gaddis, Kinnarms, Gujjars, Pangawals and Lahaulis.

		Himachal is well known for its handicrafts. The carpets, leather works, shawls, paintings, metalware, woodwork and paintings are worth appreciating. Pashmina shawl is one of the products which is highly in demand not only in Himachal but all over the country. Himachali caps are also famous art work of the people.

		Local music and dance reflects the cultural identity of the state. Through their dance and music, they entreat their gods during local festivals and other special occasions.

		Apart from the fairs and festivals that are celebrated all over India, there are number of other fairs and festivals, including the temple fairs in nearly every region that are of great significance to Himachal Pradesh.
	</p></div>
<div class="name" id="florafouna">Flora & Fauna</div>
<hr/>
<div class="pdheader">
<p class="explain">Himachal is a land of jade forests and fresh air. As much as 68% of the land area is covered with jungles. While the foothills and valleys are a refreshing green, the areas above the snow line are almost bare.

		The southernmost tracts are dominated by sal (Shorea robusta), sisham, chir pine, dry deciduous and moist broad-leafed forests.  The temperate region above this grows oaks, deodar, blue pine, fir and spruce. In the uppermost climes, trees are sturdy with a vast network of roots (to help them tide over the weeks of burial under heavy snow). You’ll mostly find alders, birches, rhododendrons and moist alpine scrubs in the name of vegetation. The tough rhododendron, by the way, is an amazing plant and of terrific importance in the ecological chain. By attracting insects, which in turn attract birds, it forms a major link in high altitude ecosystems. The rhododendrons you see along the hillsides around Shimla from March to May are breathtakingly beautiful.

		Himachal is the fruit bowl of the country with orchards scattered all over the place. Meadows and pastures are often seen clinging to the dangerously steep slopes. After the winter snow thaws, the hillsides and orchards bloom with wild flowers, while gladiolas, carnations, marigolds, roses, chrysanthemums, tulips, lilies and other flowers are carefully cultivated. The state government is gearing up to make Himachal the flower basket of the world.
	</p></div>
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
