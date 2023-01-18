-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2022 pada 10.38
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mppkdi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `egov`
--

CREATE TABLE `egov` (
  `ideg` int(20) NOT NULL,
  `egname` varchar(700) NOT NULL,
  `eglink` varchar(800) NOT NULL,
  `egpic` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq`
--

CREATE TABLE `faq` (
  `idfaq` int(50) NOT NULL,
  `quest` varchar(700) NOT NULL,
  `ans` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `faq`
--

INSERT INTO `faq` (`idfaq`, `quest`, `ans`) VALUES
(1, 'Bagaimana cara daftar di OSS?', '                                    <p>coba buka diÂ <a href=\"https://oss.go.id/\" style=\"background-color: rgb(255, 255, 255); font-size: 1rem;\">https://oss.go.id/</a></p>                                ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `instansi`
--

CREATE TABLE `instansi` (
  `idins` int(40) NOT NULL,
  `namains` varchar(700) NOT NULL,
  `desins` varchar(10000) NOT NULL,
  `picins` varchar(600) NOT NULL,
  `catins` varchar(300) NOT NULL,
  `linkins` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `instansi`
--

INSERT INTO `instansi` (`idins`, `namains`, `desins`, `picins`, `catins`, `linkins`) VALUES
(1, 'KEPOLISIAN RESOR KOTA KENDARI', '                                                                                                                              Polres Kendari adalah salah satu polres jajaran Polda Sulawesi Tenggara yang saat ini dipimpin oleh Kapolres AKBP Sigid Haryadi, SIK.\r\n\r\nWilayah hukum Polres Kendari meliputi :\r\n\r\nKota Kendari\r\nKabupaten Konawe yaitu Kecamatan Soropia dan Kecamatan Lalonggasumeeto\r\nKabupaten Konawe Selatan yaitu Kecamatan Konda, Wolasi, Ranomeeto dan Ranomeeto Barat.\r\nKabupaten Konawe Kepulauan\r\nGuna melindungi wilayah hukumnya dari gangguan Kamtibmas, Polres Kendari memiliki 15 (lima belas) Polsek, dengan jumlah personil sebanyak 901 orang. Yang terdiri dari 6 Pamen, 84 Pama, 794 Bintara, dan 17 PNS Polri. Perbandingan anggota Polri dengan jumlah penduduk adalah 1: 327 orang. Saat pertama kali dibentuk, Polres ini berada di kemaraya yang sekarang menjadi polsek kemaraya dan sekarang polres kendari berada di Jln. DI. Panjaitan No 1 yang dulunya adalah polda sultra .                                                                                                                ', 'Lambang_Polda_Sultra.png', 'kementerian', 'https://humaspolreskendari.wordpress.com/'),
(2, 'BPJS KESEHATAN KOTA KENDARI', '                                                                        <p class=\"MsoNormal\" style=\"margin-bottom: 30px; font-size: 16px; color: rgb(0, 0, 0); font-family: \"Open Sans\", sans-serif; line-height: 1.8; text-align: justify;\">Jaminan pemeliharaan kesehatan di Indonesia sebenarnya sudah ada sejak zaman kolonial Belanda. Dan setelah kemerdekaan, pada tahun 1949, setelah pengakuan kedaulatan oleh Pemerintah Belanda, upaya untuk menjamin kebutuhan pelayanan kesehatan bagi masyarakat, khususnya pegawai negeri sipil beserta keluarga, tetap dilanjutkan. Prof. G.A. Siwabessy, selaku Menteri Kesehatan yang menjabat pada saat itu, mengajukan sebuah gagasan untuk perlu segera menyelenggarakan program asuransi kesehatan semesta (universal health insurance) yang saat itu mulai diterapkan di banyak negara maju dan tengah berkembang pesat.<o:p></o:p></p><p class=\"MsoNormal\" style=\"margin-bottom: 18pt; font-size: 16px; color: rgb(0, 0, 0); font-family: \"Open Sans\", sans-serif; line-height: 10.8pt; text-align: justify; vertical-align: baseline;\"></p><p class=\"MsoNormal\" style=\"margin-bottom: 30px; font-size: 16px; color: rgb(0, 0, 0); font-family: \"Open Sans\", sans-serif; line-height: 1.8; text-align: justify;\"><br>Pada saat itu kepesertaannya baru mencakup pegawai negeri sipil beserta anggota keluarganya saja. Namun SiwabessyÂ yakin suatu hari nanti, klimaks dari pembangunan derajat kesehatan masyarakat Indonesia akan tercapai melalui suatu sistem yang dapat menjamin kesehatan seluruh warga bangsa ini.<br><br>Pada 1968, pemerintah menerbitkan Peraturan Menteri Kesehatan Nomor 1 Tahun 1968 dengan membentuk Badan Penyelenggara Dana Pemeliharaan Kesehatan (BPDPK) yang mengatur pemeliharaan kesehatan bagi pegawai negara dan penerima pensiun beserta keluarganya.<br><br>Selang beberapa waktu kemudian, Pemerintah mengeluarkan Peraturan Pemerintah Nomor 22 dan 23 Tahun 1984. BPDPK pun berubah status dari sebuah badan di lingkungan Departemen Kesehatan menjadi BUMN, yaitu PERUM HUSADA BHAKTI (PHB), yang melayani jaminan kesehatan bagi PNS, pensiunan PNS, veteran, perintis kemerdekaan, dan anggota keluarganya.<br><br>Pada tahun 1992, PHB berubah status menjadi PT Askes (Persero) melalui Peraturan Pemerintah Nomor 6 Tahun 1992. PT Askes (Persero) mulai menjangkau karyawan BUMN melalui program Askes Komersial.Â <br>Pada Januari 2005, PT Askes (Persero) dipercaya pemerintah untuk melaksanakan program jaminan kesehatan bagi masyarakat miskin (PJKMM) yang selanjutnya dikenal menjadi program Askeskin dengan sasaran peserta masyarakat miskin dan tidak mampu sebanyak 60 juta jiwa yang iurannya dibayarkan oleh Pemerintah Pusat.<br><br>PT Askes (Persero) juga menciptakan Program Jaminan Kesehatan Masyarakat Umum (PJKMU), yang ditujukan bagi masyarakat yang belum tercover oleh Jamkesmas, Askes Sosial, maupun asuransi swasta. Hingga saat itu, ada lebih dari 200 kabupaten/kota atau 6,4 juta jiwa yang telah menjadi peserta PJKMU. PJKMU adalah Jaminan Kesehatan Daerah (Jamkesda) yang pengelolaannya diserahkan kepada PT Askes (Persero).Â <br><br>Langkah menuju cakupan kesehatan semesta pun semakin nyata dengan resmi beroperasinya BPJS Kesehatan pada 1 Januari 2014, sebagai transformasi dari PT Askes (Persero). Hal ini berawal pada tahun 2004 saat pemerintah mengeluarkan UU Nomor 40 Tahun 2004 tentang Sistem Jaminan Sosial Nasional (SJSN) dan kemudian pada tahun 2011 pemerintah menetapkan UU Nomor 24 Tahun 2011 tentang Badan Penyelenggara Jaminan Sosial (BPJS) serta menunjuk PT Askes (Persero) sebagai penyelenggara program jaminan sosial di bidang kesehatan, sehingga PT Askes (Persero) pun berubah menjadi BPJS Kesehatan.<br><br>Melalui Program Jaminan Kesehatan Nasional-Kartu Indonesia Sehat (JKN-KIS) yang diselenggarakan oleh BPJS Kesehatan, negara hadir di tengah kita untuk memastikan seluruh penduduk Indonesia terlindungi oleh jaminan kesehatan yang komprehensif, adil, dan merata.</p>                                                                ', '6186688-bpjs-kesehatan-kantor-cabang-kendari.jpg', 'bumn', 'https://www.bpjs-kesehatan.go.id/bpjs/home'),
(3, 'BRI CABANG KENDARI', '                  <p>PT Bank Rakyat Indonesia (Persero), Tbk. (atau disingkat juga BRI) adalah salah satu bank terbesar dan tertua milik BUMN di Indonesia.&nbsp;<span style=\"font-size: 1rem;\">Awalnya Bank Rakyat Indonesia (BRI) didirikan di Purwokerto, Jawa Tengah oleh Raden Bei Aria Wirjaatmadja dengan nama De Poerwokertosche Hulp en Spaarbank der Inlandsche Hoofden&nbsp; atau \"Bank Bantuan dan Simpanan Milik Kaum Priyayi Purwokerto\", suatu lembaga keuangan yang melayani orang-orang berkebangsaan Indonesia (pribumi)[butuh rujukan]. Lembaga tersebut berdiri tanggal 16 Desember 1895, yang kemudian dijadikan sebagai hari kelahiran BRI.</span></p><p>Pada periode setelah kemerdekaan RI, berdasarkan Peraturan Pemerintah No. 1 tahun 1946 Pasal 1 disebutkan bahwa BRI adalah sebagai Bank Pemerintah pertama di Republik Indonesia. Dalam masa perang mempertahankan kemerdekaan pada tahun 1948, kegiatan BRI sempat terhenti untuk sementara waktu dan baru mulai aktif kembali setelah perjanjian Renville pada tahun 1949 dengan berubah nama menjadi Bank Rakyat Indonesia Serikat.</p><p>Melalui PERPU No. 41 tahun 1960, dibentuk Bank Koperasi Tani dan Nelayan (BKTN) peleburan dari BRI, Bank Tani Nelayan dan Nederlandsche Handel Maatschappij (NHM). Berdasarkan Penetapan Presiden (Penpres) No. 9 tahun 1965, BKTN diintegrasikan ke dalam Bank Indonesia dengan nama Bank Indonesia Urusan Koperasi Tani dan Nelayan. Setelah berjalan satu bulan, keluar Penpres No. 17 tahun 1965 tentang pembentukan bank tunggal dengan nama Bank Negara Indonesia. Dalam ketentuan baru tersebut, Bank Indonesia Urusan Koperasi, Tani dan Nelayan (eks BKTN) diintegrasikan dengan nama Bank Negara Indonesia unit II bidang Rural, sedangkan NHM menjadi Bank Negara Indonesia unit II bidang Ekspor Impor (Exim).</p><p>Sejak 1 Agustus 1992 berdasarkan Undang-Undang Perbankan No. 7 tahun 1992 dan Peraturan Pemerintah RI No. 21 tahun 1992 status BRI berubah menjadi perseroan terbatas. Kepemilikan BRI saat itu masih 100% di tangan Pemerintah Republik Indonesia. Pada tahun 2003, Pemerintah Indonesia memutuskan untuk menjual 30% saham bank ini, sehingga menjadi perusahaan publik dengan nama resmi PT Bank Rakyat Indonesia (Persero) Tbk., yang masih digunakan sampai dengan saat ini.</p><p><br></p><p>Pada awal tahun 2019, BRI mengakuisisi salah satu anak usaha Bahana Artha Ventura, yakni Sarana NTT Ventura, dan mengganti namanya menjadi BRI Ventures, sebagai bagian dari rencana perusahaan untuk masuk ke bisnis modal ventura.&nbsp;<span style=\"font-size: 1rem;\">Pada akhir tahun 2019, BRI mengakuisisi salah satu unit usaha Yayasan Kesejahteraan Pekerja BRI, yakni Asuransi Bringin Sejahtera Artamakmur, atau lebih dikenal sebagai BRINS, sebagai bagian dari rencana perusahaan untuk masuk ke bisnis asuransi umum.&nbsp;</span><span style=\"font-size: 1rem;\">Pada tanggal 2 Juli 2021, Pemerintah Indonesia resmi menyerahkan mayoritas saham Permodalan Nasional Madani dan Pegadaian kepada BRI melalui Peraturan Pemerintah nomor 73 tahun 2021, sebagai bagian dari pembentukan holding BUMN yang bergerak di bidang ultra mikro. Untuk menunjang proses tersebut, BRI menyelenggarakan Hak Memesan Efek Terlebih Dahulu (HMETD) atau rights issue pada bulan September 2021.</span></p>                ', 'Logo-BRI-Bank-Rakyat-Indonesia-PNG-Terbaru.png', 'perbankan', 'https://bri.co.id/'),
(4, 'BANK SULTRA', '<p>Bank Pembangunan Daerah Sulawesi Tenggara didirikan pada tanggal 02 Maret 1968 berdasarkan Surat Keputusan Dewan Perwakilan Rakyat Daerah Gotong Royong Provinsi Sulawesi Tenggara Nomor 34 Tahun 1968 tentang Bank Pembangunan Daerah Sulawesi Tenggara dan mendapatkan izin operasional dari Menteri Keuangan No.D,15.6.1.18 tanggal 27 Januari 1970, yang kemudian telah diubah dengan Perda No.1 tahun 1981 tanggal 22 Januari 1981, Perda No. 2 tahun 1988 tanggal 8 April 1988 dan Perda No.2 tahun 1993 tanggal 13 Februari 1993.</p><p><br></p><p>Sejalan dengan adanya perubahan peraturan dan ketentuan perbankan khususnya mengenai ketentuan permodalan bagi Bank Umum sebagaimana dimaksud oleh Arsitektur Perbankan Indonesia (API) maka ketentuan pendirian BPD Sulawesi Tenggara dilakukan penyesuaian yang dituangkan dalam Perda No. 5 tahun 2003 tanggal 12 September 2003 sebagaimana telah diubah dengan Perda No. 10 tahun 2004 tanggal 21 September 2004 dengan merubah ketentuan tentang modal dasar BPD Sulawesi Tenggara dari Rp. 50.000.000.000.- (lima puluh miliar rupiah) menjadi Rp. 150.000.000.000,- (seratus lima puluh miliar rupiah) kemudian dirubah dengan Peraturan Daerah nomor 3 tahun 2011 tanggal 20 April 2011 tentang modal dasar Bank Pembangunan Daerah Sulawesi Tenggara dari Rp.750.000.000.000,- (tujuh ratus lima puluh milyar rupiah).</p><p><br></p><p>Dalam rangka meningkatkan kualitas layanan dan pengembangan usaha maka BPD Sulawesi Tenggara berubah status dari Perusahaan Daerah (PD) menjadi Perseroan Terbatas (PT) berdasarkan Keputusan Menteri Hukum dan Hak Asasi Manusia nomor AHU-4439.AH.01.01 tanggal 23 Agustus 2013.</p>', 'bank-sultra-logo-F75D02D9D8-seeklogo.com.png', 'perbankan', 'http://banksultra.co.id/v4/'),
(5, 'BAPENDA KOTA KENDARI', '', 'bapenda.jpg', 'pemkot', 'https://jakpa.kendarikota.go.id/'),
(6, 'BNN KOTA KENDARI', '<p>Badan Narkotika Nasional (BNN) Kota Kendari adalah Lembaga Pemerintah non Kementerian, merupakan instansi vertikal perwakilan BNN RI di daerah. Pada mulanya, BNN Kota Kendari berbentuk forum yang diberi nama Forum Badan Narkoba Kota Kendari yang diketuai oleh Wakil Walikota Kendari masa jabatan 2007-2012, Musadar Mappasomba, S.P.,M.P.</p><p>Berdasarkan amanah Undang-Undang Nomor 35 Tahun 2009 tentang Narkotika dan Peraturan Presiden Republik Indonesia Nomor 23 Tahun 2010 tentang Badan Narkotika Nasional, maka dipandang perlu untuk membentuk Badan Narkotika Nasional Kota Kendari.&nbsp;<span style=\"font-size: 1rem;\">Terbitnya Surat Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi RI Nomor: B/1068/M.PAN-RB/05/2010, tanggal 2 Mei 2010 tentang Persetujuan Pembentukan Badan Narkotika Nasional Provinsi (BNNP) dan BNN Kabupaten/Kota, serta Peraturan Kepala BNN RI Nomor: PER/04/V/2010 tentang Organisasi dan Tata Kerja BNNP dan BNN Kabupaten/Kota saling menguatkan dasar-dasar terbentuknya BNN Kota Kendari.&nbsp;</span><span style=\"font-size: 1rem;\">Selanjutnya Kepala BNN RI pada masa itu, Komisaris Jenderal Polisi Drs. Gregorius â€œGoriesâ€ Mere mengangkat pejabat Kepala BNN Kota Kendari, Dra. Murniaty M.,MPH.,Apt dengan Surat Keputusan Kepala BNN RI Nomor : KEP/10/IX/2011/BNN tanggal 30 September 2011 dan dilantik pada tanggal 6 Oktober 2011.</span></p><p>Pada awal pembentukan, terdapat 16 (enam belas) orang pegawai status dipekerjakan di BNN Kota Kendari, pegawai tersebut berasal dari pegawai otonom Pemerintah Kota Kendari berdasarkan Surat Keputusan Walikota Kendari Nomor: 1291 Tahun 2011 tanggal 13 Desember 2011.&nbsp;<span style=\"font-size: 1rem;\">Sebagai tempat melaksanakan aktivitas pelayanan, disewalah rumah toko (toko) yang beralamat di jalan Bunggasi, Kelurahan Anduonohu, Kecamatan Poasia, Kota Kendari dengan menggunakan anggaran revisi DIPA APBN-P BNN tahun 2011 menjadi DIPA BNN Kota Kendari Tahun 2011.&nbsp;</span><span style=\"font-size: 1rem;\">Adapun wilayah kerja BNN Kota Kendari telah mengalami perluasan wilayah sejak tahun 2018, yakni:</span></p><p>1. Kota Kendari</p><p>2. Kabupaten Konawe</p><p>3. Kabupaten Konawe Selatan</p><p>4. Kabupaten Konawe Utara</p><p>5. Kabupaten Konawe Kepulauan.</p><p>#stopnarkoba</p>', 'bnn kdi.png', 'kementerian', 'https://kendarikota.bnn.go.id/'),
(7, 'BPJPH SULAWESI TENGGARA', '<p>Assalamualaikum warahmatullahi wabarakatuh</p><p>Puji dan syukur&nbsp; dipanjatkan kepada Tuhan Yang Maha Kuasa atas karunia Nya. Dengan hadirnya website diharapkan menjadi salah satu media informasi yang dapat diakses secara luas dan juga&nbsp; diharapkan menjadi salah satu referensi bagi siapa saja yang membutuhkan informasi terkait dengan berbagai kebijakan, program dan kegiatan Penyelengaraan Jaminan Produk halal.</p><p>Badan Penyelenggara Jaminan Produk Halal telah diamanatkan oleh Undang â€“ undang No. 33 Tahun 2014 tentang Jaminan Produk Halal. Undang â€“ Undang tersebut mengamanatkan bahwasanya Produk yang beredar di Indonesia terjamin Kehalalan Produknya oleh karena itu Badan Penyelenggara Jaminan Produk Halal mempunya tugas dan fungsi untuk menjamin kehalalan produk yang beredar dan dipasarkan di tanah air kita ini yaitu Indonesia.</p><p><span style=\"font-size: 1rem;\">Badan Penyelenggara Jaminan Produk Halal juga didukung oleh tugas dan fungsi sebagaimana yang telah diamanatkan oleh Undang â€“ Undang No. 33 Tahun 2014 yaitu tentang Registrasi Halal, Sertifikasi Halal, Verifikasi Halal, Melakukan pembinaan serta melakukan pengawasan kehalalan produk, Kerjasama dengan seluruh stakeholder terkait, serta menetapkan standard kehalalan sebuah produk.</span></p><p>Melalui media situs web ini pengunjung diharapkan dapat mengikuti perkembangan yang terjadi dalam&nbsp; Penyelenggaraan Jaminan Produk Halal yang diselenggarakan oleh Badan Penyelenggara Jaminan Produk Halal.</p><p><br></p><p>Wabillahi taufik wal hidayah&nbsp;</p><p><br></p><p>Wassalamualaikum warahmatullahi wabarakatuh</p><p><br></p>', 'bpjph.png', 'kementerian', 'http://www.halal.go.id/'),
(8, 'BPJS KETENAGAKERJAAN KOTA KENDARI', '<p>Penyelenggaraan program jaminan sosial merupakan salah satu tanggung jawab dan kewajiban Negara untuk memberikan perlindungan sosial ekonomi kepada masyarakat. Sesuai dengan kondisi kemampuan keuangan Negara.</p><p>Indonesia seperti halnya negara berkembang lainnya, mengembangkan program jaminan sosial berdasarkan funded social security, yaitu jaminan sosial yang didanai oleh peserta dan masih terbatas pada masyarakat pekerja di sektor formal</p>', 'logo_bpjstk_baru.png', 'bumn', 'https://www.bpjsketenagakerjaan.go.id/'),
(10, 'BADAN POM KENDARI', '<p>Kemajuan teknologi telah membawa perubahan-perubahan yang cepat dan signifikan pada industri farmasi, obat asli Indonesia, makanan, kosmetika dan alat kesehatan. Dengan menggunakan teknologi modern, industri-industri tersebut kini mampu memproduksi dalam skala yang sangat besar mencakup berbagai produk dengan \"range\" yang sangat luas.</p><p>Dengan dukungan kemajuan teknologi transportasi dan entry barrier yang makin tipis dalam perdagangan internasional, maka produk-produk tersebut dalam waktu yang amat singkat dapat menyebar ke berbagai negara dengan jaringan distribusi yang sangat luas dan mampu menjangkau seluruh strata masyarakat.</p><p>Konsumsi masyarakat terhadap produk-produk termaksud cenderung terus meningkat, seiring dengan perubahan gaya hidup masyarakat termasuk pola konsumsinya. Sementara itu pengetahuan masyarakat masih belum memadai untuk dapat memilih dan menggunakan produk secara tepat, benar dan aman. Di lain pihak iklan dan promosi secara gencar mendorong konsumen untuk mengkonsumsi secara berlebihan dan seringkali tidak rasional.</p><p>Perubahan teknologi produksi, sistem perdagangan internasional dan gaya hidup konsumen tersebut pada realitasnya meningkatkan resiko dengan implikasi yang luas pada kesehatan dan keselamatan konsumen. Apabila terjadi produk sub standar, rusak atau terkontaminasi oleh bahan berbahaya maka risiko yang terjadi akan berskala besar dan luas serta berlangsung secara amat cepat.</p><p>Untuk itu Indonesia harus memiliki Sistem Pengawasan Obat dan Makanan (SisPOM) yang efektif dan efisien yang mampu mendeteksi, mencegah dan mengawasi produk-produk termaksud untuk melindungi keamanan, keselamatan dan kesehatan konsumennya baik di dalam maupun di luar negeri. Untuk itu telah dibentuk BPOM yang memiliki jaringan nasional dan internasional serta kewenangan penegakan hukum dan memiliki kredibilitas profesional yang tinggi.</p>', 'dpom.png', 'pemkot', 'https://kendari.pom.go.id/'),
(11, 'BPS KOTA KENDARI', '<p>Badan Pusat Statistik adalah Lembaga Pemerintah Non-Departemen yang bertanggung jawab langsung kepada Presiden. Sebelumnya, BPS merupakan Biro Pusat Statistik, yang dibentuk berdasarkan UU Nomor 6 Tahun 1960 tentang Sensus dan UU Nomer 7 Tahun 1960 tentang Statistik. Sebagai pengganti kedua UU tersebut ditetapkan UU Nomor 16 Tahun 1997 tentang Statistik. Berdasarkan UU ini yang ditindaklanjuti dengan peraturan perundangan dibawahnya, secara formal nama Biro Pusat Statistik diganti menjadi Badan Pusat Statistik.</p><p>Materi yang merupakan muatan baru dalam UU Nomor 16 Tahun 1997, antara lain :&nbsp;&nbsp;</p><p>Jenis statistik berdasarkan tujuan pemanfaatannya terdiri atas statistik dasar yang sepenuhnya diselenggarakan oleh BPS, statistik sektoral yang dilaksanakan oleh instansi Pemerintah secara mandiri atau bersama dengan BPS, serta statistik khusus yang diselenggarakan oleh lembaga, organisasi, perorangan, dan atau unsur masyarakat lainnya secara mandiri atau bersama dengan BPS.</p><p>Hasil statistik yang diselenggarakan oleh BPS diumumkan dalam Berita Resmi Statistik (BRS) secara teratur dan transparan agar masyarakat dengan mudah mengetahui dan atau mendapatkan data yang diperlukan.</p><p>Sistem Statistik Nasional yang andal, efektif, dan efisien.</p><p>Dibentuknya Forum Masyarakat Statistik sebagai wadah untuk menampung aspirasi masyarakat statistik, yang bertugas memberikan saran dan pertimbangan kepada BPS.</p><p><br></p><p>Berdasarkan undang-undang yang telah disebutkan di atas, peranan yang harus dijalankan oleh BPS adalah sebagai berikut :&nbsp;&nbsp;</p><p>Menyediakan kebutuhan data bagi pemerintah dan masyarakat. Data ini didapatkan dari sensus atau survey yang dilakukan sendiri dan juga dari departemen atau lembaga pemerintahan lainnya sebagai data sekunder</p><p>Membantu kegiatan statistik di departemen, lembaga pemerintah atau institusi lainnya, dalam membangun sistem perstatistikan nasional.</p><p>Mengembangkan dan mempromosikan standar teknik dan metodologi statistik, dan menyediakan pelayanan pada bidang pendidikan dan pelatihan statistik.</p><p>Membangun kerjasama dengan institusi internasional dan negara lain untuk kepentingan perkembangan statistik Indonesia.</p>', 'bps.png', 'pemkot', 'https://kendarikota.bps.go.id/'),
(12, 'DISNAKERTRANS KOTA KENDARI', '<p>Dinas Transmigrasi Dan Tenaga Kerja Provinsi Sulawesi Tenggara Adalah Dinas Yang Memiliki Kewenangan Dibidang Pembinaan Dan Penempatan Tenaga Kerja Juga Perlindungan Tenaga Kerja Pada Wilayah Provinsi Sulawesi Tenggara.</p><p>Tugas Utama Dinas Transmigrasi Dan Tenaga Kerja Provinsi Sulawesi Tenggara Adalah Sebagai Instansi Pemerintah Bidang Tenaga Kerja Dan Transmigrasi Pada Daerah Wilayah Kerjanya. Untuk Fungsi Dari Dinas Transmigrasi Dan Tenaga Kerja Provinsi Sulawesi Tenggara Diantaranya Merumuskan Kebijakan Ketenaga Kerjaan Dan Transmigrasi, Pelaksana Kebijakan Tenaga Kerja Dan Transmigrasi, Administrasi Ketenaga Kerjaan, Pengawasan Tenaga Kerja Dan Transmigrasi, Pelaporan Dan Evaluasi Bidang Tenaga Kerja Dan Transmigrasi. Dinas Transmigrasi Dan Tenaga Kerja Prov. Sultra Terdiri Dari 5 Bidang Dan 1 UPTD</p>', 'disnaker.png', 'pemkot', 'https://kelembagaan.kemnaker.go.id/'),
(13, 'DINKES KOTA KENDARI', '<p>Informasi Dinas Kesehatan Kota Kendari - Layanan vaksinasi di Kendari, Sulawesi Tenggara yang dikumpulkan relawan melalui pencarian di internet atau media sosial.<br></p>', 'logo-kemenkes_landscape.jpg', 'pemkot', 'https://www.instagram.com/p/CS24k3mB-Lh/'),
(14, 'DISDUKCAPIL KOTA KENDARI', '<p>VISI</p><p>MEWUJUDKAN KOTA KENDARI SEBAGAI KOTA LAYAK HUNI YANG BERBASIS EKOLOGi, INFORMASI DAN TEKNOLOGI</p><p><br></p><p>MISI</p><p>MENINGKATKAN KUALITAS PELAYANAN MASYARAKAT.</p><p>PEMBANGUNAN INFRASTRUKTUR.</p><p>MENATA WAJAH KOTA.</p>', 'kendari.jpg', 'pemkot', 'https://disdukcapil.kendarikota.go.id/'),
(15, 'DPMPTSP KOTA KENDARI', '<p>Diawali dari instruksi Mendagri No. 25 Tahun 1998 tentang Pelayanan Perizinan Satu Atap di daerah, yang ditindak lanjuti oleh Instruksi Gubernur Sultra No. 02 Tahun 1999 tentang Pedoman Pembentukan Unit Pelayanan Sistem Satu Atap di lingkungan Pemerintah Daerah Tingkat II se Sulawesi Tenggara., maka pada tanggal 15 November 1999 diresmikanlah Unit Pelayanan Terpadu Sistem Satu Atap dan Satu Pintu Kota Kendari&nbsp; dengan dasar hukun pembentukan melalui SK. Walikota Kendari Nomor 24 Tahun 2000 tentang Pembentukan Organisasi dan Tata kerja Unit Pelayanan Terpadu Sistem Satu Atap dan Satu Pintu Kota Kendari, dengan struktur organisasi dan tata kerja terdiri dari: Kepala unit, Loket Informasi, Loket Pembayaran, Petugas Penelitian Teknis,&nbsp; dan Petugas Pengelolaan Administrasi. Kepala unit saat itu dijabat oleh Bapak Drs. Najamuddin dari Tahun 1999 - 2001.</p><p>Pada Tahun 2001 Unit Pelayanan terpadu Sistem Satu Atap dan Satu Pintu ditingkatkan statusnya menjadi Kantor Pelayanan Perizinan berdasarkan Perda Nomor 1&nbsp;<span style=\"font-size: 1rem;\">Tahun 2001 tentang pembentukan organisasi perangkat daerah, yang dijabat oleh Bapak Drs. K. Iskandar Zulkarnain sampai Tahun 2004, dengan struktur organisasi dan tata kerja terdiri dari: Kepala Kantor; Sub. Bagian Tata Usaha; Seksi Publikasi dan Pengaduan Masyarakat; Seksi Administrasi dan Penerbitan izin; dan Seksi pengujian Lapangan. Selanjutnya dalam kurun waktu tahun 2004 - 2008 Kepala Kantor Pelayanan Perizinan di jabat oleh Dra. Hj. Ferial Bunggasi, M.Si. Kemudian dalam tahun 2008 - April 2009 Kepala Kantor Pelayanan Perizinan di jabat oleh Dra. Hj. Asni Bonea.&nbsp;</span></p><p>Pada Tahun 2009 Kantor Pelayanan Perizinan ditingkatkan statusnya menjadi Badan Penyelenggara Pelayanan Perizinan Kota Kendari berdasarkan Perda Nomor 6 Tahun 2009 tentang pembentukan&nbsp; organisasi dan Tata Kerja Lembaga Teknis Daerah Kota Kendari, sebagai kepala Badan saat itu adalah Dra. Hj. Ferial Bunggasi, M.Si., jabatan ini diemban sampai dengan 24 Juni 2011, selanjutnya&nbsp; pada periode 24 Juni 2011 â€“ 13 Agustus 2013 Kepala Badan dijabat oleh Drs. H. Abdul Madjid. Kemudian pada periode 13 Agustus 2013 dijabat oleh Yan Bela, SE.&nbsp;</p><p>Pada tanggal 31 Desember 2013 Badan Pelayanan Perizinan Kota Kendari berubah nama menjadi Badan Pelayanan Perizinan Terpadu Satu Pintu Dan Penanaman Modal Daerah Kota Kendari dan sebagai Kepala Badan dijabat oleh Yan Bela, SE dengan struktur organisasi dan tata kerja terdiri dari : Kepala Badan; Sekretaris (Subbagian Umum dan Kepegawaian; Subbagian perencanaan dan Evaluasi); Bidang Pelayanan dan Pengaduan Masyarakat (Subbidang Pelayanan dan Publikasi; Subbidang Pengaduan Masyarakat); Bidang Pengujian Teknis, Koordinasi dan Pengawasan (Subbidang Pelayanan dan Publikasi; subbidang Pengaduan Masyarakat); Kepala Bidang Perizinan dan Data (Kepala Sub Bidang Perizinan dan Non Izin; Kepala Sub Bidang Pengolahan Data dan Sistem Informasi); Kepala Bidang Penanaman Modal (Kepala Sub Bidang Investasi dan Promosi; Kepala Sub Bidang Kerjasama dan Pengendalian).</p><p>Kemudian untuk lebih meningkatkan pelayanan kepada masyarakat sesuai dengan tujuan pembentukan PTSP yaitu untuk memberikan pelayanan perijinan yang&nbsp;<span style=\"font-size: 1rem;\">cepat,mudah,praktis dan efisien maka pada tanggal 17 Oktober 2016 Badan Penyelenggara Pelayanan Perizinan Kota Kendari di tingkatkan statusnya menjadi Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kota Kendari berdasarkan Perda Nomor 5 Tahun 2016 tentang Pembentukan Organisasi dan Susunan Perangkat Daerah Kota Kendari, dengan Kepala Dinas dijabat Bapak Yan Bela, SE. Jabatan ini diemban sampai dengan 27 Februari 2017. Berhubung bapak Yan Bela,SE memasuki usia pensiun maka pada periode 27 Februari 2017 â€“ 5 September 2017 jabatan Kepala Dinas dilaksanakan oleh Pelaksana Tugas dalam hal ini diemban oleh Sekretaris Dinas PM&amp;PTSP Kota Kendari yaitu Ridha Wahyuni Nappu, SE.,M.Si berdasarkan SK Walikota Nomor 378 Tahun 2017 tentang Penunjukan&nbsp;</span></p><p>Pelaksana Tugas Kepala Organisasi Perangkat Daerah Lingkup Pemerintah Kota Kendari.&nbsp;<span style=\"font-size: 1rem;\">Kemudian pada tanggal 5 September 2017 Kepala Dinas dijabat oleh Sri Yusnita, ST.,MM. Berdasarkan SK Walikota Kendari Nomor 954 Tahun 2017 tentang Pengangkatan dalam Jabatan Pimpinan Tinggi Pratama Lingkup Pemerintah Kota Kendari. Dan saat ini Dinas Penanaman Modal dan PTSP Kota Kendari dipimpin oleh Hj. Satria Damayanti, SE., ME.</span></p>', 'logo-ptsp-kota-kendari.jpeg', 'pemkot', 'http://ptsp.kendarikota.go.id/'),
(16, 'DPMPTSP PROVINSI SULAWESI TENGGARA', '                  <p>Badan Koordinasi Penanaman Modal dan Pelayanan Terpadu Satu Pintu (BKMPD dan PTSP) Provinsi Sulawesi Tenggara mengambil tempat di salah satu bekas gedung Badan Perencanaan Pembangunan Daerah (Bappeda) Provinsi Sulawesi Tenggara, yang beralamat di Jl. Mayjend S. Parman No. 2 Kendari. Tepat dibelakang Kantor Bappeda Provinsi Sulawesi Tenggara.</p><p>Badan Koordinasi Penanaman Modal dan Pelayanan Terpadu Satu Pintu (BKMPD dan PTSP) Provinsi Sulawesi Tenggara dibentuk Berdasarkan Peraturan Presiden Nomor 27 Tahun 2009 Tentang Pelayanan Terpadu Satu Pintu di Bidang Penanaman Modal yang ditindak lanjuti dengan Ketentuan Peraturan Daerah Provinsi Sulawsei Tenggara Nomor 3 Tahun 2010 tentang Pemberian Insentif dan Pemberian Kemudahan Penanaman Modal di Provinsi Sulawesi Tenggara dan Keputusan Gubernur Sulawesi Tenggara Tahun 2011 Nomor: 12 tentang Pendelegasian Kewenangan Penyelenggaraan Pelayanan Terpadu Satu Pintu Di Bidang Penanaman Modal Provinsi Sulawesi Tenggara.</p><p>Badan Koordinasi Penanaman Modal dan Pelayanan Terpadu Satu Pintu (BKPMD dan PTSP) Provinsi Sulawesi Tenggara dipimpin oleh seorang Kepala Badan. Dalam melaksanakan tugasnya, Kepala BKPMD dan PTSP Provinsi Sulawesi Tenggara dibantu oleh seorang Sekretaris dan 4 (Empat) Kepala Bidang, yaitu Bidang Penelitian dan Pengembangan, Bidang Kerjasama dan Promosi, Bidang Perizinan dan Bidang Pengendalian.</p><p>Pelaksanaan Pelayanan Terpadu Satu Pintu (PTSP) dilaksanakan oleh Bidang Perizinan yang didalamnya terbagi atas Subbidang Perizinan dan Subbidang Non Perizinan. Dalam melaksanakan pelayanan perizinan, Pegawai PTSP dibantu oleh tim Teknis yang berasal dari 12 (Dua Belas) SKPD yang bertugas pada pelayanan perizinan di PTSP.</p><p>Badan Koordinasi Penanaman Modal dan Pelayanan Terpadu Satu Pintu (BKPMD dan PTSP) Provinsi Sulawesi Tenggara dibentuk dengan tujuan untuk mempermudah proses birokrasi pelayanan pengurusan perizinan dalam berbagai bentuk, diantaranya mempercepat waktu pelayanan dengan mengurangi tahapan-tahapan dalam pelayanan yang kurang penting.</p><p>Semua jenis pelayanan perizinan pada lingkup Pemerintah Daerah Provinsi Sulawesi Tenggara dapat langsung ditangani di Kantor BKPMD dan PTSP. Diantaranya, Sektot Penanaman Modal, Sektor Kesehatan, Sektor Pekerjaan Umum, Sektor Perhubungan dan Kominfo, Sektor Sosial, Sektor Ketenagakerjaan, Sektor Pertanian dan Peternakan, Sektor Koperasi dan UMKM, Sektor Pariwisata, Sektor Perikanan dan Kelautan, Sektor Kehutanan dan Sektor Energi dan Sumber Daya Mineral.</p>                ', 'logo-dpmptsp.png', 'pemprov', 'https://dpmptsp.sultraprov.go.id/'),
(17, 'IAI KOTA KENDARI', '<p align=\"justify\" style=\"margin-bottom: 10px;\"><font color=\"#666666\" face=\"Poppins, sans-serif\"><span style=\"font-size: 12px;\">Pengurus Cabang Ikatan Apoteker Indonesia Kota Kendari merupakan PC dengan jumlah anggota terbanyak di Sulawesi Tenggara. PC Kota Kendari pertama kali berdiri diketuai oleh Drs. Apt. H. Muh. Dzulkifly, M.Kes. Tongkat estafet kepengurusan dilanjutkan oleh Bapak apt. Ahmad Lalo, M.Si. yang membawa PC Kota Kendari semakin baik dan semakin besar. Pada tahun 2018, hasil Konferensi Cabang IAI Kota Kendari memilih Dr.rer.nat. apt. Adryan Fristiohady, M.Sc. sebagai Ketua PC IAI Kota Kendari untuk masa bakti 2018-2022 dan Dewan Penasehat Cabang Drs. Apt. H. Muh. Dzulkifly, M.Kes.</span></font></p><p align=\"justify\" style=\"margin-bottom: 10px;\"><font color=\"#666666\" face=\"Poppins, sans-serif\"><span style=\"font-size: 12px;\">Dengan mengusung tagline Kolaborasi dan Akselerasi, PC IAI Kota Kendari terus melakukan perbaikan demi kenyamanan anggota, salah satunya dengan akselerasi pengurusan administrasi rekomendasi izin praktik yang sudah terintegrasi dengan Sistem Informasi Apoteker (SIAp) yang dikembangkan oleh PP IAI. Selain itu, kolaborasi juga dilakukan dengan menggandeng stakeholder untuk kegiatan bersama antara lain BPOM di Kendari, Kimia Farma Apotek Unit Bisnis Kendari, Maxima Laboratorium dll.</span></font></p><p align=\"justify\" style=\"margin-bottom: 10px;\"><font color=\"#666666\" face=\"Poppins, sans-serif\"><span style=\"font-size: 12px;\">PC IAI Kota Kendari terus berinovasi untuk kepentingan anggota, website ini diharapkan mampu menghadirkan akses informasi dan pelayanan secara cepat kepada Apoteker Kota Kendari. Pada bulan Oktober 2020, PC IAI Kota Kendari merilis Jurnal Ilmiah Kefarmasian : SCIENTIA PHARMA untuk memfasilitasi anggota yang bekerja pada institusi pendidikan dan anggota pada bidang pelayanan yang ingin mempublikasikan hasil riset.</span></font></p>', 'IAI [www.blogovector.com].png', 'kementerian', 'https://apotekerkendari.com/'),
(19, 'INI KOTA KENDARI', '<p>VISI</p><p>â€œMemantapkan Ikatan Notaris Indonesia sebagai satu-satunya wadah untuk membangun KEBANGGAAN berorganisasi &amp; KEJAYAAN NOTARIS.â€</p><p>MISI</p><p>Meningkatkan Integritas &amp; Perlindungan Anggota dengan :</p><p>1. Meningkatkan pengetahuan keilmuan &amp; ke-organisasian serta bersinergi dengan lembaga pendidikan profesi</p><p>2. Memperkuat fungsi kesekretariatan &amp; penyempurnaan sistem administrasi keanggotaan</p><p>3. Bersinergi dengan IPPAT, asosiasi/lembaga yang terafiliasi dengan profesi &amp; seluruh Lembaga Pemerintahan</p><p>4. Membangun kerjasama yang baik dengan Kepolisian &amp; Kejaksaan</p><p>5. Mengoptimalkan organisasi dalam melindungi anggota untuk mencapai KEBANGGAAN BERORGANISASI dan KEJAYAAN NOTARIS</p>', 'ini.png', 'kementerian', 'http://sultra.ini.id/'),
(20, 'KANTOR IMIGRASI KELAS I TPI KENDARI', '<p>Kantor Imigrasi Kelas I TPI Kendari dibentuk berdasarkan Keputusan Menteri Kehakiman No: M.03-PR.03.02 Tahun 1984, dan mulai Operasional pada bulan September 1986 dengan status Kantor Imigrasi Kelas III kemudian dinaikan menjadi Kantor Imigrasi Kelas II berdasarkan Surat Keputusan Menteri Kehakiman No:M.03-PR.07.04 Tahun 1991 tanggal 15 April 1991. Dengan adanya perkembangan Otonomi Daerah maka berdasarkan Keputusan Menteri Kehakiman dan Hak Asasi Manusia No: M.05-PR.07.04 Tahun 2004 tanggal 19 Agustus 2004 Kantor Imigrasi Kendari menjadi Kantor Imigrasi Kelas I Kendari. Dengan diterbitkannya Keputusan Menteri Hukum dan HAM RI Nomor M.H.H 02.GR.03.01 Tahun 2018 Tanggal 27 Desember 2018 tentang Perubahan Keempat Atas Keputusan Menteri Hukum dan HAM Nomor M.HH-01.GR.02.01 Tahun 2014 tentang Tempat Pemeriksaan Imigrasi, Kantor Imigrasi Kelas I Kendari menjadi Kantor Imigrasi Kelas 1 TPI Kendari Kantor Imigrasi Kelas I TPI Kendari meliputi satu kota dan delapan Kabupaten Yaitu: 1. Kota Kendari 2. Kabupaten Kolaka 3. Kabupaten Kolaka Utara 4. Kabupaten Kolaka Timur 5. Kabupaten Konawe 6. Kabupaten Konawe Kepulauan&nbsp;<span style=\"font-size: 1rem;\">7.&nbsp;</span><span style=\"font-size: 1rem;\">Kabupaten Konawe Selatan&nbsp;</span><span style=\"font-size: 1rem;\">8. Kabupaten Konawe Utara 9. Babupaten Bombana Letak geografis Propinsi Sulawesi Tenggara terletak di Jazirah Tenggara pulau secara geografis terletak dibagian selatan garis khatulistiwa memanjang dari utara keselatan diantara 02Â°45-0615 lintang selatan dari barat ketimur antara antara 120Â°-45Â¹ - 124Â°-30Â¹ Bujur Timur. Propinsi Sulawesi Selatan dan Sulawesi Tengah, sebelah selatan dengan propinsi NTT dan laut Flores, sebelah propinsi Maluku dan Laut Banda dan sebelah barat berbatasan dengan Propinsi Sulawesi Selatan di Teluk Bone</span></p>', 'imigrasi.png', 'kementerian', 'https://kendari.imigrasi.go.id/'),
(21, 'KANTOR KEMENAG KOTA KENDARI', '<p>GEOGRAFIS SULAWESI TENGGARA</p><p><span style=\"font-size: 1rem;\">Sulawesi Tenggara adalah sebuah provinsi di Indonesia yang beribukotakan Kendari. Provinsi Sulawesi Tenggara terletak di Jazirah Tenggara Pulau Sulawesi, secara geografis terletak di bagian selatan garis khatulistiwa di antara 0245 0615 Lintang Selatan dan 12045 12430 Bujur Timur serta mempunyai wilayah daratan seluas 38.140 km (3.814.000 ha) dan perairan (laut) seluas 110.000 km (11.000.000 ha).</span><br></p><p><br></p><p>SEJARAH DAERAH</p><p>Sulawesi Tenggara awalnya merupakan nama salah satu kabupaten di Provinsi Sulawesi Selatan dan Tenggara Sulselra dengan Bau-bau sebagai ibukota kabupaten. Sulawesi Tenggara ditetapkan sebagai Daerah Otonom berdasarkan Perpu No. 2 tahun 1964 Juncto UU No.13 Tahun 1964.&nbsp;</p><p><br></p><p>SEJARAH KANWIL KEMENTERIAN AGAMA PROVINSI SULAWESI TENGGARA</p><p>Pendidikan Islam sebagai sebuah upaya aktualisasi nilai nilai ideal ajaran Islam berdasarkan Alquran dan Hadis dalam praktek kehidupan konkrit umat Islam sesuai dengan semangat kemajuan zaman dan juga sesuai dengan kondisi budaya lokal, maka kajian atas sejarah pendidikan Islam lokal, khususnya untuk wilayah Sulawesi Tenggara adalah sangat penting. Apalagi sebagian pakar berpendapat bahwa pendidikan Islam di tanah air hingga dewasa ini belum menunjukkan hasil yang memuaskan. Hal ini mungkin disebabkan oleh karena faktor tantangan modernisasi dan globalisasi di satu sisi, dan di sisi lain mungkin pula disebabkan antara lain kekurangmampuan menggali khazanah kearifan lokal yang tersimpan dalam khazanah budaya lokal Islam masa lalu untuk diterapkan dalam mengimplementasikan pendidikan Islam yang kontekstual di masa kini. Di sinilah letak pentingnya kajian atas sejarah perkembangan pendidikan Islam lokal, khususnya di wilayah Sulawesi Tenggara.</p><p>Sebelum memasuki pembahasan tentang sejarah perkembangan pendidikan Islam Sulawesi Tenggara, di sini perlu dikemukakan secara kronologis para pejabat pemerintah di Sulawesi Tenggara yang bertanggung jawab terhadap proses perkembangan pendidikan Islam sejak terbentuknya propinsi Sulawesi Tenggara sampai dengan sekarang, yaitu sebagai berikut :</p><p>Sebelum terbentuknya Kanwil Departemen Agama Propinsi Sulawesi Tenggara, maka instansi yang bertanggung jawab di bidang pendidikan agama adalah Inspeksi Pendidikan Agama Propinsi Sulawesi Tenggara yang pimpinannya dijabat oleh SAID DAENG MANESSA. Jabatan ini setara dengan Inspeksi Urusan Agama Islam yang pimpinannya dijabat oleh KH. BAEDHAWIE. SAID DAENG MANESSA menjabat sebagai Kepala Inspeksi Pendidikan Agama Propinsi Sulawesi Tenggara dan tahun 1967 sampai dengan tahun 1972. Tahun 1973 Inspeksi Pendidikan Agama dengan Inspeksi Urusan Agama diintegrasikan menjadi Perwakilan Departemen Agama Propinsi Sulawesi Tenggara yang pimpinannya adalah KH. Baedhawie. Dan Perwakilan Agama kemudian berubah menjadi Kanwil Departemen Agama Propinsi Sulawesi Tenggara, juga dipimpin KH. BAEDHAWIE. Mulai terbentuknya Inspeksi Pendidikan Agarna Propinsi Sulawesi Tenggara hingga Kanwil Departemen Agama Propinsi Sulawesi Tenggara sudah berada pada masa Orde Baru. Kemudian pada tahun 2010 Departemen Agama berubah nama menjadi Kementerian Agama melalui Peraturan Menteri Agama Republik Indonesia Nomor 1 Tahun 2010 tentang Perubahan Penyebutan Departemen Agama Menjadi Kementerian Agama, saat itu Kepala Kanwil Kementerian Agama di Pimpin oleh Drs. H. Abdul Muis D., M.Pd.</p>', 'logo-news-dark-default.png', 'kementerian', 'https://sultra.kemenag.go.id/'),
(22, 'KANTOR PERTANAHAN KOTA KENDARI', '<p><img src=\"data:image/png;base64,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', 'logo_app.png', 'kementerian', 'https://kot-kendari.atrbpn.go.id/'),
(23, 'KEJAKSAAN NEGERI KENDARI', '<p>VISI</p><p>Menjadi Lembaga Penegak Hukum yang Profesional, Proporsional dan Akuntabel</p><p><br></p><p>MISI</p><p><br></p><p>Meningkatkan Peran Kejaksaan RI dalam Program Pencegahan Tindak Pidana;</p><p>Meningkatkan Profesionalisme Jaksa dalam Penanganan Perkara Tindak Pidana;</p><p>Meningkatkan peran Jaksa Pengacara Negara dalam Penyelesaian Masalah Perdata dan Tata Usaha Negara;</p><p>Mewujudkan Upaya Penegakan Hukum yang memenuhi rasa keadilan masyarakat;</p><p>Mempercepat pelaksanaan Reformasi Birokrasi dan Tata Kelola Kejaksaan RI yang bersih dan bebas Korupsi, Kolusi dan Nepotisme.</p>', 'kejari.png', 'kementerian', 'http://kejari-kendari.kejaksaan.go.id/'),
(24, 'KPP PRATAMA KOTA KENDARI', '<p>Kini Anda dapat melakukan hitung, setor, dan lapor semua pajak perusahaan Anda secara online.&nbsp;<span style=\"font-size: 1rem;\">Memperkenalkan OnlinePajak, sebuah sistem adminstrasi pajak yang terpadu, dengan prosedur langkah demi langkah, sistem OnlinePajak memastikan seluruh laporan akurat, dapat dibaca, dan ringkas sesuai dengan peraturan pajak Indonesia.</span></p>', 'OP_MAIN_LOGO.png', 'kementerian', 'http://http//www.pajak.go.id'),
(25, 'OMBUDSMAN KENDARI', '<p>Ombudsman Republik Indonesia yang selanjutnya disebut Ombudsman adalah Lembaga Negara yang mempunyai kewenangan mengawasi Penyelenggaraan Pelayanan Publik baik yang diselenggarakan oleh penyelenggara Negara dan pemerintahan termasuk yang diselenggarakan oleh Badan Usaha Miliki Negara, Badan Usaha Milik Daerah, dan Badan Hukum milik Negara serta Badan Swasta atau perseorangan yang diberi tugas menyelenggarakan pelayanan publik tertentu yang sebagian atau seluruh dananya bersumber dari anggaran pendapatan dan belanja Negara dan/atau anggran pendapatan dan belanja daerah (Pasal 1 Undang-Undang Republik Indonesia Nomor 37 Tahun 2008 Tentang Ombudsman Republik Indonesia)</p><p>Ombudsman merupakan Lembaga Negara yang bersifat mandiri dan tidak memiliki hubungan organik dengan Lembaga Negara dan instansi pemerintahan lainnya, serta dalam menjalankan tugas dan wewenangnya bebas dari campur tangan kekuasaan lainnya (pasal 2 Undang-Undang Republik Indonesia Nomor 37 Tahun 2008 Tentang Ombudsman Republik Indonesia)</p><p><br></p><p>Ombudsman dalam menjalankan tugas dan wewenangnya berasaskan (pasal 3 Undang-Undang Republik Indonesia Nomor 37 Tahun 2008 Tentang Ombudsman Republik Indonesia) :</p><ol><li>Kepatutan</li><li>Keadilan</li><li>Non-diskriminasi</li><li>Tidak memihak</li><li>Akuntabilitas</li><li>Keseimbangan</li><li>Keterbukaan dan</li><li>Kerahasiaan</li></ol>', 'logo-ori-sm.png', 'kementerian', 'https://ombudsman.go.id/');
INSERT INTO `instansi` (`idins`, `namains`, `desins`, `picins`, `catins`, `linkins`) VALUES
(26, 'PDAM TIRTA ANOA', '<p>1928-1945</p><p>Pelayanan Air Minum Oleh Pemerintah Belanda dan Jepang (sistem PAM tersebut saat ini tidak beroperasi akibat penurunan debit sumber air).</p><p><br></p><p>1945-2010</p><p>Keberadaan PDAM Kota Kendari berdasarkan Peraturan Daerah No. 3 Tahun 1976 Tentang Pendirian Perusahaan Air Minum (PAM) Daerah Kabupaten Tk. II Kendari.</p><p><br></p><p>2010-Sekarang</p><p>PDAM Kota Kendari bernama PDAM Tirta ANOA berdasarkan Peraturan Daerah No. 3 Tahun 2010 Tentang Organisasi PDAM Kota Kendari dan No. 7 Tahun 2010 Tentang&nbsp; Pelayanan Air Minum.</p>', 'logo_pdam.jpg', 'bumd', 'http://pdamkotakendari.com/'),
(27, 'PN KENDARI', '<p>Assalaamuâ€™alaikum Wr Wb</p><p>Puji dan syukur patutlah dipanjatkan kepada Tuhan Yang Maha Kuasa yang telah memberikan tetesan pengetahuan dan sedikit penguasaan atas teknologi informasi sehingga Pengadilan Negeri/PHI/Tipikor Kelas 1A Kendari dapat meluncurkan website pn-kendari.go.id sebagai media informasi dan komunikasi peradilan Kota Kendari.</p><p>Saya sungguh menyambut baik upaya ini sebagai bagian dari usaha untuk menyediakan informasi peradilan bagi masyarakat yang oleh karena perkembangan teknologi informasi tidak harus datang ke pengadilan untuk mengetahui berbagi hal tentang hal ikhwal peradilan namun cukup dengan berselencar dalam dunia maya maka berbagai pihak yang berkepentingan dengan informasi peradilan di Kota Kendari dalam berbagai seginya dapat terus mengakses informasi peradilan ini.</p><p>Salah satu penciri utama dari abad 21 ini adalah dijadikannya teknologi informasi sebagai bagian tak terpisahkan dari berbagai aktivitas keseharian, tak terkecuali aktivitas berpemerintahan, pembangunan, dan kemasyarakatan sehingga tidaklah mengherankan dalam konteks seperti ini maka ke-gagap-an akan teknologi informasi dipersepsikan sebagai sesuatu yang ketinggalan zaman.</p><p>Dalam perspektif internal, Saya sungguh berharap media ini dapat dioptimalkan oleh semua bagian untuk menginformasikan program/kegiatan peradilan. Dalam konteks ini Pengadilan Negeri/PHI/Tipikor Kelas 1A Kendari&nbsp; harus memerankan dirinya sebagai penyedia informasi seluas mungkin bagi kepentingan publik. Dalam perspektif eksternal, Saya berharap media ini menjadi media yang dapat dipakai oleh masyarakat luas untuk tidak saja mengikuti perkembangan peradilan namun juga boleh jadi menjadi media yang menjadi rujukan dalam mencari informasi peradilan dan pelayanan hukum. Terkait dengan itulah Saya mengucapkan Selamat Datang bagi para pengunjung Web ini.</p><p>Akhirnya, dengan resmi Saya meluncurkan website ini dan sekaligus menyambut para pengunjung di web ini. Semoga dengan kehadiran media ini dapat memberikan kontribusi berarti bagi kepentingan peradilan di Kota Kendari.</p><p>Wassalamuâ€™alaikum warahmatullahi wabarakatuh</p>', 'logo_pn.png', 'kementerian', 'http://www.pn-kendari.go.id/'),
(28, 'PT PEGADAIAN KOTA AREA KENDARI', '<p>Pegadaian adalah anak perusahaan Bank Rakyat Indonesia yang bergerak pada tiga lini bisnis, yakni pembiayaan, emas dan aneka jasa.<br></p>', 'pegadaian-logo.png', 'bumn', 'https://www.pegadaian.co.id/'),
(29, 'PT PLN (PERSERO) KOTA KENDARI', '<p style=\"margin-bottom: 0px; line-height: 24px; padding-bottom: 10px; text-align: justify;\"><font color=\"#333333\" face=\"Montserrat, sans-serif\"><span style=\"font-size: 13px;\">Kantor PT. PLN (Persero) untuk wilayah Kota Kendari, Sulawesi Tenggara</span></font></p><p style=\"margin-bottom: 0px; line-height: 24px; padding-bottom: 10px; text-align: justify;\"><font color=\"#333333\" face=\"Montserrat, sans-serif\"><span style=\"font-size: 13px;\">Kantor ini melayani kebutuhan terkait listrik masyarakat. Layanan seperti pengajuan pemasangan listrik, pengajuan naik tegangan, cek tagihan listrik pln, pembayaran listrik hingga komplain. Selain dari berkunjung langsung, saat ini masyrakat sudah bisa melakukan cek rekening saldo listrik secara online, bayar listrik online dengan pln token, pembayaran online melalui atm atau aplikasi mobile. Untuk info pln lebih lanjut dapat diperoleh melalui website resmi pln.</span></font></p>', 'pln.png', 'bumn', 'https://www.instagram.com/plnup3kendari'),
(30, 'PT POS INDONESIA POS KOTA KENDARI', '<p>Kantor bumn logistik PT POS Indonesia di Kota Kendari, Sulawesi Tenggara.</p><p>Jam kerja / operasional:</p><p>Senin: 8:00 AM - 10:00 PM, Selasa: 8:00 AM - 10:00 PM, Rabu: 8:00 AM - 10:00 PM, Kamis: 8:00 AM - 10:00 PM, Jumat: 8:00 AM - 10:00 PM, Sabtu: 8:00 AM - 10:00 PM, Minggu: Closed</p><p>Kantor pos ini melayani pengiriman barang, dokumen, Express Mail Service (EMS) dan paket dalam negeri dan pengiriman paket luar negeri melalui pos indonesia international. Customer pos dapat melakukan cek tarif pos Indonesia melalui situs resmi, selain itu tracking pos atau lacak kiriman pos juga dapat dilakukan via online melalui web resmi POS Indonesia. Untuk pos Indonesia tracking secara online dapat dilakukan dengan merujuk no. barcode yang tertera pada cek resi pos indonesia saat mengirim paket. Informasi lebih lanjut dapat diperoleh melalui kontak call center atau customer service PT. Pos Indonesia.</p>', '2138107074.jpg', 'bumn', 'https://id-id.facebook.com/people/Kantor-POS-Kendari-93000/100052567406204/'),
(31, 'SAMSAT KOTA KENDARI', '<p>SI STNK SUBDIT REGIDENT DITLANTAS POLDA SULTRA</p><p>Product/service</p><p>Melayani</p><ul><li>-STNK baru</li><li>-MUTASI MASUK</li><li>-perubahan identitas</li><li>-Pengesahan STNK/pajak tahunan</li><li>-Perpanjangan STNK 5 tahun</li><li>-DUPLIKAT</li></ul>', 'LOGO_SIGNAL.png', 'bumd', 'https://www.instagram.com/samsatkendari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `idlyn` int(30) NOT NULL,
  `namalyn` varchar(300) NOT NULL,
  `linklyn` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `layanan`
--

INSERT INTO `layanan` (`idlyn`, `namalyn`, `linklyn`) VALUES
(3, 'BRI CABANG KENDARI', 'https://drive.google.com/drive/folders/1v89r_bbfDzfK40UiQIhlj1tKAwbcASCs?usp=share_link'),
(4, 'BANK SULTRA', 'https://drive.google.com/drive/folders/1-tHuvkheQEGXWESv-AlVbdc9DkpePrAQ?usp=share_link'),
(5, 'BAPENDA KOTA KENDARI', 'https://drive.google.com/drive/folders/1Imc2Pazk5EWa2fQYPwqGVgaQbq95qWfS?usp=share_link'),
(6, 'BNN KOTA KENDARI', 'https://drive.google.com/drive/folders/1Imc2Pazk5EWa2fQYPwqGVgaQbq95qWfS?usp=share_link'),
(7, 'BPJH KOTA KENDARI', 'https://drive.google.com/drive/folders/196oKs6SA3dD1O0zaBjf93pPl6C4tajpA?usp=share_link'),
(8, 'BPJS KESEHATAN KOTA KENDARI', 'https://drive.google.com/drive/folders/1aS2ixvF8z7ijFYm3ZuFNcVQiOzmi9zKg?usp=share_link'),
(9, 'BPJS KETENAGAKERJAAN KOTA KENDARI', 'https://drive.google.com/drive/folders/1qiucxUe5nyroQFFd9qpvubQcPDEhSa8z?usp=share_link'),
(10, 'BPOM KOTA KENDARI', 'https://drive.google.com/drive/folders/1E9P07j2W7z2PAwRC6zLfrwLwDpeGfJiN?usp=share_link'),
(11, ' BPS KOTA KENDARI', 'https://drive.google.com/drive/folders/1cI0VV7JZ7NS7fq55sPTc37kcyLFAWZNt?usp=share_link'),
(12, 'DISNAKERTRANS KOTA KENDARI', 'https://drive.google.com/drive/folders/1bEbvK9lN2JoCz59eP8H_8fBEvF6WEIvh?usp=share_link'),
(13, 'DINKES KOTA KENDARI', 'https://drive.google.com/drive/folders/174XLmz-4eHa1Rzzlwp3wVd8wUQ4ZSMwh?usp=share_link'),
(14, 'DISDUKCAPIL KOTA KENDARI', 'https://drive.google.com/drive/folders/1t_le6Zf4mBR8015RooiYeaH7vs7MNZDS?usp=share_link'),
(15, 'DPMPTSP KOTA KENDARI', 'https://drive.google.com/drive/folders/1tT3XM511iQlyy9smMCpL0wAvBXXU79ft?usp=share_link'),
(16, 'DPMPTSP PROV SULTRA', 'https://drive.google.com/drive/folders/1-i9gAazb748rDH0uFx4OHL2Ap2P_4EWg?usp=share_link'),
(17, 'IAI KOTA KENDARI', 'https://drive.google.com/drive/folders/1na_jOB1zLkhnvN3th5BdhBemOA_dYC48?usp=share_link'),
(18, 'INI KOTA KENDARI', 'https://drive.google.com/drive/folders/1RWIN32KbqolNEvgzlvtsaLLLfizqveso?usp=share_link'),
(19, 'KANTOR IMIGRASI TINKAT I TPI KENDARI', 'https://drive.google.com/drive/folders/1kLMdUi4U6zM8NUwkffFOAr3_w-EcO4oO?usp=share_link'),
(20, 'KEMENAG KOTA KENDARI', 'https://drive.google.com/drive/folders/1jto3zHoWE7W90Rm-Htc73VKCGRC8lRaL?usp=share_link'),
(21, 'KANTOR PERTANAHAN KOTA KENDARI', 'https://drive.google.com/drive/folders/18r0Op0vj_4wyU3TrBaRE6KujJbu7_MIU?usp=share_link'),
(22, 'KEJAKSAAN NEGERI KOTA KENDARI', 'https://drive.google.com/drive/folders/1zbJcp_jS3KGJnLvJ9rkFl3CqQZj01CCL?usp=share_link'),
(23, 'KENDARI INVESTMENT CENTER', 'https://drive.google.com/drive/folders/1dLxLWTZ9RteuB1V18HscszgAn02wanZo?usp=share_link'),
(24, 'POLRES KOTA KENDARI', 'https://drive.google.com/drive/folders/1p2Rad591o6Wpjw0z3CLxlcXVzguf7Mbg?usp=share_link'),
(25, 'KKP PRATAMA KOTA KENDARI', 'https://drive.google.com/drive/folders/1HX3ATPk98NQ5wCaq8AZqCf5R5Fn-vlE6?usp=share_link'),
(26, 'OMBUDSMAN KOTA KENDARI', 'https://drive.google.com/drive/folders/1yog6Hmy9-1kUBcsSrrSWx1f71UX39tZG?usp=share_link'),
(27, 'PDAM TIRTA ANOA', 'https://drive.google.com/drive/folders/1QXgj3Bs_bdaLPDAHKP3pyhe9WIIGZp9Y?usp=share_link'),
(28, 'PENGADILAN NEGERI KOTA KENDARI', 'https://drive.google.com/drive/folders/1K6YkKiFGXvOxnDsYBI53orWXft55xtW-?usp=share_link'),
(29, 'PT PEGADAIAN KOTA KENDARI', 'https://drive.google.com/drive/folders/1Vy245PxaEI-0ZOgC6jjqShK3TL-FKGI7?usp=share_link'),
(30, 'PT PLN KOTA KENDARI', 'https://drive.google.com/drive/folders/1EzydbrpczYKz5CupaMlKWOsatu47pL9H?usp=share_link'),
(31, 'POS INDONESIA KOTA KENDARI', 'https://drive.google.com/drive/folders/1vIIvf_zU1NtkPml0JxXWmlAN_Q3jvH93?usp=share_link'),
(32, 'SAMSAT KOTA KENDARI', 'https://drive.google.com/drive/folders/18HB6JA83LMR7UGfN3jZOVlOQYO1HWPNS?usp=share_link'),
(33, 'SEKRETARIAT  AMDAL KOTA KENDARI', 'https://drive.google.com/drive/folders/1C0ZKXJjvOn5I5Cyh1RLD4uwHxMniYz2a?usp=share_link'),
(34, 'SEKRETARIAT PBG KOTA KENDARI', 'https://drive.google.com/drive/folders/1PUH-PyomuGw-LzqvzRLHxLApClpSvEDV?usp=share_link');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ourteam`
--

CREATE TABLE `ourteam` (
  `idteam` int(6) NOT NULL,
  `teamname` varchar(500) NOT NULL,
  `nicr` varchar(500) NOT NULL,
  `teamttl` varchar(600) NOT NULL,
  `tmbd` varchar(600) NOT NULL,
  `agamacr` varchar(300) NOT NULL,
  `gend` varchar(300) NOT NULL,
  `gol` varchar(300) NOT NULL,
  `pdt` varchar(700) NOT NULL,
  `durat` varchar(500) NOT NULL,
  `tmdesc` text NOT NULL,
  `tmpic` varchar(200) NOT NULL,
  `catcr` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ourteam`
--

INSERT INTO `ourteam` (`idteam`, `teamname`, `nicr`, `teamttl`, `tmbd`, `agamacr`, `gend`, `gol`, `pdt`, `durat`, `tmdesc`, `tmpic`, `catcr`) VALUES
(11, 'Nukke Djuwita Isamu, S.Kom.,M.Si', '19750504 200003 2 007', 'Sekretaris Dinas', ' Kendari, 04 Mei 1975', 'islam', 'Perempuan', 'IV/a', 'S.2 Agribisnis Ilmu Ekonomi & Studi Pembangunan', ' 21 Tahun 3 Bulan', '<ol><li>Diklat PIM TK IV</li><li>Diklat Pelayanan Perizinan Terpadu Satu Pintu Tahun 2011</li><li>Diklat Operator Sistim Informasi Perusahaan Online (SIPO) Tahun 2017</li><li>Pelatihan Analisis Gender Bidang Ekonomi Tahun 2017</li><li>Bimtek Costumer Service Excellent</li></ol>', 'sekret.jpg', 'sk'),
(12, 'Maman Firman Syah, S.STP., MM', '19731207 199303 2 006', 'kepala Dinas', 'Raha, 20 Oktober, 1980', 'islam', 'Laki-laki', 'IV/b ', 'S.2 Manajemen SDM ', '17 Tahun 9 Bulan ', '<ol><li>Diklat PIM II Tahun 2013</li><li>Bimtek Standar Akutansi Pemerintah Berbasis Aktual Pada Pemerintah Daerah</li><li>Bimtek Sistem Dan Prosedur Penatausahaan Dan Akutansi Pelaopran dan Pertanggung jawaban Keuangan SKPD</li><li>Bimtek Strategi Pencegahan Masalah Hukum Barang/Jasa Pemerintah</li><li>Bimtek Sistem Pengendalian Internal Pemerintah</li><li>Bimtek OSS</li></ol>', 'kadis.jpeg', 'kadis'),
(13, 'Indra Sulra M. SE', '19750102 200502 1 008', 'Kepala Bidang Pengujian Teknis, Koordinasi dan Pengawasan', ' Kendari, 2 Januari 1975', 'Islam', 'Laki-laki', 'IV/a', ' S.1 Ekonomi', '15 Tahun 2 Bulan', '<ol type=\"1\"><li>Diklat Pim Tk. IV Tahun 2012</li><br><li>Diklat Bendahara Pengeluaran SKPD Berdasarkan Pemendagri No. 59 Tahun 2007 Tentang Pedoman Pengelolaan Keuangan Daerah</li><br><li>Bimtek Pedoman Barang Milik Daerah berdasarkan Permendagri N0. 19 Tahun 2006</li><br><li>Ketatausahaan dan Filing Management Tahun 2014</li><br><li>Peningkatan Kompetensi Kebahasaan bagi Staf Pemerintah Kota Tahun 2015</li><br><li>Pelatihan Bidang Kreatifitas Pemuda Kendari Tahun 2014</li></ol>', 'indrasm.jpg', 'kb');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `idadu` int(20) NOT NULL,
  `namaadu` varchar(700) NOT NULL,
  `tlpadu` varchar(700) NOT NULL,
  `almadu` varchar(700) NOT NULL,
  `tgladu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `qna`
--

CREATE TABLE `qna` (
  `idqa` int(30) NOT NULL,
  `qasender` varchar(700) NOT NULL,
  `tlpqa` varchar(20) NOT NULL,
  `quest` varchar(900) NOT NULL,
  `tglqa` date NOT NULL,
  `response` varchar(900) NOT NULL,
  `ressts` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `qna`
--

INSERT INTO `qna` (`idqa`, `qasender`, `tlpqa`, `quest`, `tglqa`, `response`, `ressts`) VALUES
(1, 'NH4', '69969059', '1 + 1 berapa?', '2022-09-30', 'ya dua lah. masa itu aja nggak tau?', 'telah dibalas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sop`
--

CREATE TABLE `sop` (
  `idsop` int(30) NOT NULL,
  `namasop` varchar(300) NOT NULL,
  `linksop` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sop`
--

INSERT INTO `sop` (`idsop`, `namasop`, `linksop`) VALUES
(2, 'acasc', 'https://www.google.com/?hl=id'),
(3, 'asdasdvdv gdd gghd', 'https://www.google.com/search?q=wiki&oq=wiki&aqs=chrome..69i57j0i433i512j0i131i433i512j0i433i512j0i131i433i512j0i512j46i131i199i433i465i512j0i131i433i512j46i199i465i512j46i10i512.755j0j7&sourceid=chrome&ie=UTF-8'),
(4, 'sffd sdfd sf', 'https://www.google.com/search?q=wiki&oq=wiki&aqs=chrome..69i57j0i433i512j0i131i433i512j0i433i512j0i131i433i512j0i512j46i131i199i433i465i512j0i131i433i512j46i199i465i512j46i10i512.755j0j7&sourceid=chrome&ie=UTF-8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spp`
--

CREATE TABLE `spp` (
  `idspp` int(20) NOT NULL,
  `namaspp` varchar(300) NOT NULL,
  `linkspp` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `spp`
--

INSERT INTO `spp` (`idspp`, `namaspp`, `linkspp`) VALUES
(2, 'xzcxzczxczx fdf b', 'https://www.google.com/search?q=wiki&oq=wiki&aqs=chrome..69i57j0i433i512j0i131i433i512j0i433i512j0i131i433i512j0i512j46i131i199i433i465i512j0i131i433i512j46i199i465i512j46i10i512.755j0j7&sourceid=chrome&ie=UTF-8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `id` int(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_admin`
--

INSERT INTO `tabel_admin` (`id`, `username`, `password`) VALUES
(0, 'username1', 'admin'),
(1, 'username', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_berita`
--

CREATE TABLE `tabel_berita` (
  `id` int(6) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_berita`
--

INSERT INTO `tabel_berita` (`id`, `judul`, `isi`, `tanggal`, `gambar`) VALUES
(18, 'Mal Pelayanan Publik Kota Kendari Mulai Digunakan', '<p>Pemerintah Kota Kendari mulai menggunakan Mal Pelayanan Publik (MPP) dalam memberikan layanan one stop service pada masyarakat. Soft launching MPP dilakukan Wali Kota Kendari di gedung Balai Kota Kendari, Selasa (4/10/2022).</p><p>Peresmian MPP ditandai dengan pemindaian tangan dan penandatanganan prasasti oleh Wali Kota Kendari Sulkarnain Kadir disaksikan wakil Wali Kota Kendari Siska Karina Imran dan tamu undangan.</p><p>Dilanjutkan dengan meninjau layanan yang tersedia di MPP seperti layanan PTSP, Dukcapil Ombudsman, Imigrasi, pertanahan dan puluhan layanan publik lainnya.</p><p><br></p><p>Wali Kota Kendari Sulkarnain Kadir mengakui layanan ini belum maksimal, karena bangunan masih dalam tahap pembenahan, namun layanan MPP ini didedikasikan untuk memberikan pelayanan terbaik pada masyarakat Kota Kendari.</p><p>â€œMasyarakat Kota Kendari tidak perlu lagi keliling kalau ingin memenuhi kebutuhan administrasinya,â€ katanya.</p><p>â€œKonsepnya one stop service, kita berharap di titik ini semuanya bisa selesai. Satu pintu, Mudah-mudahan tidak banyak jendelanya,â€ harapnya.</p><p><br></p><p>Meskipun bukan yang pertama di Sulawesi Tenggara, namun Pemkot Kendari optimistis, MPP Kota Kendari bisa menjadi yang terbaik dengan trobosan layanan 7 hari seminggu.&nbsp;<span style=\"font-size: 1rem;\">Wakil Wali Kota Kendari Siska Karina Imran menyampaikan terimakasih pada semua pihak yang telah bekerja sama dalam menciptakan layanan di Mal Pelayanan Publik.</span></p><p><span style=\"font-size: 1rem;\">â€œHadirnya berbagai layanan masyarakat di Mal Pelayanan Publik ini semoga bisa memberikan kemudahan layanan pada masyarakat. Terima kasih juga pada instansi yang mau bekerjasama membuka layanan di sini,â€ ucapnya saat meninjau MPP.</span><br></p><p><span style=\"font-size: 1rem;\">Sementara itu, Kepala Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu (PTSP) Kota Kendari, Maman Firmansyah menjelaskan, Mal Pelayanan Publik dibuat untuk memberikan kemudahan pelayanan pada masyarakat.</span></p><p>â€œDiharapkan pertumbuhan ekonomi bisa berkembang secara pesat sebab semua layanan perizinan ada dalam satu tempat yang secara efisien bisa dijangkau seluruh masyarakat Kota Kendari,â€ jelasnya.</p><p>Maman menambahkan MPP terdapat di tiga bangunan gedung Balai Kota Kendari yakni gedung podium, selasar dan tower.</p>', '2022-12-05', 'IMG-20221004-WA0027-750x375.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_video`
--

CREATE TABLE `tabel_video` (
  `idv` int(11) NOT NULL,
  `judulv` varchar(600) NOT NULL,
  `tglv` date NOT NULL,
  `vid` varchar(900) NOT NULL,
  `thmb` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_video`
--

INSERT INTO `tabel_video` (`idv`, `judulv`, `tglv`, `vid`, `thmb`) VALUES
(3, 'ppap', '2022-09-30', 'https://www.youtube.com/watch?v=a-7gO599NfY', 'https://img.youtube.com/vi/a-7gO599NfY/hqdefault.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_file`
--

CREATE TABLE `tb_file` (
  `id_file` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `descfile` text NOT NULL,
  `upldate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_file`
--

INSERT INTO `tb_file` (`id_file`, `nama_file`, `descfile`, `upldate`) VALUES
(0, '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ttgpic`
--

CREATE TABLE `ttgpic` (
  `idttg` int(20) NOT NULL,
  `gbrttg` varchar(700) NOT NULL,
  `tgtgg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ttgpic`
--

INSERT INTO `ttgpic` (`idttg`, `gbrttg`, `tgtgg`) VALUES
(3, 'photo_6305505624460473032_y (1).jpg', '2022-11-13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `egov`
--
ALTER TABLE `egov`
  ADD PRIMARY KEY (`ideg`);

--
-- Indeks untuk tabel `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`idfaq`);

--
-- Indeks untuk tabel `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`idins`);

--
-- Indeks untuk tabel `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`idlyn`);

--
-- Indeks untuk tabel `ourteam`
--
ALTER TABLE `ourteam`
  ADD PRIMARY KEY (`idteam`);

--
-- Indeks untuk tabel `qna`
--
ALTER TABLE `qna`
  ADD PRIMARY KEY (`idqa`);

--
-- Indeks untuk tabel `sop`
--
ALTER TABLE `sop`
  ADD PRIMARY KEY (`idsop`);

--
-- Indeks untuk tabel `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`idspp`);

--
-- Indeks untuk tabel `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_berita`
--
ALTER TABLE `tabel_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_video`
--
ALTER TABLE `tabel_video`
  ADD PRIMARY KEY (`idv`);

--
-- Indeks untuk tabel `tb_file`
--
ALTER TABLE `tb_file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indeks untuk tabel `ttgpic`
--
ALTER TABLE `ttgpic`
  ADD PRIMARY KEY (`idttg`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `egov`
--
ALTER TABLE `egov`
  MODIFY `ideg` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `faq`
--
ALTER TABLE `faq`
  MODIFY `idfaq` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `instansi`
--
ALTER TABLE `instansi`
  MODIFY `idins` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `layanan`
--
ALTER TABLE `layanan`
  MODIFY `idlyn` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `ourteam`
--
ALTER TABLE `ourteam`
  MODIFY `idteam` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `qna`
--
ALTER TABLE `qna`
  MODIFY `idqa` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sop`
--
ALTER TABLE `sop`
  MODIFY `idsop` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `spp`
--
ALTER TABLE `spp`
  MODIFY `idspp` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tabel_berita`
--
ALTER TABLE `tabel_berita`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tabel_video`
--
ALTER TABLE `tabel_video`
  MODIFY `idv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ttgpic`
--
ALTER TABLE `ttgpic`
  MODIFY `idttg` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
