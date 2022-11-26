-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2022 at 05:15 AM
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
-- Database: `greenhouse_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `pid` int(255) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `pid`, `customer_id`, `price`, `qty`, `date_updated`) VALUES
(73, 17, 1, 450, 1, '2022-10-02 16:51:17'),
(87, 3, 4, 550, 1, '2022-10-15 17:24:28'),
(88, 17, 4, 450, 1, '2022-10-15 17:26:09'),
(89, 23, 4, 65, 1, '2022-10-15 17:26:20'),
(90, 24, 4, 456, 1, '2022-10-15 17:26:25'),
(91, 23, 4, 65, 1, '2022-10-15 21:54:44'),
(92, 24, 3, 456, 2, '2022-10-28 14:10:51'),
(93, 3, 3, 550, 1, '2022-10-28 14:11:42'),
(94, 3, 3, 550, 1, '2022-10-28 14:21:58');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `cat_image` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `is_deleted` int(2) NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_image`, `is_deleted`, `date_updated`) VALUES
(1, 'Shoe', 'download.jfif', 1, '2022-09-11 11:19:40'),
(2, 'Slipers', 'images.jfif', 1, '2022-09-05 21:19:24'),
(3, 'Slipers', 'images.jfif', 1, '2022-09-05 21:22:19'),
(4, 'dd', 'images.jfif', 1, '2022-09-05 21:21:35'),
(5, 'Phone Acc', 'hImYqMss.png', 1, '2022-09-05 22:23:22'),
(6, '', 'bottles-famous-global-beer-brands-poznan-pol-mar-including-heineken-becks-bud-miller-corona-stella-artois-san-miguel-143170440.jpg', 1, '2022-10-01 10:17:33'),
(7, 'Roses', 'pexels-pixabay-56866.jpg', 0, '2022-10-01 10:18:50'),
(8, 'Suriyakantha', 'flowers-4999705.jpg', 0, '2022-10-01 10:20:19'),
(9, 'Lily', 'red-flowers-1659044733.jpeg', 0, '2022-10-01 14:49:14'),
(10, 'Burger', 'download.jfif', 1, '2022-10-01 14:49:15'),
(11, 'Burger', 'fast-food.jpg', 1, '2022-10-01 14:49:40'),
(12, 'Tacos', 'aussie-style-beef-and-salad-tacos-86525-1.jpeg', 1, '2022-10-01 15:35:24'),
(13, 'Dew', 'dsd.PNG', 1, '2022-10-01 22:24:45'),
(14, 'Dews', 'dsd.PNG', 1, '2022-10-01 22:26:14'),
(15, 'Main', 'download.jfif', 1, '2022-10-02 13:43:02'),
(16, 'dew', 'download.jfif', 1, '2022-10-02 13:43:56'),
(17, 'dew', 'download.jfif', 1, '2022-10-02 13:44:36'),
(18, 'dew', 'download.jfif', 1, '2022-10-02 13:46:58'),
(19, 'dew', 'Basin Mixer.jpg', 1, '2022-10-02 13:48:13'),
(20, 'Beer', 'images.jfif', 1, '2022-10-02 15:37:27'),
(21, 'Beer', 'images.jfif', 1, '2022-10-02 15:37:29'),
(22, 'Beer', 'images.jfif', 1, '2022-10-02 15:37:48'),
(23, 'Beer', 'images.jfif', 1, '2022-10-02 15:37:55'),
(24, 'dew', 'pexels-pixabay-39517.jpg', 0, '2022-10-09 17:33:43'),
(25, 'Corton', 'red-flowers-1659044733.jpeg', 0, '2022-10-09 17:45:21');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `subject`, `message`, `date_updated`) VALUES
(4, 'Kanishka Dew Sandaruwan', 'kanishkadewsandaruwan@gmail.com', '0713664071', 'sas', '2022-09-12 22:35:23'),
(5, 'Kanishka Dew Sandaruwan', 'kanishkadewsandaruwan@gmail.com', '0713664071', 'dsds', '2022-09-15 10:28:09');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `nic` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` int(2) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_deleted` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `email`, `phone`, `nic`, `address`, `gender`, `password`, `is_deleted`) VALUES
(1, '', 'admin', '', '', '', 0, '123456', 0),
(2, 'Thilini Maheshika', 'thili@gmail.com', '0713664071', '962670426G', 'Banwalgodalla, Kosmulla', 2, '123456', 1),
(3, 'Kanishka Dew Sandaruwan', 'kanishkadewsandaruwan@gmail.com', '0713664070', '962670426G', 'Banwalgodalla, Kosmulla', 1, '123456', 0),
(4, 'Dew', 'Kanishkadewsandaruwan5@gmail.com', '0723694071', '992670426V', 'Banwalgodalla, Kosmulla', 1, '123456', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `item_id` int(11) NOT NULL,
  `order_id` int(2) NOT NULL,
  `pid` int(2) NOT NULL,
  `order_qty` int(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`item_id`, `order_id`, `pid`, `order_qty`, `price`) VALUES
(33, 31, 3, 1, 550),
(34, 31, 17, 1, 450),
(35, 33, 17, 1, 450),
(36, 34, 3, 2, 550),
(37, 34, 3, 1, 550);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `product_description` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `product_highlight` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `product_price` int(255) NOT NULL,
  `product_qty` int(255) NOT NULL,
  `product_active` int(2) NOT NULL,
  `date_updated` datetime NOT NULL,
  `is_deleted` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `cat_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `product_name`, `product_description`, `product_highlight`, `product_price`, `product_qty`, `product_active`, `date_updated`, `is_deleted`, `product_image`, `cat_id`) VALUES
(1, 'Arract', 'we are selling ml you can buy ml wise', '35.8 alcohol', 250, 1700, 1, '2022-10-03 00:47:49', 1, 'images.jfif', 20),
(3, 'Red Rose', 'Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached', 'Best Roses in world in Sri lankasn style', 550, 5, 1, '2022-10-15 23:20:15', 0, 'pexels-pixabay-56866.jpg', 7),
(9, 'Tops', 'ss', 's', 4500, 5, 0, '2022-09-11 12:09:22', 1, 'images.jfif', 1),
(10, 'Office Slipers', 'ss', 'ss', 2500, 50, 0, '2022-09-11 12:11:27', 1, 'download.jfif', 3),
(11, 'Office Casual', 'sss', 'best slipers', 4500, 5, 0, '2022-09-11 12:07:26', 1, 'download.jfif', 3),
(12, 'Speeker', 'ss', 'ss', 250, 50, 0, '2022-09-11 12:11:47', 1, 'direct.PNG', 1),
(13, 'Office Slipers Profecional', 'a', 'ss', 6500, 5, 0, '2022-09-11 12:06:55', 1, 'download.jfif', 3),
(14, 'Bata Waves', 'ss', 'ss', 8500, 5, 0, '2022-09-11 11:52:42', 1, 'images.jfif', 1),
(16, 'Taco', 'best Taco', 'ss', 450, 0, 1, '2022-10-02 20:14:54', 1, 'download (1).jfif', 12),
(17, 'Burger', 'big burger', 'sasas', 450, 2, 1, '2022-10-02 20:21:12', 0, 'download.jfif', 9),
(18, 'Dew1', 'sasas', 'sasa', 450, 5, 1, '2022-10-01 22:25:14', 1, 'dsd.PNG', 14),
(19, 'sasa', 'sasa', 'sas', 456, 5, 1, '2022-10-01 22:26:38', 1, 'dsd.PNG', 14),
(20, 'sasahhh', 'sasa', 'sasa', 545, 45, 1, '2022-10-01 22:29:10', 1, 'dsd.PNG', 14),
(21, 'gfgfg', 'dsdsd', 'dsdsd', 778, 888, 1, '2022-10-01 22:33:08', 1, 'dsd.PNG', 14),
(22, 'asa', 'sas', 'ss', 445, 5, 1, '2022-10-02 13:49:16', 1, 'aussie-style-beef-and-salad-tacos-86525-1.jpeg', 12),
(23, 'Red Liliy', 'sal', 'klkl', 65, 25000, 1, '2022-10-09 16:23:47', 0, 'pexels-jonas-kakaroto-736230.jpg', 9),
(24, 'Lily Res Rose', 'asas', 'sasa', 456, 256, 1, '2022-10-09 16:24:42', 0, 'pexels-pixabay-56866.jpg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `product_orders`
--

CREATE TABLE `product_orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `total` int(255) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `billing_address` varchar(255) NOT NULL,
  `payment` int(2) NOT NULL,
  `date_updated` datetime NOT NULL,
  `is_deleted` int(2) NOT NULL,
  `order_status` int(5) NOT NULL,
  `tracking` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_orders`
--

INSERT INTO `product_orders` (`order_id`, `customer_id`, `total`, `shipping_address`, `billing_address`, `payment`, `date_updated`, `is_deleted`, `order_status`, `tracking`) VALUES
(31, 3, 1000, '', '', 1, '2022-10-02 20:16:38', 0, 1, ''),
(33, 3, 450, '', '', 1, '2022-09-14 20:21:12', 0, 2, '17:00'),
(34, 3, 1850, 'Banwalgodalla, Kosmulla', 'Neluwa', 1, '2022-10-15 23:20:15', 0, 1, 'AGUS5656');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `header_image` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `header_title` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `header_desc` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `about_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `about_desc` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `company_phone` varchar(255) CHARACTER SET utf8 NOT NULL,
  `company_email` varchar(255) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `sub_image` varchar(255) NOT NULL,
  `about_image` varchar(255) NOT NULL,
  `link_facebook` varchar(255) NOT NULL,
  `link_twiiter` varchar(255) NOT NULL,
  `link_instragram` varchar(255) NOT NULL,
  `header_rotate_image` varchar(255) NOT NULL,
  `about_experience` int(255) NOT NULL,
  `shipping_fee` varchar(255) CHARACTER SET cp1250 NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `sub_desc` varchar(9999) NOT NULL,
  `terms_and_condition` varchar(9999) NOT NULL,
  `service_1_title` varchar(1000) NOT NULL,
  `service_1_desc` varchar(1000) NOT NULL,
  `service_2_title` varchar(1000) NOT NULL,
  `service_2_desc` varchar(1000) NOT NULL,
  `service_3_title` varchar(1000) NOT NULL,
  `service_3_desc` varchar(1000) NOT NULL,
  `service_description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`header_image`, `header_title`, `header_desc`, `about_title`, `about_desc`, `company_phone`, `company_email`, `company_address`, `sub_image`, `about_image`, `link_facebook`, `link_twiiter`, `link_instragram`, `header_rotate_image`, `about_experience`, `shipping_fee`, `sub_title`, `sub_desc`, `terms_and_condition`, `service_1_title`, `service_1_desc`, `service_2_title`, `service_2_desc`, `service_3_title`, `service_3_desc`, `service_description`) VALUES
('carousel-2.jpg', 'Welcome to Uva Green House', 'With this shop hompeage template asasoahs9uahjs9u ojsoiajsaoij noajsa', 'About Us', 'Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached', '0713664076', 'asn@gmail.com', 'Banwalgodalla, Kosmulla', 'carousel-1.jpg', 'about.jpg', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'hero.png', 20, '500', 'Anyway', '<h1>What Is a Terms and Conditions Agreement?</h1></br>\n<p>A terms and conditions agreement outlines the website administratorâ€™s rules regarding user behavior and provides information about the actions the website administrator can and will perform.</p>\n\nEssentially, your terms and conditions text is a contract between your website and its users. In the event of a legal dispute, arbitrators will look at it to determine whether each party acted within their rights.\n\nCreating the best terms and conditions page possible will protect your business from the following:\n\nAbusive users: Terms and Conditions agreements allow you to establish what constitutes appropriate activity on your site or app, empowering you to remove abusive users and content that violates your guidelines.\nIntellectual property theft: Asserting your claim to the creative assets of your site in your terms and conditions will prevent ownership disputes and copyright infringement.\nPotential litigation: If a user lodges a legal complaint against your business, showing that they were presented with clear terms and conditions before they used your site will help you immensely in court.\nIn short, terms and conditions give you control over your site and legal enforcement if users try to take advantage of your operations.', 'sasasa', 'Natural ', 'Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor duo.', 'Organic Products', 'Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor duo.', 'Biologically Safe', 'Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor duo.', 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `product_orders`
--
ALTER TABLE `product_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `product_orders`
--
ALTER TABLE `product_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
