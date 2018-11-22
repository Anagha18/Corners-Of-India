<?php include('C:\xampp\htdocs\WT\server2.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../sstyles.css">
		<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
		<title>Maharashtra</title>
	</head>
	<body>

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
		<div class="name">Maharashtra
		<p>--- One state different Culture ---<p>
		</div>
		<br>
		<div class="slideshow-container">
			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
  			<img src="slideshowm1.jpg" style="width:100%">
 			</div>
			<div class="mySlides fade">
 			<div class="numbertext">2 / 3</div>
  			<img src="slideshowm2.jpg" style="width:100%">
			</div>
			<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="slideshowm3.jpg" style="width:100%">
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
		<p class="explain">Maharashtra (/mɑːhəˈrɑːʃtrə/; Marathi: [məharaːʂʈrə] (About this sound listen), abbr. MH) (मराठी: महाराष्ट्र) is a state of India, in the western region of the country and is India's second-most populous state and third-largest state by area. Spread over 307,713 km2 (118,809 sq mi), it is bordered by the Arabian Sea to the west and the Indian states of Karnataka, Telangana, Goa, Gujarat, Chhattisgarh, and Madhya Pradesh and the Union territory of Dadra and Nagar Haveli. It is also the world's second-most populous subnational entity. It has over 112 million inhabitants and its capital, Mumbai, has a population around 18 million making it the most populous urban area in India. Nagpur hosts the winter session of the state legislature.   Pune is its cultural capital.Pune is known as 'Oxford of the East' due to the presence of several well-known educational institutions.</p>
		</div><br>
		<br>
		<div class="places1">
			<div class="name">Must visits... </div>
			<hr/>
			<br>
			<br>
			<div class="row">
			<div class="column">
			<a href="#Mumbai">
			<div class="container">
	  		<img src="j1.jpg" class="image"/>
  			<div class="overlay">
    			<div class="text">Mumbai</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Aurangabad">
	  		<img src="j2.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Aurangabad</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Pune">
	  		<img src="j3.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Pune</div>
  			</div>
			</div>
			</a>
            </div>
        </div>
            <div class="row">
			<div class="column">
			<div class="container">
			<a href="#Ellora Caves">
	  		<img src="j4.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Ellora Caves</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#Nashik">
	  		<img src="j5.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Nashik</div>
  			</div>
			</div>
			</a>
            </div>
            <div class="column">
                    <div class="container">
                    <a href="#Lonavla">
                      <img src="j6.jpg" class="image">
                      <div class="overlay">
                        <div class="text">Lonavla</div>
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
		<div class="name" id="Mumbai">Mumbai... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Mumbai (formerly called Bombay) is a densely populated city on India’s west coast. A financial center, it's India's largest city. On the Mumbai Harbour waterfront stands the iconic Gateway of India stone arch, built by the British Raj in 1924. Offshore, nearby Elephanta Island holds ancient cave temples dedicated to the Hindu god Shiva. The city's also famous as the heart of the Bollywood film industry.
            Landmark British colonial buildings include Chhatrapati Shivaj Terminus, an ornate train station melding Gothic Revival and Mughal architecture. The castlelike Bombay High Court features octagonal turrets. Immense Chhatrapati Shivaji Maharaj Vastu Sangrahalaya is a museum displaying ethnographic and natural history collections. Chor Bazaar is known for its antiques, while Mangaldas Market has textiles, and Zaveri Bazaar is filled with jewelry shops. Marine Drive terminates at popular Chaupati Beach. On the city’s outskirts in Sanjay Gandhi National Park is Kanheri, a cave system carved by Buddhists beginning in the 1st century B.C. </p>
		</div>
		<div class="name" id="Aurangabad">Aurangabad... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Aurangabad is a city in Maharashtra state, in India. It’s known for the 17th-century marble Bibi ka Maqbara shrine, styled on the Taj Mahal. The nearby Shivaji Maharaj Museum, dedicated to the Maratha king Shivaji, displays war weapons and a coin collection. North of the city, the Aurangabad Caves comprise ancient, rock-cut Buddhist shrines. West of the city, battlements surround the medieval Daulatabad Fort.
            Northwest of Aurangabad are the Ellora Caves, around 1,500 years old, with Buddhist, Jain and Hindu cave temples said to indicate local religious harmony. Nearby is Grishneshwar Mandir, a Hindu temple dedicated to Lord Shiva, with intricate architectural details. In the northeast, the Ajanta Caves feature scenes from the life of Buddha depicted in paintings and rock carvings, some dating back more than 2,000 years. South of the city, Jayakwadi Bird Sanctuary is a haven for migratory species including glossy ibises and flamingos, plus cranes that flock to the adjacent Nath Sagar lake.
		</p>
	</div>
		<div class="name" id="Pune">Pune... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Pune is a sprawling city in the western Indian state of Maharashtra. It was once the base of the Peshwas (prime ministers) of the Maratha Empire, which lasted from 1674 to 1818. It's known for the grand Aga Khan Palace, built in 1892 and now a memorial to Mahatma Gandhi, whose ashes are preserved in the garden. The 8th-century Pataleshwar Cave Temple is dedicated to the Hindu god Shiva.
            Saras Baug Park features a Ganesh temple, dedicated to the elephant-headed god. Parvati Hill, topped by another temple complex and the Peshwa Museum, affords panoramic views of Pune. Shaniwar Wada, an 18th-century fortified palace, was once the seat of Maratha Peshwas. The Raja Dinkar Kelkar Museum displays a whimsical collection of Indian lamps, puppets, hookah pipes and other arts and crafts. The Darshan Museum tells the story of modern Indian saint and scholar Sadhu Vaswani through multimedia exhibits and a light and sound show. The city also contains a commercial ashram retreat, the OSHO International Meditation Resort.</p>
		</div>
		<div class="name" id="Ellora Caves">Ellora Caves... </div>
		<hr/>
        <div class="pdheader">
		<p class="explain">Ellora, located in the Aurangabad district of Maharashtra, India, is one of the largest rock-cut monastery-temple cave complexes in the world, and a UNESCO World Heritage Site, featuring Buddhist, Hindu and Jain monuments, and artwork, dating from the 600-1000 CE period. Cave 16, in particular, features the largest single monolithic rock excavation in the world, the Kailasha temple, a chariot shaped monument dedicated to Shiva. The Kailasha temple excavation also features the gods, goddesses, and mythologies found in Vaishnavism, Shaktism as well as relief panels summarizing the two major Hindu Epics. There are over 100 caves at the site, all excavated from the basalt cliffs in the Charanandri Hills, 34 of which are open to public. These consist of 12 Buddhist, 17 Hindu and 5 Jain caves, with each group representing deities and mythologies that were prevalent in the 1st millennium CE, as well as monasteries of each respective religion. They were built in proximity to one another and illustrate the religious harmony that existed in ancient India.</p>
	</div>
	<div class="name" id="Nashik">Nashik... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Nashik is an ancient holy city in Maharashtra, a state in western India. It’s known for its links to the “Ramayana” epic poem. On the Godavari River is Panchavati, a temple complex. Nearby, Lord Rama was thought to have bathed at Ram Kund water tank, today attended by Hindu devotees. Shri Kalaram Sansthan Mandir is an ancient shrine to Rama, while Rama and Sita are said to have worshipped at Sita Gufaa caves.
            Sundarnarayan Temple marks the site of a legend of Lord Vishnu. Tapovan is a pilgrimage site next to the Nasardi River, close to where Lord Rama purportedly lived. Colorful statues of Hindu gods fill ISKCON, a modern temple for the worship of Lord Krishna. The temple complex Muktidham, in white sculpted marble, has painted scenes depicting the lives of Krishna and several chapters of the "Bhagavad Gita," an ancient Hindu scripture. On a small hill to the southwest are the 24 Pandavleni Caves, dating back millennia. They are marked by Buddha carvings, rare inscriptions and cisterns. Vineyards dot the land west of the city.</p>
		</div>
		<div class="name" id="Lonavla">Lonavla... </div>
        <hr>
        <div class="pdheader">
		<p class="explain">Lonavala is a hill station surrounded by green valleys in western India near Mumbai. The Karla Caves and the Bhaja Caves are ancient Buddhist shrines carved out of the rock. They feature massive pillars and intricate relief sculptures. South of the Bhaja Caves sits the imposing Lohagad Fort, with its 4 gates. West of here is Bhushi Dam, where water overflows onto a set of steps during rainy season.
        Lonavala is a town and a hill station Municipal Council in Pune district in the Indian State of Maharashtra.s It is about 64 kilometres (40 mi) west of modern-day Pune city and 96 kilometres (60 mi) from the city of Mumbai. It is known for its production of the hard candy chikki   and is also a major stop on the railway line connecting Mumbai and Pune. From the Pune suburbs, local trains are available from Pune Junction. Both the Mumbai-Pune Expressway as well as the Mumbai-Chennai highway pass through Lonavala.<br>
	</p> </div>
		<div class="name" id="food">Cuisine... </div>
<hr/>
<div class="pdheader">
<p class="explain">Maharashtrian or Marathi cuisine is the cuisine of the Marathi people from the Indian state of Maharashtra. It has distinctive attributes, while sharing much with other Indian cuisines. Traditionally, Maharashtrians have considered their food to be more austere than others.

	Maharashtrian cuisine includes mild and spicy dishes. Wheat, rice, jowar, bajri, vegetables, lentils and fruit are dietary staples. Peanuts and cashews are often served with vegetables. Meat was traditionally used sparsely or only by the well off until recently, because of economic conditions and culture.

	The urban population in metropolitan cities such as Mumbai, Pune and others has been influenced from other parts of India and abroad. For example, the Udupi dishes idli and dosa, as well as Chinese and Western dishes, are quite popular in home cooking and in restaurants.

	Distinctly Maharashtrian dishes include ukdiche modak, aluchi patal bhaji and Thalipeeth.

	</p></div>
<div class="name" id="culture">Culture... </div>
<hr/>
<div class="pdheader">
<p class="explain">Maharashtra is the third largest state of India. It is known as the land of saints,  educationists and revolutionists, teachers, doctors, actors, actresses, film makers, notable among them being Mahadev Govind Ranade, Swatantraveer Savarkar, Savitribai Phule, Bal Gangadhar Tilak, Dadasaheb Phalke, Dada Kondke and many others. It has a long history of Marathi saints of Varakari religious movement, such as Dnyaneshwar, Namdev, Chokhamela, Eknath and Tukaram which formsthe one of bases of the culture of Maharashtra or Marathi culture. Maharashtra is also known for its purogami culture which translates as reformist or forward culture   which was started by earlier saints and led by Mahatma Phule, Shahu Maharaj, Babasaheb Ambedkar in modern times. Maharashtra has huge influence all over the world of 17th-century King Chatrapati Shivaji Maharaj of Maratha Empire and his concept of Hindavi Swarajya which translates to self-rule of people.

	The state of Maharashtra spans multiple cultures which includes cultures related to Hindus, Muslims, Buddhists, Sikhs, Christians, etc. Lord Ganesha and Lord Vitthal are the traditional deities worshipped by Hindus of Maharashtra.

	Maharashtra is divided into various regions, such as Marathwada, Vidarbha, Khandesh, and Konkan. Each has its own cultural identity in the form of different dialects of Marathi language,   folk songs, food, and ethnicity.</p></div>
<div class="name" id="florafouna">Flora & Fauna</div>
<hr/>
<div class="pdheader">
<p class="explain">
	If you happen to visit Maharashtra, you will be surprised to see a huge diversity in flora as well as fauna. Its topography as well as the tropical climate has resulted in the diversity that you explore here. You can get a glimpse of many wildlife species along with a huge collection of the flora as well. This state can be best described as a combination of High Mountain ranges of height 4000 feet and tropical rain forests. About 17% of this state is covered by the thick forests consisting of deciduous plants. Most of the forests are found in the Sahyadri region and are very dense. Maharashtra is said to have 3 game reserves, 5 national parks and 24 bird sanctuaries. So, you can explore a variety of animals like tigers, deers, wild boars, panthers and many more.

Many of Maharashtra’s forest lie on the borders of Madhya Pradesh state as well as the Sahyadri region too. Some of these areas are converted into wildlife reserves thus preserving the biodiversity. Dhokna-Kolkaz forest of Maharashtra is known for its excellent wildlife that includes flying squirrels, tigers, antelope and lots more. The Nagzira Wild Life Sanctuary is also a famous sanctuary to explore blue ball, panthers, sloth bear, birds etc.
</p></div><br>
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
