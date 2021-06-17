-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2021 pada 06.47
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar_laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `updater` varchar(32) NOT NULL,
  `slug_berita` varchar(255) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `status_berita` varchar(20) NOT NULL,
  `jenis_berita` varchar(20) NOT NULL,
  `keywords` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `hits` int(11) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_publish` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `id_user`, `id_kategori`, `updater`, `slug_berita`, `judul_berita`, `isi`, `status_berita`, `jenis_berita`, `keywords`, `gambar`, `icon`, `hits`, `urutan`, `tanggal_mulai`, `tanggal_selesai`, `tanggal_post`, `tanggal_publish`, `tanggal`) VALUES
(7, 4, 5, '', 'pengajar-praktisi-dosen', 'Pengajar Praktisi & Dosen', '<p>Para pengajar adalah praktisi dan dosen yang berpengalaman di bidangnya. Mereka rata-rata telah berpengalaman di bidangnya mulai dari 2-10 tahun.</p>\r\n<p>Anda akan belajar secara langsung dari praktisi yang sudah berpengalaman. Mudah dipahami, terstruktur dan bisa konsultasi kapan pun Anda mau.</p>', 'Publish', 'Keunggulan', 'Para pengajar adalah praktisi  dan dosen yang berpengalaman di bidangnya.', 'Kursus_Banner-011.jpg', 'fa fa-graduation-cap', 26, 2, NULL, NULL, '2019-11-05 05:31:59', '2019-11-05 05:30:24', '2020-02-18 07:09:56'),
(8, 4, 5, '', 'pembuatan-website-profil', 'Pembuatan Website Profil', '<p>Pastikan perusahaan Anda bisa diakses secara online sehingga meningkatkan brand image perusahaan yang akhirnya meningkatkan omset usaha.</p>\r\n<h3><strong>Tujuan</strong></h3>\r\n<p>Website perusahaan dibangun sebagai:</p>\r\n<ul>\r\n<li>Sarana komunikasi resmi perusahaan dengan pelanggan</li>\r\n<li>Menyediakan informasi resmi perusahaan</li>\r\n<li>Menyajikan informasi produk dan layanan yang dimiliki</li>\r\n<li>Sebagai media pemasaran bagi perusahaan</li>\r\n</ul>\r\n<h3><strong>Fitur-fitur utama</strong></h3>\r\n<p>Website perusahaan ini menyediakan fitur-fitur sebagai berikut (disesuaikan dengan paket yang dipilih):</p>\r\n<ol>\r\n<li>Modul Berita untuk mengelola dan menampilkan berita</li>\r\n<li>Modul Profil untuk mengelola dan menampilkan profil perusahaan</li>\r\n<li>Modul Staff untuk mengelola dan menampilkan data staff/personil perusahaan</li>\r\n<li>Modul Galeri untuk mengelola galeri foto dan menampilkannya</li>\r\n<li>Modul Video berfungsi untuk mempublikasikan video sebagai sarana komunikasi</li>\r\n<li>Modul Agenda/Event untuk menampilkan event-event atau agenda yang ada di perusahaan</li>\r\n<li>Modul Produk dan layanan untuk mengelola dan menampilkan produk/layanan yang dipasarkan</li>\r\n<li>Modul Kontak untuk mengelola komunikasi pelanggan/customer dengan perusahaan</li>\r\n<li>Modul SEO untuk membantu hasil pencarian di Google</li>\r\n<li>Integrasi dengan jejaring sosial yang dimiliki</li>\r\n<li>Dan fitur-fitur lainnya</li>\r\n</ol>\r\n<h3>&nbsp;</h3>', 'Publish', 'Layanan', 'Pastikan perusahaan Anda bisa diakses secara online sehingga meningkatkan brand image perusahaan yang akhirnya meningkatkan omset usaha.', 'favpng-chart-data-analysis-statistics-m2hy3dsv-1591960588.png', 'fa fa-globe', 82, 0, NULL, NULL, '2020-01-16 08:04:58', '2020-01-16 08:01:54', '2020-06-12 11:16:28'),
(9, 4, 5, '', 'web-based-application', 'Web Based Application', '<p>Aplikasi bisnis berbasis web? Situs pendaftaran online untuk menunjang bisnis Anda? Kami berpengalaman dalam merencanakan &amp; mengembangkan aplikasi tersebut.</p>\r\n<h3><strong>Tujuan</strong></h3>\r\n<p>Website perusahaan dibangun sebagai:</p>\r\n<ul>\r\n<li>Otomasi proses bisnis yang bisa diakses 24 jam dengan internet</li>\r\n<li>Menyederhanakan proses pengumpulan data konsumen/customer/siswa dsb</li>\r\n<li>Sarana pengelolaan proses bisnis/usaha yang mudah dan praktis</li>\r\n</ul>\r\n<h3><strong>Fitur-fitur utama</strong></h3>\r\n<p>Website perusahaan ini menyediakan fitur-fitur sebagai berikut (disesuaikan dengan paket yang dipilih):</p>\r\n<ol>\r\n<li><strong>Fitur pendaftaran online</strong></li>\r\n<li><strong>Fitur login, logout, update profile dan transaksi bagi konsumen/customer</strong></li>\r\n<li><strong>Fitur-fitur lain yang disesuaikan dengan kebutuhan perusahaan</strong></li>\r\n<li>Modul Berita untuk mengelola dan menampilkan berita</li>\r\n<li>Modul Profil untuk mengelola dan menampilkan profil perusahaan</li>\r\n<li>Modul Staff untuk mengelola dan menampilkan data staff/personil perusahaan</li>\r\n<li>Modul Galeri untuk mengelola galeri foto dan menampilkannya</li>\r\n<li>Modul Video berfungsi untuk mempublikasikan video sebagai sarana komunikasi</li>\r\n<li>Modul Agenda/Event untuk menampilkan event-event atau agenda yang ada di perusahaan</li>\r\n<li>Modul Produk dan layanan untuk mengelola dan menampilkan produk/layanan yang dipasarkan</li>\r\n<li>Modul Kontak untuk mengelola komunikasi pelanggan/customer dengan perusahaan</li>\r\n<li>Modul SEO untuk membantu hasil pencarian di Google</li>\r\n<li>Integrasi dengan jejaring sosial yang dimiliki</li>\r\n<li>Dan fitur-fitur lainnya</li>\r\n</ol>', 'Publish', 'Layanan', 'Aplikasi bisnis berbasis web? Situs pendaftaran online untuk menunjang bisnis Anda? Kami berpengalaman dalam merencanakan & mengembangkan aplikasi tersebut.', '3169210-1591960618.jpg', 'fa fa-laptop', 69, 2, NULL, NULL, '2020-01-16 08:08:16', '2020-01-16 08:07:46', '2020-06-12 11:16:58'),
(10, 4, 5, '', 'profil-java-web-media', 'Profil Java Web Media', '<h2>Java Web Media</h2>\r\n<p>Java Web Media didirikan oleh Andoyo dan online pada tanggal 26 April 2010. Java Web Media awalnya hanya bergerak di bidang pembuatan dan pengembangan website serta agensi desain grafis. Awal tahun 2011, perusahaan ini kemudian mulai bergera di bidang pengembangan sumber daya manusia, khususnya di bidang keahlian computer Graphic Design, Web Design dan Web Development.</p>\r\n<h2>Tentang Andoyo</h2>\r\n<p><strong>Andoyo&nbsp;</strong>adalah pendiri Java Web Media. Aktif mengajar Graphic Design, Web Design dan Web Programming. Lahir di Blora, 22 Februari 1983.</p>\r\n<p>Lulus dengan predikat Wisudawan Terbaik dari Teknik Sipil&nbsp; Universitas Negeri Semarang pada tahun 2006. Pernah bekerja sebagai Site Engineer di sebuah perusahaan kontraktor. Mulai blogging sejak masih bekerja sebagai kontraktor di tahun 2008.</p>\r\n<p>Kecintaanya pada teknologi web akhirnya mengarahkannya untuk mempelajari Graphic Design dan Web Design di Natcoll Design Technology, Wellington New Zealand di tahun 2009. Semenjak itu, Graphic Design dan Web Design menjadi salah satu&nbsp;<em>passion&nbsp;</em>di dalam hidupnya.</p>\r\n<p>Saat ini aktivitas selain mengajar adalah mengelola usahanya yang bergerak di bidang graphic design, web design, web development dan web education. Anda dapat mengunjungi situs resminya di&nbsp;<a href=\"http://www.javawebmedia.com/\">www.javawebmedia.com</a>.</p>\r\n<p>Aktivitas berikutnya adalah sebagai mahasiswa Magister Teknologi Informasi di Universitas Indonesia. Setelah pulang bekerja kemudian berangkat kuliah di Kampus Salemba, Fakultas Ilmu Komputer Universitas Indonesia.</p>', 'Publish', 'Profil', 'ProfilJava Web Media', 'kisspng-online-shopping-e-commerce-retail-business-store-5abbd566ab34846523928715222593027013-1591960600.jpg', NULL, 71, 0, NULL, NULL, '2020-01-20 13:26:31', '2020-01-20 13:24:38', '2020-06-12 11:16:40'),
(11, 4, 5, '', 'tersedia-kursus-private', 'Tersedia Kursus Private', '<p>Anda ingin kursus sekaligus menyelesaikan permasalahan yang Anda hadapi (<em>real project</em>)?&nbsp;</p>\r\n<p>Maka sebaiknya ambil paket kursus private yang kami sediakan. Materi kursus akan disesuaikan dengan kasus nyata di lapangan yang sedang Anda hadapi.</p>', 'Publish', 'Keunggulan', 'Anda bisa kursus sekaligus menyelesaikan permasalahan yang Anda hadapi (real project)', 'Kursus_Banner-04.jpg', 'fa fa-user', 28, 1, NULL, NULL, '2020-01-21 07:09:08', '2020-01-21 07:08:21', '2020-02-18 07:09:49'),
(12, 4, 5, '', 'jadwal-flexible', 'Jadwal Flexible', '<p>Bagi Anda yang ingin belajar, kami menerapkan jadwal flexible. Jadwal bisa didiskusikan bersama dengan tutor secara langsung.</p>\r\n<p>Kami juga menyediakan kursus kelas weekday, weekend dan kelas malam. Karyawan bisa mengambil kelas malam atau weekend (sabtu dan minggu). Bagi Anda yang memiliki waktu luang, Anda dapat mengambil kelas weekday.</p>', 'Publish', 'Keunggulan', 'Bagi Anda yang ingin belajar, kami menerapkan jadwal flexible. Jadwal bisa didiskusikan bersama dengan pengajar', 'Kursus_Banner-031.jpg', 'fa fa-clock', 28, 6, NULL, NULL, '2020-01-21 07:12:14', '2020-01-21 07:09:39', '2020-02-18 07:10:22'),
(13, 4, 5, '', 'semi-private', 'Semi Private', '<p>Untuk paket kelas adalah 2-5 siswa perkelas. Jika dalam 2 minggu kelas tidak terpenuhi, maka 1 orang tetap jalan.</p>\r\n<p>Java Web Media menetapkan&nbsp;<em>deadline</em> maksimal 2 minggu jika kelas tidak memenuhi kuota minimal. Misalnya kursus seharusnya minimal 2 siswa, tapi jika dalam jangka waktu dua minggu kuota belum terpenuhi, maka kelas akan tetap dilaksanakan meskipun hanya dengan 1 siswa.</p>', 'Publish', 'Keunggulan', 'Untuk paket kelas adalah 2-5 siswa perkelas. Jika dalam 2 minggu kelas tidak terpenuhi, maka 1 orang tetap jalan.', 'wallpaper-v3-ori-01-1592024110.jpg', 'fa fa-users', 0, 5, NULL, NULL, '2020-02-18 14:00:35', '2020-02-18 13:58:00', '2020-06-13 04:55:12'),
(14, 4, 5, '', 'course-with-your-own-project', 'Course with your own project', '<p>Kursus dengan materi sesuai proyek Anda sendiri. Materi Anda yang tentukan.</p>\r\n<p>Anda bisa kursus dengan materi sesuai kebutuhan pekerjaan Anda. Banyak siswa di Java Web Media memilih kelas ini karena mereka bisa fokus kursus pada pekerjaan yang sedang mereka hadapi.</p>', 'Publish', 'Keunggulan', 'Kursus dengan materi sesuai proyek Anda sendiri. Materi Anda yang tentukan.', 'wallpaper-v2-ori-01-1592024099.jpg', 'fa fa-home', 0, 4, NULL, NULL, '2020-02-18 14:06:26', '2020-02-18 14:04:18', '2020-06-13 04:55:01'),
(15, 4, 5, '', 'gratis-konsultasi', 'Gratis Konsultasi', '<p>Setelah selesai kursus akan disupport seumur hidup. Anda bisa konsultasi kapan saja.</p>\r\n<p>&nbsp;</p>', 'Publish', 'Keunggulan', 'Setelah selesai kursus akan disupport seumur hidup. Anda bisa konsultasi kapan saja.', 'wallpaper-v1-ori-01-1592024089.jpg', 'fab fa-whatsapp', 0, 3, NULL, NULL, '2020-02-18 14:09:08', '2020-02-18 14:07:31', '2020-06-13 04:54:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datasiswa`
--

CREATE TABLE `datasiswa` (
  `id_siswa` varchar(25) NOT NULL,
  `id_kelas` varchar(15) DEFAULT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `tmp_lahir` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `asal_sekolah` text NOT NULL,
  `agama` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tahun_ajaran` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datasiswa`
--

INSERT INTO `datasiswa` (`id_siswa`, `id_kelas`, `nama`, `alamat`, `tmp_lahir`, `tgl_lahir`, `asal_sekolah`, `agama`, `email`, `tahun_ajaran`) VALUES
('17', '2', 'Rizna Novia Faradilla', 'GG.kolbis RT.04 RW.02 Sindangkasih Purwakarta', 'Jakarta', '1990-03-26', 'Al azhar', 'islam', 'contact@abc.co.id', '2021'),
('21', '1', 'Muhammad Nizar Haykal', 'GG.kolbis 2 RT.04 RW.02 Sindangkasih Purwakarta', 'Purwakarta', '2003-10-21', 'Al azhar', 'islam', 'contact@abc.co.id', '2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dok_siswa`
--

CREATE TABLE `dok_siswa` (
  `id_dok` int(15) NOT NULL,
  `id_siswa` varchar(15) NOT NULL,
  `ijazah` varchar(225) NOT NULL,
  `rapot` varchar(225) NOT NULL,
  `pgm_kec` varchar(225) NOT NULL,
  `pgm_kab` varchar(225) NOT NULL,
  `pgm_prov` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dok_siswa`
--

INSERT INTO `dok_siswa` (`id_dok`, `id_siswa`, `ijazah`, `rapot`, `pgm_kec`, `pgm_kab`, `pgm_prov`) VALUES
(1, '17', 'kaberwskps-162158403.JPG', 'nita-1621584039.JPG', 'maret-april-1621584039.JPG', 'penarikan-simkesan-1621584039.JPG', 'kode-barang-tdk-ada-di-list-1621584039.JPG'),
(2, '21', 'ini-gimana-162312774', 'kaberwskps-162312774', 'maret-april-16231277', 'log-barusan-16231277', 'kode-barang-tdk-ada-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `download`
--

CREATE TABLE `download` (
  `id_download` int(11) NOT NULL,
  `id_kategori_download` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul_download` varchar(200) DEFAULT NULL,
  `jenis_download` varchar(20) NOT NULL,
  `isi` text DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `hits` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `download`
--

INSERT INTO `download` (`id_download`, `id_kategori_download`, `id_user`, `judul_download`, `jenis_download`, `isi`, `gambar`, `website`, `hits`, `tanggal`) VALUES
(2, 1, 4, 'Panduan Untuk Admin Engineering Utama', 'Download', '<p>Panduan Untuk Admin Engineering</p>', 'banner-top-asli-1591956558.pdf', 'https://javawebmedia.com', 2, '2020-06-12 10:21:41'),
(3, 1, 4, 'Buku Panduan PT SBI (ADMIN ENGINEERING', 'Download', '<p>Buku Panduan PT SBI (ADMIN ENGINEERING</p>', 'instagram-feed-2020-1592019516.pptx', NULL, 2, '2020-06-13 03:47:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `id_kategori_galeri` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul_galeri` varchar(200) DEFAULT NULL,
  `jenis_galeri` varchar(20) NOT NULL,
  `isi` text DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `popup_status` enum('Publish','Draft','','') NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `status_text` enum('Ya','Tidak','','') NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `id_kategori_galeri`, `id_user`, `judul_galeri`, `jenis_galeri`, `isi`, `gambar`, `website`, `hits`, `popup_status`, `urutan`, `status_text`, `tanggal`) VALUES
(9, 4, 4, 'Java Web Media <span>Kursus</span>', 'Homepage', '<p>Pusat Kursus Programming, Desain dan Statistik dengan format Kelas dan Private</p>', 'produk-javawebmedia-01-1592630207.jpg', 'https://javawebmedia.com', NULL, 'Publish', 0, 'Ya', '2020-06-20 05:16:48'),
(11, 4, 4, 'Selamat Datang di Educamedia', 'Homepage', '<p>Yuk download dan kursus langsung di Educamedia</p>', '3169210-1592003020.jpg', 'https://javawebmedia.com', NULL, 'Publish', 1, 'Ya', '2020-06-20 05:15:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar_produk`
--

CREATE TABLE `gambar_produk` (
  `id_gambar_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_gambar_produk` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambar_produk`
--

INSERT INTO `gambar_produk` (`id_gambar_produk`, `id_user`, `id_produk`, `nama_gambar_produk`, `gambar`, `keterangan`, `urutan`, `tanggal`) VALUES
(2, 0, 1, '', 'NITRICO_Distributor_Ad_01_b2.jpg', '', 0, '2020-05-29 23:45:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `slug_kategori` varchar(255) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `hits` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `id_user`, `slug_kategori`, `nama_kategori`, `urutan`, `hits`, `tanggal`) VALUES
(4, 1, 'penelitian-internal', 'Penelitian Internal', 4, 0, '2020-06-10 22:08:23'),
(5, 1, 'kegiatan-organisasi', 'Kegiatan Organisasi', 5, 0, '2020-06-10 22:08:31'),
(6, 0, 'penelitian-internasional', 'Penelitian Internasional', 3, 0, '2020-06-10 21:31:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_download`
--

CREATE TABLE `kategori_download` (
  `id_kategori_download` int(11) NOT NULL,
  `slug_kategori_download` varchar(255) NOT NULL,
  `nama_kategori_download` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_download`
--

INSERT INTO `kategori_download` (`id_kategori_download`, `slug_kategori_download`, `nama_kategori_download`, `urutan`) VALUES
(1, 'product-pricelist', 'Product Pricelist', 1),
(2, 'informasi-nitrico', 'Informasi Nitrico', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_galeri`
--

CREATE TABLE `kategori_galeri` (
  `id_kategori_galeri` int(11) NOT NULL,
  `slug_kategori_galeri` varchar(255) NOT NULL,
  `nama_kategori_galeri` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_galeri`
--

INSERT INTO `kategori_galeri` (`id_kategori_galeri`, `slug_kategori_galeri`, `nama_kategori_galeri`, `urutan`) VALUES
(4, 'kegiatan', 'Kegiatan', 2),
(6, 'kegiatan-kampus', 'Kegiatan Kampus', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id_kategori_produk` int(11) NOT NULL,
  `nama_kategori_produk` varchar(200) NOT NULL,
  `slug_kategori_produk` varchar(200) NOT NULL,
  `urutan` int(11) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori_produk`, `nama_kategori_produk`, `slug_kategori_produk`, `urutan`, `keterangan`, `gambar`, `tanggal`) VALUES
(1, 'Kursus Programming', 'kursus-programming', 1, '<p>Kursus Programming</p>', 'produk-javawebmedia-02-1592630261.jpg', '2020-06-20 05:17:41'),
(3, 'Kursus Desain', 'kursus-desain', 2, '<p>Kursus Desain dan UI/UX</p>', 'produk-javawebmedia-05-1592630467.jpg', '2020-06-20 05:21:07'),
(4, 'Kursus Statistik dan Manajemen Data', 'kursus-statistik-dan-manajemen-data', 3, '<p>Kursus Statistik dan Manajemen Data</p>', 'produk-javawebmedia-11-1592630490.jpg', '2020-06-20 05:21:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` varchar(15) NOT NULL,
  `nama_kelas` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
('1', 'Berprestasi'),
('2', 'Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `namaweb` varchar(200) NOT NULL,
  `nama_singkat` varchar(20) DEFAULT NULL,
  `tagline` varchar(200) DEFAULT NULL,
  `tagline2` varchar(255) DEFAULT NULL,
  `tentang` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_cadangan` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `hp` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `keywords` varchar(400) DEFAULT NULL,
  `metatext` text DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `google_plus` varchar(255) DEFAULT NULL,
  `nama_facebook` varchar(255) NOT NULL,
  `nama_twitter` varchar(255) NOT NULL,
  `nama_instagram` varchar(255) NOT NULL,
  `nama_google_plus` varchar(255) NOT NULL,
  `singkatan` varchar(255) NOT NULL,
  `google_map` text DEFAULT NULL,
  `judul_1` varchar(200) DEFAULT NULL,
  `pesan_1` varchar(200) DEFAULT NULL,
  `judul_2` varchar(200) DEFAULT NULL,
  `pesan_2` varchar(200) DEFAULT NULL,
  `judul_3` varchar(200) DEFAULT NULL,
  `pesan_3` varchar(200) DEFAULT NULL,
  `judul_4` varchar(200) DEFAULT NULL,
  `pesan_4` varchar(200) DEFAULT NULL,
  `judul_5` varchar(200) DEFAULT NULL,
  `pesan_5` varchar(200) NOT NULL,
  `judul_6` varchar(200) DEFAULT NULL,
  `pesan_6` varchar(200) NOT NULL,
  `isi_1` varchar(500) DEFAULT NULL,
  `isi_2` varchar(500) DEFAULT NULL,
  `isi_3` varchar(500) DEFAULT NULL,
  `isi_4` varchar(500) DEFAULT NULL,
  `isi_5` varchar(500) DEFAULT NULL,
  `isi_6` varchar(500) DEFAULT NULL,
  `link_1` varchar(255) DEFAULT NULL,
  `link_2` varchar(255) DEFAULT NULL,
  `link_3` varchar(255) DEFAULT NULL,
  `link_4` varchar(255) DEFAULT NULL,
  `link_5` varchar(255) DEFAULT NULL,
  `link_6` varchar(255) DEFAULT NULL,
  `javawebmedia` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `rekening` text DEFAULT NULL,
  `prolog_topik` text DEFAULT NULL,
  `prolog_program` text DEFAULT NULL,
  `prolog_sekretariat` text DEFAULT NULL,
  `prolog_aksi` text DEFAULT NULL,
  `prolog_kolaborasi` text DEFAULT NULL,
  `prolog_sebaran` text DEFAULT NULL,
  `gambar_berita` varchar(255) DEFAULT NULL,
  `prolog_agenda` text DEFAULT NULL,
  `prolog_wawasan` text DEFAULT NULL,
  `protocol` varchar(255) DEFAULT NULL,
  `smtp_host` varchar(255) DEFAULT NULL,
  `smtp_port` varchar(255) DEFAULT NULL,
  `smtp_timeout` varchar(255) DEFAULT NULL,
  `smtp_user` varchar(255) DEFAULT NULL,
  `smtp_pass` varchar(255) DEFAULT NULL,
  `judul_pembayaran` varchar(255) DEFAULT NULL,
  `isi_pembayaran` text DEFAULT NULL,
  `gambar_pembayaran` varchar(255) DEFAULT NULL,
  `link_bawah_peta` varchar(255) DEFAULT NULL,
  `text_bawah_peta` varchar(255) NOT NULL,
  `cara_pesan` enum('Keranjang Belanja','Formulir Pemesanan') NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `namaweb`, `nama_singkat`, `tagline`, `tagline2`, `tentang`, `deskripsi`, `website`, `email`, `email_cadangan`, `alamat`, `telepon`, `hp`, `fax`, `logo`, `icon`, `keywords`, `metatext`, `facebook`, `twitter`, `instagram`, `google_plus`, `nama_facebook`, `nama_twitter`, `nama_instagram`, `nama_google_plus`, `singkatan`, `google_map`, `judul_1`, `pesan_1`, `judul_2`, `pesan_2`, `judul_3`, `pesan_3`, `judul_4`, `pesan_4`, `judul_5`, `pesan_5`, `judul_6`, `pesan_6`, `isi_1`, `isi_2`, `isi_3`, `isi_4`, `isi_5`, `isi_6`, `link_1`, `link_2`, `link_3`, `link_4`, `link_5`, `link_6`, `javawebmedia`, `gambar`, `video`, `rekening`, `prolog_topik`, `prolog_program`, `prolog_sekretariat`, `prolog_aksi`, `prolog_kolaborasi`, `prolog_sebaran`, `gambar_berita`, `prolog_agenda`, `prolog_wawasan`, `protocol`, `smtp_host`, `smtp_port`, `smtp_timeout`, `smtp_user`, `smtp_pass`, `judul_pembayaran`, `isi_pembayaran`, `gambar_pembayaran`, `link_bawah_peta`, `text_bawah_peta`, `cara_pesan`, `id_user`, `tanggal`) VALUES
(1, 'SMP AL HUSAIN MAGELANG', 'SMP AL HUSAIN MAGELA', NULL, NULL, '<p>SMP AL HUSAIN MAGELANG diresmikan pada tanggal 26 Februari 1992 dengan status kepemilikan yayasan dalam rangka&nbsp;mencerdaskan kehidupan bangsa dan untuk perkembangan sesuai dengan perkembangan IPTEK dan IMTAQ sekaligus memperisapkan anak-anak didik putra/i Kabupaten Magelang melanjutkan pendidikan tinggi selanjutnya.<br /><br /></p>', 'SMP AL HUSAIN MAGELANG, jenjang pendidikan menengah pertama swasta yang berlokasi di Muntilan Magelang. ', 'http://localhost/cmslaravel7/', 'contact@abc.co.id', 'contact@abc.co.id', 'Jl.Yogya Km.22, krakitan, Salam, Kucen, Kecamatan Salam, Kabupaten Magelang Prov. Jawa Tengah', '085715100485', '+6281210697841', '081210697841', 'logo-smp-al-husen-mgl-1618814689.jpeg', 'logo-smp-al-husen-mgl-1618814733.jpeg', 'smp al husain magelang, smp magelang, magelang, sekolah menengah pertama', NULL, 'https://www.facebook.com/', NULL, NULL, 'https://www.youtube.com/channel/UCmm6mFZXYQ3ZylUMa0Tmc2Q', '', '', '', '', '', '<iframe src=\"https://goo.gl/maps/4xFp5pcQfe2hj8y38\"></iframe>', 'Tempat belajar nyaman', 'fa fa-home', 'Materi Kursus Selalu Update', 'fa fa-laptop', 'Jadwal Flexibel', 'fa fa-thumbs-up', 'Menjaga Amanah', 'fa-check-square-o', 'Tempat belajar nyaman', 'fa-home', 'Online service', 'fa-laptop', 'Kami menyediakan tempat belajar yang nyaman dan menyenangkan serasa di rumah sendiri', 'Materi kursus kamu selalu uptodate, Anda bisa mengunduh apa yang dipelajari', 'Bagi Anda siswa yang ingin belajar, kami menerapkan jadwal flexibel', 'Kami senantiasa menjaga amanah yang diberikan kepada donatur agar sampai di tangan yang berhak.', 'Kami menyediakan tempat belajar yang nyaman dan menyenangkan', 'Website kamu selalu uptodate, Anda bisa mengunduh apa yang dipelajari', '', '', '', '', '', '', '<p>Berawal dari keinginan ibunda Hj.Masah Muhari diakhir hidupnya untuk mewakaan sebagian hartanya dijalan Allah, gayungpun bersambut pada bulan Mei 2011 saat kami akan melaksanakan ibadah umrah, Seorang rekan kami sesama Jamaah bernama ustadzah Hj. Zainur Fahmid memberikan informasi Tentang Anggota yang hendak mewakaan sebidang tanahnya di wilayah Beji Timur. Kami pun memanjatkan doa di kota suci dengan penuh rasa harap pertolongan Allah untuk menunjukan jalan terbaik-Nya, maka sepulang umroh kami mengadakan pertemuan di kediaman Ibu Dra Hj Ratna Mardjanah untuk membicarakan visi misi kami dalam wakaf tersebut dan sepakat untuk mendirikan Istana Yatim Riyadhul Jannah ini.</p>\r\n<p>Nama Riyadhul Jannah Sendiri diambil dari nama pengelola wakaf (H. Ahmad Riyadh Muchtar, Lc) dan pemberi wakaf (Dra Hj Ratna Mardjanah). Istana Yatim Riyadhul Jannah hadir untuk melayani dan memfasilitasi segala kebutuhan anak yatim, terutama pendidikan agama, akhlak dan kehidupan yang layak untuk bekal masa depan mereka yang cerah agar bisa memberi manfaat bagi umat. Harapan kami semoga dengan membangunkan istana untuk anak yatim, maka Allah akan berikan istana-Nya di surga kelak dan kita termasuk manusia yang bisa memberika manfaat bagi sesama sebagaimana sabda Rasulullah SAW yang artinya:&nbsp;</p>\r\n<p>&ldquo;Sebaik-baik manusia adalah yang paling bermanfaat bagi manusia lainnya&rdquo;&nbsp;</p>\r\n<p>erimakasih atas segala bentuk bantuan yang dipercayakan kepada kami baik secara materi, tenaga dan kiran serta doa para muhsinin dan muhsinat Istana Yatim Riyadhul Jannah selama ini, mulai dari rencana pendirian hingga berkembang seperti saat ini. Semoga segala amal menjadi shadaqah jariyah disisi-Nya.&nbsp;</p>\r\n<p>&nbsp;</p>', 'logo-smp-al-husen-mgl-1618814778.jpeg', 'fsH_KhUWfho', '<table id=\"dataTables-example\" class=\"table table-bordered\" width=\"100%\">\r\n<thead>\r\n<tr>\r\n<th tabindex=\"0\" colspan=\"1\" rowspan=\"1\" width=\"19%\">Nama Bank</th>\r\n<th tabindex=\"0\" colspan=\"1\" rowspan=\"1\" width=\"21%\">Nomor Rekening</th>\r\n<th tabindex=\"0\" colspan=\"1\" rowspan=\"1\" width=\"7%\">Atas nama</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>BCA KCP Margo City</td>\r\n<td>4212548204</td>\r\n<td>Andoyo</td>\r\n</tr>\r\n<tr>\r\n<td>Bank Mandiri KCP Universitas Indonesia</td>\r\n<td>1570001807768</td>\r\n<td>Eflita Meiyetriani</td>\r\n</tr>\r\n<tr>\r\n<td>Bank BNI Syariah Kantor Cabang Jakarta Selatan</td>\r\n<td>0105301001</td>\r\n<td>Eflita Meiyetriani</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<p>Dalam mewujudkan pembangunan berkelanjutan, pemerintah kabupaten anggota LTKL telah mengidentifikasi dan memilih topik yang sesuai dengan kondisi di daerahnya. Ada 5 topik prioritas yang dipilih dengan penerapan yang disesuaikan kembali di masing-masing kabupaten.</p>', NULL, '<p>Setelah Lingkar Temu Kabupaten Lestari (LTKL) diinisiasi, kesekretariatan dibentuk untuk membantu para pemerintah kabupaten anggota bekerja dan berkolaborasi. Walaupun tidak memiliki mandat implementasi, Sekretariat LTKL menjadi vital dalam melancarkan koordinasi, pengumpulan basis data, hingga pelaporan perkembangan. Sekretariat LTKL juga diperkuat dengan kehadiran personil yang telah berpengalaman di bidang management pengetahuan, program pembangunan berkelanjutan hingga kebijakan.</p>', '', '<p>Lingkar Temu Kabupaten Lestari (LTKL) mengedepankan kolaborasi dalam mewududkan pembangunan berkelanjutan. Ada 10 kabupaten yang tersebar di 6 provinsi di Indonesia telah menjadi anggota LTKL.</p>\r\n<p>Hingga kini, berbagai pihak telah ikut berkolaborasi, mulai dari pemerintah kabupaten, sekeretariat LTKL, mitra pembangunan hingga pihak swasta.</p>', '', 'balairung-budiutomo-01.jpg', '<p>Acara yang ditampilkan merupakan kumpulan acara LTKL, mitra, maupun pemerintah kabupaten anggota LTKL, mulai dari acara seminar hingga festival.</p>', '<p>LTKL bukan satu-satunya yang bergerak dalam mewujudkan pembangunan berkelanjutan, serta upaya penanggulangan perubahan iklim. Ikuti terus perkembangan usaha LTKL serta rekan-rekan lain menuju bumi dan Indonesia yang lestari.</p>', 'smtp', 'ssl://mail.javawebmedia.com', '465', '12', 'pendaftaran@javawebmedia.com', 'rasulullah112233', 'Metode Pembayaran Produk', '<p>Anda dapat melakukan pembayaran dengan beberapa cara, yaitu:</p>\r\n<ol>\r\n<li><strong>Pembayaran Tunai</strong>, dapat Anda serahkan secara langsung ke salah satu staff Java Web Media</li>\r\n<li><strong>Pembayar Via Transfer Rekening</strong></li>\r\n</ol>\r\n<p>Lakukan transfer biaya atas layanan dan produk&nbsp;<strong>Java Web Media</strong>&nbsp;ke salah satu rekening di bawah ini.</p>\r\n<h3>Konfirmasi Pembayaran</h3>\r\n<p>Anda dapat melakukan konfirmasi pembayaran melalui:</p>\r\n<ul>\r\n<li><strong>Melalui Email</strong>, silakan kirim bukti pembayaran ke:&nbsp;<strong><a href=\"mailto:contact@javawebmedia.co.id?subject=Konfirmasi%20Pembayaran\">contact@javawebmedia.co.id</a></strong></li>\r\n<li><strong>Melalui Whatsapp</strong>, kirimkan bukti pembayaran Anda ke&nbsp;<strong>+6281210697841</strong></li>\r\n<li><strong>Melalui Formulir Konfirmasi Pembayaran</strong>, Anda dapat mengunggah bukti pembayaran Anda melalui form&nbsp;<strong><a title=\"Konfirmasi Pembayaran\" href=\"https://javawebmedia.com/konfirmasi\">&nbsp;Konfirmasi Pembayaran</a></strong></li>\r\n</ul>', 'payment.jpg', NULL, '', 'Formulir Pemesanan', 4, '2021-04-19 06:46:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mfep`
--

CREATE TABLE `mfep` (
  `id` int(15) NOT NULL,
  `id_siswa` varchar(15) NOT NULL,
  `id_kelas` varchar(15) NOT NULL,
  `pgm_kec` float DEFAULT NULL,
  `pgm_kab` float DEFAULT NULL,
  `pgm_prov` float DEFAULT NULL,
  `ujian_bing` float NOT NULL,
  `ujian_bind` float NOT NULL,
  `ujian_ipa` float NOT NULL,
  `ujian_mtk` float NOT NULL,
  `rapot4a` float NOT NULL,
  `rapot4b` float NOT NULL,
  `rapot5a` float NOT NULL,
  `rapot5b` float NOT NULL,
  `rapot6a` float NOT NULL,
  `rapot6b` float NOT NULL,
  `nilai_piagam` float DEFAULT NULL,
  `nilai_ujian` float DEFAULT NULL,
  `nilai_rapot` float DEFAULT NULL,
  `nilai_sub_piagam` float DEFAULT NULL,
  `nilai_sub_ujian` float DEFAULT NULL,
  `nilai_sub_rapot` float DEFAULT NULL,
  `total_nilai` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mfep`
--

INSERT INTO `mfep` (`id`, `id_siswa`, `id_kelas`, `pgm_kec`, `pgm_kab`, `pgm_prov`, `ujian_bing`, `ujian_bind`, `ujian_ipa`, `ujian_mtk`, `rapot4a`, `rapot4b`, `rapot5a`, `rapot5b`, `rapot6a`, `rapot6b`, `nilai_piagam`, `nilai_ujian`, `nilai_rapot`, `nilai_sub_piagam`, `nilai_sub_ujian`, `nilai_sub_rapot`, `total_nilai`) VALUES
(1, '17', '1', 9, 8, 0, 9, 8, 8, 7, 8.2, 8.2, 7.8, 7.8, 8.6, 8.6, 4.2, 8, 8.28, 0.84, 3.2, 3.312, 7.352),
(2, '21', '1', 8, 10, 8, 8, 7, 8, 9, 8, 8, 7.8, 7.8, 8.7, 8.7, 8.6, 8.2, 8.29, 1.72, 3.28, 3.316, 8.316);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_siswa`
--

CREATE TABLE `nilai_siswa` (
  `id_nilai` int(15) NOT NULL,
  `id_siswa` varchar(15) NOT NULL,
  `pgm_kec` float DEFAULT NULL,
  `pgm_kab` float DEFAULT NULL,
  `pgm_prov` float DEFAULT NULL,
  `ujian_bing` float NOT NULL,
  `ujian_bind` float NOT NULL,
  `ujian_ipa` float NOT NULL,
  `ujian_mtk` float NOT NULL,
  `rapot4a` float NOT NULL,
  `rapot4b` float NOT NULL,
  `rapot5a` float NOT NULL,
  `rapot5b` float NOT NULL,
  `rapot6a` float NOT NULL,
  `rapot6b` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai_siswa`
--

INSERT INTO `nilai_siswa` (`id_nilai`, `id_siswa`, `pgm_kec`, `pgm_kab`, `pgm_prov`, `ujian_bing`, `ujian_bind`, `ujian_ipa`, `ujian_mtk`, `rapot4a`, `rapot4b`, `rapot5a`, `rapot5b`, `rapot6a`, `rapot6b`) VALUES
(1, '17', 9, 8, NULL, 9, 8, 8, 7, 8.2, 8.2, 7.8, 7.8, 8.6, 8.6),
(2, '21', 8, 10, 8, 8, 7, 8, 9, 8, 8, 7.8, 7.8, 8.7, 8.7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ortu_siswa`
--

CREATE TABLE `ortu_siswa` (
  `id_ortu` int(20) NOT NULL,
  `id_siswa` varchar(15) NOT NULL,
  `ayah` varchar(30) NOT NULL,
  `alamat_ayah` text NOT NULL,
  `tgl_lahirayah` date NOT NULL,
  `agama_ayah` varchar(10) NOT NULL,
  `krj_ayah` varchar(20) NOT NULL,
  `ibu` varchar(30) NOT NULL,
  `alamat_ibu` text NOT NULL,
  `tgl_lahiribu` date NOT NULL,
  `agama_ibu` varchar(10) NOT NULL,
  `krj_ibu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ortu_siswa`
--

INSERT INTO `ortu_siswa` (`id_ortu`, `id_siswa`, `ayah`, `alamat_ayah`, `tgl_lahirayah`, `agama_ayah`, `krj_ayah`, `ibu`, `alamat_ibu`, `tgl_lahiribu`, `agama_ibu`, `krj_ibu`) VALUES
(1, '17', 'Fuad Wahab', 'Sindangkasih', '1966-03-15', 'islam', 'wiraswasta', 'Ella Maema', 'sindangkasih', '1968-02-08', 'islam', 'ibu rumah tangga'),
(2, '21', 'Fuad Wahab', 'Sindangkasih', '1966-03-15', 'islam', 'wiraswasta', 'Ella Maema', 'sindangkasih', '1968-02-08', 'islam', 'ibu rumah tangga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_rekening` int(11) DEFAULT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `token_transaksi` varchar(255) NOT NULL,
  `tanggal_order` date NOT NULL,
  `nomor_transaksi` int(11) NOT NULL,
  `status_pemesanan` varchar(255) NOT NULL DEFAULT 'Menunggu',
  `nama_pemesan` varchar(255) NOT NULL,
  `telepon_pemesan` varchar(255) NOT NULL,
  `email_pemesan` varchar(255) DEFAULT NULL,
  `alamat` varchar(300) NOT NULL,
  `jumlah_produk` int(11) NOT NULL,
  `harga_produk` bigint(20) NOT NULL,
  `total_harga` bigint(20) NOT NULL,
  `ongkir` bigint(20) DEFAULT NULL,
  `total_biaya` bigint(20) DEFAULT NULL,
  `tanggal_pemesanan` datetime DEFAULT NULL,
  `cara_bayar` varchar(255) DEFAULT NULL,
  `tanggal_bayar` date DEFAULT NULL,
  `bukti` varchar(255) DEFAULT NULL,
  `jumlah` bigint(20) DEFAULT NULL,
  `pengirim` varchar(255) DEFAULT NULL,
  `nama_bank_pengirim` varchar(255) DEFAULT NULL,
  `nomor_rekening_pengirim` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_user`, `id_produk`, `id_rekening`, `kode_transaksi`, `token_transaksi`, `tanggal_order`, `nomor_transaksi`, `status_pemesanan`, `nama_pemesan`, `telepon_pemesan`, `email_pemesan`, `alamat`, `jumlah_produk`, `harga_produk`, `total_harga`, `ongkir`, `total_biaya`, `tanggal_pemesanan`, `cara_bayar`, `tanggal_bayar`, `bukti`, `jumlah`, `pengirim`, `nama_bank_pengirim`, `nomor_rekening_pengirim`, `keterangan`, `tanggal_post`, `tanggal_update`) VALUES
(1, 4, 2, 0, 'JWM202006100001', 'kMpUQADBlGkeTQhR7439a6zsqX6dWmzK', '2020-06-10', 1, 'Dikirim', 'Andoyo', '085715100485', 'javawebmedia@gmail.com', 'adadada', 1, 12000, 12000, 0, 0, '2020-06-10 07:57:46', '', '0000-00-00', '', 0, '', '', '', '', '2020-06-10 07:57:46', '2020-06-12 13:53:42'),
(2, 4, 1, 0, 'JWM202006120002', 'wvFD60jruVx9vYJ1aFL4WLOZAeYQXkxx', '2020-06-12', 2, 'Menunggu', 'Eflita Meiyetriani', '085715100485', 'javawebmedia@gmail.com', 'ADADA ADADA ADADA AAFA', 1, 10000, 10000, 0, 0, '2020-06-12 12:12:56', '', '0000-00-00', '', 0, '', '', '', '', '2020-06-12 12:12:56', '2020-06-12 14:13:02'),
(3, 0, 1, 0, 'JWM202006120003', 'alN7qAzNj1lopbjwsWswvKecvWjxQUzv', '2020-06-12', 3, 'Menunggu', 'Rayyan Andoyo', '085715100485', 'lalu-kekah@bkkbn.go.id', 'Perumahan Ferrari', 1, 10000, 10000, 0, 0, '2020-06-12 17:57:42', '', '0000-00-00', '', 0, '', '', '', '', '2020-06-12 17:57:42', '2020-06-12 17:57:42'),
(4, 4, 1, 0, 'JWM202006120004', 'P3uAxeJ3TSvlfYzGRjwgMncwLBQdq3vb', '2020-06-12', 4, 'Konfirmasi', 'Rayyan Andoyo', '085715100485', 'lalu-kekah@bkkbn.go.id', 'Perumahan Ferrari', 1, 10000, 10000, 0, 0, '2020-06-12 17:58:15', '', '0000-00-00', '', 0, '', '', '', '', '2020-06-12 17:58:15', '2020-06-12 18:56:39'),
(5, 4, 1, 2, 'JWM202006120005', 'rrzHk1NcrkK3KvYnqse4XdudWGz3tiZL', '1970-01-01', 5, 'Selesai', 'UDIN SIMALAKAMA', '085715100485', 'javawebmedia@gmail.com', 'Desa Sumberejo', 1, 10000, 10000, 200000, 210000, '2020-06-12 18:19:57', 'Transfer', '2020-06-13', '357-1591985014.jpg', 200000, 'Andoyo', 'BCA', '2424242', NULL, '2020-06-12 18:03:35', '2020-06-12 18:54:33'),
(6, 0, 5, NULL, 'JWM202006180006', 'MxnOVRcARIiPe3vBI4O9YoVxJY0z3B2M', '2020-06-18', 6, 'Menunggu', 'Andoyo', '085715100485', 'javawebmedia@gmail.com', 'adadada adada', 1, 120000, 120000, NULL, NULL, '2020-06-18 07:57:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-18 07:57:03', '2020-06-18 07:57:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_client` int(11) DEFAULT NULL,
  `id_kategori_produk` int(11) NOT NULL,
  `slug_produk` varchar(255) NOT NULL,
  `kode_produk` varchar(20) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `status_produk` varchar(20) NOT NULL,
  `satuan` varchar(255) DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `isi` text NOT NULL,
  `harga_jual` int(11) DEFAULT NULL,
  `harga_beli` int(11) DEFAULT NULL,
  `harga_terendah` int(11) DEFAULT NULL,
  `harga_tertinggi` int(11) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `keywords` varchar(500) DEFAULT NULL,
  `mulai_diskon` date DEFAULT NULL,
  `selesai_diskon` date DEFAULT NULL,
  `besar_diskon` int(12) DEFAULT NULL,
  `jenis_diskon` enum('Potongan','Persentase') DEFAULT NULL,
  `jumlah_order_min` int(11) DEFAULT NULL,
  `jumlah_order_max` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `ukuran` varchar(255) DEFAULT NULL,
  `hits` bigint(20) DEFAULT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `nomor_rekening` varchar(255) NOT NULL,
  `atas_nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `nama_bank`, `nomor_rekening`, `atas_nama`, `gambar`, `urutan`, `tanggal`) VALUES
(1, 'BCA KCP DEPOK', '4212-5482-04', 'ANDOYO', 'bca.jpg', 1, '2020-06-11 21:36:46'),
(2, 'BNI SYARIAH DEPOK', '0611-9927-06', 'CV JAVA WEB MEDIA', 'Logo_BNI_Syariah.png', 2, '2019-11-12 23:54:18'),
(4, 'BANK MANDIRI KCU DEPOK', '157-00-0180776-8', 'EFLITA MEIYETRIANI', 'mandiri.png', 4, '2019-11-12 23:58:42'),
(5, 'BANK BNI KCU DEPOK', '0105-3010-01', 'EFLITA MEIYETRIANI', 'bni.png', 5, '2019-11-13 00:00:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `kode_rahasia` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`, `kode_rahasia`, `gambar`, `tanggal`) VALUES
(4, 'Andoyo Cakep', 'javawebmedia@gmail.com', 'javawebmedia', 'dc28d4424ece38803650f440d7eb1cb2b3fb6651', 'Admin', NULL, 'testimonials-1.jpg', '2020-06-20 06:51:42'),
(14, 'Eflita Meiyetriani', 'eflita@gmail.com', 'eflita', '4228f9df60d56e866971c15271382b9f10251ce0', 'Admin', NULL, NULL, '2020-06-11 23:17:42'),
(15, 'Trial', 'trial@gmail.com', 'trial', '069fd3a44db682e9a4ea4bf495c0ffbee58c8431', 'Admin', NULL, NULL, '2021-04-05 04:17:13'),
(16, 'Rizna Novia Faradilla', 'riznafaradilla@gmail.com', 'dev', '0dbfb112168528b103b4f0993ba2b9ed76a877a6', 'siswa', NULL, NULL, '2021-04-20 07:51:53'),
(17, 'vidi', 'contact@abc.co.id', 'vidial', '1a1ed1c93a3ebca3f77fdf3a49537d7feaa0fa19', 'siswa', NULL, NULL, '2021-04-21 05:47:52'),
(18, 'Ella Maema', 'rizna.novia4@gmail.com', 'elma', '0fca16f20454f1cbcc36b9aa96ebbfcef0652f6e', 'siswa', NULL, NULL, '2021-04-21 05:53:06'),
(19, 'a', 'a@abc', 'java', '23524be9dba14bc2f1975b37f95c3381771595c8', 'siswa', NULL, NULL, '2021-04-21 06:03:31'),
(20, 'Rizna Novia Faradilla', 'rizna.novia4@gmail.com', 'rizna', 'be335984f07d3f54567e68ed60b9921d7051be78', 'siswa', NULL, NULL, '2021-04-21 06:42:16'),
(21, 'Muhammad Nizar', 'contact@abc.co.id', 'nizar', 'bb1965540bb17365207ac2b3844936f85696032a', 'siswa', NULL, NULL, '2021-06-08 04:43:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `posisi` varchar(20) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `video` text NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `bahasa` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`id_video`, `judul`, `posisi`, `keterangan`, `video`, `urutan`, `bahasa`, `id_user`, `tanggal`) VALUES
(1, 'BAGIAN 1 DASAR-DASAR CSS KURSUS JAVA WEB MEDIA ', 'Homepage', 'BAGIAN 1 DASAR-DASAR CSS KURSUS JAVA WEB MEDIA ', 'kOEbjxl42hQ', 1, 'Indonesia', 4, '2020-01-21 23:47:59'),
(2, 'BAGIAN 2 PERENCANAAN DATABASE, PHPMYADMIN, EXPORT DAN IMPORT ', 'Homepage', 'BAGIAN 2 PERENCANAAN DATABASE, PHPMYADMIN, EXPORT DAN IMPORT ', '3Tn79YuiWX8', 2, 'Indonesia', 4, '2020-01-21 23:48:16'),
(3, 'BAGIAN 3 - CODEIGNITER DAN CRUD DASAR ', 'Homepage', 'BAGIAN 3 - CODEIGNITER DAN CRUD DASAR ', '-X0Jwf3V8SY', 3, 'Indonesia', 4, '2020-01-21 23:50:25'),
(4, 'BAGIAN 4 - MODUL USER/ADMINISTRATOR', 'Homepage', 'BAGIAN 4 - MODUL USER/ADMINISTRATOR', 'K9RoEV1U3YQ', 4, 'Indonesia', 4, '2020-01-21 23:50:21'),
(5, 'BAGIAN 5 - AUTHENTICATION LOGIN, LOGOUT DAN PROTEKSI HALAMAN', 'Homepage', 'BAGIAN 5 - AUTHENTICATION LOGIN, LOGOUT DAN PROTEKSI HALAMAN', 'pweuSiKKCcs', 5, 'Indonesia', 4, '2020-01-21 23:50:17'),
(6, 'BAGIAN 6 - MODUL BERITA, KATEGORI BERITA DAN TINYMCE ', 'Homepage', 'BAGIAN 6 - MODUL BERITA, KATEGORI BERITA DAN TINYMCE ', 'Lmxkm0C8ZlY', 6, 'Indonesia', 4, '2020-01-21 23:50:14'),
(7, 'BAGIAN 7 TEMPLATE DAN LAYOUT FRONT END', 'Homepage', 'BAGIAN 7 TEMPLATE DAN LAYOUT FRONT END', 'Lb8NTMZrFaE', 7, 'Indonesia', 4, '2020-01-21 23:50:10'),
(8, 'BAGIAN 8 MENAMPILKAN LISTING DAN DETAIL BERITA (TUTORIAL CODEIGNITER)', 'Homepage', 'BAGIAN 8 MENAMPILKAN LISTING DAN DETAIL BERITA (TUTORIAL CODEIGNITER)', 'uNdvaTZiOHo', 8, 'Indonesia', 4, '2020-01-21 23:50:06'),
(9, 'BAGIAN 9 MODUL DOKUMEN DAN UPLOAD FILE ', 'Homepage', 'BAGIAN 9 MODUL DOKUMEN DAN UPLOAD FILE ', 'IKAQLcQEJx0', 9, 'Indonesia', 4, '2020-01-21 23:50:03'),
(10, 'BAGIAN 10 MODUL GALERI DAN VIDEO SERTA MODUL KONFIGURASI', 'Homepage', 'BAGIAN 10 MODUL GALERI DAN VIDEO SERTA MODUL KONFIGURASI', 'h2YDawzGTTQ', 10, 'Indonesia', 4, '2020-01-21 23:49:59'),
(11, 'BAGIAN 11 HOMEPAGE SLIDER, GALERI, VIDEO DAN KONTAK CODEIGNITER TUTORIAL ', 'Homepage', 'BAGIAN 11 HOMEPAGE SLIDER, GALERI, VIDEO DAN KONTAK CODEIGNITER TUTORIAL ', 'dTA3-GxQyks', 11, 'Indonesia', 4, '2020-01-21 23:49:55'),
(12, 'BAGIAN 12 INSPECT ELEMENT, MENGUBAH CSS, PEMESANAN DOMAIN DAN UPLOAD WEB ONLINE', 'Homepage', 'BAGIAN 12 INSPECT ELEMENT, MENGUBAH CSS, PEMESANAN DOMAIN DAN UPLOAD WEB ONLINE', '58xSNF_kxno', 12, 'Indonesia', 4, '2020-01-21 23:49:52'),
(13, 'TUTORIAL JAVA WEB MEDIA - INSTALASI WEB SERVER DAN CODE EDITOR SUBLIME TEXT 3', 'Homepage', 'TUTORIAL JAVA WEB MEDIA - INSTALASI WEB SERVER DAN CODE EDITOR SUBLIME TEXT 3', 'pOZE0bb7iLc', 13, 'Indonesia', 4, '2020-01-21 23:49:49'),
(14, 'SESI 1 DASAR DASAR HTML DAN CSS (COMPANY PROFILE WEB)', 'Homepage', 'SESI 1 DASAR DASAR HTML DAN CSS (COMPANY PROFILE WEB)', 'iiXpy9au9rI', 14, 'Indonesia', 4, '2020-01-21 23:49:45'),
(15, 'SESI 2 CSS, SELECTOR CSS DAN PENERAPANNYA DI HTML5 (WEB DEVELOPMENT) ', 'Homepage', 'SESI 2 CSS, SELECTOR CSS DAN PENERAPANNYA DI HTML5 (WEB DEVELOPMENT) ', 'IvjxrQ8c4-w', 15, 'Indonesia', 4, '2020-01-21 23:49:40'),
(16, 'SESI 3 MEMBUAT TEMPLATE SEDERHANA DENGAN HTML5 DAN CSS3 ', 'Homepage', 'SESI 3 MEMBUAT TEMPLATE SEDERHANA DENGAN HTML5 DAN CSS3 ', 's3hP3OJ9xE4', 16, 'Indonesia', 4, '2020-01-21 23:49:34'),
(17, 'SESI 6 MEMBUAT TEMPLATE DENGAN BOOTSTRAP 4 DAN JQUERY (COMPANY PROFILE WEB)', 'Homepage', 'SESI 6 MEMBUAT TEMPLATE DENGAN BOOTSTRAP 4 DAN JQUERY (COMPANY PROFILE WEB)', 'SpP_OdIlGHs', 17, 'Indonesia', 4, '2020-01-21 23:49:30'),
(18, 'SESI 7 MEMBUAT TEMPLATE DENGAN BOOTSTRAP 4, JQUERY DAN FONT AWESOME (WEBSITE PROFIL PERUSAHAN)', 'Homepage', 'SESI 7 MEMBUAT TEMPLATE DENGAN BOOTSTRAP 4, JQUERY DAN FONT AWESOME (WEBSITE PROFIL PERUSAHAN)', 'YeoB2qlBwJo', 18, 'Indonesia', 4, '2020-01-21 23:49:26'),
(19, 'SESI 8 PERENCANAAN DATABASE WEBSITE COMPANY PROFILE MYSQL', 'Homepage', 'SESI 8 PERENCANAAN DATABASE WEBSITE COMPANY PROFILE MYSQL', 'LLNPd9EZMxA', 19, 'Indonesia', 4, '2020-01-21 23:49:22'),
(20, 'SESI 9 INSTALASI DAN KONFIGURASI CODEIGNITER DAN INTEGRASI TEMPLATE', 'Homepage', 'SESI 9 INSTALASI DAN KONFIGURASI CODEIGNITER DAN INTEGRASI TEMPLATE', 'aEZYJG56pAU', 20, 'Indonesia', 4, '2020-01-21 23:49:18'),
(21, 'SESI 10 INTEGRASI TEMPLATE BOOTSTRAP 4 DENGAN CODEIGNITER ', 'Homepage', 'SESI 10 INTEGRASI TEMPLATE BOOTSTRAP 4 DENGAN CODEIGNITER ', '7tzS8cz2llg', 21, 'Indonesia', 4, '2020-01-21 23:49:13'),
(22, 'SESI 11 INTEGRASI TEMPLATE ADMIN LTE DENGAN CODEIGNITER', 'Homepage', 'SESI 11 INTEGRASI TEMPLATE ADMIN LTE DENGAN CODEIGNITER', 'eklNEGqM8cw', 22, 'Indonesia', 4, '2020-01-21 23:49:08'),
(23, 'SESI 12 CRUD TABEL USER DENGAN CODEIGNITER (WEBSITE PROFIL PERUSAHAAN)', 'Homepage', 'SESI 12 CRUD TABEL USER DENGAN CODEIGNITER (WEBSITE PROFIL PERUSAHAAN)', 'dzlU98D7JaA', 23, 'Indonesia', 4, '2020-01-21 23:49:03'),
(24, 'SESI 13 LOGIN, LOGOUT, PROTEKSI HALAMAN, UPDATE PROFILE DAN MEMBUAT LIBRARY SENDIRI DENGAN CODEIGNIT', 'Homepage', 'SESI 13 LOGIN, LOGOUT, PROTEKSI HALAMAN, UPDATE PROFILE DAN MEMBUAT LIBRARY SENDIRI DENGAN CODEIGNIT', 'iE6MdliJtyY', 24, 'Indonesia', 4, '2020-01-21 23:48:58'),
(25, 'SESI 14 CRUD KATEGORI BERITA', 'Homepage', 'SESI 14 CRUD KATEGORI BERITA', '2-HkYTSCTnI', 25, 'Indonesia', 4, '2020-01-21 23:48:26'),
(26, 'SESI 15 CRUD TABEL BERITA DAN INSTALASI TINYMCE (WEBSITE PERUSAHAAN) ', 'Homepage', 'SESI 15 CRUD TABEL BERITA DAN INSTALASI TINYMCE (WEBSITE PERUSAHAAN) ', 'fAuGTEvmf1E', 26, 'Indonesia', 4, '2020-01-21 23:50:45'),
(27, 'SESI 16 CRUD TABEL LAYANAN DENGAN CODEIGNITER (WEBSITE PERUSAHAAN)', 'Homepage', 'SESI 16 CRUD TABEL LAYANAN DENGAN CODEIGNITER (WEBSITE PERUSAHAAN)', 'AB9G5lg8k1w', 27, 'Indonesia', 4, '2020-01-21 23:50:51'),
(28, 'SESI 17 CRUD TABEL GALERI DENGAN CODEIGNITER (WEBSITE PERUSAHAAN) ', 'Homepage', 'SESI 17 CRUD TABEL GALERI DENGAN CODEIGNITER (WEBSITE PERUSAHAAN) ', 'jZgdAR4OOsc', 28, 'Indonesia', 4, '2020-01-21 23:50:55'),
(29, 'SESI 18 MEMBUAT KONFIGURASI WEBSITE DENGAN CODEIGNITER (WEBSITE PERUSAHAAN) ', 'Homepage', 'SESI 18 MEMBUAT KONFIGURASI WEBSITE DENGAN CODEIGNITER (WEBSITE PERUSAHAAN) ', '5NbLSXUVrQM', 29, 'Indonesia', 4, '2020-01-21 23:50:58'),
(30, 'SESI 19 MENGELOLA HOMEPAGE, GAMBAR SLIDER, LAYANAN DAN BERITA DENGAN CODEIGNITER ', 'Homepage', 'SESI 19 MENGELOLA HOMEPAGE, GAMBAR SLIDER, LAYANAN DAN BERITA DENGAN CODEIGNITER ', 'sP9KVfvZJBM', 30, 'Indonesia', 4, '2020-01-21 23:51:02'),
(31, 'SESI 20 HALAMAN DETAIL BERITA DAN BELAJAR PAGINATION DI HALAMAN BERITA DENGAN CODEIGNITER', 'Homepage', 'SESI 20 HALAMAN DETAIL BERITA DAN BELAJAR PAGINATION DI HALAMAN BERITA DENGAN CODEIGNITER', 'NN_A7N6l9zM', 31, 'Indonesia', 4, '2020-01-21 23:51:07'),
(32, 'SESI 21 HALAMAN LAYANAN DAN DETAILNYA DENGAN CODEIGNITER ', 'Homepage', 'SESI 21 HALAMAN LAYANAN DAN DETAILNYA DENGAN CODEIGNITER ', 'JdMErkxzdB0', 32, 'Indonesia', 4, '2020-01-21 23:51:10'),
(33, 'SESI 22 HALAMAN KONTAK DAN DASBOR ADMINISTRATOR DENGAN CODEIGNITER', 'Homepage', 'SESI 22 HALAMAN KONTAK DAN DASBOR ADMINISTRATOR DENGAN CODEIGNITER', 'it97Ls9n-BA', 33, 'Indonesia', 4, '2020-01-21 23:51:14'),
(34, 'SESI 23 MEMBELI DOMAIN DAN HOSTING, LALU UPLOAD WEBSITE KE SERVER DAN KONFIGURASINYA ', 'Homepage', 'SESI 23 MEMBELI DOMAIN DAN HOSTING, LALU UPLOAD WEBSITE KE SERVER DAN KONFIGURASINYA ', 'fTbkiEmCEXk', 34, 'Indonesia', 4, '2020-01-21 23:51:18'),
(35, 'BAGIAN 1 DASAR DASAR CSS', 'Homepage', 'BAGIAN 1 DASAR DASAR CSS', 'kOEbjxl42hQ', 35, 'Indonesia', 4, '2020-01-21 23:51:21'),
(36, 'BAGIAN 2 PERENCANAAN DATABASE, PHPMYADMIN, EXPORT DAN IMPORT', 'Homepage', 'BAGIAN 2 PERENCANAAN DATABASE, PHPMYADMIN, EXPORT DAN IMPORT', '3Tn79YuiWX8', 36, 'Indonesia', 4, '2020-01-21 23:51:26'),
(37, 'BAGIAN 3 - CODEIGNITER DAN CRUD DASAR ', 'Homepage', 'BAGIAN 3 - CODEIGNITER DAN CRUD DASAR ', '-X0Jwf3V8SY', 37, 'Indonesia', 4, '2020-01-21 23:51:29'),
(38, 'BAGIAN 4 - MODUL USER/ADMINISTRATOR ', 'Homepage', 'BAGIAN 4 - MODUL USER/ADMINISTRATOR ', 'K9RoEV1U3YQ', 38, 'Indonesia', 4, '2020-01-21 23:51:33'),
(39, 'BAGIAN 5 - AUTHENTICATION LOGIN, LOGOUT DAN PROTEKSI HALAMAN ', 'Homepage', 'BAGIAN 5 - AUTHENTICATION LOGIN, LOGOUT DAN PROTEKSI HALAMAN ', 'pweuSiKKCcs', 39, 'Indonesia', 4, '2020-01-21 23:51:37'),
(40, 'BAGIAN 6 - MODUL BERITA, KATEGORI BERITA DAN TINYMCE ', 'Homepage', 'BAGIAN 6 - MODUL BERITA, KATEGORI BERITA DAN TINYMCE ', 'Lmxkm0C8ZlY', 40, 'Indonesia', 4, '2020-01-21 23:51:41'),
(41, 'BAGIAN 7 TEMPLATE DAN LAYOUT FRONT END ', 'Homepage', 'BAGIAN 7 TEMPLATE DAN LAYOUT FRONT END ', 'Lb8NTMZrFaE', 41, 'Indonesia', 4, '2020-01-21 23:51:44'),
(42, '  BAGIAN 8 MENAMPILKAN LISTING DAN DETAIL BERITA (TUTORIAL CODEIGNITER)', 'Homepage', '\r\n\r\nBAGIAN 8 MENAMPILKAN LISTING DAN DETAIL BERITA (TUTORIAL CODEIGNITER)', 'uNdvaTZiOHo', 42, 'Indonesia', 4, '2020-01-21 23:51:48'),
(43, 'BAGIAN 9 MODUL DOKUMEN ', 'Homepage', 'BAGIAN 9 MODUL DOKUMEN ', 'IKAQLcQEJx0', 43, 'Indonesia', 4, '2020-01-21 23:51:51'),
(44, 'BAGIAN 10 MODUL GALERI DAN VIDEO SERTA MODUL KONFIGURASI', 'Homepage', 'BAGIAN 10 MODUL GALERI DAN VIDEO SERTA MODUL KONFIGURASI', 'h2YDawzGTTQ', 44, 'Indonesia', 4, '2020-01-21 23:51:55'),
(45, 'BAGIAN 11 HOMEPAGE SLIDER, GALERI, VIDEO DAN KONTAK CODEIGNITER TUTORIAL', 'Homepage', 'BAGIAN 11 HOMEPAGE SLIDER, GALERI, VIDEO DAN KONTAK CODEIGNITER TUTORIAL', 'dTA3-GxQyks', 45, 'Indonesia', 4, '2020-01-21 23:51:58'),
(46, 'TUTORIAL JAVA WEB MEDIA - INSTALASI WEB SERVER DAN CODE EDITOR SUBLIME TEXT 3', 'Homepage', 'TUTORIAL JAVA WEB MEDIA - INSTALASI WEB SERVER DAN CODE EDITOR SUBLIME TEXT 3', 'pOZE0bb7iLc', 46, 'Indonesia', 4, '2020-01-21 23:52:02'),
(47, 'KURSUS CODEIGNITER JAVA WEB MEDIA 1 - PERENCANAAN DATABASE SISTEM INFORMASI PERPUSTAKAAN ', 'Homepage', 'KURSUS CODEIGNITER JAVA WEB MEDIA 1 - PERENCANAAN DATABASE SISTEM INFORMASI PERPUSTAKAAN ', 'Zhb_7mo8iAU', 47, 'Indonesia', 4, '2020-01-21 23:52:05'),
(48, 'KURSUS CODEIGNITER JAVA WEB MEDIA 2 - INSTALLASI CODEIGNITER DAN KONFIGURASINYA (SI PERPUSTAKAAN) ', 'Homepage', 'KURSUS CODEIGNITER JAVA WEB MEDIA 2 - INSTALLASI CODEIGNITER DAN KONFIGURASINYA (SI PERPUSTAKAAN) ', 'fpRh51vnuII', 48, 'Indonesia', 4, '2020-01-21 23:52:08'),
(49, 'KURSUS CODEIGNITER JAVA WEB MEDIA 3 - TEMPLATING DAN LAYOUTING BACK END (SI PERPUSTAKAAN)', 'Homepage', 'KURSUS CODEIGNITER JAVA WEB MEDIA 3 - TEMPLATING DAN LAYOUTING BACK END (SI PERPUSTAKAAN)', 'r564woEZ3VA', 49, 'Indonesia', 4, '2020-01-21 23:52:12'),
(50, 'KURSUS CODEIGNITER 4 - CRUD MODUL USER (SI PERPUSTAKAAN)', 'Homepage', 'KURSUS CODEIGNITER 4 - CRUD MODUL USER (SI PERPUSTAKAAN)', '2yWPXLA7DZA', 50, 'Indonesia', 4, '2020-01-21 23:52:17'),
(51, 'KURSUS CODEIGNITER JAVA WEB MEDIA 5 - LOGIN, LOGOUT DAN PROTEKSI HALAMAN (SI PERPUSTAKAAN)', 'Homepage', 'KURSUS CODEIGNITER JAVA WEB MEDIA 5 - LOGIN, LOGOUT DAN PROTEKSI HALAMAN (SI PERPUSTAKAAN)', 'fAYnWt4EuYU', 51, 'Indonesia', 4, '2020-01-21 23:52:31'),
(52, 'KURSUS CODEIGNITER JAVA WEB MEDIA 6 - CRUD MODUL ANGGOTA (SI PERPUSTAKAAN) ', 'Homepage', 'KURSUS CODEIGNITER JAVA WEB MEDIA 6 - CRUD MODUL ANGGOTA (SI PERPUSTAKAAN) ', 'er8PYRvtJmE', 52, 'Indonesia', 4, '2020-01-21 23:52:35'),
(53, 'KURSUS CODEIGNITER JAVA WEB MEDIA 7 - CRUD TABEL TABEL REFERENSI, PERBAIKAN DELETE USER DAN ANGGOTA ', 'Homepage', 'KURSUS CODEIGNITER JAVA WEB MEDIA 7 - CRUD TABEL TABEL REFERENSI, PERBAIKAN DELETE USER DAN ANGGOTA ', 'y-p_A9nMcfI', 53, 'Indonesia', 4, '2020-01-21 23:52:39'),
(54, 'KURSUS CODEIGNITER JAVA WEB MEDIA 8 - MEMBUAT HALAMAN BERANDA HOMEPAGE (SI PERPUSTAKAAN) ', 'Homepage', 'KURSUS CODEIGNITER JAVA WEB MEDIA 8 - MEMBUAT HALAMAN BERANDA HOMEPAGE (SI PERPUSTAKAAN) ', 'avJElC1KbAQ', 54, 'Indonesia', 4, '2020-01-21 23:52:42'),
(55, 'KURSUS CODEIGNITER JAVA WEB MEDIA 9 - MODUL BUKU TAMBAH DAN LISTING (SI PERPUSTAKAAN) ', 'Homepage', 'KURSUS CODEIGNITER JAVA WEB MEDIA 9 - MODUL BUKU TAMBAH DAN LISTING (SI PERPUSTAKAAN) ', 'KMt3po80qls', 55, 'Indonesia', 4, '2020-01-21 23:52:46'),
(56, 'KURSUS CODEIGNITER JAVA WEB MEDIA 10 - MODUL BUKU EDIT DAN DETAIL BUKU (SI PERPUSTAKAAN)', 'Homepage', 'KURSUS CODEIGNITER JAVA WEB MEDIA 10 - MODUL BUKU EDIT DAN DETAIL BUKU (SI PERPUSTAKAAN)', 'qpoIlWpmFHk', 56, 'Indonesia', 4, '2020-01-21 23:52:49'),
(57, 'KURSUS CODEIGNITER JAVA WEB MEDIA 11 - MODUL FILE BUKU ATAU EBOOK (SI PERPUTAKAAN) ', 'Homepage', 'KURSUS CODEIGNITER JAVA WEB MEDIA 11 - MODUL FILE BUKU ATAU EBOOK (SI PERPUTAKAAN) ', 'GVfChqD1Ev0', 57, 'Indonesia', 4, '2020-01-21 23:52:53'),
(58, 'KURSUS CODEIGNITER JAVA WEB MEDIA 12 - CRUD MODUL BERITA ( (SI PERPUTAKAAN)', 'Homepage', 'KURSUS CODEIGNITER JAVA WEB MEDIA 12 - CRUD MODUL BERITA ( (SI PERPUTAKAAN)', 'Uh5tC_LnvvI', 58, 'Indonesia', 4, '2020-01-21 23:52:57'),
(59, 'KURSUS CODEIGNITER JAVA WEB MEDIA 13 - MENGELOLA HALAMAN BERANDA (SI PERPUSTAKAAN)', 'Homepage', 'KURSUS CODEIGNITER JAVA WEB MEDIA 13 - MENGELOLA HALAMAN BERANDA (SI PERPUSTAKAAN)', 'UmsNC7RMWeg', 59, 'Indonesia', 4, '2020-01-21 23:53:01'),
(60, 'KURSUS CODEIGNITER JAVA WEB MEDIA 14 - MENGELOLA HALAMAN BERANDA DAN KATALOG BUKU (SI PERPUSTAKAAN)', 'Homepage', 'KURSUS CODEIGNITER JAVA WEB MEDIA 14 - MENGELOLA HALAMAN BERANDA DAN KATALOG BUKU (SI PERPUSTAKAAN)', 'MB3YD8IorjE', 60, 'Indonesia', 4, '2020-01-21 23:53:04'),
(61, 'KURSUS CODEIGNITER JAVA WEB MEDIA 15 - MEMBACA BUKU PDF, HALAMAN BUKU BARU, USULAN DAN KONTAK', 'Homepage', 'KURSUS CODEIGNITER JAVA WEB MEDIA 15 - MEMBACA BUKU PDF, HALAMAN BUKU BARU, USULAN DAN KONTAK', '4FfkwHRuQ8M', 61, 'Indonesia', 4, '2020-01-21 23:53:08'),
(62, 'TUTORIAL CODEIGNITER JAVA WEB MEDIA 16 - MEMBUAT KONFIGURASI WEBSITE YANG MUDAH DI UPDATE', 'Homepage', 'TUTORIAL CODEIGNITER JAVA WEB MEDIA 16 - MEMBUAT KONFIGURASI WEBSITE YANG MUDAH DI UPDATE', 'FBGdNKLeArM', 62, 'Indonesia', 4, '2020-01-21 23:53:12'),
(63, 'SESI 17 PEMINJAMAN BUKU SI PERPUSTAKAAN DENGAN CODEGNITER', 'Homepage', 'SESI 17 PEMINJAMAN BUKU SI PERPUSTAKAAN DENGAN CODEGNITER', '1BRG8HzghuE', 63, 'Indonesia', 4, '2020-01-21 23:53:15'),
(64, 'SESI 18 CRUD LINK DAN MENAMPILKAN DI HOMEPAGE (SI PERPUSTAKAAN) ', 'Homepage', 'SESI 18 CRUD LINK DAN MENAMPILKAN DI HOMEPAGE (SI PERPUSTAKAAN) ', 'aTRXIePwiOU', 64, 'Indonesia', 4, '2020-01-21 23:53:19');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `datasiswa`
--
ALTER TABLE `datasiswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `dok_siswa`
--
ALTER TABLE `dok_siswa`
  ADD PRIMARY KEY (`id_dok`);

--
-- Indeks untuk tabel `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id_download`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `gambar_produk`
--
ALTER TABLE `gambar_produk`
  ADD PRIMARY KEY (`id_gambar_produk`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD UNIQUE KEY `nama_kategori` (`nama_kategori`);

--
-- Indeks untuk tabel `kategori_download`
--
ALTER TABLE `kategori_download`
  ADD PRIMARY KEY (`id_kategori_download`);

--
-- Indeks untuk tabel `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  ADD PRIMARY KEY (`id_kategori_galeri`);

--
-- Indeks untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id_kategori_produk`),
  ADD UNIQUE KEY `nama_kategori` (`nama_kategori_produk`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indeks untuk tabel `mfep`
--
ALTER TABLE `mfep`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `ortu_siswa`
--
ALTER TABLE `ortu_siswa`
  ADD PRIMARY KEY (`id_ortu`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD UNIQUE KEY `kode_transaksi` (`kode_transaksi`),
  ADD UNIQUE KEY `token_transaksi` (`token_transaksi`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `dok_siswa`
--
ALTER TABLE `dok_siswa`
  MODIFY `id_dok` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `download`
--
ALTER TABLE `download`
  MODIFY `id_download` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `gambar_produk`
--
ALTER TABLE `gambar_produk`
  MODIFY `id_gambar_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kategori_download`
--
ALTER TABLE `kategori_download`
  MODIFY `id_kategori_download` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  MODIFY `id_kategori_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id_kategori_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `mfep`
--
ALTER TABLE `mfep`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  MODIFY `id_nilai` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ortu_siswa`
--
ALTER TABLE `ortu_siswa`
  MODIFY `id_ortu` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
