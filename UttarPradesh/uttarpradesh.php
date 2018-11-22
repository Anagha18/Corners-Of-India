<?php include('C:\xampp\htdocs\WT\server2.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../sstyles.css">
		<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
		<title>Uttar Pradesh</title>
		
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
		<div class="name" class="name">Uttar Pradesh
		<p>--- Amazing Heritage, Grand Experiences ---<p>
		</div>
		<br>
		<div class="slideshow-container">
			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
  			<img src="ss91.jpg" style="width:100%">
 			</div>
			<div class="mySlides fade">
 			<div class="numbertext">2 / 3</div>
  			<img src="ss92.jpg" style="width:100%">
			</div>
			<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="ss93.jpg" style="width:100%">
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
		<p class="explain" style="font-size:24px;font-family:comic sans ms">Home to one of the Seven Wonders of the World and flaunting exquisite arts like the handicrafts and jewellery Uttar Pradesh is a bountiful state and an utterly religious one.

Uttar Pradesh is the home to some of the most beautiful monuments and cultural sights in India. The home to diverse religious people, this state boasts of the various cultural and religious fests. With massive royal influence in the fields of dance and music and arts, this state is home to one of the first classical dances of India, Kathak. 

The state is also known for its Nawabi style in food, can advertise fantastic street food like the samosa and kachori as well as the royal meaty feasts and kebabs. The diversity of the state transcends all boundaries of art, culture, food, music, dance and brings together a lively mix of people from all around the nation.</p>
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
	  		<img src="agr.jpg" class="image"/>
  			<div class="overlay">
    			<div class="text">Agra</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#two">
	  		<img src="var.cms" class="image">
  			<div class="overlay">
    			<div class="text">Varnasi</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#three">
	  		<img src="vri.jpeg" class="image">
  			<div class="overlay">
    			<div class="text">Vrindavan</div>
  			</div>
			</div>
			</a>
			</div>
			</div>
			<div class="row">
			<div class="column">
			<div class="container">
			<a href="#four">
	  		<img src="mat.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Mathura</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#five">
	  		<img src="luc.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Lucknow</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#six">
	  		<img src="ayodhya.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Ayodhya</div>
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
	  		<img src="cui10.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Cuisine</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#culture">
			<div class="container1">
	  		<img src="cul10.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Culture</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#floraandfauna">
			<div class="container1">
	  		<img src="flo10.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Flora & Fauna</div>
  			</div>
			</div>
			</a>
			</div>
		</div></center>
		<br>
		<div class="name" id="one">Agra... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Home to one of the 7 wonders of the world, the Taj Mahal, Agra is a sneak peek into the architectural history with other structures such as Agra Fort and Fatehpur Sikri and hence makes for a must visit for anyone living in or visiting India.

When you talk about Agra, one thing has to stand out - yes, the Taj Mahal. Agra is host to the only one of the Seven Wonders of the World in India, Taj Mahal, which makes the whole country proud. But that's not the only thing Agra has to boast of. Agra has three UNESCO World Heritage sites and Taj Mahal features in the 50 most popular tourist destinations in the world. History, architecture, romance all together create the magic of Agra which is almost the lifeline of Indian tourism. History fanatics as well as architecture buffs can have a ball here with the sheer expanse of the Mughal art and culture on display. Apart from its monuments, the city also has some exciting stuff for foodies - including the famous Agra ka Petha and amazing chaat and Lassi</p>
	</div>
		<div class="name" id="two">Varanasi... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">A city as old as time itself. A city that has stayed in place and watched as the world has turned and the tides have changed. A city that has stood the test of time for thousands of years. In the words of Mark Twain, "Older than history, older than tradition, older even than legend, And looks twice as old as all of them put together." Varanasi, the city that is more than just the spiritual capital of India. The city which can be aptly described as a melting pot where both life and death come together. The city that you only need to visit once for it to stay with you forever.

Varanasi is a very popular pilgrimage point for Hindus, and the older part of Varanasi, which has thrived on the banks of the river Ganga, is an integral part of the very infrastructure of the city, with thousands of people flocking there for salvation and purification. All chaos and noise on the ghats of Varanasi take a pause when the Ganga Aarti takes place in the evening, a ceremony of immense grandeur and opulence, with pandits lining up to perform rituals that are no less than a performance for the senses</p>
	</div>
		<div class="name" id="three">Vrindavan... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">One of the oldest cities on the banks of Yamuna, Vrindavan is considered to be one of the most important places of pilgrimage for the devotees of Krishna. It is said that Lord Krishna had spent his childhood in Vrindavan. The name of the city has been derived from Vrinda (meaning basil) and van (meaning grove) which perhaps refer to the two small groves at Nidhivan and Seva Kunj. Since Vrindavan is considered to be a sacred place, a large number of people come here to abandon their worldly life.

The city of Vrindavan hosts hundreds of Lord Krishna and Radha temples scattered throughout, the most famous ones being Banke Bihari temple, ISKCON temple. The vibrant surroundings perfectly depict the playful and benevolent nature of Lord Krishna. Located along the waters of River Yamuna, the numerous temples set amidst the thick woods and lush greenery of Vrindavan are the major attractions here. Also known as Vrindavan, this city derives its name from the groves of Brinda and Vana meaning forest.</p>

</div>
		<div class="name" id="four">Mathura... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">India is a country of immense diversity in all fields of life, starting from religious to cultural to historical. Religion has been deeply ingrained into the Indian lifestyle for as far as one can remember, which is why India abounds in cities and towns all across the country which are devoted to fulfilling spiritual desires of people who come to visit these places from far and wide. Mathura is one such place which is considered one of the most sacred lands of India, and is filled to the brim at any point of the year with people looking to pursue spiritual enlightenment. Located around 150 kilometres from Delhi, Mathura is known as the birthplace of Lord Krishna and has many sites of both historical and religious significance.

Shri Krishna Janmabhumi is the most famous tourist attraction in Mathura, as this place is believed to the be the exact place where Lord Krishna was born, and the prison where he was born is now on display for tourists to see. Apart from the prison, the Shri Krishna Janmabhumi also has a majestic temple with idols of Krishna and Radha, making this place one of the top places to visit in Mathura.</p>

</div>
		<div class="name" id="five">Lucknow... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">A city of kebabs and nawabs, of architecture and history, of literature and culture – that is Lucknow in a nutshell for you. The capital and the largest city of Uttar Pradesh, Lucknow, situated on the banks of river Gomti, welcomes you with a heartwarming note of "Muskuraiyein, kyunki aap Lucknow mein hai". Known as the ‘City of Nawabs’, Lucknow has a charm to it that is hard to resist. While the city itself is rich and opulent, the people of Lucknow also follow an endearing 'pehle aap' (you first) culture, which always leaves behind a smile on the faces of its visitors. From a slice of rich colonial history to modernized museums, the 'City of Nawabs' beautifully brings together the opulence of a glittering past and the simplicity of a modern city.

Rumi Darwaza, the Mughal Gateway built in the centre of the capital divides Lucknow into the 'Old Lucknow' which is ancient, more crowded, and comprises most of the Muslim population, and the 'New Lucknow' which is urban and one of the most planned cities of Asia. Old Lucknow is home to the iconic Mughal monument known as the Bara Imambara, where you will find the Bhool Bhulaiya, which is basically a complex, an intricately designed labyrinth with around 500 almost-identical doors and around a thousand passageways connected by multiple flights of stairs. The Bara Imambara is an architectural marvel in and of itself and is an exemplary embodiment of Awadhi architecture and culture. Close by, Husainabad Clock Tower exhibits traces of Victorian architecture, while Moti Mahal serves as an excellent vantage point for bird watching.</p>

</div>
		<div class="name" id="six">Ayodhya... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Assumed to be the birthplace of Lord Rama, Ayodahya has been surrounded by controversy since about a decade now but yet, has so much colour and spirituality to see for its tourists taking form of various attractions here including Ram janmabhoomi and various other temples.

Located on the banks of river Sarayu, Ayodhya is a city in Uttar Pradesh with rich history and numerous legends. Former capital of Awadh, Ayodhya plays a critical role in the Hindu epic of Ramayana. According to the epic, Ayodhya is believed to be the birthplace of Lord Rama. Given its association with Hinduism, it is predominantly a religious tourist destination with all its temples and historical significance. Most recently, Ayodhya has been in news for the Babri Mosque dispute. The mosque, which was allegedly built on Ram Janmabhoomi temple, became the bone of contention between Hindus and Muslims. In 2005, Ayodhya witnessed a terrorist attack at the site of Ramlalla temple.</p>

	</div>
		<br>
		<div class="name" id="food">Cuisine... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Cuisine of Uttar Pradesh is from the state of Uttar Pradesh(UP) located in Northern India. The Cuisine of UP has a large variety of dishes. The cuisine consists of both vegetarian and non-vegetarian dishes of different varieties. Being a large state, the cuisine of UP share lot of dishes and recipes with the neighboring states of Delhi, Uttarakhand, Haryana and Apart from native cuisine, Mughlai and Awadhi are two famous sub types of cuisine of the state.

</p>

	</div>
		<br>
		<div class="name" id="culture">Culture... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">The Culture of Uttar Pradesh is an Indian Culture which has its roots in the Hindi and Urdu literature, music, fine arts, drama and cinema. Lucknow, the capital of Uttar Pradesh, has several beautiful historical monuments such as Bara Imambara and Chhota Imambara. It has also preserved the damaged complex of the Oudh-period British Resident's quarters, which are being restored.

Uttar Pradesh attracts large number of visitors, both national and international; with more than 71 million domestic tourists (in 2003) and almost 25% of the All-India foreign tourists visiting Uttar Pradesh, it is one of the top tourist destinations in India. There are two regions in the state where a majority of the tourists go, viz. the Agra circuit and the Hindu pilgrimage circuit.

The city of Agra, gives access to three World Heritage Sites: Taj Mahal, Agra Fort and the nearby Fatehpur Sikri. Taj Mahal is a mausoleum built by Mughal Emperor Shah Jahan in memory of his beloved wife, Mumtaz Mahal. It is cited as "the jewel of Muslim art in India and one of the universally admired masterpieces of the world's heritage". Agra Fort is about 2.5 km northwest of its much more famous sister monument, the Taj Mahal. The fort can be more accurately described as a walled palatial city. Fatehpur Sikri was the world-famous 16th century capital city near Agra, built by the Mughal emperor Akbar the Great, whose mausoleum in Agra is also worth a visit. Dayal Bagh in Agra is a modern-day temple and popular tourist sight. Its lifelike sculptures in marble are unique in India. Agra's dubious modern attractions include Asia's largest Spa as well as Asia's second 6D theatre.

The pilgrimage circuit includes the holiest of the Hindu holy cities on the banks of sacred rivers Ganges and the Yamuna: Varanasi (also considered world's oldest city), Ayodhya (birthplace of Lord Rama), Mathura (birthplace of Lord Krishna), Vrindavan (the village where Lord Krishna spent his childhood), and Allahabad(Prayagraj) (the confluence or 'holy-sangam' of the sacred Ganges-Yamuna rivers).

</p>

	</div>
		<br>
		<div class="name" id="floraandfauna">Flora & Fauna... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Uttar Pradesh has plenty of natural resources. Diverse flora and fauna exist in state despite of indiscriminate deforestation and poaching. In the belt of temperate mountainous forests, species of reptiles, insects, mammals and trees are found.

 

Common birds which are found in Uttar Pradesh are sparrows, parakeets, songbirds, quails, kingfishers, woodpeckers, blue jays, comb ducks, parrots, snipes, black partridge, peacocks, junglefowl, doves, bulbuls and house sparrows. Due to the availability of sunlight, shrubs, herbs and grasses are also abundant in the state.</p>

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
