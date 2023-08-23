-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2023 at 08:43 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_digitalent`
--

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id` int(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nohp` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `ipk` varchar(30) NOT NULL,
  `beasiswa` varchar(20) NOT NULL,
  `berkas` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id`, `nama`, `email`, `nohp`, `semester`, `ipk`, `beasiswa`, `berkas`) VALUES
(12, 'sayuti melik', 'melik@gmail.com', '2938420420', '6', '3', 'akademik', 0x64366638662d30345f66722e69612e30322d74756761732d7072616b74696b2d64656d6f6e7374726173695f76332d6573726f6e2e706466),
(13, 'hugo', 'hugo@gmail.com', '0982349984', '6', '3.8', 'akademik', 0x313835302d41727469636c6520546578742d343339342d312d31302d32303138313131362e706466),
(21, 'ismaul', 'hufo@gmail.com', '1231313', '6', '3.4', 'akademik', 0x64366638662d30345f66722e69612e30322d74756761732d7072616b74696b2d64656d6f6e7374726173695f76332d6573726f6e2e706466),
(22, 'ismaul', 'hufo@gmail.com', '1231313', '6', '3.4', 'akademik', 0x64366638662d30345f66722e69612e30322d74756761732d7072616b74696b2d64656d6f6e7374726173695f76332d6573726f6e2e706466),
(23, 'ismaul', 'hufo@gmail.com', '1231313', '6', '3.4', '', 0x64366638662d30345f66722e69612e30322d74756761732d7072616b74696b2d64656d6f6e7374726173695f76332d6573726f6e2e706466),
(24, 'asdad', 'huda@gmail.com', '23324324', '2', '3.4', '', 0x53637265656e73686f745f323032332d30372d30362d31322d31312d33302d37352e6a7067),
(25, 'eqwewqe', 'qweq@gmail.com', '1234141', '5', '3.4', '', 0x74696b65742d312e706466),
(26, 'eqwewqe', 'qweq@gmail.com', '1234141', '', '3.4', '', 0x74696b65742d312e706466),
(27, 'eqwewqe', 'qweq@gmail.com', '1234141', '5', '3.4', '', 0x74696b65742d312e706466),
(28, 'eqwewqe', 'qweq@gmail.com', '1234141', '5', '3.4', 'non akademik', 0x74696b65742d312e706466),
(29, 'eqwewqe', 'qweq@gmail.com', '1234141', '5', '2.0', 'akademik', 0x74696b65742d312e706466),
(30, 'eqwewqe', 'qweq@gmail.com', '1234141', '5', '2.0', 'akademik', 0x74696b65742d312e706466),
(31, 'eqwewqe', 'qweq@gmail.com', '1234141', '5', '2.0', 'akademik', 0x74696b65742d312e706466);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
