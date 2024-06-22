-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2024 at 08:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
 create database encyclosd;
--

-- --------------------------------------------------------

--
-- Table structure for table `encyclopedia`
--

CREATE TABLE `encyclopedia` (
  `S_no` int(11) NOT NULL,
  `Disease` varchar(50) NOT NULL,
  `Detail` varchar(255) NOT NULL,
  `Info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `encyclopedia`
--

INSERT INTO `encyclopedia` (`S_no`, `Disease`, `Detail`, `Info`) VALUES
(1, 'Rabies', 'is a fatal viral disease that can affect any mammal, although the close relationship of dogs with humans makes canine rabies a zoonotic concern.', 'Vaccination of dogs for rabies is commonly required by law.'),
(2, 'Parvovirus', 'is a sometimes fatal gastrointestinal infection that mainly affects puppies.', 'It occurs worldwide.'),
(3, 'coronavirus', 'is a gastrointestinal disease that is usually asymptomatic or with mild clinical signs.', 'The signs are worse in puppies.'),
(4, 'distemper', 'is an often fatal infectious disease that mainly has respiratory and neurological signs.', 'Vaccination is commonly required by law. '),
(5, 'influenza', 'is a newly emerging infectious respiratory disease', 'Up to 80 percent of dogs infected will have symptoms, but the mortality rate is only 5 to 8 percent.'),
(6, 'hepatitis', 'is a sometimes fatal infectious disease of the liver.', ' It occurs worldwide.'),
(7, 'herpesvirus', 'is an infectious disease that is a common cause of death in puppies less than three weeks old.', 'The signs are worse in puppies.'),
(8, 'lyme disease', 'Symptoms in dogs include acute arthritis, anorexia and lethargy.', 'There is no rash as is typically seen in humans.'),
(9, 'clostridium', 'species are a potential cause of diarrhea in dogs.', 'The signs are worse in puppies.'),
(10, 'mites', 'Symptoms include itching, inflammation, and black debris in the ear.', 'Symptoms include itching, inflammation, and black debris in the ear.'),
(11, 'rage syndrome', 'is a rare inherited seizure disorder characterized by explosive aggression and focal neurologic symptoms.', 'the mortality rate is only 5 to 8 percent.'),
(12, 'epilepsy', 'The most common sign recurring generalized seizures beginning at a young adult age.', 'This is a rare case for animals.'),
(13, 'Polyneuropathy', 'is a collection of peripheral nerve disorders that often are breed-related in dogs.', 'mainly has respiratory and neurological signs.'),
(14, 'cognitive dysfunction', 'is a progressive disease occurring in older dogs', 'is similar to the dementia which occurs in humans with Alzheimer\'s disease.'),
(15, 'Coonhound paralysis', 'is a type of polyradiculoneuritis seen in Coonhounds. The cause has been related to a raccoon bite.', 'Signs include rear leg weakness progressing rapidly to paralysis, and decreased reflexes.'),
(16, 'Wobbler disease', ' is a condition of the cervical vertebrae that causes an unsteady gait and weakness in dogs.', 'cervical instability');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `encyclopedia`
--
ALTER TABLE `encyclopedia`
  ADD PRIMARY KEY (`S_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `encyclopedia`
--
ALTER TABLE `encyclopedia`
  MODIFY `S_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
