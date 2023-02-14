-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2023 at 03:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aljamey`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `username`, `password`) VALUES
(1, 'Aljamey@gmail.com', 'Aljamey', '1212'),
(2, 'web@gmail.com', 'Aljamey', '$2y$10$zDsSZWGA4ilRJBxrjBFXGOtBCesfXOrpOe4BPSHFv6oOo2HDf29Jm');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `newsTitle` varchar(100) NOT NULL,
  `newsTitle_ar` varchar(100) NOT NULL,
  `newsImage` varchar(255) NOT NULL,
  `newsDecs` varchar(10000) NOT NULL,
  `newsDecs_ar` varchar(10000) NOT NULL,
  `newsDate` date NOT NULL DEFAULT current_timestamp(),
  `newsWriter` varchar(100) NOT NULL,
  `newsWriter_ar` varchar(100) NOT NULL,
  `type` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `newsTitle`, `newsTitle_ar`, `newsImage`, `newsDecs`, `newsDecs_ar`, `newsDate`, `newsWriter`, `newsWriter_ar`, `type`, `status`) VALUES
(42, 'Five \"terrorists\" were arrested in 3 provinces', 'القبض على خمسة \"إرهابيين\" في 3 محافظات', 'cc.jpg', 'Today, Friday, the National Security Agency announced that its detachments had arrested five terrorists in the governorates of Baghdad and Salah al-Din.\r\nThe agency stated in a statement to Alsumaria News, that its detachments \"was able, after obtaining judicial approvals, to arrest five terrorists, three of them in separate areas of the capital, Baghdad, and two other terrorists, one in Salah al-Din governorate ', 'أعلن جهاز الأمن الوطني، اليوم الجمعة، تمكن مفارزه من القبض على خمسة إرهابيين في محفاظتي بغداد وصلاح الدين.\r\nوذكر الجهاز في يبان ورد لـ السومرية نيوز، أن مفارزه \"تمكنت بعد استحصال الموافقات القضائية من إلقاء القبض على خمسة إرهابيين ثلاثة منهم في مناطق متفرقة من العاصمة بغداد، وإرهابيينِ إثنينِ آخرينِ أحدهما في محافظة صلاح الدين والآخر في محافظة كركوك، بعد', '2022-07-22', 'webe', 'ويبي', 1, 0),
(43, 'This text is an example of text that can be replaced in the same space,', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة،', 'aa.jpg', '<p><b>This text is an example of a text that can be replaced in the same space</b>. </p><ol><li>This text was generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters generated by the application.</li><li>If you need a larger number of paragraphs, the Arabic text generator allows you to increase the number of paragraphs as you want, the text will not appear divided and does not contain language errors, the Arabic text generator is useful for web designers in particular, where the customer often needs to see a real picture for site design.</li></ol><p><span style=\"font-family: &quot;Comic Sans MS&quot;;\">Hence, the designer must put temporary texts on the design to show the client the complete form. The role of the Arabic text generator is to save the designer the trouble of searching for an alternative text that has nothing to do with the topic that the design is talking about, so it appears in an inappropriate manner.</span></p><p><span style=\"background-color: rgb(255, 255, 0);\">This text can be installed on any design without a problem</span>. It will not look like copied, disorganized, unformatted, or even incomprehensible text. Because it is still an alternative and temporary text.</p>', '<div style=\"text-align: right;\"><span style=\"font-size: 1rem;\"><b>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،</b></span></div><ol><li style=\"text-align: right;\"><span style=\"font-size: 1rem;\"><b> </b>حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.\r\n</span></li><li style=\"text-align: right;\"><span style=\"font-size: 1rem;\">إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص،</span></li><li style=\"text-align: right;\"><span style=\"font-size: 1rem;\"> حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.\r\nومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،</span></li></ol><div style=\"text-align: right;\"><span style=\"font-size: 1rem;\">دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.\r\nهذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</span></div>', '2022-07-22', 'webe', 'ويبي', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;