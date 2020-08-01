-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2020 at 03:04 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
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
  `isAdmin` int(11) NOT NULL DEFAULT 0,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `isAdmin`, `type`) VALUES
(1, 'Test', 'Test', 0, ''),
(2, 'bootcamp', 'bootcamp123', 0, ''),
(3, 'Mystic', 'f06e1de18e444ce197b14b5eac395ef3840f43c5', 0, ''),
(8, 'boot', '5c73b0c6f476ded38de389f894770f06f4d02b2f', 0, ''),
(18, 'Mak', 'db516734dec079b9e57489deacf03cedac0a8d69', 1, ''),
(20, 'Tim', 'Tim', 0, ''),
(23, '1234', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, ''),
(24, 'Deepali', '0197a79eb31a59b7d38f3ae90f85fdb41412bce2', 0, ''),
(29, 'makkk', 'e48b01625749299b997e5398a7364973e381b7a0', 1, ''),
(30, 'Sid', 'da58b0c134ced9fa3847c7d85a083541cd9a0663', 0, ''),
(31, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, ''),
(32, 'admins', 'admins', 1, ''),
(47, 'mak12', '12', 0, 'victim'),
(48, 'cineed', 'cineed', 0, 'ngo'),
(49, 'casa', 'casa', 0, 'ngo'),
(51, 'examplengo', '123', 0, 'ngo'),
(52, 'helpindia', 'hempindia', 0, 'ngo');

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
(3, 30, 20);

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `websitelink` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `img` varchar(25555) NOT NULL,
  `username` varchar(255) NOT NULL,
  `isverified` int(11) NOT NULL DEFAULT 0,
  `registration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `name`, `websitelink`, `description`, `img`, `username`, `isverified`, `registration`) VALUES
(1, 'Child in Need Institute', 'https://www.cini-india.org/', 'COVID – 19 Impact: Vulnerable Children and Women Need Your Urgent Support.Donate to our emergency response fund, distributing Nutrimix, a low cost nutritious product for children and women, food items, soap, masks and sanitizers etc. Our trained volunteers distribute the relief materials following the norms of social distancing, washing their hands before and after distribution, wearing masks.\nCINI is a registered non-profit non-government organisation (NGO) registered under the Societies Registration Act in India. We work with over 1900 Indian professionals. We are guided by a Governing Body composed of experienced Indian practitioners, academics and administrators. Founded in 1974 by a pediatrician, Dr. Samir Chaudhuri, CINI is located in Kolkata (former Calcutta), West Bengal, India and runs operations in the states of West Bengal, Jharkhand and Odhisha , assisting about 7 million people. We have been recipient of prestigious awards and recognitions in India and around the world.\n', 'https://upload.wikimedia.org/wikipedia/en/5/55/Cini2011.png', 'cineed', 0, '2546'),
(2, 'CASA', 'https://casa-india.org/', 'CASA is an Indian development and humanitarian organization. Established in 1947, we stand for Care, Awareness, Service and Action. We work for the poorest of the poor irrespective of caste, religion, gender and political affiliations.Our focus is people helping people.\n', 'https://media-exp1.licdn.com/dms/image/C4E0BAQFUupmLz9RGjA/company-logo_200_200/0?e=2159024400&v=beta&t=3EJBwXwNIk_PfRk4xo-ZOPyIn0B3gil-bDhgx-krYL8', 'casa', 1, '4564'),
(3, 'Akshaya Patras Covid Relief Service', 'https://www.akshayapatra.org/covid-relief-services?gclid=EAIaIQobChMI9aONpOLy6gIVyhErCh1iFQpSEAAYAiAAEgI6n_D_BwE', 'The Akshaya Patra Foundation is an NGO in India headquartered in Bengaluru.The Akshaya Patra Foundation, in close coordination with State Governments & District Administration, has stepped in to provide relief by providing food to thousands of people across the country.By adhering to all safety and hygiene measures, Akshaya Patra has begun its relief service by providing meal or packed grocery kits to the marginalised and low-income segment of the society comprising of daily wage workers, migrant labourers, construction site workers, and needy people at old age homes and night shelters.', 'https://www.akshayapatra.org/apadmin/uploads/settings/logo-akshayapatra_main_website.jpg', 'akshaya', 0, '54654'),
(4, 'Dream Girl Foundation', 'https://dreamgirlfoundation.ngo/covid-19-response-ngo/?gclid=EAIaIQobChMI4qmI3OLy6gIVinwrCh0K8gt2EAAYAiAAEgJmefD_BwE', 'Established in the year 2003, Dream Girl Foundation is one of the eminent non-profit organisations engaged in providing a better future to the underprivileged girls. Dream Girl foundation has managed to convert its non-Formal Education centres into Ration Distribution Centres and have successfully provided families easy access to their ration kits from the ration distribution centres. Dream Girl Foundation’s relentless and grounded efforts during this pandemic have helped provide food to over 400 families, roughly over 2000 individuals.', 'https://dreamgirlfoundation.ngo/wp-content/uploads/2017/03/logo1.png', 'dreamgirl', 0, '24242'),
(5, 'IAHV India', 'https://www.iahv.org/in-en/donate/', 'IAHV is an international volunteer-based NGO in special consultative status with the Economic and Social Council (ECOSOC) of the United Nations which along with the Art of living has touched the lives of people in 155 countries around the world. An international humanitarian NGO, IAHV implements social development programs aimed at increasing global equity, sustainable development initiatives, and social justice for all human beings on the planet.\nIndia’s Daily Wage Earners and their families have been the worst hit by the lockdown.The International Association for Human Values, The Art of Living Foundation and the Indian Film and Television Industry have launched this campaign to support our Daily Wage Earners in their time of need.\n', 'https://www.iahv.org/in-en/wp-content/uploads/2019/08/IAHV-Logo.png', 'iahv', 0, '888'),
(6, 'Oxfam India', 'https://www.oxfamindia.org/coronavirus', 'Oxfam India is a movement of people working to end discrimination and create a free and just society. Oxfam India is gearing up to respond to this unprecedented pandemic by leveraging their expertise in water, sanitation, and hygiene while advocating for the most vulnerable.We also appeal to each one of you to ensure that the informal workers around you — your house help, drivers, support staff, rickshaw pullers, delivery persons, daily wagers — continue to get their wages and are provided all the support during these times.', 'https://www.oxfamindia.org/sites/default/files/2020-03/xxoxfam_profile_3_0.png,Mic_.HNF0n0-i1X.png.pagespeed.ic.BhozHCRwTy.png', 'oxfam', 0, '2546'),
(7, 'Give2Asia', 'https://give2asia.org/covid-19-pandemic-response-india/', 'Give2Asia is an international nonprofit organization that connects corporations, foundations, and individuals with charitable projects and social enterprises across Asia. Give2Asia is partnering with trusted nonprofit organizations to support frontline health workers and institutions responding to the coronavirus pandemic. The recent lockdown has significantly affected many at-risk communities. Our role is to empower our local NGO partners to support these communities through this time of challenge.', 'https://give2asia.org/wp-content/uploads/2019/11/Give2Asia-logo-500px.png', 'give2asia', 0, '2466+'),
(8, 'Ketto', '', 'Organize activities to raise funds or otherwise solicit and gather monetary donations or other gifts for an organization. May also raise awareness of the organization\'s work, goals, and financial needs.We work for the poorest of the poor irrespective of caste, religion, gender, and political affiliations. Our focus is on people helping people. We also raise funds for research and development in the field of medical and technical advancement.', 'https://d1vdjc70h9nzd9.cloudfront.net/media/ngo/0/31/image/093a1694f1822be7ea5c772f9d680dc650b7d23e.jpg', 'ketto', 0, '24668'),
(9, 'Mediniz', 'https://mediniz.com/list/hospitals/india', 'We are connecting people with medical experts and resources. We provide them the forum through which they can get all the information related to the hospital around them in the time of the pandemic. We make sure that the inadequacy of vacuity can never become a concern for the victim in need.', 'https://zenprospect-production.s3.amazonaws.com/uploads/pictures/5e93e433981a4e000140b42a/picture', 'mediniz', 0, '2466'),
(10, 'examplengo', 'https://github.com/makarandmadhavi/bootcamp', '', '', 'examplengo', 1, '12345586'),
(11, 'HelpIndia', 'https://www.giveindia.org/nonprofit/vidhayak-sansad', '', '', 'helpindia', 1, '256487');

-- --------------------------------------------------------

--
-- Table structure for table `victims`
--

CREATE TABLE `victims` (
  `name` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `aadhar` varchar(12) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` int(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `iscovidpositive` varchar(3) NOT NULL DEFAULT 'Yes',
  `isverified` int(2) NOT NULL DEFAULT 0,
  `service` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `victims`
--

INSERT INTO `victims` (`name`, `description`, `aadhar`, `contact`, `email`, `address`, `username`, `iscovidpositive`, `isverified`, `service`) VALUES
('Jyotiraditya', 'Reserach', '122348000000', '2147483647', 0, 'Gujarat', 'jyo56', 'Yes', 0, 'casa'),
('mahodar majgaonkar', 'financial aid', '122548000000', '1118792145', 0, 'Uttarpradesh', 'mah78', 'Yes', 0, ''),
('Rajesh Bhat', 'Financial Aid', '123488000000', '2147483647', 0, 'Maharashtra', 'raj1234', 'Yes', 0, ''),
('Nilkant Kumar', 'Research', '164548000000', '2147483647', 0, 'Uttarpradesh', 'nil54', 'Yes', 0, ''),
('Romin irani', 'Research', '189548000000', '2147483647', 0, 'Uttarpradesh', 'rom233', 'Yes', 0, ''),
('Nikhilesh singh', 'Research', '198548000000', '2147483647', 0, 'Maharashtra', 'nik12345', 'Yes', 0, ''),
('shrikant padhy', 'finacial aid', '219548000000', '2147483647', 0, 'Maharashtra', 'shri99', 'Yes', 0, ''),
('Shakti gupta', 'food', '365648000000', '2147483647', 0, 'Tamil Nadu', 'shak122', 'Yes', 0, ''),
('Tejas pal', 'food', '366648000000', '1368792145', 0, 'Maharashtra', 'tej651', 'Yes', 0, ''),
('Tejal Singh', 'food', '366748000000', '2147483647', 0, 'Tamil Nadu', 'jal54', 'Yes', 0, ''),
('Sumeet Sawant', 'Food', '451269000000', '2147483647', 0, 'Maharashtra', 'sumeet56', 'Yes', 0, ''),
('Suresh jha', 'Financial Aid', '457685000000', '2147483647', 0, 'Maharashtra', 'sur23', 'Yes', 0, ''),
('Ram Singh', 'Food', '457865000000', '2147483647', 0, 'Uttar Pradesh', 'ram32', 'Yes', 0, ''),
('lokesh sethi', 'food', '459548000000', '1568792145', 0, 'Maharashtra', 'lok78', 'Yes', 0, ''),
('Nizam', 'Research', '465468000000', '2147483647', 0, 'Gujarat', 'niz12', 'Yes', 0, ''),
('Zakir Khan', 'Research', '466648000000', '2147483647', 0, 'Uttarpradesh', 'zak34', 'Yes', 0, ''),
('Akash Shah', 'Food', '548963000000', '2147483647', 0, 'Gujarat', 'ak64', 'Yes', 0, ''),
('hitesh kumar', 'Finacial aid', '549548000000', '2147483647', 0, 'Gujarat', 'hi56', 'Yes', 0, ''),
('Saurabh Ganguli', 'Food', '635548000000', '2147483647', 0, 'Gujarat', 'sau77', 'Yes', 0, ''),
('shilpa shukla', 'financial aid', '655548000000', '2147483647', 0, 'Gujarat', 'shi71', 'Yes', 0, ''),
('Rajesh kumar', 'Food', '659548000000', '2147483647', 0, 'Tamil Nadu', 'raj34', 'Yes', 0, ''),
('Shashi Tharoor', 'Education', '743548000000', '2147483647', 0, 'Uttarpradesh', 'sha87', 'Yes', 0, ''),
('Rupesh Saini', 'Financial Aid', '745126000000', '2147483647', 0, 'Punjab', 'rupesh35', 'Yes', 0, ''),
('Ramesh Pande', 'Research', '789542000000', '2147483647', 0, 'Bihar', 'ramesh11', 'Yes', 0, ''),
('Sanjay khair', 'Food', '834548000000', '2147483647', 0, 'Gujarat', 'sa12', 'Yes', 0, ''),
('Suraj Sharma', 'Research', '878946000000', '2147483647', 0, 'Gujarat', 'suraj45', 'Yes', 0, ''),
('Rahul Iyer', 'Financial Aid', '879548000000', '2147483647', 0, 'Tamil Nadu', 'rahul12', 'Yes', 0, ''),
('akshay sharma', 'Financial aid', '898795000000', '2147483647', 0, 'Gujarat', 'aks77', 'Yes', 0, ''),
('grish jha', 'Food', '954128000000', '2147483647', 0, 'Tamil Nadu', 'gir67', 'Yes', 0, ''),
('Sanjhiv Mishra', 'Financial Aid', '979548000000', '2147483647', 0, 'Maharashtra', 'san45', 'Yes', 0, ''),
('kisame', 'food', '989548000000', '2147483647', 0, 'Uttarpradesh', 'kis531', 'Yes', 0, ''),
('Ramesh Gaikwad', 'Food', '998767000000', '2147483647', 0, 'Gujarat', 'ram12', 'Yes', 0, '');

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
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `victims`
--
ALTER TABLE `victims`
  ADD PRIMARY KEY (`aadhar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
