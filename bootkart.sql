-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 09:38 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bootkart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(3, 'Laptop'),
(1, 'Mobiles'),
(6, 'Mouse'),
(2, 'TVs'),
(7, 'Watches');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isAdmin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `isAdmin`) VALUES
(1, 'Test', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0),
(2, 'bootcamp', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0),
(3, 'Mystic', 'f06e1de18e444ce197b14b5eac395ef3840f43c5', 0),
(8, 'boot', '5c73b0c6f476ded38de389f894770f06f4d02b2f', 0),
(18, 'Mak', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1),
(20, 'Tim', 'Tim', 0),
(23, '1234', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0),
(24, 'Deepali', '0197a79eb31a59b7d38f3ae90f85fdb41412bce2', 0),
(29, 'makkk', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1),
(30, 'Sid', 'da58b0c134ced9fa3847c7d85a083541cd9a0663', 0),
(31, 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1),
(32, 'Makarand', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userid`, `productid`) VALUES
(1, 29, 1),
(2, 18, 1),
(3, 30, 20),
(4, 32, 1),
(5, 32, 2),
(6, 32, 10),
(7, 32, 3),
(8, 32, 4);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(25555) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `img`, `category`) VALUES
(1, 'Oneplus 7', 37000, 'Unlock your OnePlus 6T with the fastest in-display fingerprint sensor on any smartphone. We are setting a new industry standard with our cutting-edge Screen Unlock technology. What\'s more? You can charge it faster than ever before.', 'https://static.toiimg.com/thumb/msid-65756441,width-640,resizemode-4/65756441.jpg', 'Mobiles'),
(2, 'Apple iPhone 8 Plus', 68999, 'An all-new glass design, an updated camera, and a powerful chip, thereâ€™s so much to love about the iPhone 8 Plus. This iPhone brings you an augmented reality experience thatâ€™s more immersive than before. Whatâ€™s more? You can charge your iPhone wirel', 'https://c1.neweggimages.com/NeweggImage/ProductImage/A4SA_131767615938287008QfwhoV66gz.jpg', 'Mobiles'),
(3, 'Samsung Galaxy A6', 18990, 'Get the best of the smartphone experience with the Samsung Galaxy A6. The sAMOLED Infinity 14.25 cm (5.6) Display offers an immersive viewing experience for everything you watch on it. Thanks to its stunning rear and front cameras, you can capture amazing', 'https://img.etimg.com/thumb/msid-64621636,width-640,resizemode-4,imgsize-135765/mid-range-smartphone.jpg', 'Mobiles'),
(4, 'Oneplus 6', 39999, 'Breeze through apps with little to no load times, or shift quickly between gaming, working and browsing. We didn\'t design our features to win speed tests. We did it because we want to enable you to do more in less time.', 'https://static.toiimg.com/thumb/msid-65903519,width-640,resizemode-4/65903519.jpg', 'Mobiles'),
(10, 'Sony 80 cm 32 Inches HD Ready LED TV KLV-32R202F Black 2018 Model', 20990, 'Your TV makes a great-sounding radio too! Enjoy crisp and clear reception of your favorite FM stations through BRAVIA\'s powerful speakers. Easily switch stations using your TV remote. Up to 30 FM stations can be stored to recall whenever you want', 'http://static.clickbd.com/global/classified/item_img/2268706_0_original.jpg', 'TVs'),
(11, ' Sony Bravia 101.6 cm 40 Inches Full HD LED TV KLV-40R252F ', 18990, 'Connecting a USB canâ€™t get simpler. Play music, video clips and view photo collections all through your TV with super multi-format USB play. Since it supports multiple formats all you have to do is simply plug it in and you are ready to go.', 'http://static.clickbd.com/global/classified/item_img/2280696_1_original.jpg', 'TVs'),
(12, 'Sony Bravia 61 cm 24 Inches HD Ready LED TV KLV-24P413D', 68999, 'X-Protection PRO: Xtra Protection TV Your TV is strong now. Advanced protection shields your TV against electrical surges, while a primary capacitor protects against unstable electricity. An anti-humidity coating on the circuit board prevents short-circui', 'http://static.clickbd.com/global/classified/item_img/1729827_0_original.jpg', 'TVs'),
(13, 'LG 55 cm 22 Inches Full HD IPS LED TV 22LH480A-PT', 37000, 'Lifeâ€™s Good with LG and its range of products. Begin by transforming your TV viewing experience and enjoy the thrill of premium TV/Audio/Video, with LG Indiaâ€™s superior TV viewing technology. Enjoy the next level TV viewing with widest range of Super ', 'https://static.toiimg.com/thumb/msid-66262656,width-640,resizemode-4/66262656.jpg', 'TVs'),
(14, 'HE 61 cm 24 Inches Full HD LED TV Black', 13429, 'Full HD LED TVs, Stunning Clarity Screen. HDR a New Generation Technology to be consider subverting the existing experience of video play back, screen colours and brightness than the SDR. Allows the audience to feel extremely realistic visual experience.', 'https://c1.neweggimages.com/NeweggImage/ProductImage/ACV1_1_20170227956796692.jpg', 'TVs'),
(15, 'Acer Nitro Core i7 8th Gen 15.6-inch Laptop ', 74990, ' Enjoy premium looks without the premium price with the Acer Nitro Gaming Notebook (model AN515-52), which features a beautiful exterior. It features a 15.6-inch high-def. display giving you ample space for opening multiple windows and digital entertainme', 'https://static.toiimg.com/thumb/msid-59844989,width-640,resizemode-4/59844989.jpg', 'Laptops'),
(16, 'Asus ZenBook 13 UX331UAL-EG001T 13.3-inch Laptop ', 69990, ' The revolutionary Zen Book 13 is a laptop thatâ€™s ultralight, ultrathin and ultra powerful. Itâ€™s built to give you the ultimate mobility, featuring a feather-light sub-1kg all-metal chassis and all-day 15-hour battery life. And despite its compact, ul', 'https://images10.newegg.com/ProductImage/34-234-966-V17.jpg', 'Laptops'),
(17, 'Microsoft Surface Book 2', 74990, 'Enjoy smooth multitasking and excellent performance with 8GB installed RAM and 1TB HDD with 128 GB SSD and NVIDIA GeForce GTX 1050Ti with 4GB Dedicated GDDR5.', 'https://o.aolcdn.com/images/dims?thumbnail=640%2C480&quality=80&image_uri=https%3A%2F%2Fo.aolcdn.com%2Fimages%2Fdims%3Fcrop%3D1400%252C932%252C0%252C0%26quality%3D85%26format%3Djpg%26resize%3D1600%252C1066%26image_uri%3Dhttps%253A%252F%252Fs.yimg.com%252Fos%252Fcreatr-uploaded-images%252F2018-11%252F0f032fb0-e386-11e8-8466-1a6dbdf5bcb1%26client%3Da1acac3e1b3290917d92%26signature%3Dffa123344f3301b6ca73d8afcef8cbbb8164073e&client=amp-blogside-v2&signature=e0767ff64eed23a56aae868ed0587dab33d6b121', 'Laptops'),
(18, 'Aspire 5 A515-52 Thin and Light Laptop', 68999, 'Acer Aspire 5 hosts fastest Intel Core i5 U-series Whiskey Lake Processor 8265U , 1.6 Ghz, 3M Cache. It has 8 GB DDR4 RAM and Storage (Hard Drive) of 1 TB with 5400 RPM. Graphics are taken care by Intel Integrated Graphics. ', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRorzUhL28-MBYbxBuLOlPNAteMKjb-EGi3xpo912tQWm-J72HP', 'Laptops'),
(20, 'HP OMEN POWERFUL', 105999, 'intel 17- 7700HQ | Nvidia gtx 1050ti 4GB | 8 GB ram | 128 SSD | 1TB storage fastest gaming laptop of all times', 'https://images-na.ssl-images-amazon.com/images/I/81Xq%2BqfqiyL._SX425_.jpg', 'Laptops');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category` (`category`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `login` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
