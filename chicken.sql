-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2025 at 10:13 AM
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
-- Database: `chicken`
--

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` int(11) NOT NULL,
  `queries` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `product_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `image`, `description`, `product_type`) VALUES
(1, 'Desi-chicken', 600.00, 'product-04.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'chicken'),
(2, 'Fighter assel chicken', 700.00, 'product-02.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'chicken'),
(3, 'kadaknath-Chicken', 700.00, 'product-01.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'chicken'),
(4, 'Desi chicken eggs', 15.00, 'product-03.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'chicken'),
(5, 'Rose Dessert', 24.99, '2.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'plants'),
(6, 'Bio organic fertilizer', 20.00, 'product-05.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'fertilizer');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `purchase_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `purchasing_date` date DEFAULT NULL,
  `payment_method` enum('COD','Online') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`purchase_id`, `user_id`, `product_id`, `total_amount`, `quantity`, `purchasing_date`, `payment_method`) VALUES
(1, 2, 6, 20.00, 1, '2025-01-27', 'Online');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `review_text` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `review_text`, `author`, `created_at`) VALUES
(1, 'Desi Chicken Farm owned by Shweta and Amol is very clean n hygienic. Nice Taste. I have had its taste in my lunch.The owners r taking every precaution to cater to the needs of the Consumers. Quality is being maintained.  All the very Best to the owners in their new Venture/Business.', 'Chhagan Satdeve', '2024-04-24 13:46:34'),
(2, 'Visiting Desi Chicken Farm was a treat, coupled with the vibrant and healthy-looking chickens. The emphasis on organic feed and spacious living conditions for the birds is evident in the taste and texture of the meat. The owners knowledge and passion for traditional chicken farming add a personal touch to the overall visit. A recommended spot for those valuing genuine desi chicken. Low price from other desi/gawrani chicken seller, So go on visit once you will not regret.', 'Pawan', '2024-04-24 13:48:23'),
(3, 'The original Desi chicken farm in Nagpur at affordable price.\r\nJust try for it .\r\nOwner is fully friendly nature person and very helpful.', '\r\nSUREN S', '2024-04-24 14:39:56'),
(4, 'very good chiken and testy', 'Sandeshrangari1974@gmail.com Ngps1691', '2024-04-24 14:42:43'),
(5, 'Best chicken quality', '\r\n\r\n\r\nAshutosh Menpale', '2024-04-24 14:44:23'),
(6, 'Original Desi and very tasty', '\r\n\r\n\r\nSushil Telang', '2024-04-24 14:44:54'),
(7, 'Pure bride , good Quantity and in cheaper rates', '\r\n\r\n\r\n\r\nMithilesh Khaparde', '2024-04-24 14:45:33'),
(8, 'Best chicken farm in nagpur', '\r\n\r\n\r\nroshan ukey', '2024-04-24 14:46:06'),
(9, 'Best chicken and great taste.', '\r\n\r\n\r\nAnil Kumar Nagdive', '2024-04-25 07:19:28'),
(10, 'Original Desi chicken  Farm with reasonable rates.. Visited this farm which is Hyginically maintained.', '\r\n\r\n\r\nVishal Somkuwar', '2024-04-25 07:19:58'),
(11, 'Excellent work Mr Amol Shende', '\r\n\r\n\r\n\r\n\r\n\r\nalankar ramteke', '2024-04-25 07:20:29'),
(12, 'Bahut badia orignal desi chicken', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nSudhakar Sudame', '2024-04-25 07:21:08'),
(13, 'Best place for original Desi chicken at affordable price.\r\nFood: 5\r\nService: 5\r\nAtmosphere: 5', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nshweta shende', '2024-04-25 07:21:52'),
(14, 'Original and best desi chicken farm in the Nagpur.', '\r\n\r\n\r\nDewani & co Dewani', '2024-04-25 07:22:21'),
(15, 'Very good arrangements are there and authentic desi chicken', '\r\n\r\n\r\n\r\n\r\n\r\npradeep ambade', '2024-04-25 07:22:44'),
(16, 'Best desi chicken\r\nOriginal gavrani chicken at affordable prices', '\r\n\r\n\r\nShankar Mahurkar', '2024-04-25 07:23:14'),
(17, 'Value for money\r\nOriginal and authentic Desi chicken\r\nJust try for it.', '\r\n\r\n\r\n\r\n\r\n\r\nPYARELAL MOUSHIK', '2024-04-25 07:23:45'),
(18, 'Best chicken shop I have visited yet. Hygienic, clean and very reasonable .', 'Amit Patil', '2024-04-25 07:24:16'),
(19, 'Best desi chicken  farm at affordable price and the owner behaviour is good .', '\r\n\r\n\r\nsameer kadwe', '2024-04-25 07:24:42'),
(20, 'Original Desi chicken Farm with reasonable rates.. Visited this farm which is Hyginically maintained', '\r\n\r\n\r\nShikha Bagde', '2024-04-25 07:25:16'),
(21, 'A value for money Chicken Farm Who want  to buy Desi Chicken or Gavrani Chicken They Can Contact To Mr.Anmol Shende Who are the owner of this farm Very Polite and Knowledgeable Person of Desi chicken Just go for it', '\r\n\r\n\r\nRitesh Shamkuwar', '2024-04-25 07:25:52'),
(22, 'Maine Amol Shendeji se 6 kg murge laya tha 15 din pahale jab usko taste kiya to BAHOT maza aaya.Gavrani   gav ka murga ka jo taste hai wo usme mila.Nagpur me sirf Hydrabadi milta jiski taste cockrel jaisi rahti hai Lekin Shendeji ke yahake murge to pure GAVRANI.Bahot MAZA aaya ab to gaav me jane ki jarurat nahi Nagpur mehi gaav ka MAZA.VAAH KYA RASSA THA, KYA PIS THE\r\nmere mooh me paani aa gaya.Ek aur party ho jaaye', '\r\n\r\n\r\nnandkishor satdeve', '2024-04-25 07:26:23'),
(23, 'The original Desi chicken farm in Nagpur at affordable price.\r\nJust try for it .\r\nOwner is fully friendly nature person and very helpful.', '\r\n\r\n\r\nSUREN S', '2024-04-25 07:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`purchase_id`),
  ADD KEY `fk_product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
