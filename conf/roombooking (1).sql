-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 17 Jun 2020 pada 15.08
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roombooking`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `idAdmin` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `idAdmin`, `password`) VALUES
(3, '1aaa', '123'),
(4, 'aaa', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bookings`
--

CREATE TABLE `bookings` (
  `idBooking` int(100) NOT NULL,
  `nimBooking` varchar(100) NOT NULL,
  `namaPembooking` varchar(50) NOT NULL,
  `namaRuangBooking` varchar(100) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `jamMulai` varchar(15) NOT NULL,
  `jamSelesai` varchar(15) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `statusBooking` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bookings`
--

INSERT INTO `bookings` (`idBooking`, `nimBooking`, `namaPembooking`, `namaRuangBooking`, `tanggal`, `jamMulai`, `jamSelesai`, `keterangan`, `statusBooking`) VALUES
(23, '0287', 'Rasyid Rid', '4.4.3', '2009-02-02', '12:12:12', '12:12:12', 'ini adlah contoh booking', 'pending'),
(25, '0285', 'Rasyid Rid', '4.4.3', '2009-02-02', '12:12:12', '12:12:12', 'ini adlah contoh booking', 'accepted'),
(26, '0289', 'assas', 'as', 'as', 'as', 'asa', 'as', 'pending'),
(85, '85', 'eko', '4.4.3', '14', '15', '12', 'yhu', 'pending'),
(290, '0288', 'bb', 'bb', 'bb', 'bb', '  bbb', 'bbb', 'pending'),
(291, '0280', 'eko', '4.4.3', '14', '15', '12', 'yhu', 'pending'),
(292, '0281', 'eko', '4.4.3', '14', '15', '12', 'yhu', 'pending'),
(293, '087', 'bsv', '5.5.3', '12', '12', '12', '12', 'pending'),
(294, '8597', 'zd', '5.5.6', 'jwh', 'jwn', 'nsbw', 'nana', 'pending'),
(295, '949', 'bb', '5.5.5', 'g', 'ct', 'v', 'v', 'pending'),
(296, '77', 'ss', '5.5.5', 'hh', 'hh', 'yg', 'hh', 'pending'),
(297, '0286', 'ff', '5.5.4', 'Rabu 17 Juni 2020', '07:00', '08:00', 'hgh', 'pending');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rooms`
--

CREATE TABLE `rooms` (
  `idRoom` int(11) NOT NULL,
  `namaRoom` varchar(50) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `fasilitas1` varchar(50) DEFAULT NULL,
  `fasilitas2` varchar(20) NOT NULL,
  `fasilitas3` varchar(20) NOT NULL,
  `fasilitas4` varchar(20) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rooms`
--

INSERT INTO `rooms` (`idRoom`, `namaRoom`, `kapasitas`, `fasilitas1`, `fasilitas2`, `fasilitas3`, `fasilitas4`, `deskripsi`) VALUES
(5, '5.5.3', 20, 'yuhu', 'yuhu', 'yuhu', 'yuhu', 'yuhu'),
(7, '5.5.4', 800, '', '', '', '', 'yuhu'),
(8, '5.5.5', 800, 'AC', 'kipas', 'Monitor', 'meja', 'yuhu'),
(9, '5.5.6', 800, 'AC', 'kipas', 'Monitor', 'meja', 'yuhu'),
(10, '4.0.0', 12, 'y', 'y', 'y', 'y', 'yuhu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `idUsers` int(100) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `namaUser` varchar(25) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `token` varchar(800) DEFAULT NULL,
  `image` varchar(100) CHARACTER SET latin1 DEFAULT 'localhost:80/Backend%20Room%20Booking/TableUsers/images/user.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`idUsers`, `nim`, `namaUser`, `nohp`, `password`, `token`, `image`) VALUES
(86, '0', 'yaha', '64', 'as', '', ''),
(72, '0280', 'shedy', '120', '08545212', 'c18lc_pyhsw:APA91bGD5JlQ5fTMgQMM_6JDefm626cKx5dyNKZQUcognrzDa_I-J2mLoZLgZmTY7B_JZsnsaB8-Lzr8IEE_k9_CRzcKkVyVvt6dqoY1U2rZk6WSQpKyHRc0hHBqeiemEASFLaKq2fvZ', '72.png'),
(71, '0281', 'shedy', '120', '08545212', 'c18lc_pyhsw:APA91bGD5JlQ5fTMgQMM_6JDefm626cKx5dyNKZQUcognrzDa_I-J2mLoZLgZmTY7B_JZsnsaB8-Lzr8IEE_k9_CRzcKkVyVvt6dqoY1U2rZk6WSQpKyHRc0hHBqeiemEASFLaKq2fvZ', '71.png'),
(70, '0283', 'wew', 'sd', 'sds', 'c18lc_pyhsw:APA91bGD5JlQ5fTMgQMM_6JDefm626cKx5dyNKZQUcognrzDa_I-J2mLoZLgZmTY7B_JZsnsaB8-Lzr8IEE_k9_CRzcKkVyVvt6dqoY1U2rZk6WSQpKyHRc0hHBqeiemEASFLaKq2fvZ', 'https://7c6f7290.ngrok.io/Backend%20Room%20Booking/TableUsers/images/user.png.jpg'),
(64, '0284', 'wew', 'sd', 'sds', 'fbfbfbfbfbfbf', '64.png'),
(52, '0285', 'Rasyid', '087715441292', '2610', 'contoh', ''),
(69, '0286', 'ff', 'ff', '55', 'c18lc_pyhsw:APA91bGD5JlQ5fTMgQMM_6JDefm626cKx5dyNKZQUcognrzDa_I-J2mLoZLgZmTY7B_JZsnsaB8-Lzr8IEE_k9_CRzcKkVyVvt6dqoY1U2rZk6WSQpKyHRc0hHBqeiemEASFLaKq2fvZ', 'https://7c6f7290.ngrok.io/Backend%20Room%20Booking/TableUsers/images/user.png.jpg'),
(53, '0287', 'Rasyid', '087715441292', '2610', 'contoh', ''),
(83, '0288', 'rasyid ridla', '2610', '0877154412', 'f89QCFegaOA:APA91bEfHCdytT4JhI_hz2L06YBA_oIIQF33im-YLoeNFOkurBFWF8V121Vwhx6MH3fKuAz-qGW2tBXL8wCVlpex4mJjfzHAHv0dTdJqkAoSg7yESWSoP4DYN2iA_P7_noER0DffyY1X', 'https://7c6f7290.ngrok.io/Backend%20Room%20Booking/TableUsers/images/user.png.jpg'),
(57, '0289', 'sas', 'asa', 'sas', 'contoh', ''),
(82, '087', 'bsv', '124', '949', 'cQ0KoVaPFNg:APA91bHUKnNhEy4QqfLvAkkl1XetVXpBgSpR1jiLHQxHIYczq8D2Oh1wblgGHccyXvIJwq81m4syECa6FiBJ_cmpM26t3PQDs8MmKYtAdoD311XYYwKL2PThL1syXXao9yA0xIsEX1J6', 'https://7c6f7290.ngrok.io/Backend%20Room%20Booking/TableUsers/images/user.png.jpg'),
(63, '123', 'ug', 'hchg', 'jyvguyfu', 'yjhv', ''),
(76, '1234', 's', '7', 'a', 'ezcTEuERlhU:APA91bG3KY7Y2j6jl1YFwDCG6Oy6G9s7sBSWue9GLlN12oFBtFVQOOZDW64f3NV_gF77nrURyevUrjYegsYKEFX2Q-YXkb0xMr9XzQQuFb0fzw7Q3--sJFLiN2RhuxJaiW65-4baQPiL', 'https://7c6f7290.ngrok.io/Backend%20Room%20Booking/TableUsers/images/user.png.jpg'),
(65, '22', 'ee', 'se', '22', '', ''),
(74, '2882', 'fvvt', 'vvt', '299', 'eeVdtTlph7s:APA91bG1pCVfL8UIDOJmyhOo4ZbhLa6hYWFfFuT9GOsXln2dKxavZMCODLw29UBFtktHg6ojKh03E9a88e62240QO3B2CwJetpamOkSzNDxWZo3S16aoCJLqhLih0KFMITgKWKR6WKkR', 'https://7c6f7290.ngrok.io/Backend%20Room%20Booking/TableUsers/images/user.png.jpg'),
(75, '32', 's.s.', '44', 's', 'dCaWOrHpvGE:APA91bEIpA9R4Jj61Un9RjpfNuuKJl8-SJ0v-cEgdd2hy6fGLZayrBNDQazYawLtNS9pT7x64r4QCGm6PHUQPaCJOClzSjYp_pfcQgijF8l1c5cZ078_dikHueEpAHnlFqwOYHABtO56', 'https://7c6f7290.ngrok.io/Backend%20Room%20Booking/TableUsers/images/user.png.jpg'),
(78, '5282', 'ss', 'dd', '55', 'cN9mJJnu_uA:APA91bEsl8NpHIluk--IuwaD8GCr9H8ckybAAcejnVXcY01xkS1gJDFDBohHJonepwWOl-fCWr-lv5BFB_cN30x_EllmTSn92H2NLOduN-BxYT0Qt00oJfHfeRzTp67ywBiSx70IjM3F', 'https://7c6f7290.ngrok.io/Backend%20Room%20Booking/TableUsers/images/user.png.jpg'),
(81, '55', 'sd', 'dd', '55', 'cQ0KoVaPFNg:APA91bHUKnNhEy4QqfLvAkkl1XetVXpBgSpR1jiLHQxHIYczq8D2Oh1wblgGHccyXvIJwq81m4syECa6FiBJ_cmpM26t3PQDs8MmKYtAdoD311XYYwKL2PThL1syXXao9yA0xIsEX1J6', 'https://7c6f7290.ngrok.io/Backend%20Room%20Booking/TableUsers/images/user.png.jpg'),
(67, '6', ' b', 'g', '9', '', ''),
(68, '685', ' b', 'g', '9', '', 'https://7c6f7290.ngrok.io/Backend%20Room%20Booking/TableUsers/images/user.png.jpg'),
(79, '77', 'ss', 'ss', '44', 'cN9mJJnu_uA:APA91bEsl8NpHIluk--IuwaD8GCr9H8ckybAAcejnVXcY01xkS1gJDFDBohHJonepwWOl-fCWr-lv5BFB_cN30x_EllmTSn92H2NLOduN-BxYT0Qt00oJfHfeRzTp67ywBiSx70IjM3F', 'https://7c6f7290.ngrok.io/Backend%20Room%20Booking/TableUsers/images/user.png.jpg'),
(77, '85', 'zd', 'xz', '27', 'fxgM-rZvmVg:APA91bGy1_2oplmoYUp_VxRTdDnnVU22mw9qWkxDJ1xwiVsyuRDMJLl1tWmLRIHhOJ7fq9Jzt55CJS0Ppq94XXwICYP7lQsRghCcBdUubUnWDx3rx1sQWDUl2YsO6UKRmZ7kTPXgFGBo', 'https://7c6f7290.ngrok.io/Backend%20Room%20Booking/TableUsers/images/user.png.jpg'),
(80, '8597', 'zd', 'xzjsh', '27', 'fxgM-rZvmVg:APA91bGy1_2oplmoYUp_VxRTdDnnVU22mw9qWkxDJ1xwiVsyuRDMJLl1tWmLRIHhOJ7fq9Jzt55CJS0Ppq94XXwICYP7lQsRghCcBdUubUnWDx3rx1sQWDUl2YsO6UKRmZ7kTPXgFGBo', 'https://7c6f7290.ngrok.io/Backend%20Room%20Booking/TableUsers/images/user.png.jpg'),
(73, '9', 'jj', 'jj', '66', 'fxgM-rZvmVg:APA91bGy1_2oplmoYUp_VxRTdDnnVU22mw9qWkxDJ1xwiVsyuRDMJLl1tWmLRIHhOJ7fq9Jzt55CJS0Ppq94XXwICYP7lQsRghCcBdUubUnWDx3rx1sQWDUl2YsO6UKRmZ7kTPXgFGBo', 'https://7c6f7290.ngrok.io/Backend%20Room%20Booking/TableUsers/images/user.png.jpg'),
(66, '949', 'bb', 'b', '99', '', ''),
(87, '9494', 'bdbee', 'bsbs', '9495', 'elQL2dfpukU:APA91bEI2Mjrw6M4izxjf8xX09iicFKPcvnJ5jDZBuKtJyHa25IwySLzMMAfHvAsQuBacjm_zCvnFjsMgQ4e7AvOGcSpzpRJOcI0mEp0bGHUYNhyXgkfENoQc0X1pmHQ6Sn3VbSLm2i3', 'localhost:80/Backend%20Room%20Booking/TableUsers/images/user.png'),
(88, '9494919', 'heb3', 'bshs', '949', 'cdpNwm6bllE:APA91bGSS9RUJYMiVKFqH2GMaRdiRsSiofy5OatsP2Cb6R5W3CCe6cwj4gqYPggmOTIk8srvCb0kcFTFZzU7oR_5QUcA5EdLAoME_eg_b3mcKKPRDSXS-YCSsI1ltmYv6wTjzXEG86rO', 'localhost:80/Backend%20Room%20Booking/TableUsers/images/user.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`idBooking`),
  ADD KEY `idUserBooking` (`nimBooking`);

--
-- Indeks untuk tabel `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`idRoom`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nim`),
  ADD UNIQUE KEY `idUsers` (`idUsers`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `bookings`
--
ALTER TABLE `bookings`
  MODIFY `idBooking` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=298;

--
-- AUTO_INCREMENT untuk tabel `rooms`
--
ALTER TABLE `rooms`
  MODIFY `idRoom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
