-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2023-02-11 05:24:29
-- 服务器版本： 10.4.27-MariaDB
-- PHP 版本： 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `war`
--

-- --------------------------------------------------------

--
-- 表的结构 `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1675496514),
('m130524_201442_init', 1675496539),
('m190124_110200_add_verification_token_column_to_user_table', 1675496539);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'root', 'JYtG8A-L3noSzcNeTHYGia4q74OA_dJ4', '$2y$13$9FVxRujcW84M3O4mlGPc4ugJYHalzIx6VmOSB8fWm7aArN7ajSpcK', NULL, '123456@mail.com', 10, 1675497678, 1675497678, 'L8WXvBrpjEce8_jf8GueQdkGAPPLXbBZ_1675497678'),
(2, 'test2', 'ZPvP7zAOEsPaQzYWdlrhALjZGoQSyoY6', '$2y$13$cKaqmA9Py5BMped.h4Xd8.7RXssiKzVnn2r.HtQDI4PzYg071f1kq', NULL, '234567@mail.com', 10, 1675674072, 1675674072, 'zLrN9ZVQcrhnIHawitG_y1C4gKZ614WF_1675674072'),
(3, 'test3', 'IkC6y4143lMNvJqsU5jnsij9v8G-g1eS', '$2y$13$lSvgB4lqCHOrz/ENaYUXKeyNNQPOY.YGW0tJ08guHpanxfL7g0T/m', NULL, '345678@mail.com', 10, 1675674115, 1675674115, 'ZvjQEWoQUV-SdEEApXyV0IqUE7HwMkCA_1675674115'),
(4, 'my_test', 'zxB6wiF7ksKgO8qLG5ZBPd5gR11rUeMk', '$2y$13$lx/VFK6mDBRHdCw05dZlH.f46wIoGryXEEEuYTOUWZvAo4FWlQ9nC', NULL, '456789@mail.com', 10, 1675674140, 1675674140, '2fImKJzZo-WM7TnlB1W_W93B-eN6eo2a_1675674140'),
(5, 'myaccount', 'MUvJx3-ug9UhHcRZAK3HH1lHSrFHQFsk', '$2y$13$8I3B2crLMRx08EyubGq.ye4FQcUDUi5dBD/CZqoKBlElM/.792IE.', NULL, '567890@mail.com', 10, 1675674170, 1675674170, 'Bz3_Qzd17CZN8pHY6ln6vc9_f0JIVKeK_1675674170'),
(6, 'test123', 'eeRieQ-KpAzRrKGOEczxyflshSG_Foe4', '$2y$13$njCKCnnZdGlLuV4KzhAd9OSIE73huqhjKPr2C5LFP7v.eB7Wcv6vq', NULL, '1123456@mail.com', 10, 1675675651, 1675675651, 'f_ELNMfh6frjUXpDA8Ge_GaT3BKBuGAR_1675675651'),
(7, 'test234', 'x6ZMEvTSNPT5NuSNzVyqCLwZ3W0v3T-f', '$2y$13$fKAmUKWGQRhqArkF1./NpOIWu1umNDHfMS/nq2ah44ChnO8eESFJO', NULL, '2234567@mail.com', 9, 1675675679, 1675675679, 'EDDgFnlnlvv4Dl8J67LGjLYF101RJbk6_1675675679'),
(8, 'test345', '6bRCfJ4iyn1gZnj0aJoH_LbV7bkbalsg', '$2y$13$pPhH8hCETrtMcVGdakJLZ.VDQdH7Zct6YWrskgJT4sofpkyYLqpqG', NULL, '3345678@mail.com', 9, 1675676150, 1675676150, 'Kp3P3Ft_GgY0B8SaypppTRu9aifa2KTA_1675676150'),
(9, 'test456', 'hxy9mbXVwqZdyLW6XXRZwYOY8zvCR6lm', '$2y$13$2UkoVMux3E0IacbqXQE82O1HD23XRz7Y6yQwsgXDYI4onlLrdPlX.', NULL, '4456789@mail.com', 10, 1675676202, 1675676202, '7D8YQykvrkKSbUmYuECQnZOChulOcxlt_1675676202');

--
-- 转储表的索引
--

--
-- 表的索引 `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`) USING BTREE;

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
