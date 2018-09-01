-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 01, 2018 at 02:31 PM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.2.7-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artist_connect`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_20_154705_create_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(250) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `post` text NOT NULL,
  `created_at` varchar(250) NOT NULL,
  `updated_at` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `post`, `created_at`, `updated_at`) VALUES
(93370, '12183', 'Finish each day and be done with it. You have done what you could. Some blunders and absurdities no doubt crept in; forget them as soon as you can. Tomorrow is a new day. You shall begin it serenely and with too high a spirit to be encumbered with your old nonsense.', '2018-07-24 07:32:03', '2018-07-24 07:32:03'),
(93371, '58866', 'What lies behind us and what lies before us are tiny matters compared to what lies within us.', '2018-07-24 07:43:44', '2018-07-24 07:43:44'),
(93372, '43769', 'I cannot remember the books I\'ve read any more than the meals I have eaten; even so, they have made me.', '2018-07-24 07:44:46', '2018-07-24 07:44:46'),
(93373, '58866', 'The purpose of life is not to be happy. It is to be useful, to be honorable, to be compassionate, to have it make some difference that you have lived and lived well.', '2018-07-24 08:29:54', '2018-07-24 08:29:54'),
(93374, '58866', 'The glory of friendship is not the outstretched hand, not the kindly smile, nor the joy of companionship; it is the spiritual inspiration that comes to one when you discover that someone else believes in you and is willing to trust you with a friendship.', '2018-07-24 08:30:32', '2018-07-24 08:30:32'),
(93375, '12183', 'Whatever you do, you need courage. Whatever course you decide upon, there is always someone to tell you that you are wrong. There are always difficulties arising that tempt you to believe your critics are right. To map out a course of action and follow it to an end requires some of the same courage that a soldier needs. Peace has its victories, but it takes brave men and women to win them.', '2018-07-24 10:33:40', '2018-07-24 10:33:40'),
(93376, '58866', 'Suicidal Thoughts... Like I\'m Curt Cobain', '2018-07-27 20:48:23', '2018-07-27 20:48:23'),
(93377, '58866', 'One looks back with appreciation to the brilliant teachers, but with gratitude to those who touched our human feelings. The curriculum is so much necessary raw material, but warmth is the vital element for the growing plant and for the soul of the child.', '2018-07-28 21:52:29', '2018-07-28 21:52:29'),
(93378, '12183', 'Loneliness does not come from having no people about one, but from being unable to communicate the things that seem important to oneself, or from holding certain views which others find inadmissible.', '2018-07-28 21:56:30', '2018-07-28 21:56:30'),
(93379, '12183', 'As a child I felt myself to be alone, and I am still, because I know things and must hint at things which others apparently know nothing of, and for the most part do not want to know', '2018-07-28 21:57:38', '2018-07-28 21:57:38'),
(93380, '12183', 'Mistakes are, after all, the foundations of truth, and if a man does not know what a thing is, it is at least an increase in knowledge if he knows what it is not.', '2018-07-28 22:01:19', '2018-07-28 22:01:19'),
(93381, '58866', 'People will do anything, no matter how absurd, in order to avoid facing their own souls. One does not become enlightened by imagining figures of light, but by making the darkness conscious.', '2018-07-28 22:05:59', '2018-07-28 22:05:59'),
(93382, '43769', 'The acceptance of oneself is the essence of the whole moral problem and the epitome of a whole outlook on life. That I feed the hungry, that I forgive an insult, that I love my enemy in the name of Christ -- all these are undoubtedly great virtues. What I do unto the least of my brethren, that I do unto Christ. But what if I should discover that the least among them all, the poorest of all the beggars, the most impudent of all the offenders, the very enemy himself -- that these are within me, and that I myself stand in need of the alms of my own kindness -- that I myself am the enemy who must be loved -- what then? As a rule, the Christian\'s attitude is then reversed; there is no longer any question of love or long-suffering; we say to the brother within us \"Raca,\" and condemn and rage against ourselves. We hide it from the world; we refuse to admit ever having met this least among the lowly in ourselves', '2018-07-28 22:21:02', '2018-07-28 22:21:02'),
(93383, '43769', 'Art is a kind of innate drive that seizes a human being and makes him its instrument. The artist is not a person endowed with free will who seeks his own ends, but one who allows art to realize its purpose through him. As a human being he may have moods and a will and personal aims, but as an artist he is \"man\" in a higher sense— he is \"collective man\"— one who carries and shapes the unconscious, psychic forms of mankind', '2018-07-28 22:21:42', '2018-07-28 22:21:42'),
(93384, '43769', 'Somewhere, right at the bottom of one’s own being, one generally does know where one should go and what one should do. But there are times when the clown we call “I” behaves in such a distracting fashion that the inner voice cannot make its presence felt.', '2018-07-28 22:22:18', '2018-07-28 22:22:18'),
(93385, '12183', 'This is the day that the Lord has made!', '2018-07-31 19:34:25', '2018-07-31 19:34:25'),
(93386, '12183', 'Thank you Lord', '2018-08-10 18:24:38', '2018-08-10 18:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone_number`, `email_address`, `password`, `created_at`, `updated_at`, `remember_token`) VALUES
('12183', 'Chris', 'Muga', '0704313126', 'ChrisMuga94@gmail.com', '$2y$10$B5yxZ2Pz1p4qTcNP.hhaN.2lKOOzm02dO4MKPxWZPLsHX5L0yG/.G', '2018-07-22 10:44:58', '2018-07-22 10:44:58', 'Bmj2MVQnKTkPcEE5vBjHISDNC2t7UOA5PxhuM8a8ovOs3xQ4UHb6vzPXtoBk'),
('43769', 'Andrew', 'Masaba', '45678903333', 'andrew@masaba.com', '$2y$10$POV8QjN.RNd9KystkAti8usy/Qk2qbprXuXomWQMuKoAAmKqIrRF6', '2018-07-22 10:49:36', '2018-07-22 10:49:36', 'ppGEnzbGscKbBxxnCCJd5yvn1RUOcmksQEahuZly2mUvsE0nkRkEVxG53ZtU'),
('58866', 'Audrey', 'Auma', '1234456666', 'AudreyA@gmail.com', '$2y$10$bU94udHCh.qo7faleSCluulzv7lBZzslOOwekxpW/XUQnHUodWu66', '2018-07-22 10:48:36', '2018-07-22 10:48:36', 'tzhCOsNOaTFCg7Q1o5YHOWQsEpChEui3BbcyjBUIcTL4omD9YrcRTbBEY2Ip');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` varchar(250) NOT NULL,
  `nationality` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `bio` varchar(250) NOT NULL,
  `updated_at` varchar(250) NOT NULL,
  `created_at` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `nationality`, `location`, `gender`, `bio`, `updated_at`, `created_at`) VALUES
('andrew@masaba.com', 'Kenyan', 'Lang\'ata, Nairobi', 'Male', 'Farmer\'s Choice', '2018-07-24 06:09:52', '2018-07-24 06:09:03'),
('AudreyA@gmail.com', 'Kenyan', 'Buruburu, Nairobi.', 'Female', 'Gentle heart. Lover of life and laughter and everything in between...', '2018-07-29 08:27:14', '2018-07-22 17:37:46'),
('ChrisMuga94@gmail.com', 'Kenyan', 'Nairobi, Buruburu', 'Male', 'Prince of the City, Citizen Kane. Engineer', '2018-07-31 19:34:07', '2018-07-22 18:16:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_address` (`email_address`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93387;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
