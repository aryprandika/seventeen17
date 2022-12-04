-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 04:34 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop17`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode` varchar(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `name`) VALUES
(17, 'T-Shirt'),
(18, 'Kemeja'),
(19, 'Celana Panjang'),
(20, 'Celana Pendek'),
(21, 'Sepatu'),
(22, 'Jaket');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pembelian` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `harga` double NOT NULL,
  `total_pembelian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` double NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `ketersediaan_stok` enum('habis','tersedia') DEFAULT 'tersedia'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kategori_id`, `nama`, `harga`, `foto`, `detail`, `ketersediaan_stok`) VALUES
(13, 21, 'Air Jordan 1 Low G', 2000000, '4C7UmjfSyoZOPCCxVmu3JBMSE.jpg', 'The Air Jordan 1 G is an instant classic on the course With Air cushioning underfoot, a Wings logo on the heel and an integrated traction pattern to help you power through your swing, it delivers all the clubhouse cool of the original AJ1', 'tersedia'),
(14, 21, 'Air Jordan 7 Retro SE', 2800000, 'sPIDpr1oL8xVPJhal2WoTLWXg.jpg', 'Kick it back to &#039;92 with this latest iteration of the AJ7, reviving the championship legacy for a new generation of sneakerheads. Come for the throwback style, stay all day for the premium construction and signature Air cushioning.', 'tersedia'),
(15, 21, 'Nike Air Force 1 Mid &#039;07 LX', 1700000, 'EBU55wP8wZTJudowPQyZMBgnJ.jpg', 'The original high-flier. From era-echoing, &#039;80s construction to bold details and nothin&#039;-but-net style, the AF-1 elevates your game with premium materials, plush ankle padding and an adjustable strap.', 'tersedia'),
(16, 21, 'Air Jordan 1 Retro High OG', 1900000, 'nViKqlqiNZncTaeq224CKbPYe.jpg', 'Familiar but always fresh, the iconic Air Jordan 1 is remastered for today&#039;s sneakerhead culture. This Retro High OG version goes all in with premium leather, comfortable cushioning and classic design details.', 'tersedia'),
(17, 21, 'Nike Air More Uptempo &#039;96', 2000000, 'EGpdsAaFXWnwO95oCXAaSJw8i.jpg', 'Air More Uptempo is the new seasonal flavour. Ready for autumn, its earthy hues deliver a fresh, harvest-time aesthetic to the &#039;90s icon. Elastic straps over the tongue keep your look sharp whether you rock them laced or unlaced. P.S. visible Nike Air cushioning keeps you cosier than a cappuccino or cardigan ... though both pair well with these go-to kicks.', 'tersedia'),
(18, 21, 'Nike Air Force 1&#039;07', 1000000, 'jqV8Pblw2MPWfQqD8ic0OE07z.jpg', 'The radiance lives on in the Nike Air Force 1 &#039;07, the basketball original that puts a fresh spin on what you know best: durably stitched overlays, clean finishes and the perfect amount of flash to make you shine.', 'tersedia'),
(19, 21, 'Nike Blazer Mid &#039;77 By You', 1500000, 'mKLraA3KLHNqbcitklL9eWs6Q.jpg', 'Styled for the &#039;70s. Loved in the &#039;80s. Classic in the &#039;90s. Ready for your special touch. The Nike Blazer Mid By You lets you customise the timeless design. Choose between a variety of colours on the pebbled leather upper, tailor it with suede accents and personalise it with a message', 'tersedia'),
(20, 21, 'Nike Air Max Impact 4', 1000000, 'RBOag9194XSI8qwOuARXq6Ofb.jpg', 'Elevate your game and your hops. Charged with Max Air cushioning in the heel, this lightweight, secure shoe helps you get off the ground confidently and land comfortably. Plus, rubber wraps up the sides for added durability and stability..', 'tersedia'),
(21, 21, 'Air Jordan 1 Mid', 1500000, 'UB6SrtlFEzhSpC6A0bmAtaEVT.jpg', 'It&#039;s easy being green. This summery AJ1 is decked out in refreshing shades of teal and mint, served in a classic mid-top silhouette. Premium leather and lightweight Air cushioning complete the package with street-ready comfort that lasts all day.', 'tersedia'),
(22, 21, 'Jordan 1 KO', 2400000, 'peKkwq4mv0aSMJStxMIrBCZ0k.jpg', 'The Jordan 1 inspires admiration among collectors and next-gen fans alike. The Jordan 1 KO repackages the famous icon using a mix of synthetic leather and canvas, with a fit that&#039;s redesigned for comfort.', 'tersedia'),
(23, 21, 'Air Jordan 1 Retro High OG', 2200000, 'XMGkKWymTg6QpQsaWN4TI4geb.jpg', 'Relive the moment you made the team with these varsity-jacket-inspired kicks. Chenille fabric on the Swoosh and classic varsity colours celebrate your journey to greatness—and help you look good along the way.', 'tersedia'),
(24, 21, 'Nike Dunk Low LL', 1200000, '4HnXtX65vR5OLEU8ubXLJFhSj.jpg', 'The dunk&quot; gets Dunked. Celebrating the 20th anniversary of Lisa Leslie&#039;s magical on-court moment, a hoops original brings the heat to honour the first woman to dunk in a pro game. Team colours and an embroidered 9 on the heel pay tribute to the championship-winning athleticism that propelled Lisa to be a 3x MVP. An Emerald Green Swoosh logo sends a bolt of energy up the side of the shoe, while colour-matched laces and stitching finish the look.', 'tersedia'),
(25, 21, 'Nike Air Force 1 High', 1300000, 'lI9u3OMrY9wWcK4FKxOop1guw.jpg', 'This shoe has everything you love best: crisp overlays, bold hoops style and the perfect amount of flash to let your shoe game shine. The padded, high-cut collar and hook-and-loop closure adds classic comfort, while perforations help keep you cool.', 'tersedia'),
(26, 21, 'Nike Air Force 1 High SE', 1400000, 'nrmAbyB4cxBC8T9Qtok67Jm5u.jpg', 'What&#039;s old is new again—and even better this time around. Celebrate 50 years of Nike innovation and turn back the clock with the original high flier. Baller style with double Swoosh designs keeps the classic look you love. It&#039;s nothing-but-net style and then some', 'tersedia'),
(27, 21, 'Nike Air Force 1 High Unlocked By You', 2000000, 'iZJU3hdyH4Za1S1oLPUjiFHm4.jpg', 'Bring yourself to the table with the original high-flyer. Fully customisable, it lets you be as expressive as you want. Choose between an original Swoosh or a crytal-inspired one. Add metallic finishes. Speckle the midsole', 'tersedia'),
(28, 21, 'Converse Chuck Taylor All Star - Sneakers Shoes - Black', 700000, 'J69Zwm0P8gACSDLPnlhJPtqXa.png', '                                        A reliable piece made of super-soft leather so you can wear it as neat or messy. You make up the story                                ', 'tersedia'),
(29, 21, 'Converse CHUCK 70 Sneakers Shoes - Black', 800000, 'T00UCtMIS2tobrTMwyhUsSEfG.png', '                    Find the perfect style for you.                ', 'tersedia'),
(30, 21, 'Converse Chuck Taylor All Star Sneakers Shoes - White', 600000, 'JQJHpuvK9HijmRoqDAL1wlIzc.png', '                                        We can safely say that this is an OG basketball shoe, made over 100 years ago. The story of how and where you took your Chuck. This is a long story that has made history, but its future story is up to you. We only make shoes. You make up the story.                                ', 'tersedia'),
(31, 21, 'Converse Chuck Taylor All Star Sneakers Shoes - Black', 700000, 'OPMQuGm1LPM6bmps60xps0Ax8.png', '                    We can safely say that this is an OG basketball shoe, made over 100 years ago. The story of how and where you took your Chuck. This is a long story that has made history, but its future story is up to you. We only make shoes. You make up the story.                ', 'tersedia'),
(32, 21, 'Converse Chuck Taylor All Star Sneakers Shoes - Red', 700000, 'etfQgNeCkiII01EVv1iTgzeoS.png', '                    We can safely say that this is an OG basketball shoe, made over 100 years ago. The story of how and where you took your Chuck. This is a long story that has made history, but its future story is up to you. We only make shoes. You make up the story.                ', 'tersedia'),
(33, 21, 'Converse Chuck 70 Sneakers Shoes - Sunflower', 700000, 'fP1XEiUHDVghhvdaV8JogOVM9.png', '                                        We can safely say that this is an OG basketball shoe, made over 100 years ago. The story of how and where you took your Chuck. This is a long story that has made history, but its future story is up to you. We only make shoes. You make up the story.                                ', 'tersedia'),
(34, 21, 'Converse Chuck 70 Sneakers Shoes - Parchment', 800000, 'M8jHpwbLX8h1U6Syo5QshSlYy.png', '                                        The cushion is softer, the canvas is stronger, and it is as versatile as it is used. The Chuck 70 is based on the original 1970&#039;s design, with premium materials and exceptional attention to detail. We added an extra-cushioned insole for arch support and stability, and used winged tongue seams on the 12-ounce canvas for durability. Can be used all day, every day.                                ', 'tersedia'),
(35, 21, 'Converse Chuck Taylor All Star Dainty GS Women&#039;s Sneakers', 600000, '1NpEv7QlmmJNwMusRyQKac0La.png', '                    It&#039;s a thinner, lighter, and more beachy version of the authentic Chuck—re-engineered to perfection. The Dainty sneaker underwent a complete revamp of proportions with eyelets, laces and tongue tags getting prettier to match the ultra low style we love. A smaller toe guard and altered foxing height give this shoe a cleaner, feminine silhouette. Rainbow accents and homemade details add a subtle spectrum of flavors. Even better.                ', 'tersedia'),
(36, 21, 'Converse Chuck Taylor All Star Women&#039;s Sneakers - White', 700000, 'yVIbtc2eL6K5feaA5Z8gEI8gb.png', '                                                                                You already know our top of the canvas upper, diamond pattern outsole and signature logo. We streamlined this iconic silhouette, added fluid, sports-inspired design lines, and dropped it into an ultra-lightweight EVA cup, giving you the Chuck Taylor All Star movement. With extra comfort and height. Doesn&#039;t stop you.                                                                ', 'tersedia'),
(37, 21, 'Converse Chuck Taylor All Star Sneakers Shoes - White', 600000, 'uGwV9gl4VSaTnOjkhpJ4ZNghn.png', '                                        It started when we cut the material for the original High Top Chucks, turning them into a low top basketball shoe. Then the sneaker moved from the court to the street, cementing its status as an everyday icon. What happened next with Low Top Chucks? Up to you. These shoes are versatile, classic and totally yours wherever you go, whatever you want, and whenever. We only make shoes. You make up the story.                                ', 'tersedia'),
(38, 21, 'Adidas Breaknet', 600000, 'uMbdPO6PFlVovEERhcdCutcgi.png', 'No more wrong footwork on and off the court in this tennis-inspired shoe. These adidas shoes have a classic 3-Stripes upper for a timeless look. Designed for comfort with a soft sockliner and textile lining.', 'tersedia'),
(39, 21, 'Adidas Centennial 85 Low', 1500000, 'ygWfFzs2bT5yIsz7iefMlQShc.png', 'This redesigned version of the shoes Perforated details on the toe and the flex on the heel add a pop of retro texture, just like the grooved tread. And you can&#039;t miss the 3-Stripes style along the sides.', 'tersedia'),
(40, 21, 'Adidas Duramo SL 2.0', 700000, 'SZhB32QMdybW2TZ06ndrpuKas.png', 'Your feet will stay comfortable and stylish in these adidas shoes. Pair with your favorite tights for the ultimate athletic-casual look. A mesh upper helps you stay cool, while super-light cushioning pampers every step of the way. Made with a range of recycled materials, this shoe&#039;s upper contains at least 50% recycled content. ', 'tersedia'),
(41, 21, 'Adidas NMD_V3', 2200000, 'VCXza1XYk6j7bjhpJF5a6Ynn3.png', 'A day spent in these adidas NMD_V3 Shoes is a day spent boldly pushing forward. A rubber outsole is the perfect foundation for this innovative design while a responsive BOOST midsole offers high-level comfort and a considerable return of energy. ', 'tersedia'),
(42, 21, 'STRUTTER', 600000, 'GmOM2oDcZ7wU6NuwXAR8DmIoZ.png', 'Delivering the dadliest of dad vibes, these shoes have a chunky design that keeps you comfortable throughout your day. The smooth leather upper is detailed with cutouts, overlays and signature 3-Stripes. It&#039;s anchored on a high-profile sculpted midsole and a grippy outsole.', 'tersedia'),
(43, 21, 'Adidas VL Court 2.0', 700000, 'snjcP7HbSivTWXDSPpfmheWdp.png', 'With their clean, smooth lines and hints of subtle color, they team effortlessly with everything from workout shorts to chinos, track pants to jeans. Made with a series of recycled materials, this upper features at least 50% recycled content.', 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `nama`) VALUES
(0, 'admin', '$2y$10$YuvHh6V9cTWr.HiwoTbLUuTRy01WgUZmJTgZH3OSrHJCAePNVTZqm', 'Ary'),
(0, 'diza', '$2y$10$nIgJXE.Mv6AyPxKxAJpjU.Hwf1cQbxEPDc/e6KI3N1mJ2Wkm/iM0C', 'davin'),
(0, 'diza', '$2y$10$0IRob3e5DyTXsr93C1J36uV1n57zcy2cOk/Vcg13DTXLiqNdetjaa', 'davin'),
(0, 'rezabakara', '$2y$10$AICEuHYfTlEs/yGZDG/OceUhrrtqgdF2T5XQmSzPryrxnPeROKLAm', 'Reza'),
(0, 'slebew', '$2y$10$DyI8d0gzbNufjZzKhkoerOaeC2P9PWvHK6HWCaEzy/cIB/1ixVjAu', 'esra'),
(0, 'diza', '$2y$10$rCdBEvyEVApScZKM0cjLw.ZGBsRLA5qvHfhAuiye0TdL/WfjwNMdy', 'Davin Diza '),
(0, 'reza', '$2y$10$f3stAlv/DlUUBlItG7x3PuS/rtWS4Zx1xbcpTE/jdwMy5OLmK4rXi', 'Reza'),
(0, 'reza', '$2y$10$a49HdZj0k85KYhogmzytdeIISAzptKkgBgPr9I0.ZdO420Opqvyh6', 'Reza'),
(0, '', '$2y$10$4kJXbIL5FivieA9LXzCQKOlPwHxQzb1Q5kY7hvtN.fy/DSuerUQDS', ''),
(0, 'ary', '$2y$10$rVNUDwiy8Qq0FefDWPK7t.BJCNVRmMxc75BHvEojBaErn2Wf5pKn2', 'Ary Prandika');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(0, 'admin', '$2a$12$0FALnzuwa2yFEthUrXpjr.4O7Zc2LG0AcGbq.E5naYmd.rtVzvKS.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`),
  ADD KEY `kategori_produk` (`kategori_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `kategori_produk` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
