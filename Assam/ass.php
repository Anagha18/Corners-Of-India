<?php include('C:\xampp\htdocs\WT\server2.php'); ?>
<!DOCTYPE html>
<html> 
	<head>
		<link rel="stylesheet" href="../sstyles.css">
		<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
		<title>Assam</title>
	</head>
	<body>
		<div class="statusbox">
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
		<div class="name">Assam
		<p>--- The State of Tea ---<p>
		</div>
		<br>
		<div class="slideshow-container">
			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
  			<img src="slideshowas1.jpg" style="width:100%">
 			</div>
			<div class="mySlides fade">
 			<div class="numbertext">2 / 3</div>
  			<img src="slideshowas2.jpg" style="width:100%">
			</div>
			<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="slideshowas3.jpg" style="width:100%">
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
					<p class="explain">Mājuli or Majoli is a river island in the Brahmaputra River, Assam and in 2016 became the first island to be made a district in India. It had an area of 880 square kilometres at the beginning of the 20th century, but having lost significantly to erosion it covers 352 square kilometres as at 2014. Majuli has shrunk as the river surrounding it has grown. Majuli is currently listed as world's largest river island in Guinness book of world's record. The island is formed by the Brahmaputra river in the south and the Kherkutia Xuti, an anabranch of the Brahmaputra, joined by the Subansiri River in the north. Mājuli island is accessible by ferries from the city of Jorhat. The island is about 300–400 kilometres east from the state's largest city —Guwahati. It was formed due to course changes by the river Brahmaputra and its tributaries, mainly the Lohit. Mājuli is the abode of the Assamese neo-Vaishnavite culture. 

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
			<a href="#Majuli">		
			<div class="container">
	  		<img src="as1.jpg" class="image"/>
  			<div class="overlay">
    			<div class="text">Majuli</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Kaziranga National Park">
	  		<img src="as2.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Kaziranga National Park</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">		
			<div class="container">
			<a href="#Nagaon">
	  		<img src="as3.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Nagaon</div>
  			</div>
			</div>
			</a>
			</div>
			</div>
			<div class="row">
			<div class="column">		
			<div class="container">
			<a href="#Lumding">
	  		<img src="as4.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Lumding</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Tezpur">
	  		<img src="as5.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Tezpur</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">		
			<div class="container">
			<a href="#Rohtak">
	  		<img src="as6.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Rohtak</div>
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
		<div class="name" id="Majuli">Majuli... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Mājuli or Majoli is a river island in the Brahmaputra River, Assam and in 2016 became the first island to be made a district in India. It had an area of 880 square kilometres at the beginning of the 20th century, but having lost significantly to erosion it covers 352 square kilometres as at 2014. Majuli has shrunk as the river surrounding it has grown. Majuli is currently listed as world's largest river island in Guinness book of world's record. The island is formed by the Brahmaputra river in the south and the Kherkutia Xuti, an anabranch of the Brahmaputra, joined by the Subansiri River in the north. Mājuli island is accessible by ferries from the city of Jorhat. The island is about 300–400 kilometres east from the state's largest city —Guwahati. It was formed due to course changes by the river Brahmaputra and its tributaries, mainly the Lohit. Mājuli is the abode of the Assamese neo-Vaishnavite culture. 

        </div>
		<div class="name" id="Kaziranga National Park">Kaziranga National Park... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Kaziranga National Park (pronounced Assamese pronunciation: [kaziɹɔŋa ɹast(ɹ)iɔ uɪddan]) is a national park in the Golaghat and Nagaon districts of the state of Assam, India. The sanctuary, which hosts two-thirds of the world's great one-horned rhinoceroses, is a World Heritage Site.  According to the census held in March 2018 which was jointly conducted by the Forest Department of the Government of Assam and some recognized wildlife NGOs, the rhino population in Kaziranga National Park is 2,413. It comprises 1,641 adult rhinos (642 males, 793 females, 206 unsexed); 387 sub-adults (116 males, 149 females, 122 unsexed); and 385 calves.   In 2015, the rhino population stood at 2401. Kaziranga is home to the highest density of tigers among protected areas in the world, and was declared a Tiger Reserve in 2006 (now the highest tiger density is in Orang National Park, Assam) . The park is home to large breeding populations of elephants, wild water buffalo, and swamp deer.   Kaziranga is recognized as an Important Bird Area by BirdLife International for conservation of avifaunal species. When compared with other protected areas in India, Kaziranga has achieved notable success in wildlife conservation. Located on the edge of the Eastern Himalaya biodiversity hotspot, the park combines high species diversity and visibility.</p>
		</div>
		<div class="name" id="Nagaon">Nagaon... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Nagaon (previously Nowgong), is a city and a municipal board in Nagaon district in the Indian state of Assam. It is situated 121 kilometres (75 mi) east of Guwahati. It has a population of 147,231.

                In education section, total literates in Nagaon city are 98,068 of which 52,690 are males while 45,378 are females. Average literacy rate of Nagaon city is 93.43 percent of which male and female literacy was 98.58 and 88.08 percent.
                Nagaon city is governed by Municipal Board which comes under Nagaon Urban Agglomeration.
                The Kolong River, a tributary of the Brahmaputra River, flows through Nagaon and in the process divides the city into two distinct regions: Nagaon and Haibargaon.
                Nagaon is bounded on the north by the Sonitpur district and the Brahmaputra River. On the south, it borders the western Karbi Anglong District and Dima Hasao. On the east it is bounded by eastern Karbi Anglong and the Golaghat district, while on the west it neighbours the Marigaon district.
            </p>
	</div>
		<div class="name" id="Lumding">Lumding... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Lumding (Pron:/lʌmˈdɪŋ/) is a town with municipal board in Hojai district in the Indian state of Assam.
                Over the years Lumding has developed into township. The railway township had always enjoyed scant rainfall during the rainy season every year, although the trend has significantly altered over the past few decades. Also Lumding was used as a radar station during World War II by British.
                Lumding railway division is famous for being the biggest divisional headquarters of the North East Frontier Railway and the biggest junction in the North-Eastern part of the country. The town is also the gateway to the visually enchanting Lumding-Badarpur hill-tract between Lumding and Badarpur. The track has been included as a UNESCO Heritage site a few years back.

        </p>
	</div>

		<div class="name" id="Tezpur">Tezpur... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Tezpur (/tɛzˈpʊər/) (Assamese: তেজপুৰ tezpur, Assamese pronunciation: [tɛspuɹ]) is a city and urban agglomeration in Sonitpur district, Assam state, India. Tezpur is on the banks of the river Brahmaputra, 175 kilometres (109 mi) northeast of Guwahati, and is the largest of the north bank towns with a population exceeding 100,000 as per Metropolitan Census 2011.
                The historically rich city bears magnificent relics from its past. Although now urbanised, most of the places worth seeing in   and around Tezpur speak of its history. Be it the famed Mahabhairav Temple   , Bhairabi Temple (Maithan)  , the man-made hill of Agnigarh   or the naturally rich outskirts of Nameri National Park   and Bhalukpong, the place is thronged by visitors almost all year long.

                Connecting the city to the district of Nagaon is another majestic structure, the Kaliabhomora Bridge.
                The town is on the north bank of the Brahmaputra River.

The rivers in and around Tezpur are fast flowing, especially from the Himalayas foothills.[citation needed][clarification needed] Tezpur has a number of small hillocks, so that flooding doesn't occur during the monsoons.

        </p>		</div>
		<div class="name" id="Rohtak">Rohtak... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Jorhat is a city and one of the important urban centres in the state of Assam in India.
                Jorhat City is located at 26.75°N 94.22°E.   It has an average elevation of 116 metres (381 feet).

                The municipal area stretches to 9 square kilometres (3.5 sq mi)   having 19 wards with a population of about 1.85 lakhs at present. The district spreads over 2,851 square kilometres (1,101 sq mi) and had a population of 870,000 according to a 1991 census. Population density at that time was 306 persons per square kilometre (793/sq mi). The sex ratio is 913 (913 females per 1000 males).

        </p>
	</div>
	<div class="name" id="food">Cuisine... </div>
	<hr/>
	<div class="pdheader">
	<p class="explain">
			Assamese cuisine (Assamese: অসমীয়া ৰন্ধন-শৈলী) is the cuisine of Assam. It is a style of cooking that is a confluence of cooking habits of the hills that favor fermentation and drying as forms of preservation  and those from the plains that provide fresh vegetables and an abundance of fish and meat. Both are centered on the main ingredient — rice. The confluence of varied cultural influences in the Assam Valley has led to the staggering variety and flavours in the Assamese food. It is characterised by the use of an extremely wide variety of plant as well as animal products, owing to their abundance in the region. It is a mixture of indigenous styles with considerable regional variations and some external influences.

The cuisine is characterized by very little use of spices, little cooking over fire and strong flavors due mainly to the use of endemic exotic fruits and vegetables that are either fresh, dried or fermented. Fish is widely used, and birds like duck, squab etc. are very popular, which are often paired with a main vegetable or ingredient. Preparations are rarely elaborate. (The practice of bhuna, the gentle frying of spices before the addition of the main ingredients so common in Indian cooking, is absent in the cuisine of Assam.) The preferred oil for cooking is the pungent mustard oil.
</p>
	</div>
	<div class="name" id="culture">Culture... </div>
	<hr/>
	<div class="pdheader">
	<p class="explain">
            Assam is the meeting ground of diverse cultures. The people of the enchanting state of Assam is an intermixture of various racial stocks such as Mongoloid, Indo-Burmese, Indo-Iranian and Aryan. The Assamese culture is a rich and exotic tapestry of all these races evolved through a long assimilative process. The natives of the state of Assam are known as "Asomiya" (Assamese), which is also the state language of Assam.
 

            The state has a large number of tribes, each unique in it's tradition, culture, dresse and exotic way of life. Diverse tribes like Bodo, Kachari, Karbi, Miri, Mishimi, Rabha, etc co-exist in Assam, most tribes have their own languages though Assamese is the principal language of the state.
            
            A majority of the Assamese is the Vaishnavas (a sect of Hinduism). The Vaishnavas do not believe in idol worshiping and perform Namkirtana where the glory of
            Lord Vishnu is recited. The two important cultural and religious institutions that influence the cultural fabric of Assam: the Satras, the site of religious and cultural practice which have been in existence for over 400 years and and the Naamghar, the house of prayers. Villagers generally associate on the basis of membership of a local center of devotional worship called "Naamghar". Villages are usually made up of families from a number of distinct castes. In Assam, the caste system, although it exists, is not as prominent as in other parts of India. Other religions such as Buddhism, Christianity, Hinduism, Islam etc. are also practiced in Assam. The national festival of Assam is the Bihu which is celebrated in three parts during a year with great pomp and grandeur by all Assamese, irrespective of caste, creed or religion.

    </p></div>
	<div class="name" id="florafouna">Flora & Fauna</div>
	<hr/>
	<div class="pdheader">
	<p class="explain">
            Assam is gifted with varieties of flora and fauna including world famous the Great Indian One Horned Rhino, Pigmy Hog, Royal Bengal Tiger, Elephant, Swamp Deer, Gangetic Dolphin, Wild Buffalo, Golden Langur, Hoolock Gibbon, Stump-tailed Macaque and Pig-tailed Macaque, Hispid Hare etc. The birds found in Assam includes Greater Adjutant Stork, White winged wood duck, Bengal Florican, Spotbilled Pelican, Lesser Adjutant Stork, King Vulture, Great Hornbills, Long-billed and Spotted Wren-babblers, Large and Coral-billed Scimitar Babblers, Laughingthrush etc.

            Much of the state is covered with dense tropical forests of bamboo and, at higher elevations, evergreens. Many valuable trees like Sal, Agar, Segun, Bon Chom etc., found in these forests which help in economic development of the state.
            Erianthus is a tall hard reed that grows in loamy soil that gets flooded during the monsoon, whereas Arundo donax or the Giant Reed is found in areas that constantly remain wet. Monochoria haestefolia, a local species of water hyacinth grows in Assam as the whole valley is scattered with lakes, and hence, wetland. The valley is an important breeding ground for Greater and Lesser Adjutant Storks, both globally threatened species. Bombax or the Silk Cotton trees are seen in abundence and these cottons are used for making pillows. In the eastern part of the valley the gradual emergence of Alluvial Semi-evergreen Forest sometimes results in Tropical Wet Evergreen Forest.
        </p></div>
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