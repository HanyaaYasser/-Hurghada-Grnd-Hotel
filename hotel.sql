-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2022 at 06:05 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `user_type` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `confirm password` varchar(15) NOT NULL,
  `national id` int(15) NOT NULL,
  `gender` text NOT NULL,
  `birthdate` date NOT NULL,
  `img` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`user_type`, `firstname`, `lastname`, `email`, `password`, `confirm password`, `national id`, `gender`, `birthdate`, `img`) VALUES
('guests', 'Jana', 'ElKasaby', 'jana2003@gmail.com', 'jana12345', 'jana12345', 2147483647, 'female', '2003-03-29', ''),
('qaulity_control', '', '', '', '', '', 0, '', '0000-00-00', ''),
('receptionist', 'Martina', 'Raafat', 'martina2001@gmail.com', 'martina12345', 'martina12345', 1234567891, 'female', '2001-07-15', '');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_num` int(11) NOT NULL,
  `roomtype` text NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_num`, `roomtype`, `check_in`, `check_out`) VALUES
(102, 'Double', '2022-06-16', '2022-06-20'),
(103, 'Junior', '0000-00-00', '0000-00-00'),
(104, 'Junior', '2022-06-16', '2022-06-23'),
(105, 'Family', '2022-06-10', '2022-06-15'),
(106, 'Family', '0000-00-00', '0000-00-00'),
(112, 'Deluxe', '2022-06-26', '2022-07-01'),
(113, 'Double', '2022-07-16', '2022-07-23'),
(114, 'Deluxe', '0000-00-00', '0000-00-00'),
(115, 'Deluxe', '2022-08-16', '2022-08-23'),
(116, 'Deluxe', '2022-08-10', '2022-08-15'),
(119, 'Double', '2022-06-26', '2022-07-01'),
(122, 'Family', '2022-10-16', '2022-10-23'),
(123, 'Family', '2022-07-16', '2022-07-23'),
(124, 'Family', '2022-09-10', '2022-09-15'),
(125, 'Junior', '2022-10-26', '2022-10-01'),
(126, 'Double', '0000-00-00', '0000-00-00'),
(127, 'Double', '2022-07-16', '2022-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `room_details`
--

CREATE TABLE `room_details` (
  `room_type` varchar(15) NOT NULL,
  `price` varchar(20) NOT NULL,
  `info` varchar(400) NOT NULL,
  `details` varchar(15) NOT NULL,
  `details2` varchar(15) NOT NULL,
  `details3` varchar(15) NOT NULL,
  `details4` varchar(15) NOT NULL,
  `details5` varchar(15) NOT NULL,
  `details6` varchar(15) NOT NULL,
  `CheckIn` varchar(10) NOT NULL,
  `check_in` varchar(60) NOT NULL,
  `chek_in2` varchar(60) NOT NULL,
  `CheckOut` varchar(10) NOT NULL,
  `chech_out` varchar(60) NOT NULL,
  `check_out2` varchar(60) NOT NULL,
  `Special_checkin_instructions` varchar(30) NOT NULL,
  `instructions` varchar(400) NOT NULL,
  `Pet` varchar(10) NOT NULL,
  `pets` varchar(30) NOT NULL,
  `Children_and_extra_beds` varchar(30) NOT NULL,
  `extra` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_details`
--

INSERT INTO `room_details` (`room_type`, `price`, `info`, `details`, `details2`, `details3`, `details4`, `details5`, `details6`, `CheckIn`, `check_in`, `chek_in2`, `CheckOut`, `chech_out`, `check_out2`, `Special_checkin_instructions`, `instructions`, `Pet`, `pets`, `Children_and_extra_beds`, `extra`) VALUES
('Family Room', '180$/Night', 'Spacious, bright guestrooms with tasteful furnishing, wooden floor and panoramic windows from the ceiling to the floor.', '2-4 Persons.', 'Twin Bed.', '200 Sqft Room.', 'Free Wifi.', 'Breakfast.', 'Swimming Pool.', 'Check In', '✓ Check-in from 9:00 AM - anytime', '✓ Early check-in subject to availability', 'Check Out', '✓ Check-out before noon', '✓ Express check-out', 'Special checkin instructions', 'Guests will receive an email 5 days before arrival with check-in instructions; front desk staff will greet guests on arrival For more details, please contact the property using the information on the booking confirmation.', 'Pets', 'Pets not allowed', 'Children and extra beds', 'Children are welcome Kids stay free! Children stay free when using existing bedding; children may not be eligible for complimentary breakfast Rollaway/extra beds are available for $ 10 per day.'),
('Junior Suite', '100$/Night', 'Spacious, bright guestrooms with tasteful furnishing, wooden floor and panoramic windows from the ceiling to the floor.', '1-2 persons.', 'Twin Bed.', '200 Sqft Room.', 'Free Wifi.', 'Breakfast.', 'Swimming Pool.', 'Check In', '✓ Check-in from 9:00 AM - anytime', '✓ Early check-in subject to availability', 'Check Out', '✓ Check-out before noon', '✓ Express check-out', 'Special checkin instructions', 'Guests will receive an email 5 days before arrival with check-in instructions; front desk staff will greet guests on arrival For more details, please contact the property using the information on the booking confirmation.', 'Pets', 'Pets not allowed', 'Children and extra beds', 'Children are welcome Kids stay free! Children stay free when using existing bedding; children may not be eligible for complimentary breakfast Rollaway/extra beds are available for $ 10 per day.'),
('Double Room', '120$/Night', 'Spacious, bright guestrooms with tasteful furnishing, wooden floor and panoramic windows from the ceiling to the floor.', '1-2 Persons.', 'Twin Bed.', '200 Sqft Room.', 'Free Wifi.', 'Breakfast.', 'Swimming Pool.', 'Check In', '✓ Check-in from 9:00 AM - anytime', '✓ Early check-in subject to availability', 'Check Out', '✓ Check-out before noon', '✓ Express check-out', 'Special checkin instructions', 'Guests will receive an email 5 days before arrival with check-in instructions; front desk staff will greet guests on arrival For more details, please contact the property using the information on the booking confirmation.', 'Pets', 'Pets not allowed', 'Children and extra beds', 'Children are welcome Kids stay free! Children stay free when using existing bedding; children may not be eligible for complimentary breakfast Rollaway/extra beds are available for $ 10 per day.'),
('Deluxe Room', '160$/Night', 'Spacious, bright guestrooms with tasteful furnishing, wooden floor and panoramic windows from the ceiling to the floor.', '3-4 persons.', 'Twin Bed.', '200 Sqft Room.', 'Free Wifi.', 'Breakfast.', 'Swimming Pool.', 'Check In', '✓ Check-in from 9:00 AM - anytime', '✓ Early check-in subject to availability', 'Check Out', '✓ Check-out before noon', '✓ Express check-out', 'Special checkin instructions', 'Guests will receive an email 5 days before arrival with check-in instructions; front desk staff will greet guests on arrival For more details, please contact the property using the information on the booking confirmation.', 'Pets', 'Pets not allowed', 'Children and extra beds', 'Children are welcome Kids stay free! Children stay free when using existing bedding; children may not be eligible for complimentary breakfast Rollaway/extra beds are available for $ 10 per day.');

-- --------------------------------------------------------

--
-- Table structure for table `room_image3`
--

CREATE TABLE `room_image3` (
  `img1` varchar(70) NOT NULL,
  `img2` varchar(70) NOT NULL,
  `img3` varchar(70) NOT NULL,
  `img4` varchar(70) NOT NULL,
  `img5` varchar(70) NOT NULL,
  `img6` varchar(70) NOT NULL,
  `img7` varchar(70) NOT NULL,
  `img8` varchar(70) NOT NULL,
  `img9` varchar(10) NOT NULL,
  `logo` varchar(10) NOT NULL,
  `hotel` varchar(25) NOT NULL,
  `stars` varchar(15) NOT NULL,
  `best_price` varchar(15) NOT NULL,
  `services` varchar(20) NOT NULL,
  `det1` varchar(100) NOT NULL,
  `det2` varchar(100) NOT NULL,
  `cleaning` varchar(15) NOT NULL,
  `price1` varchar(10) NOT NULL,
  `det3` varchar(25) NOT NULL,
  `det4` varchar(25) NOT NULL,
  `det5` varchar(25) NOT NULL,
  `safe` varchar(15) NOT NULL,
  `price2` varchar(10) NOT NULL,
  `det6` varchar(25) NOT NULL,
  `det7` varchar(30) NOT NULL,
  `det8` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_image3`
--

INSERT INTO `room_image3` (`img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `logo`, `hotel`, `stars`, `best_price`, `services`, `det1`, `det2`, `cleaning`, `price1`, `det3`, `det4`, `det5`, `safe`, `price2`, `det6`, `det7`, `det8`) VALUES
('style1.png', 'style2.png', 'style3.png', '4.jpg', '3.jpg', '2.jpg', '3.jpg', 'roomserv.jpg', 'safe.jpg', 'logo.png', 'Room & Suites', '⭐⭐⭐⭐⭐', 'Best Prices', 'Extra Services', 'The best prices for your relaxing vacation. The utanislen quam nestibulum ac quame odion elementum s', 'Orci varius natoque penatibus et magnis disney parturient monte nascete ridiculus mus nellen etesque', 'Room Cleaning', '$50/month', '	✓  Hotel ut nisan the du', '✓  Orci miss natoque vasa', '☓ Clean sorem ipsum morbi', 'Safe & Secure', '$15/daily', '✓  Hotel ut nisan the dur', '✓ Orci miss natoque vasa', '☓ Clean sorem ipsum morbi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
