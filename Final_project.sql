-- Adminer 4.8.0 MySQL 5.5.5-10.5.17-MariaDB-1:10.5.17+maria~ubu2004 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `image_url` text NOT NULL,
  `releasedate` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `products` (`id`, `product_name`, `image_url`, `releasedate`, `price`, `description`, `status`, `user_id`) VALUES
(1,	'headset 1',	'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g733/gallery/g733-white-gallery-1.png?v=1',	'2023-01-17',	'123',	'headset 1?                    ',	'publish',	5),
(2,	'headset 2',	'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/audio/g735-wireless-headset/gallery/g735-gallery-1.png?v=1',	'2023-02-24',	'333',	'headset 2                    ',	'publish',	5);

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
(5,	'admin1',	'$2y$10$E7q87j0qObYLsFCjhf4aWe1NrYTuo9OzziEvIw6GWhNjhWRymJAeG',	'admin1@gmail.com',	'admin',	'2023-01-16 07:28:22'),
(6,	'users1',	'$2y$10$8UCGo0KLnOk058RbHGgMA.47UNAdwGSdyF5HpTaiu.TKc20S4pJuK',	'user1@gmail.com',	'user',	'2023-01-16 07:28:57'),
(7,	'editor1',	'$2y$10$mKZkPnvzFyfhRs9dFX584Osx0q6hfQEqXtB1lVsyAkxnJRdubqHCC',	'editor1@gmail.com',	'editor',	'2023-01-16 07:29:20'),
(8,	'users2',	'$2y$10$KEA7opSfcRRpvlD5HrCQZeSzQ.w1oBTYq3da7L/EqrTBJRI5wZR5O',	'user2@gmail.com',	'user',	'2023-01-16 07:54:24'),
(9,	'users3',	'$2y$10$puIaBSPRwtrLzuGZnVEMLeAcHxrz5sKMAfNH9MIZLjHekaui.0hoe',	'user3@gmail.com',	'user',	'2023-01-16 07:54:47');

-- 2023-01-19 07:13:02
