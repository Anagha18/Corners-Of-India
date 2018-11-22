-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2018 at 07:54 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `places`
--

-- --------------------------------------------------------

--
-- Table structure for table `alldata`
--

CREATE TABLE `alldata` (
  `ID` int(11) NOT NULL,
  `AllPlaces` varchar(255) NOT NULL,
  `AllDays` int(1) NOT NULL,
  `Place1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alldata`
--

INSERT INTO `alldata` (`ID`, `AllPlaces`, `AllDays`, `Place1`) VALUES
(1, 'Bangalore', 1, 'Day 1:\r\n1.Bannerghatta National Park\r\n2.Bangalore Palace\r\n3.Cubbon Park'),
(2, 'Bangalore', 2, 'Day 2:\r\n1.ISKCON Temple\r\n2.Lalbhag\r\n3.Ulsoor Lake'),
(3, 'Bangalore', 3, 'Day 3:\r\n\r\n1.Fun World\r\n2.Government Museum\r\n3.Vidhaan Soudha\r\n\r\n'),
(4, 'Chennai', 1, 'Day 1:\r\n1.Marina beach\r\n2.Kapaleeshwar Temple\r\n3.Government Museum\r\n4.St. Thomas Cathedral Basilica'),
(5, 'Chennai', 2, 'Day 2:\r\n1.Edward Elliot\'s Beach\r\n2.Arignar Anna Zoological Park\r\n3.Semmozhi Poonga\r\n4.Light House\r\n'),
(6, 'Chennai', 3, 'Day 3:\r\n1.MGM Dizzee World\r\n2.Kalikambal Temple\r\n3.Chennai Rail Museum\r\n'),
(7, 'Mumbai', 1, 'Day 1:\r\n1.Gateway of India\r\n2.Elephanta Caves\r\n3.Elephanta Island\r\n4.Marine Drive'),
(8, 'Mumbai', 2, 'Day 2:\r\n1.Kanheri Caves\r\n2.Haji Ali Dargah\r\n3.Juhu Beach'),
(9, 'Mumbai', 3, 'Day 3:\r\n1.EsselWorld\r\n2.Hanging Gardens of Mumbai\r\n3.Bandra–Worli Sea Link'),
(10, 'Kolkata', 1, 'Day 1:\r\n1.Victoria Memorial\r\n2.Howrah Bridge\r\n3.Dakshineswar Kali Temple\r\n'),
(11, 'Kolkata', 2, 'Day 2:\r\n1.Indian Museum\r\n2.Belur Math\r\n3.Kalighat Kali Temple\r\n4.Park Street\r\n'),
(12, 'Kolkata', 3, 'Day 3:\r\n1.Bandel Church\r\n2.Diamond Harbour Road\r\n3.Rabindra Bharati Museum\r\n4.Nalban Park\r\n5.Netaji Bhawan'),
(13, 'Hyderabad', 1, 'Day 1:\r\n1.Charminar\r\n2.Golkonda\r\n3.Hussain Sagar'),
(14, 'Hyderabad', 2, 'Days 2:\r\n1.Chowmahalla Palace\r\n2.Salar Jung Museum\r\n3.Nehru Zoological Park\r\n4.Nehru Zoological Park'),
(15, 'Hyderabad', 3, 'Day 2:\r\n1.Ramoji Film City\r\n2.Durgam Cheruvu\r\n3.Sanghi Temple\r\n4.Purani Haveli'),
(16, 'Mumbai', 1, 'Day 1:\r\n1. Marine Drive\r\n2. Gateway Of India\r\n3. Colaba Causeway'),
(17, 'Mumbai', 2, 'Day 2:\r\n1. Juhu Beach\r\n2. Siddhivinayak Temple\r\n3. Elephanta Caves'),
(18, 'Mumbai', 3, 'Day 3:\r\n1. Bandra Worli Sea Link\r\n2. Victoria Terminus\r\n3. Prince Of Wales Museum\r\n2.\r\n3.\r\n'),
(19, 'Delhi', 1, 'Day 1:\r\n1. Red Fort\r\n2. India Gate\r\n3. Rashtrapti Bhavan'),
(20, 'Delhi', 2, 'Day 2:\r\n1. Qutub Minar\r\n2. Jantar Mantar\r\n3. Humayun\'s Tomb'),
(21, 'Delhi', 3, 'Day 3:\r\n1. Akshardham Temple\r\n2. ISKON temple\r\n3. Lotus Temple'),
(22, 'Ranchi', 1, 'Day 1:\r\n1. Deori Temple\r\n2. Jonha Falls\r\n3. Rock Garden'),
(23, 'Ranchi', 2, 'Day 2:\r\n1. Pahari Mandir\r\n2. Hudru Falls\r\n3. Birsa Zoological Park'),
(24, 'Ranchi', 3, 'Day 3:\r\n1. Sun Temple\r\n2. Kanke Dam\r\n3. Hirni Falls'),
(25, 'Vizag', 1, 'Day 1:\r\n1. Kailasagiri\r\n2. Indira Gandhi Zoological Parl\r\n3. Simhachalan Temple\r\n3.'),
(26, 'Vizag', 2, 'Day 2:\r\n1. Bora Caves\r\n2. Yarada Beach\r\n3. Visakha Museum'),
(27, 'Vizag', 3, 'Day 3:\r\n1. Tyda Park\r\n2. INS Kurusura Submarine Museum\r\n3. Ramakrishna Beach'),
(28, 'Pune', 1, 'Day 1:\r\n1. Darshan Museum\r\n2. ISKCON Temple\r\n3. Lord Ayyapa Temple'),
(29, 'Pune', 2, 'Day 2:\r\n1. Pune Tribal Museum\r\n2. Hanuman Lake\r\n3. Rajgad Lake'),
(30, 'Pune', 3, 'Day 3:\r\n1. Western Ghats\r\n2. Narayani Dham Temple\r\n3. Katraj Jain Temple'),
(31, 'Ahmedabad', 1, 'Day 1:\r\n1. Iceberg Snow World\r\n2. Sabarmati Ashram\r\n3. Dada Bhagwan Temple\r\n'),
(32, 'Ahmedabad', 2, 'Day 2:\r\n1. Akshardham Temple\r\n2. Fun World\r\n3. Toy Museum'),
(33, 'Ahmedabad', 3, 'Day 3:\r\n1. Manek Chowk\r\n2. Parimal Garden\r\n3. Naroda Lake\r\n3.'),
(34, 'Jaipur', 1, 'Day 1:\r\n1. Amber Fort\r\n2. Nahargarh Fort\r\n3. City Palace'),
(35, 'Jaipur', 2, 'Day 2:\r\n1. Hawa Mahal\r\n2. Jantar Mantar\r\n3. Water Valley'),
(36, 'Jaipur', 3, 'Day 3:\r\n1. Jal Mahal\r\n2. Albert Hall Museum\r\n3. Chour Ghat'),
(37, 'Chandigarh', 1, 'Day 1:\r\n1. Rock Garden\r\n2. Sukhna Lake\r\n3. Elante Mall'),
(38, 'Chandigarh', 2, 'Day 2:\r\n1. Sukhna Wildlife Sanctuary\r\n2. Government Museum\r\n3. Japanese Garden'),
(39, 'Chandigarh', 3, 'Day 3:\r\n1. Shanti Kunj\r\n2. Timber Trail\r\n3. Mahendra Choudhary Zoological Park'),
(40, 'Surat', 1, 'Day 1:\r\n1. Sri Shirdi Sai Temple\r\n2. Linear Park\r\n3. Dumas Beach\r\n2.\r\n3.'),
(41, 'Surat', 2, 'Day 2:\r\n1. Shabari Dham\r\n2. ISKCON Temple\r\n3. Ambaji Temple'),
(42, 'Surat', 3, 'Day 3:\r\n1. Gopi Talav\r\n2. Sarthana National Park\r\n3. Amaazia Water Park'),
(43, 'Indore', 1, 'Day 1:\r\n1. Gomatgiri\r\n2. Annapurna Temple\r\n3. Sarafa Bazaar'),
(44, 'Indore', 2, 'Day 2:\r\n1. Ralamandal Wildlife Sanctuary\r\n2. Tincha Fall\r\n3. Khajrana Ganesh Mandir'),
(45, 'Indore', 3, 'Day 3:\r\n1. Treasure Island Mall\r\n2. Kanch Mandir\r\n3. Patalpani Waterfall'),
(46, 'Kochi', 1, 'Day 1:\r\n1. Chottanikara Temple\r\n2. Kerala Forklore Museum\r\n3. Catholic Art Museum'),
(47, 'Kochi\r\n', 2, 'Day 2:\r\n1. Jeevamatha Church\r\n2. Kuzhuppily Beach\r\n3. Chittoor Shrikrishnaswamy Temple'),
(48, 'Kochi', 3, 'Day 3:\r\n1. Willingdong Island\r\n2. Jawahar Park\r\n3. Santa Cruz Cathedral Basilica'),
(49, 'Lucknow', 1, 'Day 1:\r\n1. Janeshwar Mishra Park\r\n2. Moti Mahal\r\n3. Indira Gandhi Planetarium'),
(50, 'Lucknow', 2, 'Day 2:\r\n1. Kukrail Forest Reserve\r\n2. Juma Masjid\r\n3. Bara Imbambara'),
(51, 'Lucknow', 3, 'Day 3:\r\n1. Sikandar Bagh\r\n2. Begum Hazrat Mahal\r\n3. Ganga Aquarium'),
(52, 'Nagpur', 1, 'Day 1:\r\n1. Deeksha Bhoomi\r\n2. Nagpur Ramtek Temple\r\n3. Ramtek Fort Temple'),
(53, 'Nagpur', 2, 'Day 2:\r\n1. All Saint\'s Cathedral\r\n2. Khindsi Lake\r\n3. Swaminarayan Temple'),
(54, 'Nagpur', 3, 'Day 3:\r\n1. Sai Baba Temple\r\n2. Koradi Temple\r\n3. Ambazari Lake and Garden'),
(55, 'Agra', 1, 'Day 1:\r\n1. Taj Mahal\r\n2. Agra Fort\r\n3. Fathepur Sikri'),
(56, 'Agra', 2, 'Day 2:\r\n1. Akbar\'s Tomb\r\n2. Jama Masjid\r\n3. Wildlife SOS'),
(57, 'Agra', 3, 'Day 3:\r\n1. Mehtab Bagh\r\n2. Taj Museum\r\n3. Chini Ka Rauza'),
(58, 'Coimbatore', 1, 'Day 1:\r\n1. Adiyogi Shiva\r\n2. ISKCON Temple\r\n3. Sozhaiyaar Dam'),
(59, 'Coimbatore', 2, 'Day 2:\r\n1. Monkey Falls\r\n2. Marudhamalai Hill Temple\r\n3. Kovai Kutralam Falls'),
(60, 'Mysore', 1, 'Day 1:\r\n1. Somnathpur Temple\r\n2. Mysore Maharaja\'s Palace\r\n3. Railway Museum'),
(61, 'Mysore', 2, 'Day 2:\r\n1. Jamia Masjid\r\n2. Kukkarahalli Lake\r\n3. Brindavan Garden'),
(62, 'Mysore', 2, 'Day 3:\r\n1. Shuka Vana\r\n2. Planet Earth Aquarium\r\n3. Srikanteshwara Temple'),
(63, 'Coimbatore', 3, 'Day 3:\r\n1. Eechanari Vinayagar Temple\r\n2. Geede Car Museum\r\n3. Sholayar Dam');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
