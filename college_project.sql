-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 10:18 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `email_id` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `email_id`, `password`) VALUES
(1, 'admin@gmail.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `agent_service`
--

CREATE TABLE `agent_service` (
  `id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `service_profession` text NOT NULL,
  `service_name` text NOT NULL,
  `description` text NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `mobile_number` text NOT NULL,
  `service_image` text NOT NULL,
  `auth` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agent_service`
--

INSERT INTO `agent_service` (`id`, `user_id`, `service_profession`, `service_name`, `description`, `address`, `email`, `mobile_number`, `service_image`, `auth`) VALUES
(9, '25', 'Website Developer', 'Backend Developer', 'I am a PHP Backend Developer.             ', 'Basirhat, North 24 Pgs. Pin-743427', 'ghoshnayan747@gmail.com', '9641657727', 'service_image/php.jpg', '0'),
(10, '25', 'Website Developer', 'Node Js Developer', ' I also know Node JS                  ', 'Basirhat, North 24 Pgs Pin-743427            ', 'ghoshnayan747@gmail.com', '9641657727', 'service_image/Node Js2.jpg', '0'),
(11, '26', 'Website Developer', 'React JS Developer', 'I am React Js Developer.                  ', '  kolkata 700001                  ', 'mondalabesh27@gmail.com', '9064850002', 'service_image/React-JS.png', '0'),
(12, '26', 'Website Developer', 'Backend Developer', ' i also know PHP and we provide best service for yourself                  ', '   kolkata 700001                 ', 'mondalabesh27@gmail.com', '9064850002', 'service_image/PHP1.jpg', '0'),
(13, '26', 'Website Developer', 'Full Stack Developer', 'Full Stack Developer', 'Kolkata, 700001, West Bengal       ', 'mondalabesh27@gmail.com', '9064850002', 'service_image/full stack.png', '0'),
(14, '28', 'Teacher', 'Computer Teacher', 'Professional Computer Teacher . Class XI and Class XII Students and also BCA students are eligible.                   ', 'Katiahat, Baduria, Pin-743427,   North 24 Pgs ', 'ghosh@gmail.com', '7719104447', 'service_image/computer Teacher.jpg', '0'),
(15, '29', 'Beauty & Makeup', 'Bridal Makeup', 'Professional certified bridal Make up artist.        ', 'New Delhi, India                  ', 'aditi@gmail.com', '9090909090', 'service_image/bridal makeup.jpg', '0'),
(16, '29', 'Beauty & Makeup', 'Bridal Makeup', 'Professional certified bridal Make up artist.        ', 'Kolkata, India                  ', 'aditi@gmail.com', '9090909090', 'service_image/bridal makeup.jpg', '0'),
(17, '25', 'Website Developer', 'Backend Developer', 'I am a PHP Backend Developer.             ', 'Basirhat, North 24 Pgs. Pin-743427', 'ghoshnayan747@gmail.com', '9641657727', 'service_image/php.jpg', '0'),
(18, '25', 'Website Developer', 'Backend Developer', 'I am a PHP Backend Developer.             ', 'Basirhat, North 24 Pgs. Pin-743427', 'ghoshnayan747@gmail.com', '9641657727', 'service_image/php.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `banners_image` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banners_image`, `status`) VALUES
(4, 'banner_image/banner1.jpg', '1'),
(5, 'banner_image/banner2.jpg', '1'),
(6, 'banner_image/banner3.jpg', '1'),
(8, 'banner_image/banner.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blog_title` text NOT NULL,
  `blog_content` text NOT NULL,
  `blog_image` text NOT NULL,
  `publish_date` date NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_title`, `blog_content`, `blog_image`, `publish_date`, `status`) VALUES
(11, 'Durga Puja', 'Durga Puja, also known as Durgotsava or Sharodotsav, is an annual Hindu festival originating in the Indian subcontinent which reveres and pays homage to the Hindu goddess Durga, and is also celebrated because of Durga\'s victory over Mahishasura.', 'blog_image/Durga Puja.jpg', '2023-10-20', 'On'),
(12, 'Happy Diwali', 'Diwali is the Hindu festival of lights with its variations also celebrated in other Indian religions. It symbolises the spiritual \"victory of light over darkness, good over evil, and knowledge over ignorance\".', 'blog_image/Diwali-wishes-images.jpg', '2023-11-05', 'On'),
(13, 'Winter', 'Winters in India are an enchanting season with a myriad of snow-capped mountain peaks, cool and sunny plains, scenic beaches, warm deserts and lively festivals. On an average, winters in India begin from mid-November and go on till late January, but with stark local variations.', 'blog_image/winter.jpg', '2023-11-05', 'On'),
(14, 'Cricket World Cup', 'The Cricket World Cup, officially known as ICC Men\'s Cricket World Cup, or simply called the World Cup is the international championship of One Day International cricket.', 'blog_image/india-2023-logo.png', '2023-11-05', 'On'),
(15, 'Importance of Education', 'Education is the transmission of knowledge, skills, and character traits. Its precise definition is disputed and there are disagreements about what the aims of education are and to what extent education is different from indoctrination by fostering critical thinking.', 'blog_image/importance-of-education.jpg', '2023-11-05', 'On');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories_name` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories_name`, `image`) VALUES
(14, 'Artist', 'category_image/Artist.jpg'),
(15, 'Doctor', 'category_image/doctor.jpg'),
(16, 'Teacher', 'category_image/teacher.jpg'),
(17, 'Beauty & Makeup', 'category_image/makeup.jpg'),
(18, 'Website Developer', 'category_image/website Developer.jpg'),
(19, 'Electrician', 'category_image/electrician.jpg'),
(20, 'Water Supplier', 'category_image/watter.jpg'),
(21, 'Car Repairing', 'category_image/car.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone_number` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `register_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `phone_number`, `email`, `subject`, `message`, `register_date`) VALUES
(2, 'ababa', '2222', 'aaaaa', 'ccccc', 'anahhshh', '2023-10-20'),
(3, 'qwer', '9641657729', 'qwer@gmail.com', 'dffggh', 'sdfgghhh', '2023-10-29');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `phone_number` text NOT NULL,
  `email` text NOT NULL,
  `feedback_title` text NOT NULL,
  `feedback_details` text NOT NULL,
  `register_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `username`, `phone_number`, `email`, `feedback_title`, `feedback_details`, `register_date`) VALUES
(1, 'Aman kumar singh', '8535840335', 'example25@gmail.com', 'Website feedback forms are interactive online surveys that are integrated into websites to capture insights from website visitors or customers to identify areas of improvement.', 'Good Job', '2023-10-16'),
(2, 'Debarati Dutta', '1234567890', 'abc@gmail.com', 'A website feedback form is a powerful survey tool for businesses that operate online. That\'s because the user feedback not only gives insights into how your product(s) is perceived.', 'this is good ', '2023-10-17'),
(4, 'Nayan', '00000000', 'admin@gmail.com', 'Website feedback forms are interactive online surveys that are integrated into websites to capture insights from website visitors or customers to identify areas of improvement.', 'av', '2023-10-29');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `user_mobile_no` text NOT NULL,
  `transaction_id` text NOT NULL,
  `upload_sc` text NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `email` text NOT NULL,
  `profession` text NOT NULL,
  `pincode` text NOT NULL,
  `password` text NOT NULL,
  `mobile_number` text NOT NULL,
  `register_date` text NOT NULL,
  `user_type` text NOT NULL,
  `status` text NOT NULL,
  `auth` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `full_name`, `email`, `profession`, `pincode`, `password`, `mobile_number`, `register_date`, `user_type`, `status`, `auth`) VALUES
(25, 'Nayan Ghosh', 'ghoshnayan747@gmail.com', 'Website Developer', '743428', '1234', '9641657727  ', '2023-11-05', 'Free User', 'Approved', '0'),
(26, 'Abesh Mondal', 'mondalabesh27@gmail.com', 'Website Developer', '743428', '1234', '9064850002 ', '2023-11-05', 'Free User', 'Approved', '0'),
(28, 'Bidyut Baran Ghosh', 'ghosh@gmail.com', 'Teacher', '743427', '1234', '7719104447 ', '2023-11-05', 'Free User', 'Approved', '0'),
(29, 'Aditi Roy', 'aditi@gmail.com', 'Beauty & Makeup', '221122', '1234', '9090909090 ', '2023-11-05', 'Free User', 'Approved', '0'),
(30, 'abc', 'abc@gmail.com', 'Doctor', '123465', '1234', '9090918788  ', '2023-11-06', 'Paid User', 'Approved', ''),
(31, 'abc1', 'abc1@gmail.com', 'Mental Doctor', '123456', '1234', '9090918755', '2023-21-06', 'Paid User', 'Pending', ''),
(32, 'abc2', 'abc2@gmail.com', 'Dental Doctor', '123456', '1234', '9090918799', '2023-22-06', 'Paid User', 'Approved', '0'),
(33, 'abc3', 'abc3@gmail.com', 'Dog Specialist', '123456', '1234', '9090918700', '2023-23-06', 'Paid User', 'Pending', ''),
(34, 'abc4', 'abc4@gmail.com', 'cow Specialist', '123456', '1234', '9090918700', '2023-23-06', 'Paid User', 'Approved', '0'),
(35, 'Minarul Hoque', 'minarulak88@gmail.com', 'Beauty & Makeup', '731220', '123456', '9002624058', '2023-11-28', 'Free User', 'Approved', '0');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `image` text NOT NULL,
  `service_name` text NOT NULL,
  `register_date` text NOT NULL,
  `status` text NOT NULL,
  `highlight` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `category_name`, `image`, `service_name`, `register_date`, `status`, `highlight`) VALUES
(7, 'Website Developer', 'service_image/Front End.png', 'Front End Developer', '2023-11-05', 'On', 'On'),
(8, 'Website Developer', 'service_image/backend-developer.jpg', 'Backend Developer', '2023-11-05', 'On', 'On'),
(9, 'Website Developer', 'service_image/full stack.png', 'Full Stack Developer', '2023-11-05', 'On', 'Off'),
(10, 'Website Developer', 'service_image/Nodejs-Developer.jpg', 'Node Js Developer', '2023-11-05', 'On', 'On'),
(11, 'Website Developer', 'service_image/React-JS.png', 'React JS Developer', '2023-11-05', 'On', 'Off'),
(12, 'Teacher', 'service_image/english Teacher.jpg', 'English Teacher', '2023-11-05', 'On', 'On'),
(13, 'Teacher', 'service_image/science-Teacher.jpg', 'Science Teacher', '2023-11-05', 'On', 'On'),
(14, 'Teacher', 'service_image/computer Teacher.jpg', 'Computer Teacher', '2023-11-05', 'On', 'On'),
(15, 'Beauty & Makeup', 'service_image/bridal makeup.jpg', 'Bridal Makeup', '2023-11-05', 'On', 'On'),
(16, 'Beauty & Makeup', 'service_image/beautisian.jpg', 'Beautician', '2023-11-05', 'On', 'On');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agent_service`
--
ALTER TABLE `agent_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `agent_service`
--
ALTER TABLE `agent_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
