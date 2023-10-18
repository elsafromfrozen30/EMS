-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 06, 2023 at 10:29 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elective management system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_course`
--

CREATE TABLE `admin_course` (
  `cat` varchar(1000) NOT NULL,
  `stream` varchar(1000) NOT NULL,
  `code` varchar(1000) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `credit` varchar(1000) NOT NULL,
  `preq` varchar(1000) NOT NULL,
  `descb` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_course`
--

INSERT INTO `admin_course` (`cat`, `stream`, `code`, `title`, `credit`, `preq`, `descb`) VALUES
('ENGG', 'Data Science', '19CSE351', 'computational statistics and inference theory', '3', '-', 'This course focuses on applying probability and inferential statistics knowledge for data analysis'),
('ENGG', 'Data Science', '19CSE352', 'Business Analytics', '3', '-', 'The course presents an applied approach to data mining concepts and methods, using Python software for  illustration'),
('ENGG', 'Data Science', '19CSE353', 'mining of massive datasets', '3', '-', 'This course exposes the learner to meet industry requirements to handle large data.'),
('ENGG', 'Data Science', '19CSE354', 'Web Mining', '3', '19CSE305 , 19CSE304 ,19CSE352', 'This course serves as an excellent introduction to web mining using different data mining/ML techniques'),
('ENGG', 'Data Science', '19CSE355', 'time series analysis and forecasting', '3', '19MAT205', ' This course introduces the principles and methods of forecasting'),
('ENGG', 'Cyber Security', '19CSE336', 'digital currency programming', '3', '19CSE102,19CSE331,19CSE332', 'This course examines the foundations of Blockchain technology from multiple perspectives. It is designed to  provide students with an understanding of key concepts and developments around cryptocurrencies and  distributed ledger systems.'),
('ENGG', 'Cyber Security', '19CSE337', 'social networking security', '3', '19CSE102,19CSE331,19CSE332', 'This course will examine several topics in social media analysis, including social network analysis,  information flow and learning from tagging, and show how AI, linguistic and statistical methods can be used  to study these topics'),
('ENGG', 'Networks', '19CSE340', 'Advanced Computer Networks', '3', '19CSE301', 'This course focuses on advanced networking concepts for next generation network architecture and design'),
('ENGG', 'Networks', '19CSE341', 'Mobile Ad hoc Networks', '3', '19CSE301', 'This course provides fundamentals of mobile Adhoc and Mesh networks'),
('19CSE342', 'Networks', '19CSE342', 'wireless and mobile communication', '3', '19CSE301', 'This course provides an overview on the dynamics of wireless environment and means of communication  across heterogeneous networks.'),
('ENGG', 'Cyber Security', '19CSE331', 'Cryptography', '3', '19MAT115', 'The course will cover how cryptography (symmetric and asymmetric) work, how security is analyzed  theoretically, and how exploits work in practice.'),
('ENGG', 'Cyber Security', '19CSE331', 'information security', '3', '19CSE331', 'This course will help students understand basic principles of information security'),
('ENGG', 'Cyber Security', '19CSE333', 'secure coding', '3', '19CSE102', 'This course will introduce a variety of topics pertaining to writing secure code.'),
('ENGG', 'Cyber Security', '19CSE334', 'cyber forensics and malware', '3', '19MAT115,19CSE331', 'The course focuses on the procedures for identification, preservation, and extraction of electronic evidence,  auditing and investigation of network and host system intrusions, analysis and documentation of information  gathered, and preparation of expert testimonial evidence.'),
('ENGG', 'Cyber Security', '19CSE335', 'ethical hacking', '3', '19MAT115,19CSE102,19CSE331', 'This course introduces the concepts of Ethical Hacking and gives opportunity to learn about different tools  and techniques in Ethical hacking and security.'),
('ENGG', 'Cyber Security', '19CSE336', 'digital currency programming', '3', '19CSE102,19CSE331,19CSE332', 'This course examines the foundations of Blockchain technology from multiple perspectives. It is designed to  provide students with an understanding of key concepts and developments around cryptocurrencies and  distributed ledger systems.'),
('ENGG', 'Cyber Security', '19CSE337', 'social networking security', '3', '19CSE102,19CSE331,19CSE332', 'This course will examine several topics in social media analysis, including social network analysis,  information flow and learning from tagging, and show how AI, linguistic and statistical methods can be used  to study these topics'),
('ENGG', 'Cyber Security', '19CSE338', 'mobile and wireless security', '3', '19CSE301,19CSE332', 'The focus of this course is to enable students to understand the aspects of information and network security  that arise in this challenging and ever-evolving space of mobile communication systems'),
('ENGG', 'Networks', '19CSE339', 'wireless sensor networks', '3', '19CSE301', 'This course introduces the features of Wireless Sensor Networks and their architecture. '),
('ENGG', 'Computer Vision', '19CSE431', 'Digital Image Processing', '3', '19CSE431', 'This course introduces the basics of image processing and explores the algorithms in spatial and frequency  domain relevant to image enhancement, restoration and segmentation applications.'),
('ENGG', 'Computer Vision', '19CSE432', 'pattern recognition', '3', '-', 'The course introduces basic concepts of Pattern recognition and explores statistical pattern recognition  algorithms.'),
('ENGG', 'Computer Vision', '19CSE433', 'computer graphics and visualization', '3', '-', 'This course aims at teaching students about computer graphic application and standard algorithms involved  in 2D and 3D graphics.'),
('ENGG', 'Computer Vision', '19CSE434', 'image and video analysis', '3', '19CSE431', 'This course covers the extraction, representation and analysis of Image features.'),
('ENGG', 'Computer Vision', '19CSE435', 'computer vision', '3', '-', 'This course introduces the geometry of image formation and its use for 3D reconstruction and calibration'),
('ENGG', 'Computer Vision', '19CSE436', 'machine vision', '3', '-', 'The course focuses on the geometric aspects of computer vision. The objective of the course is to introduce multi-view Camera calibration'),
('ENGG', 'Computer Vision', '19CSE437', 'deep learning for computer vision', '3', '-', 'This course gives an exposure to neural networks and deep learning architectures'),
('ENGG', 'Computer Vision', '19CSE438', 'medical image processing', '3', '19CSE431', 'The course introduces various modalities of medical imaging and covers image processing algorithms  specific for medical imaging such as registration and fusion'),
('ENGG', 'Computer Vision', '19CSE439', 'augmented and virtual reality', '3', '19CSE433', 'The course introduces various modalities of medical imaging and covers image processing algorithms  specific for medical imaging such as registration and fusion'),
('ENGG', 'Computer Vision', '19CSE440', 'biometrics', '3', '-', 'This course covers fundamental concepts, characteristics and processes of biometrics including identity  management system and performance of traits for verification recognition.'),
('ENGG', 'Cyber Physical Systems', '19CSE441', 'introduction to cyber-physical systems', '3', '19CSE303 , 19MAT115', 'This course provides an introduction to CPS, CPS foundations including the symbolic synthesis and modeling  paradigms, engineering problems in CPS and applications from various domains.'),
('19CSE442', 'Cyber Physical Systems', '19CSE442', 'pervasive and ubiquitous systems', '3', '19CSE301', 'This course is an introduction to the fundamental concepts and theories in pervasive computing as well as  the technologies and applications'),
('ENGG', 'Cyber Physical Systems', '19CSE443', 'spatiotemporal data management', '3', '19CSE212 , 19CSE202', 'This course introduces the students to spatial and temporal databases, models of spatial and temporal data  and indexing and operation over spatio-temporal data'),
('ENGG', 'Cyber Physical Systems', '19CSE444', 'real-time systems', '3', '19CSE213 , 19CSE303', 'This course introduces the student to real-time systems, its foundations, models, and design with respect to  real-time operating systems.'),
('ENGG', 'Cyber Physical Systems', '19CSE445', 'cloud computing', '3', '19CSE102 , 19CSE301', 'This course introduces the basic principles of cloud computing, cloud native application development and  deployment, containerization principles, micro-services and application scaling.'),
('ENGG', 'Cyber Physical Systems', '19CSE446', 'internet of things', '3', '19CSE102 , 19CSE303', 'This course covers the fundamentals of IoT and provides skills for IoT based product development'),
('ENGG', 'Artificial Intelligence', '19CSE451', 'principles of artificial intelligence', '3', '19MAT111 , 19MAT112 , 19MAT205', 'This course provides a comprehensive, graduate-level introduction to artificial intelligence, emphasizing  advanced topics such as advanced search, reasoning and decision-making under uncertainty, and machine  learning.'),
('19CSE452', 'semantic web', '19CSE452', 'semantic web', '3', '19MAT111 , 19MAT112 , 19MAT205 , 19CSE305', 'This course will cover the core concepts of Semantic Web that promises to dramatically improve World Wide  Web (WWW) and its use'),
('ENGG', 'Artificial Intelligence', '19CSE453', 'natural language processing', '3', '19MAT111 , 19MAT112 ,  19MAT205', 'This course is devoted to the study of phonological, morphological and syntactic processing. These areas will  be approached from both a linguistic and an algorithmic perspective'),
('ENGG', 'Artificial Intelligence', '19CSE454', 'information retrieval', '3', '19MAT111 , 19MAT112 ,  19MAT205 , 19CSE305', 'This course aims at understanding the underlined problems related to IR and acquire the necessary experience  to design, and implement real applications using word statistics,'),
('19CSE455', 'Artificial Intelligence', '19CSE455', 'artificial intelligence and robotics', '3', '19MAT111 , 19MAT112 ,  19MAT205 , 19CSE305', 'This course aims to make the learners understand the basic principles in AI and robotics technologies'),
('ENGG', 'Artificial Intelligence', '19CSE456', 'neural networks and deep learning', '3', '19MAT111 , 19MAT112 ,  19MAT205 , 19CSE305', 'This course provides an introduction to deep neural network models, and surveys some of the applications of  these models in areas where they have been particularly successful.'),
('ENGG', 'Artificial Intelligence', '19CSE457', 'bayesian machine learning', '3', '19MAT111 , 19MAT112 ,  19MAT205 , 19CSE305', 'This course will cover the basics of Bayesian methods, from how to define a probabilistic model to how to  make predictions from it'),
('ENGG', 'Artificial Intelligence', '19CSE458', 'computational intelligence', '3', '19MAT111 , 19MAT112 ,  19MAT205 ', 'This course covers practical adaptation and self-organization concepts, paradigms, algorithms and  implementations that enable or facilitate appropriate actions (intelligent behavior) in complex and changing  environments'),
('SCI', 'Chemistry', '19CHY243', 'Computational Chemistry and Molecular Modelling', '3', '-', 'this course provides about types of molecules and how they are modelled '),
('SCI', 'Chemistry', '19CHY236', 'Electrochemical Energy Systems and Processes', '3', '-', 'this courses tells how anode and cathode reacts in a electro chemical reaction '),
('SCI', 'Physics', '19PHY340', 'Advanced Classical Dynamics', '3', '-', 'this course tells about classical mechanics and fluid modelling'),
('SCI', 'Physics', '19PHY342', 'Advanced Classical Dynamics', '3', '-', 'Thsi course provides about Electrical circuits'),
('SCI', 'Mathematics', '19MAT341', 'Statistical Inference', '3', '-', 'this course provides about distribution and hypothesis of data'),
('SCI', 'Mathematics', '19MAT343', 'Numerical Methods and Optimization', '3', '-', 'this course provides about optimization of eqautions'),
('HUM', 'Management', '19MNG331', 'Financial Management', '3', '-', 'This course provides overview on how to manage money effectively'),
('HUM', 'Management', '19MNG334', 'Project Management', '3', '-', 'this course overviews on how to do projects effectively in companies and industries'),
('HUM', 'Social Science', '19CUL230', 'Achieving Excellence in Life - An Indian Perspective', '2', '-', 'how to achieve excellence in life'),
('HUM', 'Social Science', '19CUL231', 'Excellence in Daily Life', '2', '-', 'how to excell in daily life');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
