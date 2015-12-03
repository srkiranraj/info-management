-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8888
-- Generation Time: Dec 03, 2015 at 08:37 PM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `chennai`
--

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `name` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `help`
--

-- --------------------------------------------------------

--
-- Table structure for table `helper`
--

CREATE TABLE `helper` (
  `name` varchar(500) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `helper`
--

INSERT INTO `helper` (`name`, `phone`, `details`, `timestamp`) VALUES
('Chennai Army Helpline', '9840295100', 'For army rescue services.', '2015-12-03 14:35:34'),
('Adithya Venkatesh', '9901951808', 'For any pregnant women in chennai, please don''t worry about hospital costs, go to any hospital you want to go for delivery, I will pay up costs from my pocket and with help of my friends. Even if it is apollo don''t hesitate. Please call me.', '2015-12-03 14:35:34'),
('KPN Travels', '08431099199, 08022110468', 'Bangalore can send Relief packets to Chennai\n\nKPN Parcel, Shantinagar.', '2015-12-03 14:35:34');
