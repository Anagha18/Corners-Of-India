<?php include('C:\xampp\htdocs\WT\server2.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../sstyles.css">
		<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
		<title>Rajasthan</title>
		
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
		<div class="name" class="name">Rajasthan
		<p>--- The Land of Kings ---<p>
		</div>
		<br>
		<div class="slideshow-container">
			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
  			<img src="ss21.jpg" style="width:100%">
 			</div>
			<div class="mySlides fade">
 			<div class="numbertext">2 / 3</div>
  			<img src="ss22.jpg" style="width:100%">
			</div>
			<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="ss23.jpg" style="width:100%">
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
	  		<img src="uda.jpg" class="image"/>
  			<div class="overlay">
    			<div class="text">Udaipur</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#two">
	  		<img src="jai.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Jaipur</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#three">
	  		<img src="jod.jpg" class="image">
  			<div class="overlay">
    			<div class="text">jodhpur</div>
  			</div>
			</div>
			</a>
			</div>
			</div>
			<div class="row">
			<div class="column">
			<div class="container">
			<a href="#four">
	  		<img src="mta.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Mount Abu</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#five">
	  		<img src="ajm.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Ajmer</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#six">
	  		<img src="jais.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Jaisalmer</div>
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
	  		<img src="cui3.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Cuisine</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#culture">
			<div class="container1">
	  		<img src="cul3.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Culture</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#floraandfauna">
			<div class="container1">
	  		<img src="flo3.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Flora & Fauna</div>
  			</div>
			</div>
			</a>
			</div>
		</div></center>
		<br>
		<div class="name" id="one">Udaipur... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Udaipur, also known as the City of Lakes, is the crown jewel of the state of Rajasthan. It is surrounded by the beautiful Aravalli Hills in all directions, making this city as lovely as it is. This 'Venice of the East' has an abundance of natural beauty, mesmerising temples and breathtaking architecture which makes it a must-visit destination in India.  A boat ride through the serene waters of Lake Pichola will be enough to prove to you why Udaipur is the pride of Rajasthan.

Located in a valley and surrounded by four lakes, Udaipur has natural offerings with a grandeur multiplied by human effort, to make it one of the most enchanting and memorable tourist destinations. It justifies all names ever offered to its charm from 'Jewel of Mewar' to 'Venice of the East'. And though the entire city's architecture is flattering, the Lake Palace hotel is something that offers the city a visual definition. The revered Nathdwara temple is about 60 km from Udaipur.</p>
	</div>
		<div class="name" id="two">Jaipur... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">The moment you set foot in Jaipur, you will feel like everything has come straight out of the pages of some epic novel. Majestic buildings, tales of heroic battles, resplendent forts and palaces, and multi-faceted characters – Rajasthan is one of the most colourful and flashiest states in all of India, and its capital Jaipur lives up to the same reputation as well. Jaipur is a vibrant amalgamation of the old and the new – highly urbanized pockets and shopping areas have casually sprung up beside gleaming forts and palaces. Jaipur has long been one of the shiniest cultural jewels in the history of the Indian subcontinent, and the royal corridors of the famously named 'Pink City' offer up a plethora of adventures and activities that make for a memorable holiday experience.

Jaipur is known for its forts and palaces, and the most famous fort in the vicinity is the Amber Fort. Also commonly known as the Amer Fort, this majestic building with its maze-like passages and serpentine staircases is a very popular tourist attraction. Overlooking the Maota Lake, the fort is big enough that it will take you at least two to three hours to explore it in detail, and you can also choose to avail of the audio guides to lead you through this fascinating building while explaining the history of the place. Getting an elephant ride up the stairs to the Amber Fort is also a popular tourist activity.

City Palace is another top draw for anyone wishing to know more about the rich history and culture of the Pink City. Home to Rajasthani Maharajas back in the 1700s, this building has now been converted into a museum where tourists can learn about the history of the city in detail. City Palace comprises Mubarak Mahal and Chandra Mahal, with the Chandra Mahal being only partially open to visitors, as the rest of the building is used as the residential place of the Maharajas’ descendants.

Jaipur is more than just ancient glitz and glamour. </p>
	</div>
		<div class="name" id="three">Jodhpur... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Also Known as the "Gateway to Thar", it is famous for its Mehrangarh fort, blue houses, temples, sweets and snacks. Apart from the fort, there are multiple temples, lakes, shopping streets that are like a mirage from a bygone era.

Jodhpur is one of the most enchanting cities of Rajasthan, with its mighty Mehrangarh fort overlooking the city. An architectural masterpiece in itself, Mehrangarh Fort is a magnificent fort and is among one of the largest forts in Rajasthan. The city is called the Blue City as it looks completely blue in colour from an aerial view because of its blue walls and blue houses. Also seen in the backdrop of the movie, The Dark Knight Rises, Jodhpur attracts hundreds of thousands of visitors from all over the world. Nearby Jaswant Tada and Umaid Bhawan Palace are also among the top attractions in Jodhpur. Apart from the old blue city, Jodhpur has grown as a city with wider and cleaner roads in some parts. However, the magic lies in the old city itself with hundreds of shops, guesthouses, eating joints and vendors make it a chirpy bustling city, especially near the landmark clock tower and Sardar Market.</p>

</div>
		<div class="name" id="four">Mount Abu... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">The only hill station of Rajasthan, its cool atmosphere and lush green surroundings make it a major tourist spot within the state. The most important attraction, however, are undoubtedly the Dilwara temples, which is one of the most stunning piece of architecture in the country. If you are a history or architecture buff, this is one of the places you should absolutely not miss out in India.

The exceptionally intricate architecture of the Dilwara temples are of course the main attraction here, and you can easily spend hours wondering how these temples were built over 2 centuries, almost a 1000 years back. The temples were specifically made so that they are plain from the outside to avoid attraction of plunderers, and have withstood the test of time extremely well. If architecture is not your thing, then there are various lakes and viewpoints such as the Honeymoon Point, Sunset Point, etc. Tourists enjoy calm and relaxed boating in the Nakki lake, and a view of the sunset from the Sunset point. The highest peak of the Aravali Range also lies in Mt. Abu, surrounded by dense green forests. Mt Abu will offer you all you can demand from a popular and typical destination of a romantic and simpler nature.</p>

</div>
		<div class="name" id="five">Ajmer... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Surrounded by Aravali ranges, the city of Ajmer is most famous for its Dargah Sharif of saint Muin-ud-din Chishti. Firmly bound by its traditions and culture, Ajmer has a unique charm which lies in the ethos and craftsmanship practised over centuries. Visit Ajmer to witness the exquisite Mughal architecture set in an aura of peace and spirituality.

Located almost in the centre of Rajasthan, Ajmer is brimming with natural beauty and is a renowned religious spot for Hindus and Muslims alike and it receives thousands of visitors every year. During the festival of Urs, the festival commemorating the death anniversary of Saint Moinuddin Chishti, believers from across the globe throng the city. With many famous temples also present here, the city is a renowned religious spot for Hindus and Jains alike. A lot of travellers visiting Pushkar stop by Ajmer and make a day trip to Ajmer.</p>

</div>
		<div class="name" id="six">Jaisalmer... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Situated close to the Pakistan Border, Jaisalmer is a major tourist spot located in the northwestern state of Rajasthan in India. It is called the 'golden city' due to its bounteous golden dunes flowing in the Thar Desert. Jaisalmer is adorned with lakes, ornate Jain temples, havelis and castles clad in golden yellowish sandstone. Climb on to the camel saddle and make your way through this desert or camp under the night sky in this golden land for an unforgettable experience.
The Jaisalmer Fort stands as a crown atop the city and provides a beautiful contrast to the landscape. It also has a lake and many magnificent temples, all made of sandstone. The narrow alleys surrounding the fort are inhabited by people residing there for generations. Jaisalmer is a sublime amalgam of exotic Indian desert culture, heritage and adventure.</p>

	</div>
		<br>
		<div class="name" id="food">Cuisine... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Rajasthani cuisine was influenced by both the war-like lifestyles of its inhabitants and the availability of ingredients in this arid region. Food that could last for several days and could be eaten without heating was preferred. Scarcity of water and fresh green vegetables have all had their effect on the cooking. It is also known for its snacks like Bikaneri Bhujia, Mirchi Bada and Pyaaj Kachori. Other famous dishes include Bajre ki roti (millet bread) and Lashun ki chutney (hot garlic paste), Mawa Kachori from jodhpur, Alwar ka mawa, Malpauas from pushkar and Rassgollas from Bikaner, "paniya"and "gheriya" from Mewar. Originating for the Marwar region of the state is the concept Marwari Bhojnalaya, or vegetarian restaurants, today found in many part of India, which offer vegetarian food of the Marwari people.

According to a 2014 survey released by the registrar general of India, Rajasthan has 74.9% vegetarians, which makes it the most vegetarian state in India</p>

	</div>
		<br>
		<div class="name" id="culture">Culture... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Highly cultivated classical music and dance with its own distinct style is part of the cultural tradition of Rajasthan. The music is uncomplicated and songs depict day-to-day relationships and chores, more often focused around fetching water from wells or ponds.

The Ghoomar dance from Jodhpur and Kalbeliya dance of Jaisalmer have gained international recognition. Folk music is a vital part of Rajasthani culture. Kathputali, Bhopa, Chang, Teratali, Ghindar, Kachchhighori, Tejaji,parth dance etc. are the examples of the traditional Rajasthani culture. Folk songs are commonly ballads which relate heroic deeds and love stories; and religious or devotional songs known as bhajans and banis (often accompanied by musical instruments like dholak, sitar, sarangi etc.) are also sung.

Kanhaiya Geet also sung in major areas of east rajasthani belt in the collectiong manner as a best source of entertainment in the rural areas. Rajasthan is famous for textiles, semi-precious stones and handicrafts, and for its traditional and colorful art. Rajasthani furniture has intricate carvings and bright colours. Block prints, tie and dye prints, Bagaru prints, Sanganer prints and Zari embroidery are major export products from Rajasthan. The blue pottery of Jaipur is particularly noted.

</p>

	</div>
		<br>
		<div class="name" id="floraandfauna">Floara & Fauna... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Rajasthan is rich in flora and fauna. The flora and fauna of Rajasthan supports all kinds of animal species and forests. From the world's tallest black-necked stork to cranes, Indian bustard and grey partridge-Rajasthani bird sanctuaries are a treat to visit. The flora and fauna of Rajasthan is said to completely spellbind you.<br>While one part of Rajasthan is dominated by the Thar Desert, the other part flaunts the lofty peaks of the Aravallis and Vindhya ranges. The forests in Rajasthan mostly lie to the east of the Aravalli range. They comprise of about 9% of the total area. The vegetation in the desert region majorly comprises of stunted trees, thorny shrubs and some grasses. The rest of the vegetation grows only during monsoon. <br>The fauna of Rajasthan is blessed with various species. They range from mammals and reptiles to colorful birds. The common animals here are antelopes and gazelles that include Blackbuck and Chinkara. Nilgai is commonly found in open plains and in the foothills of the Aravallis. Chau Singha, another local, lives in the hilly regions. Besides these one may also come across sambar, chital, rhesus macauqe, langur, jackal, wolf, Indian porcupine, desert fox, Indian gerbil, five-striped palm squirrel, desert gerbil, wild boar and a host of other wild animals.</p>

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
