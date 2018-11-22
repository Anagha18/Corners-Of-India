<?php include('C:\xampp\htdocs\WT\server2.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../sstyles.css">
		<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
		<title>Nagaland</title>
		
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
		<div class="name" class="name">Nagaland
		<p>--- The Switzerland of the East ---<p>
		</div>
		<br>
		<div class="slideshow-container">
			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
  			<img src="ss1.jpg" style="width:100%">
 			</div>
			<div class="mySlides fade">
 			<div class="numbertext">2 / 3</div>
  			<img src="ss4.jpg" style="width:100%">
			</div>
			<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img src="ss2.jpg" style="width:100%">
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
		<p class="explain" style="font-size:24px;font-family:comic sans ms">Right from their head dresses to their bizarre sense of wardrobe, from their excellent handloom to their queer taste in food, from their vibrant festivals to choice of trophies in the form of animals’ skull, Nagaland has always stood apart from all other states in India. A colourful land of impeccable culture and unprecedented traditions, this lesser known state is certainly an enticing destination to explore. Little do we know that on each turn in Nagaland there is a surprise waiting for us; the unexpected influence of Hinduism, the indelible marks of Christianity and the legends that are known beyond Indian borders, makes Nagaland truly a fascinating land that needs to be explored So, once again we have taken up the job to intimate avid travellers like you about a land as mesmerizing as Nagaland.</p>
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
	  		<img src="mok.jpg" class="image"/>
  			<div class="overlay">
    			<div class="text">Mokokchung</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#two">
	  		<img src="koh.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Kohima</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#three">
	  		<img src="dim.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Dimapur</div>
  			</div>
			</div>
			</a>
			</div>
			</div>
			<div class="row">
			<div class="column">
			<div class="container">
			<a href="#four">
	  		<img src="mon.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Mon</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#five">
	  		<img src="dzu.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Dzukou Valley</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column">
			<div class="container">
			<a href="#six">
	  		<img src="p6.jpg" class="image">
  			<div class="overlay">
    			<div class="text">Phek</div>
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
	  		<img src="cui1.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Cuisine</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#culture">
			<div class="container1">
	  		<img src="cul1.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Culture</div>
  			</div>
			</div>
			</a>
			</div>
			<div class="column1">
			<a href="#floraandfauna">
			<div class="container1">
	  		<img src="flo1.jpg" style="border-radius:50%" class="image1"/>
  			<div class="overlay1">
    			<div class="text1">Flora & Fauna</div>
  			</div>
			</div>
			</a>
			</div>
		</div></center>
		<br>
		<div class="name" id="one">Mokokchung... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">The most significant urban centre in all of Nagaland after Dimapur and Kohima and the home of Ao Naga.

The popular tourist spots in the area include the District Museum, the Town main park, (located just above the Town Center), Unman village (which is regarded as the oldest and largest) and the Ao village. In addition, visitors might also be interested in exploring places like Longkhum, Langpangkong, Mopungchukit and Chuchuyimlang located within the district. Since agriculture constitutes the main occupation in the area, festivals during the sowing and harvesting months are sure to enhance the tourist's experience</p>
	</div>
		<div class="name" id="two">Kohima </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Kohima is the hilly capital of Nagaland, which is one of the seven sister states of India. ‘Kohima’ is the anglicized name given by the British, the original name being 'Kewhira' derived from the Kewhi flowers found in the region. Famous for its ethereal environment and untouched beauty, it is a land of folklore passed down through the ages. Situated at a height of 1500 metres above the sea level, it is endowed with quaint hills, emerald forests and a picturesque landscape. It is the go-to place for all you adventure enthusiasts as it is ideal for trekking, camping and hiking.

Kohima was built by the British and is home to the Naga and Kulkis tribe who can amaze one with their independence and a mystical and colourful culture that surrounds them. Kohima finds its place in history as the site of an intense fight with the Japanese, a part of a 64 day long battle during the World War II. One of the most popular sits here include the Commonwealth War Cemetery which homes thousands of soldiers of the World War II. Other than that, the city has a lot more to offer to its visitors - a museum, zoo, sanctuary, valleys, self governing villages and much more</p>
	</div>
		<div class="name" id="three">Dimapur... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Known to be the largest and fastest growing city of Nagaland, most travellers come to this city in transit because of the airport situated in the city. Some of the few attractions here are: Triple Falls, Kachari Ruins, the Nagaland science center and the zoological park.

The boundary of the eastern part is covered by Dhansiri River, while the western part of the district consists mostly of forests and hills. One day is sufficient to explore this place, and fly away to the next lap of your tip.</p>

</div>
		<div class="name" id="four">Mon... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Home of the Konyaks nagas, Mon provides tourists with a unique and quite mesmerizing view of tattooed faces wearing feathery loincloths.

The District, with the exception of the foothills, has a difficult terrain with steep slopes. Even though Mon doesn't have a lot of sightseeing points, but it still attracts a lot of people from all around the world. The people, their culture, their dressing is very colourful and different and it is probably the most interesting aspect of this town. There are numerous villages nearby which are very pretty and might offer you a closer picture of the life of the Nagas. Veda Peak and Naganimora are among the famous tourist spots here. One can see a waterfall near the Veda peak and this would be one of the most pristine places in the region. Veda peak is located around 70 kilometers from Mon. Among the few villages in the region that are worth visiting are Chui, Longwa and Shangynu.</p>

</div>
		<div class="name" id="five">Dzukou Valley and Japfu peak... </div>
		<hr/>
		<div class="pdheader">
		<p class="explain">Located some 25 km south of Kohima, Dzukou valley and Japfu Peak offer one of the most breath taking landscapes of the continent. Nagaland is called the 'Switzerland of the East' and Dzukou valley and Japfu Peak provide solid proof to that moniker. Dzukou valley and Japfu Peak trek, is one of the most beautiful and mesmerizing treks you can find in the country and an absolute must for all trekking enthusiasts.

The Japfu Peak standing tall at 3048 meters is the second highest peak in Nagaland and provides the perfect vantage point for admiring the heavenly beauty of the Dzukou Valley. Dzukou valley is also known as the "Valley of Flowers of the east" and is quite a sight to behold, when in full bloom. Dzukou Valley is considered to be the base of the crater of an old volcano and seems like covered with a carpet of the most exquisite species of grass and flowers. The highest point in the Dzukou valley is at 2600 meters and provides a wide and panoramic view of the enchanting valley in the front. Sitting atop the hill you are just overwhelmed by the sheer beauty and magnificence of the sight in front of you</p>

</div>
		<div class="name" id="six">Phek... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Phek is a hilly area rich in flora and fauna. Apart from the spell bounding hills, Shilloi lake is an important attraction.

The important and spellbinding hills of Phek district are Kapamodz and Zanibou, while the main rivers are Tizu, Lanye, and Sedzu. The Khezhakeno tourist village also stands out as a must see here. Phek waterfall orchid feels add just the right icing to this off-beat travel destination. This offbeat destination in Nagaland abounds in colors and festivities which can make the tourists experience a more vibrant one.</p>

	</div>
		<br>
		<div class="name" id="food">Cuisine... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">Nagaland, located in very Northeastern India, is a state that’s just north of Myanmar and just south of China and Bhutan.

There are sixteen main tribes in Nagaland, each with similar yet unique traditions and practices. While food from each tribe overlaps, there are also certain dishes that are specifically known from a certain tribe. Rice, pork, chicken, dog, insects and worms, vegetables, and famous chili sauces are essential in the Naga diet.</p>

	</div>
		<br>
		<div class="name" id="culture">Culture... </div>
		<hr/>
<div class="pdheader">
		<p class="explain"> Nagaland supports a flamboyant tribal culture which leaves anybody visiting the place amazed and dazzled.Nagaland has an ancient history of tribes whose count sums to be as much as 66 including the sub-tribes. Out of these, 16 are considered as major tribes. With a difference in language, all tribes have a similar leafy dress code, eating habits and traditional laws. Nagas are mostly Christians. The state is regarded as the most Baptist state in the world as 75% of it is dominated by them. Soft-heartedness and hospitality of Nagas leave anyone visiting the place astounded. They have a zest for life and are very exuberant when it comes to celebrating festivals or any other day of equal significance.

</p>

	</div>
		<br>
		<div class="name" id="floraandfauna">Flora & Fauna... </div>
		<hr/>
<div class="pdheader">
		<p class="explain">It is exquisitely rich in flora and fauna and is a habitat to some of the dandiest plants and animals, not leaving behind the beautiful birds to which this place is a home. Owing to its diversity in birds, Nagaland is referred to as, The Falcon Capital of The World.</p>

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
