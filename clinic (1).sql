-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2023 at 07:50 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `doctor` int(11) NOT NULL,
  `adate` date NOT NULL,
  `atime` time NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `pname`, `age`, `email`, `phone`, `doctor`, `adate`, `atime`, `status`) VALUES
(1, 'Safwan Rahil', 0, 'bwebsystems@gmail.com', '0191818181', 2, '2022-11-09', '17:55:00', 'pending'),
(2, 'test', 2, 'test.email.raj@gmail.com', '', 0, '2023-04-06', '15:21:00', 'pending'),
(3, 'test', 5, 'test.email.raj@gmail.com', '01644836367', 2, '2023-04-01', '15:26:00', 'approved'),
(4, 'test', 56, 'test.email.raj@gmail.com', '01644836367', 3, '2023-04-01', '15:28:00', 'approved'),
(5, 'Service Names', 4, 'rahulsingha12@gmail.com', '01644836367', 0, '2023-03-18', '15:28:00', 'pending'),
(6, 'Service Names', 4, 'rahulsingha12@gmail.com', '01644836367', 0, '2023-03-18', '15:28:00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `short_des` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `header_image` varchar(200) NOT NULL,
  `ord` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dname`, `short_des`, `description`, `image`, `header_image`, `ord`) VALUES
(6, 'General Lab', 'A general lab in a hospital department is a facility that provides a wide range of diagnostic tests and services to assist in the diagnosis and treatment of various medical conditions. ', 'A general lab in a hospital department is a facility that provides a wide range of diagnostic tests and services to assist in the diagnosis and treatment of various medical conditions. The lab may be equipped with advanced equipment and instruments, including microscopes, centrifuges, spectrophotometers, and computerized analyzers.', 'admin/images/lab.png', 'admin/images/lab.jpg', 1),
(7, 'Oncology', 'Oncology is a medical specialty that focuses on the prevention, diagnosis, and treatment of cancer.', 'Oncology is a medical specialty that focuses on the prevention, diagnosis, and treatment of cancer. The Oncology department in a hospital is responsible for providing comprehensive care for patients with cancer, including chemotherapy, radiation therapy, surgery, and palliative care.', 'admin/images/oncoloy.png', 'admin/images/onco.jpg', 4),
(8, 'Histopathology', 'Histopathology is the medical specialty that deals with the examination of tissues and cells under a microscope to diagnose diseases. ', 'Histopathology is the medical specialty that deals with the examination of tissues and cells under a microscope to diagnose diseases. In a hospital setting, the histopathology department is responsible for receiving and analyzing tissue samples from patients. The samples may be obtained from a variety of sources, including biopsies, surgical procedures, or autopsies.\r\n\r\nThe histopathology department plays a crucial role in the diagnosis and treatment of a wide range of diseases, including cancer', 'admin/images/histo.png', 'admin/images/histo.jpg', 2),
(9, 'Molecular', 'A Molecular Hospital Department is a specialized medical department that focuses on the diagnosis and treatment of diseases at a molecular level', 'A Molecular Hospital Department is a specialized medical department that focuses on the diagnosis and treatment of diseases at a molecular level. This department utilizes advanced molecular technologies to understand the underlying genetic and molecular mechanisms of diseases and develop personalized treatments for patients. Molecular medicine is a rapidly evolving field that combines knowledge from multiple disciplines, including genetics, biochemistry, and medicine. The Molecular Hospital Depa', 'admin/images/mol.png', 'admin/images/lab.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `did` int(11) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`did`, `department`) VALUES
(3, 'Gastrology'),
(4, 'Oncology'),
(5, 'test-update'),
(6, 'MEDICINE'),
(7, 'NEUROLOGIST'),
(8, 'Rheumatologist'),
(9, 'Hematologist'),
(10, 'Liver Specialist'),
(11, 'Kidney Diseases Specialist'),
(12, 'Chest Diseases'),
(13, 'Gynecologist'),
(14, 'Liver Diseases Specialist'),
(15, 'Gastroenterology, Pancreas & Liver Diseases Specialist'),
(16, 'Orthopedic & Trauma Surgeon'),
(18, 'Cancer & Tumor Specialist'),
(19, 'Cancer Specialist');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `details` varchar(200) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `history` varchar(5000) NOT NULL,
  `keywords` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `details`, `dept`, `history`, `keywords`, `status`) VALUES
(1, 'PROF. JASHIM UDDIN', 'M.B.B.S (DMC), FCPS (Medicine)', '6', '<p>M.B.B.S (DMC), FCPS (Medicine)</p>', 'medicine', 'Active'),
(2, 'DR. MAHBUBUL ALAM KHONDOKAR', 'MBBS, BCS (Health), FCPS (Medicine), MD (Neurology)', '7', '<p>MBBS, BCS (Health), FCPS (Medicine), MD (Neurology)</p>', 'NEUROLOGIST', 'Active'),
(3, 'DR. NOJIBUR RAHMAN KHOKHON', 'MBBS, MCPS (Medicine) MD (Rheumatology)- BSMMU EULAR Certified in Rheumatic Disease (Switzerland) BCS (Health), Consultant (Medicine)', '8', '<p>MBBS, MCPS (Medicine)</p>\r\n<p>MD (Rheumatology)- BSMMU</p>\r\n<p>EULAR Certified in Rheumatic Disease (Switzerland)</p>\r\n<p>BCS (Health), Consultant (Medicine)</p>', 'Rheumatologist', 'Active'),
(4, 'DR. SOURAV BISWAS', 'MBBS, MD (Hematology , BSMMU)  BCS (Health)  Consultant (Dept. of Hematology)', '9', '<p>MBBS, MD (Hematology , BSMMU)</p>\r\n<p>BCS (Health)</p>\r\n<p>Consultant (Dept. of Hematology)</p>', 'Hematologist', 'Active'),
(5, 'DR. JHULAN BARUA', 'MBBS, BCS (Health), MD (Hepatology)', '10', '<p>MBBS, BCS (Health), MD (Hepatology)</p>', 'Liver Specialist', 'Active'),
(6, 'Dr. M.S. Haider Rushni', 'MBBS (CMS), MD (Nephrology)', '11', '<p>MBBS (CMS), MD (Nephrology)</p>', 'Kidney Diseases Specialist', 'Active'),
(7, 'Dr Md Hosne Sadat Patowary', 'MBBS, MD (Chest Disease) Assistant Professor, Respiratory Department', '12', '<p>MBBS, MD (Chest Disease) Assistant Professor, Respiratory Department</p>', 'Chest Diseases', 'Active'),
(8, 'DR. ASIFA ALI', 'M.B.B.S. FCPS - Fellow Of The College Of Physicians And Surgeons', '13', '<p>M.B.B.S. FCPS - Fellow Of The College Of Physicians And Surgeons</p>', 'Gynecologist', 'Active'),
(9, 'DR. ALOK KUMAR RAHA', 'MBBS (Dhaka), MCPS (Medicine), MD (Hepatology)', '14', '<p>MBBS (Dhaka), MCPS (Medicine), MD (Hepatology)</p>', 'Liver Diseases Specialist', 'Active'),
(10, 'DR. MASUD RANA', 'MBBS, MD (Gastroenterology)', '15', '<p>MBBS, MD (Gastroenterology)</p>', 'Gastroenterology, Pancreas & Liver Diseases Specialist', 'Active'),
(11, 'DR. JABRD JAHANGIR TUHIN', 'MBBS, BCS (Health), MS (Orthopedics), AO (Fellow)', '16', '<p>MBBS, BCS (Health), MS (Orthopedics), AO (Fellow)</p>', 'Orthopedic & Trauma Surgeon', 'Homepage'),
(12, 'DR. FATEMA AKTHER SHILPI', 'BBS, MS (Obs & Gynae)', '13', '<p>BBS, MS (Obs &amp; Gynae)</p>', 'Gynecologist', 'Homepage'),
(13, 'DR. ALI ASGAR CHOWDHURY', 'MBBS, BCS (Health), FCPS (Radiotherapy)', '18', '<p>MBBS, BCS (Health), FCPS (Radiotherapy)</p>', 'Cancer & Tumor Specialist', 'Homepage'),
(14, 'DR. RAKIB UL HASAN', 'MBBS, MD (Oncology), BCS (Health)', '19', '<p>MBBS, MD (Oncology), BCS (Health)</p>', 'Cancer Specialist', 'Homepage');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(2) NOT NULL,
  `head` varchar(20) NOT NULL,
  `menutext` varchar(30) NOT NULL,
  `link` varchar(50) NOT NULL,
  `menuorder` int(2) NOT NULL,
  `status` int(11) NOT NULL,
  `access` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `head`, `menutext`, `link`, `menuorder`, `status`, `access`) VALUES
(1, 'Services', 'Department', 'department', 21, 1, 1),
(2, 'Services', 'Service', 'service', 22, 1, 1),
(3, 'Services', 'Test', 'dtest', 23, 1, 1),
(4, 'News', 'News', 'news', 26, 1, 1),
(5, 'Doctor', 'Department', 'dr_department', 32, 1, 1),
(6, 'Doctor', 'Doctor', 'doctor', 33, 1, 1),
(7, 'Appointment', 'appointments', 'appointments', 42, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `short_description` varchar(500) NOT NULL,
  `article` varchar(2000) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `is_home_page` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(15) NOT NULL,
  `category` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `ord` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_general_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `category`, `des`, `details`, `image`, `icon`, `ord`, `status`) VALUES
(5, 'General Health Checkup', 'General health checkup package for all under 60 years old', '<p>Feeling more thirsty than usual</p>\r\n<p>Urinating often or urine volume is more than usual</p>\r\n<p>Hungry often and eat more than usual</p>\r\n<p>Losing weight without any reason</p>\r\n<p>Having slow-healing wound</p>\r\n<p>Feeling numbness, burning sensation, or tingling at in your extremities</p>', 'images/package/82528.jpg', '', 1, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `package_detail`
--

CREATE TABLE `package_detail` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `feature` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `sid` int(11) NOT NULL,
  `dept` int(11) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `short_des` varchar(5000) NOT NULL,
  `des` varchar(10000) NOT NULL,
  `image` varchar(500) NOT NULL,
  `image_alt` varchar(500) NOT NULL,
  `keywords` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `ord` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`sid`, `dept`, `sname`, `short_des`, `des`, `image`, `image_alt`, `keywords`, `ord`) VALUES
(5, 6, 'Clinical Biochemistry', 'Biochemistry is the branch of medicine that deals with a series of blood tests used to evaluate the functional ability of several critical organs and systems of the body.', 'Biochemistry is the branch of medicine that deals with a series of blood tests used to evaluate the functional ability of several critical organs and systems of the body. e.g. renal function test (RFT) for kidney, liver function test (LFT) for liver, Cardiac profile test for the heart, thyroid function test for thyroid disorders, Calcium, phosphorus, Alkaline phosphatase, and uric acid for bones and joints, similarly for nutrition status protein, albumin, globulin, albumin, and globulin ratio are tested, while arterial blood gas analysis (ABG) is mainly applied to monitor carbon dioxide and oxygen levels related to pulmonary (lung) function but is also used to measure blood pH and bicarbonate levels for certain metabolic conditions, glucose tolerance test (GTT) involves repeated testing to determine the rate at which glucose is processed by the body.', 'admin/images/lab.png', 'general_lab', 'general lab', 2),
(6, 6, 'Hormone', 'A hormone is a class of signaling molecules in multicellular organisms that are sent to distant organs by complex biological processes to regulate physiology and behavior.', 'A hormone is a class of signaling molecules in multicellular organisms that are sent to distant organs by complex biological processes to regulate physiology and behavior. Hormones are required for the correct development of animals, plants and fungi.', 'admin/images/lab.png', 'hormone', 'hormone', 3),
(7, 6, 'Serology', 'A serology service is a type of medical testing that involves the examination of blood serum to detect the presence of antibodies or other immune system markers.', 'A serology service is a type of medical testing that involves the examination of blood serum to detect the presence of antibodies or other immune system markers. This type of testing can help diagnose various conditions, including infectious diseases, autoimmune disorders, and allergies.', 'admin/images/lab.png', 'serology', 'serology', 4),
(8, 6, 'Immunology', 'Immunology is the study of the immune system and is a very important branch of the medical and biological sciences. The immune system protects us from infection through various lines of defence.', 'Immunology is the study of the immune system and is a very important branch of the medical and biological sciences. The immune system protects us from infection through various lines of defence.', 'admin/images/lab.png', 'immunology', 'immunology', 5),
(9, 7, 'PRE SCREENING', 'Oncology pre-screening refers to the initial evaluation of a patient to determine their risk of developing cancer or to identify early signs of cancer before the patient shows any symptoms.', 'Oncology pre-screening refers to the initial evaluation of a patient to determine their risk of developing cancer or to identify early signs of cancer before the patient shows any symptoms. The goal of oncology pre-screening is to identify patients who may benefit from further testing, screening, or preventive measures.\r\n\r\nDuring oncology pre-screening at Asperia, we conduct a physical examination and medical history review to identify any risk factors for cancer, such as family history, lifestyle choices, or environmental exposure. Additionally, specific tests or imaging studies are done to look for signs of cancer.\r\n\r\nOncology pre-screening is important because early detection of cancer increases the chances of successful treatment and better outcomes. We highly recommend that individuals undergo regular oncology pre-screening as part of routine healthcare, especially if they have a family history of cancer or other risk factors.', 'admin/images/pre.jpg', 'PRE SCREENING', 'PRE SCREENING', 1),
(10, 7, 'SCREENING', 'Oncology screening is a medical process that involves testing for the presence of cancer in people who do not have any symptoms of the disease. ', 'Oncology screening is a medical process that involves testing for the presence of cancer in people who do not have any symptoms of the disease. The goal of oncology screening is to identify cancer at an early stage when it is more treatable and curable. At Asperia Oncology center there are several types of cancer screening tests available, including:\r\n\r\nMammography: This is a screening test used to detect breast cancer in women. Mammography uses X-rays to produce images of breast tissue and is recommended for women over the age of 40.\r\n\r\nColonoscopy: This is a screening test used to detect colon cancer and other abnormalities in the colon and rectum. During a colonoscopy, a flexible tube with a camera is inserted into the rectum and guided through the colon to look for any abnormalities.\r\n\r\nPap Smear: This is a screening test used to detect cervical cancer in women. During a Pap smear, cells are collected from the cervix and examined under a microscope to look for any abnormalities.\r\n\r\nProstate-Specific Antigen (PSA) Test: This is a screening test used to detect prostate cancer in men. The PSA test measures the level of PSA in the blood, which can be an indicator of prostate cancer.\r\n\r\nLung Cancer Screening: This is a screening test used to detect lung cancer in people who are at high risks, such as heavy smokers. Lung cancer screening involves a low-dose CT scan of the chest.\r\n\r\nIt is important to note that not all cancers can be detected through screening tests, and screening tests may have limitations and potential risks. It is recommended that individuals discuss the benefits and risks of cancer screening with their healthcare provider to determine if screening is appropriate for them.', 'admin/images/screening.jpg', 'SCREENING', 'SCREENING', 2),
(12, 7, 'DIAGNOSIS', 'A diagnosis service is a medical service provided by a clinic that aims to identify and diagnose health conditions and illnesses in patients.', 'A diagnosis service is a medical service provided by a clinic that aims to identify and diagnose health conditions and illnesses in patients. This service typically involves a series of tests, examinations, and assessments, which are conducted by trained medical professionals such as doctors, nurses, and technicians. The results of these tests are used to determine the underlying causes of the patient\'s symptoms, as well as to develop an appropriate treatment plan. Diagnosis services can help patients to manage and treat a wide range of conditions, from acute illnesses to chronic diseases.', 'admin/images/diagnosis.jpg', 'DIAGNOSIS', 'DIAGNOSIS', 4),
(13, 7, 'COUNCELING', 'Asperia offers professional and specialized cancer counceling services for the first time in Chattogram.', 'Asperia offers professional and specialized cancer counceling services for the first time in Chattogram. Oncology counseling is a type of counseling provided to individuals who have been diagnosed with cancer and their families. The goal of oncology counseling is to help patients and their families cope with the emotional, psychological, and practical challenges that come with a cancer diagnosis.\r\n\r\nOncology counseling may involve individual counseling, group counseling, or family counseling. The types of counseling services provided may include:\r\n\r\nEmotional Support: Oncology counseling can provide emotional support to patients and their families, helping them to cope with the anxiety, fear, and uncertainty that often accompanies a cancer diagnosis.\r\n\r\nCoping Skills: Oncology counseling can teach patients and their families coping skills to help them manage the stress and challenges of cancer treatment.\r\n\r\nCommunication Skills: Oncology counseling can help patients and their families communicate effectively with healthcare providers, family members, and friends.\r\n\r\nEnd-of-Life Planning: Oncology counseling can provide support for patients and their families as they navigate end-of-life issues, such as advanced care planning and hospice care.\r\n\r\nSupport Groups: Oncology counseling can connect patients and their families with support groups and other resources in the community.\r\n\r\nOncology counseling is an important component of cancer care, as it can help patients and their families to better understand their diagnosis and treatment options, cope with the emotional and psychological impact of cancer, and improve their quality of life.', 'admin/images/councelling.jpg', 'COUNCELING', 'COUNCELING', 5),
(14, 7, 'REHABILITATION', 'Cancer rehabilitation is a type of rehabilitation that focuses on helping cancer patients regain physical, emotional, and social functioning after cancer treatment.', 'Cancer rehabilitation is a type of rehabilitation that focuses on helping cancer patients regain physical, emotional, and social functioning after cancer treatment. At Asperia we believe that rehabilitation is an important part of cancer treatment and provide world-class service to ensure the best results. The goal of oncology rehabilitation is to help patients regain their strength, mobility, and quality of life, and to manage any ongoing symptoms or side effects of cancer treatment.\r\n\r\nOncology rehabilitation may involve a team of healthcare providers, including physical therapists, occupational therapists, speech therapists, psychologists, and social workers. The types of oncology rehabilitation services provided may include:\r\n\r\nPhysical Therapy: Physical therapy can help cancer patients improve their strength, balance, and mobility, and manage any pain or stiffness caused by cancer treatment.\r\n\r\nOccupational Therapy: Occupational therapy can help cancer patients with activities of daily living, such as dressing, bathing, and cooking, and with vocational rehabilitation, such as returning to work after cancer treatment.\r\n\r\nSpeech Therapy: Speech therapy can help cancer patients who have experienced changes in their speech or swallowing due to cancer treatment.\r\n\r\nPsychosocial Support: Psychosocial support, such as counseling or support groups, can help cancer patients cope with the emotional and psychological impact of cancer treatment.\r\n\r\nNutritional Counseling: Nutritional counseling can help cancer patients maintain a healthy diet during and after cancer treatment.\r\n\r\nPain Management: Pain management services can help cancer patients manage any ongoing pain or discomfort caused by cancer treatment.\r\n\r\nOncology rehabilitation is an important component of cancer care, as it can help patients recover from the physical and emotional toll of cancer treatment and improve their quality of life.', 'admin/images/rehab.jpg', 'Rehabilitation ', 'Rehabilitation ', 6),
(15, 7, 'CHEMOTHERAPY', 'Asperia Healthcare Ltd. is introducing high-quality and specialized chemotherapy solutions with total care for patients for the first time in Chattogram.', 'Asperia Healthcare Ltd. is introducing high-quality and specialized chemotherapy solutions with total care for patients for the first time in Chattogram. Chemotherapy is a type of cancer treatment that uses drugs to kill cancer cells. Chemotherapy drugs work by targeting rapidly dividing cells, including cancer cells, and preventing them from growing and dividing further. Chemotherapy may be used as the primary treatment for some types of cancer, or it may be used in combination with other treatments, such as surgery or radiation therapy.\r\n\r\nChemotherapy may be administered in a variety of ways, including:\r\n\r\nIntravenous (IV): Chemotherapy drugs are given through a vein in the arm or hand.\r\n\r\nOral: Chemotherapy drugs are taken in pill or liquid form.\r\n\r\nInjection: Chemotherapy drugs are given through a shot into a muscle or under the skin.\r\n\r\nThe type of chemotherapy and the way it is administered depending on the type and stage of cancer, as well as other individual factors such as the patient\'s overall health and medical history.\r\n\r\nAt Asperia Oncology Center we are equipped with a world-class setup for Chemotherapy supported by a highly professional team to provide the best service to our patients. Our daycare center is very convenient for patients as they do not require to stay overnight during a procedure.', 'admin/images/daycare.jpg', 'CHEMOTHERAPY', 'CHEMOTHERAPY', 7),
(16, 9, 'MOLECULAR VIROLOGY', 'Molecular virology is the study of the molecular biology of viruses, including their structure, replication, genetics, and interaction with host cells.', 'Molecular virology is the study of the molecular biology of viruses, including their structure, replication, genetics, and interaction with host cells. By studying the molecular mechanisms of viral replication, scientists can better understand how viruses cause diseases and how to develop new treatments to combat them. Molecular virology is a rapidly evolving field, with new technologies such as next-generation sequencing, gene editing, and high-resolution imaging allowing for more precise and comprehensive studies of viral infections.', 'admin/images/mol.png', 'MOLECULAR VIROLOGY', 'MOLECULAR VIROLOGY', 1),
(17, 9, 'Molecular Genetics', 'A Molecular Genetics Service is a specialized clinic that offers genetic testing and counseling services to individuals and families who may be at risk for inherited genetic disorders.', 'A Molecular Genetics Service is a specialized clinic that offers genetic testing and counseling services to individuals and families who may be at risk for inherited genetic disorders. This service is staffed by trained professionals, such as geneticists and genetic counselors, who can help patients understand the genetic basis of their condition and make informed decisions about their healthcare.', 'admin/images/mol.png', 'Molecular Genetics', 'Molecular Genetics', 2),
(18, 8, 'Histopathology Test', 'Histopathology is the study of tissues and cells at a microscopic level to diagnose and understand diseases. ', 'Histopathology is the study of tissues and cells at a microscopic level to diagnose and understand diseases. A Histopathology Test Service in a clinic is a specialized medical service that involves the analysis of tissue samples obtained from patients to diagnose and monitor various diseases. This service is performed by a trained pathologist who examines the tissue samples under a microscope to identify any abnormal changes, such as the presence of cancer cells or other pathological changes. The Histopathology Test Service may include a range of tests, such as biopsy, frozen section analysis, and immunohistochemistry. Biopsy is the removal of a small sample of tissue for examination, while frozen section analysis involves rapid examination of tissue samples during surgery to aid in the diagnosis and treatment of a patient. Immunohistochemistry uses specific antibodies to detect proteins in the tissue samples, which can help identify the type of cells and the nature of the disease. Ove', 'admin/images/histo.png', 'Histopathology Test', 'Histopathology Test', 1),
(19, 9, 'Molecular Oncology ', 'The branch of oncology (the study of cancer) focuses on the molecular and genetic mechanisms underlying cancer development, progression, and response to treatment. ', 'The branch of oncology (the study of cancer) focuses on the molecular and genetic mechanisms underlying cancer development, progression, and response to treatment. It involves the use of molecular biology techniques to study the changes in DNA, RNA, and proteins that occur in cancer cells and the surrounding microenvironment. By analyzing the genetic and molecular changes that occur in cancer cells, researchers can identify potential targets for new drugs and develop personalized treatment strategies based on the specific genetic alterations present in a patient\'s tumor.', 'admin/images/mol.png', 'Molecular Oncology ', 'Molecular Oncology ', 3),
(20, 9, 'Transplantational Genetics', 'A Transplantational Genetics Service is a specialized medical clinic that provides genetic testing and counseling services to individuals who are undergoing or have undergone transplantation procedures. ', 'A Transplantational Genetics Service is a specialized medical clinic that provides genetic testing and counseling services to individuals who are undergoing or have undergone transplantation procedures. Transplantation involves the transfer of cells, tissues, or organs from one individual to another, and genetic factors can play a significant role in the success of the transplant. The Transplantational Genetics Service clinic may work closely with the transplant team to assess the genetic compatibility of the donor and recipient and provide recommendations for the most appropriate transplant procedure.', 'admin/images/mol.png', 'Transplantational Genetics', 'Transplantational Genetics', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `testid` int(11) NOT NULL,
  `tname` varchar(100) NOT NULL,
  `short_des` varchar(500) DEFAULT NULL,
  `servicehead` int(11) NOT NULL,
  `tdes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`testid`, `tname`, `short_des`, `servicehead`, `tdes`) VALUES
(13, 'Glucose Test', 'A glucose test is a medical test used to measure the level of glucose (sugar) in a person\'s blood. This test is commonly used to diagnose and monitor diabetes, a chronic condition where the body cannot properly regulate blood sugar levels.', 5, 1),
(14, 'Renal Function test', 'Renal Function Tests (RFTs) are a group of blood and urine tests that are used to evaluate the function of the kidneys. These tests can help diagnose and monitor various kidney-related conditions, such as chronic kidney disease, acute kidney injury, and urinary tract infections.', 5, 2),
(15, 'Liver Function test', NULL, 5, 3),
(16, 'TSH ( Thyroid Stimulating Hormone', 'The TSH (Thyroid Stimulating Hormone) test is a blood test that measures the level of TSH in the body. TSH is a hormone produced by the pituitary gland in the brain that stimulates the thyroid gland to produce and release thyroid hormones.', 6, 1),
(17, 'FT3 ( Free Triiodothyronine)', 'The FT3 (Free Triiodothyronine) Test is a blood test used to measure the level of the thyroid hormone triiodothyronine (T3) that is not bound to proteins in the bloodstream.', 6, 2),
(18, 'FT4 ( Free Thyroxine)', NULL, 6, 3),
(19, 'Vitamin D3', NULL, 6, 4),
(20, 'VDRL', 'The Venereal Disease Research Laboratory (VDRL) test is a blood test used to screen for syphilis, a sexually transmitted disease (STD) caused by the bacterium Treponema pallidum. The VDRL test detects the presence of antibodies produced by the body in response to a syphilis infection.', 7, 1),
(21, 'Widal Test ', 'The Widal test is a blood test used to detect the presence of antibodies against specific bacteria that cause typhoid fever and other related illnesses. It is a common diagnostic tool used in clinical settings to confirm or rule out a suspected case of typhoid fever.', 7, 2),
(22, 'TPHA ', NULL, 7, 3),
(23, 'ASO ', NULL, 7, 4),
(24, 'S. IgE ( Immunoglobulin E)  ', 'The S.IgE (serum immunoglobulin E) test is a blood test used to measure the level of IgE antibodies in the blood. IgE is an antibody that is produced by the immune system in response to allergens such as pollen, dust, or certain foods.', 8, 1),
(25, 'ICT for Malaria ', 'ICT (Immunochromatographic Test) for Malaria is a rapid diagnostic test that detects the presence of specific malaria antigens in a patient\'s blood. The test involves taking a small amount of blood from the patient and adding it to a test strip, which contains specific antibodies that bind to malaria antigens if present.', 8, 2),
(26, 'ICT for Kala Azar (Serum)', NULL, 8, 3),
(27, 'Hepatitis B Virus Quantitative', 'The Hepatitis B Virus (HBV) Quantitative Test is a blood test that measures the amount of HBV in a person\'s bloodstream. It is used to monitor the viral load in patients with chronic HBV infection and to determine the effectiveness of antiviral therapy', 16, 1),
(28, 'Hepatitis B virus DNA Genotyping', 'The Hepatitis B virus DNA genotyping test is a diagnostic test that can determine the genotype or genetic makeup of the Hepatitis B virus (HBV) in a patient\'s blood sample. This test can help clinicians in understanding the type and severity of the infection and can guide treatment decisions.', 16, 2),
(29, 'Hepatitis B virus (HBV) DNA drug resistance ', NULL, 16, 3),
(30, 'Hepatitis C Virus RNA Quantitative', NULL, 16, 4),
(31, 'Hepatitis C Virus Genotyping', NULL, 16, 5),
(32, 'Cytomegalovirus (CMV) PCR Qualitative', NULL, 16, 6),
(33, 'Cytomegalovirus (CMV) PCR Quantitative', NULL, 16, 7),
(34, 'α/β-Thalassemia Mutation', 'α/β-thalassemia is a genetic disorder that affects the production of hemoglobin in the blood. It is caused by mutations in the genes that are responsible for producing the alpha and beta globin proteins that make up hemoglobin.', 17, 1),
(35, 'HLA- B27 Genotyping', 'The HLA-B27 genotyping test is a diagnostic test that determines the presence or absence of the HLA-B27 gene in a person\'s DNA. The test is typically used to help diagnose certain autoimmune diseases such as ankylosing spondylitis, reactive arthritis, and psoriatic arthritis, as the HLA-B27 gene is strongly associated with these conditions.', 17, 2),
(36, 'Chimerism', NULL, 17, 3),
(37, 'Rh Factor Genotyping', NULL, 17, 4),
(38, 'Achondroplasia', NULL, 17, 5),
(39, 'Acute myeloid leukemia (AML) ', 'Acute Myeloid Leukemia (AML) is a type of cancer that affects the blood and bone marrow. AML testing typically involves a series of blood tests and a bone marrow biopsy to detect abnormal cells and evaluate the extent of the disease.', 19, 1),
(40, 'BCR-ABL qualitative/quantitative ', 'The BCR-ABL qualitative/quantitative test is a diagnostic test used to detect and monitor the presence of the BCR-ABL gene in patients with certain types of leukemia, such as chronic myeloid leukemia (CML) and some cases of acute lymphoblastic leukemia (ALL). The BCR-ABL gene is a fusion of two genes, BCR and ABL, and its presence is a hallmark of these types of leukemia.', 19, 2),
(41, 'PML-RARA qualitative ', NULL, 19, 3),
(42, 'JAK-2 Mutation Exon 12 & 14 ', NULL, 19, 4),
(43, 'FLT3 (FMS-like tyrosine kinase 3) Prognostic Marker for AM', NULL, 19, 5),
(44, 'BRCA1 and BRCA2 (Breast Cancer susceptibility genes 1 and 2) mutation detection', NULL, 19, 6),
(45, 'Screening of cancer hotspots (50 genes) ', NULL, 19, 7),
(46, 'HLA-A/B/DR typing', 'HLA (Human Leukocyte Antigen) typing is a genetic test that determines the specific HLA proteins present on the surface of your white blood cells.', 20, 1),
(47, 'HLA-B typing ', NULL, 20, 2),
(48, 'FNAC ( FINE NIDDLE ASPIRATION CYTOLOGY)', 'Fine Needle Aspiration Cytology (FNAC) is a diagnostic test used to obtain a sample of cells from a suspicious or abnormal lump or mass in the body', 18, 1),
(49, 'BIOPSY', NULL, 18, 2),
(50, 'TISSUE HISTOLOGY', NULL, 18, 3),
(51, 'MARKER TESTS', NULL, 18, 4),
(52, 'SMEAR STUDY', NULL, 18, 5),
(53, 'PANEL STUDY', NULL, 18, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` int(1) NOT NULL,
  `description` varchar(50) NOT NULL,
  `login_limit` int(10) NOT NULL,
  `expiry_date` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `level`, `description`, `login_limit`, `expiry_date`, `status`) VALUES
(1, 'Admin', '123', 1, 'null', 1, '0000-00-00', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_detail`
--
ALTER TABLE `package_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`testid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `package_detail`
--
ALTER TABLE `package_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `testid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
