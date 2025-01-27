-- SQL dump export

SET NAMES utf8;
SET
time_zone = '+00:00';
SET
foreign_key_checks = 0;
SET
sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;


-- Creating required tables
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`
(
    `id`         int          NOT NULL AUTO_INCREMENT,
    `name`       varchar(255) NOT NULL,
    `image`      varchar(500) NOT NULL,
    `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `product`
(
    `id`          int          NOT NULL AUTO_INCREMENT,
    `name`        varchar(255) NOT NULL,
    `price`       FLOAT        NOT NULL,
    `description` varchar(255) NOT NULL,
    `created_at`  timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
)

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`
(
    `id`            int          NOT NULL AUTO_INCREMENT,
    `first_name`    varchar(255) NOT NULL,
    `email_address` varchar(500) NOT NULL,
    PRIMARY key (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- Inserting all needed data
INSERT INTO `products` (`id`, `name`, `image`, `created_at`)
VALUES (1, 'waffle with berries', 'images/image-waffle.jpg', '2024-12-23 19:18:06');
INSERT INTO `products` (`id`, `name`, `image`, `created_at`)
VALUES (2, 'vanilla bean crème brulée', 'images/image-creme-brulee.jpg', '2024-12-23 19:18:06');
INSERT INTO `products` (`id`, `name`, `image`, `created_at`)
VALUES (3, 'macaron mix of five', 'images/macaron.jpg', '2024-12-23 19:18:06');
INSERT INTO `products` (`id`, `name`, `image`, `created_at`)
VALUES (4, 'classic tiramisu', 'images/tiramisu.jpg', '2024-12-23 19:18:06');
INSERT INTO `products` (`id`, `name`, `image`, `created_at`)
VALUES (5, 'pistachio baklava', 'images/baklava.jpg', '2024-12-23 19:18:06');
INSERT INTO `products` (`id`, `name`, `image`, `created_at`)
VALUES (6, 'lemon meringue pie', 'images/meringue.jpg', '2024-12-23 19:18:06');
INSERT INTO `products` (`id`, `name`, `image`, `created_at`)
VALUES (7, 'red velvet cake', 'images/cake.jpg', '2024-12-23 19:18:06');
INSERT INTO `products` (`id`, `name`, `image`, `created_at`)
VALUES (8, 'salted caramel brownie', 'images/brownie.jpg', '2024-12-23 19:18:06');
INSERT INTO `products` (`id`, `name`, `image`, `created_at`)
VALUES (9, 'vanilla panna cotta', 'images/panna-cotta.jpg', '2024-12-23 19:18:06');


INSERT INTO `users` (`id`, `first_name`, `email_address`)
VALUES (1, "Marc", "Marc@strong.com");
INSERT INTO `users` (`id`, `first_name`, `email_address`)
VALUES (2, "Phil", "Phil@collins.com");
