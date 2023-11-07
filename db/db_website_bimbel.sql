-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2022 at 06:00 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_website_bimbel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama_admin`, `username_admin`, `password_admin`) VALUES
(1, 'Firdaus', 'admin', '$2y$10$bs1Zysah2sTzl5JqZY5UNejgQU8hZ4iJDntnxyR1HpoEuaElOmCry');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int(11) NOT NULL,
  `tgl_post` date NOT NULL,
  `judul` varchar(300) NOT NULL,
  `isi` text NOT NULL,
  `post_by` varchar(300) NOT NULL,
  `gambar` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `tgl_post`, `judul`, `isi`, `post_by`, `gambar`) VALUES
(1, '2022-08-25', 'Penerimaan Peserta Didik Baru', '<p>Di buka kelas baru untuk mengisi slot job<br>1. Pengolahan ayam<br>2. Pertanian<br>3. Perikanan (keramba,pengolahan ikan)</p><p>4. Sortir telor</p><p>Dengan kualifikasi :</p><p>1. Laki-laki</p><p>2. Pendidikan SMA / SMK sederajat</p><p>3. Tinggi badan lak-laki 160 cm perempuan 150 cm</p><p>4. Belum pernah mengikuti program pemagangan ke jepang</p><p>5. Tidak melakukan pemalsuan identitas diri</p><p>6. Sehat jasmani dan rohani</p><p>7. Tidak buta warna,tidak ada tato dan tindik,tidak pernah patah tulang,tidak pernah</p><p>&nbsp;&nbsp;terlibat tindakan kriminal apapun,tidak menderita penyakit berat seperti paru-</p><p>&nbsp;&nbsp;paru TBC dll (terlampir surat keterangan dokter)</p><p>8. Bersedia mengikuti diklat di LPK dan pelatihan di jepang selama 3-5 tahun dan</p><p>&nbsp;&nbsp;tidak boleh pulang &nbsp;<br>9. Ada wali yang menjamin</p><p>10. Memiliki semangat yang tinggi</p><p>Persyaratan administrasi :</p><p>1. Daftar riwayat hidup (CV)</p><p>2. Foto copy KTP,KK,akte kelahiran</p><p>3. Foto copy STTB/izazah (SD-pendidikan terakhir)</p><p>4. SKCK</p><p>5. Surat ijin orang tua/wali/istri/suami di atas materai</p><p>6. Surat keterangan sehat dari dokter</p><p>7. Surat pernyataan belum pernah mengikuti program magang ke jepang di atas</p><p>&nbsp;materai</p><p>8. Foto copy surat keterangan pengalaman kerja (kalau ada)</p><p>9. Foto depan rumah bersama orang tua ukuran 4R</p><p>10. Pas foto background putih (3×4) dan (4×6) masing-masing 5 lembar</p>', 'Admin', 'OPENED-NEW-CLASS-2-1200x480.jpg'),
(2, '2022-08-25', 'Open New Class Magang', '<p>Di buka kelas baru untuk mengisi slot job<br>1. Pengolahan ayam<br>2. Pertanian<br>3. Perikanan (keramba,pengolahan ikan)</p><p>4. Sortir telor</p><p>Dengan kualifikasi :</p><p>1. Laki-laki</p><p>2. Pendidikan SMA / SMK sederajat</p><p>3. Tinggi badan lak-laki 160 cm perempuan 150 cm</p><p>4. Belum pernah mengikuti program pemagangan ke jepang</p><p>5. Tidak melakukan pemalsuan identitas diri</p><p>6. Sehat jasmani dan rohani</p><p>7. Tidak buta warna,tidak ada tato dan tindik,tidak pernah patah tulang,tidak pernah</p><p>&nbsp;&nbsp;terlibat tindakan kriminal apapun,tidak menderita penyakit berat seperti paru-</p><p>&nbsp;&nbsp;paru TBC dll (terlampir surat keterangan dokter)</p><p>8. Bersedia mengikuti diklat di LPK dan pelatihan di jepang selama 3-5 tahun dan</p><p>&nbsp;&nbsp;tidak boleh pulang &nbsp;<br>9. Ada wali yang menjamin</p><p>10. Memiliki semangat yang tinggi</p><p>Persyaratan administrasi :</p><p>1. Daftar riwayat hidup (CV)</p><p>2. Foto copy KTP,KK,akte kelahiran</p><p>3. Foto copy STTB/izazah (SD-pendidikan terakhir)</p><p>4. SKCK</p><p>5. Surat ijin orang tua/wali/istri/suami di atas materai</p><p>6. Surat keterangan sehat dari dokter</p><p>7. Surat pernyataan belum pernah mengikuti program magang ke jepang di atas</p><p>&nbsp;materai</p><p>8. Foto copy surat keterangan pengalaman kerja (kalau ada)</p><p>9. Foto depan rumah bersama orang tua ukuran 4R</p><p>10. Pas foto background putih (3×4) dan (4×6) masing-masing 5 lembar</p>', 'Admin', NULL),
(3, '2022-08-25', 'TOKUTEIGINO', '<p><strong>Informasi Tentang&nbsp;</strong><i><strong>Specified Skilled Worker (SSW)</strong></i></p><p>Parlemen Jepang mengesahkan amandemen&nbsp;<i>Immigration Control and Refugee Recognition Act</i>&nbsp;bulan Desember 2018 dengan menambah 2 kategori baru status visa bekerja yaitu&nbsp;<i>Specified Skilled Worker</i>&nbsp;(SSW) tipe 1 dan tipe 2. SSW dibuka untuk bekerja di 14 sektor yaitu:</p><ol><li><i>care worker</i></li><li><i>building cleaning management</i></li><li><i>machine parts &amp; tooling</i></li><li><i>industrial machinery industry</i></li><li><i>electric, electronics and information industries</i></li><li><i>construction industry</i></li><li><i>shipbuilding and ship machinery industry</i></li><li><i>automobile repair and maintenance</i></li><li><i>aviation industry</i></li><li><i>accommodation industry</i></li><li><i>agriculture</i></li><li><i>fishery and aquaculture</i></li><li><i>manufacture of food and beverages</i></li><li><i>food service industry.</i></li></ol><p>Delapan negara diberi kesempatan mengirim tenaga kerja ke Jepang dengan status SSW, yaitu Indonesia, Filipina, Vietnam, RRT, Kamboja, Thailand, Myanmar dan 1 negara Asia lainnya.&nbsp; &nbsp;</p><p>Adapun klasifikasi SSW 1 dan SSW 2 adalah sebagai berikut:</p><p><strong>SSW 1</strong></p><ul><li>Lulus ujian kompetensi bahasa dan keterampilan level menengah.</li><li>Ijin tinggal sampai 5 tahun.</li><li>Tidak boleh membawa anggota keluarga.</li><li>Lulusan Technical intern training (ii) dapat memperoleh status ini tanpa ujian.</li><li>Dapat pindah tempat bekerja.</li></ul><p><strong>SSW 2</strong></p><ul><li>Lulus ujian kompetensi tingkat ahli dari jenjang Designated skills 1</li><li>Ijin tinggal dapat terus diperpanjang selama masih bekerja.</li><li>Dapat membawa anggota keluarga inti.</li><li>Dapat pindah tempat bekerja.</li></ul><p><strong>特定技能について</strong></p><p>2018年12月の日本の臨時国会において、在留資格「特定技能」の新設を柱とする「出入国管理及び難民認定法及び法務省設置法の一部を改正する法律」が可決・成立し、2019年4月1日より人手不足が深刻な産業分野において「特定技能」での新たな外国人材の受入れが可能となった。外国人が日本に在留するためには、在留目的等を地方入国在留管理官署に申請し在留資格を認定される必要がある。</p><p>特定技能1号：</p><p>特定産業分野に属する相当程度の知識又は経験を必要とする技能を要する業務に従事する外国人向けの在留資格</p><p>特定技能2号：</p><p>特定産業分野に属する熟練した技能を要する業務に従事する外国人向けの在留資格</p><p>特定産業分野：</p><p>①介護　②ビルクリーニング　③素形材産業　④産業機械製造業　⑤電気・電子情報関連産業　⑥建設　⑦造船・舶用工業　⑧自動車整備　⑨航空　⑩宿泊　⑪農業　⑫漁業　⑬飲食料品製造業　⑭外食業</p><p>基本的には、8カ国（ベトナム、中国、フィリピン、インドネシア、タイ、ミャンマー、カンボジアの7か国と残りの1か国）から優先的に人材を受け入れる。</p><p>特定技能１号のポイント</p><ul><li>在留期間：１年。通&nbsp;算で上限５年まで。</li><li>技能水準：試験等で確認</li><li>日本語能力水準：生活や業務に必要な日本語能力を試験等で確認。</li><li>家族の帯同：基本的に認めない。</li></ul><p>特定技能２号のポイント</p><ul><li>在留期間：３年。</li><li>技能水準：試験等で確認。</li><li>日本語能力水準：&nbsp;試験等での確認は不要。</li><li>家族の帯同：要件を満たせば可能（配偶者，子）</li></ul>', 'Admin', 'WhatsApp-Image-2020-04-02-at-12.19.04-1200x480.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id` int(11) NOT NULL,
  `foto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id`, `foto`) VALUES
(4, 'team-1.jpg'),
(5, 'team-2.jpg'),
(6, 'team-3.jpg'),
(7, 'team-4.jpg'),
(8, 'testimonial-1.jpg'),
(9, 'testimonial-2.jpg'),
(10, 'testimonial-3.jpg'),
(11, 'testimonial-4.jpg'),
(12, 'testimonial-5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karir`
--

CREATE TABLE `tb_karir` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `detail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id_kontak` int(11) NOT NULL,
  `jenis_kontak` varchar(100) NOT NULL,
  `kontak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kontak`
--

INSERT INTO `tb_kontak` (`id_kontak`, `jenis_kontak`, `kontak`) VALUES
(8, 'email', 'lpkbahasajepang99@gmail.com'),
(9, 'wa', '0987654321'),
(10, 'alamat', 'Jl. Simp. Kampung Tanjung No. 2 Kuranji, Padang, Sumatera Barat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `paspor` varchar(100) NOT NULL,
  `bimbel_bahasa` varchar(100) NOT NULL,
  `sertifikat_bahasa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id`, `nama`, `tgl_lahir`, `email`, `nohp`, `alamat`, `pendidikan`, `program`, `paspor`, `bimbel_bahasa`, `sertifikat_bahasa`) VALUES
(8, 'Pirdaus', '1999-03-22', 'dauspratama56@gmail.com', '082389360130', 'Padang', 'D3/S1', 'KELAS MAGANG', 'Paspor 48 halaman', 'Ya', 'N4');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengurus`
--

CREATE TABLE `tb_pengurus` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `foto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengurus`
--

INSERT INTO `tb_pengurus` (`id`, `nama`, `jabatan`, `foto`) VALUES
(1, 'Agus Jaya Putra', 'Pimpinan', 'team_2.jpg'),
(2, 'Herman', 'Wakil Pimpinan', 'comment_2.jpg'),
(3, 'Melva Sari', 'Sekretaris', 'comment_3.jpg'),
(4, 'Ratif Fiani', 'Bendahara', 'gallery_1.jpg'),
(5, 'Yuliatri Novita', 'Staff Admin', 'blog_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_persyaratan`
--

CREATE TABLE `tb_persyaratan` (
  `id` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `persyaratan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(500) NOT NULL,
  `foto` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_profile`
--

INSERT INTO `tb_profile` (`id`, `judul`, `isi`, `foto`) VALUES
(13, 'VISI', '<p>Menjadi lembaga pendidikan dan pelatihan yang memiliki sumber daya manusia yang kreatif, berkualitas dan mandiri, serta bermanfaat bagi setiap masyarakat yang ingin bekerja di luar negeri.</p>', 'visi.jpg'),
(14, 'MISI', '<ol><li>Melaksanakan pendidikan dan pelatihan bahasa, sikap, dan moral yang&nbsp;sesuai dengan karakter negara luar negeri.</li><li>Mempersiapkan sumber daya manusia yang terampil dan berkarakter.</li><li>Mengendalikan pencapaian kualitas dalam pelaksanaan program pendidikan dan pelatihan.</li></ol>', 'misi.jpg'),
(15, 'LPK Pelatihan Bahasa Jepang', '<p><strong>LPK Asia Padang </strong>merupakan Lembaga Pelatihan Kerja dan pelatihan bahasa Jepang yang berlokasi di Jl. Simp. Kampung Tanjung No. 2 Kuranji, Padang, Sumatera Barat. Kami berperan sebagai Lembaga Pengembangan Sumber Daya Manusia Indonesia melalui Penyelenggara Program Pemagangan ke Jepang.</p>', 'young-woman-with-backpack-platform.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_program`
--

CREATE TABLE `tb_program` (
  `id` int(11) NOT NULL,
  `program` varchar(100) NOT NULL,
  `isi` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_program`
--

INSERT INTO `tb_program` (`id`, `program`, `isi`) VALUES
(1, 'KELAS MAGANG', 'Perawat Lansia, Pertanian, Kontruksi, Peternakan, Pengolahan Makanan'),
(2, 'PEMBEKALAN TOKUTEI GINOU', '-'),
(3, 'PEMBEKALAN BEASISWA', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_slider`
--

CREATE TABLE `tb_slider` (
  `id` int(11) NOT NULL,
  `sub_judul_slider` varchar(100) NOT NULL,
  `judul_slider` varchar(100) NOT NULL,
  `img_slider` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_slider`
--

INSERT INTO `tb_slider` (`id`, `sub_judul_slider`, `judul_slider`, `img_slider`) VALUES
(34, 'LPK Asia Training Center', 'Jl. Simp. Kampung Tanjung No. 2 Kuranji, Padang, Sumatera Barat', '3.jpg'),
(35, 'LPK Asia Training Center', 'TERBAIK DIKOTA PADANG', '4.jpg'),
(36, 'LPK Asia Training Center', 'BIMBEL MAGANG KE JEPANG', 'qq.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_video`
--

CREATE TABLE `tb_video` (
  `id` int(11) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `link` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_video`
--

INSERT INTO `tb_video` (`id`, `foto`, `link`) VALUES
(3, 'wp2044428.jpg', 'https://youtu.be/3RbqHAq2mco');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_karir`
--
ALTER TABLE `tb_karir`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tb_program`
--
ALTER TABLE `tb_program`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_karir`
--
ALTER TABLE `tb_karir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_pengurus`
--
ALTER TABLE `tb_pengurus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_persyaratan`
--
ALTER TABLE `tb_persyaratan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_profile`
--
ALTER TABLE `tb_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_program`
--
ALTER TABLE `tb_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_video`
--
ALTER TABLE `tb_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
