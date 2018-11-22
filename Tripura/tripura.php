<?php include('C:\xampp\htdocs\WT\server2.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../sstyles.css">
		<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
		<title>Tripura</title>
		
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
		<div class="name" class="name">Tripura
		<p>--- Amazing Tripura ---<p>
		</div>
		<br>
		<div class="slideshow-container">
			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
  			<img src="ss71.png" style="width:100%">
 			</div>
			<div class="mySlides fade">
 			<div class="numbertext">2 / 3</div>
  			<img src="ss72.jpg" style="width:100%">
			</div>
			<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="ss73.jpg" style="width:100%">
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
		<p class="explain" style="font-size:24px;font-family:comic sans ms">Rich in gorgeous landscapes, crystalline waterfalls, awe-inspiring mountains, dense forests, and a generous sprinkling of history and tradition, Tripura is a popular tourist destination situated in North-East India. This land-locked state nestled at the foot of the Himalayan mountains has a long historical legacy behind it; Tripura was once home to the famous Manikya tribe, which resulted in the conception of a plethora of varied archaeological monuments and structures in the state, all of which attest to the rich cultural and traditional past of Tripura. The state exhibits a unique blend of traditional tribal culture with a little more modern Bengali culture, giving rise to a harmonious cultural ambience that you will not find anywhere else in the country. Tripura is more than just its breathtaking beauty, it is an illustration of a long and varied legacy of history and tradition, thus promising you a holiday you won’t forget anytime soon.

Rich in art and culture, land of nineteen tribes Tripura is nestled in the lush green hills and is blessed with natural beauty and picturesque locations which attract tourists from all over the world. The religious festivals, colourful costumes, artistic cane and bamboo products, multi-linguistic people and delicious food! A variety of people with a variety of festivals, culture, languages and food is the major speciality of this North-eastern state of India. There is nothing that Tripura lacks as the state offers you memorable sightseeing, adventurous trekking and a lively shopping experience which will regenerate and rejuvenate your soul and spirit.</p>
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
	  		<img src="aga.jpg" class="image"/>
  			<div class="overlay">
    			<div class="text">Agartala</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#two">
	  		<img src="kai.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Kailashahar</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#three">
	  		<img src="una.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Unakoti</div>
  			</div>
			</div>
			</a>
			</div>
			</div>
			<div class="row">
			<div class="column">
			<div class="container">
			<a href="#four">
	  		<img src="ujj.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Ujjayanti Palace</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#five">
	  		<img src="tri.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Tripura Sundari</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#six">
	  		<img src="nee.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Neermahal</div>
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
	  		<img src="cui8.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Cuisine</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#culture">
			<div class="container1">
	  		<img src="cul8.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Culture</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#floraandfauna">
			<div class="container1">
	  		<img src="flo8.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Flora & Fauna</div>
  			</div>
			</div>
			</a>
			</div>
		</div></center>
		<br>
		<div class="name" id="one">Agartala... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Home to the Manikya Kings in the past, Agartala is the perfect mix of natural beauty combined with diverse and rich culture.

Agartala is not just all flowers and valleys but also has a cultural richness with the diversity of people that stay here along with the historical and religious monuments. The capital of Tripura manages to create its culture and personality out of the coming together of stories of all those who reside here and give it a hue of their own culture. The most developed city in the state, it is still a far cry from the metros and hence maintains the best of both worlds.</p>
	</div>
		<div class="name" id="two">Kailashahar... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">A well liked tourist town near Agartala, Kailashahar was once the capital of Tripuran kingdom and evidence of its royal history can be still seen here.

It is a town which gets a major part of it identity from a royal and significant past, the tints of which can still be seen around the town. Kailashahar is not only famous for its temples but is also as a popular trekking destination. The 16 tea estates are also a must see. The other attractions of the area includeUnakoti, Rangauti, 14 Deities Temple and more</p>
	</div>
		<div class="name" id="three">Unakoti... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">A prime tourist spot in Tripura, Unakoti is an ancient pilgrimage centre, attracting tourists and devotees from far and wide.

Unakoti is where India's heritage stores its carvings and sculptures of gods and goddesses. For such a storehouse of religious and spiritual importance, it is only justified that the place also be the house to lush green flora and full of natural beauty. Many of the rock carvings here depict the life of Lord Shiva as well as other instances from the Hindu Mythology. Sculptures of the Nandi Bull, Lord Ram , Lord Ganesha , Lord Hanuman and Lord Ganpati can also be seen here Unakoti also makes a good place for hiking, trekking and other activities given the terrain and the natural offerings of the area.</p>

</div>
		<div class="name" id="four">Ujjayanta Palace... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Years back, Ujjayanta Palace was a royal palace. Situated at the core of Agartala, the entire hustle-bustle of the city is centered around this palace. Built in 1901, it has magnificent tiled floors, curved wooden ceilings and lovely doors. The name 'Ujjayanta Palace' was given by Rabindranath Tagore, a regular visitor of Tripura. The State has owns a lineage of an independent royal state. The palace includes the Public halls, Throned room, Durbar Hall, Library, The Chinese Room and The Reception Hall.

The Ujjayanta Palace is formerly a royal palace of the Tripura, situated in the state of Agartala. Earlier it also served as the meeting place for the Tripura Legislative Assembly until 2011 and now it serves as a museum and a tourist attraction of Agartala. The Palace stands on the banks of a small lake surrounded by the lush greenery of Mughal gardens in Agartala. Spread over an expanse of 28 hectares of parkland, this exotic palace has several Hindu temples dedicated to the deities, Lakshmi Narayan, Uma-Maheshwari, Kali and Jagannath. One of the largest museums in Northeast India, covering an area over 800 acres of land in the capital city it depicts the lifestyle, art, culture, tradition and utility crafts, beside the customs and practices of various communities residing in northeast India. Rabindranath Tagore named the palace which was bought down by the Tripura government in 1972-73 from the royal family. Maharaja Radha Kishore Manikya, the Tripura King invested in the construction of the Palace in the years 1899-1901.</p>

</div>
		<div class="name" id="five">Neermahal... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">'The Lake Palace of Tripura' or the Neermahal is the largest palace of its kind in the entire Indian Subcontinent. This architectural beauty rightly derives its name from its location, i.e. the middle of Rudrasagar Lake. It is one of the two water palaces that our country has. The former royal palace is an outcome of King Bir Bikram Kishore Manikya Bahadur's great perspective. It was the summer palace for king and his family. Even today, its highly ornated structure showcases the glorious past. The surrounding lawns and flower beds add seven stars to the beauty of this place.

The evenings at Neermahal are spent watching the light and sound show. It makes people familiar with the cultural heritage of the place and its owners. The historicity comes with a tint of adventure too. Yes, the palace premises also include some water sports activities. This makes it a perfect combination of antiquity and thrill. Moreover, the palace has even gained fame for its 'Neermahal Water Festival.' A huge flock of people visit the mahal only to take part in the boat races organised by the board. This architectural marvel has a lot to give to its visitors. Therefore, whenever in Agartala make sure to turn your ways towards this gem of North-East.</p>

</div>
		<div class="name" id="six">Tripura Sundari Temple... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Tripura Sundari Temple is a beautiful temple situated in Udaipur, around 55 km away from Agartala, Tripura. This opulent temple is 500 years old thereby making it the oldest temple present in the Udaipur district. Tripura Sundari Temple is one of the 51 Sakti Peethas and is the place where the toe of the right foot of Sati fell. Owing to its history and beauty, this majestic temple remains flooded by tourists all through the year.

It is also said that Lord Vishnu had cut Sati into 51 pieces with his Sudarshana Chakra and the places where her parts fell came to known as the Shaktipeethas. One fascinating fact about the glorious temple is that it is in the shape of a tortoise and also known as Kurma Peeth. This temple of Kali, built in 1501, is a place where a steady stream of pilgrims makes almost endless animal sacrifices that leave the grounds as bloody as the temple's vivid-red shikhara. Devotees throng here during the dazzling Diwali festival (October/November) to bathe in the fish-filled tank by the temple. 

Tripura Sundari Temple is believed to be one of the holiest Hindu shrines in the country. It is also known as Matabari and is served by priests in red-robes who minister to the Tripura Sundari. This splendid temple is the most attractive tourist destinations to which hundreds of pilgrims flock on a daily basis.</p>

	</div>
		<br>
		<div class="name" id="food">Cuisine... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Tripura cuisine is the type of food served in Tripura (situated in northeast India). The Tripuris are essentially nonvegetarians and hence the main courses are mainly prepared using meat, but with the addition of vegetables. Traditional Tripuri cuisine is known as Mui Borok. Tripuri food has a key ingredient called Berma (also called Shidal in Bengali), which is a small, oil-pasted and dry fermented fish. The foods are sometimes considered to be healthy as they are usually prepared without oil. Tripuri food such as bangui rice and fish stews, Muya (Bamboo shoot), local fishes, vegetables, herbs, Batema (this jelly-like food is prepared by making a paste of starchy root of Batema plant with sodium powder and water to remove it's raphide, however, it is boiled again after making a bun of it with water containing sodium powder. Since lack of sodium powder may result to itchiness of throat, it is made into pieces and preferred with fresh pasted garlic, and Mosdeng), wahan moso (prepared by adding boiled pork, onion, salt, pasted ginger and chillies) and roasted meat are extremely popular within and outside the state.</p>

	</div>
		<br>
		<div class="name" id="culture">Culture... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Culture of Tripura is similar to those of Native indigenous tribal peoples of Northeast India. However like Assam, Manipur, Burma and Southeast Asia culture of Tripura is characterized in small portion living in plain areas by mainstream Indian cultural influence spearheaded by Bengali culture coexisting with tribal traditional practices specially living in those plain areas, not much extending to Hill people of Tripura notably the Tripuri culture. Tripura is a state in North East India. In the 2001 census of India, Bengalis represented almost 70% of Tripura's population and the tribal population comprised 30% of Tripura's population.The tribal population comprises several different tribes and ethnic groups with diverse languages and cultures. The largest tribal group was the Kokborok-speaking tribe of the Tripuri who had a population of 543,848 in 2001 census, representing 16.99% of the state population and 54.7% of the scheduled tribe population. The other major tribes in order of decreasing population were Reang (16.6% of the tribal population), Jamatia (7.5%), Chakma (6.5%), Halam (4.8%), Mog (3.1%), Munda, Kuki tribes and Garo Hajong. Bengali is the most spoken language, due to the predominance of Bengali people in the state. Kokborok is a prominent language among the tribes. Several other languages belonging to Indo-European and Sino-Tibetan families are spoken by the different tribe

Tripura has several diverse ethno-linguistic groups, which has given rise to a composite culture. The dominant cultures are Bengali, Manipuri, Tripuris, Jamatia, Reang, Naitong, Koloi, Murasing, Chakma, Halam, Garo, Hajong, Kuki, Mizo, Mogh, Munda, Oraon, Santhal, and Uchoi.

</p>

	</div>
		<br>
		<div class="name" id="floraandfauna">Flora & Fauna... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Like most of the Indian subcontinent, Tripura lies within the Indomalaya ecozone. According to the Biogeographic classification of India, the state is in the "North-East" biogeographic zone. In 2011 forests covered 57.73 per cent of the state. Tripura hosts three different types of ecosystems: mountain, forest and freshwater. The evergreen forests on the hill slopes and the sandy river banks are dominated by species such as Dipterocarpus, Artocarpus, Amoora, Elaeocarpus, Syzygium and Eugenia. Two types of moist deciduous forests comprise majority of the vegetation: moist deciduous mixed forest and Sal (Shorea robusta)-predominant forest. The interspersion of bamboo and cane forests with deciduous and evergreen flora is a peculiarity of Tripura's vegetation. Grasslands and swamps are also present, particularly in the plains. Herbaceous plants, shrubs, and trees such as Albizia, Barringtonia, Lagerstroemia and Macaranga flourish in the swamps of Tripura. Shrubs and grasses include Schumannianthus dichotoma (shitalpati), Phragmites and Saccharum (sugarcane).

According to a survey in 1989–90, Tripura hosts 90 land mammal species from 65 genera and 10 orders, including such species as elephant (Elephas maximus), bear (Melursus ursinus), binturong (Arctictis binturong), wild dog (Cuon alpinus), porcupine (Artherurus assamensis), barking deer (Muntiacus muntjak), sambar (Cervus unicolor), wild boar (Sus scrofa), gaur (Bos gaurus), leopard (Panthera pardus), clouded leopard (Neofelis nebulosa), and many species of small cats and primates. Out of 15 free ranging primates of India, seven are found in Tripura; this is the highest number of primate species found in any Indian state. The wild buffalo (Bubalus arnee) is extinct now. There are nearly 300 species of birds in the state.

Wildlife sanctuaries of the state are Sipahijola, Gumti, Rowa and Trishna wildlife sanctuaries. National parks of the state are Clouded Leopard National Park and Rajbari National Park. These protected areas cover a total of 566.93 km2 (218.89 sq mi). Gumti is also an Important Bird Area. In winter, thousands of migratory waterfowl throng Gumti and Rudrasagar lakes.</p>

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
