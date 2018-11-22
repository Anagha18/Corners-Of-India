<?php include('C:\xampp\htdocs\WT\server2.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../sstyles.css">
		<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
		<title>Manipur</title>
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
		<div class="name">Manipur
		<p>--- The Jewel Of India---<p>
		</div>
		<br>
		<div class="slideshow-container">
			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
  			<img src="slideshowmr1.jpg" style="width:100%">
 			</div>
			<div class="mySlides fade">
 			<div class="numbertext">2 / 3</div>
  			<img src="slideshowmr2.jpg" style="width:100%">
			</div>
			<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="slideshowmr3.jpg" style="width:100%">
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
		<p class="explain">Manipur (/ˈmʌnɪpʊər/) is a state in Northeast India, with the city of Imphal as its capital.   It is bounded by Nagaland to the north, Mizoram to the south, and Assam to the west; Burma (Myanmar) lies to its east. The state covers an area of 22,327 square kilometres (8,621 sq mi) and has a population of almost 3 million, including the Meitei, who are the majority group in the state, Loi, Yaithibi, Kuki, and Naga peoples, who speak a variety of Sino-Tibetan languages. Manipur has been at the crossroads of Asian economic and cultural exchange for more than 2,500 years.   It has long connected the Indian subcontinent to Southeast Asia and China, enabling migration of people, cultures, and religions.

            During the Raj, the Kingdom of Manipur was one of the princely states.   Between 1917 and 1939, the people of Manipur pressed for their rights against British rule. By the late 1930s, the princely state of Manipur negotiated with the British administration its preference to be part of India, rather than Burma. These negotiations were cut short with the outbreak of World War II. On 11 August 1947, Maharaja Budhachandra signed the Instrument of Accession, joining India.Later on 21 September 1949, he signed a Merger Agreement, merging the kingdom into India.</p>

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
			<a href="#Imphal">
			<div class="container">
	  		<img src="mr1.jpg" class="image"/>
  			<div class="overlay">
    			<div class="text">Imphal</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Loktak Lake">
	  		<img src="mr2.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Loktak Lake</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Moreh">
	  		<img src="mr3.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Moreh</div>
  			</div>
			</div>
			</a>
			</div>
			</div>
			<div class="row">
			<div class="column">
			<div class="container">
			<a href="#Moirang">
	  		<img src="mr4.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Moirang</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Ukhrul">
	  		<img src="mr5.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Ukhrul</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Andro">
	  		<img src="mr6.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Andro</div>
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
		<div class="name" id="Imphal">Imphal... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Imphal is the capital of Manipur, a state in northeastern India. On the Imphal River, Kangla Fort was once the seat of local rulers, and now houses relics. On the south side of the centuries-old Polo Ground, Manipur State Museum has displays including tribal artifacts and a large royal boat. Next to the former Royal Palace, Shri Shri Govindaji Temple has twin domes, a large hall and shrines to Hindu gods.
            Shaheed Minar is a soaring white monument dedicated to the tribal people who died while fighting the British in 1891. The nearby Ima Keithel market, run solely by women, has hundreds of stalls selling fresh produce, household goods and handicrafts. North of the city center, the War Cemetery commemorates British and Indian soldiers who died in WWII. Southeast, in the village of Andro, the Mutua Museum exhibits arts and crafts from northeastern India, plus replicas of tribal houses. To the south, set on Loktak Lake, Keibul Lamjao National Park is a natural habitat for the rare Sangai deer. The park is also home to migratory birds.
        </p></div>
		<div class="name" id="Loktak Lake">Loktak Lake... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Loktak Lake is the largest freshwater lake in Northeast India and is famous for the phumdis (heterogeneous mass of vegetation, soil and organic matter at various stages of decomposition) floating over it. The lake is located near Moirang in Manipur state, India.   The etymology of Loktak is Lok = "stream" and tak = "the end".   The largest of all the phumdis covers an area of 40 km2 (15 sq mi) and is situated on the southeastern shore of the lake. Located on this phumdi, Keibul Lamjao National Park is the only floating national park in the world. The park is the last natural refuge of the endangered Sangai (state animal), Rucervus eldii eldii or Manipur brown-antlered deer (Cervus eldi eldi), one of three subspecies of Eld's deer.

            This ancient lake plays an important role in the economy of Manipur. It serves as a source of water for hydropower generation, irrigation and drinking water supply. The lake is also a source of livelihood for the rural fishermen who live in the surrounding areas and on phumdis, also known as “phumshongs”. Human activity has led to severe pressure on the lake ecosystem. 55 rural and urban hamlets around the lake have a population of about 100,000 people.Considering the ecological status and its biodiversity values, the lake was initially designated as a wetland of international importance under the Ramsar Convention on 23 March 1990.   It was also listed under the Montreux Record on 16 June 1993, "a record of Ramsar sites where changes in ecological character have occurred, are occurring or are likely to occur".
        </p></div>
		<div class="name" id="Moreh">Moreh... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Moreh is a town located on the India-Myanmar border in the Tengnoupal district of the Indian state of Manipur. The town is mainly inhabited by Kuki , Tamil, Nepali, Meitei, Punjabi, Telugu, Bihari, Marwari and Muslim Pangals. Official language is Meitei and Kuki. Moreh plays a very important role in connection with the India-Myanmar relationship and is also a rapidly developing trade point in India on the border with Myanmar,   with the city of Tamu on the other side of the border.

            Moreh is already a huge commercial hub, and economists suggested that it could become a bustling city in the next couple of decades. The town is already seen as the commercial capital of Manipur and India's Gateway to South-East Asia.

            In 2007, according to The Economist, Moreh was to gain a branch railway via Imphal.

            The Indo-Myanmar Friendship Bridge in Moreh connects India to Kalewa in Myanmar's Sagaing Division. The highway on the Myanmar side is intended to run up to Mandalay but it is in bad shape. Indian planners hope the rail link to Moreh will eventually be connected to the Myanmar railway system, allowing onward connectivity to Thailand and China.
        </p></div>
	<div class="name" id="Moirang">Moirang... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Moirang is a small town in the Indian state of Manipur. It is situated approximately 45 km south of the state capital Imphal. It has an area of 269 km2 with a population of 62,187 (BPL Survey) in 67 villages.

            Loktak Lake, the biggest fresh water lake in the North East Indian region and Keibul Lamjao National Park are situated in this district. There are 12 Gram Panchayats in this block.
            Historically, the town of Moirang is famous for the ancient temple of the pre-Hindu deity, Lord Thangjing and the minor love story of "Khamba Thoibi". In a village name Ngangkhaleikai, the old cloth used by Khamba and Nongban are still preserved. The epic story of "Khamba-Thoibi" begins between a beautiful princess name Thoibi daughter of King Chinkhuba and an orphan boy name Khamba. Khamba is a bit younnger to Thoibi (As the story narrate Khamnu the elder's sister of Khamba was happened to be Thoibi's close mate). Khamba was raised up by her own sister when both their parent died at their very young age.
        </p></div>
	<div class="name" id="Ukhrul">Ukhrul... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Ukhrul/Hunphun is a town in Ukhrul district in the state of Manipur, India. Ukhrul district is the home of the Tangkhul Naga. It is the administrative headquarters of the Ukhrul district. There are also four sub-divisions in the district for administering the villages in and around it. The villages, however, are governed by the 'village heads'.
            Ukhrul is a land of beautiful mountains interspersed by numerous tribal inhabitants echoing with the rhythms of tribal cultures and rich wild life. This virgin land has enchanting calls to people who love to spend time in tranquility. Besides the serene environment, the ways of life of the simple and friendly tribals who have been known for generations for their honesty and integrity leave one spellbound. Such are the people of the hill.

        </p>
	</div>
		<div class="name" id="Andro">Andro... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Andro is a town and a nagar panchayat in Imphal East district in the state of Manipur, India. Andro is an earmarked Scheduled Caste village which has been developed to represent the cultural heritage and artful creativeness of the Manipuri tribes. Located at distance of 25 km towards east of Imphal Andro creates an authentic Manipuri village along with the cultural complex established and run by the Mutua Museum Imphal. This complex encompasses varieties of pottery creations from north eastern India. The doll house of the complex has been imaginatively developed by displaying 29 different types of dolls that represent the cross cultural mix of Manipuri tribes across the region. Authentic Manipuri pottery can be purchased and even a few tricks of trade can be learned at the village. Andro is a small hamlet located towards the east of Imphal and is popularly known for its pottery. This village is home to the Andro Gramshang Museum, which comprises different varieties of traditional pots namely, Pudond Makhong, Walom, Ngangkha and Yukhum. Among other varieties are Wangkham, Kambi, Kambi Makhong Panba and Eshaiphu.Pottery can only be done by the married women of Andro.

        </p></div>
		<div class="name" id="food">Cuisine... </div>
<hr/>
<div class="pdheader">
<p class="explain">Eromba- Vegetables boiled or steamed with a lot of red chillies or umorok (king chilli) with ngari (fermented fish), smoked or roasted fish and mashed together. "U-morok" – literally ‘tree chilli’ u = tree; morok = chilli. It is garnished with herbs like maroi ( maroi nakuppi, phakpai, mayang-ton, toning-khok, kaanghumaan, lomba, tilhou, chaantruk, coriander leaves and many more).

    Singju is a salad which may be prepared with finely chopped banana stem, laphu tharo (banana flower), cabbage, lotus stem, komprek (a kind of scented herb), kollamni (another herb), tree beans, coriander leaves, sinju pan, ginger, heibi mana and lots of seasonal vegetables mixed with ngari. Boiled kidney beans are optional and the dish is seasoned with red chilli flakes, salt to taste, with roasted sesame powder and roasted chick pea powder.
    Chamthong or Kangshoi is a stew of any seasonal vegetables with coarsely chopped onions or spring onion, maroi - both yennam nakuppi and napakpi, ginger, ngari and salt, topped with ngari,   dried fish, or fried fish pieces and water. It is soupy in consistency and is eaten with rice.

	</p></div>
<div class="name" id="culture">Culture... </div>
<hr/>
<div class="pdheader">
<p class="explain">Ham-Khoi Tangkhul Dance

    Manipur is a mosaic of ancient traditions and rich cultural patterns. In the field of art and culture, the State is best represented by its classical and folk dance forms. Raas Leelas depict the Leelas (Sports) of Lord Krishna as a child with Gopies (Milkmaids) of Brindavan,

    and express their yearning for communion with the “Lord”.
    The Raas Dance is perfectly lyrical and has extremely graceful movements. A spring festival, the “Lai-Haraoba” held in April-May is symbolized by a traditional stylized and ritualistic dance performed for peace and prosperity.
</p></div>
<div class="name" id="florafouna">Flora & Fauna</div>
<hr/>
<div class="pdheader">
<p class="explain">Blessed with an amazing variety of flora and fauna, 67% of the geographical area of Manipur is hill tract covered forests. Depending on the altitude of hill ranges, the climatic condition varies from tropical to sub-alpine. The wet forests and the pine forests occur between 900-2700 m above MSL and they together sustain a host of rare and endemic plant and animal life. Coveted the world over as some of the most beautiful and precious blooms, orchids have an aura of exotic, mysteries about them.
    In Manipur, they are abound in their natural habitat growing in soil or on trees and shrubs speaking their beauty and colour, stunning the eye that is not used to seeing them. in such profusion. There are 500 varieties of orchids which grow in Manipur of which 472 have been identified
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
