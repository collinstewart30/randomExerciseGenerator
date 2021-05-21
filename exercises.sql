-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 21, 2021 at 03:53 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exercises`
--

-- --------------------------------------------------------

--
-- Table structure for table `cardio`
--

DROP TABLE IF EXISTS `cardio`;
CREATE TABLE IF NOT EXISTS `cardio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `videoURL` text COLLATE utf8_unicode_ci NOT NULL,
  `level` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cardio`
--

INSERT INTO `cardio` (`id`, `name`, `description`, `videoURL`, `level`) VALUES
(1, 'Jump Rope', '1. Grab a handle in each hand and start with the rope behind you, so it\'s right at your heels. To get the rope moving, gently rotate your forearms forward and then your wrists to generate momentum and swing it overhead. 2. As the rope swings up overhead, bend your knees slightly. Once you see the rope pass your shins, jump by springing from your toes. Start slowly so you can master the timing of it. Once you get a few jumps down, you\'ll know when to jump naturally. 3. Once you\'re at a comfortable speed, your wrists can do all the work. Usually, there are bearings inside the handles that rotate the rope itself. This makes it easy to spin the rope with just your wrists. 4. As you hop, be sure to stay on the balls of your feet. This keeps you quick and nimble. Because your calves will get tired quickly, feel free to alternate hops. For example, alternate between each foot, hopping on one and then the other, and then both. This lets your calves rest a little longer. ', 'https://www.youtube.com/embed/u3zgHI8QnqE', 'Intermediate');

-- --------------------------------------------------------

--
-- Table structure for table `lowerbody`
--

DROP TABLE IF EXISTS `lowerbody`;
CREATE TABLE IF NOT EXISTS `lowerbody` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `videoURL` text COLLATE utf8_unicode_ci NOT NULL,
  `level` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lowerbody`
--

INSERT INTO `lowerbody` (`id`, `name`, `description`, `videoURL`, `level`) VALUES
(1, 'Squat', '1. Stand with feet a little wider than hip width, toes facing front. 2. Drive your hips back bending at the knees and ankles and pressing your knees slightly open as you 3. Sit into a squat position while still keeping your heels and toes on the ground, chest up and shoulders back. 4. Strive to eventually reach parallel, meaning knees are bent to a 90 degree angle. 5. Press into your heels and straighten legs to return to a standing upright position.', 'https://www.youtube.com/embed/aclHkVaku9U', 'Beginner');

-- --------------------------------------------------------

--
-- Table structure for table `upperbody`
--

DROP TABLE IF EXISTS `upperbody`;
CREATE TABLE IF NOT EXISTS `upperbody` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `videoURL` text COLLATE utf8_unicode_ci NOT NULL,
  `level` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `upperbody`
--

INSERT INTO `upperbody` (`id`, `name`, `description`, `videoURL`, `level`) VALUES
(1, 'Pushup', 'Place your hands on the floor slightly wider than shoulder width apart and extend your legs behind you. Brace your core and lower your body until your chest is just above the floor. Take two seconds to lower down and two seconds to press back up. Remember to keep your back flat throughout the movement, your elbows close to the sides of your torso, and to fully extend your elbows at the top of the pushup.', 'https://www.youtube.com/embed/IODxDxX7oi4', 'Intermediate'),
(2, 'Knee Pushup', 'Start at the top of the push up position with your hands on the floor, arms straight and underneath your shoulders. Step your knees back behind you so that there is a straight line through your body from your knees up to your head. Engage your glutes, tense your legs and brace your core to keep your body rigid.\r\n\r\nKeeping your elbows in towards your ribs and your forearms vertical, bend at the elbows to lower your body towards the floor. Your head and shoulders should move forwards of your hands as you get closer to the floor. Use your full range of motion to lower your chest in between your hands, as close to the floor as you can, then push your hands into the floor, keeping you body tensed, to move it up away from the floor back to the start position.\r\n\r\nWatch out for elbows flaring out to the sides away from your ribs. They should always point back towards your knees. Another common mistake is to lower down without moving your head and shoulders forward of your hands. These mistakes can lead to injury so focus on quality of movement rather than quantity. If you cant maintain quality in this movement, try some of the easier versions of this exercise to build up strength and technique first.', 'https://www.youtube.com/embed/EgIMk-PZwo0', 'Beginner');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
