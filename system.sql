-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2018 at 08:03 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `phone_num` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Date`, `user_id`, `first_name`, `last_name`, `email`, `phone_num`, `password`, `position`) VALUES
('2018-03-26 04:01:36', 28, 'amith', '', 'amith@gmail.com', 0, '$2y$10$xEdWg1P4X4CZ9F/wClgKBuZc.ep5laF37y5WYfDC5hhTljlIAYEOO', 'cash_ser'),
('2018-03-01 01:09:05', 29, 'amith', '', 'ADSDF@ASDV', 0, '$2y$10$BRCfda3.bO6O434/9voW7udeaaapW6BjMrcyjQjgtJD1LiUJlKEdC', 'admin'),
('2018-03-02 01:09:05', 30, 'amith', '', 'amith@as', 0, '$2y$10$edr.hEzPFJos2vumF73bSec3uQ1K5vGnijxo/Zav4K.OyiXJgs9Yi', 'admin'),
('2018-03-26 01:09:05', 31, 'kaba', '', 'as@asd', 0, '$2y$10$QIpF/yf0ZMbdz8LZ2xs7JeY64zgJVHsHU8mid66773fWm6c2ucrDC', 'admin'),
('2018-03-03 01:09:05', 32, 'amith', '', 'amith2@gmail.com', 0, '$2y$10$PlOjTgIL3BQ3QXEsL8403u8vSzHo.B0XVr3H7dvoNq/2MY0vplr7a', 'admin'),
('2018-03-04 01:09:05', 33, 'amitha', '', 'a@c', 0, '$2y$10$O4edH.EyZJbnQUgPBPVi6ucUeAwJxM0d5qbmz/40d/BkD2Ae5drmy', 'admin'),
('2018-03-05 01:09:05', 34, 'amith', '', 'amith@sd', 0, '$2y$10$f9XIqo0sLvTUSvu/iOSf3eNRfud5z9gVcfZ6lkjB2RUtFHrogYjAi', 'admin'),
('2018-03-26 01:09:05', 35, 'aaa', '', 'asas@as', 0, '$2y$10$NGiUPVKjvYyBoNKJwMp20.i74wRs7sNXwnyybsOAX3D9gm0J8pQ/y', 'admin'),
('2018-03-26 01:09:05', 36, 'amith', '', 'aw@as', 0, '$2y$10$IIOZro4CVd0ElJtxPcXqcu5cO.HUV7IHvOINb9gpd3AcEorYsnSO2', 'cash_ser'),
('2018-03-26 01:09:05', 37, 'amith', '', 'asdfgb@asdf.vo', 0, '$2y$10$IvkeTx0gdt.fPRYMKdQMaeJMqdPFE28NiisERnvrEChygpJPULdQi', 'admin'),
('2018-03-26 01:09:05', 38, 'jaaa', '', 'asdfg@sdfvb', 0, '$2y$10$BDvgqKaDkGCAcyQDlFOjzuV0rcnD2HDwkj73ofh1M5l1OMdGkHlK6', 'cus_ser'),
('2018-03-26 01:09:05', 42, 'amith', '', 'amith@asd', 0, '$2y$10$uNZkiMO8a3TMQFoZBgH2DeJCEF1m9nE3dJO4EXNnbde.Wk5UWCF0C', 'cus_ser'),
('2018-03-26 01:09:05', 43, 'amithmaduranga', '', 'madu@q', 0, '$2y$10$BQn.sDVnaKmiHqplzZT.teTYkfwrD7TDteTuEsSMgOTDPZlXXgu1a', 'admin'),
('2018-03-26 01:09:05', 44, 'asdfghg', '', 'asdfgc@awsdfgf', 0, '$2y$10$tljYNI2pQUklGoDjowjF5Ok2pZZd.E5NO.pVARtpFDqz235EwVJY2', 'admin'),
('2018-03-26 01:09:05', 64, 'sfjk', '', 'slkf@sdlkf', 0, '$2y$10$X7RuXADLEinONemfVCnMVOf8Gf1Yj8x5aFEzMiqv7OXq5QYjevf6.', 'cus_ser'),
('2018-03-26 01:09:05', 78, 'noij', '', 'adsdjk@sdjv', 0, '$2y$10$KiEoisp3PvYMDvmajRS66eJ7ZKOkMO1nrdVbcho6TZuMnyncdB9rK', 'admin'),
('2018-03-26 01:09:05', 79, 'gk', '', 'asW@fg', 0, '$2y$10$DrdO2ercib86Fa7cHOvpTOG4JLi9/xveMpsuxfJ4M7Zt6h/ul4FRC', 'cus_ser'),
('2018-04-27 16:51:15', 84, 'aluth', 'parana', 'asdfc@asd', 0, '$2y$10$YwYXvss5PPAa0sAWAOr5suxcNo3Ioymrl5e.m489AQy/tlY.7ZwN.', 'user'),
('2018-03-26 01:09:05', 86, 'edgf', '', 'gdfbc@dfg', 0, '$2y$10$ncjTe5.Zr1zBzuUD5kUhhePWYH0FQh8aH95GxFORqdApMOV43D2ri', 'admin'),
('2018-03-26 01:09:05', 87, '', '', '', 0, '$2y$10$RnMrKjQbPH8IHRZmcP1ttOrkgn3GDgVEFW8ub6CUsLmEJrcFADFlC', ''),
('2018-03-26 01:09:05', 88, 'gdgf', '', 'sdf@wsdf', 0, '$2y$10$7w/qq1eNDv9NAC0.39N0LuOg5RFjNUpVf3CnCQ4LsZq8/kw0LbvvG', 'cus_ser'),
('2018-03-26 01:09:05', 89, 'yhkj', '', 'rtfgyhkjh@wedf', 0, '$2y$10$VRJsz/ADuHzi/9yQ.6Ml5Opy83XNmhUdub7Pvmje59rhm2Yg.ZhmK', 'admin'),
('2018-03-26 01:09:05', 91, 'r', '', 'sdf@sd', 0, '$2y$10$qdGmNUvcbsnGRBf5EMbTjeJIyKwOqhXRvzRAfq0eoaHx8QlFY8jSq', 'cus_ser'),
('2018-03-26 01:09:05', 92, 'weerasinghe', '', 'wasa@sd.com', 0, '$2y$10$Di5Fyk7lnogQkfRonO2ehOhRZxCJUNff1cDgUPOPfk/OkX7V.Gm2O', 'cus_ser'),
('2018-03-26 01:09:05', 93, 'ert', '', 'fr@wd.v', 0, '$2y$10$7dbtBaO5urBtFOFMClhOrOMLHiWNuE015lmWVaoJho9yMQbHRpLQi', 'cus_ser'),
('2018-03-26 01:09:05', 94, 'amith', 'weerasinghe', 'asgdfh@sdcv', 0, '$2y$10$DA86ScEwjtkK64RjdB6Xt.zoXKcaASBN3X6qhHxJ7vuSjHAysxSg.', ''),
('2018-03-26 01:09:05', 95, 'admin', 'am', 'amith.weerasinghe@gmail.com', 0, '$2y$10$Nma.yNqFL7VAlTNiBFLFk.yWO7R9aXcQrNkeO0XRzyZXd/bN0uEb2', 'admin'),
('2018-04-01 17:41:54', 96, 'haes', 'sddf', 'asdfg@sdf.com', 0, '$2y$10$BZbgNUKpDgRBCxf6/AGFfO98gF1Rmi8pm76l6Hs9/HuSuDvRk1rnC', 'cus_ser');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
