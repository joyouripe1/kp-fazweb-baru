-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Des 2020 pada 10.53
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fazzweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `invoice`
--

INSERT INTO `invoice` (`id`, `nama`, `alamat`, `no_telp`, `tgl_pesan`, `batas_bayar`) VALUES
(1, 'Azam Putra Imanto', 'Pemalang', '', '2020-12-20 11:31:18', '2020-12-22 11:31:18'),
(2, 'Azam Putra Imanto', 'Pemalang', '', '2020-12-20 11:32:57', '2020-12-22 11:32:57'),
(3, 'Azam Putra Imanto', 'Pemalang', '', '2020-12-20 11:35:55', '2020-12-22 11:35:55'),
(4, 'Abizar Azka Mazaya', 'Pemalang', '', '2020-12-20 11:38:20', '2020-12-22 11:38:20'),
(5, 'Abizar Azka Mazaya', 'Pelutan', '', '2020-12-20 12:02:09', '2020-12-22 12:02:09'),
(6, 'Abizar Azka Mazaya', 'Pelutan', '', '2020-12-20 12:04:29', '2020-12-22 12:04:29'),
(7, 'Putra', 'Tegal', '', '2020-12-20 12:25:16', '2020-12-22 12:25:16'),
(8, 'Azam Putra', 'Tegal', '085325656274', '2020-12-20 14:37:33', '2020-12-22 14:37:33'),
(9, 'Ramzi Ibnu Aqil Azizi', 'Pemalang', '0987654321', '2020-12-20 14:55:55', '2020-12-22 14:55:55'),
(10, 'Ramzi Ibnu Aqil Azizi', 'Pemalang', '0987654321', '2020-12-20 14:57:12', '2020-12-22 14:57:12'),
(11, 'Ramzi Ibnu Aqil Azizi', 'Pemalang', '0987654321', '2020-12-20 14:57:29', '2020-12-22 14:57:29'),
(12, 'Ramzi Ibnu Aqil Azizi', 'Pemalang', '0987654321', '2020-12-20 14:58:15', '2020-12-22 14:58:15'),
(13, 'Azam Putra Imanto', 'Tegal', '085325656274', '2020-12-20 15:12:29', '2020-12-22 15:12:29'),
(14, 'Azam Putra Imanto', 'Tegal', '085325656274', '2020-12-20 15:18:30', '2020-12-22 15:18:30'),
(15, 'Azam Putra Imanto', 'Tegal', '085325656274', '2020-12-20 15:27:44', '2020-12-22 15:27:44'),
(16, 'Azam Putra Imanto', 'Tegal', '085325656274', '2020-12-20 15:33:32', '2020-12-22 15:33:32'),
(17, 'Azam Putra Imanto', 'Tegal', '085325656274', '2020-12-20 15:34:34', '2020-12-22 15:34:34'),
(18, 'Azam Putra Imanto', 'Tegal', '085325656274', '2020-12-20 15:42:09', '2020-12-22 15:42:09'),
(19, 'Imanto', 'Tegal', '555555', '2020-12-20 15:49:49', '2020-12-22 15:49:49'),
(20, 'Imanto', 'Tegal', '555555', '2020-12-20 15:50:55', '2020-12-22 15:50:55'),
(21, 'Imanto', 'Tegal', '555555', '2020-12-20 15:53:55', '2020-12-22 15:53:55'),
(22, 'Imanto', 'Tegal', '555555', '2020-12-20 15:54:54', '2020-12-22 15:54:54'),
(23, 'Imanto', 'Tegal', '555555', '2020-12-20 15:55:37', '2020-12-22 15:55:37'),
(24, 'Imanto', 'Tegal', '555555', '2020-12-20 15:56:32', '2020-12-22 15:56:32'),
(25, 'Imanto', 'Tegal', '555555', '2020-12-20 15:57:50', '2020-12-22 15:57:50'),
(26, 'Imanto', 'Tegal', '555555', '2020-12-20 15:59:02', '2020-12-22 15:59:02'),
(27, 'Imanto', 'Tegal', '555555', '2020-12-20 16:06:41', '2020-12-22 16:06:41'),
(28, 'Imanto', 'Tegal', '555555', '2020-12-20 16:07:11', '2020-12-22 16:07:11'),
(29, 'Imanto', 'Tegal', '555555', '2020-12-20 16:08:47', '2020-12-22 16:08:47'),
(30, '', '', '', '2020-12-20 16:24:39', '2020-12-22 16:24:39'),
(31, 'AA', 'PML', '02121', '2020-12-20 16:29:39', '2020-12-22 16:29:39'),
(32, 'AA', 'PML', '02121', '2020-12-20 16:31:15', '2020-12-22 16:31:15'),
(33, 'AA', 'PML', '02121', '2020-12-20 16:32:33', '2020-12-22 16:32:33'),
(34, 'AA', 'PML', '02121', '2020-12-20 16:33:59', '2020-12-22 16:33:59'),
(35, 'AA', 'PML', '02121', '2020-12-20 16:36:56', '2020-12-22 16:36:56'),
(36, 'AA', 'PML', '02121', '2020-12-20 16:38:39', '2020-12-22 16:38:39'),
(37, 'AA', 'PML', '02121', '2020-12-20 16:39:01', '2020-12-22 16:39:01'),
(38, 'AA', 'PML', '02121', '2020-12-20 16:44:01', '2020-12-22 16:44:01'),
(39, 'AA', 'PML', '02121', '2020-12-20 16:44:32', '2020-12-22 16:44:32'),
(40, 'AA', 'PML', '02121', '2020-12-20 16:45:00', '2020-12-22 16:45:00'),
(41, 'AA', 'PML', '02121', '2020-12-20 16:45:21', '2020-12-22 16:45:21'),
(42, 'AA', 'PML', '02121', '2020-12-20 16:46:31', '2020-12-22 16:46:31'),
(43, '', '', '', '2020-12-30 04:14:37', '2021-01-01 04:14:37'),
(44, '', '', '', '2020-12-30 04:46:54', '2021-01-01 04:46:54'),
(45, '', '', '', '2020-12-30 04:49:41', '2021-01-01 04:49:41'),
(46, 'Azam Putra Imanto', 'Pemalang', '085325656274', '2020-12-31 16:38:47', '2021-01-02 16:38:47'),
(47, 'Azam Putra Imanto', 'Pemalang', '085325656274', '2020-12-31 16:45:39', '2021-01-02 16:45:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `produk` varchar(100) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `harga` int(10) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `gambar` text NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_invoice`, `id_produk`, `produk`, `jumlah`, `harga`, `bank`, `gambar`, `pilihan`) VALUES
(1, 3, 6, 'topi', 1, 75000, '', '', ''),
(2, 3, 8, 'topi', 1, 100000, '', '', ''),
(3, 3, 34, 'tas', 1, 35000, '', '', ''),
(4, 3, 16, 'topi', 1, 60000, '', '', ''),
(5, 3, 23, 'sepatu', 1, 2500000, '', '', ''),
(6, 3, 24, 'sepatu', 1, 650000, '', '', ''),
(7, 4, 8, 'topi', 1, 100000, '', '', ''),
(8, 4, 30, 'sepatu', 1, 6000000, '', '', ''),
(9, 4, 12, 'topi', 1, 55000, '', '', ''),
(11, 6, 1, 'Kaos', 1, 50000, '', '', ''),
(12, 7, 4, 'sepatu', 4, 99000, '', '', ''),
(13, 7, 3, 'Kaos', 2, 2345, '', '', ''),
(14, 7, 2, 'baju', 1, 25000, '', '', ''),
(15, 7, 1, 'Kaos', 1, 50000, '', '', ''),
(16, 8, 3, 'Kaos', 1, 2345, '', '', ''),
(17, 12, 3, 'Kaos', 1, 2345, 'MANDIRI - XXXXXXXX', '', ''),
(18, 18, 31, 'tas', 1, 150000, 'MUAMALAT- XXXXXXXX', '', ''),
(19, 30, 6, 'topi', 1, 75000, '-- PILIH OBSI TRANSFER --', '', ''),
(20, 42, 70, 'baju', 1, 45000, 'INDOMART- XXXXXXXX', '', ''),
(21, 43, 1, 'Kaos', 2, 50000, '-- PILIH OBSI PEMBAYARAN --', '', ''),
(22, 44, 1, 'Kaos', 1, 50000, '-- PILIH OBSI PEMBAYARAN --', '', ''),
(23, 45, 1, 'Kaos', 1, 50000, '-- PILIH OBSI PEMBAYARAN --', '', ''),
(24, 47, 1, 'Kaos', 3, 50000, 'INDOMART - 0024681357', '', ''),
(25, 47, 2, 'baju', 2, 25000, 'INDOMART - 0024681357', '', ''),
(26, 47, 3, 'Kaos', 1, 2345, 'INDOMART - 0024681357', '', '');

--
-- Trigger `pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `pesanan` FOR EACH ROW BEGIN
	UPDATE produk SET stok = stok-NEW.jumlah
    WHERE id_produk = NEW.id_produk;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `produk` varchar(150) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `kategori` varchar(500) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `berat` int(50) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `produk`, `keterangan`, `kategori`, `harga`, `stok`, `berat`, `gambar`) VALUES
(1, 'Kaos', 'baru', 'baju pria', 50000, 21, 25, 'pngwing.com(5).png'),
(2, 'baju', 'baju klasik', 'baju pria', 25000, 97, 20, 'baju.png'),
(3, 'Kaos', 'sdfghkjl', 'baju pria', 2345, 6538, 0, 'baju2.png'),
(4, 'sepatu', 'sepatu', 'sepatu pria', 99000, 96, 0, 'sepatu.png'),
(5, 'topi', 'topi', 'topi', 50000, 100, 0, 'topi13.jpg'),
(6, 'topi', 'topi', 'topi', 75000, 31, 0, 'topi12.webp'),
(7, 'topi', 'topi', 'topi', 35000, 78, 0, 'topi1.jpg'),
(8, 'topi', 'topi', 'topi', 100000, 120, 0, 'topi2.jpg'),
(10, 'topi', 'topi', 'topi', 45000, 10, 0, 'topi4.jpg'),
(11, 'topi', 'topi', 'topi', 100000, 99, 0, 'topi5.jpg'),
(12, 'topi', 'topi', 'topi', 55000, 10, 0, 'topi6.jpg'),
(13, 'topi', 'topi', 'topi', 200000, 7, 0, 'topi7.jpg'),
(14, 'topi', 'topi', 'topi', 30000, 5, 0, 'topi8.jpg'),
(15, 'topi', 'topi', 'topi', 72000, 8, 0, 'topi9.jpg'),
(16, 'topi', 'topi', 'topi', 60000, 8, 0, 'topi10.jpg'),
(17, 'topi', 'topi', 'topi', 70000, 60, 0, 'topi11.jpg'),
(18, 'sepatu', 'sepatu', 'sepatu pria', 500000, 5, 0, 'sepatu1.png'),
(19, 'sepatu', 'sepatu', 'sepatu pria', 10000000, 1, 1, 'sepatu2.jpg'),
(20, 'sepatu', 'sepatu', 'sepatu pria', 250000, 100, 1, 'sepatu3.jpg'),
(21, 'sepatu', 'sepatu', 'sepatu pria', 550000, 20, 0, 'sepatu4.jpg'),
(22, 'sepatu', 'sepatu', 'sepatu pria', 150000, 200, 1, 'sepatu5.jpeg'),
(23, 'sepatu', 'sepatu', 'sepatu pria', 2500000, 1, 1, 'sepatu6.jpeg'),
(24, 'sepatu', 'sepatu', 'sepatu pria', 650000, 5, 0, 'sepatu6.jpg'),
(25, 'sepatu', 'sepatu', 'sepatu pria', 300000, 8, 0, 'sepatu7.jpg'),
(27, 'sepatu', 'sepatu', 'sepatu pria', 253000, 6, 0, 'sepatu9.jpg'),
(28, 'sepatu', 'sepatu', 'sepatu pria', 5000000, 1000000, 0, 'sepatu10.jpg'),
(29, 'sepatu', 'sepatu', 'sepatu pria', 8000000, 9, 0, 'sepatu11.jpg'),
(30, 'sepatu', 'sepatu', 'sepatu wanita', 6000000, 3, 0, 'sepatu12.webp'),
(31, 'tas', 'tas', 'tas', 150000, 9, 0, 'tas1.jpg'),
(32, 'tas', 'tas', 'tas', 50000, 35, 0, 'tas2.jpg'),
(33, 'tas', 'tas', 'tas', 80000, 25, 0, 'tas3.jpg'),
(34, 'tas', 'tas', 'tas', 35000, 50, 0, 'tas4.webp'),
(35, 'tas', 'tas', 'tas', 65000, 20, 0, 'tas5.webp'),
(36, 'tas', 'tas', 'tas', 45000, 30, 0, 'tas6.jpg'),
(37, 'tas', 'tas', 'tas', 85000, 70, 0, 'tas7.webp'),
(38, 'tas', 'tas', 'tas', 70000, 57, 0, 'tas8.webp'),
(39, 'tas', 'tas', 'tas', 76000, 64, 0, 'tas9.webp'),
(40, 'tas', 'tas', 'tas', 300000, 22, 0, 'tas10.webp'),
(41, 'jaket', 'jaket', 'jaket pria', 350000, 15, 0, 'jaket1.webp'),
(42, 'jaket', 'jaket', 'jaket pria', 150000, 8, 0, 'jaket2.png'),
(43, 'jaket', 'jaket', 'jaket pria', 300000, 20, 0, 'jaket3.jpg'),
(44, 'jaket', 'jaket', 'jaket pria', 350000, 18, 0, 'jaket4.png'),
(45, 'jaket', 'jaket', 'jaket pria', 350000, 30, 0, 'jaket5.jpg'),
(46, 'jaket', 'jaket', 'jaket pria', 300000, 25, 0, 'jaket6.webp'),
(47, 'jaket', 'jaket', 'jaket pria', 280000, 14, 0, 'jaket7.jpeg'),
(48, 'jaket', 'jaket', 'jaket pria', 200000, 10, 0, 'jaket8.jpg'),
(49, 'jaket', 'jaket', 'jaket pria', 200000, 11, 0, 'jaket9.jpg'),
(50, 'jaket', 'jaket', 'jaket pria', 400000, 50, 0, 'jaket10.webp'),
(54, 'baju', 'baju', 'baju pria', 80000, 20, 0, 'baju3.jpg'),
(55, 'baju', 'baju', 'baju pria', 120000, 8, 0, 'baju4.jpg'),
(56, 'baju', 'baju', 'baju pria', 100000, 15, 0, 'baju5.jpg'),
(57, 'baju', 'baju', 'baju pria', 120000, 20, 0, 'baju6.jpg'),
(58, 'baju', 'baju', 'baju pria', 120000, 25, 0, 'baju7.jpg'),
(59, 'baju', 'baju', 'baju pria', 120000, 5, 0, 'baju8.jpg'),
(60, 'baju', 'baju', 'baju pria', 150000, 50, 0, 'baju9.jpg'),
(61, 'baju', 'baju', 'baju pria', 100000, 8, 0, 'baju10.jpg'),
(62, 'baju', 'baju', 'baju pria', 100000, 6, 0, 'baju11.jpg'),
(63, 'baju', 'baju', 'baju pria', 120000, 25, 0, 'baju12.jpg'),
(64, 'baju', 'baju', 'baju pria', 95000, 14, 0, 'baju13.webp'),
(65, 'baju', 'baju', 'baju pria', 100000, 23, 0, 'baju14.jpg'),
(66, 'baju', 'baju', 'baju pria', 50000, 17, 0, 'baju15.jpg'),
(67, 'baju', 'baju', 'baju pria', 120000, 18, 0, 'baju16.jpg'),
(68, 'baju', 'baju', 'baju pria', 120000, 12, 0, 'baju17.jpg'),
(69, 'baju', 'baju', 'baju pria', 100000, 30, 0, 'baju18.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
