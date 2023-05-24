

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `products` (name, price) VALUES ('Mouse', 150000),('Keyboard', 200000),('Headphone',350000);

CREATE USER 'a02'@'%' IDENTIFIED BY 'hihanghoheng';

GRANT ALL PRIVILEGES ON *.* TO 'a02'@'%';

FLUSH PRIVILEGES;
