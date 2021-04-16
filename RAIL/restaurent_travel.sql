-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2020 at 04:38 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurent_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `place_name` varchar(100) DEFAULT NULL,
  `hotel_name` varchar(100) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `need_room` int(100) NOT NULL,
  `adult` int(100) NOT NULL,
  `children` int(100) NOT NULL,
  `trans_name` varchar(100) DEFAULT NULL,
  `customer_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `place_name`, `hotel_name`, `check_in_date`, `check_out_date`, `need_room`, `adult`, `children`, `trans_name`, `customer_id`) VALUES
(1, 'Indonesia', 'Hotel Sedona', '2020-04-01', '2020-04-03', 1, 2, 1, NULL, 2),
(2, 'Thailand', 'Hotel Rajdhani', '2020-04-03', '2020-04-04', 2, 4, 1, NULL, 3),
(3, 'Thailand', 'Hotel Sea Blue', '2020-04-02', '2020-04-03', 3, 6, 2, NULL, 4),
(4, 'Kasmir', 'Hotel Continental', '2020-04-01', '2020-04-06', 1, 2, 1, NULL, 5),
(5, 'Kasmir', 'Hotel Kasmir', '2020-04-03', '2020-04-07', 2, 4, 1, NULL, 7),
(6, 'Indonesia', 'Hotel Bali', '2020-04-02', '2020-04-08', 3, 6, 2, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `cust_address` varchar(100) NOT NULL,
  `cust_mail` varchar(50) NOT NULL,
  `cust_phone` varchar(20) NOT NULL,
  `gender` int(1) NOT NULL COMMENT '1 = male, 2 = female',
  `cust_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_address`, `cust_mail`, `cust_phone`, `gender`, `cust_password`) VALUES
(1, 'Ashik', 'Dhaka', 'ashik@gmail.com', '12335833', 1, '456'),
(2, 'Hasan', 'Narail', 'hasan@gmail.com', '01778783647', 1, '12346'),
(3, 'Mahadi', 'Narail', 'mahadi@gmail.com', '1846974341', 1, '1234'),
(4, 'Mazhar', 'Jessor', 'mazhar@gmail.com', '1646975323', 1, '1357'),
(5, 'Sakib', 'Cadpur', 'sakib@gmail.com', '1346974371', 1, '1239'),
(6, 'Tamanna', 'Pabna', 'tamanna@gmail.com', '1846974445', 2, '1333'),
(7, 'Hridoy', 'Barisal', 'hridoy@gmail.com', '1746974321', 1, '134'),
(8, 'Hamza', 'Habiganz', 'hamza@gmail.com', '123456789', 1, '2353'),
(11, 'Zerin', 'khulna', 'zerin@gmail.com', '1234', 2, '45464'),
(13, 'Kawser', 'Dhaka', 'kawser@gmail.com', '436587679', 1, '123'),
(14, 'Yeamin', 'Khulna', 'yeamin@gmail.com', '23390739', 1, '135'),
(15, 'Zebin', 'Dhaka', 'zebin@gmail.com', '2897357', 2, '579');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotel_id` int(11) NOT NULL,
  `place_name` varchar(100) NOT NULL,
  `hotel_img` varchar(100) DEFAULT NULL,
  `hotel_name` varchar(100) NOT NULL,
  `room_cost` int(100) NOT NULL,
  `tot_room` int(100) NOT NULL,
  `avl_room` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotel_id`, `place_name`, `hotel_img`, `hotel_name`, `room_cost`, `tot_room`, `avl_room`) VALUES
(1, 'Indonesia', NULL, 'HOTEL SEDONA', 100, 20, 15),
(2, 'Thailand', NULL, 'HOTEL RAJDHANI', 100, 20, 12),
(3, 'Kasmir', NULL, 'HOTEL CONTINENTAL', 300, 20, 0),
(4, 'Indonesia', NULL, 'HOTEL BALI', 100, 20, 5),
(5, 'Thailand', NULL, 'HOTEL SEA BLUE', 100, 20, 15),
(6, 'Kasmir', NULL, 'HOTEL KASMIR', 300, 20, 10);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `bed` varchar(255) NOT NULL,
  `cost` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `bed`, `cost`) VALUES
(1, 'Superior Room', 'Single', '80'),
(2, 'Superior Room', 'Double', '150'),
(3, 'Deluxe Room', 'Single', '120'),
(4, 'Deluxe Room', 'Double', '220'),
(8, 'Duplex Room', 'Single', '140'),
(9, 'Duplex Room', 'Double', '260');

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `book_id` int(11) NOT NULL,
  `TRoom` text NOT NULL,
  `NRoom` int(11) NOT NULL,
  `Bed` varchar(255) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `NDays` int(11) NOT NULL,
  `total_cost` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`book_id`, `TRoom`, `NRoom`, `Bed`, `check_in`, `check_out`, `NDays`, `total_cost`, `cust_id`) VALUES
(25, 'Superior Room', 3, 'Single', '2020-10-03', '2020-10-06', 3, 720, 3),
(26, 'Superior Room', 1, 'Single', '2020-10-09', '2020-10-12', 3, 240, 3),
(28, 'Deluxe Room', 1, 'Single', '2020-10-17', '2020-10-18', 1, 120, 3),
(29, 'Deluxe Room', 1, 'Single', '2020-10-24', '2020-10-26', 2, 240, 3),
(36, 'Superior Room', 1, 'Single', '2020-10-05', '2020-10-07', 2, 160, 3),
(37, 'Superior Room', 1, 'Single', '2020-10-05', '2020-10-07', 2, 160, 3),
(40, 'Deluxe Room', 1, 'Single', '2020-10-05', '2020-10-07', 2, 240, 7),
(41, 'Duplex Room', 1, 'Single', '2020-10-05', '2020-10-06', 1, 140, 7),
(42, 'Deluxe Room', 1, 'Single', '2020-10-15', '2020-10-17', 2, 240, 3),
(43, 'Deluxe Room', 1, 'Single', '2020-10-22', '2020-10-24', 2, 240, 3),
(45, 'Superior Room', 1, 'Single', '2020-10-05', '2020-10-07', 2, 160, 3),
(46, 'Duplex Room', 1, 'Single', '2020-10-07', '2020-10-09', 2, 280, 3),
(53, 'Deluxe Room', 2, 'Single', '2020-10-07', '2020-10-09', 2, 480, 3),
(54, 'Superior Room', 2, 'Single', '2020-10-07', '2020-10-09', 2, 320, 3),
(55, 'Deluxe Room', 2, 'Double', '2020-10-16', '2020-10-18', 2, 880, 3),
(74, 'Superior Room', 2, 'Double', '2020-10-10', '2020-10-12', 2, 600, 3),
(75, 'Deluxe Room', 1, 'Single', '2020-10-30', '2020-10-31', 1, 120, 3),
(77, 'Deluxe Room', 1, 'Single', '2020-10-24', '2020-10-25', 1, 120, 3),
(78, 'Superior Room', 1, 'Single', '2020-10-07', '2020-10-08', 1, 80, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`cust_id`);

--
-- Constraints for table `roombook`
--
ALTER TABLE `roombook`
  ADD CONSTRAINT `roombook_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
