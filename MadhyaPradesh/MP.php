<?php include('C:\xampp\htdocs\WT\server2.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../sstyles.css">
		<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
		<title>Madhya Pradesh</title>
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
		<div class="name">Madhya Pradesh
		<p>--- The Heart of Incredible India---<p>
		</div>
		<br>
		<div class="slideshow-container">
			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
  			<img src="slideshow11.jpg" style="width:100%">
 			</div>
			<div class="mySlides fade">
 			<div class="numbertext">2 / 3</div>
  			<img src="slideshow12.jpg" style="width:100%">
			</div>
			<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="slideshow13.jpg" style="width:100%">
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
		<p class="explain">Madhya Pradesh, a large state in central India, retains landmarks from eras throughout Indian history. Begun in the 10th century, its Hindu and Jain temples at Khajuraho are renowned for their carvings of erotic scenes, most prominently Kandariya Mahadeva, a temple with more than 800 sculptures. The eastern Bandhavgarh and Kanha national parks, noted Bengal tiger sanctuaries, offer guided safaris.</p>
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
			<a href="#Bhopal">
			<div class="container">
	  		<img src="mp1.jpg" class="image"/>
  			<div class="overlay">
    			<div class="text">Bhopal</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Gwalior">
	  		<img src="mp2.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Gwalior</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Indore">
	  		<img src="mp3.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Indore</div>
  			</div>
			</div>
			</a>
			</div>
			</div>
			<div class="row">
			<div class="column">
			<div class="container">
			<a href="#Ujjain">
	  		<img src="mp4.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Ujjain</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Jhansi">
	  		<img src="mp5.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Jhansi</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Jabalpur">
	  		<img src="mp6.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Jabalpur</div>
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
		<div class="name" id="Bhopal">Bhopal... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Bhopal is a city in the central Indian state of Madhya Pradesh. It's one of India’s greenest cities. There are two main lakes, the Upper Lake and the Lower Lake. On the banks of the Upper Lake is Van Vihar National Park, home to tigers, lions and leopards. The State Museum has fossils, paintings and rare Jain sculptures. Taj-ul-Masjid is one of Asia’s largest mosques, with white domes, minarets and a huge courtyard.
                At the Madhya Pradesh Tribal Museum, models of village houses are adorned with traditional wall art. Gohar Mahal palace was built by Bhopal’s first female leader in 1820, with a mix of Hindu and Mughal architecture. It now houses a handicraft market. Local crafts and fabrics are sold in the narrow lanes of the traditional Chowk bazaar. Bharat Bhavan is a center for performing and visual arts. The Remember Bhopal Museum has displays related to the chemical leak that occurred in 1984, curated by survivors of the disaster. Northeast of the city, the ancient site of Sanchi has a collection of ancient Buddhist monuments. </p></div>
		</div>
		<div class="name" id="Gwalior">Gwalior... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Gwalior (or Mysuru), a city in India's southwestern Karnataka state, was the capital of the Kingdom of Gwalior from 1399 to 1947. In its center is opulent Gwalior Palace, seat of the former ruling Wodeyar dynasty. The palace blends Hindu, Islamic, Gothic and Rajput styles. Gwalior is also home to the centuries-old Devaraja Market, filled with spices, silk and sandalwood.
            The Jaganmohan Palace, a Wodeyar structure in traditional Hindu style, displays an extensive collection of South Indian art. St. Philomena's Church is a grand, Neo-Gothic-style Catholic church featuring 53m-tall twin spires. Standing atop Chamundi Hills outside the city, Chamundeshwari Temple is an intricate Hindu shrine believed to date back to the 12th century. At the base of Chamundi Hills, picturesque Karanji Lake is a habitat for numerous bird species. Further afield, Brindavan Gardens offers a vast spread of landscaped gardens, blooms and trees, as well as a boating lake and a musical fountain.</p>
		</div>
		<div class="name" id="Indore">Indore... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Indore is a city in west-central India. It’s known for the 7-story Rajwada Palace and the Lal Baag Palace, which date back to Indore’s 19th-century Holkar dynasty. The Holkar rulers are honored by a cluster of tombs and cenotaphs at Chhatri Baag. The night market Sarafa Bazar sells street food. East is the Indo-Gothic Gandhi Hall and clock tower. The Jain temple Kanch Mandir has a mirrored mosaic interior.
                Inside the Bada Ganpati temple is an immense, brightly painted statue of Ganesh, the Hindu elephant god. The Central Museum is filled with medieval Hindu and Jain sculptures. In the city's southwest, 4 life-size elephant statues hold up the decorative gateway to Annapurna Temple. Northwest of Indore is Gomatgiri, a set of Jain temples with a statue of Gomateshwara, a revered figure in Jainism. Chokhi Dhani, a re-creation of a Rajasthani village, offers traditional food, plus activities like camel rides and puppet shows.
                 Farther southwest is Patal Pani, a waterfall that roars down from a huge height.</p></div>
	<div class="name" id="Ujjain">Ujjain... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Ujjain is an ancient city beside the Kshipra River in the central Indian state of Madhya Pradesh. An important Hindu pilgrimage destination, it’s known for the centuries-old Mahakaleshwar Temple, a towering structure with a distinctively ornate roof. Nearby, Bade Ganesh Temple houses a colorful statue of Ganesh, the elephant-headed Hindu deity. Harsiddhi Temple features a pair of tall dark pillars studded with lamps.
                The large Chintaman Ganesh Temple has a Ganesh idol, and features carved pillars in its assembly hall. Ram Ghat is an ancient bathing place that attracts devotees during the Kumbh Mela festival. North of town, worshippers leave offerings of alcohol at the shrine in Kal Bhairav Temple, which has traces of Malwa-style miniature paintings. Nearby, on a small hill, the Mangalnath Temple is dedicated to the planet Mars. The Ved Shala observatory, west of the center, was built in the 18th century and features instruments used for astronomical calculations.
                 The ISKCON Temple is a huge marble complex surrounded by landscaped gardens.</p></div>
	<div class="name" id="Jhansi">Jhansi... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Jhansi is a historic city in the Indian state of Uttar Pradesh. It lies in the region of Bundelkhand on the banks of the Pahuj River, in the extreme south of Uttar Pradesh. Jhansi is the administrative headquarters of Jhansi district and Jhansi division. Called the Gateway to Bundelkhand, Jhansi is situated between the rivers Pahuj and Betwa at an average elevation of 285 metres. It is about 415 kilometres from New Delhi and 99 kilometres south of Gwalior. The original walled city grew around its stone fort which crowns a neighbouring rock. The ancient name of the city was Balwantnagar. From 1817 to 1854, Jhansi was the capital of the princely state of Jhansi which was ruled by Maratha rajas. The state was annexed by the British Governor General in 1854; Damodar Rao's claim to the throne was rejected but Rani Lakshmibai ruled it from June 1857 to June 1858. Jhansi is well connected to all other major towns in uttar Pradesh by road and railway networks.
             The National Highways Development Project has supported development of Jhansi.</p>
	</div>
		<div class="name" id="Jabalpur">Jabalpur... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Jabalpur is a city in the central Indian state of Madhya Pradesh. On a rocky hilltop on the western outskirts of the city is the Madan Mahal Fort, built in 1116. Farther west, the centuries-old Pisanhari Ki Madiya Jain temple offers views of the city. Another Jain temple, Hanumantal Bada Jain Mandir, sits on the shore of a lake in the north. The central Rani Durgavati Museum displays intricately carved sculptures.
                The Narmada River flows past Jabalpur’s southern fringes. Mahatma Gandhi’s ashes were immersed in the river at Tilwara Ghat, southwest of the city. The ancient Chausath Yogini Temple, dedicated to the Hindu goddess Durga, overlooks the Marble Rocks gorge area of the Narmada. Close by, the river plunges over Dhuandhar Waterfall. To the east, Dumna Nature Reserve is inhabited by spotted deer, monkeys and wild boars. Jabalpur is a gateway to Kanha Tiger Reserve, in the south, which shelters tigers as well as leopards, jackals and numerous bird species. </p>
</div>
		<div class="name" id="food">Cuisine... </div>
<hr/>
<div class="pdheader">
<p class="explain">Madhya Pradesh's love for poha is widely known, but that's not all the central state of India has to offer. Make a trip to the region and you will soon learn that it is a food haven for vegetarians and non-vegetarians alike, and the passion for food runs deep in the veins of its people. It is not at all surprising to walk down a narrow lane and find yourself losing all inhibitions and indulging in crisp jalebis, piping hot samosas with tangy chutney, Khasta Kachori, or the most-loved local street food - Bhutte Ka Kees (corn kernels cooked with milk and spices).

        If you are a street food lover then Indore is bound to lure you into its spell. Here, there is a street called Sarafa which is dedicated to serving lip-smacking snacks, namkeen, chaats and decadent sweets like Khopra Pak, Peda, Lavang Lata, Kusli, Malpua, Rabdi and Imarti till 2 at night! These local delicacies can also be savoured in nooks and corners of other cities such as Bhopal, Ujjain, Khandwa, Gwalior, etc.</p>
</div>
<div class="name" id="culture">Culture... </div>
<hr/>
<div class="pdheader">
<p class="explain">Madhya Pradesh is the heart of India. It doesn't matter whether you are an art admirer, food fanatic, dancing dazzler or a jewellery junkie, this place is your dream pilgrim. The land jewellery by the rich states of Rajasthan, Gujarat, Uttar Pradesh, Maharashtra, and Chhattisgarh. Apparently, a blend of all cultures was meant to colour in the state. Originally known as Malwa, the place has nurtured some epic rulers and warriors as well, like Emperor Ashoka, Chandragupta, Vikramaditya, Harsha Vardhan, Raja Bohoj and many others. A long, revealing history forged by these great men is preserved in book and ink.

        The residents here are very generous as well; they will not mind giving you a lift to your hotel, just ask once. The place has a subtropical climate, much like the North India. The state has an intact connectivity with railway and airways; tourist would not find travel distress of any sorts.
	</p></div>
<div class="name" id="florafouna">Flora & Fauna</div>
<hr/>
<div class="pdheader">
<p class="explain">As the state has a variety in its topographical feature, the state's flora and fauna varies from place to place. In the mountain range of Satpura and Maikala, trees like Teak, Sal and Bamboo are some of the varieties found in abundance. These also are the important commercial variety of flora of the state.

        Moreover, the state has a rich store of wildlife. The state being the host of a good number of wildlife sanctuaries, like the Kanha Wildlife Sanctuary, Shivpuri, Bandhavgarh and Rewa have some of the rare species of wildlife of the country. The Barasingha or Swamp Deer, Bison and the White Tiger (albinotic) are some of the wildlife found here.</p></div>

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
