<?php include('C:\xampp\htdocs\WT\server2.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../sstyles.css">
		<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
		<title>Goa</title>
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
		<div class="name">Goa
		<p>--- Pearl of the Orient ---<p>
		</div>
		<br>
		<div class="slideshow-container">
			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
  			<img src="slideshowga1.jpg" style="width:100%">
 			</div>
			<div class="mySlides fade">
 			<div class="numbertext">2 / 3</div>
  			<img src="slideshowga2.jpg" style="width:100%">
			</div>
			<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="slideshowga3.jpg" style="width:100%">
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
					<p class="explain">Goa is a state in India within the coastal region known as the Konkan, in Western India.   It is bounded by Maharashtra to the north and Karnataka to the east and south, with the Arabian Sea forming its Western coast. It is India's smallest state by area and the fourth smallest by population. Goa has the highest GDP per capita among all Indian states,   that is two and a half times that of the country.   It was ranked the 'best placed State' by the "Eleventh Finance Commission" for its infrastructure and ranked on top for the 'best quality of life' in India by the National Commission on Population based on the 12 Indicators.

                        Panaji is the state's capital, while Vasco da Gama is its largest city. The historic city of Margao still exhibits the cultural influence of the Portuguese, who first landed in the early 16th century as merchants and conquered it soon thereafter. Goa is a former Portuguese province; the Portuguese overseas territory of Portuguese India existed for about 450 years until it was annexed by India in 1961.</p>
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
			<a href="#Panaji">
			<div class="container">
	  		<img src="ga1.jpg" class="image"/>
  			<div class="overlay">
    			<div class="text">Panaji</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Calangute">
	  		<img src="ga2.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Calangute</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Baga">
	  		<img src="ga3.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Baga</div>
  			</div>
			</div>
			</a>
			</div>
			</div>
			<div class="row">
			<div class="column">
			<div class="container">
			<a href="#Anjuna">
	  		<img src="ga4.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Anjuna</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Margao">
	  		<img src="ga5.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Margao</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Candolim">
	  		<img src="ga6.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Candolim</div>
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
		<div class="name" id="Panaji">Panaji... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Panaji, also known as Panjim, is the state capital of Goa, in southwest India. Located on the banks of the Mandovi River, the city has cobblestone streets lined with colorful villas an buildings from the Portuguese colonial era. Palm-fringed Miramar Beach sits at the confluence of the river and the Arabian Sea. Set on a hill overlooking the city is the baroque Our Lady of Immaculate Conception Church, built in 1619.
            Facing Miramar Beach, Goa Science Centre & Planetarium features interactive exhibits, model dinosaurs and an outdoor park. The riverside Kala Academy, a contemporary cultural complex, hosts dance and drama performances. Overlooking the water is the bright orange, hilltop Maruti Temple, dedicated to the Hindu monkey god Hanuman. To the east, the city of Velha Goa, or Old Goa, is home to colonial landmarks like the vast Se Cathedral and the Basilica of Bom Jesus, which holds the mortal remains of St. Francis Xavier.
        </p></div>
		<div class="name" id="Calangute">Calangute... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Calangute is a town in the western Indian state of Goa. Standing on the shores of the Arabian Sea, it’s home to long, sandy Calangute Beach, lined with restaurants and bars. Farther north, Baga Beach is a popular spot for water sports. To the south, the sturdy walls of Aguada Fort, built in the early 1600s under Portuguese colonial rule, surround a 19th-century lighthouse.
            Calangute Market Square, beside Calangute Beach, hosts a buzzing weekly market selling leather goods, colorful textiles and Tibetan handicrafts. Calangute’s whitewashed churches include the colonial-era St. Alex Church, featuring an ornate golden altarpiece. Farther inland in the village of Saligao, the 19th-century Nossa Senhora Mae de Deus Church is topped with rows of Gothic-style spires. Southeast of Saligao, Dr. Salim Ali Bird Sanctuary’s mangrove swamps are home to many species of migratory and wetland birds such as herons and sandpipers, as well as flying foxes and crocodiles.
        </p>
		</div>
		<div class="name" id="Baga">Baga... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Baga Beach is a popular beach and tourist destination in North Goa. Baga is located at the north end of the contiguous beach stretch that starts from Sinquerim, Candolim, leads to Calangute and then to Baga.

            The beach contains rows of shacks and fishing boats, and at high tide the beach is narrow.

            The beach is named after the Baga Creek, which empties into the Arabian Sea at the north end of the beach.

            Baga Beach is also famous for water sports such as parasailing and banana rides, and dolphin cruises. In Baga Beach, new parking has been constructed for around 800 cars or more, and there is baga creek bridge which connects northern part like Arpora, Anjuna etc..</p>
	</div>
		<div class="name" id="Anjuna">Anjuna... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Anjuna ([ɦɔɳzuɳẽ]) is a village located on the coast of North Goa, India. It is a Census Town, one of the twelve Brahmin comunidades of Bardez. It is mostly a tourist destination.

            Its church, St. Michael's Church, Anjuna, founded in 1595, is dedicated to S. Miguel, and celebrates the feasts of S. Miguel (29 September) and Nossa Senhora Advogada (second week of January). There are three large chapels in the parish: the one to S. Antonio (Praias), to Nossa Senhora de Saude (Mazalvaddo), and to Nossa Senhora de Piedade (Grande Chinvar). The chapel at Vagator became the church of the new parish of Vagator, dedicated to S. Antonio, in the twentieth century.
        </p>
	</div>

		<div class="name" id="Margao">Margao... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Margao or Margão or Madagav is the second largest city by population, and the commercial and cultural capital of the Indian state of Goa. It is the administrative headquarters of Salcete sub-district and South Goa district.
            Margao is a city in the western Indian state of Goa. Its Portuguese colonial past is evident in buildings like the 1675 baroque Holy Spirit Church, with its ornate interior and pipe organ. Sat Burzam Ghor is a grand 1700s mansion with 3 of its original 7 gables remaining. Margao Municipal Garden includes the colonial Municipal Building and library. Southwest, in Benaulim, the Goa Chitra Museum exhibits ancient tools.

        </p></div>
		<div class="name" id="Candolim">Candolim... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Candolim is a small town in the western Indian state of Goa. Standing on the shores of the Arabian Sea, it’s known for Candolim Beach and, to the north, lively Calangute Beach. In the south, the sturdy walls of Aguada Fort, built in the early 1600s under Portuguese colonial rule, surround a 19th-century lighthouse. The whitewashed, centuries-old Church of St. Lawrence stands on a nearby hill.
                Candolim lies 15 kilometres from Panjim, the Goan capital, in northern Goa. Beginning at Fort Aguada and merging with Calangute Beach towards the end, it is one of the longest beaches in the state. The beach in itself is very calm and peaceful, at times tourists come here from Rajneesh Ashram in Pune to take a break. What adds to the scenic beauty of the sand and sea are the scrub-covered dunes at the back of the beach, quite popular with tourists.


                A panoramic view of sunset at Candolim Beach in 2018.
                The main Candolim-Calangute Road is packed with shops and restaurants, but the beach front is rather free of any commercial activity apart from some water activities. Though the beach is close to bustling Calangute Beach, life is rather laid back at Candolim. Even the village is not very clustered, it is quite spread out so there is not any proper centre to it as such. The area around the beach can be termed as resort free as there aren't any resorts there. However, the beach has quite a number of inns at reasonable prices with good facilities.
        </p>
	</div>
	<div class="name" id="food">Cuisine... </div>
	<hr/>
	<div class="pdheader">
	<p class="explain">
            Goan cuisine consists of regional foods popular in Goa, an Indian state located along India's west coast on the shore of the Arabian Sea. Rice, seafood, coconut, vegetables, meat, pork and local spices are some of the main ingredients in Goan cuisine. The area is located in a tropical climate, which means that spices and flavors are intense. Use of kokum is another distinct feature. Goan food is considered incomplete without fish. It is similar to Malvani or Konkani cuisine.

            The cuisine of Goa is originated from its Hindu roots, and influenced by the 451 years of Portuguese colonialisation and the century of Muslim rule that preceded the Portuguese.  Many Catholic dishes are either similar to or variants of their Portuguese counterparts in both naming or their use of ingredients.
    </p>
	</div>
	<div class="name" id="culture">Culture... </div>
	<hr/>
	<div class="pdheader">
	<p class="explain">Goa, a former Portuguese colony, is called 'Rome of the East'. It is considered as the most westernized state of Indian Territory as the inhabitants of Goa adopted western culture. Goa is enriched with cultural heritage that include folk songs, dances, music, visual arts and folk tales. The Goans are fond of football. Environmental issues are prominently featured in Goa.

            It is known as a multi-ethnic state with a majority of Hindu and Muslim along with Catholic minority. They live in perfect harmony and participate in each others’ religious festivals. Goa is famous for its Indo-Latin festivals especially the carnivals, witnessed by numerous people every year. Other popular festivals observed in Goa are Shigmo- the spring festival and Shivaratri. New Year is celebrated in Goa with great pomp and show.
        	</p></div>
	<div class="name" id="florafouna">Flora & Fauna</div>
	<hr/>
	<div class="pdheader">
	<p class="explain">
            Forest cover in Goa is diverse. Goa is India's smallest state terms of area and the fourth smallest in terms of population. Goa is located on the west coast of India in the region known as the Konkan Forest cover in Goa stands at 1,424 km², most of which is owned by the government. Government owned forest is estimated at 1224.38 km² whilst private is given as 200 km². Most of the forests in the state are located in the interior eastern regions of the state. The Western Ghats, which form most of eastern Goa, have been internationally recognised as one of the biodiversity hotspots of the world. In the February 1999 issue of National Geographic Magazine, Goa was compared with the Amazon and Congo basins for its rich tropical biodiversity.

            Goa's state animal is the Gaur, the state bird is the Ruby-throated yellow Bulbul , which is a variation of Black-crested Bulbul, and the state tree is the Matti.

            The important forests products are bamboo canes, Maratha barks, chillar barks and the bhirand. Coconut trees are ubiquitous and are present in almost all areas of Goa barring the elevated regions. A large number of deciduous vegetation consisting of teak, sal, cashew and mango trees are present. Fruits include jackfruits, mangos, pineapples and blackberries.

    </p></div>

		<br>
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
