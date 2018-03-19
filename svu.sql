--
-- Database: `svu`
--

-- --------------------------------------------------------

--
-- Table structure for table `hod_received_data`
--

CREATE TABLE `hod_received_data` (
  `id` int(11) NOT NULL,
  `received_file` text NOT NULL,
  `received_description` text NOT NULL,
  `sender_firstname` varchar(30) NOT NULL,
  `sender_lastname` varchar(30) NOT NULL,
  `sender_regno` varchar(30) NOT NULL,
  `sender_mobile` varchar(30) NOT NULL,
  `sender_email` varchar(30) NOT NULL,
  `sender_username` varchar(30) NOT NULL,
  `sender_dob` varchar(30) NOT NULL,
  `sending_time` varchar(30) NOT NULL,
  `send_principal` varchar(2) NOT NULL,
  `approved` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod_received_data`
--

INSERT INTO `hod_received_data` (`id`, `received_file`, `received_description`, `sender_firstname`, `sender_lastname`, `sender_regno`, `sender_mobile`, `sender_email`, `sender_username`, `sender_dob`, `sending_time`, `send_principal`, `approved`) VALUES
(5, 'Bruce Lee Drawing iPhone 6 Plus HD Wallpaper.jpg', 'Bruce Lee is one the Legends. This the Description of this File.', 'Dongri Mohammed', 'Jawad', '18JD0001', '9494734613', 'jawadlee92@gmail.com', 'JawadLee001', '22/09/1996', '16/03/18 05:13:11', '1', 'Approved'),
(6, 'Cute Siberian Tiger Playing In Snow iPhone 5 Wallpaper.jpg', 'This is Me. This is the Description of the File. Good Luck!!', 'Dongri Mohammed', 'Jawad', '18JD0001', '9494734613', 'jawadlee92@gmail.com', 'JawadLee001', '22/09/1996', '16/03/18 05:14:23', '1', 'Not Approved'),
(7, 'VC_RED.cab', 'This is not a Image File This is a rar File which means not a Image FIle. Lets Check!!!', 'Dongri Mohammed', 'Jawad', '18JD0001', '9494734613', 'jawadlee92@gmail.com', 'JawadLee001', '22/09/1996', '17/03/18 05:08:55', '1', 'Not Approved'),
(8, 'Mohammed Jawad Resume.docx', 'This is Mohammed Jawad Resume.', 'Dongri Mohammed', 'Jawad', '18JD0001', '9494734613', 'jawadlee92@gmail.com', 'JawadLee001', '22/09/1996', '17/03/18 05:12:40', '1', 'Not Approved'),
(9, 'Maqsood Al Hasan Nath Moula Ya Salli.txt', 'This is a Text File. Lets See It works or not.', 'Mohammed', 'Jawad', '18JD002', '9494734613', 'jawadlee93@gmail.com', 'JawadLee002', '22/09/1996', '17/03/18 05:20:38', '1', 'Approved'),
(10, 'bitmoji-20171226120540.png', 'How I am I Looking Bro??', 'Mohammed', 'Jawad', '18JD002', '9494734613', 'jawadlee93@gmail.com', 'JawadLee002', '22/09/1996', '17/03/18 05:24:54', '1', 'Not Approved'),
(11, 'princess.jpeg', 'This is my Princess Buddy.', 'Mohammed', 'Jawad', '18JD002', '9494734613', 'jawadlee93@gmail.com', 'JawadLee002', '22/09/1996', '17/03/18 05:29:11', '1', 'Not Approved'),
(12, 'Demi Lovato iPhone Wallpaper.jpg', 'Sir ! How is looking.... Ek Dum Pataka.', 'Mohammed', 'Jawad', '18JD002', '9494734613', 'jawadlee93@gmail.com', 'JawadLee002', '22/09/1996', '17/03/18 05:36:51', '1', 'Not Approved'),
(14, 'Iron Man Mask iPhone 5 Wallpaper .jpg', 'This is a mask of Iron Man.', 'Mohammed', 'Jawad', '18JD002', '9494734613', 'jawadlee93@gmail.com', 'JawadLee002', '22/09/1996', '17/03/18 09:27:12', '1', 'Approved'),
(15, '2015 Happy New Year Champagne Celebration iPhone 6 Wallpaper.jpg', 'Happy New Year!!!', 'Mohammed', 'Jawad', '18JD002', '9494734613', 'jawadlee93@gmail.com', 'JawadLee002', '22/09/1996', '18/03/18 06:03:56', '1', 'Approved'),
(16, '318777-gautam-gulati.jpg', 'Gowtam Gulati The Winner of the Bigg Boss Season 7.', 'Mohammed', 'Jawad', '18JD002', '9494734613', 'jawadlee93@gmail.com', 'JawadLee002', '22/09/1996', '18/03/18 06:43:54', '1', 'Approved'),
(17, 'kitten holiday iPhone 5 Wallpapers HD.jpg', 'Cute Kitten Which i will Wanna Brought in Future.', 'Mohammed', 'Jawad', '18JD002', '9494734613', 'jawadlee93@gmail.com', 'JawadLee002', '22/09/1996', '18/03/18 07:41:51', '1', 'Approved'),
(18, 'BMW I8 Back Silver iPhone 6 Plus HD Wallpaper.jpg', 'BMW Car', 'Mohammed', 'Jawad', '18JD002', '9494734613', 'jawadlee93@gmail.com', 'JawadLee002', '22/09/1996', '18/03/18 08:29:50', '1', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `reg_no` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `first_name`, `last_name`, `reg_no`, `mobile`, `email`, `username`, `password`, `date`) VALUES
(1, 'Dongri Mohammed', 'Jawad', '18JD0001', '9494734613', 'jawadlee92@gmail.com', 'JawadLee001', 'Jawad Lee', '22/09/1996'),
(3, 'Mohammed', 'Jawad', '18JD002', '9494734613', 'jawadlee93@gmail.com', 'JawadLee002', 'Jawad Lee', '22/09/1996');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hod_received_data`
--
ALTER TABLE `hod_received_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `email_2` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hod_received_data`
--
ALTER TABLE `hod_received_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
