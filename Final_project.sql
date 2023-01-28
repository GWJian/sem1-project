-- Adminer 4.8.0 MySQL 5.5.5-10.5.17-MariaDB-1:10.5.17+maria~ubu2004 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `total_amount` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `transaction_id` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `orders` (`id`, `status`, `total_amount`, `created_at`, `transaction_id`, `user_id`) VALUES
(1,	'completed',	60,	'2023-01-25 01:13:02',	'lwb4za0t',	5),
(16,	'completed',	666,	'2023-01-25 06:04:47',	'vh9r6rib',	5),
(17,	'completed',	1665,	'2023-01-25 06:31:13',	'zhmdw2d0',	6),
(18,	'failed',	4995,	'2023-01-25 06:52:40',	'hkt5vgnl',	7),
(19,	'completed',	666,	'2023-01-25 07:21:46',	'cxxyd2uj',	5),
(20,	'completed',	1665,	'2023-01-25 07:31:40',	'l2vdb9ie',	6),
(21,	'completed',	6660,	'2023-01-27 05:04:32',	'sedtuicy',	5),
(22,	'failed',	333,	'2023-01-27 07:27:28',	'ze3mrs03',	5),
(23,	'pending',	333,	'2023-01-27 07:41:27',	'n2tkt8sk',	5),
(24,	'completed',	333,	'2023-01-27 09:34:52',	'lcbqekyd',	5),
(25,	'failed',	333,	'2023-01-27 09:36:45',	'xvgi6kvd',	5),
(26,	'pending',	333,	'2023-01-27 09:36:55',	'imv0v3ds',	5);

DROP TABLE IF EXISTS `orders_products`;
CREATE TABLE `orders_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `orders_products_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  CONSTRAINT `orders_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `orders_products` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(1,	1,	2,	2),
(12,	16,	2,	2),
(13,	17,	2,	5),
(14,	18,	2,	15),
(15,	19,	2,	2),
(16,	20,	2,	5),
(17,	21,	2,	20),
(18,	22,	2,	1),
(19,	23,	2,	1),
(20,	24,	2,	1),
(21,	25,	2,	1),
(22,	26,	2,	1);

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `image_url` text NOT NULL,
  `releasedate` varchar(255) NOT NULL DEFAULT '                  ',
  `price` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `products` (`id`, `product_name`, `image_url`, `releasedate`, `price`, `description`, `status`, `user_id`) VALUES
(1,	'headset 1',	'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g733/gallery/g733-white-gallery-1.png?v=1',	'2023-01-17',	'100',	'headset 1?                                                                                                                        ',	'publish',	5),
(2,	'headset 2',	'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/audio/g735-wireless-headset/gallery/g735-gallery-1.png?v=1',	'2023-03-01',	'333',	'headset 2                                                                                                                                                                                                                                                ',	'comingsoon',	5),
(4,	'Hori Demon Slayer Wired Headset Nezuko (Compatible for PlayStation 4, 5 & PC)',	'https://impulse.com.my/images/com_hikashop/upload/thumbnails/200x200f/33.png',	'2023-04-21',	'123',	'headset 3',	'comingsoon',	5),
(5,	'Ps5 Assassin\'s Creed Mirage',	'https://impulse.com.my/images/com_hikashop/upload/thumbnails/400x400f/003_409845654.jpg',	'2023-01-26',	'111',	'assassin?                    ',	'publish',	5),
(6,	'Ps5 Diablo IV',	'https://impulse.com.my/images/com_hikashop/upload/thumbnails/400x400f/222_65487002.jpg',	'',	'123',	'You guys all have phones right?                                                                                                                                                                                                            ',	'pending',	5);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `name`, `password`, `email`, `role`, `created_at`) VALUES
(5,	'admin1',	'$2y$10$E7q87j0qObYLsFCjhf4aWe1NrYTuo9OzziEvIw6GWhNjhWRymJAeG',	'admin1@gmail.com',	'admin',	'2023-01-25 07:27:24'),
(6,	'users1',	'$2y$10$8UCGo0KLnOk058RbHGgMA.47UNAdwGSdyF5HpTaiu.TKc20S4pJuK',	'user1@gmail.com',	'user',	'2023-01-16 07:28:57'),
(7,	'editor1',	'$2y$10$mKZkPnvzFyfhRs9dFX584Osx0q6hfQEqXtB1lVsyAkxnJRdubqHCC',	'editor1@gmail.com',	'editor',	'2023-01-16 07:29:20'),
(11,	'admin2',	'$2y$10$sO2k3rbiA1uHQC7aGS6FK.utqxc.clXX1OqrVPMwuL3PP/fAIgXHG',	'admin2@gmail.com',	'admin',	'2023-01-25 07:15:53');

-- 2023-01-28 07:31:54
