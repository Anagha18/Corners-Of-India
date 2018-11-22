<?php include('C:\xampp\htdocs\WT\server2.php'); ?>
<!DOCTYPE html>
<html> 
	<head>
		<link rel="stylesheet" href="../sstyles.css">
		<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
		<title>Mizoram</title>
	</head>
	<body>
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
		<div class="name">Mizoram
		<p>---Songbird of India---<p>
		</div>
		<br>
		<div class="slideshow-container">
			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
  			<img src="slideshowmi1.jpg" style="width:100%">
 			</div>
			<div class="mySlides fade">
 			<div class="numbertext">2 / 3</div>
  			<img src="slideshowmi2.jpg" style="width:100%">
			</div>
			<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="slideshowmi3.jpg" style="width:100%">
			</div>
		</div>
		<br>
		<div style="text-align:center">
  		<span class="dot"></span> 
  		<span class="dot"></span> 
  		<span class="dot"></span> 
		</div>
		<br>
		<br>
		<br>
		<div class="name">About... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Mizoram (English: /mɪˈzɔːrəm/ ) is a state in Northeast India, with Aizawl as its capital city. The name is derived from "Mizo", the name of the native inhabitants, and "Ram", which means land, and thus Mizoram means "land of the Mizos".   Within the northeast region, it is the southernmost landlocked state, sharing borders with three of the Seven Sister States, namely Tripura, Assam and Manipur. The state also shares a 722 kilometre border with the neighbouring countries of Bangladesh and Myanmar.  

                Like several other northeastern states of India, Mizoram was previously part of Assam until 1972, when it was carved out as a Union Territory. It became the 23rd state of India, a step above Union Territory, on 20 February 1987, with Fifty-Third Amendment of Indian Constitution, 1986.  
                
                Mizoram's population was 1,091,014, according to a 2011 census. It is the 2nd least populous state in the country.   Mizoram covers an area of approximately 21,087 square kilometres.   About 91% of the state is forested.
            </p>
	</div>
	<br>
		<br>
		<div class="places1">
			<div class="name">Must visits... </div>
			<hr/>
			<br>
			<br>
			<div class="row">
			<div class="column">
			<a href="#Aizawl">		
			<div class="container">
	  		<img src="mi1.jpg" class="image"/>
  			<div class="overlay">
    			<div class="text">Aizawl</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Lunglei">
	  		<img src="mi2.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Lunglei</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">		
			<div class="container">
			<a href="#Siaha">
	  		<img src="mi3.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Siaha</div>
  			</div>
			</div>
			</a>
			</div>
			</div>
			<div class="row">
			<div class="column">		
			<div class="container">
			<a href="#Champhai">
	  		<img src="mi4.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Champhai</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Kolasib">
	  		<img src="mi5.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Kolasib</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">		
			<div class="container">
			<a href="#Lengteng Wildlife Sanctuary">
	  		<img src="mi6.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Lengteng Wildlife Sanctuary</div>
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
		<center><div class="row1" >
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
		</div></center>
		<div class="name" id="Aizawl">Aizawl... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain"> Aizawl (English: /aɪˈzɔːl/;   Mizo: [ˈʌɪ̯.ˈzɔːl] (About this soundlisten)) is the capital of the state of Mizoram in India. With a population of 293,416,   it is the largest city in the state. It is also the centre of administration containing all the important government offices, state assembly house and civil secretariat. The population of Aizawl strongly reflects the different communities of the ethnic Mizo people. Aizawl will host the third edition of Xchange North East Youth NGO summit from October 3rd to 5th, 2018.
                Aizawl is located north of the Tropic of Cancer in the northern part of Mizoram. It is situated on a ridge 1,132 metres (3715 ft) above sea level, with the Tlawng river valley to its west and the Tuirial river valley to its east.

                Aizawl has a mild, sub-tropical climate due to its location and elevation. Under the Köppen climate classification, Aizawl features a humid subtropical climate (Cwa) but very rainy. In the summer the temperature ranges from 20–30 °C (68–86 °F), and in the winter 11–21 °C (52–70 °F).
        </p></div>
		<div class="name" id="Lunglei">Lunglei... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Lunglei is a town, situated in the south-central part of Mizoram state, northeastern India. Lunglei, sometimes spelled Lungleh, literally meaning 'bridge of rock' got its name from a bridge like rock found in the riverine area around Nghasih - a small tributary of the river Tlawng. It is the second largest town after the capital, Aizawl, located 165 km south of Aizawl.
                Lunglei was the Capital of South Lushai Hill Districts for 10 years from 1888, as was Aizawl for the North Hill Districts.  The two were united in 1898. Lunglei is the second-largest town in Mizoram and was an important town until the partition of India as it had direct access to Chittagong, a big city in Bangladesh which made Lunglei the commercial and education centre.
    
        </p>
		</div>
		<div class="name" id="Siaha">Siaha... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Siaha (official name given by the Mara Autonomous District Council,   popularly known as Saiha) is a census town in Siaha district in the Indian north-eastern state of Mizoram. It is the Headquarters of the Mara Autonomous District Council, one of the three autonomous district councils within Mizoram. It is located in the South Central part of the state. The word 'Siaha' in the local Mara language comes from 'Sia' for Masia which means elephant and 'ha' meaning tooth - An elephant tooth. It was a place where a large amount of elephant teeth were found. Though the local people name the town as Siaha, Mizos called it by the name 'Saiha', which is purely a translated term in Mizo language.

                Siaha is a commercial hub for Mara people.</p>
	</div>
	<div class="name" id="Champhai">Champhai... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Champhai (Pron:/tʃamˈpʰaɪ/) is a border town in Mizoram state, in far eastern India. It is the headquarters of Champhai district, one of the eight districts in the state. It is located on the Indo-Myanmar border and is situated in a strategically important location. Because of this, it is the main business corridor for India and Myanmar in the area.

                The area of Champhai is 3,185.83 square kilometres (1,230 sq mi). The average annual rainfall is 1,814 millimetres (71.4 in).</p>
	</div>
	<div class="name" id="Kolasib">Kolasib... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Kolasib is a district as well as a district headquarters of Kolasib district in Mizoram, India.
			As of 2011 India census, Kolasib district had a population of 83,955. Males constitute 51.12% of the population and females 48.88%. Kolasib has an average literacy rate of 93.50%, higher than the national average of 74.04%: male literacy is 94.57%, and female literacy is 92.38%. Population growth rate of Kolasib district was 27.28 percent during the decade.
			Kolasib is agriculture-dominated economy with a few service sector jobs as it is a district capital. A large number of people cultivate beetle nut, oil palms, rice, wheat and fish which is both consumed and exported to other districts of Mizoram.
			
		</p>
	</div>
		<div class="name" id="Lengteng Wildlife Sanctuary">Lengteng Wildlife Sanctuary... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Lengteng Wildlife Sanctuary is a protected area in Champhai district in eastern Mizoram, northeast India. It is an alpine forest and contains the second highest peak in Mizoram. It is specially a conservation interest on rare species of birds.  It was declared a protected area in 1999,     and a national wildlife sanctuary by the Indian Ministry of Environment and Forests on 31 May 2001.
			Lengteng Wildlife Sanctuary is located in Champhai district, only a few kilometres from Indo-Burma border and north of Murlen National Park. It lies adjacent to the village Lamzawl, and the nearest town is Ngopa. Selam village is within the sanctuary. It is at an altitude of 400-2,141 m asl. It covers an area of 12,000 ha (30,000 acres). It consists of several mountain peaks, and one of them is the second highest in all of Mizoram. Vegetation types are tropical evergreen forest and sub-tropical montane forest.

		</p></div> 
		<div class="name" id="food">Cuisine... </div>
<hr/>
<div class="pdheader">
<p class="explain">
		
Food in Mizoram is one of the main attractions for the tourists who plan to visit this Indian state on a vacation. The Mizoram cuisine offers mainly non-vegetarian delicacies. The people who belong to this place do eat vegetables, but they prefer to add some non-vegetarian ingredients to each and every dish they prepare. 

One of the main specialties of the food of Mizoram is that it is very different from the food available in other parts of the country of India other than the north-east. However, the food in Mizoram is quite similar to the food in the other north-eastern states of India. The cuisine of the north-eastern states of the country including Mizoram has an identity of its own. 

		</p></div>
<div class="name" id="culture">Culture... </div>
<hr/>
<div class="pdheader">
<p class="explain">The culture of Mizoram is well known for the colorful attire of the womenfolk, their musical festivals and the popular Cheraw bamboo dance during the festivals. The people of Mizoram mainly comprises of various Tibeto-Burman groups of Kuki tribe such as Hmar, Lushai, Ralte, Pawi, Thadou and Zou. However with a sense of unity they prefer to call themselves as Mizo as most of the tribes speak Mizo Tawng, the common language. The term Kuki, referring to the frontier highlanders, was used by the neighboring Bengali people of the plains. They are also referred as Chin people by the Burmese. The Mizo tribes dwell mainly in the Lushai Hills and also in the surrounding mountains of Chin region of the Kingdom of Myanmar.	</p></div>
<div class="name" id="florafouna">Flora & Fauna</div>
<hr/>
<div class="pdheader">
<p class="explain">Mizoram has the third largest forest cover in India. Tropical forests are found throughout the state. Almost half of Mizoram is covered with wild bamboo forests. It was due to the dense vegetation of the hilly terrain for which the state was the last region to be explored by the British in India. Mizoram is blessed not only with scenic beauty, but also with natural resources and biodiversity that integrate South and Southeast Asia of the Indo-Myanmar region. The semi evergreen forests are seen mainly on the foothills and steep slopes in the western part of the state. This is the region where most of the wildlife sanctuaries are situated. These forests act as migration corridors for animals to travel between the plains and hills. Subtropical forests and few coniferous forest belts are found in the eastern part of the higher mountains bordering the Chin region of Myanmar.

	Dampa Tiger Reserve, Murlen National Park, Blue Mountain National Park and Ngenpui Wildlife Sanctuary are the main forested areas of the state. Most of them are sub tropical or sub-montane forests depending on their elevation and also have bamboo forests whose undergrowths support numerous animals. Tigers, Clouded leopards, elephants, Gaur bisons, Hoolock Gibbons and Ghorals are found in the highland forests. Mizoram also has birds such as Brown fish owl, Hill Mynah, Crested Eagle,  Ringed Plover, Whistling teal and Pied Hornbill. The colourful Hume Pheasant is the state bird of Mizoram.
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