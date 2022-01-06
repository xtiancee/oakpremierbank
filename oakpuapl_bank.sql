-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 06, 2022 at 07:57 AM
-- Server version: 8.0.27-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oakpuapl_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` char(1) NOT NULL,
  `dob` date NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `login_id` varchar(255) NOT NULL,
  `pwd` varchar(32) NOT NULL,
  `lastlogin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `gender`, `dob`, `relationship`, `department`, `address`, `mobile`, `login_id`, `pwd`, `lastlogin`) VALUES
(1, 'admin', 'M', '1994-01-01', 'unmarried', 'developer', 'globsyn kolkata', '18003004000', 'admin', 'D007001', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `atm`
--

CREATE TABLE `atm` (
  `id` int NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `account_no` int NOT NULL,
  `atm_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary1`
--

CREATE TABLE `beneficiary1` (
  `id` int NOT NULL,
  `sender_id` int NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `reciever_name` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `routing` varchar(50) NOT NULL,
  `account_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beneficiary1`
--

INSERT INTO `beneficiary1` (`id`, `sender_id`, `sender_name`, `reciever_name`, `status`, `bank`, `routing`, `account_no`) VALUES
(8, 44, 'Kizito Adike', 'Micheal', 'ACTIVE', 'fidelity', '333333333333', '0888888'),
(9, 50, 'Law Young', 'mruins', 'ACTIVE', 'Bank of America', '667474932WS', '325367475883'),
(10, 55, 'james willis', 'asap', 'ACTIVE', 'Chase Bank', '93447343737', '738383837490'),
(11, 65, ' Lincoln Evans', 'John Luna', 'ACTIVE', 'Bank Of America', '021000322', '483081191403'),
(12, 94, 'gee dan', 'esterrj jdiei', 'ACTIVE', 'bank of america', '1234567890-', '12345678990'),
(13, 95, 'will Dan', 'winn', 'ACTIVE', 'bank of america', '123456789', '67876545678'),
(14, 96, 'quivbe john', 'ruth yam', 'ACTIVE', 'bank of america', '4546754', '12345678908'),
(15, 103, 'man hqappy', 'mR TIM', 'ACTIVE', 'BOA', '456778856', '19654323889'),
(16, 106, 'Patrik  Sammy ', 'Mr Bram Lucas', 'ACTIVE', 'Deutsche Bank Nederland - Dutch Mid Caps Amsterdam', '46392013', '86329643230'),
(17, 108, 'Fenton Raymond ', 'ONE SONG ENTERPRISE', 'ACTIVE', 'TD BANK', '054001725', '43807588340'),
(18, 108, 'Fenton Raymond ', 'Palms Orphanage ', 'ACTIVE', 'Rio Bank', '223299501', '11491544544'),
(21, 116, 'Fenton Raymond', 'Jequay Davis', 'ACTIVE', 'Chase Bank', '044000037', '681124704'),
(24, 100, 'Wallace  Christian', 'Alexis Young ', 'ACTIVE', 'Suntrust Bank', '1000247823148', '061000104'),
(26, 135, 'Robello Danny', 'Mary leverette ', 'ACTIVE', 'Woodforest national bank', '053112592', '1249301753'),
(27, 127, 'Cole Carol', 'Mr. Florence Johnson', 'ACTIVE', 'Chase Bank', '46798288', '656547893'),
(35, 145, 'Kaitlyn Hartson', 'One Song Enterprise', 'ACTIVE', 'Chase Bank', '012436765', '223636374'),
(39, 169, 'Tourdot Lea', 'MR Codwell Ronney', 'ACTIVE', 'Barclay Bank UK', 'BARCGB22XXX', '2626301145'),
(40, 169, 'Tourdot Lea', 'Leila Tourdot', 'ACTIVE', 'Wells Fargo Bank', '121000248', '7449941918'),
(41, 172, 'Sukhdeo Rohan', 'Rohan Sukhdeo', 'ACTIVE', 'Santander Bank, N.A.', '231372691', '5431070800'),
(42, 178, 'Lord Dan', 'Mr Ehise', 'ACTIVE', 'BOA', '737373847', '2728484048');

-- --------------------------------------------------------

--
-- Table structure for table `cheque_book`
--

CREATE TABLE `cheque_book` (
  `id` int NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `account_no` int NOT NULL,
  `cheque_book_status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `other_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(233) NOT NULL,
  `address` longtext NOT NULL,
  `work` varchar(255) NOT NULL,
  `marry` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `nominee` varchar(255) NOT NULL,
  `account_no` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `ifsc` varchar(255) NOT NULL,
  `lastlogin` datetime NOT NULL,
  `balance` int NOT NULL,
  `transaction_no` varchar(255) NOT NULL DEFAULT '0',
  `date_generate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `counter` int NOT NULL DEFAULT '0',
  `is_pin` varchar(255) DEFAULT NULL,
  `is_admin` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `fname`, `lname`, `other_name`, `email`, `active`, `password`, `account`, `mobile`, `gender`, `dob`, `address`, `work`, `marry`, `currency`, `image`, `nominee`, `account_no`, `branch`, `ifsc`, `lastlogin`, `balance`, `transaction_no`, `date_generate`, `counter`, `is_pin`, `is_admin`) VALUES
(51, 'UNION Admin', 'Admin', 'UNION', 'trust', 'geolaw003@gmail.com', 'Yes', '$2y$12$iuak7fdPzese8Kmq4yex4.kMfV2HC52gITSXbQsKFTkDq5xAu9I5u', 'Savings', '098548843', 'Male', '11/12/1992', 'BRONXVILLeNy USA', 'Admin', 'Single', '$', 'user/upload/UNION-Admin.jpg', '', '098765432100', '', '', '0000-00-00 00:00:00', 1077988, '1', '2020-05-23 12:32:59', 0, NULL, 1),
(58, 'Hash Nanyamat', 'Nanyamat', 'Hash', 'K', 'oilifepassion@gmail.com', 'Yes', '$2y$10$gIkdIRNCfWhqWwW7ytNIHO2h2ovVwvUc9wKUAtkfxIuKqAJyWww8i', 'Checking', '5615587579', 'Female', 'O5/10/1947', '9143 Pine Springs Drive, Boca Raton, Fl 33428', 'Nutritionist', 'Widowed', '$', 'user/upload/Hash-Nanyamat.jpeg', '', '000368752312', '', '', '0000-00-00 00:00:00', 11391464, '0', '2019-04-01 07:52:03', 0, NULL, 0),
(60, 'Lincoln Evans', 'Evans', 'Lincoln', 'Bob', 'Evanslincoln49@gmail.com', 'Yes', '$2y$10$309lv4yQc.DPxNhxLm2CPu.h8BYpUVFHwhXJSbz5pZZTfbbyMldqO', 'Savings', '5189780170', 'Male', '15/3/1956', 'Toms rivers hamlet city New Jersey', ' Fund Manager', 'Widowed', '$', 'user/upload/Lincoln-Evans.jpg', '', '001928374651', '', '', '0000-00-00 00:00:00', 435312, '0', '2019-08-20 13:01:51', 0, NULL, 0),
(65, ' Lincoln Evans', 'Evans', ' Lincoln', 'Bob', 'bobbrian299@gmail.com', 'Yes', '$2y$10$k7O8HLFxHOr4KbIbISdYMed/2MRIlIHOGJLC71sBndF6ePFrxbgFG', 'Current', '5189780171', 'Male', '15/3/1956', 'toms rivers hamlet city New Jersey', ' Fund Manager', 'Widowed', '$', 'user/upload/Lincoln-Evans.jpeg', '', '042546571123', '', '', '0000-00-00 00:00:00', 532014, '0', '2019-08-17 22:11:23', 0, NULL, 0),
(66, 'park seong min', 'seong min', 'park', 'elyon park', 'h24mall@naver.com', 'Yes', '$2y$10$bWOQTEjMTxz9i6cCZlKJmule18sd.QJIjaZdwR6rJFD/1m1mGeiTe', 'Savings', '821097588887', 'Male', '13/08/1973', 'The Republic of Korea 2289-8 at Jukyangdae, Yangin-gu, Yongin City, Gyeonggi-do', 'artist', 'Married', '$', 'user/upload/park-seong-min.jpg', '', '011175343657', '', '', '0000-00-00 00:00:00', 0, '0', '2019-08-20 07:40:52', 0, NULL, 0),
(67, 'William Smith', 'Smith', 'William', 'S', 'cryptooworld959@gmail.com', 'Yes', '$2y$10$AdWKgq6zju5Dj3Ex3g1YJu9mCY53TCNlPE5j58wtYyJzh/f2rHkpq', 'Savings', '063588558', 'Male', '29-03-1983', 'Hague germany', 'Engineer', 'Single', '$', 'user/upload/William-Smith.jpg', '', '001367890055', '', '', '0000-00-00 00:00:00', 12364748, '1', '2019-09-01 16:12:58', 0, NULL, 0),
(74, 'to nice', 'nice', 'to', 'meet', 'bobbrain61@gmail.com', 'Yes', '$2y$10$k79xKXBBnwMXsS/XjXG0xuE7c0x4.9fG7pINfDuRqFjl0XEZNNysK', 'Savings', '82838384949', 'Male', '12/2/1922', 'jejdjdjd', 'COP', 'Single', '$', 'user/upload/to-nice.png', '', '123456789077', '', '', '0000-00-00 00:00:00', 636866070, '2', '2019-08-23 22:38:35', 0, NULL, 0),
(84, 'MADDOX WANDA', 'WANDA', 'MADDOX', 'Virginia', 'cmiswanda@gmail.com', 'Yes', '$2y$10$mQgSf8/zwD4clOEk9olyHeXNeswAZXUwjH9C3SirDk14Hk6OBNyje', 'Checking', '14192607274', 'Female', '26/10/1952', '6046 WILLOWVALE DR\r\nToledo, Ohio 43615', 'Retired', 'Single', '$', 'user/upload/MADDOX-WANDA.png', '', '00004762515', '', '', '0000-00-00 00:00:00', 5874078, '2', '2019-08-28 17:30:11', 0, NULL, 0),
(87, 'SAHU HEMANT', 'HEMANT', 'SAHU', 'Kumar', 'hemantmarai2016@gmail.com', '12abe7dc855ae5bd929f729385e1fb04', '$2y$10$1YzNAJKZlBcfL69Wm5hgneweQYcXqWnzzxnmxnQIjW1hK29.eX6l2', 'Current', '918305741278', 'Male', '10/09/1979', 'ward no 03, shitla mandir road , chikhli, Rajnandgaon (Chhattisgarh) 491441 INDIA', 'Trader', 'Married', '$', 'user/upload/SAHU-HEMANT.jpg', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(89, 'Dailey Esther', 'Esther', 'Dailey', 'Grace', 'esther.dailey@yahoo.com', 'Yes', '$2y$10$NTikIrspd9oduoY4EVxhuOjJytpgv610Fdp/rUVSNKBRGluaN5Xoq', 'Checking', '7609533365', 'Female', '18/09/1948', '4081 Canterra Arc.      Las Cruces , NM 88011', 'Retired', 'Widowed', '$', 'user/upload/Dailey-Esther.jpeg', '', '00023266545', '', '', '0000-00-00 00:00:00', 9742815, '2', '2019-11-07 17:52:56', 0, NULL, 0),
(90, 'ugly danny', 'danny', 'ugly', 'boy', 'boss.cally@yahoo.com', 'Yes', '$2y$10$rrsRasfo8OrTPU9c3KdHIOwQ1Sl1WH4srVIa0UrCLB2eS5jaJc7Vq', 'Savings', '12345594322', 'Male', '20/12/1988', 'hgihhdgihdigh', 'retired', 'Single', '$', 'user/upload/ugly-danny.jpg', '', '98778900989', '', '', '0000-00-00 00:00:00', 0, '0', '2019-10-29 11:49:53', 0, NULL, 0),
(93, 'jampa kelin', 'kelin', 'jampa', 'user', 'stefanomazo@yahoo.com', 'cbab68c516c201c8d44a6c7f3492e248', '$2y$10$aD/OR0hKPgCi6sJpMiI7/uIav2Umbe.aMNxEvGkb8EgXMuvb5WzUK', 'Savings', '178398735', 'Male', '20/8/1980', '234 Plot E new york', 'enginerring', 'Single', 'â‚º', 'user/upload/jampa-kelin.png', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(94, 'gee dan', 'dan', 'gee', 'will', 'lincolnchris081@gmail.com', 'Yes', '$2y$10$pQVA3l43FbaQShX9d2i8c.217nTs5P/k2sRFfEzs6jJLAJyoz4Fcu', 'Savings', '23456789078', 'Male', '26/09/1234', 'sdfghjkl', 'teacher', 'Single', '$', 'user/upload/gee-dan.jpg', '', '12345654321', '', '', '0000-00-00 00:00:00', 100700000, '4', '2019-11-07 11:55:45', 0, NULL, 0),
(95, 'will Dan', 'Dan', 'will', 'satt', 'jenaynay61@gmail.com', 'Yes', '$2y$10$/jl8wx3al8CEUoAKu6dpuu3TvzWtnRGj8tMdGtastI2.vFppMFkQe', 'Savings', '2345678909', 'Male', '12/12/1903', 'FGHJK[;JHGFC', 'TECH', 'Single', '$', 'user/upload/will-Dan.jpg', '', '12345678123', '', '', '0000-00-00 00:00:00', 5200000, '2', '2019-11-07 12:38:37', 0, NULL, 0),
(96, 'quivbe john', 'john', 'quivbe', 'villa', 'jesssidee@gmail.com', 'Yes', '$2y$10$gqArXE19zeLYx2.y9FUxA.5zWPIWxyEYSQ1ZUCYO3/gCOSPemw86C', 'Savings', '123458656778', 'Male', '20/12/1289', 'sdzfhff', 'sherif', 'Single', '$', 'user/upload/quivbe-john.jpg', '', '11111123456', '', '', '0000-00-00 00:00:00', 8089000, '2', '2019-11-07 15:56:00', 0, NULL, 0),
(98, 'Wallace  Christian', 'Christian', 'Wallace ', 'Liam ', 'chriswallace1100@gmail.com', 'eb0e5a7a51b4bc9309423d1ddfebea40', '$2y$10$dcUMGN/b.6LmDu9BcHHncuaieokkFGNt56cmLYlFSeIvGJrVG2mCm', 'Savings', '08162675335', 'Male', '16/7/1980', 'Houston Texas ', 'Contractor ', 'Single', '$', 'user/upload/Wallace-Christian.png', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(99, 'None Della', 'Della', 'None', 'None', 'pitmandella36@gmail.com', 'Yes', '$2y$10$4ZsZc7TurytBHzUUvejL6eLppUn9sRLr7KUr1RGLdCbxGRU7hpRs6', 'Checking', '6817538259', 'Female', '06/21/1962', '41 TurningRd\r\nFairmont WVa 26554', 'Essential worker home health care', 'Single', '$', 'user/upload/None-Della.jpg', '', '00435487671', '', '', '0000-00-00 00:00:00', 11691271, '2', '2020-05-29 17:19:31', 0, NULL, 0),
(100, 'Wallace  Christian', 'Christian', 'Wallace ', 'Liam ', 'wallacechrist242@gmail.com', 'Yes', '$2y$10$l641.u.9MNh1luPBS2LkHehAO2IkZIO.aInfaZ50jMAk7TVLNgWjK', 'Savings', '09069626741', 'Male', '16/7/1980', 'United state  \r\n', 'Contractor ', 'Single', 'â‚º', 'user/upload/Wallace-Christian.png', '', '00073573280', '', '', '0000-00-00 00:00:00', 6448517, '1', '2021-05-01 14:36:32', 0, NULL, 0),
(103, 'man hqappy', 'hqappy', 'man', 'boyq', 'glincoln635@gmail.com', 'Yes', '$2y$10$4vxHN8paPpShyyXjb1O.Q.TXmL/pbjgBnP0Q403KZcByjJnhBNjhW', 'Savings', '0000090998', 'Male', '20/11/1234', 'gtyrffggh', 'cop[', 'Single', '$', 'user/upload/man-hqappy.jpg', '', '22222211134', '', '', '0000-00-00 00:00:00', 21689335, '2', '2020-05-25 11:10:00', 0, NULL, 0),
(104, 'Niglio John', 'Raymond ', 'Fenton ', 'David ', 'fentonraymond4@gmail.com', 'Yes', '$2y$10$yJ34fDJbW1BouEpxBJdPPeQ.suiZKmnkW8BHfyFr3JssCJuHGadU2', 'Savings', '8434745909', 'Male', '21/12/1962', 'Rock hill sc ', 'United States Airforce ', 'Widowed', '$', 'user/upload/Niglio-John.jpeg', '', '00657829773', '', '', '0000-00-00 00:00:00', 534876, '0', '2020-06-24 17:53:11', 0, NULL, 0),
(105, 'Robert Frost', 'Frost', 'Robert', 'rob', 'frostrob042@gmail.com', 'Yes', '$2y$10$VnZ6MovrEZsPXEUpnfX4kObwynHmt23vAYbJuVo3bmkSVZHHSg.Fe', 'Savings', '5338044484', 'Male', '02/02/1979', '644 Whythe Ave, Brooklyn, NY 11249, USA', 'Cons', 'Married', '$', 'user/upload/Robert-Frost.jpg', '', '00367920382', '', '', '0000-00-00 00:00:00', 8125767, '0', '2020-09-10 15:55:34', 0, NULL, 0),
(106, 'Patrik  Sammy ', 'Sammy ', 'Patrik ', 'roko', 'sammypatrik80@gmail.com', 'Yes', '$2y$10$Edz09S8Cxyl7PnWzNAmpvuJM805HgLTBHx1lB7MnU/7MWJ5OwJ0iC', 'Savings', '6273949404', 'Male', '02/02/1979', 'NYC', 'Constructor', 'Single', '$', 'user/upload/Patrik-Sammy-.jpeg', '', '00381765431', '', '', '0000-00-00 00:00:00', 584543, '2', '2020-06-11 12:30:59', 0, NULL, 0),
(107, 'Silos Linda', 'Linda', 'Silos', 'None', 'Mamacita815j@aol.com', 'ff128293f56bf235db037ded6b21ef50', '$2y$10$..fCWkKQvcDN92MfOc.DluiBthCWhrUUNq7bCCqL7jpQUoCmHCXHK', 'Checking', '8643130265', 'Female', '12/02/1953', '815 John Street', 'Retired', 'Single', '$', 'user/upload/Silos-Linda.jpg', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(109, 'Lincoln Daniel ', 'Daniel ', 'Lincoln', 'Roko', 'Camilliefed01@gmail.com', 'Yes', '$2y$10$kue.iwthTd1ouFf6hgEchedub7.AZtUM6UKxE7nWUr4exUYBGrKQu', 'Savings', '9737403874', 'Male', '12/01/1956', 'USA', 'Fund Manager ', 'Single', '$', 'user/upload/Lincoln-Daniel-.jpeg', '', '00157820394', '', '', '0000-00-00 00:00:00', 1089453, '2', '2020-07-08 18:18:28', 0, NULL, 0),
(113, 'Robert  Howard ', 'Howard ', 'Robert ', 'Simon', 'rfrost576@gmail.com', 'Yes', '$2y$10$ElaNln4bIhQIVpYNookgIuH62oF1jizT2Sf1xqWCM2lyEVuCqGu52', 'Savings', '9834567889', 'Male', '29/06/1972', '37 Richmond Street\r\n', 'Engineer', 'Single', '$', 'user/upload/Robert-Howard-.jpg', '', '00347823921', '', '', '0000-00-00 00:00:00', 2322099, '1', '2020-09-14 10:53:51', 0, NULL, 0),
(114, ' Lincoln Evans', 'Evans', ' Lincoln', 'Roko', 'evanslinco68@gmail.com', 'Yes', '$2y$10$1OFB.Pr9MRbeEqi8spTwZe0sf1aQMHnZ7pFc/w9QoLm6m.gTsTfH2', 'Savings', '0946746834', 'Male', '23/12/1960', 'Berlin Michigan USA', 'Fund Manager', 'Single', '$', 'user/upload/Lincoln-Evans.jpg', '', '81546678209', '', '', '0000-00-00 00:00:00', 2340000, '0', '2020-08-18 21:55:32', 0, NULL, 0),
(115, ' Martinez Frank', 'Frank', ' Martinez', ' Martinez', 'frankmartinezcatoil@gmail.com', 'Yes', '$2y$10$Nq3sThP8H.gp.vD3V.BS0ed8wmWokflms0omIrVzJlCXGEXYbbEUm', 'Savings', '4243360675', 'Male', '8/8/1977', 'Charleston South Carolina USA ', 'Engineer', 'Single', '$', 'user/upload/Martinez-Frank.jpeg', '', '00347823922', '', '', '0000-00-00 00:00:00', 2430099, '0', '2020-08-25 12:08:18', 0, NULL, 0),
(116, 'Fenton Raymond', 'Raymond', 'Fenton', 'Roko', 'Raymondton001@gmail.com', 'Yes', '$2y$10$8jX99DXxorIrgIHjNujx4.U5N6XrxeZ9BWroPuLDD6GRHYL7fl4hW', 'Savings', '8036204934', 'Male', '26/09/1960', 'USA', 'Fund Manager', 'Single', '$', 'user/upload/Fenton-Raymond.jpg', '', '00347823422', '', '', '0000-00-00 00:00:00', 2247099, '2', '2020-08-28 02:19:35', 0, NULL, 0),
(117, 'Antonio David ', 'David ', 'Antonio', 'Roko', 'davideantonio596@gmail.com', 'Yes', '$2y$10$GpIA2Dxe7qIzfCVYcSsSaOX13J0wFVwJVbCJQC5sVv6yKrF2aMJ9S', 'Savings', '3763583983', 'Male', '25/10/1971', 'New York USA', 'Drilling Engineer', 'Single', '$', 'user/upload/Antonio-David-.jpeg', '', '003478234', '', '', '0000-00-00 00:00:00', 4600198, '1', '2020-09-20 20:05:44', 0, NULL, 0),
(118, 'Anderson  Chris', 'Chris', 'Anderson ', 'L.', 'chrisandersomn2000@gmail.com', 'Yes', '$2y$10$XApQ6OteS2Ui/PtiT8RAre8SYp4pNO3ISuYyzRmiGchdGUgtH7Spu', 'Checking', '3017785244', 'Male', '20/08/1985', '2334 Bronxville,NY,United States of America ', 'Business ', 'Single', '$', 'user/upload/Anderson-Chris.jpeg', '', '003478239', '', '', '0000-00-00 00:00:00', 2855000, '0', '2020-09-14 11:10:13', 0, NULL, 0),
(119, 'Leblanc Edith', 'Edith', 'Leblanc', 'Edith', 'edithe_leblanc@hotmail.com', 'Yes', '$2y$10$2SFA3NF1HOg4ERd8zrQXvejlk226kYNIEAKpb8TwcJAw3lMzPON52', 'Savings', '5063340444', 'Female', '28/12/1965', '664 Royal Road \r\nMemramcook ,New Brunswick,Canada E4k 1Y6', 'cashier', 'Single', '$', 'user/upload/Leblanc-Edith.jpg', '', '098765431', '', '', '0000-00-00 00:00:00', 11697814, '1', '2020-09-20 20:34:55', 0, NULL, 0),
(120, 'Bryd  Walsh ', 'Walsh ', 'Bryd ', 'Pauline', 'walshbrydpauline@gmail.com', 'Yes', '$2y$10$Xa6PYrQMw9yMKYdReKC8LuURtsyZACEjqDYBw0MMPX73MjRUn/C5W', 'Savings', '764569876', 'Male', '14/02/1984', 'Tampa Usa', ' US military', 'Single', '$', 'user/upload/Bryd-Walsh-.jpeg', '', '098765406', '', '', '0000-00-00 00:00:00', 16500, '0', '2020-09-15 20:52:20', 0, NULL, 0),
(121, 'Montalvo Briggs', 'Briggs', 'Montalvo', 'b', 'briggsmontalvo360@gmail.com', '9483e7d8645c130b872da9fae9d1b30e', '$2y$10$x.lJTiwwNjCq3L3mWyDlt.4z8tYDM.mfqQGllUXV3Fy0M8BAIiR0K', 'Savings', '18134431994', 'Male', '17/07/1981', 'St Petersburg Florida', 'Soldier', 'Single', '$', 'user/upload/Montalvo-Briggs.jpg', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(122, 'Hargrave  Lois', 'Lois', 'Hargrave ', 'Ann', 'loishargrave54@gmail.com', 'e16a0e710ac2ef977276e760cd155132', '$2y$10$L.2V8buS9.WFGX9C46.D9OGwZRl4kpTUTsGfnA2QKF7p2kPaEGhyy', 'Checking', '3044095364', 'Female', '12-18-57', '266 Crestridge Heights Rd Bluefield WVa 24701i', 'Retired', 'Widowed', '$', 'user/upload/Hargrave-Lois.jpg', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(123, 'Piccirillo Janis', 'Janis', 'Piccirillo', 'Janis Piccirillo', 'janispiccirillo@gmail.com', 'Yes', '$2y$10$akgKH37LN1XLKmmJx3zABeH.noY4XxZxqXZS5D5wUlocakSxsSKie', 'Savings', '2017048091', 'Female', '02 13 1956', '147 Orlando Blvd', 'Chiropractic assist./ massage therapist', 'Single', '$', 'user/upload/Piccirillo-Janis.jpg', '', '001568431', '', '', '0000-00-00 00:00:00', 135000, '2', '2020-11-23 18:10:00', 0, NULL, 0),
(124, 'Sebastian Guy', 'Guy', 'Sebastian', 'Theodore', 'guysebastian1001@gmail.com', 'Yes', '$2y$10$w3dfE7twWWfZek/iwa/PFONU7VhEV6d.hOaS6s5AjDMw0nCOf7ZPW', 'Savings', '16282702745', 'Male', '26/10/1981', '48 Torrington road, Maroubra, Sydney.', 'Musician', 'Married', '$', 'user/upload/Sebastian-Guy.png', '', '009376111', '', '', '0000-00-00 00:00:00', 2210420, '1', '2020-10-07 10:22:09', 0, NULL, 0),
(125, 'Bryan Luke ', 'Luke ', 'Bryan', 'Thomas', 'lukebryanprivate80@gmail.com', 'Yes', '$2y$10$gwwzf./ZafTIzJQvRILgT.QHaXj1eoRvPrNwRjtxLaiQJ2xApw4Tm', 'Current', '17644391687', 'Male', '17/07/1976', '2246 Bronxville, NY, United State of America ', 'Musician ', 'Married', '$', 'user/upload/Bryan-Luke-.png', '', '000964285', '', '', '0000-00-00 00:00:00', 954638, '0', '2020-10-17 10:25:48', 0, NULL, 0),
(126, 'Halani Jahad', 'Jahad', 'Halani', 'Majed', 'Jahadhalani@gmail.com', 'Yes', '$2y$10$FYHbOxRQGVVgT77mNm3IdeE0gF8FqkHdvybQyCEkgvUUHvneirFgy', 'Checking', '17865097681', 'Male', '15/12/1967', '5704 Spring Valley Rd #1039, Dallas, TX, 75254', 'Structural Engineer', 'Single', '$', 'user/upload/Halani-Jahad.png', '', '007318589', '', '', '0000-00-00 00:00:00', 5231785, '1', '2020-10-27 00:30:41', 0, NULL, 0),
(127, 'Cole Carol', 'Carol', 'Cole', 'N/A', 'cjc42421@comcast.net', 'Yes', '$2y$10$camMFZ7fw1N2LnvoWmceCuKmcgeHYczyFsN76C5xZ2KF.H3wQF9c.', 'Checking', '6035684127', 'Female', '04/24/1955', '2 Rosewood Drive\r\nBow, NH', 'Insurance Admin Representative', 'Widowed', '$', 'user/upload/Cole-Carol.jpg', '', '006793468', '', '', '0000-00-00 00:00:00', 9717814, '3', '2021-02-13 03:44:21', 0, NULL, 0),
(128, 'Ingelido Joanne', 'Joanne', 'Ingelido', 'None', 'joanne0930530@aol.com', '7d564c64c9901c8681c16153c78531d8', '$2y$10$hOPhbbaGsZbamLWHQFj0Z.c9wdd0E7EyLXjw5/tzUUaAoj0LnHHSC', 'Checking', '6612509216', 'Female', '09', '20214 Canyon View Drive\r\nCanyon Country, CA 91351', 'Retail', 'Single', '$', 'user/upload/Ingelido-Joanne.jpeg', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(129, 'Robert  Evans', 'Evans', 'Robert ', 'Roko', 'boltshipping160@gmail.com', 'Yes', '$2y$10$IHo7R4.2OUTfTQ1t2/ARK.2bBpBGBrsLH9/.H7hAn.97ydMbPfwnu', 'Savings', '4578906432', 'Male', '26/09/1960', 'USA', 'Fund Manager', 'Single', '$', 'user/upload/Robert-Evans.jpeg', '', '000164285', '', '', '0000-00-00 00:00:00', 11742814, '0', '2020-10-26 00:55:00', 0, NULL, 0),
(131, 'BROOKS MICHEAL ', 'MICHEAL ', 'BROOKS', 'RODRIGUEZ ', 'Michebrooks35@gmail.com', 'Yes', '$2y$10$.l0EUCozi2ks/RHux4erTujt9lhQ1WPMt7L/bjDTSXurxdPIihBoW', 'Current', '0934567800', 'Male', '26/11/1975', '3056 round table drive Ohio occupation ', 'Engineer', 'Single', '$', 'user/upload/BROOKS-MICHEAL-.jpg', '', '008642189', '', '', '0000-00-00 00:00:00', 8354777, '1', '2020-11-13 14:23:55', 0, NULL, 0),
(132, 'RICHARD REBECCA', 'REBECCA', 'RICHARD', 'BECKY', 'NOLABECKY16@GMAIL.COM', 'Yes', '$2y$10$XLZMASNIUnCNoVjK82iypeqPjcYDQJKq/I8rC7zuA0oN2ICMrVl.2', 'Checking', '5042015700', 'Female', '10/13/1961', '210 BOWMAN DR\r\nSTATHAM, GA 30666', 'SALES', 'Single', '$', 'user/upload/RICHARD-REBECCA.jpg', '', '002163875', '', '', '0000-00-00 00:00:00', 11590814, '2', '2020-11-23 21:40:04', 0, NULL, 0),
(133, 'Rivera Nelson', 'Nelson', 'Rivera', 'Hugo', 'Nelsinriverside@gmail.com', 'Yes', '$2y$10$nD5AC1XZhDqiQn8StlJlVONKqX4b5HdHD2.l6vWyIET53oGwpGlby', 'Savings', '13018500829', 'Male', '25/08/1985', 'Blackthorne Ave, California LA, United State Of America', 'Business', 'Single', '$', 'user/upload/Rivera-Nelson.jpg', '', '642312345', '', '', '0000-00-00 00:00:00', 2430099, '0', '2020-12-16 19:19:54', 0, NULL, 0),
(134, 'Antonia Evelyn', 'Evelyn', 'Antonia', 'Jennifer', 'Evelyntonia9@gmail.com', '240918ff102c8a64cce9c76c36f92db2', '$2y$10$QSJeUakWDT25Paxslw8g1.HoXBuvhYUo6rwyraE97lC7N/I5HWPhe', 'Savings', '14343297286', 'Female', '14/08/1985', '2334, Acron Street, New Orleans\r\nUnited States of America', 'Engineer', 'Single', '$', 'user/upload/Antonia-Evelyn.jpg', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(135, 'Robello Danny', 'Danny', 'Robello', 'Toro', 'robellodannyt@gmail.com', 'Yes', '$2y$10$CpomjSdXj02gyhMHqiRP9uoYZW/YTmTwpbe8WDOyEX7i4cYaFmaJi', 'Savings', '3017785244', 'Male', '7/7/1988', '223 E. Concord Street, Orlando, FL 32801', 'Military ', 'Single', '$', 'user/upload/Robello-Danny.jpeg', '', '053784890', '', '', '0000-00-00 00:00:00', 53322, '2', '2020-12-10 15:04:50', 0, NULL, 0),
(136, 'Burgos Norma', 'Norma', 'Burgos', 'N/A', 'normaburgos501@yahoo.com', 'Yes', '$2y$10$K0WD2jJk4IkMQ1wYQu9zwOZt5kgj2XV5kYHbxikvbn6CecYzNDWRe', 'Savings', '9184403736', 'Male', '08/24/1966', '4410 S 187th W Ave', 'Nanny', 'Single', '$', 'user/upload/Burgos-Norma.jpeg', '', '067635357', '', '', '0000-00-00 00:00:00', 11742900, '0', '2020-12-24 21:11:20', 0, NULL, 0),
(137, 'Rivera Nelson', 'Nelson', 'Rivera', 'Hugo', 'nelsiinriverane@gmail.com', '5610e4a004e9e43bd7b0f666d0a5ad86', '$2y$10$x5fldSoO2goNCoWcJ8YLYeYAdY.W1Y5ZHMZD/hRmMUO1LL8O4nzh2', 'Savings', '2347040844968', 'Male', '25/08/1985', '2727 Clyde Avenue\r\nLos Angeles, CA, United States of America', 'Business', 'Single', '$', 'user/upload/Rivera-Nelson.jpg', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(138, 'Cristina Aline', 'Aline', 'Cristina', 'Dantas', 'ac096279@gmail.com', '9d4550cb5917e870eec6c753f6be0498', '$2y$10$Wz/mQJGrv57MKNk4ZpdhcOVATUdyHy8fJQBZs2eNXg.RYpzLN6J62', 'Savings', '84996299563', 'Female', '11/01/1995', 'Rua das sucupiras 3201', 'Cabeleireira', 'Single', '$', 'user/upload/Cristina-Aline.jpg', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(139, 'Cristina Aline', 'Aline', 'Cristina', 'Dantas', 'cristinadantas933@gmail.com', '7653b147c9a8ef2bfcb78d302728c692', '$2y$10$uKiORPkcccbnPKUN45iWt.ZiHMTzgAuJkTxRzV1amVzBHT0.zP8MO', 'Savings', '84987554676', 'Female', '11/01/1995', 'Rua das sucupiras 3201', 'Cabeleireira', 'Single', '$', 'user/upload/Cristina-Aline.jpg', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(140, 'Ð“Ð°Ð»Ð¸Ð½Ð° Ð¯Ð²ÐºÐ¸Ð½Ð°', 'Ð¯Ð²ÐºÐ¸Ð½Ð°', 'Ð“Ð°Ð»Ð¸Ð½Ð°', 'ÐšÐµÐ»ÑŒÐ²Ð¸Ð½', 'gavkina026@gmail.com', 'Yes', '$2y$10$Uy1LUtW0petYGfYlP21ai.cFtqHii1HT3Icl6wNyPhk8pi8jj7.qG', 'Current', '87774146065', 'Female', '26091994', 'Ð’Ð¾ÑÑ‚Ð¾Ñ‡Ð½Ð¾ ÐšÐ°Ð·Ð°Ñ…ÑÑ‚Ð°Ð½ÑÐºÐ°Ñ Ð¾Ð±Ð»Ð°ÑÑ‚ÑŒ Ð³Ð¾Ñ€Ð¾Ð´ Ð£Ñ€Ð´Ð¶Ð°Ñ€', 'ÐŸÑ€Ð¾Ð´Ð°Ð²ÐµÑ†', 'Married', '$', 'user/upload/.jpg', '', '007584746', '', '', '0000-00-00 00:00:00', 846307, '4', '2021-04-14 04:58:18', 0, NULL, 0),
(141, 'Ð¯Ð²ÐºÐ¸Ð½Ð° Ð“Ð°Ð»Ð¸Ð½Ð°', 'Ð“Ð°Ð»Ð¸Ð½Ð°', 'Ð¯Ð²ÐºÐ¸Ð½Ð°', 'Ð•Ð»ÐµÐ½Ð°', 'avkinagals@gmail.com', 'e935fbaed43b6c8c6d992b970ac14e7e', '$2y$10$2PKLlrcWKNiRVUonqqgTe.Y7RroIzWfbpyQEzfGP.hpcP26K1DziO', 'Savings', '87770657902', 'Female', '26091994', 'Ð’Ð¾ÑÑ‚Ð¾Ñ‡Ð½Ð¾ ÐšÐ°Ð·Ð°Ñ…ÑÑ‚Ð°Ð½ÑÐºÐ°Ñ Ð¾Ð±Ð»Ð°ÑÑ‚ÑŒ Ð³Ð¾Ñ€Ð¾Ð´ Ð£Ñ€Ð´Ð¶Ð°Ñ€ ÑƒÐ»Ð¸Ñ†Ð° Ð–Ñ‹Ð½Ð³Ñ‹Ð»Ð±Ð°ÐµÐ²Ð° Ð´Ð¾Ð¼ 23', 'ÐŸÑ€Ð¾Ð´Ð°Ð²ÐµÑ†', 'Single', '$', 'user/upload/.jpg', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(142, 'Bryd Marianne', 'Marianne', 'Bryd', 'Pamela', 'mariannebryd@gmail.com', 'Yes', '$2y$10$NdHYuUKlW8FYP88FW64Xc.JW3sW3vr0lXP6CTLcWOkNvM/0RHCO2u', 'Savings', '14104178817', 'Female', '15/01/1988', '28 Willingham way Colchester Essex Newark NJ', 'Accountant', 'Single', '$', 'user/upload/Bryd-Marianne.png', '', '294719361', '', '', '0000-00-00 00:00:00', 964959, '5', '2021-03-10 15:12:34', 0, NULL, 0),
(143, 'Fenton Johnny ', 'Johnny ', 'Fenton', 'Raymond ', 'johnnyfenton5464@gmail.com', 'Yes', '$2y$10$/KiQOiRqZvryEKvTFWC0Lu.Y2xHIWJjLjyrEgYaj8hMlAYbC/yt4i', 'Checking', '4793230676', 'Male', '21/1/1951', '072204 Sw 19th St, Bentonville, AR 72713, USA', 'Contractor ', 'Widowed', '$', 'user/upload/Fenton-Johnny-.jpeg', '', '006448436', '', '', '0000-00-00 00:00:00', 698890, '3', '2021-02-24 13:43:44', 0, NULL, 0),
(144, 'Lucky2 amos', 'amos', 'Lucky2', 'rrrr', 'zhinzeu@gmail.com', 'db8b1f08dffece684e8db31fbd50a9ea', '$2y$10$Bvlw8r5i.CgxsIWcblBRo.4e/cbMlmB0n/ou17F8i4nsfHv7Qkw0K', 'Savings', '09087654545', 'Male', '20/7/9', 'No 19 yaru street ayetoro area ilorin kwara state', 'Teacher', 'Single', '$', 'user/upload/Lucky2-amos.png', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(145, 'Kaitlyn Hartson', 'Hartson', 'Kaitlyn', 'Pamela', 'hartsonkaitlyn@gmail.com', 'Yes', '$2y$10$eQaNReuyqtXf3DCvleMmuO375gn3yqFRdHeE57dhxrsVGkTvvIwiW', 'Savings', '14346377513', 'Female', '01011988', '46 Howard Pkwy, New Rochelle,NY 10801', 'Accountant', 'Single', '$', 'user/upload/Kaitlyn-Hartson.png', '', '637283930', '', '', '0000-00-00 00:00:00', 894944, '1', '2021-03-15 12:17:27', 0, NULL, 0),
(146, 'Mackey Claire', 'Claire', 'Mackey', 'Mrs Mackey', 'mackeyclaire48@gmail.com', 'Yes', '$2y$10$tqVD4JzOwK.H2HWnlNKGBu4f9NKju8jDJIY7qLoSohOdgQADSj4E2', 'Checking', '4438273731', 'Female', '11/06/1959', '8201 loch raven blvd., Apt A. Towson, MD 21286 USA', 'Admin', 'Single', '$', 'user/upload/Mackey-Claire.jpg', '', '018638193', '', '', '0000-00-00 00:00:00', 11432810, '2', '2021-03-23 23:35:00', 0, NULL, 0),
(147, 'Loaf Sab', 'Sab', 'Loaf', 'Jon', 'evanslincoln4040@gmail.com', '2d8dfefa0f86a7753184a427afe209e1', '$2y$10$wKkwPDs7tePxKgj6ULQdgOX73hYCZq/y5ufTaQCR69I.Rhci7xpZG', 'Checking', '08146729479', 'Female', '20/12/199', 'Coda 23  archive', 'Nurse', 'Single', '$', 'user/upload/Loaf-Sab.jpeg', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(148, 'Sav Sam', 'Sam', 'Sav', 'Lom', 'sacj@gmail.com', '610406d6cf694a371bd3e57f6518a8dc', '$2y$10$267tABnU4SZelrr8mQcJdeCatBjzvpUWWOXA6rZlqjG27u9QtZLli', 'Checking', '0814763528', 'Male', '20/31990', 'Locker', 'Nurse', 'Widowed', '$', 'user/upload/Sav-Sam.jpeg', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(149, 'Hagedorn Deborah', 'Deborah', 'Hagedorn', 'Stout', 'dhagedorn198@gmail.com', 'df8459499f3f8e55fb9d88c1aaf04eb6', '$2y$10$u.6PAaI2h2SMDpp.bbM1uOjmsvUfbx81TRrrKzPnU5zIdPZtO784m', 'Checking', '8032310742', 'Female', '02/21/54', '1600 PLATT SPRINGS RD APT 79 WEST COLUMBIA SC 29169', 'RETIRED NURSE', 'Single', '$', 'user/upload/Hagedorn-Deborah.jpg', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(150, 'Imperial Josephine', 'Josephine', 'Imperial', 'Imperial', 'joimperiaI09@yahoo.com', 'Yes', '$2y$10$rS/ljVx9OfliygayMjF8/Op6XCSOd52uAFCgdbT.ekj4qTFbTdUqe', 'Savings', '3236024067', 'Male', '31/12/1955', '214B N Orange Ave Monterey Park, Ca 91755\r\n', 'Health worker', 'Widowed', '$', 'user/upload/Imperial-Josephine.jpg', '', '073692746', '', '', '0000-00-00 00:00:00', 0, '1', '2021-03-13 15:46:16', 0, NULL, 0),
(151, 'Ebrada Sonora ', 'Sonora ', 'Ebrada', 'N/A', 'sonoraebrada09@gmail.com', 'Yes', '$2y$10$Q3EW46ZlhEPy1bC3lKKoyujAh5wCY0ZRpeD.ZwHnDjs48yTT712Mm', 'Savings', '09434898211', 'Female', '10/20/63', '439 Morning Star St Tondo Manila\r\nPhilippines 1012', 'Barangay Treasurer ', 'Married', '$', 'user/upload/Ebrada-Sonora-.jpg', '', '738336594', '', '', '0000-00-00 00:00:00', 20000, '2', '2021-03-15 22:50:40', 0, NULL, 0),
(152, 'Cauyan Rebecca', 'Rebecca', 'Cauyan', 'Recca of', 'leahlyca.capuyan@yahoo.com', 'f50e579d350d225430d75e0ff81e9909', '$2y$10$qr.rRRlm8OdW/j7OV1v2xOoD6UEc9.6.sw7HAAk/TGjcNuI/Hyy0a', 'Savings', '09971429085', 'Female', 'January20 1973', 'Logon daanbantayan cebu', 'Bussness', 'Married', '$', 'user/upload/Cauyan-Rebecca.jpg', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(153, 'Capuyan Rebecca', 'Rebecca', 'Capuyan', 'Recca', 'capuyanlyca@gmail.com', 'Yes', '$2y$10$Mg1tpukva3DMpISQKWTRZ.j5bszb2tdEihCTdRp8Vo4fZffGiZIvq', 'Savings', '09569940732', 'Female', 'January20 1973', 'Logon daanbantayan cebu', 'Bussness', 'Married', '$', 'user/upload/Capuyan-Rebecca.jpg', '', '003737272', '', '', '0000-00-00 00:00:00', 0, '0', '2021-03-15 11:16:16', 0, NULL, 0),
(154, 'Dixon Cleo', 'Cleo', 'Dixon', 'Dixon', 'CIeodixon2.0@gmail.com', 'Yes', '$2y$10$/3E4APg4dHqOD4l1qTBq/eYTD8Wh6iMxvQdZeJIwtowiVbWGObgGC', 'Savings', '4143645087', 'Female', '06/12/1973', '6443 north 73rd street Milwaukee, Wisconsin  Nurse', 'Nurse', 'Single', '$', 'user/upload/Dixon-Cleo.jpg', '', '263951946', '', '', '0000-00-00 00:00:00', 305000, '1', '2021-03-18 02:58:38', 0, NULL, 0),
(155, 'Gruver Eric ', 'Eric ', 'Gruver', 'Gruver', 'Gruvermetalss@gmail.com', 'Yes', '$2y$10$2uqYgn7nsDKqhHcAm2yZfOs34ZNPKUQuMHeSrV2yr4D7vAOAJsa/K', 'Savings', '17244568523', 'Male', '19/06/1967', '76 church rd Greenville Pa. 16125', 'Laborer', 'Single', '$', 'user/upload/Gruver-Eric-.jpeg', '', '054335568', '', '', '0000-00-00 00:00:00', 0, '0', '2021-04-01 10:14:12', 0, NULL, 0),
(156, 'McClain Rowlanda', 'Rowlanda', 'McClain', 'Ronnie', 'seaqueen1957@yahoo.com', 'Yes', '$2y$10$z67e8RCc4gWruCmc51R6ee47kiD2sNC7T/8id5rm/DmjD4T7tvelG', 'Checking', '8034508388', 'Female', '08 23 1957', '668 collins ave barnwell sc 29812', 'retied', 'Single', '$', 'user/upload/McClain-Rowlanda.jpg', '', '085890235', '', '', '0000-00-00 00:00:00', 10742815, '1', '2021-03-29 21:05:17', 0, NULL, 0),
(157, 'Montalvo Briggs', 'Briggs', 'Montalvo', 'Eduardo', 'briggsmontalvo01@gmail.com', '0fd969ea6f1913e4c839ae0616d2a9d7', '$2y$10$EkGyR.R3V5XFzlpfZVkSW.mRqP/WZui6ymBakHyMAwcIHrN8NEZtm', 'Savings', '7724927302', 'Male', '17/07/1981', 'Rout 2 box 142 Ahoskie NC 27910 ', 'Military', 'Single', '$', 'user/upload/Montalvo-Briggs.jpg', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(158, 'Williams Jesse', 'Jesse', 'Williams', 'Sammy', 'Katepatrik69@gmail.com', 'Yes', '$2y$10$a6bSG1EbGN8tU7rMZWuOXOnnx3G3wq7Zy8sAIssych.MpiftfdmU2', 'Savings', '7014847685', 'Male', '27/11/1973', 'Las Vegas ', 'I. T and Investment manager ', 'Single', '$', 'user/upload/Williams-Jesse.jpg', '', '086544668', '', '', '0000-00-00 00:00:00', 1257687, '0', '2021-03-19 21:12:21', 0, NULL, 0),
(159, 'Suba Shirley', 'Shirley', 'Suba', 'Ann', 'shirleysuba1@gmail.com', 'dacccf3205894d965961f710eb572bee', '$2y$10$5hhTzJiuQs4Z5hGuQ8aVx.YFvMrN7fhVbKF4qCU221Dt3fo7d6uW.', 'Savings', '17249689749', 'Female', '21/03/1952', '120 Robbie Way\r\nPortersville, PA   16051', 'Business', 'Divorced', '$', 'user/upload/Suba-Shirley.jpg', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(160, 'Melissa  Ana', 'Ana', 'Melissa ', 'Evangelista', 'anamelissa28manuel@gmail.com', 'Yes', '$2y$10$4QWuu/BGGRfGp7RoONRRYub4FbELcLtn7xwm60Tluidsx8Wcl56Tm', 'Savings', '2049010976', 'Female', '26/05/1977', '210 -3227 victoria avenue, Brandon Manitoba R7B0N6', 'Program Facilitator', 'Single', '$', 'user/upload/Melissa-Ana.jpg', '', '162838231', '', '', '0000-00-00 00:00:00', 150000, '1', '2021-04-07 14:25:43', 0, NULL, 0),
(161, 'Pedraza Lazaro Yainel', 'Lazaro Yainel', 'Pedraza', 'Verdura', 'lazaroyainel@gmail.com', '973a3796e9142a6bbf57a86de82fba72', '$2y$10$fJTy9ibJ7qLzbdqj4cPuvej34VhV63.39tmkQGd9I9hsqKyOn6bkK', 'Checking', '5353017171', 'Male', '23/12/1988', '3ra # 357 Entre G y H Vigia', 'Tecnichian', 'Single', '$', 'user/upload/Pedraza-Lazaro-Yainel.jpg', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(162, 'Steinbach Lori', 'Lori', 'Steinbach', 'Lori Donnan', 'onedonnan@aol.com', 'd1564c716d030ef57de5fd9590f1ce95', '$2y$10$9OdNdMM.Ty0kU/2jXtJzveazDn8AuLmBqQZ7k9sZUCJ0jUs5uOnae', 'Savings', '12483767597', 'Female', '10/10/1969', '1581 Emmons Boulevard\r\nLincoln Park, Michigan 48146\r\nUSA\r\n', 'Human Resources Manager', 'Single', '$', 'user/upload/Steinbach-Lori.jpg', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(163, 'Stroup Angela', 'Angela', 'Stroup', 'Edmondson ', 'ngl_dq@yahoo.com', 'Yes', '$2y$10$xTjG90tBlEuJFN2KgVUrFeuAy8tbOALYWtCAsp7oPA.YLWEc0iGqm', 'Checking', '7135159923', 'Female', '02141969', '5100 FM 1960 Rd W\r\nApt 1702', 'Medical Technician ', 'Married', '$', 'user/upload/Stroup-Angela.jpg', '', '083723908', '', '', '0000-00-00 00:00:00', 1007500, '1', '2021-06-14 19:26:40', 0, NULL, 0),
(164, 'Jones Lucinda', 'Lucinda', 'Jones', 'Cindy', 'lujones06@hotmail.com', 'Yes', '$2y$10$s20/rc8hkYJlvBOPHpws1.6zwIFG4RDwzysUcOdP6SbKpfb89wkY6', 'Checking', '9188593058', 'Female', '22/04/1959', '345 Ranchwood Manor Dr.\r\nOklahoma City, OK  73139  USA', 'Bookkeeper', 'Single', '$', 'user/upload/Jones-Lucinda.jpg', '', '0085912741', '', '', '0000-00-00 00:00:00', 11202815, '3', '2021-11-05 21:29:44', 0, NULL, 0),
(165, 'smith Daniels', 'Daniels', 'smith', 'smith', 'danielssmith54@gmail.com', '76fae229c11633e691c5c1533e38bab2', '$2y$10$C0NsgM0eimwiTuFWdln3TeCNQ/jltqUHQuJn3K8lldAOy8gaR6CbK', 'Checking', '18165359444', 'Male', '12/05/1954', 'Naze\r\nApartment', 'Trading', 'Widowed', '$', 'user/upload/smith-Daniels.jpg', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(166, 'Lynn Clark Debra', 'Debra', 'Lynn Clark', 'Doughty', 'debsden53@gmail.com', 'defe9517f6e88504240a8d567af71c88', '$2y$10$ajw1QMCBi9zkvuOCQXH/FO3VMx0Rxs0ktSBqd5sxM9kfKHKmrG9hu', 'Savings', '12259380460', 'Female', '08/17/1953', '17091 Swamp road East unit 901\r\nPrairieville LA 70769', 'Retiredb', 'Single', '$', 'user/upload/Lynn-Clark-Debra.jpeg', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(167, 'G Mary ', 'Mary ', 'G', 'Pittman ', 'mgpittman54@gmail.com', 'e8ba0c1fbc2ebb717cc2679a5f5a7437', '$2y$10$XelRSrxCCfwwF1AecTAPcOUCn1FMyepIWA1gAoOy2TnV64EOIMrL2', 'Current', '5806892273', 'Female', '11/27/1954', '12500 SW 27th St. \r\nYukon, Oklahoma ', 'Investor', 'Single', '$', 'user/upload/G-Mary-.jpg', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(168, 'Gibson Joyce', 'Joyce', 'Gibson', 'Purvis', 'gibsonjoyce2015@gmail.com', 'a377bde1ea21df6c592e48e550b772bd', '$2y$10$xyfOqnbxOpci9DsbHyMMkO4zxIPw0w4hM9AXzlPRBTtKtVngvgQBq', 'Checking', '6605376212', 'Female', '07/01/1956', '480 High Street   Prairie Home , MO 65068', 'Retired', 'Widowed', '$', 'user/upload/Gibson-Joyce.jpg', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(169, 'Tourdot Lea', 'Leila', 'Tourdot', 'Lea', 'ltourdot8648@gmail.com', 'Yes', '$2y$10$CnOIy6eiKcLDw8lvf1Re4.i0tBjWfksY0oNWOxBP3qByW/PhcKzAS', 'Savings', '6089638648', 'Female', '10/30/1953', '200 Quiet Wood\r\nBaraboo WI 53913 USA', 'Investor/business', 'Single', '$', 'user/upload/Tourdot-Lea.jpg', '', '0074317531', '', '', '0000-00-00 00:00:00', 10514315, '4', '2021-09-20 00:19:34', 0, NULL, 0),
(170, 'Devereaux  Karen', 'Karen', 'Devereaux ', 'Devereaux ', 'kdev5@yahoo.com', '944524ae19f5b6441fb49e12ab4c256b', '$2y$10$5JXAuTTgzpBLNYY.G3teT.N7VImnvzYC9.Z4gth7BvwkpJblzK/jW', 'Savings', '7743622059', 'Female', '01281965', '154 Apricot St.\r\nWorcester, Ma. 01603', 'Teacher', 'Single', 'â‚º', 'user/upload/Devereaux-Karen.jpg', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(171, 'Maria Ana', 'Ana', 'Maria', 'Lopez', 'villegas55@hotmail.com', 'Yes', '$2y$10$7QubO6xvLtwZQMLXl11ipOYiwKJlcIrWEFueZvdPNwsYCgDGoFqem', 'Checking', '4324251589', 'Female', '11/ 06/1955', '5112 Hercules Ave', 'Business owner', 'Married', '$', 'user/upload/Maria-Ana.jpg', '', '0855852180', '', '', '0000-00-00 00:00:00', 0, '0', '2021-08-06 19:40:05', 0, NULL, 0),
(172, 'Sukhdeo Rohan', 'Rohan', 'Sukhdeo', 'Ro', 'shopez183@gmail.com', 'Yes', '$2y$10$dtNoceRZvYcLswk01y2Pyu8EvBx2vejbn96orNv9LIvvIcSLKJYYW', 'Checking', '9175973233', 'Male', '02/11/1998', '101-35 Lefferts Blvd\r\nRichmond Hill, NY 11419', 'Analyst', 'Single', '$', 'user/upload/Sukhdeo-Rohan.jpg', '', '0036282846', '', '', '0000-00-00 00:00:00', 126664, '1', '2021-11-09 07:08:21', 0, NULL, 0),
(173, 'Tourdot Leila', 'Leila', 'Tourdot', 'Tourdot', '0074317531ltourdot8648@gmail.com', '906dfe41837decd50af3cc6d0232a5f9', '$2y$10$dqX6mIe.WqZ3BA5nmFpLgO2/xwHgKjzTTK5HtQ3RTMmroEd0Rmo9u', 'Savings', '16089638648', 'Female', '10/30/1953', '200 Quiet wood\r\nBaraboo WI 53913', 'Investor/business', 'Single', '$', 'user/upload/Tourdot-Leila.jpg', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(174, 'Amushi Anih', 'Anih', 'Amushi', 'Anih', 'Scottwalters368@gmail.com', 'Yes', '$2y$10$XddBuC4p7AlHJAcqfksVGutdcauBH.WZ4LyzLh/Dx0UjI6u8cU2D.', 'Checking', '14045665625', 'Male', '1993', 'Charlotte nc', 'Software developer ', 'Single', '$', 'user/upload/Amushi-Anih.jpg', '', '0085327806', '', '', '0000-00-00 00:00:00', 150000, '0', '2021-09-17 13:36:58', 0, NULL, 0),
(175, 'Chase Casandra Lynn ', 'Casandra Lynn ', 'Chase', 'SUSAN', 'caslchaseassoc@gmail.com', '5edcee2252b6c954d7faacd431a0c235', '$2y$10$EGnGIyi3FcB4YZElkc.ee.Ln/kIfPZAsDq.w9JSPXAoVwbf7AhRKG', 'Checking', '15066362062', 'Female', '16081952', '127 Meenans Cove Road, Quispamsis NewBrunswick.Canada E2G1Z1', 'Semi retired Lufe Insurance Broker', 'Widowed', '$', 'user/upload/Chase-Casandra-Lynn-.jpg', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(176, 'Snyder Robert', 'Robert', 'Snyder', 'None', 'jetpilot20@gmail.com', 'Yes', '$2y$10$NbsEJ/ltgy9uAV8EBMSNxu8MAKy.54sEa5T9rfUWjeQEmg1863Qu2', 'Savings', '6239103900', 'Male', '10/15/1942', '14658 N 176th Ln', 'Retired ', 'Married', '$', 'user/upload/Snyder-Robert.jpg', '', '0063881669', '', '', '0000-00-00 00:00:00', 20502, '1', '2021-11-10 14:07:06', 0, NULL, 0),
(177, 'Ridgeway  Vve Lucy', 'Vve Lucy', 'Ridgeway ', 'Lucy', 'creation1232@gmail.com', 'b28bbe16e339be974f882daf250420f4', '$2y$10$WTPru2TKZm5uOeNORhhHzOBJ2c2NKbcWy/m0bD/5nMIQeKjJKLAci', 'Checking', '18037418331', 'Female', '10/08/1953', '176 jasmine place dr \r\nColumbia sc ', 'Nurse', 'Divorced', '$', 'user/upload/Ridgeway-Vve-Lucy.jpg', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(178, 'Lord Dan', 'Dan', 'Lord', 'Gee', 'raymondton1961@gmail.com', 'Yes', '$2y$10$nsoCnk6KxxakeRnCPD3pWuyAFBFhEZvwZceqi4YmNq/XxQVg9yC/e', 'Savings', '7474737838', 'Male', '20/09/1873', 'Hehheueb usa', 'Entertaining ', 'Single', '$', 'user/upload/Lord-Dan.jpeg', '', '0111111111', '', '', '0000-00-00 00:00:00', 5001554, '1', '2021-10-19 13:42:49', 0, NULL, 0),
(179, 'McQuinn Robin', 'Robin', 'McQuinn', 'Renee', 'rtb1004us@yahoo.com', '384463738c84471b5c663a4c9ca1464b', '$2y$10$DXR1aEsL27GNZNJNLHpJQumVFdPc8u2bS1kpjZ7yyeQldui5ot9ai', 'Checking', '3174189597', 'Female', '09/06/1959', '1745 Lambert Street', 'Researcher', 'Widowed', '$', 'user/upload/McQuinn-Robin.jpg', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(180, 'watson Lauren', 'Lauren', 'watson', 'jhas', 'watson@eldersinsurance.org', '1555e7d5c4eea252afaa510adaedde14', '$2y$10$bsOLRYMyNDAxpRmRfifGFeaaf2OQN5z37ZkW3iRMUr780AQaAM1cS', 'Savings', '613355351812', 'Female', '03/15/1966', '18 San Simeon Drive\r\nQld', 'Retierd', 'Single', '$', 'user/upload/watson-Lauren.jpeg', '', '', '', '', '0000-00-00 00:00:00', 0, '0', '0000-00-00 00:00:00', 0, NULL, 0),
(181, 'Aaaaaaa Aaaaa', 'Aaaaa', 'Aaaaaaa', 'Aaaaaa', 'kylerob1960@gmail.com', 'Yes', '$2y$10$sn6l0SUZ.uE5AdIzwCYnuO8F05PhMuRdWqV.O0vHjKuIz.x/iIDYC', 'Savings', '093983838', 'Male', '20/05/2012', 'Rudjjkwm', 'Teacher ', 'Single', '$', 'user/upload/Aaaaaaa-Aaaaa.jpg', '', '1234567890', '', '', '0000-00-00 00:00:00', 3837733, '0', '2021-11-11 14:44:53', 0, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `credit` int DEFAULT NULL,
  `amount` float(10,2) DEFAULT NULL,
  `currency` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`id`, `user_id`, `name`, `credit`, `amount`, `currency`, `date`) VALUES
(2, 44, 'Kizito Adike', 0, 23.00, '', '2019-02-05 07:33:54'),
(3, 44, 'Kizito Adike', 0, 23.00, '$', '2019-02-05 07:33:54'),
(4, 44, 'Kizito Adike', 0, 23.00, '$', '2019-02-05 07:33:54'),
(5, 55, 'james willis', 0, 70000.00, '$', '2019-02-07 13:51:07'),
(6, 44, 'Kizito Adike', 0, 3000.00, '$', '2019-02-07 20:37:32'),
(7, 44, 'Kizito Adike', 0, 5900.00, '$', '2019-02-08 07:31:32'),
(8, 55, 'james willis', 0, 80000.00, '$', '2019-02-12 11:19:54'),
(9, 58, 'Hash Nanyamat', 0, 11691464.00, '$', '2019-03-18 07:52:02'),
(10, 53, 'RITT YANN', 0, 11691464.00, '$', '2019-03-18 08:00:30'),
(11, 55, 'james willis', 0, 11691464.00, '$', '2019-03-18 08:04:22'),
(12, 61, 'Smith William', 0, 17604376.00, '$', '2019-08-08 12:45:50'),
(13, 60, 'Lincoln Evans', 0, 458321.53, '$', '2019-08-09 09:15:41'),
(14, 62, 'Eric Jones', 0, 10567.45, '$', '2019-08-12 10:29:14'),
(15, 63, 'barin bob', 0, 10202030.00, '$', '2019-08-12 21:34:05'),
(16, 65, ' Lincoln Evans', 0, 532014.00, '$', '2019-08-17 10:59:48'),
(17, 67, 'William Smith', 0, 12594748.00, '$', '2019-08-20 13:29:53'),
(18, 74, 'to nice', 0, 100000000.00, '$', '2019-08-23 21:04:55'),
(19, 74, 'to nice', 0, 567899.00, '$', '2019-08-23 21:07:38'),
(20, 85, 'Barlos Kelvin', 0, 6976000.00, '$', '2019-08-27 19:05:55'),
(21, 85, 'Barlos Kelvin', 0, 6976000.00, '$', '2019-08-27 19:05:56'),
(22, 85, 'Barlos Kelvin', 0, 6976000.00, '$', '2019-08-27 19:05:57'),
(23, 85, 'Barlos Kelvin', 0, 6976000.00, '$', '2019-08-27 19:05:57'),
(24, 86, 'Doe John', 0, 6976000.00, '$', '2019-08-27 19:17:32'),
(25, 84, 'MADDOX WANDA', 0, 42413.00, '$', '2019-08-28 12:56:51'),
(26, 84, 'MADDOX WANDA', 0, 6886665.00, '$', '2019-08-28 12:58:19'),
(27, 87, 'ahmed sarfaraz', 0, 250000.00, '$', '2019-09-01 16:24:39'),
(28, 87, 'ahmed sarfaraz', 0, 230000.00, '$', '2019-09-01 16:35:59'),
(29, 86, 'Doe John', 0, 51.00, '$', '2019-11-06 18:16:04'),
(30, 89, 'Dailey Esther', 0, 51.00, '$', '2019-11-07 08:32:23'),
(31, 89, 'Dailey Esther', 0, 51448.80, '$', '2019-11-07 08:34:47'),
(32, 89, 'Dailey Esther', 0, 11691315.00, '$', '2019-11-07 11:09:57'),
(33, 94, 'gee dan', 0, 100000000.00, '$', '2019-11-07 11:32:15'),
(34, 95, 'will Dan', 0, 11200000.00, '$', '2019-11-07 12:31:09'),
(35, 96, 'quivbe john', 0, 11789000.00, '$', '2019-11-07 15:50:49'),
(36, 97, 'CohnsJohnson Linda', 0, 11691315.00, '$', '2019-11-21 21:08:14'),
(37, 51, 'UNION Admin', 0, 1000000.00, '$', '2019-11-28 06:04:23'),
(38, 100, 'Wallace  Christian', 0, 5348767.00, 'â‚º', '2020-05-23 13:56:44'),
(39, 103, 'man hqappy', 0, 5348767.00, '$', '2020-05-23 20:16:38'),
(40, 103, 'man hqappy', 0, 5348767.00, '$', '2020-05-23 20:23:07'),
(41, 103, 'man hqappy', 0, 5348767.00, '$', '2020-05-23 20:39:24'),
(42, 103, 'man hqappy', 0, 5348767.00, '$', '2020-05-23 20:56:17'),
(43, 103, 'man hqappy', 0, 500.00, '$', '2020-05-23 21:00:50'),
(44, 103, 'man hqappy', 0, 5000.00, '$', '2020-05-25 10:07:31'),
(45, 103, 'man hqappy', 0, 5348767.00, '$', '2020-05-25 11:10:00'),
(46, 104, 'Niglio John', 0, 534876.00, '$', '2020-05-27 12:58:02'),
(47, 99, 'None Della', 0, 11691315.00, '$', '2020-05-27 16:53:22'),
(50, 105, 'Robert Frost', 0, 8348767.00, '$', '2020-05-29 10:17:28'),
(51, 106, 'Patrik  Sammy ', 0, 829543.00, '$', '2020-06-04 20:41:24'),
(52, 108, 'Fenton Raymond ', 0, 584421.00, '$', '2020-06-24 21:20:59'),
(53, 109, 'Lincoln Daniel ', 0, 1126953.00, '$', '2020-07-02 09:45:00'),
(54, 111, 'Alexe  Calvert ', 0, 8510420.00, '$', '2020-07-22 15:19:07'),
(55, 113, 'Robert  Howard ', 0, 2430099.00, '$', '2020-08-10 13:16:40'),
(56, 114, ' Lincoln Evans', 0, 2340000.00, '$', '2020-08-18 21:55:32'),
(57, 115, ' Martinez Frank', 0, 2430099.00, '$', '2020-08-25 12:08:18'),
(58, 116, 'Fenton Raymond', 0, 2430099.00, '$', '2020-08-27 01:24:51'),
(59, 117, 'Antonio David ', 0, 2430099.00, '$', '2020-09-05 16:15:13'),
(60, 117, 'Antonio David ', 0, 2430099.00, '$', '2020-09-05 16:16:00'),
(61, 118, 'Anderson  Chris', 0, 855000.00, '$', '2020-09-14 02:59:21'),
(62, 118, 'Anderson  Chris', 0, 2000000.00, '$', '2020-09-14 11:10:13'),
(63, 120, 'Bryd  Walsh ', 0, 16500.00, '$', '2020-09-15 20:52:20'),
(64, 119, 'Leblanc Edith', 0, 11742814.00, '$', '2020-09-18 14:49:01'),
(65, 124, 'Sebastian Guy', 0, 2510420.00, '$', '2020-10-05 10:56:15'),
(66, 123, 'Piccirillo Janis', 0, 175000.00, '$', '2020-10-09 15:03:50'),
(67, 125, 'Bryan Luke ', 0, 954638.00, '$', '2020-10-17 10:25:48'),
(68, 126, 'Halani Jahad', 0, 5455685.00, '$', '2020-10-18 23:35:14'),
(69, 129, 'Robert  Evans', 0, 51499.00, '$', '2020-10-26 00:53:26'),
(70, 129, 'Robert  Evans', 0, 11691315.00, '$', '2020-10-26 00:55:00'),
(71, 127, 'Cole Carol', 0, 51499.00, '$', '2020-10-26 09:22:42'),
(72, 127, 'Cole Carol', 0, 11691315.00, '$', '2020-10-26 09:33:43'),
(73, 130, 'William Jesse', 0, 600000.00, '$', '2020-11-10 14:45:14'),
(74, 123, 'Piccirillo Janis', 0, 30000.00, '$', '2020-11-11 08:51:45'),
(75, 100, 'Wallace  Christian', 0, 1600000.00, 'â‚º', '2020-11-12 07:04:30'),
(76, 131, 'BROOKS MICHEAL ', 0, 15510420.00, '$', '2020-11-13 13:55:07'),
(77, 132, 'RICHARD REBECCA', 0, 51499.00, '$', '2020-11-23 11:47:00'),
(78, 132, 'RICHARD REBECCA', 0, 11691315.00, '$', '2020-11-23 12:08:57'),
(79, 135, 'Robello Danny', 0, 50638.00, '$', '2019-01-10 08:44:25'),
(80, 135, 'Robello Danny', 0, 50484.00, '$', '2019-09-10 14:04:50'),
(81, 127, 'Cole Carol', 0, 1500000.00, '$', '2020-12-16 06:28:42'),
(82, 133, 'Rivera Nelson', 0, 2430099.00, '$', '2020-12-16 19:19:54'),
(83, 136, 'Burgos Norma', 0, 11691000.00, '$', '2020-12-24 21:10:38'),
(84, 136, 'Burgos Norma', 0, 51900.00, '$', '2020-12-24 21:11:20'),
(85, 127, 'Cole Carol', 0, 1500000.00, '$', '2021-01-11 13:59:06'),
(86, 140, 'Ð“Ð°Ð»Ð¸Ð½Ð° Ð¯Ð²ÐºÐ¸Ð½Ð°', 0, 846438.00, '$', '2021-02-18 16:38:49'),
(87, 142, 'Bryd Marianne', 0, 984684.00, '$', '2020-09-18 15:40:25'),
(88, 143, 'Fenton Johnny ', 0, 864890.00, '$', '2020-09-23 22:56:18'),
(89, 150, 'Imperial Josephine', 0, 315000.00, '$', '2021-03-10 11:25:36'),
(90, 151, 'Ebrada Sonora ', 0, 720000.00, '$', '2021-03-12 09:34:38'),
(91, 145, 'Kaitlyn Hartson', 0, 895000.00, '$', '2021-03-12 09:46:04'),
(92, 154, 'Dixon Cleo', 0, 315000.00, '$', '2021-03-18 00:44:32'),
(93, 158, 'Williams Jesse', 0, 1257687.00, '$', '2021-03-19 21:12:21'),
(94, 146, 'Mackey Claire', 0, 51499.00, '$', '2021-03-22 12:56:43'),
(95, 146, 'Mackey Claire', 0, 1169131.00, '$', '2021-03-22 12:57:26'),
(96, 146, 'Mackey Claire', 0, 10522180.00, '$', '2021-03-22 15:58:26'),
(97, 156, 'McClain Rowlanda', 0, 51500.00, '$', '2021-03-29 17:38:59'),
(98, 156, 'McClain Rowlanda', 0, 11691315.00, '$', '2021-03-29 17:39:26'),
(99, 160, 'Melissa  Ana', 0, 175000.00, '$', '2021-03-31 13:06:51'),
(100, 163, 'Stroup Angela', 0, 1350000.00, '$', '2021-06-09 07:42:36'),
(101, 164, 'Jones Lucinda', 0, 21500.00, '$', '2021-06-14 13:30:23'),
(102, 164, 'Jones Lucinda', 0, 11691315.00, '$', '2021-06-14 20:49:40'),
(103, 169, 'Tourdot Lea', 0, 38000.00, '$', '2021-08-09 14:31:16'),
(104, 169, 'Tourdot Lea', 0, 11691315.00, '$', '2021-08-09 14:32:45'),
(105, 172, 'Sukhdeo Rohan', 0, 128967.00, '$', '2021-08-26 17:40:22'),
(106, 174, 'Amushi Anih', 0, 150000.00, '$', '2021-09-17 13:36:58'),
(107, 176, 'Snyder Robert', 0, 32595.00, '$', '2021-10-14 06:47:27'),
(108, 176, 'Snyder Robert', 0, 32595.00, '$', '2021-10-14 06:47:28'),
(109, 176, 'Snyder Robert', 0, 2608.00, '$', '2021-10-14 06:48:33'),
(110, 176, 'Snyder Robert', 0, 4800.00, '$', '2021-10-14 06:49:34'),
(111, 176, 'Snyder Robert', 0, 4800.00, '$', '2021-10-14 06:49:35'),
(112, 178, 'Lord Dan', 0, 5005764.00, '$', '2021-10-19 13:39:42'),
(113, 176, 'Snyder Robert', 0, 30000.00, '$', '2021-10-25 23:30:28'),
(114, 176, 'Snyder Robert', 0, 10500.00, '$', '2021-11-09 12:47:31'),
(115, 181, 'Aaaaaaa Aaaaa', 0, 3838733.00, '$', '2021-11-11 10:13:29');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `number_transfer` int DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `address` longtext,
  `bank_digit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `email`, `number_transfer`, `phone_number`, `address`, `bank_digit`) VALUES
(1, 'eeee', 1, NULL, 'eeeee', '10');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int NOT NULL,
  `bank` varchar(200) NOT NULL,
  `routing` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `account_no` varchar(200) NOT NULL,
  `acctype` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `user_trans` varchar(200) NOT NULL,
  `user_trans_id` int NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `date_proccessing` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `description` longtext,
  `currency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `bank`, `routing`, `name`, `account_no`, `acctype`, `amount`, `user_trans`, `user_trans_id`, `status`, `date_proccessing`, `description`, `currency`) VALUES
(1, 'fidelity', '236799', 'Adike kizito', '123457891233', 'saving', '100', 'Kizito Adike', 44, 1, '2019-02-05 21:01:12', NULL, ''),
(2, 'fidelity', '236799', 'Adike kizito', '123457891233', 'saving', '100', 'Kizito Adike', 44, 0, '2019-02-05 19:51:08', NULL, ''),
(3, 'fidelity', '236799', 'Adike kizito', '123457891233', 'saving', '1000', 'Kizito Adike', 44, 0, '2019-02-05 19:51:25', NULL, ''),
(4, 'fidelity', '236799', 'Adike kizito', '123457891233', 'saving', '1000', 'Kizito Adike', 44, 0, '2019-02-05 19:51:36', NULL, ''),
(5, 'Benefeciary', 'Benefeciary', 'Benefeciary', '0888888', 'Benefeciary', '23', 'Kizito Adike', 44, 0, '2019-02-05 20:24:38', 'dewewe', 'â‚º'),
(6, 'Benefeciary', 'Benefeciary', 'Benefeciary', '0888888', 'Benefeciary', '23', 'Kizito Adike', 44, 0, '2019-02-05 20:25:18', 'dewewe', 'â‚º'),
(7, 'Benefeciary', 'Benefeciary', 'Micheal', '0888888', 'Benefeciary', '23', 'Kizito Adike', 44, 1, '2019-02-07 14:03:50', 'ssssssssss', 'â‚º'),
(8, 'Benefeciary', 'Benefeciary', 'Micheal', '0888888', 'Benefeciary', '23', 'Kizito Adike', 44, 0, '2019-02-05 20:29:57', 'ssssssssss', 'â‚º'),
(9, 'Benefeciary', 'Benefeciary', 'Micheal', '0888888', 'Benefeciary', '22', 'Kizito Adike', 44, 0, '2019-02-05 21:30:02', 'ssssssssssss', 'â‚¬'),
(10, 'Benefeciary', 'Benefeciary', 'Micheal', '0888888', 'Benefeciary', '23', 'Kizito Adike', 44, 0, '2019-02-06 10:34:57', 'dddddddddddddd', '$'),
(11, 'fidelity', '236799', 'Adike kizito', '0888888', 'saving', '23', 'Kizito Adike', 44, 0, '2019-02-06 10:42:04', 'Transfer', '$'),
(12, 'Bank of America', '667474932WS', 'mrsusis', '325367475883', 'savings', '6000', 'Law Young', 50, 1, '2019-02-06 12:34:27', 'Transfer', '$'),
(13, 'Bank of America', '667474932WS', 'mrsusis', '325367475883', 'savings', '6000', 'Law Young', 50, 1, '2019-02-06 11:52:31', 'Transfer', '$'),
(14, 'fidelity', '236799', 'Adike kizito', '0888888', 'saving', '23', 'Kizito Adike', 44, 0, '2019-02-06 12:01:54', 'Transfer', '$'),
(15, 'fidelity', '236799', 'Adike kizito', '0888888', 'saving', '23', 'Kizito Adike', 44, 0, '2019-02-06 12:03:49', 'Transfer', '$'),
(16, 'fidelity', '236799', 'Adike Kizito', '123457891233', 'saving', '10', 'Kizito Adike', 44, 0, '2019-02-06 12:24:03', 'Transfer', '$'),
(17, 'Benefeciary', 'Benefeciary', 'mruins', '325367475883', 'Benefeciary', '5000', 'Law Young', 50, 0, '2019-02-06 13:06:37', 'SALE', '$'),
(18, 'Benefeciary', 'Benefeciary', 'mruins', '325367475883', 'Benefeciary', '5000', 'Law Young', 50, 0, '2019-02-07 08:56:43', 'BANK', 'â‚º'),
(19, 'Benefeciary', 'Benefeciary', 'asap', '738383837490', 'Benefeciary', '5000', 'james willis', 55, 1, '2019-02-07 13:57:04', 'Shares ', '$'),
(20, 'Barclays Bank', 'BAC2451', 'Vincent Ballas', '43767415368', 'Current Account', '300000', 'Hash Nanyamat', 58, 1, '2019-04-01 14:15:57', 'Transfer', '$'),
(21, 'United Bank of Africa', 'UNAFNGLA', 'Benjamin Victory Chidebube', '2109474803', 'Savings', '3500000', 'Smith William', 61, 0, '2019-08-08 13:42:18', 'Transfer', '$'),
(22, 'Sun Trust', 'Sun60001', 'Goerge wines', '100628162829', 'Checking', '4000', 'Eric Jones', 62, 0, '2019-08-12 10:38:10', 'Transfer', '$'),
(23, 'Bank of america', 'gdhdj226727', 'sanii', '1235689202', 'checking', '25000', 'barin bob', 63, 1, '2019-08-13 13:17:53', 'Transfer', '$'),
(24, 'Barclays', '4884849', 'Baseline Car Rentals', '447492874922', 'Checking Account', '10.000', 'Lincoln Evans', 60, 0, '2019-08-13 13:05:22', 'Transfer', 'â‚º'),
(25, 'Barclays', 'Cars4884849', 'Baseline Cars Rental', '447492874922', 'Checking', '10000', 'Lincoln Evans', 60, 0, '2019-08-13 13:45:54', 'Transfer', '$'),
(26, 'Bank Of England', '25540745', 'Birchfields Guest House', '001303984033', 'Checking', '10000', 'Lincoln Evans', 60, 0, '2019-08-17 12:19:40', 'Transfer', '$'),
(27, 'Bank Of England', '25540745', 'Birchfields Guest House', '001303984033', 'Checking', '3000', 'Lincoln Evans', 60, 0, '2019-08-18 12:41:29', 'Transfer', '$'),
(28, 'boa', '7373773', 'dhfjf', '83834747383', 'checkeing', '50000', 'to nice', 74, 0, '2019-08-23 22:33:07', 'Transfer', '$'),
(29, 'boa', 'ufyfufyf76', 'jvgigig', '2345678909876', 'checking', '25678', 'to nice', 74, 0, '2019-08-23 22:38:35', 'Transfer', '$'),
(30, 'access swiss bank', 'acpas233', 'veronica p', '098765432100', 'Checking', '500000', 'Doe John', 86, 0, '2019-08-27 19:29:47', 'Transfer', '$'),
(31, 'muric bank', 'acpas233', 'dfj  yy j i  y', '00452556724', 'checking', '50000', 'Doe John', 86, 0, '2019-08-28 12:28:09', 'Transfer', '$'),
(32, 'Barclays Bank PLC', 'BUKBGB22', 'kelvin Barlos', '00121436732', 'checking', '1000000', 'MADDOX WANDA', 84, 0, '2019-08-28 16:42:01', 'Transfer', '$'),
(33, 'CITIZENS BANK', '241070417', 'Wanda Maddox', '0470549803', 'checking', '55000', 'MADDOX WANDA', 84, 0, '2019-08-28 17:30:11', 'Transfer', '$'),
(34, 'Union Trust Reserve Inc', 'UNAFNGLA', 'Ahmed Sarfaraz', '00217536634', 'Savings', '230000', 'William Smith', 67, 0, '2019-09-01 16:12:58', 'Transfer', '$'),
(35, 'Benefeciary', 'Benefeciary', 'esterrj jdiei', '12345678990', 'Benefeciary', '3000000', 'gee dan', 94, 1, '2019-11-07 11:38:59', 'cash', '$'),
(36, 'bank of america', '4546754', 'dfgdjdk', '123456789789', 'saving', '300000', 'gee dan', 94, 1, '2019-11-07 11:39:55', 'Transfer', '$'),
(37, 'Benefeciary', 'Benefeciary', 'esterrj jdiei', '12345678990', 'Benefeciary', '3000000', 'gee dan', 94, 0, '2019-11-07 11:51:19', 'cash', '$'),
(38, 'Benefeciary', 'Benefeciary', 'esterrj jdiei', '12345678990', 'Benefeciary', '3000000', 'gee dan', 94, 0, '2019-11-07 11:55:45', 'cash', '$'),
(39, 'Benefeciary', 'Benefeciary', 'winn', '67876545678', 'Benefeciary', '3000000', 'will Dan', 95, 0, '2019-11-07 12:35:52', 'cash', '$'),
(40, 'Benefeciary', 'Benefeciary', 'winn', '67876545678', 'Benefeciary', '3000000', 'will Dan', 95, 0, '2019-11-07 12:38:37', 'cash', '$'),
(41, 'Benefeciary', 'Benefeciary', 'ruth yam', '12345678908', 'Benefeciary', '3000000', 'quivbe john', 96, 0, '2019-11-07 15:54:37', 'cash', '$'),
(42, 'Benefeciary', 'Benefeciary', 'ruth yam', '12345678908', 'Benefeciary', '700000', 'quivbe john', 96, 0, '2019-11-07 15:56:00', 'cash', '$'),
(43, 'Barclays Bank UK PLC.', 'BARCGB22564', 'George Fenton', '01045472095', 'Checking', '1000000', 'Dailey Esther', 89, 0, '2019-11-07 17:37:07', 'Transfer', 'â‚º'),
(44, 'Bank of America', '026009593', 'Esther G Dailey', '000472211862', 'Checking', '1000000', 'Dailey Esther', 89, 0, '2019-11-07 17:52:56', 'Transfer', 'â‚º'),
(45, 'Barclays Bank', 'BARCGB22', 'Barclays Capital ', '29729002641', 'Checking', '250000', 'CohnsJohnson Linda', 97, 0, '2019-11-21 22:43:39', 'Transfer', 'Â£'),
(46, 'Bank of America', 'BOFAUS3N', 'Checking', '305006028309', 'Checking', '520000.00', 'CohnsJohnson Linda', 97, 0, '2019-11-23 16:02:07', 'Transfer', '$'),
(47, 'fewfwef', 'jjlkjlj', 'School Fees Clearance', '123434', 'wee', '12', 'UNION Admin', 51, 2, '2021-10-19 13:59:22', 'Transfer', 'â‚º'),
(48, 'BOA', 'GHSJWI88299', 'MR FENTON', '09876543279', 'SAVINGS', '50000', 'man hqappy', 103, 1, '2020-05-23 20:58:01', 'Transfer', '$'),
(49, 'Benefeciary', 'Benefeciary', 'mR TIM', '19654323889', 'Benefeciary', '5000', 'man hqappy', 103, 1, '2020-05-23 20:58:25', 'CASH', '$'),
(50, 'Benefeciary', 'Benefeciary', 'mR TIM', '19654323889', 'Benefeciary', '5000', 'man hqappy', 103, 0, '2020-05-23 21:02:37', 'CASH', '$'),
(51, 'BOA', '456778856', 'MR FENTON', '098765432101', 'SAVINGS', '5000000', 'man hqappy', 103, 0, '2020-05-23 21:04:56', 'Transfer', '$'),
(52, 'Barclay bank UK', 'BARRCGB22XXX', 'Mr.Codwell Ronney', '2626301145', 'Savings', '34.000', 'None Della', 99, 1, '2020-05-28 21:02:16', 'Transfer', '$'),
(53, 'Wells Fargo Bank', 'WFBIUS65', 'Zayas George', '8715292150', 'Checking', '10.000', 'None Della', 99, 0, '2020-05-29 17:19:31', 'Transfer', '$'),
(54, 'Bank of china Beijing branch', 'BKCHCNBJ110', 'mr chen lee wung', '11078365637', 'checking account', '217000', 'Robert Frost', 105, 1, '2020-05-31 21:10:51', 'Transfer', '$'),
(55, 'Bank of china Beijing branch', 'BKCHCNBJ110', 'mr chen lee wung', '11078365637', 'checking account', '6000', 'Robert Frost', 105, 1, '2020-06-01 12:10:20', 'Transfer', '$'),
(56, 'Chase Bank', 'CH276435', 'Kiewit corporation ', '2245378289', 'Cooperat ', '145000', 'Patrik  Sammy ', 106, 1, '2020-07-13 07:50:40', 'Transfer', 'â‚º'),
(57, 'Chase Bank ', 'CH276435', 'Kiewit corporation ', '2245378289', 'Cooperat ', '100000', 'Patrik  Sammy ', 106, 0, '2020-06-11 12:30:59', 'Transfer', 'â‚º'),
(58, 'Benefeciary', 'Benefeciary', 'ONE SONG ENTERPRISE', '43807588340', 'Benefeciary', '26,000', 'Fenton Raymond ', 108, 1, '2020-06-27 06:04:18', 'CONTRACT COMMISSION 2019/2020', 'â‚º'),
(59, 'Benefeciary', 'Benefeciary', 'ONE SONG ENTERPRISE', '43807588340', 'Benefeciary', '26000', 'Fenton Raymond ', 108, 0, '2020-06-29 09:15:47', 'Contract commission 2019/2020', '$'),
(60, 'Barclay  bank uk', 'BARCGB22XXX', 'MR.  Codwell Ronney', '2626301145', 'Savings', '17500', 'Lincoln Daniel ', 109, 1, '2020-07-02 14:49:28', 'Transfer', '$'),
(61, 'Royal Bank of Scotland', 'BARCGB22XXX', 'John Terry', '00164106693', 'Current account', '20000', 'Lincoln Daniel ', 109, 1, '2020-07-13 07:50:20', 'Transfer', '$'),
(62, 'Bank of China', 'BKCHCNBJ110', 'Chen Lee Wung', '11078365637', 'Girokonto', '50000', 'Robert  Howard ', 113, 1, '2020-08-10 20:59:10', 'Transfer', '$'),
(63, 'TD Bank', 'NRTHUS33XXX', 'Codwell Ronney', '2626301145', 'Saving account', '18000', 'Robert  Howard ', 113, 1, '2020-08-14 10:56:50', 'Transfer', '$'),
(64, 'Benefeciary', 'Benefeciary', 'One song Entrerprise', '623026967', 'Benefeciary', '158000', 'Fenton Raymond', 116, 1, '2020-08-27 02:23:15', '', 'â‚º'),
(65, 'Benefeciary', 'Benefeciary', 'One song Entrerprise', '623026967', 'Benefeciary', '25000', 'Fenton Raymond', 116, 1, '2020-08-28 02:27:35', '', 'â‚º'),
(66, 'Bank of china', 'BKCHCNBJ110', 'Mr chen Lee wung', '11078365637', 'Checking', '75000', 'Antonio David ', 117, 1, '2020-09-05 16:47:35', 'Transfer', '$'),
(67, 'Beijing branch', 'BKCHCNBJ110', 'Mr chen Lee wung', '11078365637', 'Checking', '40000', 'Antonio David ', 117, 1, '2020-09-09 08:49:00', 'Transfer', '$'),
(68, 'Post Bank', 'PBNKDEFF', 'SZTEVAN SZTOJKOV', '22100100100377043133', 'Girokonto', '40000', 'Robert  Howard ', 113, 1, '2020-09-14 11:01:29', 'Transfer', 'â‚¬'),
(69, 'barclay bank uk', 'BARCGB22XXX', 'Mr Coldwell ronney', '262630145', 'Savings', '45000', 'Antonio David ', 117, 1, '2020-09-15 15:12:09', 'Transfer', '$'),
(70, 'credit agricole', 'AGRIEGCXXXX', 'Mr Paul louis', '2626301145', 'Savings', '100000', 'Antonio David ', 117, 1, '2020-09-20 20:10:36', 'Transfer', '$'),
(71, 'Barclay bank uk', 'BARCGB22XXX', 'MR Codwell Ronney', '2626301145', 'savings account', '45000', 'Leblanc Edith', 119, 1, '2020-09-20 20:37:01', 'Transfer', '$'),
(72, 'Chase Bank', 'Ch46363', 'Mr Codwell Ronney ', '609135789', 'Savings ', '300000', 'Sebastian Guy', 124, 1, '2020-10-07 10:24:22', 'Transfer', '$'),
(74, 'Valley Bank', 'mbnyus33', 'Janis Piccirillo', '000706006089', 'Checking', '30000', 'Piccirillo Janis', 123, 1, '2020-11-11 08:49:49', 'Transfer', '$'),
(75, 'td bank', 'NRTHUS33', 'FLOUR CORPORATION', '474617185', 'CHECKING', '111950', 'Halani Jahad', 126, 1, '2020-10-27 00:25:52', 'Transfer', 'â‚º'),
(76, 'TD BANK', 'NRTHUS33', 'FLUOR  CORPORATION', '474617185', 'CHECKING', '111950', 'Halani Jahad', 126, 0, '2020-10-27 00:30:41', 'Transfer', '$'),
(77, 'Benefeciary', 'Benefeciary', 'Marhaba Industries ', '009876540', 'Benefeciary', '150000', 'BROOKS MICHEAL ', 131, 1, '2019-12-13 14:11:05', 'equipment ', 'â‚º'),
(78, 'Barclay  Bank', 'B6905435', 'Mr raymond fenton', '66424790', 'Current ', '2900643', 'BROOKS MICHEAL ', 131, 1, '2020-01-13 14:23:02', 'Transfer', '$'),
(79, 'Benefeciary', 'Benefeciary', 'FLUOR CORPORATION', '010164285', 'Benefeciary', '3250000', 'BROOKS MICHEAL ', 131, 1, '2020-04-13 13:22:51', 'Funds', '$'),
(80, 'Bank of Spain', 's9023930', 'Moko LTD', '664431790', 'Current ', '855000', 'BROOKS MICHEAL ', 131, 1, '2020-06-13 13:25:47', 'Transfer', '$'),
(81, 'Credit Agricole', '37829cA', 'Micheal Atkins', '908443298', 'Current ', '100000', 'Wallace  Christian', 100, 0, '2020-11-17 17:23:42', 'Transfer', 'â‚º'),
(82, 'Chase Bank', 'B6905435', 'Thomas Martinez', '66424790', 'Current', '150000', 'Wallace  Christian', 100, 0, '2020-11-20 17:28:00', 'Transfer', 'â‚º'),
(83, 'Valley Bank', 'Mbnyus33', 'Janis  Piccirillo', '000706006089', 'Checking', '40000', 'Piccirillo Janis', 123, 1, '2021-07-20 07:14:13', 'Transfer', '$'),
(84, 'BARCLAY BANK, UK', 'BARCGB22XXX', 'MR. CODWELL RONNEY', '2626301145', 'SAVINGS', '100000', 'RICHARD REBECCA', 132, 0, '2020-11-23 21:29:57', 'Transfer', '$'),
(85, 'BANK OF AMERICA', 'BOFAUS3N', 'REBECCA Richard', '334050496124', 'CHECKING', '52000', 'RICHARD REBECCA', 132, 0, '2020-11-23 21:40:04', 'Transfer', '$'),
(86, 'Benefeciary', 'Benefeciary', 'Mr Fedy Peckz ', '279491037', 'Benefeciary', '20000', 'Robello Danny', 135, 1, '2019-03-10 14:03:50', 'Casj', '$'),
(87, 'Barclays Bank', 'B638282', 'Mr Evans Lincoln ', '528363937', 'Checking ', '27800', 'Robello Danny', 135, 1, '2019-09-14 14:03:39', 'Transfer', '$'),
(89, 'Barclays Bank', 'BUKBGB23', 'Mr. Raymond Rokopoulos Fenton', '245085876', 'Checking ', '2000000', 'Cole Carol', 127, 0, '2021-01-11 14:15:29', 'Transfer', '$'),
(90, 'Benefeciary', 'Benefeciary', 'Mr. Florence Johnson', '656547893', 'Benefeciary', '25000', 'Cole Carol', 127, 1, '2021-02-13 03:45:20', 'Loan', '$'),
(91, 'Benefeciary', 'Benefeciary', 'One Geeen Group (OGG)', '368744816', 'Benefeciary', '36000', 'Fenton Johnny ', 143, 1, '2019-02-26 11:15:11', '', '$'),
(92, 'Benefeciary', 'Benefeciary', 'One Geeen Group (OGG)', '368744816', 'Benefeciary', '70000', 'Fenton Johnny ', 143, 1, '2019-05-18 10:15:31', 'Equipments', '$'),
(93, 'Benefeciary', 'Benefeciary', 'One Geeen Group (OGG)', '368744816', 'Benefeciary', '60000', 'Fenton Johnny ', 143, 1, '2020-04-26 10:15:22', 'Containers ', '$'),
(94, 'Benefeciary', 'Benefeciary', 'Sterlet group (SG)', '368377450', 'Benefeciary', '$17350', 'Bryd Marianne', 142, 1, '2019-02-26 11:14:57', '', '$'),
(95, 'Benefeciary', 'Benefeciary', 'Sterlet group (SG)', '368377450', 'Benefeciary', '19725', 'Bryd Marianne', 142, 1, '2019-03-10 10:14:42', '', 'â‚¬'),
(96, 'Benefeciary', 'Benefeciary', 'Sterlet group (SG)', '368377450', 'Benefeciary', '$23,100', 'Bryd Marianne', 142, 1, '2020-04-06 10:14:34', '', '$'),
(97, 'Benefeciary', 'Benefeciary', 'One song Enterprise', '623026967', 'Benefeciary', '$15000', 'Bryd Marianne', 142, 1, '2021-03-09 07:43:49', 'One Song Enterprise', '$'),
(98, 'Benefeciary', 'Benefeciary', 'One song Enterprise', '623026967', 'Benefeciary', '$3000', 'Bryd Marianne', 142, 1, '2021-03-10 19:18:52', 'One Song Enterprise', '$'),
(99, 'BANK OF AMERICA', 'BOFAUS3N', 'ALEXIS NDULOV', '381060121020', 'Savings', '385000', 'Ebrada Sonora ', 151, 1, '2021-03-15 10:35:28', 'Transfer', '$'),
(100, 'USbank', '91755', 'Josephine A. Imperial ', '157520041250', 'Checking ', '315000', 'Imperial Josephine', 150, 0, '2021-03-13 15:46:16', 'Transfer', '$'),
(101, 'Benefeciary', 'Benefeciary', 'One Song Enterprise', '223636374', 'Benefeciary', '56,089', 'Kaitlyn Hartson', 145, 0, '2021-03-15 12:17:27', 'Collections female wears', '$'),
(102, 'Industrial and Commercial Bank of China (ICBC), Guandong Provincial Bank', 'ICBKCNBJ', 'Zhi LiBing', '621226360204447917', 'Savings', '315000', 'Ebrada Sonora ', 151, 0, '2021-03-15 22:50:40', 'Transfer', '$'),
(103, 'Stride bank ', '53223', 'Cleo dixon', '248162388172', 'Checking ', '10000', 'Dixon Cleo', 154, 0, '2021-03-18 02:58:38', 'Transfer', '$'),
(104, 'barclay bank uk', 'BARCGB22XXX', 'Mr Codwell Ronney', '2626301145', 'savings account', '250000', 'Mackey Claire', 146, 1, '2021-03-23 10:39:28', 'Transfer', '$'),
(105, 'credit agricole', 'AGRIEGCXXXX', 'mr paul louis', '2626301145', 'savings', '60000', 'Mackey Claire', 146, 0, '2021-03-23 23:35:00', 'Transfer', '$'),
(106, 'Halyk Bank', 'Ð¤ÑƒÑ€Ð¼Ð°Ð½Ð¾Ð²Ð° 70, Ð£Ñ€Ð´Ð¶Ð°Ñ€ 070000', 'Galina Yvkina', '4444820312837658', 'gavkina026@gmail.com', '50', 'Ð“Ð°Ð»Ð¸Ð½Ð° Ð¯Ð²ÐºÐ¸Ð½Ð°', 140, 0, '2021-03-26 04:06:57', 'Transfer', 'â‚¬'),
(107, 'Ð¥Ð°Ð»Ñ‹Ðº Ð±Ð°Ð½Ðº Ð¤ÑƒÑ€Ð¼Ð°Ð½Ð¾Ð²Ð° 70, Ð£Ñ€Ð´Ð¶Ð°Ñ€ 070000', '578', 'Ð¯Ð²ÐºÐ¸Ð½Ð° Ð“Ð°Ð»Ð¸Ð½Ð° ', '007584746', 'Ð¢ÐµÐºÑƒÑ‰Ð¸Ð¹', '50', 'Ð“Ð°Ð»Ð¸Ð½Ð° Ð¯Ð²ÐºÐ¸Ð½Ð°', 140, 0, '2021-03-29 17:50:33', 'Transfer', 'â‚¬'),
(108, 'Barclays Bank UK', 'BARCGB22xxx', 'Mr. Codwell Ronney', '2626301145', 'savings', '1000000.00', 'McClain Rowlanda', 156, 0, '2021-03-29 21:05:17', 'Transfer', '$'),
(109, 'AO ÐšÐ°ÑÐ¿Ð¸Ð¹ Ð±Ð°Ð½Ðº', 'KZ48722C000038177426', 'Ð“Ð°Ð»Ð¸Ð½Ð° Ð¯Ð²ÐºÐ¸Ð½Ð°', '007584746', 'Ð¢ÐµÐºÑƒÑ‰Ð¸Ð¹', '30', 'Ð“Ð°Ð»Ð¸Ð½Ð° Ð¯Ð²ÐºÐ¸Ð½Ð°', 140, 0, '2021-03-31 03:28:37', 'Transfer', 'â‚¬'),
(110, 'Chase Bank', '121000654', 'Terry Jones', '525132192378', 'Savings', '25000', 'Melissa  Ana', 160, 0, '2021-04-07 14:25:43', 'Transfer', '$'),
(111, ' ÐÐž\"ÐÐ°Ñ€Ð¾Ð´Ð½Ñ‹Ð¹ Ð‘Ð°Ð½Ðº ÐšÐ°Ð·Ð°Ñ…ÑÑ‚Ð°Ð½\"', 'KZ556014113100116754', 'Ð¯Ð²ÐºÐ¸Ð½Ð° Ð“Ð°Ð»Ð¸Ð½Ð°', '007584746', 'Ð¢ÐµÐºÑƒÑ‰Ð¸Ð¹', '1', 'Ð“Ð°Ð»Ð¸Ð½Ð° Ð¯Ð²ÐºÐ¸Ð½Ð°', 140, 0, '2021-04-14 04:58:18', 'Transfer', 'â‚¬'),
(112, 'Abu Dhabi commercial bank', 'AD29066480', 'Abner Al shehhi', '7643782145667216', 'CURRENT', '200.000', 'Wallace  Christian', 100, 1, '2021-05-01 14:41:39', 'Transfer', '$'),
(113, 'Wells Fargo', 'wf7483', 'George Ahmed', '638384668', 'savings', '50.000', 'Wallace  Christian', 100, 1, '2021-05-01 14:41:30', 'Transfer', '$'),
(114, 'Abu Dhabi commercial bank', 'AD29066480', 'Abner Al shehhi', '7643782145667216', 'CURRENT', '200000', 'Wallace  Christian', 100, 1, '2021-05-01 14:41:22', 'Transfer', '$'),
(115, 'Wells Fargo', 'wf7483', 'Mr George Ahmed', '638384668', 'savings', '50000', 'Wallace  Christian', 100, 1, '2021-05-01 14:41:11', 'Transfer', '$'),
(116, 'Wells Fargo', 'WFBIUS6SXXX', 'Thomas Martin', '664247900', 'Checking', '225000', 'Stroup Angela', 163, 1, '2021-06-12 10:49:11', 'Transfer', '$'),
(117, 'Bank of America ', 'DOUS3N', 'Antonio Davids', '003478234', 'Checking', '117500', 'Stroup Angela', 163, 1, '2021-06-12 10:49:18', 'Transfer', '$'),
(118, 'Barclay Bank UK', 'BARCGB22XX', 'Mr. Codwell Ronney', '2626301145', 'Savings Account', '500000', 'Jones Lucinda', 164, 1, '2021-08-18 01:46:46', 'Transfer', '$'),
(119, 'Barclay Bank UK', 'BARCGB22XXX', 'Mr Codwell Ronney', '2626301145', 'Savings Account', '1200000', 'Tourdot Lea', 169, 1, '2021-08-18 19:22:07', 'Transfer', '$'),
(120, 'barclay bank uk', 'BARCGB22XXX', 'MR codwell Ronney', '2626301145', 'savings account', '10000.00', 'Jones Lucinda', 164, 0, '2021-08-21 07:47:57', 'Transfer', 'Â£'),
(121, 'Barclay Bank UK', 'BARCGB22XXX', 'Mr Codwell Ronney', '2626301145', 'Savings Account', '5000', 'Tourdot Lea', 169, 0, '2021-08-23 09:52:15', 'Transfer', '$'),
(122, 'City National Bank', 'CINAUS6L', 'Lucinda Jones', '100942153', 'Checking Account', '8000', 'Jones Lucinda', 164, 2, '2021-10-30 12:24:30', 'Transfer', '$'),
(123, 'Wells Fargo Bank', '121000248', 'Leila Tourdot', '7449941918', 'Savings Account', '5000', 'Tourdot Lea', 169, 0, '2021-08-24 12:02:45', 'Transfer', '$'),
(124, 'Santander Bank, N.A.', 'SVRNUS33', 'Rohan Sukhdeo', '5431070800', 'Checking ', '126664', 'Sukhdeo Rohan', 172, 2, '2021-11-09 07:06:50', 'Transfer', '$'),
(125, 'Wells Fargo Bank', '121000248', 'Leila Tourdot', '2626301145', 'Savings Account', '5000', 'Tourdot Lea', 169, 0, '2021-09-20 00:19:34', 'Transfer', '$'),
(126, 'JPMorgan Chase Bank, N.A. Bank 270 Park Ave. New York, NY 10017', 'CHASUS33', 'Robert L Snyder', '835529975', 'Checking', '500.00', 'Snyder Robert', 176, 2, '2021-10-19 13:51:57', 'Transfer', '$'),
(127, 'Benefeciary', 'Benefeciary', 'Mr Ehise', '2728484048', 'Benefeciary', '4210', 'Lord Dan', 178, 2, '2021-10-19 14:02:57', 'Cash', '$'),
(128, 'JPMorgan Chase Bank, N.A. Bank 270 Park Ave. New York, NY 10017', 'CHASUS33', 'Robert L Snyder', '835529975', 'Checking', '25000', 'Snyder Robert', 176, 2, '2021-11-09 07:03:53', 'Transfer', '$'),
(129, 'JPMorgan Chase Bank, N.A. Bank 270 Park Ave. New York, NY 10017', 'CHASUS33', 'Robert L Snyder', '835529975', 'Checking', '60000', 'Snyder Robert', 176, 0, '2021-11-10 14:07:06', 'Transfer', '$');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw_requests`
--

CREATE TABLE `withdraw_requests` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `wallet_address` text NOT NULL,
  `amount` varchar(50) NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `withdraw_requests`
--

INSERT INTO `withdraw_requests` (`id`, `user_id`, `name`, `wallet_address`, `amount`, `status`, `date`) VALUES
(1, 181, 'Aaaaaaa Aaaaa', 'woisekjfcwdkfjvewsdnfvkwem', '1000', 1, '2021-11-11 14:44:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`login_id`);

--
-- Indexes for table `atm`
--
ALTER TABLE `atm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beneficiary1`
--
ALTER TABLE `beneficiary1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cheque_book`
--
ALTER TABLE `cheque_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw_requests`
--
ALTER TABLE `withdraw_requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `atm`
--
ALTER TABLE `atm`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `beneficiary1`
--
ALTER TABLE `beneficiary1`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `cheque_book`
--
ALTER TABLE `cheque_book`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `withdraw_requests`
--
ALTER TABLE `withdraw_requests`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
