<?php include('C:\xampp\htdocs\WT\server2.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../sstyles.css">
		<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
		<title>Karnataka</title>
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
		<div class="name">Karnataka
		<p>---One State Many Worlds---<p>
		</div>
		<br>
		<div class="slideshow-container">
			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
  			<img src="slideshowk1.jpg" style="width:100%">
 			</div>
			<div class="mySlides fade">
 			<div class="numbertext">2 / 3</div>
  			<img src="slideshowk2.jpg" style="width:100%">
			</div>
			<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="slideshowk3.jpg" style="width:100%">
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
		<p class="explain">Manipur (/ˈmʌnɪpʊər/) is a state in Northeast India, with the city of Bangalore as its capital.   It is bounded by Nagaland to the north, Mizoram to the south, and Assam to the west; Burma (Myanmar) lies to its east. The state covers an area of 22,327 square kilometres (8,621 sq mi) and has a population of almost 3 million, including the Meitei, who are the majority group in the state, Loi, Yaithibi, Kuki, and Naga peoples, who speak a variety of Sino-Tibetan languages. Manipur has been at the crossroads of Asian economic and cultural exchange for more than 2,500 years.   It has long connected the Indian subcontinent to Southeast Asia and China, enabling migration of people, cultures, and religions.

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
			<a href="#Bangalore">
			<div class="container">
	  		<img src="k1.jpg" class="image"/>
  			<div class="overlay">
    			<div class="text">Bangalore</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Mysore">
	  		<img src="k2.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Mysore</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Hampi">
	  		<img src="k3.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Hampi</div>
  			</div>
			</div>
			</a>
			</div>
			</div>
			<div class="row">
			<div class="column">
			<div class="container">
			<a href="#Madikeri">
	  		<img src="k4.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Madikeri</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Chitradurga">
	  		<img src="k5.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Chitradurga</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Badami">
	  		<img src="k6.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Badami</div>
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
		<div class="name" id="Bangalore">Bangalore... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Bengaluru (also called Bangalore) is the capital of India's southern Karnataka state. The center of India's high-tech industry, the city is also known for its parks and nightlife. By Cubbon Park, Vidhana Soudha is a Neo-Dravidian legislative building. Former royal residences include 19th-century Bangalore Palace, modeled after England’s Windsor Castle, and Tipu Sultan’s Summer Palace, an 18th-century teak structure.
            Krishnarajendra Market is a vibrant, old-fashioned bazaar, with fruit and flower vendors. The Lalbagh Botanical Garden has a traditional glass house and tropical flora. Modern and contemporary Indian art is on view at National Gallery of Modern Art. Karnataka Chitrakala Parishath, with 13 museums, is known for local traditional art. Dodda Basavana Gudi (“Bull Temple”) is an example of 16th-century Dravidian architecture. The 1995 Iskcon Krishna Temple combines modern and ancient architectural styles. Just outside the city is Bannerghatta Biological Park, home to tigers, lions and elephants.
         </p></div>
		<div class="name" id="Mysore">Mysore... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Mysore (or Mysuru), a city in India's southwestern Karnataka state, was the capital of the Kingdom of Mysore from 1399 to 1947. In its center is opulent Mysore Palace, seat of the former ruling Wodeyar dynasty. The palace blends Hindu, Islamic, Gothic and Rajput styles. Mysore is also home to the centuries-old Devaraja Market, filled with spices, silk and sandalwood.
            The Jaganmohan Palace, a Wodeyar structure in traditional Hindu style, displays an extensive collection of South Indian art. St. Philomena's Church is a grand, Neo-Gothic-style Catholic church featuring 53m-tall twin spires. Standing atop Chamundi Hills outside the city, Chamundeshwari Temple is an intricate Hindu shrine believed to date back to the 12th century. At the base of Chamundi Hills, picturesque Karanji Lake is a habitat for numerous bird species. Further afield, Brindavan Gardens offers a vast spread of landscaped gardens, blooms and trees, as well as a boating lake and a musical fountain.
         </p></div>
		<div class="name" id="Hampi">Hampi... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Hampi is an ancient village in the south Indian state of Karnataka. It’s dotted with numerous ruined temple complexes from the Vijayanagara Empire. On the south bank of the River Tungabhadra is the 7th-century Hindu Virupaksha Temple, near the revived Hampi Bazaar. A carved stone chariot stands in front of the huge Vittala Temple site. Southeast of Hampi, Daroji Bear Sanctuary is home to the Indian sloth bear.
            Located in Karnataka near the modern-era city of Hosapete, Hampi's ruins are spread over 4,100 hectares (16 sq mi) and it has been described by UNESCO as an "austere, grandiose site" of more than 1,600 surviving remains of the last great Hindu kingdom in South India that includes "forts, riverside features, royal and sacred complexes, temples, shrines, pillared halls, mandapas, memorial structures, water structures and others".   Hampi predates the Vijayanagara Empire; there is evidence of Ashokan epigraphy, and it is mentioned in the Ramayana and the Puranas of Hinduism as Pampaa Devi Tirtha Kshetra.

        </p></div>
	<div class="name" id="Madikeri">Madikeri... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Madikeri is a hill town in southern India. Framed by the Western Ghats mountain range, it’s known for the Raja’s Seat, a simple monument overlooking forests and rice paddies. In the center, the 17th-century Madikeri Fort features 2 stone elephants at the entrance. Nearby, the domed Omkareshwar Temple is dedicated to the Hindu deity Shiva. To the northwest, cascading Abbey Falls is surrounded by spice plantations.
                The history of Madikeri is related to the history of Kodagu. From the 2nd to the 6th century AD, the northern part of Kodagu was ruled by Kadambas. The southern part of Kodagu was ruled by Gangas from the 4th to the 11th century. After defeating the Gangas in the 11th century, Cholas became the rulers of Kodagu. In the 12th century, the Cholas lost Kodagu to the Hoysalas. Kodagu fell to the Vijayanagar kings in the 14th century. After their fall, the local chieftains like Karnambahu (Palegars) started ruling their areas directly. They were defeated by Haleri Dynasty founder Veeraraju, (Nephew of Ikkeri Sadashiva Nayaka who were descendants of Talakadu Ganga Dynasty),.
              </p></div>
	<div class="name" id="Chitradurga">Chitradurga... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Chitradurga (also known locally as Durga) is a city and the headquarters of Chitradurga district which is located on the valley of the Vedavati river in the southern part of the Indian state of Karnataka.   It is located about 200 km from the state capital Bengaluru.
                Chitradurga features bold rock hills and picturesque valleys, huge towering boulders in numerous shapes. It is known as the "stone fortress" (Kallina Kote). According to the epic Mahabharatha, its not confirmed about this story that a man-eating Rakshasa named Hidimba and his sister Hidimbi lived on the hill. Hidimba was a source of terror to everyone around while Hidimbi was a peace-loving rakshasa. When the Pandavas came with their mother Kunti in the course of their exile, Bhima had a duel with Hidimba in which Hidimba was killed. Thereafter Bhima married Hidimbi and they had a son named Ghatotkacha who had magical powers. Legend has it the boulders were part of the arsenal used during that duel. In fact, the boulders on which major part of the city rests belong to the oldest rock formation in the country.

        </p>
	</div>
		<div class="name" id="Badami">Badami... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">

                Badami, formerly known as Vatapi, is a town and headquarters of a taluk by the same name, in the Bagalkot district of Karnataka, India. It was the regal capital of the Badami Chalukyas from AD 540 to 757. It is famous for its rock cut structural temples. It is located in a ravine at the foot of a rugged, red sandstone outcrop that surrounds Agastya lake. Badami has been selected as one of the heritage cities for HRIDAY - Heritage City Development and Augmentation Yojana scheme of Government of India.s
                Badami is located at 15.92°N 75.68°E.   It has an average elevation of 586 metres (1922 ft). It is located at the mouth of a ravine between two rocky hills and surrounds Agastya tirtha water reservoir on the three other sides. The total area of the town is 10.3 square kilometers.


        </p></div>
		<div class="name" id="food">Cuisine... </div>
<hr/>
<div class="pdheader">
<p class="explain">The cuisine of Karnataka includes many vegetarian and non-vegetarian cuisines. It is one of the oldest surviving cuisines and traces its origin to the Iron Age. Ragi is mentioned in the historical works of the great poet Adikavi Pampa and in the ancient Sanskrit medical text Sushruta Samhita. The varieties of the Karnataka cuisine have drawn influence from and influenced the cuisines of neighbouring states like Tamil Nadu, Andhra Pradesh and Kerala. Some typical dishes include Bisi bele bath, Jolada rotti, Chapati, Ragi rotti, Akki rotti, Saaru, Idli - Vada Sambar, Vangi Bath, Khara Bath, Kesari Bath, Benne dose, Neer Dose, Ragi unda, Paddu (Gundponglu), Koli Saaru (chicken curry - Kannada style), Maamsa Saaru (Mutton Curry - Kannada style), and Uppittu. The well-known Masala Dosa traces its origin to Udupi cuisine. Plain and rava idli, Mysore Masala Dosa and Maddur Vade are popular in South Karnataka. Kodagu (Coorg) district is famous for spicy varieties of pork curries while coastal Karnataka boasts of many tasty seafood specialities. Among sweets, Mysore Pak, Holige, Obbattu, Dharwad pedha, Kunda, Chiroti, Sajjige, Kadabu/ Karjikaayi are well known.

</p></div>
<div class="name" id="culture">Culture... </div>
<hr/>
<div class="pdheader">
<p class="explain">The southern state of Karnataka, in India, has a distinct art and culture. The diverse linguistic and religious ethnicity that are native to state of Karnataka combined with their long histories cultural heritage of the state. Apart from Kannadigas, Karnataka is home to Tuluvas, who also consider themselves as Kannadigas. Minor populations of Tibetan Buddhists and Siddhi tribes plus a few other ethnic groups also live in Karnataka. The traditional folk arts e major theatrical forms of coastal Karnataka. Contemporary theatre culture in Karnataka is one of the most vibrant in India with organizations like Ninasam, Ranga Shankara and Rang on foundations laid down by the Gubbi Veeranna Nataka Company. Veeragase, Kamsale and Dollu Kunitha are popular dance forms. Bharatanatya also enjoys wide patronage in Karnataka.

    </p></div>
<div class="name" id="florafouna">Flora & Fauna</div>
<hr/>
<div class="pdheader">
<p class="explain">The flora of Karnataka includes the white Mallika, the golden Champaka, the red rose, and the purple Padari. Mysore has always been famous for its mangoes. The native varieties of mangoes are both juicy and delicious. Alphonso variety was perhaps introduced by the Portuguese. Teak and sandalwood trees are found on the eastern slopes. Sandal wood is Karnataka's State tree and the State flower is Lotus.
        Forests of Karnataka are the habitat of elephants and lions. Nature has evolved a number of carnivores like tigers,  panthers and leopards. The forests also abounds in a variety of small game- sambar, deer, wild pig, bears and hare as well as Peacocks. Within the state, Mulliana Giri, Baba Budan Hill and Kudre Mukha are prominent peaks and this region is the habitat of elephants, tigers and bison. There are five National Parks and 25 Wildlife Sanctuaries in the state. The National parks are Anshi, Bandipur, Bannerghatta, Nagarhole and Kudremukh National Parks. Bird life is also abundant in the state and among the sanctuaries seven are bird sanctuaries.</p></div>

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
