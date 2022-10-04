-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: bbbjhyqp2zujbqqxvtb1-mysql.services.clever-cloud.com:3306
-- Generation Time: Jun 28, 2021 at 07:14 PM
-- Server version: 8.0.22-13
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbbjhyqp2zujbqqxvtb1`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Dr_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Dr_id` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Doctors`
--

CREATE TABLE `Doctors` (
  `id` int NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Education` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Fees` varchar(255) NOT NULL,
  `Experience` varchar(255) NOT NULL,
  `Hospital` varchar(255) NOT NULL,
  `Photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Doctors`
--

INSERT INTO `Doctors` (`id`, `Name`, `Education`, `Designation`, `Fees`, `Experience`, `Hospital`, `Photo`) VALUES
(1, 'Dr Gorav Gupta', 'MBBS│ MD', 'Senior Psychiatrist │ Addiction Psychiatrist', '3800', '22 Years', 'Tulasi Psychiatric & Rehab Centre, Delhi', 'assets/Doctors/1.jpg'),
(2, 'Dr Samir Parikh', 'MBBS│ MD │ DPM', 'Director of Mental Health & Behavioral Sciences Department', '2000', '18 Years', 'Fortis Hospital, Shalimar Bagh, New Delhi', 'assets/Doctors/2.jpeg'),
(3, 'Dr Sameer Malhotra', 'MBBS│ MD', 'Director of Mental Health & Behavioral Sciences Department', '3500', '23+ Years', 'Max Super Speciality Hospital, Delhi', 'assets/Doctors/3.jpeg'),
(4, 'Dr Ajit Dandekar', 'MBBS │ MD │ DPM', 'Honorary Psychiatrist', '4000', '31 Years', 'Nanavati Super Speciality Hospital, Mumbai', 'assets/Doctors/4.jpeg'),
(5, 'Dr Murali Raj', 'MBBS│ DNB│ DPM', 'Consultant│ Psychiatry', '4000', '35 Years', '', 'assets/Doctors/5.png'),
(6, 'Dr Vishal Chhabra', 'MBBS │ DNB│ DPM', 'Senior Consultant│ Psychiatric Department', '4000', '17 Years', 'Fortis Hospital, Delhi', 'assets/Doctors/6.jpeg'),
(7, 'Dr Vasantha Jayaraman', 'MBBS│ DNB│ DPM', 'Senior Consultant of the Psychiatry Department', '2500', '26 Years', 'Gleneagles Global Hospital, Chennai', 'assets/Doctors/7.jpeg'),
(8, 'Dr Mrinmay Kumar Das', 'MBBS │ MD │CCST (UK)', 'Senior Consultant│ Department of Behavioral Sciences', '3500', '24 Years', 'Jaypee Hospital, Delhi NCR', 'assets/Doctors/8.jpeg'),
(9, 'Dr Vipul Rastogi', 'MBBS │ MSc', 'Consultant│ Institute of Neurosciences', '3000', '12 Years', 'Medanta The Medicity, Delhi NCR', 'assets/Doctors/9.jpeg'),
(10, 'Dr Manish Jain', 'MBBS│ MD', 'Psychiatrist', '3400', '13 Years', 'BLK Super Speciality Hospital, Delhi', 'assets/Doctors/10.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `e_title` varchar(255) NOT NULL,
  `e_link` varchar(255) NOT NULL,
  `e_desc` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `username`, `e_title`, `e_link`, `e_desc`) VALUES
(1, 'jai2528', 'Yoga Session', 'https://meet.google.com/pvo-uben-nnn', 'Let your home become your personal yoga studio.'),
(2, 'demo2', 'Stress Relief Webinar', 'https://meet.google.com/bza-nwyw-abr', 'webinar giving hacks for getting stress free life.');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`username`, `email`, `phone`, `message`) VALUES
('JAI5', 'jddubey25@gmail.com', '07000237697', 'HELLO WORLD!'),
('Mayuri', 'mmayuri1300@gmail.com', '8966937827', 'I want to join yoga');

-- --------------------------------------------------------

--
-- Table structure for table `feeds`
--

CREATE TABLE `feeds` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `story` longtext NOT NULL,
  `Images` varchar(255) NOT NULL,
  `visiblity_post` varchar(255) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feeds`
--

INSERT INTO `feeds` (`id`, `username`, `story`, `Images`, `visiblity_post`) VALUES
(42, 'jai2528', 'The Best Way To Get Started Is To Quit Talking And Begin Doing.', 'Images/download.jpg', '1'),
(43, 'jayant111', 'I have always been a writer at heart but didn’t listen to its calling for quite some time. After graduating from a degree in Animation and despite having tried a lot,  I could not get a gainful employment. \r\n\r\nConfused, I started studying for competitive exams. First,  I appeared for the prestigious CAT but again,  didn’t get a good enough percentile to get through to the top MBA colleges in the country. Side by side,  I even appeared for other management exams but the result was the same, I couldn’t get through.\r\n\r\nBy now, I should have listened to my calling of being a writer but still didn’t. Instead I listened to others, succumbed to peer-pressure.I got into the mindset that “It is high time you have a job in hand.” \r\n\r\nI appeared for bank exams and luckily or unluckily got a job with one of the prestigious banks of India. I thought my life was sorted. I even sidelined my passion for writing and thought that maybe I wasn’t destined to become a writer. \r\n\r\nFew months into the banking job, and I realised I was not cut for banking. I would have to drag myself everyday. I was not happy. I sulked and even cried sometimes. But I just couldn ‘t give up the job. Afterall,  when you are 25 and you have  gainful employment,  especially with a bank, quitting is just not an option. You have responsibilities, you have to pay your dues and besides, I was even scared of what others would say and what my family would have to go through if I had left the job.\r\n\r\nDuring this time to find my lost happiness, I started blogging,  wrote stories and poems so that I could keep the passion for writing alive. Though, after a hectic day at work, I could hardly find any time or zeal for writing a single word. The truth was, I had lost the will to do anything, I had even lost my self-esteem.\r\n\r\nAmidst juggling with my banking job,  I decided to ponder over my sItuation pragmatically.  It was either you leave the bank now or else a few years down the lane, life would mount responsibilities on you and then it would become hard for you to shift career. And, the very thought of viewing myself dragging my life like this – a life bereft of happiness and passion,  a life was not fun,  it was indeed scary and sickening. \r\n\r\nStill, the thoughts of not having a job, the thoughts of facing remarks from people made me give up my choice of leaving the job.\r\n\r\nAnother year went down, I was completely exhausted, I didn’t want to continue with the life I was living. Every time when I would call my parents,  they would evidently perceive the sadness in my voice. They even tried to know the reason behind my sadness and every time I told them it’s nothing and it was just the hectic work schedule, that’s it!\r\n\r\nOne day, I gathered the courage to tell my parents that I wanted to leave my job. I expected that they would probably shout,  and oppose my decision of leaving the bank. To my surprise, they calmly asked me if I was sure. For a moment, I closed my eyes and then visualized the peace on my face if I would have left my job. I sighed with a yes! My parents supported my decision which further strengthened my confidence.\r\n\r\nFew days down the line – I resigned from my job. I clearly remember the day when I typed my resignation letter and was about to hit the enter key. My hands were shivering. But, as soon as I hit the enter key, it was as if I was relieved of some burden. \r\n\r\nI am still way far from reaching where I want but each day I wake up happy,  oozing confidence and giving a 100% to what I love,  writing !\r\n\r\nI am not saying the bank I was working for was bad or whether working in the banking sector is bad. But,  if you are doing your job without passion and interest,  even the world’s most interesting would feel like a punishment.\r\n\r\nWith my experience I have realised and I believe that it is so important to listen to what your heart says.It is so important to pursue your passion especially if you want to grow in life.', '', '1'),
(49, 'jai2528', 'Too often we wait for the right words of wisdom, the right tool, the right charismatic leader to come to fore and light an inspirational fire in us. For much of my career, I have waited for that leader or mentor who can spark the movement towards change that I can already see needs to happen. Those leaders, if they come, are fleeting sources of inspiration. True inspiration means facing things as they are and imagining what they can be. You look at your surroundings and see work that needs to be done, but you don’t quite know how to begin.  Someone speaks to you – literally and metaphorically – at the right place and the right time, and you act.', 'Images/p3.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `FullName` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `visiblity` varchar(50) NOT NULL DEFAULT 'PUBLIC'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FullName`, `username`, `password`, `email`, `phone`, `visiblity`) VALUES
(1, 'Jai Dubey', 'jai2528', '$2y$10$7DgcaUVIMRrVDpvyGGdNaejIqP9WerGK8uq5iWgg5kswzbRtzIziW', 'jddubey25@gmail.com', '07000237697', 'PUBLIC'),
(6, 'Khushali', 'khushali54', '$2y$10$KH1jkxOnBTN/Wwx6sHtT..ctX0O/sewYNCt8J.sXpXZgf8QfQwn1a', 'khushalichawrekar123@gmail.com', '09340710720', 'PRIVATE'),
(9, '', 'demo1', '$2y$10$ZbLKb40EfR6SQIZVisH.T.lEBYNm7kELufYZ7OHJpe9KvHmOHDPEq', 'demo@gmail.com', '8989777734', 'PUBLIC'),
(10, 'jayant pawar', 'jayant111', '$2y$10$yf39u.SxIyyEQ2DgINDBfuMa0ekCrZDT971BfSgi7J1cfiqJfBoma', 'pawarjayant80@gmail.com', '8319562131', 'PUBLIC'),
(11, 'Demo 2', 'demo2', '$2y$10$4NVlDO1TgOtfzo77MG8EqeYP83HmurWVdRiAcSemCzqexSH.oFmfm', 'demo2@gmail.com', '898989891', 'PUBLIC'),
(12, '', 'demo3', '$2y$10$ZnllRzN7RKseDSYmDPeUHuu47Td1tIzWf4UJlf4Hg0VNFpmNL4JDS', 'demo28@gmail.com', '62621768966', 'PUBLIC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `Doctors`
--
ALTER TABLE `Doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feeds`
--
ALTER TABLE `feeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Doctors`
--
ALTER TABLE `Doctors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feeds`
--
ALTER TABLE `feeds`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
