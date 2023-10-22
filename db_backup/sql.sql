-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2023 at 11:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_2`
--

CREATE TABLE `category_2` (
  `id` int(11) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_2`
--

INSERT INTO `category_2` (`id`, `category_id`, `description`, `image`, `status`, `created`) VALUES
(1, 'Biscuit', '<h3>Free Cold Drink Photos - Pexels</h3>\r\n\r\n<p>1,523 Free&nbsp;<em>images</em>&nbsp;of&nbsp;<em>Cold Drink</em>. Related&nbsp;<em>Images</em>:&nbsp;<em>drink cold</em>&nbsp;beer lemonade alcohol lemon juice glass soda bar. Find your perfect&nbsp;<em>cold drink image</em>. Free&nbsp;<em>pictures</em>&nbsp;...</p>\r\n\r\n<p>Browse 260,881&nbsp;<em>cold drink</em>&nbsp;stock&nbsp;<em>photos</em>&nbsp;and&nbsp;<em>images</em>&nbsp;available or search for ice&nbsp;<em>cold drink</em>&nbsp;or&nbsp;<em>cold drink</em>&nbsp;bottle to find more great stock&nbsp;<em>photos</em>&nbsp;and&nbsp;<em>pictures</em>.</p>\r\n', '1674410284biscit.jpg', 'yes', '2022-11-17 12:34:18'),
(2, 'Cool Drink', '<h3>&nbsp;Free Cold Drink Photos - Pexels</h3>\r\n\r\n<p>1,523 Free&nbsp;<em>images</em>&nbsp;of&nbsp;<em>Cold Drink</em>. Related&nbsp;<em>Images</em>:&nbsp;<em>drink cold</em>&nbsp;beer lemonade alcohol lemon juice glass soda bar. Find your perfect&nbsp;<em>cold drink image</em>. Free&nbsp;<em>pictures</em>&nbsp;...</p>\r\n\r\n<p>Browse 260,881&nbsp;<em>cold drink</em>&nbsp;stock&nbsp;<em>phogfhfhjgjgj gfhjg j</em></p>\r\n', '1674410439cool2.jpg', 'yes', '2022-11-17 12:53:03'),
(3, 'Bakery', '<h3>&nbsp;Bakery data&nbsp; Free Cold Drink Photos - Pexels</h3>\r\n\r\n<p>1,523 Free&nbsp;<em>images</em>&nbsp;of&nbsp;<em>Cold Drink</em>. Related&nbsp;<em>Images</em>:&nbsp;<em>drink cold</em>&nbsp;beer lemonade alcohol lemon juice glass soda bar. Find your perfect&nbsp;<em>cold drink image</em>. Free&nbsp;<em>pictures</em>&nbsp;...</p>\r\n\r\n<p>Browse 260,881&nbsp;<em>cold drink</em>&nbsp;stock&nbsp;<em>photos</em>&nbsp;and&nbsp;<em>images</em>&nbsp;available or search for ice&nbsp;<em>cold drink</em>&nbsp;or&nbsp;<em>cold drink</em>&nbsp;bottle to find more great stock&nbsp;<em>photos</em>&nbsp;and&nbsp;<em>pictures</em>.</p>\r\n', '1674410552bakery.jpg', 'yes', '2022-11-18 04:28:26'),
(4, 'Vegetable', '<h3>Vegetabe&nbsp;</h3>\r\n\r\n<p>1,523 Free&nbsp;<em>images</em>&nbsp;of&nbsp;<em>Cold Drink</em>. Related&nbsp;<em>Images</em>:&nbsp;<em>drink cold</em>&nbsp;beer lemonade alcohol lemon juice glass soda bar. Find your perfect&nbsp;<em>cold drink image</em>. Free&nbsp;<em>pictures</em>&nbsp;...</p>\r\n\r\n<p>Browse 260,881&nbsp;<em>cold drink</em>&nbsp;stock&nbsp;<em>photos</em>&nbsp;and&nbsp;<em>images</em>&nbsp;available or search for ice&nbsp;<em>cold drink</em>&nbsp;or&nbsp;<em>cold drink</em>&nbsp;bottle to find more great stock&nbsp;<em>photos</em>&nbsp;and&nbsp;<em>pictures</em>.</p>\r\n', '1674410533veg.jpg', 'yes', '2022-11-21 10:06:10'),
(5, 'Chocolate ', '<h3>&nbsp;Chocolate data Cold Drink Photos - Pexels</h3>\r\n\r\n<p>1,523 Free&nbsp;<em>images</em>&nbsp;of&nbsp;<em>Cold Drink</em>. Related&nbsp;<em>Images</em>:&nbsp;<em>drink cold</em>&nbsp;beer lemonade alcohol lemon juice glass soda bar. Find your perfect&nbsp;<em>cold drink image</em>. Free&nbsp;<em>pictures</em>&nbsp;...</p>\r\n\r\n<p>Browse 260,881&nbsp;<em>cold drink</em>&nbsp;stock&nbsp;<em>photos</em>&nbsp;and&nbsp;<em>images</em>&nbsp;available or search for ice&nbsp;<em>cold drink</em>&nbsp;or&nbsp;<em>cold drink</em>&nbsp;bottle to find more great stock&nbsp;<em>photos</em>&nbsp;and&nbsp;<em>pictures</em>.</p>\r\n', '1674410509chocolet.webp', 'no', '2022-11-21 10:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `datablog_2`
--

CREATE TABLE `datablog_2` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datablog_2`
--

INSERT INTO `datablog_2` (`id`, `title`, `category_id`, `description`, `image`, `status`, `created`) VALUES
(1, 'Good Day', '1', '<p>Download and use 1000+&nbsp;<em>Biscuits</em>&nbsp;stock&nbsp;<em>photos</em>&nbsp;for free. ✓ Thousands of new&nbsp;<em>images</em>&nbsp;every day ✓ Completely Free to Use ✓ High-quality videos and&nbsp;<em>images</em>&nbsp;from&nbsp;</p>\r\n\r\n<h3>4,000+ Free Biscuit &amp; Cookies Images - Pixabay</h3>\r\n\r\n<p><cite>https://pixabay.com&nbsp;&rsaquo; images &rsaquo; search &rsaquo; biscuit</cite></p>\r\n\r\n<p>Find&nbsp;<em>images</em>&nbsp;of&nbsp;<em>Biscuit</em>. ✓ Free for commercial use ✓ No ... Thousands of&nbsp;<em>biscuit images</em>&nbsp;to choose from. ...&nbsp;<em>Hd Wallpaper</em>, Valentine, Valentines Day.</p>\r\n', '1668679645biscit.webp', 'yes', '2022-11-17 09:37:34'),
(3, 'Mirinda', '2', '<p>Download&nbsp;<em>Mirinda</em>&nbsp;stock&nbsp;<em>photos</em>. Free or royalty-free&nbsp;<em>photos</em>&nbsp;and&nbsp;<em>images</em>. Use them in commercial designs under lifetime, perpetual &amp; worldwide rights.</p>\r\n\r\n<p>Your&nbsp;<em>mirinda</em>&nbsp;stock&nbsp;<em>images</em>&nbsp;are here. Download&nbsp;<em>photos</em>&nbsp;for free or search from millions of&nbsp;<em>HD</em>&nbsp;quality&nbsp;<em>photos</em>, illustrations and vectors.</p>\r\n', '1669011524mirinda.jpg', 'no', '2022-11-17 16:16:48'),
(4, 'Kit Kat', '4', '<p>How many layers do Kit Kats have?</p>\r\n\r\n<p>A KIT KAT&reg; bar is made of&nbsp;<strong>three layers</strong>&nbsp;of wafer separated and covered by an outer layer of chocolate. The standard bars consist of four pieces, called fingers, and each finger can be snapped from the bar as an individual piece. Are KIT KAT&reg; Bars gluten fre</p>\r\n\r\n<p>What is the middle layer of a Kit Kat?</p>\r\n\r\n<p>&quot;To clarify, the &#39;chocolayer&#39; &mdash; the filling between the wafer of a Kit Kat &mdash; is made from&nbsp;<strong>cocoa liquor, sugar and a small amount of re-worked Kit Kat</strong>,&quot; a Nestl&eacute; U.K. spokesperson confirmed, adding, &quot;Please note, re-worked Kit Kat is product which cannot be sold.&quot;</p>\r\n', '1668746206kit kat.jpg', 'yes', '2022-11-18 04:36:46'),
(5, 'Dairy Milk', '3', '<p>Featuring&nbsp;<strong>layers of iconic Cherry Ripe flavoured jelly, coconut flavoured creme and coconut pieces encased in an Old Gold dark chocolate shell</strong>, the CADBURY Layers Cherry Ripe bar keeps the iconic taste of the traditional version, but 10 times bette</p>\r\n\r\n<p>Cadbury Silk :&nbsp;<strong>6 Variants</strong>&nbsp;: 5 X Medium Bars (50 - 60Gm) : Chocolate : Dairy Milk | Dairy milk chocolate, Dairy milk, Cadbury dairy milk</p>\r\n', '1697965921chocolet.webp', 'yes', '2022-11-18 04:42:00'),
(6, 'Parle G', '1', '<p>Parle G -&nbsp;</p>\r\n\r\n<p>Filled with the goodness of milk and wheat,&nbsp;<em>Parle</em>-<em>G</em>&nbsp;has been a source of all round nourishment for the nation since 1939. As its unique taste expanded over&nbsp;...</p>\r\n\r\n<p>It is made up of wheat flour, sugar, partially hydrogenated edible vegetable oils, invert syrup, leavening agents, salt, milk solids, emulsifiers,dough conditioners,added flavours,Glucose and Levulose. The flavours are delicately balanced such that the biscuit is well-liked by adults and kids.</p>\r\n', '1668746848parle g.jpg', 'yes', '2022-11-18 04:47:28'),
(7, 'Bitter Gourd', '4', '<p>Bitter gourd is&nbsp;<strong>a rich source of vitamin C, which helps fight many diseases, and wound healing and is crucial for development and growth</strong>. Vitamin A and beta-carotene present in bitter gourd are beneficial for our eyes&#39; health and improve vision. They are also effective for dark circles treatment</p>\r\n\r\n<p>What happens if you eat bitter gourd?</p>\r\n\r\n<p>As a rich source of antioxidants, flavonoids, and other polyphenol compounds, bitter gourd&nbsp;<strong>may help to reduce your risks for a number of health issues</strong>. Bitter gourd is packed with polyphenols. These compounds are known for their ability to lower inflammation in the body.</p>\r\n\r\n<p>20-Feb-2019&nbsp;&mdash;&nbsp;<em>Bitter melon</em>&nbsp;(also known as Momordica charantia or&nbsp;<em>bitter gourd</em>) is a plant that gets its name from its taste. It becomes more and more bitter&nbsp;...</p>\r\n', '1669025938vegs.jpg', 'no', '2022-11-21 10:18:58'),
(8, 'Mirinda', '2', '<p>Download&nbsp;<em>Mirinda</em>&nbsp;stock&nbsp;<em>photos</em>. Free or royalty-free&nbsp;<em>photos</em>&nbsp;and&nbsp;<em>images</em>. Use them in commercial designs under lifetime, perpetual &amp; worldwide rights.</p>\r\n\r\n<p>Your&nbsp;<em>mirinda</em>&nbsp;stock&nbsp;<em>images</em>&nbsp;are here. Download&nbsp;<em>photos</em>&nbsp;for free or search from millions of&nbsp;<em>HD</em>&nbsp;quality&nbsp;<em>photos</em>, illustrations and vectors.</p>\r\n', '1669026786veg1.jpg', 'no', '2022-11-21 10:33:06'),
(9, 'Momos', '5', '<p>See photos, profile pictures and albums from&nbsp;<em>MOMO&#39;S Bakery</em>. ... See photos posted to&nbsp;<em>MOMO&#39;S Bakery</em>&nbsp;by other people. Albums. May be an image of dessert.</p>\r\n\r\n<p><em>Momo</em>. Passionate home cook and&nbsp;<em>baker</em>. Proud cat mom of one &quot;Make it worth the calories&quot; -Prue (Great British Bake Off). 7 posts. 10 followers. 14 following</p>\r\n\r\n<p>Krishna Bakery: Wow Krishna&nbsp;<em>Bakery momos</em>&nbsp;- See 265 traveler reviews, 18 candid photos, and great deals for Shimla, India, at Tripadvisor.</p>\r\n\r\n<p>&nbsp;Rating: 4&nbsp;&middot; &lrm;Review by Neelam S</p>\r\n', '1669027682momo.jpg', 'yes', '2022-11-21 10:48:02'),
(10, 'Charity ', '4', '<p>Catchy Vegetarian&nbsp;<em>Blog</em>&nbsp;Names &middot; Veggie Lovin &middot; Hey&nbsp;<em>Veg</em>&nbsp;&middot; Veggie Time &middot; The Green Machine &middot; Plant-Powered Diet &middot; Veggie Blawg &middot; The&nbsp;<em>Veg</em>&nbsp;Seed &middot;&nbsp;<em>Veg</em>&nbsp;Talking. What is this?</p>\r\n\r\n<p><strong>Write Catchy Blog Titles With Four Pillars of Successful Content</strong></p>\r\n\r\n<p>&nbsp;<strong><em>blog</em></strong>&nbsp;<strong><em>title</em></strong></p>\r\n', '1697965987vegs.jpg', 'yes', '2023-01-07 07:22:53'),
(40, 'A KIT KAT® ', '2', '<p>A KIT KAT&reg; bar is made of&nbsp;<strong>three layers</strong>&nbsp;of wafer separated and covered by an outer layer of</p>\r\n', '1697966007kit kat.jpg', 'no', '2023-01-10 12:53:38');

-- --------------------------------------------------------

--
-- Table structure for table `register_2`
--

CREATE TABLE `register_2` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_2`
--

INSERT INTO `register_2` (`id`, `fname`, `lname`, `email`, `password`, `created`) VALUES
(1, 'Shiv', 'Suman', 'shiv742@gmail.com', '742', '2022-11-06 11:12:36'),
(2, 'sonu', 'saini', 'sonu55@gmail.com', '5555', '2022-11-06 11:13:12'),
(3, 'Akhil', 'saini', 'akhilsaini66@gmail.com', '6666', '2022-11-08 14:09:49'),
(4, 'SHIV', 'SUMAN', 'shiv75242@gmail.com', '1455', '2023-01-04 13:20:02'),
(5, 'SHIV', 'SUMAN', 'ritikghg112@gmail.com', 'gfh', '2023-01-04 13:26:33'),
(6, 'SHIV', 'SUMAN', 'shiv74bj2@gmail.com', 'gfhf', '2023-01-04 13:27:11'),
(7, 'ROHAN', 'SUMAN', 'rohan777@gmail.com', '777', '2023-01-04 13:41:00'),
(8, 'SHIV', 'SUMAN', 'dev1@yopmail.com', 'fsdfsd', '2023-01-05 08:44:39');

-- --------------------------------------------------------

--
-- Table structure for table `user_2`
--

CREATE TABLE `user_2` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_2`
--

INSERT INTO `user_2` (`id`, `name`, `email`, `salary`, `city`, `created`) VALUES
(3, 'Hariom Saini ', 'hariom12@gmail.com', '4500', '2022', '2022-11-06 07:29:39'),
(11, 'SHIV KRAKASH SUMAN', 'sumanshivprakash742@gmail.com', '4500', '2022', '2023-01-07 06:42:04'),
(12, 'SHIV SUMAN', 'shivsuman742@gmail.com', '5500', '2022', '2023-01-07 06:43:27'),
(13, 'shiv', 'shiv742@gmail.com', '4200', '2022', '2023-01-07 06:45:15'),
(14, 'Rahul', 'rahul555@gmail.com', '5555', '2022', '2023-01-07 07:12:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_2`
--
ALTER TABLE `category_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datablog_2`
--
ALTER TABLE `datablog_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_2`
--
ALTER TABLE `register_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_2`
--
ALTER TABLE `user_2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_2`
--
ALTER TABLE `category_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `datablog_2`
--
ALTER TABLE `datablog_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `register_2`
--
ALTER TABLE `register_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_2`
--
ALTER TABLE `user_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
