<?php include('C:\xampp\htdocs\WT\server2.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../sstyles.css">
		<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
		<title>Kerala</title>
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
		<div class="name">Kerala
		<p>--- Gods own country ---<p>
		</div>
		<br>
		<div class="slideshow-container">
			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
  			<img src="slideshowke1.jpg" style="width:100%">
 			</div>
			<div class="mySlides fade">
 			<div class="numbertext">2 / 3</div>
  			<img src="slideshowke2.jpg" style="width:100%">
			</div>
			<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="slideshowke3.jpg" style="width:100%">
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
			<p class="explain">Kerala, a state on India's tropical Malabar Coast, has nearly 600km of Arabian Sea shoreline. It's known for its palm-lined beaches and backwaters, a network of canals. Inland are the Western Ghats, mountains whose slopes support tea, coffee and spice plantations as well as wildlife. National parks like Eravikulam and Periyar, plus Wayanad and other sanctuaries, are home to elephants, langur monkeys and tigers.</p>
		</div><br>
		<br>
		<div class="places1">
			<div class="name">Must visits... </div>
			<hr/>
			<br>
			<br>
			<div class="row">
			<div class="column">
			<a href="#Kochi">
			<div class="container">
	  		<img src="j1.jpg" class="image"/>
  			<div class="overlay">
    			<div class="text">Kochi</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Munnar">
	  		<img src="j2.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Munnar</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Alappuzha">
	  		<img src="j3.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Alappuzha</div>
  			</div>
			</div>
			</a>
            </div>
        </div>
            <div class="row">
			<div class="column">
			<div class="container">
			<a href="#Thiruvananthapuram">
	  		<img src="j4.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Thiruvananthapuram</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Kozhikode">
	  		<img src="j5.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Kozhikode</div>
  			</div>
			</div>
			</a>
            </div>
            <div class="column">
                    <div class="container">
                    <a href="#Kovalam">
                      <img src="j6.jpg" class="image">
                      <div class="overlay">
                        <div class="text">Kovalam</div>
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
		<div class="name" id="Kochi">Kochi... </div>
		<hr/>
		<div class="pdheader">
			<p class="explain">Kochi (also known as Cochin) is a city in southwest India's coastal Kerala state. It has been a port since 1341, when a flood carved out its harbor and opened it to Arab, Chinese and European merchants. Sites reflecting those influences include Fort Kochi, a settlement with tiled colonial bungalows and diverse houses of worship. Cantilevered Chinese fishing nets, typical of Kochi, have been in use for centuries.
                St. Francis Church was the original site of Portuguese explorer Vasco da Gama’s burial when he died in Kochi in 1524. Santa Cruz Basilica is known for its pastel interior, including an imitation by Fra Antonio Moscheni of Leonardo da Vinci's "The Last Supper." Paradesi Synagogue, founded in 1568, features imported Chinese blue-and-white ceramic floor tiles. The surrounding quarter, once home to a large Jewish community, is now filled with antique shops and old spice warehouses. Mattancherry Palace, built by the Portuguese in the 16th century and later renovated by the Dutch, showcases vivid Hindu murals.
            </p>
		</div>
		<div class="name" id="Munnar">Munnar... </div>
		<hr/>
		<div class="pdheader">
			<p class="explain">Munnar is a town in the Western Ghats mountain range in India’s Kerala state. A hill station and former resort for the British Raj elite, it's surrounded by rolling hills dotted with tea plantations established in the late 19th century. Eravikulam National Park, a habitat for the endangered mountain goat Nilgiri tahr, is home to the Lakkam Waterfalls, hiking trails and 2,695m-tall Anamudi Peak.
                The Tea Museum at the Nallathanni Estate presents the region’s history of tea production. Chinnar Wildlife Sanctuary is an ecotourism site that protects numerous animal species. Northeast of town, Top Station is a 1,700m-high overlook and trekking site with views over the mountains. Fields of blue Neelakurinji flowers bloom there once every 12 years. En route to Top Station, reservoirs at Mattupetty Dam and Kundala Dam are popular for boating and picnicking. Aside from Lakkam, the region's many picturesque waterfalls include Attukal and Chinnakanal.</p>
			</div>
			<div class="name" id="Alappuzha">Alappuzha... </div>
		<hr/>
		<div class="pdheader">
			<p class="explain">Alappuzha (or Alleppey) is a city on the Laccadive Sea in the southern Indian state of Kerala. It's best known for houseboat cruises along the rustic Kerala backwaters, a network of tranquil canals and lagoons. Alappuzha Beach is the site of the 19th-century Alappuzha Lighthouse. The city's Mullakkal Temple features a traditional design. Punnamada Lake's snake boat races are a well-known annual event.</p>
		</div>
		<div class="name" id="Thiruvananthapuram">Thiruvananthapuram... </div>
		<hr/>
		<div class="pdheader">
			<p class="explain">Thiruvananthapuram (or Trivandrum) is the capital of the southern Indian state of Kerala. It's distinguished by its British colonial architecture and many art galleries. It’s also home to Kuthira Malika (or Puthen Malika) Palace, adorned with carved horses and displaying collections related to the Travancore royal family, whose regional capital was here from the 18th–20th centuries.
                Mahatma Gandhi Road is the main boulevard, lined with art and antiques shops, carpet sellers and sari stalls. To the north, the ornate Napier Museum houses ancient Indian carvings, bronzes and natural-history specimens, while Sri Chitra Art Gallery holds miniature Indian paintings and work by lauded artist Raja Ravi Varma (1848–1906). Nearby is Thiruvananthapuram Zoo, home to Bengal tigers, Asian elephants and Indian rhinos. To the south, the giant Dravidian-style Padmanabhaswamy Temple is dedicated to Vishnu, with a 7-tier entrance tower (gopuram). Along the coast are the popular beaches of Shankumugham and Kovalam.</p>
			</div>
			<div class="name" id="Kozhikode">Kozhikode... </div>
		<hr/>
		<div class="pdheader">
			<p class="explain">Kozhikode is a coastal city in the south Indian state of Kerala. It was a significant spice trade center and is close to Kappad Beach, where Portuguese explorer Vasco da Gama landed in 1498. The central Kozhikode Beach, overlooked by an old lighthouse, is a popular spot for watching the sunset. Inland, tree-lined Mananchira Square, with its musical fountain, surrounds the massive Mananchira Tank, an artificial pond.
                Close by, centuries-old Mishkal Mosque is a brightly painted architectural landmark. The 14th-century Tali Temple, built in traditional Keralan style, has a wooden roof with brass carvings. North of here, the Regional Science Centre and Planetarium has interactive exhibits and a 3D cinema, while the Krishna Menon Museum displays the personal belongings of this 20th-century Indian statesman. South of the city, the Kadalundi Bird Sanctuary protects domestic and migratory bird species, including terns and sand plovers. Northeast of Kozhikode, hiking trails wind past waterfalls and evergreen forests at Thusharagiri.</p>
			</div>
        <div class="name" id="Kovalam">Kovalam... </div>
		<div class="pdheader">
			<p class="explain">Kovalam is a small coastal town in the southern Indian state of Kerala, south of Thiruvananthapuram. At the southern end of Lighthouse Beach is a striped lighthouse with a viewing platform. Palm-backed beaches also include Hawa Beach and Samudra Beach. Heading south, Vizhinjam Juma Masjid mosque overlooks the busy fishing harbor. Inland, Sagarika Marine Research Aquarium displays technology used in pearl production.</p>
		</div>
					<br>
		<div class="name" id="food">Cuisine... </div>
<hr/>
<div class="pdheader">
<p class="explain">


God;s Own Country, Kerala seems to live up to the exquisite title that has been given to it as it takes you on a gastronomical journey of mind-boggling food items which are so tasty that they appear to be right out of 'God's Own Kitchen'! Surrounded by the sea, Kerala is home to numerous lip-smacking dishes prepared out of seafood, some of which include mussels, crab, tiger prawns, king prawns, tiny prawns, oysters, sardines, mackerel, tuna and gorgeous red lobsters. One just cannot stop salivating when walking the streets of Kerala. Unlike its neighbours, Kerala takes a lot of pride in its long list of non-vegetarian food that the state has to offer to its perpetually hungry tourists! I am not taking any sides here, but Kerala food includes everything ? chicken, mutton, beef, fish, pork and the thrilling variety of seafood as already mentioned. So let?s begin the herculean task of listing down some of its greatest Kerala food dishes.</p>
</div>
<div class="name" id="culture">Culture... </div>
<hr/>
<div class="pdheader">
<p class="explain">The culture of Kerala is a synthesis of Aryan and Dravidian cultures, developed and mixed for centuries, under influences from other parts of India and abroad. It is defined by its antiquity and the organic continuity sustained by the Malayali people. Modern Kerala society took shape owing to migrations from different parts of India and abroad throughout Classical Antiquity.

	Kerala traces its non-prehistoric cultural genesis to its membership (around the AD 3rd century) in a vaguely defined historical region known as Thamizhagom — a land defined by a common Tamil culture and encompassing the Chera, Chola, and Pandya kingdoms. At that time, the music, dance, language (first Dravida Bhasha — "Dravidian language"   — then Tamil), and Sangam (a vast corpus of Tamil literature composed between 1,500–2,000 years ago) found in Kerala were all similar to that found in the rest of Thamizhagom (today's Tamil Nadu). The culture of Kerala evolved through the Sanskritization of Dravidian ethos, revivalism of religious movements and reform movements against caste discrimination.       Kerala showcases a culture unique to itself developed through accommodation, acculturation and assimilation of various faculties of civilized lifestyle.	</p></div>
<div class="name" id="florafouna">Flora & Fauna</div>
<hr/>
<div class="pdheader">
<p class="explain">Kerala is a beautiful state located in the southern part of the country. This state is known to enjoy a wide array of flora and fauna. The natural habitat of this state encompasses evergreen forests, highland deciduous, partially evergreen forests in its various parts. Kerala experiences tropical humid climate but due to changes in elevation and its terrain, the land of this place is considered to be highly significant biodiversity in the world. The major biodiverse area of the state lies in the eastern districts amidst evergreen forests. Such biodiverse tract is also available in the coastal region. Here, this region is under cultivation and only sparse wildlife is registered here. This state boasts of more than nine thousand square kilometers of natural forests. About 7,500 square kilometers area is under the cover of non plantation area. About 3, 400 square kilometers area covers semi evergreen and wet evergreen forests. Dry deciduous forest covers an area of approximately 100 square kilometers and tropical moist region is sprawled in an area approximately 4000 square kilometers. Shola forests that are also referred to as the temperate region are available at high elevations covering about 100 square kilometers. About 24 percent area of this state is covered by these forests. Two wetland areas that are considered to be listed in Ramsar Convention are also located here, namely, Vembanad-Kol and Lake Sasthamkotta.
	 The state also boasts of several protected areas that also encompasses Nilgiri Biosphere Reserve.</p></div>

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
