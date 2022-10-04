-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: bbbjhyqp2zujbqqxvtb1-mysql.services.clever-cloud.com:3306
-- Generation Time: Jun 21, 2021 at 08:32 AM
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
CREATE DATABASE IF NOT EXISTS `bbbjhyqp2zujbqqxvtb1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bbbjhyqp2zujbqqxvtb1`;

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

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `FullName`, `email`, `Dr_name`, `Dr_id`) VALUES
(1, 'Jai Dubey', 'jddubey25@gmail.com', 'Dr Samir Parikh', '2'),
(2, '', '', 'Dr Gorav Gupta', '1');

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
-- Table structure for table `feeds`
--

CREATE TABLE `feeds` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `story` longtext NOT NULL,
  `Images` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feeds`
--

INSERT INTO `feeds` (`id`, `username`, `story`, `Images`) VALUES
(4, 'jai2528', 'Once a sailor shared a fascinating insight. He said, â€˜when the ship is in the midst of a tempest, and nothing seems to be in favour outside, all passengers in a ship depend on one another seeking confidence, support and reassurance. This is how we manage to keep calm and face the challenging as well as rough weathers!â€ When goings get tough, only those who stay composed and confident become victorious. The lesson is to shun over-dependence on external factors for inspiration.The internal source imbibed in the synergy of cohabitants has the power to sustain for more extended periods. Spiritually, a sunflower represents happiness, togetherness and growth. Let us all learn these values and imbibe those in our behaviour. Let us try to be like a sunflower!', 'feeds/814948.jpg'),
(5, 'jai2528', 'Once a sailor shared a fascinating insight. He said, â€˜when the ship is in the midst of a tempest, and nothing seems to be in favour outside, all passengers in a ship depend on one another seeking confidence, support and reassurance. This is how we manage to keep calm and face the challenging as well as rough weathers!â€ When goings get tough, only those who stay composed and confident become victorious. The lesson is to shun over-dependence on external factors for inspiration.The internal source imbibed in the synergy of cohabitants has the power to sustain for more extended periods. Spiritually, a sunflower represents happiness, togetherness and growth. Let us all learn these values and imbibe those in our behaviour. Let us try to be like a sunflower!', 'feeds/p1 (1).jpg'),
(7, 'jai2528', '', 'feeds/607877.jpg'),
(13, 'khushali54', 'In 1972, a popular student in Yomiyama North Middle Schoolâ€™s class 3-3 named Misaki passed away during the school year. Since then, the town of Yomiyama has been shrouded by a fearful atmosphere, from the dark secrets hidden deep within. Twenty-six years later, 15-year-old Kouichi Sakakibara transfers into class 3-3 of Yomiyama North and soon after discovers that a strange, gloomy mood seems to hang over all the students.', ''),
(14, 'khushali54', 'In 1972, a popular student in Yomiyama North Middle Schoolâ€™s class 3-3 named Misaki passed away during the school year. Since then, the town of Yomiyama has been shrouded by a fearful atmosphere, from the dark secrets hidden deep within. Twenty-six years later, 15-year-old Kouichi Sakakibara transfers into class 3-3 of Yomiyama North and soon after discovers that a strange, gloomy mood seems to hang over all the students.\r\nHe also finds himself drawn to the mysterious, eyepatch-wearing student Mei Misaki; however, the rest of the class and the teachers seem to treat her like she doesnâ€™t exist. Paying no heed to warnings from everyone including Mei herself, Kouichi begins to get closer not only to her, but also to the truth behind the gruesome phenomenon plaguing class 3-3 of Yomiyama North. Another follows Kouichi, Mei, and their classmates as they are pulled into the enigma surrounding a series of inevitable, tragic eventsâ€”but unraveling the horror of Yomiyama may just cost them the ultimate price. [Written by MAL Rewrite]', ''),
(15, 'khushali54', 'The appearance of â€œquirks,â€ newly discovered super powers, has been steadily increasing over the years, with 80 percent of humanity possessing various abilities from manipulation of elements to shapeshifting. This leaves the remainder of the world completely powerless, and Izuku Midoriya is one such individual. Since he was a child, the ambitious middle schooler has wanted nothing more than to be a hero.\r\nIzukuâ€™s unfair fate leaves him admiring heroes and taking notes on them whenever he can. But it seems that his persistence has borne some fruit: Izuku meets the number one hero and his personal idol, All Might. All Mightâ€™s quirk is a unique ability that can be inherited, and he has chosen Izuku to be his successor! Enduring many months of grueling training, Izuku enrolls in UA High, a prestigious high school famous for its excellent hero training program, and this yearâ€™s freshmen look especially promising. With his bizarre but talented classmates and the looming threat of a villainous organization, Izuku will soon learn what it really means to be a hero. [Written by MAL Rewrite]', 'feeds/709053.jpg'),
(16, 'jai2528', 'Ever since the death of his father, the burden of supporting the family has fallen upon Tanjirou Kamado’s shoulders. Though living impoverished on a remote mountain, the Kamado family are able to enjoy a relatively peaceful and happy life. One day, Tanjirou decides to go down to the local village to make a little money selling charcoal.\r\nOn his way back, night falls, forcing Tanjirou to take shelter in the house of a strange man, who warns him of the existence of flesh-eating demons that lurk in the woods at night. When he finally arrives back home the next day, he is met with a horrifying sight—his whole family has been slaughtered. Worse still, the sole survivor is his sister Nezuko, who has been turned into a bloodthirsty demon. Consumed by rage and hatred, Tanjirou swears to avenge his family and stay by his only remaining sibling. Alongside the mysterious group calling themselves the Demon Slayer Corps, Tanjirou will do whatever it takes to slay the demons and protect the remnants of his beloved sister’s humanity.', 'feeds/download.jpg'),
(17, 'jai2528', 'Ever since the death of his father, the burden of supporting the family has fallen upon Tanjirou Kamado’s shoulders. Though living impoverished on a remote mountain, the Kamado family are able to enjoy a relatively peaceful and happy life. One day, Tanjirou decides to go down to the local village to make a little money selling charcoal.\r\nOn his way back, night falls, forcing Tanjirou to take shelter in the house of a strange man, who warns him of the existence of flesh-eating demons that lurk in the woods at night. When he finally arrives back home the next day, he is met with a horrifying sight—his whole family has been slaughtered. Worse still, the sole survivor is his sister Nezuko, who has been turned into a bloodthirsty demon. Consumed by rage and hatred, Tanjirou swears to avenge his family and stay by his only remaining sibling. Alongside the mysterious group calling themselves the Demon Slayer Corps, Tanjirou will do whatever it takes to slay the demons and protect the remnants of his beloved sister’s humanity.', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `FullName` varchar(100) NOT NULL,
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
(6, 'Khushali', 'khushali54', '$2y$10$KH1jkxOnBTN/Wwx6sHtT..ctX0O/sewYNCt8J.sXpXZgf8QfQwn1a', 'khushalichawrekar123@gmail.com', '09340710720', 'PUBLIC');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Doctors`
--
ALTER TABLE `Doctors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feeds`
--
ALTER TABLE `feeds`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
