-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 13, 2017 at 07:54 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `cit_banner`
--

CREATE TABLE `cit_banner` (
  `ban_id` int(11) NOT NULL,
  `ban_title` varchar(200) NOT NULL,
  `ban_subtitle` varchar(300) NOT NULL,
  `ban_text` varchar(20) NOT NULL,
  `ban_url` varchar(200) NOT NULL,
  `ban_details` text NOT NULL,
  `ban_image` varchar(50) NOT NULL,
  `ban_active` int(11) NOT NULL,
  `ban_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cit_banner`
--

INSERT INTO `cit_banner` (`ban_id`, `ban_title`, `ban_subtitle`, `ban_text`, `ban_url`, `ban_details`, `ban_image`, `ban_active`, `ban_time`) VALUES
(1, 'Creative IT Limited', 'Scholastica was established in 1977 by Mrs. Yasmeen Murshed. It was founded with a mission to provide a balanced and well-rounded education for all our students', 'Learn More', '#', 'asdsad sadasdas dasdsad sadsa ', 'Banner-1505741470-83474.jpg', 0, '0000-00-00 00:00:00'),
(2, 'Creative IT Institute', 'who will be equipped to tackle head-on the challenges of our modern-day \"global village\". They will aspire to become responsible citizens', 'Read More', 'http://www.creativeeschool.com/', 'sfsdf sdfsd fsdfsd fsdf', 'Banner-1505741665-77709.jpg', 0, '0000-00-00 00:00:00'),
(3, 'Creative Clipping Path', 'It was founded with a mission to provide a balanced and well-rounded education for all our students, using English as the primary medium of instruction ', 'View More', 'http://www.creativeeschool.com/contact', 'sfsdfsdfsd fsdf sd', 'Banner-1505741698-72284.jpg', 1, '0000-00-00 00:00:00'),
(4, 'adasdsaddsadsa dsad', 'sad sadsa', 'test', 'sadsadsa', 'sfdsdf dsfds fsdfds fdsf ', 'Banner-1505742357-64608.jpg', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cit_contactus`
--

CREATE TABLE `cit_contactus` (
  `conus_id` int(11) NOT NULL,
  `conus_name` varchar(50) NOT NULL,
  `conus_email` varchar(50) NOT NULL,
  `conus_phone` varchar(30) NOT NULL,
  `conus_sub` varchar(300) NOT NULL,
  `conus_mess` text NOT NULL,
  `conus_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cit_contactus`
--

INSERT INTO `cit_contactus` (`conus_id`, `conus_name`, `conus_email`, `conus_phone`, `conus_sub`, `conus_mess`, `conus_time`) VALUES
(1, 'Tomal', 'tomal@gmail.com', '01929989223', 'Check your Message trtyrt rt r', 'asas asas asasas adasd sad adasdas dasdsa', '0000-00-00 00:00:00'),
(2, 'Jubair', 'jubair@gmail.com', '0172223333', 'tytwerwer ewrwer werwerwe rewr werewr we', 'dfgdfgfdg dfdfgdfgfdg dfyuty tyuyt utyu tyutyu tyutyu tyutyu tyut yutyu tyuyt utyu ', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cit_link`
--

CREATE TABLE `cit_link` (
  `link_id` int(11) NOT NULL,
  `link_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cit_link`
--

INSERT INTO `cit_link` (`link_id`, `link_title`) VALUES
(1, 'ABC'),
(2, 'DEF'),
(3, 'GHI'),
(4, 'JKL');

-- --------------------------------------------------------

--
-- Table structure for table `cit_news`
--

CREATE TABLE `cit_news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(200) NOT NULL,
  `news_subtitle` varchar(200) NOT NULL,
  `news_details` text NOT NULL,
  `news_image` varchar(50) NOT NULL,
  `ncate_id` int(11) NOT NULL,
  `news_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cit_news`
--

INSERT INTO `cit_news` (`news_id`, `news_title`, `news_subtitle`, `news_details`, `news_image`, `ncate_id`, `news_time`) VALUES
(9, 'Student Affairs Unit', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'success-one.jpg', 1, 'Wed, 11 Oct 2017 22:39:42 +0600'),
(10, 'Student Affairs Unit', '', 'Lorem Ipsum Dolor Sit Amet difjhefiug jhwifgh weiufh iufbueifghb wiufhb uwifhweuiyfhb ', 'News-1507741729-78938.jpg', 1, 'Wed, 11 Oct 2017 23:08:49 +0600'),
(11, 'Student Affairs Unit', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'News-1507741783-96161.jpg', 1, 'Wed, 11 Oct 2017 23:09:43 +0600'),
(12, 'Student Affairs Unit', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'News-1507741880-41002.jpg', 1, 'Wed, 11 Oct 2017 23:11:20 +0600'),
(13, 'Sample News Article 1', '', 'Lorem Ipsum Dolor Sit Amet Avec sdkfn wofei hwoidf jhweioufh weiufh oiedfjh oiefj weiof hjieuofhj ', 'a.jpg', 2, 'Wed, 11 Oct 2017 22:39:42 +0600'),
(14, 'Sample News Article 2', '', 'sdfiuh wiufh weiufh wdiuvf wicsxkmcbn weiufh wfuicb wd ijcbn wdiufhbn weiufhwd iufh dwiu fhiufh diufh aiufh adiufh aisuydh ', 'b.jpg', 2, 'Wed, 11 Oct 2017 22:39:42 +0600'),
(15, 'Sample News Article 3', '', 'How do we do doiwfhj  eroirhjodifh odifh osidh siudhf ioudshf uiosadfh siudfh sduifh sdiufh sdiufh sidufh siudfh isud hf', 'c.jpg', 2, 'Wed, 11 Oct 2017 22:39:42 +0600'),
(16, 'Sample News Article 4', '', 'This is the 4th sdfij aoif jowifj sdiofj sdoifju sioadfj osidafj saodifj sdoiafj soidafj saoidfj oisdafj saodifj soidjf ', 'd.jpg', 2, 'Wed, 11 Oct 2017 22:39:42 +0600'),
(17, 'Another Sample 1', '', 'ABCDEF frioghj ewoifgj qiofgj ieufg iusdfahgv isadnfbv iusdfhiusadhf iudsfh iasudfh iasudfh iusadhf uidfh iuasdfh isuadfh siuadhf ', 'e.jpg', 3, 'Wed, 11 Oct 2017 23:11:20 +0600'),
(18, 'Another Sample 2', '', 'TWINKLE TWINKLE LITTLE STAR. dlj sdfiogj eoijg iorjg wiorfgj sdiofj aswioddfj eiofgj efiofgj eriogfj eroigj eroigj efwiofgj efiogj eriogj eroigj ergij eriogj', 'f.jpg', 3, 'Wed, 11 Oct 2017 23:11:20 +0600'),
(19, 'Another Sample 3', '', 'DAB DAB DAB wefrio jwrfgikh dsiufgh jiufgh siudfh iuasdh iuehg wiaeufh asiudfh iasudfh siaudfh asidufh aisudfh sd', 'g.png', 3, 'Wed, 11 Oct 2017 23:11:20 +0600'),
(20, 'Another Sample 4', '', 'CIT WEB DEV !703 sdf hsduifh suidhf isdufhv sdifuhv uifdbv fvbh dsfuyhvb udfvhb ufyhv sfduvh fduvh fduyvh ', 'h.jpg', 3, 'Wed, 11 Oct 2017 23:11:20 +0600'),
(25, 'Student Affairs Unit', '', 'This is 1 ', 'ab.jpg', 4, ''),
(26, 'Student Affairs Unit', '', 'This is 2', 'ac.jpg', 4, ''),
(27, 'Student Affairs Unit', '', 'This one is 3', 'ad.png', 4, ''),
(28, 'Student Affairs Unit', '', 'This one is 4', 'ae.jpg', 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `cit_news_category`
--

CREATE TABLE `cit_news_category` (
  `ncate_id` int(11) NOT NULL,
  `ncate_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cit_news_category`
--

INSERT INTO `cit_news_category` (`ncate_id`, `ncate_name`) VALUES
(1, 'Latest News'),
(2, 'Announcement'),
(3, 'Upcoming Events'),
(4, 'Photos');

-- --------------------------------------------------------

--
-- Table structure for table `cit_pagecontent`
--

CREATE TABLE `cit_pagecontent` (
  `pcont_id` int(11) NOT NULL,
  `pcont_title` varchar(200) NOT NULL,
  `pcont_subtitle` varchar(250) NOT NULL,
  `pcont_details` text NOT NULL,
  `pcont_image` varchar(50) NOT NULL,
  `pcate_id` int(11) NOT NULL,
  `pcont_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cit_pagecontent`
--

INSERT INTO `cit_pagecontent` (`pcont_id`, `pcont_title`, `pcont_subtitle`, `pcont_details`, `pcont_image`, `pcate_id`, `pcont_time`) VALUES
(1, 'Welcome to', 'scholas<span>tic</span>a school', '<p>Scholastica was established in 1977 by Mrs. Yasmeen Murshed. It was founded with a mission to provide a balanced and well-rounded education for all our students, using English as the primary medium of instruction but placing equal emphasis on Bangla. Scholastica\'s mission is to build curious, knowledgeable and caring young individuals, who will be equipped to tackle head-on the challenges of our modern-day \"global village\". They will aspire to become responsible citizens, who will embrace and respect people from other cultures and walks of life.</p>', '', 1, '0000-00-00 00:00:00'),
(2, 'About Us', '', '<p> Scholastica\'s mission is to develop curious, knowledgeable and caring young individuals, who will be equipped to tackle head-on the challenges of our modern-day \"global village.\" They will aspire to become responsible and productive citizens, who will contribute to their communities, and embrace and respect people from other cultures and walks of life. </p>\r\n                        <p>Scholastica was established in 1977 by Mrs. Yasmeen Murshed. It was founded to provide a balanced and well-rounded education for students, using English as the primary medium of instruction but placing equal emphasis on Bangla. </p>\r\n                        <p>The customized curriculum builds the knowledge, skills and attitudes that students need to succeed in their academic and professional careers after school. Students are encouraged to challenge themselves, their peers and their teachers in a setting that gives them confidence and builds their skills to think independently. </p>', 'about-ct.jpg', 2, '0000-00-00 00:00:00'),
(3, 'Academics', '', 'Scholastica is one of the largest private English-medium schools in Bangladesh, offering pre-school to A\' Level classes of an international standard. It offers a complete school-leaving course using English as the medium of instruction. We emphasize equal proficiency in Bangla as a necessary prerequisite for a well-rounded education for Bangladeshi students.</p>\r\n                        <p>Scholastica\'s curriculum has been designed to reflect the specific needs of Bangladeshi students keeping in mind their heritage, culture and national identity. </p>\r\n                        <p>The school has designed a comprehensive curriculum for all classes leading to the University of Cambridge \r\nInternational Examinations Ordinary and Advanced Level General Certificate of Education courses which are \r\ntaught in Classes IX to XII. These examinations are administered by the British Council, Dhaka. </p>', 'academic.jpg', 3, '0000-00-00 00:00:00'),
(4, 'Admission In Scholastica', '', 'The admissions process in Scholastica is very transparent. Anyone is welcome to apply without any reference. Absolutely no donations are accepted; only published fees are required. </p>\r\n                        <p>During the admissions process, interviews are held by a panel of senior management, not a single individual. The interview panel is a team of qualified individuals from Scholastica\'s senior management. All decisions for admission are made through a committee, not by any one individual.</p>\r\n                        <p>No external agents/agencies are appointed or involved in the admissions process; the Admissions Office is the only point of contact for all admissions-related applications and inquiries. No Ascent Group personnel have a role in the admissions process except those in the Admissions Office and on the interview and selection panel. </p>\r\n                        \r\n                         <p>During the admissions process, interviews are held by a panel of senior management, not a single individual. The interview panel is a team of qualified individuals from Scholastica\'s senior management. All decisions for admission are made through a committee, not by any one individual.</p>', 'admission.jpg', 4, '0000-00-00 00:00:00'),
(6, 'Our Curriculum', '', '<p>Scholastica provides a complete school-leaving course of study, from pre-school to the A\' Levels. We have developed our own curriculum; it aims to deliver a holistic education program combining the core competencies of the national and the British curricula. The comprehensive curriculum designed for the elementary, secondary and high school classes ultimately leads to the University of Cambridge International Examinations Ordinary and Advanced Level General Certificate of Education exams, taught in the high school. These examinations are \r\nconducted under the auspices of the British Council, Dhaka. </p>\r\n                       \r\n                        <h1>Junior School</h1>\r\n                      <p>\r\n                       In the Junior school, from Playgroup to Kindergarten II, we encourage children to observe their surroundings, think independently, ask questions and freely express themselves without fear or inhibition, thereby honing their observation, listening, verbal and comprehension skills. We create an environment that is conducive to oral participation and expression so that each individual is able to interpret and respond to all forms of external stimuli.. </p>\r\n                        <p>Students gradually develop a love of learning just by handling everyday objects and utilizing their own five senses. They start to identify letters and develop a love of reading. They also grow in confidence and are eventually able to independently hold their pencils and develop their writing skills.</p>\r\n                       \r\n                       \r\n                        <h1>Middle School</h1>\r\n                      <p>From Class I onwards, our curriculum exposes students to more subjects in a formal classroom setting. The curriculum focuses on developing numeracy, literacy and an understanding of the environment and our surroundings. Learning in these classes is designed to develop positive attitudes. Students learn not only from their texts but also from their surroundings. We encourage the little observers to open their eyes, to look around and acquire knowledge from their friends, their teachers and elders, and their environment. Students build key skills and explore concepts in language (both English and Bangla), maths, science, Islamiat/moral science, art, physical education, music and drama. When they enter Class III, they also start to study social studies—history, geography and Bangladesh studies. </p>\r\n                       \r\n                       \r\n                        <h1>High School</h1>\r\n                      <h6>\r\n                       Scholastica\'s O\' Level program encourages students to engage, invent, manage and compete - equipping them for eventual success in the public examinations under Cambridge International Examinations. Years of experience teaching the O\' Levels has allowed us to understand the needs of the international examinations board - our mock results very closely mirror the actual results of our students. </h6>', '', 5, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cit_pagecontent_category`
--

CREATE TABLE `cit_pagecontent_category` (
  `pcate_id` int(11) NOT NULL,
  `pcate_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cit_pagecontent_category`
--

INSERT INTO `cit_pagecontent_category` (`pcate_id`, `pcate_name`) VALUES
(1, 'Home Page Content'),
(2, 'About Page Content'),
(3, 'Academics'),
(4, 'Admission'),
(5, 'Curriculum');

-- --------------------------------------------------------

--
-- Table structure for table `cit_photo`
--

CREATE TABLE `cit_photo` (
  `photo_id` int(11) NOT NULL,
  `photo_title` varchar(100) NOT NULL,
  `photo_text` text NOT NULL,
  `photo_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cit_role`
--

CREATE TABLE `cit_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(20) NOT NULL,
  `role_description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cit_role`
--

INSERT INTO `cit_role` (`role_id`, `role_name`, `role_description`) VALUES
(1, 'Superadmin', ''),
(2, 'Admin', ''),
(3, 'Author', ''),
(4, 'Editor', '');

-- --------------------------------------------------------

--
-- Table structure for table `cit_user`
--

CREATE TABLE `cit_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(25) NOT NULL DEFAULT '---',
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  `photo` varchar(70) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cit_user`
--

INSERT INTO `cit_user` (`id`, `name`, `email`, `phone`, `username`, `password`, `role_id`, `photo`, `time`) VALUES
(1, 'Shams Rahman', 'probal@gmail.com', '9797978978', 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 1, 'user-1505132898-b90a3db2d0826d48f0e35f53d72a042c.jpg', '0000-00-00 00:00:00'),
(3, 'Aronb Roy', 'aronb@gmail.com', '78889899888', 'arnob', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 4, 'user-1505134942-795d52c42d10ba3d9a56858ea3ad788b.png', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cit_banner`
--
ALTER TABLE `cit_banner`
  ADD PRIMARY KEY (`ban_id`);

--
-- Indexes for table `cit_contactus`
--
ALTER TABLE `cit_contactus`
  ADD PRIMARY KEY (`conus_id`);

--
-- Indexes for table `cit_link`
--
ALTER TABLE `cit_link`
  ADD PRIMARY KEY (`link_id`);

--
-- Indexes for table `cit_news`
--
ALTER TABLE `cit_news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `ncate_id` (`ncate_id`);

--
-- Indexes for table `cit_news_category`
--
ALTER TABLE `cit_news_category`
  ADD PRIMARY KEY (`ncate_id`);

--
-- Indexes for table `cit_pagecontent`
--
ALTER TABLE `cit_pagecontent`
  ADD PRIMARY KEY (`pcont_id`),
  ADD UNIQUE KEY `pcate_id` (`pcate_id`);

--
-- Indexes for table `cit_pagecontent_category`
--
ALTER TABLE `cit_pagecontent_category`
  ADD PRIMARY KEY (`pcate_id`);

--
-- Indexes for table `cit_photo`
--
ALTER TABLE `cit_photo`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `cit_role`
--
ALTER TABLE `cit_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `cit_user`
--
ALTER TABLE `cit_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cit_banner`
--
ALTER TABLE `cit_banner`
  MODIFY `ban_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cit_contactus`
--
ALTER TABLE `cit_contactus`
  MODIFY `conus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cit_link`
--
ALTER TABLE `cit_link`
  MODIFY `link_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cit_news`
--
ALTER TABLE `cit_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `cit_news_category`
--
ALTER TABLE `cit_news_category`
  MODIFY `ncate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cit_pagecontent`
--
ALTER TABLE `cit_pagecontent`
  MODIFY `pcont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cit_pagecontent_category`
--
ALTER TABLE `cit_pagecontent_category`
  MODIFY `pcate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cit_photo`
--
ALTER TABLE `cit_photo`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cit_role`
--
ALTER TABLE `cit_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cit_user`
--
ALTER TABLE `cit_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cit_news`
--
ALTER TABLE `cit_news`
  ADD CONSTRAINT `cit_news_ibfk_1` FOREIGN KEY (`ncate_id`) REFERENCES `cit_news_category` (`ncate_id`);

--
-- Constraints for table `cit_pagecontent`
--
ALTER TABLE `cit_pagecontent`
  ADD CONSTRAINT `cit_pagecontent_ibfk_1` FOREIGN KEY (`pcate_id`) REFERENCES `cit_pagecontent_category` (`pcate_id`);

--
-- Constraints for table `cit_user`
--
ALTER TABLE `cit_user`
  ADD CONSTRAINT `cit_user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `cit_role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
