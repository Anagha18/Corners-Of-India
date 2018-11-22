<?php include('C:\xampp\htdocs\WT\server2.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../sstyles.css">
		<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
		<title>West Bengal</title>
		
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
		<div class="name" class="name">West Bengal
		<p>--- Beautiful Bengal ---<p>
		</div>
		<br>
		<div class="slideshow-container">
			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
  			<img src="ss101.jpg" style="width:100%">
 			</div>
			<div class="mySlides fade">
 			<div class="numbertext">2 / 3</div>
  			<img src="ss102.jpeg" style="width:100%">
			</div>
			<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="ss103.jpg" style="width:100%">
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
		<p class="explain" style="font-size:24px;font-family:comic sans ms">West Bengal boasts of different ethnicities, cultures, religions, people and languages which add to this beautiful landscape, forests, coastal beauty, heritage.

The beautiful state of West Bengal attracts a great number of tourists every year as the state is jewelled with mesmerising landscapes, snow-clad mountains, gushing sea, blossoming tea gardens, huge deltas, lush green forests, plentiful wildlife, ancient temples and magnificent British monuments. Tiger Hill, Howrah Bridge, Tea Gardens are some of the famous tourist spots which offer an insight into the vast culture and history of the State. The culture of the state is adorned by colourful fairs and festivals for every month. A vast number of famous pilgrimages also attract a large number of tourists of all faiths and beliefs.</p>
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
	  		<img src="dar.jpg" class="image"/>
  			<div class="overlay">
    			<div class="text">Darjeeling</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#two">
	  		<img src="kol.jpeg" class="image">
  			<div class="overlay">
    			<div class="text">Kolkatta</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#three">
	  		<img src="dig.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Digha</div>
  			</div>
			</div>
			</a>
			</div>
			</div>
			<div class="row">
			<div class="column">
			<div class="container">
			<a href="#four">
	  		<img src="sil.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Siliguri</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#five">
	  		<img src="sun.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Sundarbans</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#six">
	  		<img src="doo.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Dooars</div>
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
	  		<img src="cui11.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Cuisine</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#culture">
			<div class="container1">
	  		<img src="cul11.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Culture</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#floraandfauna">
			<div class="container1">
	  		<img src="flo11.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Flora & Fauna</div>
  			</div>
			</div>
			</a>
			</div>
		</div></center>
		<br>
		<div class="name" id="one">Darjeeling... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Jaw-dropping locales, mesmerising sunrises, the untouched beauty of the hills, the old-world charm of the past, and the welcoming smiles of the local people all add up to make Darjeeling one of the most beautiful hill stations in Eastern part of India. Spread over a steep mountain ridge, nestled amidst acres of lush green tea plantations, Darjeeling stands at the height of 2,050 meters above sea level, thus boasting of cool climes all year round. This scenic hill station is the perfect getaway for a romantic honeymoon and is just around 700 kilometres away from Kolkata.

A respite from the hot and humid summers of India, Darjeeling is a popular tourist destination in North-East India. Providing a heady mixture of splendid tea gardens on rolling mountain slopes, meandering toy train rides through the picturesque city, and delectable traditional Tibetan cuisine, Darjeeling works wonders to cater to the gorgeous panorama of the Himalayas.</p>
	</div>
		<div class="name" id="two">Kolkatta... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Kolkata, India's second biggest city, is a perpetually ongoing festival of human existence, concurrently luxurious and squalid, refined and frantic, pointedly futuristic, while beautifully in decay. A vibrant 350-year-old metropolis located on India's Eastern Coast, the capital of West Bengal thrives on contradictions and imposing spectacles; nothing is commonplace in this city. Famously known as the City of Joy, Kolkata is, in every sense, the artistic, cultural and intellectual capital of the country. Kolkata's streets are vivid, hectic, chaotic, and yet, brimming with life and creativity. Driven by the indomitable spirit of the self-made middle class, the city has created a beautiful juxtaposition of the old colonial-era charm with the nascent upcoming hipster culture that thrives amongst the city's millennial residents.

Starting from admiring the flourishing art scene in the city to going on rewarding gastronomical explorations to wandering amidst the countless bazaars to sitting by the banks of the Hooghly and enjoying a peaceful sunset, Kolkata is soaked in layers and layers of heritage and culture, and peeling off each layer to look beneath the hood is a very rewarding, once-in-a-lifetime experience. As the famous quote goes, "If you want a city with a soul, come to Calcutta".
</p>
	</div>
		<div class="name" id="three">Digha... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Beach town situated on the shores of Bay of Bengal, Digha is a popular tourist destination known for its untouched beaches and scenic views, especially among people in West Bengal.

Digha is a one-stop destination for families looking forward to spend a pleasurable weekend. One of the best features of this hamlet is its varied and diverse tourist attraction spots. Known for its magnificent beaches, religious temples and high-tech research centers and museums, this most popular sea resort of West Bengal has a lot to offer for people of all age groups. Digha's sceneries can also offer you the pleasure experienced in witnessing areas that have minimal human impact and are relatively untouched.</p>

</div>
		<div class="name" id="four">Siliguri... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Situated on the banks of the river Mahananda, Siliguri is a tiny hill station nestled in between the Himalayan foothills and the Doar region of West Bengal. Also known as the Gateway to North East India, Siliguri serves mainly as a base for tourists to camp in before moving out to explore nearby tourist attractions such as Kalimpong, Darjeeling and Gangtok. However, Siliguri itself is a perfectly good holiday destination, with sufficient things to see and do.

The Jaldapara National Park, situated on the banks of the Torsa river is a prime attraction of Siliguri. Earlier known as the Jaldapara Wildlife Sanctuary, the park is spread over an area of around 215 kilometres, and is comprised of riverine forests as well as grasslands. The park is famous for its impressive population of Royal Bengal Tigers, elephants, one-horned rhinoceros, and various other species of deer. To get the best out of the park, you can go for an elephant ride, which will give you a chance to catch a glimpse of the animals up close.</p>

</div>
		<div class="name" id="five">Sundarbans... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Known for hosting the biggest mangrove forests in the world, Sundarbans National Park is located in West Bengal, India. It is also a Tiger Reserve and a Biosphere reserve that provides a complete nature's circle to the tourist right from 'Royal Bengal tigers' to roaring rivers and beautiful estuaries. Sundarbans National Park is a part of Sundarban delta that is covered with Mangrove Forest and the largest population of the Bengal Tigers. It is a UNESCO world heritage site with a large variety of birds and reptiles including salt-water crocodile.

Shared between India and Bangladesh, the Sundarbans meaning beautiful forest, have been declared a UNESCO heritage site. This area has a silent charm that manages to amaze one with the simplicity and naturalness of its ecological balance in spite of offering habitat to some of the most dynamic and awe-inspiring flora and fauna. They are in fact the last remaining stands of the mighty jungles which once covered the Gangetic plain and the sustainability of this natural structure is pretty majestic. Since 1966, the Sundarbans have been a wildlife sanctuary, and it is estimated that there are over 400 Royal Bengal Tigers and about 30, 000 spotted deer in the area.</p>

</div>
		<div class="name" id="six">Dooars... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Starting from river Teesta in the East to river Sankoshi in the west, Dooars is a local name given to the floodplains of North-East India around Bhutan. The name 'Dooars' has emerged from 'door' as Dooars is the gateway to Bhutan.

Dooars comprises of several towns and districts in this region including Jalpaiguri, Darjeeling, Siliguri, etc. Geographically, Dooars is blessed with such brilliance in its relief, imagine, the mighty range of mountains of the Eastern Himalayas in the backdrop, a band of thick forests, rich in species of Flora and Fauna, continued with tea gardens, and cut here and there by water body. Somewhere in the middle of all this is Dooars. The gateway you wouldn't want to cross heartlessly.</p>

	</div>
		<br>
		<div class="name" id="food">Cuisine... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Bengali cuisine is a culinary style originating in Bengal, a region in the eastern part of the Indian subcontinent, which is now divided between Bangladesh and the Indian states of West Bengal, Tripura and Assam's Barak Valley. With an emphasis on fish, vegetables and lentils are served with rice as a staple diet.

Bengali cuisine is known for its subtle (yet sometimes fiery) flavours, and its spread of confectioneries and desserts. It also has the only traditionally developed multi-course tradition from the Indian subcontinent that is analogous in structure to the modern service à la russe style of French cuisine, with food served course-wise rather than all at once.

</p>

	</div>
		<br>
		<div class="name" id="culture">Culture... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">The culture of West Bengal is an Indian Culture which has its roots in the Bengali literature, music, fine arts, drama and cinema. Different geographic regions of West Bengal have subtle as well as more pronounced variations between each other, with Darjeeling Himalayan hill region and Duars showing particularly different socio-cultural aspects.

West Bengal's capital Kolkata—as the former capital of India—was the birthplace of modern Indian literary and artistic thought, and is referred to as the "cultural [or literary] capital of India". The presence of paras, which are cluster of neighbourhoods that possess a strong sense of community, is characteristic of West Bengal. Typically, each para has its own community club and, on occasion, a playing field. Residents engage in addas, or leisurely chats, that often take the form of freestyle intellectual conversation. However, with the growth of apartments, expansion of neighbourhoods and rapid urbanization, this culture is on decline. Adda is very common among the old peoples. West Bengal has a long tradition of popular literature, music and drama largely based on Bengali folklore and Hindu epics and Puranas.

Religion, specially Hinduism, the principal and predominant religion of the state, plays a vital role in the culture of West Bengal. Durga Puja, a five-day annual autumnal celebration in honour of Hindu goddess Durga, is the biggest festival of majority Bengali Hindus. Since Bengal is a part of India, its culture has been an amalgamation of predominant Hindu culture with the secular Bengali culture which have drawn its inspiration from the modern Western culture.

</p>

	</div>
		<br>
		<div class="name" id="floraandfauna">Flora & Fauna... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Holding the different ecosystems prevalent in mountainous forests and mangroves, West Bengal boasts of a high diversity in resident flora and fauna. From Himalayan endemics to species that can only thrive in pristine mangrove systems.

The sensitive ecosystems in West Bengal are evolving to this day. The distribution of vegetation in northern West Bengal is dictated by elevation and precipitation. For example, the foothills of the Himalayas, the Dooars, are densely wooded with sal and other tropical evergreen trees. Above an elevation of 1,000 metres (3,300 ft), the forest becomes predominantly subtropical. In Darjeeling, which is above 1,500 metres (4,900 ft), temperate forest trees such as oaks, conifers, and rhododendrons predominate.3.26% of the geographical area of West Bengal is protected land, comprising fifteen wildlife sanctuaries and five national parks – Sundarbans National Park, Buxa Tiger Reserve, Gorumara National Park, Neora Valley National Park, and Singalila National Park. Extant wildlife include Indian rhinoceros, Indian elephant, deer, leopard, gaur, tiger, and crocodiles, as well as many bird species. Migratory birds come to the state during the winter. The high-altitude forests of Singalila National Park shelter barking deer, red panda, chinkara, takin, serow, pangolin, minivet, and kalij pheasants.</p>

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
