-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2023 at 03:30 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayaz2459_hems-institute`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int NOT NULL,
  `nama_admin` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `username_admin` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password_admin` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama_admin`, `username_admin`, `password_admin`) VALUES
(1, 'Firdaus', 'admin', '$2y$10$B4cbXyboqZyvchzsRH14OeuncF2g5bdBnoWtFyA78jc8b3m5ivKHm'),
(3, 'none', 'admin2', '$2y$10$RMUIpcoNf6SsQ6wKmgNKj.KbUyqy04xuIxtaEJ8KA9mLcWzWMX2dW');

-- --------------------------------------------------------

--
-- Table structure for table `tb_armada`
--

CREATE TABLE `tb_armada` (
  `id` int NOT NULL,
  `id_kategori` int NOT NULL,
  `armada` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `isi` text COLLATE utf8mb4_general_ci,
  `tgl` date DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_armada`
--

INSERT INTO `tb_armada` (`id`, `id_kategori`, `armada`, `slug`, `isi`, `tgl`, `gambar`) VALUES
(6, 1, 'Bahasa Inggris', 'Bahasa-Inggris', '<p>Program pelatihan bahasa inggris bertujuan agar peserta didik dapat berbicara dengan lancar dan percaya diri ketika bepergian ke luar negeri atau melanjutkan pendidikan ke luar negeri. Peserta didik dapat berkomunikasi secara bebas tanpa takut salah ketika berinteraksi dengan warga negara asing. Selain itu peserta didik pelatihan bahasa Inggris dapat berinteraksi, secara lisan dan tulisan, khususnya dalam hal pekerjaan. Misalnya, menulis email dan mengikuti rapat dalam bahasa Inggris.<br>Pada program pelatihan ini kami melatih peserta didik dari SD, SMP, SMA/SMK, Mahasiswa, maupun yang sudah bekerja. Pelatihan ini ditekankan kepada melatih peserta didik untuk berkomunikasi dalam bahasa Inggris &nbsp;dengan lancar, tepat dan percaya diri.</p>\r\n<p><br>Peluang Kerja :<br>1. &nbsp; &nbsp;Guru<br>2. &nbsp; &nbsp;Organisasi dan Lembaga Internasional<br>3. &nbsp; &nbsp;Diplomat<br>4. &nbsp; &nbsp;Tour Guide<br>5. &nbsp; &nbsp;Content Writer Bahasa Inggris<br>6. &nbsp; &nbsp;Public Relations<br>7. &nbsp; &nbsp;Interpreter</p>\r\n<p>Program Pelatihan Bahasa Inggris :&nbsp;<br>&bull; &nbsp; &nbsp;English for kids<br>&bull; &nbsp; &nbsp;English for smart kids&nbsp;<br>&bull; &nbsp; &nbsp;English for teen<br>&bull; &nbsp; &nbsp;Basic<br>&bull; &nbsp; &nbsp;Intermediate<br>&bull; &nbsp; &nbsp;Advanced</p>\r\n<p>Biaya Pelatihan : <s>1.200.000</s><br>720.000&nbsp;</p>', '2023-02-15', 'exchange-of-ideas-gd1bc7ab61_1280.jpg'),
(44, 1, 'Bahasa Mandarin', 'Bahasa-Mandarin', '<p>Mandarin adalah salah satu bahasa asing yang paling banyak digunakan di dunia setelah bahasa Inggris. Setidaknya terdapat 1/5 populasi dunia atau sekitar 1.3 milyar penduduk dunia menggunakan bahasa Mandarin untuk berkomunikasi dengan satu sama lain. Belajar bahasa Mandarin dapat memberikan banyak keuntungan, mulai dari kemudahan membangun jaringan, memperluas kesempatan kerja hingga membuka wawasan budaya, memperoleh peluang bisnis, traveling, hingga melanjutkan studi.</p>\r\n<p>Pada program pelatihan ini kami melatih peserta didik dari SD, SMP, SMA/SMK, Mahasiswa, maupun yang sudah bekerja. Pelatihan ini ditekankan kepada melatih peserta didik untuk berkomunikasi dalam bahasa mandarin dengan lancar, tepat dan percaya diri.</p>\r\n<p>Peluang Kerja :<br>1. &nbsp; &nbsp;Penerjemah<br>2. &nbsp; &nbsp;Guru Bahasa<br>3. &nbsp; &nbsp;Editor<br>4. &nbsp; &nbsp; Penulis<br>5. &nbsp; &nbsp;Penyiar Berita<br>6. &nbsp; &nbsp;Tour Guide<br>7. &nbsp; &nbsp;Jurnalis<br>8. &nbsp; &nbsp;Karyawan Di Perusahaan Asing<br>9. &nbsp; &nbsp;Content Creator<br>10. &nbsp; &nbsp;Penyanyi</p>\r\n<p>Program Pelatihan Bahasa Mandarin :<br>&bull; &nbsp; &nbsp;Tingkat dasar<br>&bull; &nbsp; &nbsp;Tingkat menengah<br>&bull; &nbsp; &nbsp;Tingkat mahir</p>\r\n<p>Biaya Pelatihan : <s>1.200.000</s><br>720.000&nbsp;</p>', '2023-02-15', 'exchange-of-ideas-gd1bc7ab61_1280.jpg'),
(45, 1, 'Bahasa Korea', 'Bahasa-Korea', '<p>Menguasai bahasa asing adalah keahlian yang sangat berguna untuk mengembangkan diri. Selain bahasa Inggris, terdapat bahasa lainnya yang dipelajari juga bisa membantu kamu bersaing di dunia profesional, salah satunya bahasa Korea. Seiring dengan meningkatnya gelombang popularitas Korea, maka minat untuk belajar bahasa Korea juga semakin tinggi. Belajar bahasa memang tidak mudah, namun dengan kemauan dan ketekunan dalam belajar dan berlatih, belajar bahasa Korea tidak akan sesulit yang dibayangkan. Adapun manfaat belajar bahasa korea antara lain : &nbsp;Mendapatkan Peluang Beasiswa, Peluang Kerja dan Bisnis, Membantu Saat Travelling ke Korea, Memberi Kesempatan untuk Memahami Budaya Baru.</p>\r\n<p>Pada program pelatihan ini kami melatih peserta didik dari SD, SMP, SMA/SMK, Mahasiswa dan Karyawan. Pelatihan ini ditekankan kepada melatih peserta didik untuk berkomunikasi dalam bahasa korea dengan lancar, tepat dan percaya diri.</p>\r\n<p>Peluang Kerja :<br>1. &nbsp; &nbsp;Penerjemah Bahasa Korea<br>2. &nbsp; &nbsp;Penulis Buku<br>3. &nbsp; &nbsp;Tour Guide<br>4. &nbsp; &nbsp;Jurnalis<br>5. &nbsp; &nbsp;Tenaga Pengajar<br>6. &nbsp; &nbsp;Karyawan Perusahaan Multinasional Korea<br>7. &nbsp; &nbsp;Content Creator<br>8. &nbsp; &nbsp;Instansi Pemerintah<br>9. &nbsp; &nbsp; Konsultan<br>10. &nbsp; &nbsp; Pengusaha</p>\r\n<p>Program Pelatihan Bahasa Korea :<br>&bull; &nbsp; &nbsp;Tingkat dasar<br>&bull; &nbsp; &nbsp;Tingkat menengah<br>&bull; &nbsp; &nbsp;Tingkat mahir</p>\r\n<p>Biaya Pelatihan : <s>1.200.000</s><br>750.000</p>', '2023-02-15', 'exchange-of-ideas-gd1bc7ab61_1280.jpg'),
(46, 1, 'Bahasa Jepang', 'Bahasa-Jepang', '<p>Bahasa adalah bagian terpenting dalam sebuah negara. Melalui bahasa, suatu negara dapat menjelaskan posisi dan identitas kebudayaannya. Hal ini juga dapat menjadi indikator bagi majunya peradaban negara tersebut. Tidak terkecuali dengan bahasa Jepang. Banyak manfaat yang bisa di dapatkan ketika mempelajari bahasa Jepang. Selain memahami kebudayaan Jepang, juga akan memahami lebih banyak eksotisme Jepang, memiliki akses untuk belajar dan mendapatkan beasiswa ke Jepang, memudahkan ketika traveling ke Jepang, dan tentunya berkaitan dengan akses pekerjaan yang lebih luas.<br>Pelatihan Bahasa Jepang ini ditekankan kepada melatih peserta didik untuk berkomunikasi dalam bahasa Jepang dengan lancar, tepat dan percaya diri dan mempelajari budaya Jepang.</p>\r\n<p>Peluang Kerja :<br>1. &nbsp; &nbsp;Interpreter bahasa Jepang<br>2. &nbsp; &nbsp;Tour guide<br>3. &nbsp; &nbsp;Pengajar atau dosen<br>4. &nbsp; &nbsp;Editor<br>5. &nbsp; &nbsp;Penulis<br>6. &nbsp; &nbsp;Perusahaan Jepang</p>\r\n<p>Program Pelatihan Bahasa Jepang :<br>&bull; &nbsp; &nbsp;Moji Kiso (huruf)<br>&bull; &nbsp; &nbsp;Sho Kyuu (dasar)<br>&bull; &nbsp; &nbsp;Chuu Kyuu (menengah)</p>\r\n<p>Biaya Pelatihan : <s>1.200.000</s><br>720.000&nbsp;</p>', '2023-02-15', 'exchange-of-ideas-gd1bc7ab61_1280.jpg'),
(47, 1, 'Bahasa Arab', 'Bahasa-Arab', '<p>Bahasa Arab merupakan kebutuhan yang penting, karena ia telah menjadi bahasa agama, bahasa komunikasi resmi antar bangsa. Bahasa Arab juga mempunyai keistimewaan, karena bahasa Arab menjadi bahasa Al-Qur&rsquo;an. Dengan memahami bahasa Arab maka dapat mengerti isi kitab suci Al-Qur&rsquo;an, pedoman orang Islam. Keunggulan bahasa arab &nbsp;tidak &nbsp;hanya &nbsp;terletak &nbsp;sebagai &nbsp;bahasa &nbsp;agama, akan &nbsp;tetapi &nbsp;bahasa &nbsp;arab mempunyai keistimewaan dalam segi ilmu kebahasaannya. Dengan &nbsp; mengkaji ilmu kebahasaannya akan dapat menikmati keindahan tata bahasa Al-Qur&rsquo;an yang merupakan unsur kemukjizatan Al-Qur&rsquo;an.</p>\r\n<p>Pada program pelatihan ini kami melatih peserta didik dari SD, SMP, SMA/SMK, dan Mahasiswa. Pelatihan ini ditekankan kepada melatih peserta didik untuk berkomunikasi dalam bahasa Arab dengan lancar, tepat dan percaya diri.</p>\r\n<p>Peluang Kerja :<br>1. &nbsp; &nbsp;Penerjemah<br>2. &nbsp; &nbsp;Interpreter<br>3. &nbsp; &nbsp;Sastrawan<br>4. &nbsp; &nbsp;Jurnalis<br>5. &nbsp; &nbsp;Content writer<br>6. &nbsp; &nbsp;Lembaga pemerintahan<br>7. &nbsp; &nbsp;Peneliti budaya<br>8. &nbsp; &nbsp;Tour guide<br>9. &nbsp; &nbsp;Penulis<br>10. &nbsp; &nbsp;Tenaga pendidik<br>11. &nbsp; &nbsp;Lembaga asing</p>\r\n<p>Program Pelatihan Bahasa Arab :<br>&bull; &nbsp; &nbsp;Tingkat dasar<br>&bull; &nbsp; &nbsp;Tingkat menengah<br>&bull; &nbsp; &nbsp;Tingkat mahir</p>\r\n<p>Biaya Pelatihan : <s>1.200.000</s><br>720.000&nbsp;</p>', '2023-02-15', 'exchange-of-ideas-gd1bc7ab61_1280.jpg'),
(48, 7, 'Microsoft Office', 'Microsoft-Office', '<p>Keahlian untuk mengelola Microsoft Office merupakan salah satu skill yang dapat dikuasai ketika melamar pekerjaan atau bahkan saat sudah bekerja. Saat ini kebanyakan perusahaan mencari kandidatnya yang mahir untuk mengoperasikan program keluaran dari Microsoft Office. Pasalnya hampir banyak pekerjaan akan bersinggungan baik dengan satu maupun lebih software dari Microsoft Office. Melihat hal tersebut tentunya belajar Microsoft Office untuk kerja merupakan hal yang perlu dilakukan. Seperti yang ketahui program Microsoft Office ini tersedia dalam berbagai jenis yaitu Microsoft Word, Excel, Power Point, dan lainnya.</p>\r\n<p>Biaya Pelatihan : <s>1.000.000&nbsp;</s><br>&nbsp; 600.000 &nbsp; &nbsp;</p>\r\n<p>Peluang Kerja :<br>1. &nbsp; &nbsp;Retail dan Distributor<br>2. &nbsp; &nbsp;Perbankan<br>3. &nbsp; &nbsp;Dealer<br>4. &nbsp; &nbsp;BUMN<br>5. &nbsp; &nbsp;Perhotelan<br>6. &nbsp; &nbsp;Finance<br>7. &nbsp; &nbsp;Kantor Pemerintahan dll.</p>', '2023-02-15', 'social-media-g3102ddfbe_1280.png'),
(49, 7, 'Design Grafis', 'Design-Grafis', '<p>Design Grafis merupakan salah satu studi yang mempelajari tentang membuat dan mendesain gambar. Selain bisa mendesain gambar, ada banyak keuntungan yang didapatkan dari mempelajari design Grafis. Bahkan kini pekerjaan yang berkaitan dengan design Grafis menawarkan gaji yang cukup fantastis. Mempelajari design Grafis tidak mengharuskan kamu memiliki jiwa seni yang sempurna. Sehingga semua orang bisa mempelajarinya tanpa persyaratan apapun. Tak hanya bisa mendapatkan pekerjaan, ada banyak keuntungan yang bisa kamu dapatkan dengan mempelajari design Grafis.</p>\r\n<p>Peluang Kerja :<br>1. &nbsp; &nbsp;Art Director<br>2. &nbsp; &nbsp;Animator<br>3. &nbsp; &nbsp;Artworker<br>4. &nbsp; &nbsp;Concept Artist<br>5. &nbsp; &nbsp;Creative Director<br>6. &nbsp; &nbsp;Graphic Designer<br>7. &nbsp; &nbsp;Ilustrator</p>\r\n<p>Biaya Pelatihan : <s>1.200.000</s><br>720.000</p>', '2023-02-15', 'social-media-g3102ddfbe_1280.png'),
(50, 7, 'Animasi', 'Animasi', '<p>Penggunaan media digital dalam pembelajaran sangat berpengaruh terhadap keaktifan aktivitas peserta didik selama proses pembelajaran serta meningkatkan minat belajar terutama untuk karakter peserta didik di era digital seperti saat ini. Salah satu cara membuat media pembelajaran yang menarik yaitu dengan adanya animasi sesuai dengan tema pembelajaran. Oleh sebab itu, perlu diadakan pelatihan animasi untuk peserta didik SD, SMP, SMA/SMK, Mahasiswa serta para guru untuk meningkatkan kemampuan dalam penyajian materi pembelajaran. Tujuan dari pelatihan ini yaitu mengetahui dan menerapkan Langkah-langkah pembuatan animasi dengan penerapan media digital.</p>\r\n<p>Peluang Kerja :<br>1. &nbsp; &nbsp;Animator<br>2. &nbsp; &nbsp;Illustrator<br>3. &nbsp; &nbsp;Komikus<br>4. &nbsp; &nbsp;Storyboard Artist<br>5. &nbsp; &nbsp;Perancang Game<br>6. &nbsp; &nbsp;Desain Karakter&nbsp;<br>7. &nbsp; &nbsp;Background Artist<br>8. &nbsp; &nbsp;Desainer Visual Efek<br>9. &nbsp; &nbsp;Editor<br>10. &nbsp; &nbsp;Desainer Grafis</p>\r\n<p>Biaya Pelatihan : <s>1.200.000</s><br>720.000</p>', '2023-02-15', 'social-media-g3102ddfbe_1280.png'),
(51, 7, 'Video Editing', 'Video-Editing', '<p>Pentingnya video sebagai sarana berkomunikasi atau menyampaikan pikiran atau informasi menjadi jelas ketika sedang melihat-lihat dan mengamati ponsel dan laptop yang di gunakan, masing-masing mampu merekam, mengedit, dan melihat video. Video di media sosial telah dianggap sangat penting bagi vlogger, streamer, dan bahkan bisnis yang menggunakan video untuk mempromosikan produk mereka. Pengeditan video adalah keterampilan yang layak untuk menginvestasikan waktu dan uang. Pengeditan video mengacu pada pekerjaan pasca produksi, yaitu, modifikasi yang dilakukan pada rekaman- rekaman dengan menambahkan, menghapus, atau mengatur ulang klip, menambahkan transisi, teks, peningkatan warna, filter, dll. Video Editing adalah tugas kompleks yang membutuhkan kreativitas dan pengetahuan teknis, menjadikannya keterampilan yang dicari.</p>\r\n<p>Peluang Kerja :<br>1. &nbsp; &nbsp;Produksi Film<br>2. &nbsp; &nbsp;Industri Pertelevisian<br>3. &nbsp; &nbsp;Production House<br>4. &nbsp; &nbsp;Agensi Iklan</p>\r\n<p>Biaya Pelatihan : <s>1.200.000</s><br>720.000</p>', '2023-02-15', 'social-media-g3102ddfbe_1280.png'),
(57, 7, 'Digital Marketing', 'Digital-Marketing', '<p>Digital marketing merupakan tren baru yang wajib dikuasai generasi masa kini sebab di dalamnya memuat berbagai strategi pemasaran dan promosi baru untuk terus meningkatkan performa penjualan. Penguasaan digital marketing dapat membantu sebuah bisnis bertahan di era yang serba cepat seperti saat ini. Digital marketing merupakan strategi pemasaran atau promosi dari suatu brand atau produk menggunakan media digital atau internet. Tujuannya untuk menjangkau target pelanggan dengan lebih efisien dan efektif serta lebih luas.</p>\r\n<p>Peluang Kerja :<br>1. &nbsp; &nbsp;Social Media Manager<br>2. &nbsp; &nbsp;SEO Specialist<br>3. &nbsp; &nbsp;Social Media Strategist<br>4. &nbsp; &nbsp;User Interface Designer<br>5. &nbsp; &nbsp;Content Writer<br>6. &nbsp; &nbsp;Web/Mobile Developer<br>7. &nbsp; &nbsp;Digital Marketing Consultant</p>\r\n<p>Biaya Pelatihan : <s>1.200.000</s><br>720.000</p>', '2023-02-15', 'social-media-g3102ddfbe_1280.png'),
(58, 7, 'Fotografi', 'Fotografi', '<p>Fotografi merupakan hal yang menarik untuk dipelajari, saat ini banyak orang yang menyukai dunia foto. Hal tersebut didukung karena semakin banyaknya tempat &ndash; tempat menarik di Indonesia bahkan dunia yang banyak menyuguhkan tempat wisata yang keren dan sayang untuk diabaikan. Fotografi sering dilakukan untuk mengabadikan momen, baik dalam produksi berita, pembuatan iklan, maupun keperluan lainnya, namun ketika seseorang mempelajari fotografi ia akan mendapatkan banyak manfaat yang akan dirasakan.</p>\r\n<p>Peluang Kerja :<br>1. &nbsp; &nbsp;Jurnalis<br>2. &nbsp; &nbsp;Food photographer<br>3. &nbsp; &nbsp;Wedding dan event photographer<br>4. &nbsp; &nbsp;Bisnis studio foto<br>5. &nbsp; &nbsp;Traveller photographer</p>\r\n<p>Biaya Pelatihan : <s>1.500.000</s><br>900.000</p>', '2023-02-15', 'social-media-g3102ddfbe_1280.png'),
(60, 8, 'Public Speaking', 'Public-Speaking', '<p>Deskripsi</p>', '2023-02-15', 'public-speaking.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int NOT NULL,
  `tgl_post` date NOT NULL,
  `judul` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `isi` text COLLATE utf8mb4_general_ci NOT NULL,
  `post_by` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(300) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `tgl_post`, `judul`, `slug`, `isi`, `post_by`, `gambar`) VALUES
(1, '2023-02-02', 'Pelatihan Animasi 2022', 'Pelatihan-Animasi-2022', '<p>❌PELATIHAN SELESAI❌<br><br>Minat ???<br><br>Segera Daftar dan Kuota Peserta Terbatas<br><br>Biaya Pelatihan 💯 Gratiss<br><br><a href=\"https://www.instagram.com/explore/tags/hems/\">#hems</a>.institute <a href=\"https://www.instagram.com/explore/tags/disnakerinpadang/\">#disnakerinpadang</a> <a href=\"https://www.instagram.com/explore/tags/lembaga/\">#lembaga</a> <a href=\"https://www.instagram.com/explore/tags/lembagakursus/\">#lembagakursus</a> <a href=\"https://www.instagram.com/explore/tags/leskomputerpadang/\">#leskomputerpadang</a> <a href=\"https://www.instagram.com/explore/tags/pelatihananimasi/\">#pelatihananimasi</a> <a href=\"https://www.instagram.com/explore/tags/animasi/\">#animasi</a> <a href=\"https://www.instagram.com/explore/tags/pelatihanvideocontentcreator2022/\">#pelatihanvideocontentcreator2022</a> <a href=\"https://www.instagram.com/explore/tags/digitalmarketing/\">#digitalmarketing</a> <a href=\"https://www.instagram.com/explore/tags/pendidikan/\">#pendidikan</a> <a href=\"https://www.instagram.com/explore/tags/sumbar/\">#sumbar</a> <a href=\"https://www.instagram.com/explore/tags/padang/\">#padang</a> <a href=\"https://www.instagram.com/explore/tags/padanginfo/\">#padanginfo</a> <a href=\"https://www.instagram.com/explore/tags/pusatvokasi/\">#pusatvokasi</a> <a href=\"https://www.instagram.com/explore/tags/kompeten/\">#kompeten</a></p>', 'Admin', 'Snapinsta.app_1080_312961278_1363790014361577_1858358359879698087_n.jpg'),
(2, '2023-02-02', 'Kursus Bahasa Korea', 'Kursus-Bahasa-Korea', '<p>Join now...!!!<br><br>Tunggu apa lagi? Pusing mikirin kerjaan dan masih pengangguran. Buruaaan ikuti PROGRAM G TO G Korea 🔥🔥<br><br>Pendaftaran sudah di buka...<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br><a href=\"https://www.instagram.com/explore/tags/bnp2tki/\">#bnp2tki</a> <a href=\"https://www.instagram.com/explore/tags/padang/\">#padang</a> <a href=\"https://www.instagram.com/explore/tags/indonesia/\">#indonesia</a> <a href=\"https://www.instagram.com/explore/tags/kerja/\">#kerja</a> <a href=\"https://www.instagram.com/explore/tags/korea/\">#korea</a> <a href=\"https://www.instagram.com/explore/tags/manufaktur/\">#manufaktur</a> <a href=\"https://www.instagram.com/explore/tags/bahasa/\">#bahasa</a> <a href=\"https://www.instagram.com/explore/tags/2022/\">#2022</a> <a href=\"https://www.instagram.com/explore/tags/programgtogkorea/\">#programgtogkorea</a></p>', 'Admin', 'Snapinsta.app_1080_295947513_3313407855651039_8025861099731174770_n.jpg'),
(3, '2023-03-16', 'Spesial Paket Ramadhan', 'Spesial-Paket-Ramadhan', '<p>Spesial Paket Ramadhan 😍<br>Belajar Offline kursus Bahasa Inggris dan Komputer 15 kali pertemuan durasi belajar 1 set jam hanya Rp. 499.000 😉</p>\r\n<p>Pendaftaran dibuka mulai sekarang.<br>Mulai belajar 28 Maret - 14 April 2023<br>Paket ini khusus di bulan Ramadhan</p>\r\n<p>Ayo buruan daftar. Jangan sampai ketinggalan yaaa 😊<br>.<br>.<br>Bingung mau belajar Bahasa Inggris dan Komputer dimana?&nbsp;<br>Yuk di Hem\'s Institute aja 😉 Terakreditasi dan Berkinerja.<br>Fasilitas yang di dapat :&nbsp;<br>✔️ Modul<br>✔️ Sertifikat<br>✔️ Instruktur Berpengalaman<br>✔️Jadwal Fleksibel<br>✔️Ruang Kelas ber AC<br>✔️Lokasi Strategis<br>✔️WIFI Gratis</p>\r\n<p>Segera daftarkan diri ke :<br>📍Jl. Villa Melati Mas II No. B/3 Alai Timur, Padang<br>🌐 www.hemsinstitute.com<br>📞 085376534343</p>\r\n<p>Link Pendaftaran :&nbsp;<br>http://bit.ly/3Jiulpl</p>', 'Admin', 'Kuning Abstract Promo Makanan Selebaran (Tegak) (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_features`
--

CREATE TABLE `tb_features` (
  `id` int NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `isi` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_features`
--

INSERT INTO `tb_features` (`id`, `judul`, `isi`) VALUES
(7, '3. Go out & Explore', 'incidid labore lore magna aliqua uisipsum suspendis loris.'),
(8, '2. What you want', 'incidid labore lore magna aliqua uisipsum suspendis loris'),
(12, '1. Choose a Category', 'incidid labore lore magna aliqua uisipsum suspendis loris.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id` int NOT NULL,
  `foto` varchar(300) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id`, `foto`) VALUES
(65, 'hems-institute1.jpg'),
(66, 'hems-institute2.jpg'),
(67, 'hems-institute3.jpg'),
(68, 'hems-institute4.jpg'),
(69, 'hems-institute5.jpg'),
(70, 'hems-institute6.jpg'),
(71, 'hems-institute7.jpg'),
(72, 'hems-institute8.jpg'),
(73, 'hems-institute9.jpg'),
(74, 'hems-institute10.jpg'),
(75, 'hems-institute11.jpg'),
(76, 'hems-institute12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar_kategori` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`, `gambar_kategori`) VALUES
(1, 'Bahasa Asing', 'bahasa-asing.jpg'),
(7, 'Multimedia', 'multimedia.png'),
(8, 'Public Speaking', 'public-speaking.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id_kontak` int NOT NULL,
  `jenis_kontak` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `kontak` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kontak`
--

INSERT INTO `tb_kontak` (`id_kontak`, `jenis_kontak`, `kontak`) VALUES
(8, 'instagram', '@hems.institute'),
(9, 'facebook', 'Hems Institute'),
(10, 'youtube', 'Hems Institute'),
(14, 'alamat', 'Jl. Villa Melati Mas II No. B/3 Alai Timur Padang'),
(15, 'whatsapp', '6285376534343');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id` int NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `nohp` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pendidikan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `program` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id`, `nama`, `tgl_lahir`, `email`, `nohp`, `alamat`, `pendidikan`, `program`) VALUES
(10, 'Suci Khairatuz Zahra', '2000-12-13', 'sucikhairatuzz@gmail.com', '1234567890', 'Padang', 'D3/S1', 'Basic K3 Rumah Sakit'),
(18, 'Indah', '2000-10-10', 'sucikhairatuzzahra13@gmail.com', '23456789', 'Bukittinggi', 'D3/S1', 'Petugas K3 Kimia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengurus`
--

CREATE TABLE `tb_pengurus` (
  `id` int NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `kategori` enum('pengurus','trainer') COLLATE utf8mb4_general_ci NOT NULL,
  `jabatan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(300) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pengurus`
--

INSERT INTO `tb_pengurus` (`id`, `nama`, `kategori`, `jabatan`, `foto`) VALUES
(1, 'Zulhemdi Hasra, S.Hum.', 'pengurus', 'Direktur', '298626911_1100606523877554_934016610713518898_n(1).jpg'),
(2, 'Riky Putra', 'pengurus', 'Direktur Operasional', 'WhatsApp Image 2022-12-08 at 15.40.03.jpeg'),
(4, 'Ratif Fiani', 'pengurus', 'Bendahara', 'gallery_1.jpg'),
(5, 'Yuliatri Novita', 'pengurus', 'Staff Admin', 'blog_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_persyaratan`
--

CREATE TABLE `tb_persyaratan` (
  `id` int NOT NULL,
  `jenis` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `persyaratan` varchar(500) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_persyaratan`
--

INSERT INTO `tb_persyaratan` (`id`, `jenis`, `judul`, `persyaratan`) VALUES
(1, 'Persyaratan Umum', 'Persyaratan Umum', '<ol><li>Pria/Wanita usia 19-27 tahun</li><li>SMA/SMK sederajat</li><li>Tidak buta warna/tidak bertato/tidak bertindik/tidak ada riwayat patah tulang</li><li>Mempunyai semangat dan bekerja keras</li></ol>'),
(4, 'Dokumen Pendaftaran', 'Dokumen Pendaftaran', '<ol><li>Pas foto dalam bentuk cetak dan digital (<i> background putih,&nbsp;kemeja putih,jas atau blazer hitam,&nbsp;tanpa edit</i>)</li><li>KTP</li><li>KK</li><li>Akta Kelahiran</li><li>Ijasah SD sampai dengan terakhir</li><li>Paspor (jika ada)</li></ol>'),
(5, 'Biaya', 'Biaya', '<ul><li>Biaya pendaftaran : Rp. 1.200.000<br>Sudah Termasuk SPP bulan pertama, Seragam LPK, Pakaian Olahraga, Modul Pelajaran.</li></ul>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profile`
--

CREATE TABLE `tb_profile` (
  `id` int NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `isi` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(300) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_profile`
--

INSERT INTO `tb_profile` (`id`, `judul`, `isi`, `foto`) VALUES
(18, 'Sejarah Hem\'s Institute', '<p>LPK Hem\'s Institute merupakan lembaga pelatihan yang berdiri sejak 2011 di kota Padang bergerak di bidang Multimedia dan Bahasa Asing. Beberapa program dari LPK Hem\'s Institute telah terakreditasi oleh LA - LPK. Multimedia meliputi program operator komputer, desain grafis, animasi, digital marketing dan video editing.&nbsp;Bahasa Asing terdiri dari bahasa Inggris, Korea, Jepang, Arab dan Mandarin. Untuk program bahasa asing LPK Hem\'s Institute membuka program reguler dan private. Khusus untuk', 'IMG-20170815-WA0031.jpg'),
(19, 'Visi dan Misi', '<p><strong>Visi</strong></p><p>Menjadi lembaga pendidikan dan pelatihan yang memiliki sumber daya manusia yang kreatif, berkualitas dan mandiri, serta bermanfaat bagi setiap masyarakat yang ingin bekerja profesionalMenjadi lembaga pendidikan dan pelatihan yang memiliki sumber daya manusia yang kreatif, berkualitas dan mandiri, serta bermanfaat bagi setiap masyarakat yang ingin bekerja profesional</p><p><strong>Misi</strong></p><p>​​​​​​​</p><ol><li>Melaksanakan pendidikan dan pelatihan k3, sikap', 'FB_IMG_1572362544019.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_slider`
--

CREATE TABLE `tb_slider` (
  `id` int NOT NULL,
  `sub_judul_slider` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `judul_slider` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `img_slider` varchar(300) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_slider`
--

INSERT INTO `tb_slider` (`id`, `sub_judul_slider`, `judul_slider`, `img_slider`) VALUES
(47, 'LKP HEM\'S INSTITUTE', 'Lembaga Pelatihan dan Konsultasi serta Lembaga Penempatan Tenaga Kerja Swasta', 'hems-institute3.jpg'),
(48, 'LKP HEM\'S INSTITUTE', 'Jl. Melati Mas 2 Blok B/3 Alai Timur Padang', 'hems-institute6.jpg'),
(50, 'LKP HEM\'S INSTITUTE', 'Lembaga Pelatihan dan Konsultasi serta Lembaga Penempatan Tenaga Kerja Swasta', 'hems-institute2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_video`
--

CREATE TABLE `tb_video` (
  `id` int NOT NULL,
  `foto` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `link` varchar(300) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_video`
--

INSERT INTO `tb_video` (`id`, `foto`, `link`) VALUES
(3, 'wp2044428.jpg', 'https://www.youtube.com/embed/mWbezfHwDAE'),
(5, 'WhatsApp Image 2023-01-19 at 13.18.40 (1).jpeg', 'https://www.youtube.com/embed/pK1AxD0nTQg'),
(6, 'WhatsApp Image 2023-01-20 at 07.13.34.jpeg', 'https://youtube.com/embed/YLHdp4AClPo'),
(7, 'WhatsApp Image 2023-01-20 at 07.13.34.jpeg', 'https://youtube.com/embed/akggxvL1WDw'),
(8, 'WhatsApp Image 2023-01-20 at 07.13.34.jpeg', 'https://youtube.com/embed/cgFyt5iNaj0'),
(9, 'WhatsApp Image 2023-01-20 at 07.13.34.jpeg', 'https://youtube.com/embed/-mbIbS28Cl8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_armada`
--
ALTER TABLE `tb_armada`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_features`
--
ALTER TABLE `tb_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengurus`
--
ALTER TABLE `tb_pengurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_persyaratan`
--
ALTER TABLE `tb_persyaratan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_profile`
--
ALTER TABLE `tb_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_video`
--
ALTER TABLE `tb_video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_armada`
--
ALTER TABLE `tb_armada`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_features`
--
ALTER TABLE `tb_features`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id_kontak` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_pengurus`
--
ALTER TABLE `tb_pengurus`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_persyaratan`
--
ALTER TABLE `tb_persyaratan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_profile`
--
ALTER TABLE `tb_profile`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tb_video`
--
ALTER TABLE `tb_video`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
