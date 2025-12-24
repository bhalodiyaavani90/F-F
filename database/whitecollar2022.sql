-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2022 at 03:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `whitecollar2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(4) NOT NULL,
  `a_unm` varchar(50) NOT NULL,
  `a_pwd` varchar(50) NOT NULL,
  `a_time` bigint(50) NOT NULL,
  `a_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_unm`, `a_pwd`, `a_time`, `a_status`) VALUES
(1, 'admin', 'admin', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(4) NOT NULL,
  `cat_nm` varchar(100) NOT NULL,
  `cat_time` bigint(40) NOT NULL,
  `cat_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--


INSERT INTO `category` (`cat_id`, `cat_nm`, `cat_time`, `cat_status`) VALUES
(5, 'Men\'s Clothings', 1599136290, 1),
(6, 'dasasa', 1645428612, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `con_id` int(10) NOT NULL,
  `con_fnm` varchar(50) NOT NULL,
  `con_mno` varchar(10) NOT NULL,
  `con_email` varchar(50) NOT NULL,
  `con_subject` longtext NOT NULL,
  `con_msg` longtext NOT NULL,
  `con_time` bigint(50) NOT NULL,
  `con_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`con_id`, `con_fnm`, `con_mno`, `con_email`, `con_subject`, `con_msg`, `con_time`, `con_status`) VALUES
(5, 'Henish Patel', '3698521472', 'henish@gmail.com', 'Product Good', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum \r\n\r\n\r\n', 1605016645, 1),
(6, 'prince', '8487802656', 'p@rku.ac.in', 'no', 'hii i', 1645690787, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `g_id` int(50) NOT NULL,
  `g_title` varchar(250) NOT NULL,
  `g_img` longtext NOT NULL,
  `g_time` bigint(50) NOT NULL,
  `g_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`g_id`, `g_title`, `g_img`, `g_time`, `g_status`) VALUES
(1, 'LEVI\'S', '1605244287_mp2.jpg', 1605200536, 1),
(4, 'RAYMOND', '1605244171_32-rmts03269-b6-raymond-original-imafnfbtkb8fbkrv.jpeg', 1605202069, 1),
(5, 'HOLLISTER', '1605243790_MM2251CHHOSYL.jpg', 1605202115, 1),
(6, 'TOMMY  HILFIGER', '1605243662_product-jpeg-500x500.jpg', 1605202182, 1),
(7, 'ZARA', '1605243705_C96DC59510404FEA8165CCA526118D1E.jpeg', 1605202248, 1),
(8, 'HOLLISTER', '1605337423_TB1QVkicYsTMeJjSsziXXcdwXXa_!!0-item_pic.jpg', 1605337423, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(10) NOT NULL,
  `o_nm` varchar(100) NOT NULL,
  `o_uid` int(10) NOT NULL,
  `o_clothes` varchar(100) NOT NULL,
  `o_qty` int(10) NOT NULL,
  `o_rate` int(10) NOT NULL,
  `o_pin` int(6) NOT NULL,
  `o_address` varchar(100) NOT NULL,
  `o_time` bigint(50) NOT NULL,
  `o_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `o_nm`, `o_uid`, `o_clothes`, `o_qty`, `o_rate`, `o_pin`, `o_address`, `o_time`, `o_status`) VALUES
(8, 'Sky Blue shirt', 10, '', 1, 250, 360001, 'At, Rajkot', 1605677761, 1),
(9, 'white shirt', 11, '', 3, 790, 360001, 'At, Surat', 1605677911, 1),
(10, 'Casual Formal pent', 13, '25', 1, 400, 360001, 'ssssssssss', 1605768829, 1),
(13, 'Casual shirt', 13, '19', 1, 280, 360001, 'At, Jamnagar', 1605769253, 1),
(14, 'Casual shirt', 13, '19', 3, 280, 360001, 'At,Jamnagar', 1605769300, 1),
(16, 'Casual Formal pent', 14, '23', 1, 550, 360001, 'aaaaaabbbbbbb', 1605858511, 1),
(17, 'Casual Formal Shirt', 14, '24', 1, 700, 360001, 'aaaaaaa', 1605875864, 1),
(19, 'Te shirt', 13, '29', 2, 1200, 360001, 'bbbbbbbbb', 1605934463, 1),
(20, 'Casual printed Shirt', 16, '27', 1, 950, 360001, 'kjafhbnmb', 1612885619, 1),
(23, 'Casual printed Shirt', 24, '27', 1, 950, 360001, '\r\n8784', 1645775692, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ourteams`
--

CREATE TABLE `ourteams` (
  `ab_id` int(50) NOT NULL,
  `ab_fnm` varchar(255) NOT NULL,
  `ab_post` varchar(255) NOT NULL,
  `ab_flink` varchar(255) NOT NULL,
  `ab_tlink` varchar(255) NOT NULL,
  `ab_inlink` varchar(255) NOT NULL,
  `ab_img` longtext NOT NULL,
  `ab_time` bigint(50) NOT NULL,
  `ab_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ourteams`
--

INSERT INTO `ourteams` (`ab_id`, `ab_fnm`, `ab_post`, `ab_flink`, `ab_tlink`, `ab_inlink`, `ab_img`, `ab_time`, `ab_status`) VALUES
(8, 'John Filmr Doe', 'CEO', 'www.facebook.com', 'www.twitter.com', 'www.in.linkedin.com', '1605326528_t1.jpg', 1605266287, 1),
(9, 'Jaye Smith', 'Managing Director', 'www.facebook.com', 'www.twitter.com', 'www.in.linkedin.com', '1605326588_t2.jpg', 1605325950, 1),
(10, 'Mike Arney', 'Lead Developor', 'www.facebook.com', 'www.twitter.com', 'www.in.linkedin.com', '1605326620_t3.jpg', 1605326024, 1),
(11, 'Michele Lampa', 'Fashion Designer', 'www.facebook.com', 'www.twitter.com', 'www.in.linkedin.com', '1605326651_t4.jpg', 1605326080, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_add`
--

CREATE TABLE `product_add` (
  `p_id` int(10) NOT NULL,
  `p_nm` varchar(200) NOT NULL,
  `p_cat` int(10) NOT NULL,
  `p_process` longtext NOT NULL,
  `p_desc` longtext NOT NULL,
  `p_price` bigint(10) NOT NULL,
  `p_discount` bigint(10) NOT NULL,
  `p_img` longtext NOT NULL,
  `p_fdesc` longtext NOT NULL,
  `p_addinfo` longtext NOT NULL,
  `p_time` varchar(30) NOT NULL,
  `p_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_add`
--

INSERT INTO `product_add` (`p_id`, `p_nm`, `p_cat`, `p_process`, `p_desc`, `p_price`, `p_discount`, `p_img`, `p_fdesc`, `p_addinfo`, `p_time`, `p_status`) VALUES
(14, 'Casual Pent', 5, 'Item will be shipped out within 2-3 working days.', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', 450, 10, '1605679488_81UnwGXRo5L._UL1500_ (1).jpg', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', '1604582407', 1),
(15, 'Casual shirt', 5, 'Item will be shipped out within 2-3 working days.', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', 300, 15, '1604582473_mp2.jpg', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', '1604582473', 1),
(16, 'Casual Sky Blue Pent', 5, 'Item will be shipped out within 2-3 working days.', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', 500, 10, '1605679537_268d43d0195c6068b493133bb5f753bc.jpg', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', '1604582542', 1),
(17, 'Blue Casual Shirt', 5, 'Item will be shipped out within 2-3 working days.', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', 300, 75, '1604582717_mp5.jpg', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', '1604582717', 1),
(18, 'Casual Black pent', 5, 'Item will be shipped out within 2-3 working days.', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', 300, 22, '1605679773_555d46ce-6003-45ea-ab46-e3bc725b0f701538570418880-INVICTUS-Men-Black-Slim-Fit-Checked-Formal-Trousers-44153857-1.jpg', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', '1604582849', 1),
(19, 'Casual shirt', 5, ' Item will be shipped out within 2-3 working days.', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', 280, 18, '1604582963_mp4.jpg', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', '1604582963', 1),
(23, 'Casual Formal pent', 5, 'Item will be shipped out within 4-5 working days', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', 550, 15, '1605888720_1562953071165_0..jpg', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', '1605680537', 1),
(24, 'Casual Formal Shirt', 5, 'Item will shipped out within 6-7 working days.', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', 700, 25, '1605680932_d1c58dc7e25a2f1c380a3f29ce4d0274.png', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', '1605680932', 1),
(25, 'Casual Formal pent', 5, 'Item will shipped out within 1-2 working days.', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', 400, 30, '1605888844_b10236bc-07f4-4bf0-a042-28fca819b25e1580731692218-Raymond-Men-Trousers-2501580731688009-1.jpg', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', '1605681046', 1),
(27, 'Casual printed Shirt', 5, 'item will shipped out within 4/5 days.', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', 950, 15, '1605889039_6a1cd5f872486a67a41b8136b2d2aef4.jpg', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', '1605889039', 1),
(28, 'Casual Formal pent', 5, 'items will shipped out within 1/2 workings days.', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', 600, 5, '1605889175_-1117Wx1400H-461104362-blue-MODEL.jpg', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', '1605889175', 1),
(29, 'Te shirt', 5, 'items will shipped out 5/6 workings days.', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', 1200, 50, '1605889337_product-jpeg-500x500.jpg', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the \r\nprinting and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s \r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\n', '1605889337', 1),
(30, 'tie', 5, 'shipping within 2-3 days', 'silk material', 200, 10, '1605941966_Casual-shirt3.jpg', 'abcde', 'ksjdkajskdjaksdj', '1605941966', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_id` int(10) NOT NULL,
  `r_fnm` varchar(60) NOT NULL,
  `r_unm` varchar(30) NOT NULL,
  `r_pwd` varchar(30) NOT NULL,
  `r_email` varchar(70) NOT NULL,
  `r_mno` varchar(10) NOT NULL,
  `r_time` bigint(60) NOT NULL,
  `r_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `r_fnm`, `r_unm`, `r_pwd`, `r_email`, `r_mno`, `r_time`, `r_status`) VALUES
(4, 'Naman mori', 'Naman', '000', 'naman@gmail.com', '9638527410', 1598526169, 1),
(5, 'Henish Patel', 'Henish', '50505050', 'henish@gmail.com', '9512671231', 1598526664, 1),
(6, 'Amit sakariya', 'Amit sakariya', '32165487', 'amit@gmail.com', '9638527410', 1600073365, 1),
(10, 'Banti Sakariya', 'Banti Sakariya', '123123', 'banti@gmail.com', '9638527410', 1605008730, 1),
(11, 'Vishal Sakariya', 'Vishal Patel', '123321', 'vishal@gmail.com', '9512671231', 1605086281, 1),
(13, 'Dhaval vora', 'dhaval vora', '890890', 'dhaval@gmail.com', '9632587410', 1605110944, 1),
(14, 'Vaibhav Sakariya', 'Vaibhav Sakariya', '102102', 'vaibhavsakariya201@gmail.com', '1234567890', 1605770226, 1),
(15, 'mahendra', 'mahendra', '123456', 'mahendra@gmail.com', '1234567890', 1611571573, 1),
(16, 'tejas', 'tejas', '987654', 'tejas@gmail.com', '8523697410', 1612885562, 1),
(17, 'Vg sakariya', 'Vg sakariya', '45454545', 'vishal@gmail.com', '7418529630', 1626337490, 1),
(23, 'prince kanani', 'prince003', '123456', 'p@rku.ac.in', '8487802956', 1645715254, 1),
(24, 'nisha sojitra', 'nisha', '123456', 'nishasojitra18@gmail.com', '7894561239', 1645775622, 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `s_id` int(50) NOT NULL,
  `s_title` varchar(250) NOT NULL,
  `s_img` longtext NOT NULL,
  `s_time` bigint(50) NOT NULL,
  `s_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`s_id`, `s_title`, `s_img`, `s_time`, `s_status`) VALUES
(2, 'Levi\'s', '1605173640_4.png', 1605173640, 1),
(4, 'Raymond', '1605243426_1.png', 1605243426, 1),
(5, 'HOLLISTER', '1605243464_9.png', 1605243464, 1),
(6, 'Calvin Klein', '1605251415_12.png', 1605243535, 1),
(7, 'ZARA', '1605243564_15.png', 1605243564, 1),
(8, 'Nike', '1605251253_8.png', 1605251253, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `ourteams`
--
ALTER TABLE `ourteams`
  ADD PRIMARY KEY (`ab_id`);

--
-- Indexes for table `product_add`
--
ALTER TABLE `product_add`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `con_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `g_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `ourteams`
--
ALTER TABLE `ourteams`
  MODIFY `ab_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_add`
--
ALTER TABLE `product_add`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `s_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
