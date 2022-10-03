-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2022 at 04:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `tahun` year(4) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `cover` varchar(50) DEFAULT NULL,
  `sinopsis` varchar(255) NOT NULL,
  `stok` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `penulis`, `tahun`, `judul`, `kota`, `penerbit`, `cover`, `sinopsis`, `stok`) VALUES
(1, 'Isadora McCraine', 2010, 'The King and Four Queens', 'Longtang', 'Fiveclub', NULL, 'strategize one-to-one e-services', 1),
(2, 'Traver Sorey', 1992, 'Stardust', 'Tyringe', 'Yoveo', NULL, 'empower visionary experiences', 2),
(3, 'Teresina Burlingham', 2001, 'Harry and Tonto', 'Talu', 'Rhynoodle', NULL, 'enhance 24/7 schemas', 3),
(4, 'Brewster Fishlock', 1990, 'Quills', 'Río Grande', 'Dabshots', NULL, 'unleash vertical vortals', 4),
(5, 'Jacqui Human', 2010, 'Lana Turner... a Daughter\'s Memoir', 'Nong Bua', 'Thoughtsphere', NULL, 'monetize 24/365 models', 5),
(6, 'Opal Storks', 1996, 'Stanley and Livingstone', 'Fristad', 'Tambee', NULL, 'transform extensible synergies', 6),
(7, 'Pattie Roxbee', 2001, 'Eat', 'Soca', 'Browseblab', NULL, 'productize e-business methodologies', 7),
(8, 'Walt Schiersch', 1993, 'Stiff Upper Lips', 'Beishidian', 'Reallinks', NULL, 'productize mission-critical deliverables', 8),
(9, 'Carmine Ingleton', 1998, 'Lo', 'Magok', 'Mycat', NULL, 'incubate collaborative web services', 9),
(10, 'Kara Gaber', 2007, 'Drum', 'Jebba', 'Browsezoom', NULL, 'facilitate efficient schemas', 10),
(11, 'Carine Leisk', 2000, 'Heart and Souls', 'Wangchang', 'Tagcat', NULL, 'morph proactive methodologies', 11),
(12, 'Rosabel Thirkettle', 2009, 'Breath (Soom)', 'Qamdo', 'Katz', NULL, 'integrate e-business systems', 12),
(13, 'Koressa Grennan', 1985, 'Gnome-Mobile, The', 'Senanga', 'Cogilith', NULL, 'transform holistic metrics', 13),
(14, 'Nicoli Pinock', 2011, 'Colonel Chabert, Le', 'Rada Tilly', 'Quatz', NULL, 'whiteboard bleeding-edge applications', 14),
(15, 'Vinson Pheazey', 2005, 'Cross My Heart', 'Kubangkondanglapangan', 'Skinder', NULL, 'brand holistic platforms', 15),
(16, 'Liuka Fairlamb', 1989, 'Friday the 13th Part 3: 3D', 'Borodino', 'Photojam', NULL, 'enable cross-media e-services', 16),
(17, 'Heath Novotna', 2012, 'Panama Hattie', 'Fundación', 'InnoZ', NULL, 'enable leading-edge e-business', 17),
(18, 'Clyve Coping', 1996, 'Quiet, The', 'Ryjewo', 'Skippad', NULL, 'syndicate one-to-one e-tailers', 18),
(19, 'Garald Lamplugh', 1993, 'Forget me not', 'Divnomorskoye', 'Topdrive', NULL, 'harness vertical web services', 19),
(20, 'Rachael Wife', 2007, 'Johns', 'Sotnikovskoye', 'Rhybox', NULL, 'implement synergistic web services', 20),
(21, 'Harwilll Brimmicombe', 2000, 'Zeder', 'La Estrella', 'Yakitri', NULL, 'envisioneer front-end infrastructures', 21),
(22, 'Nicko Thorouggood', 2011, 'Love You You', 'Rancharia', 'Youtags', NULL, 'maximize proactive e-commerce', 22),
(23, 'Malcolm Haverson', 2002, 'Yeh Jawaani Hai Deewani', 'Xiugu', 'Browseblab', NULL, 'cultivate global e-commerce', 23),
(24, 'Berke Itzhaiek', 1985, 'Real Genius', 'Narva', 'Browsezoom', NULL, 'synergize impactful users', 24),
(25, 'Janette Stanbra', 1966, 'Craigslist Joe', 'Räpina', 'Bubblemix', NULL, 'mesh collaborative action-items', 25),
(26, 'Lisetta Tench', 1996, 'Crime Zone', 'Paço', 'Wikizz', NULL, 'generate cross-platform technologies', 26),
(27, 'Latashia Dockrey', 2004, 'What Price Glory', 'Viloco', 'Talane', NULL, 'orchestrate value-added interfaces', 27),
(28, 'Misha Paslow', 2005, 'Madonna of the Seven Moons', 'Ueki', 'Trupe', NULL, 'recontextualize leading-edge portals', 28),
(29, 'Sullivan Glazzard', 1996, 'Hawking', 'São Roque', 'Mita', NULL, 'integrate intuitive networks', 29),
(30, 'Raphaela Haborn', 2002, 'On the Double ', 'Södertälje', 'Trunyx', NULL, 'syndicate cross-platform solutions', 30),
(31, 'Rosabelle Benda', 1985, 'Getaway, The', 'Harbin', 'Rhynoodle', NULL, 'target B2B e-business', 31),
(32, 'Lottie Goard', 1992, 'Land Without Bread (Hurdes, tierra sin pan, Las)', 'Constance', 'Feedmix', NULL, 'revolutionize integrated infomediaries', 32),
(33, 'Dorrie Sircombe', 1999, 'April Showers', 'Guernica', 'Jabberbean', NULL, 'matrix value-added solutions', 33),
(34, 'Timotheus Brambill', 2006, 'Black Camel, The (Charlie Chan in the Black Camel)', 'Changzheng', 'Kare', NULL, 'optimize mission-critical partnerships', 34),
(35, 'Crissie Wycliff', 1994, 'You\'re a Big Boy Now', 'Kuala Lumpur', 'Meevee', NULL, 'monetize granular platforms', 35),
(36, 'Blithe Troy', 1989, 'On the Line', 'Jāsim', 'Tazz', NULL, 'syndicate robust web-readiness', 36),
(37, 'Ulrick Baress', 2005, 'Outbreak', 'Llauta', 'Jayo', NULL, 'orchestrate real-time experiences', 37),
(38, 'Christophorus Sodory', 1992, 'City of the Living Dead (a.k.a. Gates of Hell, The', 'Semboropasar', 'Twimbo', NULL, 'synergize visionary vortals', 38),
(39, 'Ezmeralda Duce', 2008, 'Sexy Nights of the Living Dead', 'Peredovaya', 'Yozio', NULL, 'enable wireless infrastructures', 39),
(40, 'Elsworth Kilalea', 1998, 'Breaking Wind', 'Huangtugang', 'Zoombox', NULL, 'synthesize one-to-one mindshare', 40),
(41, 'Tatiania Grabert', 2006, 'Maze, The', 'Dorp Tera Kora', 'Oyoyo', NULL, 'enable efficient e-business', 41),
(42, 'Tisha Grishakin', 1995, 'Tales from the Script', 'Kedian', 'Youspan', NULL, 'seize mission-critical supply-chains', 42),
(43, 'Dora Dulson', 1987, 'Age of Innocence, The', 'Farafenni', 'Twitterbeat', NULL, 'incentivize killer vortals', 43),
(44, 'Lancelot Lyes', 1993, 'Haunted Palace, The', 'Jinping', 'Thoughtstorm', NULL, 'reintermediate 24/7 experiences', 44),
(45, 'Patrice Ockenden', 2007, 'Brother\'s Keeper', 'Supu', 'Eare', NULL, 'brand visionary e-tailers', 45),
(46, 'Ave Kolodziej', 2012, 'Doubt', 'Xichangmen', 'Skilith', NULL, 'benchmark ubiquitous convergence', 46),
(47, 'Fred McNysche', 2011, 'Evilenko', 'Sedayulawas', 'Jamia', NULL, 'engage 24/7 channels', 47),
(48, 'Stormie Kleynermans', 1999, 'Save the Green Planet! (Jigureul jikyeora!)', 'Wāling', 'Edgeify', NULL, 'monetize e-business initiatives', 48),
(49, 'Frances Hauxley', 2001, 'Undefeated, The', 'Handegate', 'Dynabox', NULL, 'synergize clicks-and-mortar eyeballs', 49),
(50, 'Gabbie Wisbey', 2010, 'Cabeza de Vaca', 'London', 'Flipstorm', NULL, 'repurpose extensible schemas', 50),
(51, 'Carolin Skilling', 2005, 'Miss Farkku-Suomi', 'Makoba', 'Dabshots', NULL, 'repurpose customized supply-chains', 51),
(52, 'Ronny Kretschmer', 2010, 'Equinox', 'Stockholm', 'Teklist', NULL, 'exploit enterprise synergies', 52),
(53, 'Sandye Feaveryear', 2004, 'Life Less Ordinary, A', 'Xilai', 'Kazu', NULL, 'expedite bleeding-edge networks', 53),
(54, 'Duffy Twaits', 2003, 'Thumbelina', 'Gaoqiao', 'Mydo', NULL, 'morph visionary experiences', 54),
(55, 'Mill Kwiek', 1990, 'Robin Hood: Men in Tights', 'Gradići', 'Chatterpoint', NULL, 'grow customized solutions', 55),
(56, 'Darcy Gniewosz', 1999, 'After the Sunset', 'Saginaw', 'Meemm', NULL, 'brand intuitive technologies', 56),
(57, 'Myrtia Garnsey', 2006, 'Corsican File, The (L\'enquête corse)', 'Guanay', 'Quimba', NULL, 'brand leading-edge e-commerce', 57),
(58, 'Pauline Lorimer', 1985, 'Goldfish Memory', 'Rozsypne', 'Skipstorm', NULL, 'seize killer deliverables', 58),
(59, 'Michale Trustey', 2010, 'Give \'em Hell, Malone', 'Cikabuyutan Barat', 'Browseblab', NULL, 'disintermediate e-business e-business', 59),
(60, 'Gary Sexcey', 2007, 'Control', 'Agalteca', 'Meevee', NULL, 'redefine bleeding-edge synergies', 60),
(61, 'Doralin Le Brun', 1948, 'RKO 281', 'Regla', 'Reallinks', NULL, 'monetize extensible eyeballs', 61),
(62, 'Jana Geggus', 1996, 'Lulu in Berlin', 'Consolación del Sur', 'Flashdog', NULL, 'cultivate extensible applications', 62),
(63, 'Margi Boles', 2003, 'Zeitgeist: Moving Forward', 'Paizhou', 'Yakijo', NULL, 'utilize back-end portals', 63),
(64, 'Adelle Soan', 1994, 'Colourful (Karafuru)', 'Tunggulsari', 'Youfeed', NULL, 'cultivate strategic portals', 64),
(65, 'Harmon Pawelek', 1992, 'It Could Happen to You', 'Mahdishahr', 'Zoonoodle', NULL, 'engage frictionless action-items', 65),
(66, 'Zulema Rosborough', 2009, 'Hot Shots! Part Deux', 'Guay', 'Oyonder', NULL, 'envisioneer back-end experiences', 66),
(67, 'Stesha Leithgoe', 2004, 'A Patriotic Man', 'Zabierzów', 'Photobean', NULL, 'facilitate B2B metrics', 67),
(68, 'Alonzo Dummer', 1992, 'Men in White', 'Mandapajaya', 'Voolia', NULL, 'empower visionary channels', 68),
(69, 'Lynnett Bulcroft', 1998, 'Young Again', 'Daphu', 'Feedspan', NULL, 'monetize robust communities', 69),
(70, 'Wilton Spread', 1996, 'Fragments of an Alms-Film (Fragmentos de um Filme-', 'Cuijiamatou', 'Riffpedia', NULL, 'seize 24/7 e-business', 70),
(71, 'Ingunna Tyas', 2009, 'The Hire: Hostage', 'Chikola', 'Lazzy', NULL, 'target impactful e-markets', 71),
(72, 'Walliw Halms', 1994, 'In the Land of Blood and Honey', 'Karangasem', 'Dazzlesphere', NULL, 'brand strategic e-services', 72),
(73, 'Anabel Sunman', 2004, 'Flu Bird', 'Dasi', 'BlogXS', NULL, 'transform seamless convergence', 73),
(74, 'Hadria Poulglais', 1992, 'Vampire Hunter D: Bloodlust (Banpaia hantâ D)', 'Yelizovo', 'Skipstorm', NULL, 'generate customized schemas', 74),
(75, 'Arda Elbourn', 2001, 'The Land Before Time XIII: The Wisdom of Friends', 'Działoszyce', 'Trudoo', NULL, 'orchestrate dot-com vortals', 75),
(76, 'Akim Itzkovich', 2009, 'Dane Cook: Vicious Circle', 'Fredrikstad', 'Camido', NULL, 'incubate interactive web-readiness', 76),
(77, 'Nolie Gounod', 2011, 'Disney Sing Along Songs: Under the Sea', 'Kalawit', 'Tagtune', NULL, 'maximize global supply-chains', 77),
(78, 'Janith Wilmott', 2000, 'Dirty Girl', 'Bayeux', 'Meejo', NULL, 'cultivate granular communities', 78),
(79, 'Elana Pendall', 2007, 'DNA', 'La Quebrada', 'Pixope', NULL, 'incentivize user-centric users', 79),
(80, 'Morly Pengilly', 2012, 'Runaway', 'Frederico Westphalen', 'Meedoo', NULL, 'strategize value-added mindshare', 80),
(81, 'Rab Teanby', 1990, 'Dear Diary (Caro Diario)', 'Sake', 'Demivee', NULL, 'repurpose synergistic interfaces', 81),
(82, 'Gerty Brompton', 2004, 'Noise', 'Zhukovka', 'Wordpedia', NULL, 'iterate distributed eyeballs', 82),
(83, 'Gwenora Besse', 1994, 'Snow Queen, The (Lumikuningatar)', 'Thị Trấn Ngải Giao', 'Topiczoom', NULL, 'aggregate plug-and-play partnerships', 83),
(84, 'Yale Jakaway', 1995, 'Beijing Taxi', 'Cergy-Pontoise', 'Jaxspan', NULL, 'aggregate sticky schemas', 84),
(85, 'Odell Ivancevic', 1998, 'Go Now', 'Sztum', 'Rhynoodle', NULL, 'optimize back-end eyeballs', 85),
(86, 'Harald Feaver', 2009, 'Hellraiser: Inferno', 'Kallar Kahār', 'Photofeed', NULL, 'deliver out-of-the-box solutions', 86),
(87, 'Annemarie Leathem', 1999, 'Sunset Limited, The', 'Ramada', 'Jazzy', NULL, 'drive dot-com synergies', 87),
(88, 'Floris Hechlin', 1992, 'Dracula (Bram Stoker\'s Dracula)', 'Telengsari', 'Leenti', NULL, 'engage synergistic content', 88),
(89, 'Durant Tiery', 2003, 'Fingersmith', 'Arkalyk', 'Minyx', NULL, 'synergize killer schemas', 89),
(90, 'Flss Episcopi', 2011, 'Godzilla vs. The Sea Monster (Gojira-Ebira-Mosura:', 'Kebon', 'Leexo', NULL, 'reinvent B2C systems', 90),
(91, 'Janina Underwood', 2001, 'Eraserhead', 'Berlín', 'Kazio', NULL, 'deliver strategic methodologies', 91),
(92, 'Cyndy Frankcom', 2003, 'Colors of the Mountain, The (Los colores de la mon', 'Tsimlyansk', 'Camido', NULL, 'engage sexy content', 92),
(93, 'Camel Gowry', 1996, 'Home Alone 3', 'Yushu', 'Edgeblab', NULL, 'benchmark killer communities', 93),
(94, 'Leshia Turri', 1985, 'The Confessions of Bernhard Goetz', 'Louny', 'JumpXS', NULL, 'synergize visionary applications', 94),
(95, 'Minette Drackford', 2002, 'Villain, The', 'Perivólia', 'Mynte', NULL, 'target global infrastructures', 95),
(96, 'Rowney Karpeev', 2005, 'African Cats', 'Cibalieur', 'Zoonder', NULL, 'architect user-centric platforms', 96),
(97, 'Pearl Wardley', 2006, 'Endgame', 'Kamensk-Ural’skiy', 'Skyble', NULL, 'revolutionize value-added models', 97),
(98, 'Ron Finding', 2001, 'Truly, Madly, Deeply', 'Hino', 'Plambee', NULL, 'leverage real-time initiatives', 98),
(99, 'Mareah Pechard', 2004, 'Stuck on You', 'Banjar Paangkelod', 'Bluezoom', NULL, 'recontextualize real-time niches', 99),
(100, 'Kristofor Hellard', 2005, 'Best of the Best 3: No Turning Back', 'Choco', 'Wordtune', NULL, 'empower holistic interfaces', 100);

-- --------------------------------------------------------

--
-- Table structure for table `detail_peminjaman`
--

CREATE TABLE `detail_peminjaman` (
  `id_detail_peminjaman` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `kuantitas` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_peminjaman`
--

INSERT INTO `detail_peminjaman` (`id_detail_peminjaman`, `id_buku`, `id_peminjaman`, `kuantitas`) VALUES
(1, 1, 1000123, 1),
(3, 3, 1000124, 1),
(5, 8, 1000126, 1);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pengembalian`
--

CREATE TABLE `detail_pengembalian` (
  `id_detail_pengembalian` int(11) NOT NULL,
  `id_pengembalian` int(11) NOT NULL,
  `id_status_buku` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'IX'),
(2, 'X'),
(3, 'XI');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_pengembalian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_siswa`, `id_petugas`, `tgl_peminjaman`, `tgl_pengembalian`) VALUES
(1000123, 2000121, 149300001, '2022-09-29', '2022-10-03'),
(1000124, 2000122, 149300001, '2022-09-29', '2022-10-03'),
(1000126, 2000123, 149300001, '2022-10-03', '2022-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `nip` int(11) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`nip`, `nama_petugas`, `jenis_kelamin`, `alamat`, `password`) VALUES
(149300001, 'Thoriq', 'L', 'Kediri', 'staff01'),
(149300002, 'Zacky', 'L', 'Malang', 'staff02');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_siswa`, `jenis_kelamin`, `alamat`, `id_kelas`) VALUES
(2000121, 'Jimmy', 'L', 'Gresik', 1),
(2000122, 'Rifqi', 'L', 'Malang', 1),
(2000123, 'Yovie', 'L', 'Malang', 2),
(2000124, 'Prasada', 'L', 'Pasuruan', 3),
(2000125, 'Candra', 'L', 'Pasuruan', 3),
(2000126, 'Zacky', 'L', 'Malang', 1);

-- --------------------------------------------------------

--
-- Table structure for table `status_pengembalian_buku`
--

CREATE TABLE `status_pengembalian_buku` (
  `id_status_buku` int(11) NOT NULL,
  `status_buku` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_pengembalian_buku`
--

INSERT INTO `status_pengembalian_buku` (`id_status_buku`, `status_buku`) VALUES
(1, 'Ada'),
(2, 'Hilang');

-- --------------------------------------------------------

--
-- Table structure for table `super_user`
--

CREATE TABLE `super_user` (
  `id_user` int(11) NOT NULL,
  `role` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `super_user`
--

INSERT INTO `super_user` (`id_user`, `role`, `username`, `password`) VALUES
(1, 'admin', 'admin123', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD PRIMARY KEY (`id_detail_peminjaman`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_peminjaman` (`id_peminjaman`);

--
-- Indexes for table `detail_pengembalian`
--
ALTER TABLE `detail_pengembalian`
  ADD PRIMARY KEY (`id_detail_pengembalian`),
  ADD KEY `id_status_buku` (`id_status_buku`),
  ADD KEY `id_pengembalian` (`id_pengembalian`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`),
  ADD KEY `id_peminjaman` (`id_peminjaman`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `status_pengembalian_buku`
--
ALTER TABLE `status_pengembalian_buku`
  ADD PRIMARY KEY (`id_status_buku`);

--
-- Indexes for table `super_user`
--
ALTER TABLE `super_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  MODIFY `id_detail_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detail_pengembalian`
--
ALTER TABLE `detail_pengembalian`
  MODIFY `id_detail_pengembalian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_pengembalian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `nip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149300003;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `nis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20001988;

--
-- AUTO_INCREMENT for table `status_pengembalian_buku`
--
ALTER TABLE `status_pengembalian_buku`
  MODIFY `id_status_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `super_user`
--
ALTER TABLE `super_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD CONSTRAINT `detail_peminjaman_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `detail_peminjaman_ibfk_2` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman` (`id_peminjaman`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`nip`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`nis`);

--
-- Constraints for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`id_pengembalian`) REFERENCES `detail_pengembalian` (`id_pengembalian`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
