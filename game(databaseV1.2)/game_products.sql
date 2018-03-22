-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: game
-- ------------------------------------------------------
-- Server version	5.7.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET latin1 NOT NULL,
  `description` varchar(450) CHARACTER SET latin1 DEFAULT NULL,
  `image` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `price` varchar(100) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin5;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,1,'DELL Desktop Computer','  XPS8920-7599BLK Intel Core i7 7th Gen 7700 (3.60 GHz) 16 GB DDR4 2 TB HDD 256 GB M.2 PCIe SSD AMD Radeon RX 470 Windows 10 Home 64-Bit','1_1.jpg','$ 1,179'),(2,1,'iBUYPOWER Battlebox Essential Desktop Computer',' NE770RAi Intel Core i7 7th Gen 7700 (3.60 GHz) 8 GB DDR4 1 TB HDD 120 GB SSD NVIDIA GeForce GTX 1060 Windows 10 Home 64-Bit','2_1.jpg','$ 949.99'),(3,1,'CyberpowerPC Desktop Computer Gamer Xtreme ','Intel Core i7 X-series 7800X (3.50 GHz) 16 GB DDR4 1 TB HDD 16 GB Optane Memory AMD Radeon RX 580 Windows 10 Home 64-Bit','3_1.jpg','$ 1, 299.99'),(4,1,'CLX SET','Intel Core i7-8700K 3.70 GHz 6-Core Liquid Cooled 32GB DDR4 240GB SSD 3TB NVIDIA GeForce GTX 1080 Ti 11GB WiFi Windows 10','4_1.jpg','$ 2,843.99'),(5,1,'yberpowerPC Desktop Computer Gamer Xtreme ','Intel Core i7 7th Gen 7700K (4.20 GHz) 8 GB DDR4 1 TB HDD 240 GB SSD NVIDIA GeForce GTX 1070 Windows 10 Home 64-Bit','5_1.jpg','$1,449.99'),(6,1,'CyberpowerPC Desktop Computer Gamer Xtreme ','Intel Core i7 7th Gen 7700 (3.60 GHz) 8 GB DDR4 1 TB HDD 16 GB Optane Memory NVIDIA GeForce GTX 1050 Ti Windows 10 Home 64-Bit','6_1.jpg','$ 1,024.99'),(7,2,'ASUS FX502VM-AS73 Gaming Laptop','Intel Core i7 7th Gen 7700HQ (2.80 GHz) 16 GB DDR4 Memory 1 TB HDD 128 GB SSD NVIDIA GeForce GTX 1060 3 GB GDDR5 VR Ready 15.6\" Windows 10 Home 64-Bit','7_2.jpg','$ 1,049.00'),(8,2,'Lenovo Legion Y720 (80VR00J0US) ','Intel Core i7 7th Gen 7700HQ (2.80 GHz) NVIDIA GeForce GTX 1060 16 GB Memory 512 GB PCIe SSD 1 TB HDD Windows 10 Home 64-Bit Gaming Laptop -- ONLY @ NEWEGG','8_2.jpg','$ 1,279.00'),(9,2,'ASUS VivoBook Pro 17 ','N705UD-EH76 17.3\" Thin and Portable FHD Laptop, 8th Gen Intel Core i7-8550U 1.8 GHz Processor, NVIDIA GeForce GTX 1050 Graphics, 16 GB DDR4 RAM, 256 GB SSD + 1 TB HDD, 802.11ac Wi-Fi, USB-C, Backlit Keyboard, Windows 10','9_2.jpg','$ 1,058.65'),(10,2,'MSI GL62M ','15.6\" Intel Core i7 7th Gen 7700HQ (2.80 GHz) NVIDIA GeForce GTX 1050 8 GB Memory 128 GB NVMe SSD 1 TB HDD Windows 10 Home 64-Bit Gaming Laptop -- ONLY @ NEWEGG','10_2.jpg','$ 799.00'),(11,2,'GIGABYTE Aero','14Wv7-GN4 14.0\" 3K/QHD IPS Intel Core i7 7th Gen 7700HQ (2.80 GHz) NVIDIA GeForce GTX 1060 16 GB Memory 512 GB M.2 SATA SSD Windows 10 Home 64-Bit Gaming Laptop Battery Capacity up to 10 Hour(s) (Green)','11_2.jpg','$ 1,540.00'),(12,2,'ASUS ROG Zephyrus','GX501VS-XS71 15.6\" Full-HD 120 Hz Ultra-portable Gaming Laptop, GeForce GTX 1070, Max-Q Design, VR Ready Intel Core i7, 256 GB PCIe SSD, 16 GB DDR4, Windows 10 Pro 64-Bit','12_2.jpg','$ 1,999.00'),(13,3,'Devastator II LED','Gaming Keyboard and Mouse Combo Bundle with Blue LED Edition by Cooler Master','13_3.jpg','$ 28.99.00'),(14,3,'GAMDIAS','GKC110 Gaming Keyboard','14_3.jpg','$ 19.99'),(15,3,'MasterKeys Lite L Combo RGB Keyboard and Mouse','Mem-chanical Switches, Zoned Brilliant RGB Lighting, Precision Optical Sensor with On-the-fly DPI Settings by Cooler Master','15_3.jpg','$ 59.99'),(16,3,'Logitech Headset','981-000708 G433 7.1 Wired Gaming Headset with DTS Headphone: X 7.1 Surround for PC, PS4, PS4 PRO, Xbox One, Xbox One S, Nintendo Switch - Black','16_3.jpg','$ 85.54'),(17,3,'Logitech Z625 Speaker ','Logitech Z625 Speaker System with Subwoofer and Optical Input','17_3.jpg','$ 150.85'),(18,3,'Bluetooth Earbuds','Fisher Blue FBEP590B Sprint Sound Bluetooth Earbuds','18_3.jpg','$ 13.99'),(19,3,'Logitech Gaming Headset','Logitech G430 USB Connector Circumaural Surround Sound Gaming Headset','19_3.jpg','$ 65.28'),(20,3,'GoGroove Speakers','GOgroove BassPULSE 2.1 Computer Speakers with Red LED Glow Lights and Powered Subwoofer - Gaming Speaker System for Music on Desktop, Laptop, PC with 40 Watts, Heavy Bass','20_3.jpg','$ 49.99'),(21,3,'Logitech Surround Speakers','Logitech Z506 75 watts RMS 5.1 Surround Sound Speakers','21_3.jpg','$ 52.78'),(22,4,'Monster Hunter: World Xbox One [Digital Code]','Capcom, Hunting Action, DRM XBOX One, ESRB Rating T-Teen, Mild Language, Use of Alcohol, Violence','22_4.jpg','$ 139.53'),(23,5,'Fortnite - Deluxe Founder\'s Pack Xbox One [Digital Code]','Microsoft, ESRB Rating T-Teen (Violence), Genre (Action, Adventure, RPG), DRM XBOX One','23_4.jpg','$ 53.99'),(24,4,'Injustice 2: Standard Edition Xbox One [Digital Code]','Warner Bros., ESRB Rating T - Teen (Alcohol Reference, Blood, Language, Suggestive Themes, Violence),  Genre(Fighting), DRM XBOX One','24_4.jpg','$ 35.99'),(25,4,'Age of Empires: Definitive Edition Windows 10 [Digital Code]','Microsoft, ESRB Rating T - Teen (Blood, Violence), Genre(Real-time Strategy), DRM Windows 10','25_4.jpg','$ 17.99'),(26,4,'Final Fantasy XV: Windows Edition Windows 10 [Digital Code]','Square Enix, ESRB Rating T-Teen, Genre(RPG), DRM Windows 10','26_4.jpg','$ 29.99'),(27,4,'Crackdown 3 Xbox One / Windows 10 [Digital Code]','Xbox One and Windows 10 PC exclusive. Supports Xbox Play Anywhere: yours to play on both Xbox One and Windows 10 PC at no additional cost, Play Wrecking Zone - a multiplayer battle arena with 100% destruction powered by Microsoft Cloud.','27_4.jpg','$ 59.99'),(28,5,'SteelSeries Stratus Controller','SteelSeries Stratus XL, Bluetooth Wireless Gaming Controller for Windows, Android, Samsung Gear VR, HTC Vive, and Oculus','28_5.jpg','$ 53.78'),(29,6,' Force-Feedback Wheel ','Thrustmaster T300 RS: 1080 Degrees and the First Official Force-Feedback Wheel for PC and PlayStation 4','29_5.jpg','$ 176.99'),(30,7,'Playseat RC.00002 Challenge Seat','Compatible with PC, Playstation 3, Playstation 4, Xbox 360 and Xbox One, Supports 3rd party wheel and pedal sets from Fanatec, Logitech, Thrustmaster and MadCatz for all gaming consoles and PCs','30_5.jpg','$ 227.06');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-22 11:52:33
