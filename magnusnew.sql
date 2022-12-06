-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2021 at 07:48 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magnusnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(30) NOT NULL,
  `adm_username` varchar(50) NOT NULL,
  `adm_password` varchar(80) NOT NULL,
  `adm_created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `adm_username`, `adm_password`, `adm_created_date`) VALUES
(1, 'admin1', '7c6a180b36896a0a8c02787eeafb0e4c', '2021-02-20 03:20:44');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_phone` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_address` varchar(255) NOT NULL,
  `c_date_tt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_name`, `c_phone`, `c_email`, `c_address`, `c_date_tt`) VALUES
(1, 'Divya Mittal', '7888888888', 'sneha@gmail.com', '268 B block', '2021-09-28 03:36:57');

-- --------------------------------------------------------

--
-- Table structure for table `order_collection`
--

CREATE TABLE `order_collection` (
  `oc_id` int(11) NOT NULL,
  `oc_token_no` varchar(20) NOT NULL,
  `oc_name` varchar(255) NOT NULL,
  `oc_address` varchar(255) NOT NULL,
  `oc_contact` varchar(255) NOT NULL,
  `oc_email` varchar(255) NOT NULL,
  `oc_prid` varchar(255) NOT NULL,
  `oc_prname` varchar(255) NOT NULL,
  `oc_prquant` varchar(255) NOT NULL,
  `oc_pramount` varchar(255) NOT NULL,
  `oc_total_amount` varchar(255) NOT NULL,
  `oc_cardno` varchar(255) NOT NULL,
  `oc_cvvno` varchar(255) NOT NULL,
  `oc_exdate` varchar(255) NOT NULL,
  `oc_cardtype` varchar(255) NOT NULL,
  `oc_status` varchar(255) NOT NULL,
  `oc_created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_collection`
--

INSERT INTO `order_collection` (`oc_id`, `oc_token_no`, `oc_name`, `oc_address`, `oc_contact`, `oc_email`, `oc_prid`, `oc_prname`, `oc_prquant`, `oc_pramount`, `oc_total_amount`, `oc_cardno`, `oc_cvvno`, `oc_exdate`, `oc_cardtype`, `oc_status`, `oc_created_date`) VALUES
(1, '', 'Divya Mittal', '268 B block', '7888888888', 'sneha@gmail.com', '15', 'Mentus Shoes', '1', '2500.00', '2500', '888888888888888888888', '754', '2021-09-30', 'Debit Card', 'Confirmed', '2021-10-09 14:50:18'),
(2, '4225', 'Komal Gupta', '268 B block', '7845555555', 'sneha@gmail.com', '15', 'Mentus Shoes', '2', '2500.00', '5000', '7745211111111111', '145', '2021-09-30', 'Debit Card', 'Pending', '2021-09-27 17:55:06'),
(3, '5141', 'Rashmi Agarwal', '268 B block', '7888888844', 'snehfhfhfnhha@gmail.com', '15', 'Mentus Shoes', '2', '2500.00', '5000', '545555555555555555', '222', '2021-09-11', 'Debit Card', 'Pending', '2021-09-27 18:00:20'),
(4, '3422', 'Rashmi Agarwal', '268 B block', '7888888844', 'snehfhfhfnhha@gmail.com', '15', 'Mentus Shoes', '2', '2500.00', '5000', '545555555555555555', '222', '2021-09-11', 'Debit Card', 'Pending', '2021-09-27 18:00:39'),
(5, '1292', 'Sneha Gupta', '268 B block', '8878787877', '121sneha@gmail.com', '15,4', 'Mentus Shoes,Baby Cao', '1', '2500.00,1700.00', '6700', '7745211111111111', '898', '2021-10-07', 'Credit Card', 'Pending', '2021-09-27 18:43:52'),
(6, '8140', 'SOCH', '268 B block', '7845555555', 'sneha@gmail.com', '15,4', 'Mentus Shoes,Baby Cao', '1', '2500.00,1700.00', '6700', '45112154545', '232', '2021-09-24', 'Credit Card', 'Pending', '2021-09-27 18:47:58'),
(7, '4202', 'Komal Gupta', '268 B block', '7888888844', 'sneha@gmail.com', '15,4', 'Mentus Shoes,Baby Cao', '1', '2500.00,1700.00', '6700', '545555555555555555', '145', '2021-10-01', 'Credit Card', 'Pending', '2021-09-27 18:52:35'),
(8, '8728', 'SOCH', '268 B block', '8878787877', 'sneha@gmail.com', '15,4', 'Mentus Shoes,Baby Cao', '1', '2500.00,1700.00', '6700', '888888888888888888888', '754', '2021-09-10', 'Credit Card', 'Pending', '2021-09-27 18:56:28'),
(9, '1523', 'SOCH', '268 B block', '8878787877', 'sneha@gmail.com', '15,4', 'Mentus Shoes,Baby Cao', '1', '2500.00,1700.00', '6700', '888888888888888888888', '754', '2021-09-10', 'Credit Card', 'Pending', '2021-09-27 18:59:54'),
(10, '6219', 'SOCH', '268 B block', '8878787877', 'sneha@gmail.com', '15,4', 'Mentus Shoes,Baby Cao', '1', '2500.00,1700.00', '6700', '888888888888888888888', '754', '2021-09-10', 'Credit Card', 'Pending', '2021-09-27 19:00:45'),
(11, '2321', 'SOCH', '268 B block', '8878787877', 'sneha@gmail.com', '15,4', 'Mentus Shoes,Baby Cao', '1', '2500.00,1700.00', '6700', '888888888888888888888', '754', '2021-09-10', 'Credit Card', 'Pending', '2021-09-27 19:02:13'),
(12, '2281', 'SOCH', '268 B block', '8878787877', 'sneha@gmail.com', '15,4', 'Mentus Shoes,Baby Cao', '1', '2500.00,1700.00', '6700', '888888888888888888888', '754', '2021-09-10', 'Credit Card', 'Pending', '2021-09-27 19:06:00'),
(13, '4836', 'Komal Gupta', '268 B block', '7888888844', 'sneha@gmail.com', '15,4', 'Mentus Shoes,Baby Cao', '1', '2500.00,1700.00', '6700', '875852828535', '222', '2021-10-01', 'Debit Card', 'Pending', '2021-09-27 19:10:30'),
(14, '1540', 'SOCH', '268 B block', '7888888844', 'sneha@gmail.com', '15,4', 'Mentus Shoes,Baby Cao', '1', '2500.00,1700.00', '6700', '45112154545', '232', '2021-09-15', 'Credit Card', 'Pending', '2021-09-27 19:11:54'),
(15, '0542', 'SOCH', '268 B block', '7888888844', 'sneha@gmail.com', '4', 'Baby Cao', '2', '1700.00', '3400', '7745211111111111', '898', '2021-09-30', 'Credit Card', 'Pending', '2021-09-27 19:15:28'),
(16, '6367', 'Rashmi Agarwal', '268 B block', 'dgfh', 'sneha@gmail.com', '13', 'Betic Jeans', '1', '1900.00', '1900', '87452105454454', '145', '2021-09-30', 'Credit Card', 'Pending', '2021-09-27 19:59:34'),
(17, '1358', 'dgv', '268 B block', '7888888888', 'sneha@gmail.com', '15', 'Mentus Shoes', '1', '2500.00', '2500', '87452105454454', '545', '2021-10-01', 'Credit Card', 'Pending', '2021-09-27 20:09:11'),
(18, '2056', 'Rashmi Agarwal', '268 B block', '4544444444', 'scdcsneha@gmail.com', '15', 'Mentus Shoes', '1', '2500.00', '2500', '87452105454454', '222', '2021-09-29', 'Debit Card', 'Pending', '2021-09-27 20:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `products_tbl`
--

CREATE TABLE `products_tbl` (
  `p_id` int(20) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_sale_price` float(10,2) NOT NULL,
  `p_regular_price` float(10,2) NOT NULL,
  `p_main_category` varchar(50) NOT NULL,
  `p_sub_category` varchar(50) NOT NULL,
  `p_sub_level_category` varchar(50) NOT NULL,
  `p_description` varchar(1500) NOT NULL,
  `p_image` varchar(50) NOT NULL,
  `p_created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `adm_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_tbl`
--

INSERT INTO `products_tbl` (`p_id`, `p_name`, `p_sale_price`, `p_regular_price`, `p_main_category`, `p_sub_category`, `p_sub_level_category`, `p_description`, `p_image`, `p_created_date`, `adm_id`) VALUES
(4, 'Baby Cao', 1300.00, 1700.00, 'kids', 'Clothing', 'New', 'Baby cap new kids clothing in various variation. ', '1618464109.jpg', '2021-04-15 05:21:49', 'vendor1'),
(7, 'Jessi Top', 1600.00, 1900.00, 'women', 'Clothing', 'Special', 'Jessi Top Women Special Clothing  at very affordable price with amazing variations.', '1618461595.jpg', '2021-04-15 04:39:54', 'vendor1'),
(13, 'Betic Jeans', 1500.00, 1900.00, 'women', 'Clothing', 'Featured', 'Beltic Jeans Women Featured Clothing available in various variatin.', '1618461916.jpg', '2021-04-15 04:45:15', 'vendor1'),
(14, 'Gretty Skirt', 1700.00, 2000.00, 'women', 'Clothing', 'Special', 'Gretty Skirt for Women Special clothing.', '1618462378.jpg', '2021-04-15 04:52:58', 'vendor2'),
(15, 'Mentus Shoes', 2299.00, 2500.00, 'men', 'Footwear', 'New', 'Mentus shoes for mens', '1618470346.jpg', '2021-04-15 07:05:46', 'vendor2'),
(21, 'skjadfh', 5454.00, 56456.00, 'kids', 'Clothing', 'Featured', 'jslkfajskldjflksjdflksd', '1633790442.jpg', '2021-10-09 14:40:42', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `p_id` int(30) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_price` decimal(10,2) NOT NULL,
  `p_category` varchar(50) NOT NULL,
  `p_image` varchar(100) NOT NULL,
  `p_created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`p_id`, `p_name`, `p_price`, `p_category`, `p_image`, `p_created_date`) VALUES
(2, 'Mixer', '1500.00', 'featured', 'Screenshot (1).png', '2021-02-21 03:27:16'),
(3, 'Juicer', '2000.00', 'special', 'Screenshot (2).png', '2021-02-21 03:28:28'),
(4, 'Mirror', '1000.00', 'featured', 'Screenshot (3).png', '2021-02-21 04:21:36'),
(5, 'dress', '1500.00', 'new', 'Screenshot (1035).png', '2021-02-25 17:21:22'),
(6, 'suit', '2000.00', 'featured', 'Screenshot (1034).png', '2021-02-25 17:22:14'),
(7, 'dress', '1500.00', 'new', 'Screenshot (1035).png', '2021-02-25 17:24:31');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `d_o_b` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `pin_code` int(8) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `newsletter` int(5) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `gender`, `d_o_b`, `email`, `street_address`, `pin_code`, `city`, `state`, `country`, `contact_no`, `user_password`, `newsletter`, `created_date`) VALUES
(1, 'dipshi', 'verma', 'f', '0000-00-00', 'deepsiverma098@gmail.com', 'new OPD SGPGI LUCKNOW,Raibarely road lucknow,', 226014, 'Lucknow', 'Uttar Pradesh', '99', '2147483647', 'deepshi1', 0, '2021-04-11 06:27:49'),
(2, 'Prateek', 'Singh', 'Male', '08/12/1996', 'prateek707.singh@gmail.com', 'Kailashpuri, Alambagh', 226005, 'Lucknow', 'Uttar Pradesh', '99', '8382028062', 'prateek1', 0, '2021-04-11 07:19:24'),
(3, 'Rajesh', 'Singh', 'Male', '04/20/2021', 'rajesh123@gmail.com', 'kallu patta', 226004, 'Lucknow', 'Uttar Pradesh', '99', '9874563210', 'raju123', 0, '2021-04-11 07:31:30'),
(4, 'Arushi', 'Datta', 'Female', '04/02/2021', 'arushi123@gmail.com', 'palan khet', 226565, 'jaounpur ', 'pata nahi', '99', '9874563213', 'arushi123', 0, '2021-04-11 08:38:07'),
(5, 'Manoj', 'rawat', 'Male', '04/17/2021', 'manoj123@gmail.com', 'lallu', 226045, 'lakhimpur', 'Uttar Pradesh', '99', '9874521360', 'manoj123', 0, '2021-04-11 08:52:56'),
(6, 'Ruchi', 'pathak', 'Female', '04/06/2021', 'ruchi123@gmail.com', 'lulu market', 236541, 'khoiu', 'urescvghj', '99', '9874512036', 'ruchi123', 0, '2021-04-11 09:00:26'),
(7, 'saurya', 'Singh', 'Male', '01/01/1998', 'prateek707.singh@gmail.com', 'Kailashpuri, Alambagh', 226005, 'kanpur', 'Uttar Pradesh', '99', '08382028062', 'sauryasingh', 0, '2021-04-11 09:03:01'),
(8, 'soni', 'dubey', 'Female', '04/22/2021', 'soni123@gmail.com', 'kjbjghcjyx', 789654, 'hgcctu7cu', 'cytytcyc', '235', '7856941230', 'soni123', 0, '2021-04-11 09:06:23'),
(9, 'rahul', 'rawat', 'Male', '04/06/2021', 'rahul123@gmail.com', 'lallu', 226045, 'lakhimpur', 'Uttar Pradesh', '99', '09874521360', 'rahul123', 0, '2021-04-11 09:31:32'),
(10, 'parul', 'verma', 'Female', '10/11/1993', 'vermaparul@.com', 'manit ,bhopal', 221023, 'bhopal', 'mp', '99', '15642654746', '12345', 0, '2021-04-11 11:59:11'),
(11, 'anupam', 'kumar', 'Male', '01/20/1989', 'anupamK@gmail.com', 'bxjsajaduweufyire', 5344, 'seattle', 'zsaodjeoih', 'Canada', '176282728637', '123456', 0, '2021-04-11 16:52:29');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `v_id` int(30) NOT NULL,
  `v_email` varchar(100) NOT NULL,
  `v_username` varchar(100) NOT NULL,
  `v_password` varchar(50) NOT NULL,
  `v_created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`v_id`, `v_email`, `v_username`, `v_password`, `v_created_date`) VALUES
(13, 'vendor1@gmail.com', 'vendor1', 'ccfbef9bf08c11d5b804bec11bcea215', '2021-10-09 14:38:26');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_info`
--

CREATE TABLE `vendor_info` (
  `vendor_id` int(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `d_o_b` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `pin_code` int(8) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `vendor_password` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `order_collection`
--
ALTER TABLE `order_collection`
  ADD PRIMARY KEY (`oc_id`);

--
-- Indexes for table `products_tbl`
--
ALTER TABLE `products_tbl`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`v_id`);

--
-- Indexes for table `vendor_info`
--
ALTER TABLE `vendor_info`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_collection`
--
ALTER TABLE `order_collection`
  MODIFY `oc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products_tbl`
--
ALTER TABLE `products_tbl`
  MODIFY `p_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `p_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `v_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `vendor_info`
--
ALTER TABLE `vendor_info`
  MODIFY `vendor_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
