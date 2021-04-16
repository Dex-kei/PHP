INSERT INTO `address_book`
    (`sid`, `name`, `email`, `mobile`, `birthday`, `address`, `created_at`)
VALUES
    (NULL, '李小明2', 'ming@gmail.com', '0918111222', '2002-04-02', '台北市', '2021-04-07 10:25:03');


INSERT INTO `address_book`
(`sid`, `name`, `email`, `mobile`, `birthday`, `address`, `created_at`)
VALUES
(NULL, '李小明5', 'ming@gmail.com', '0918111222', '2002-04-02', '台北市', NOW()),
(NULL, '李小明6', 'ming@gmail.com', '0918111222', '2002-04-02', '台北市', '2021-04-07 10:25:03'),
(NULL, '李小明7', 'ming@gmail.com', '0918111222', '2002-04-02', '台北市', '2021-04-07 10:25:03'),
(NULL, '李小明8', 'ming@gmail.com', '0918111222', '2002-04-02', '台北市', '2021-04-07 10:25:03'),
(NULL, '李小明9', 'ming@gmail.com', '0918111222', '2002-04-02', '台北市', '2021-04-07 10:25:03'),
(NULL, '李小明10', 'ming@gmail.com', '0918111222', '2002-04-02', '台北市', '2021-04-07 10:25:03')

UPDATE `address_book` SET `mobile` = '123' WHERE `sid` = 3;

SELECT o.*, d.`product_sid`, d.`price`, d.`quantity`, p.bookname
FROM orders o
         JOIN order_details d ON o.sid= d.order_sid
         JOIN products p ON d.`product_sid`=p.sid
WHERE o.sid=9;

SELECT
    COUNT(1) num,
    p.`category_sid`,
    c.name cate_name
FROM `products` p
         JOIN `categories` c
              ON p.category_sid=c.sid
GROUP BY p.`category_sid`;

INSERT INTO `address_book` (`sid`, `name`, `email`, `mobile`, `birthday`, `address`, `created_at`) VALUES
(NULL, '李小明', 'ming@gmail.com', '0918111222', '2002-04-02', '台北市', '2021-04-07 10:25:03'),
(NULL, '李小明2', 'ming@gmail.com', '0918111222', '2002-04-02', '台北市', '2021-04-07 10:25:03'),
(NULL, '李小明3', 'ming@gmail.com', '', '2002-04-02', '台北市', '2021-04-07 10:25:03'),
(NULL, '李小明3', 'ming@gmail.com', '', '2002-04-02', '台北市', '2021-04-07 10:25:03'),
(NULL, '李小明5', 'ming@gmail.com', '0915222777', '2002-04-02', '台北市', '2021-04-07 10:53:58'),
(NULL, '李小明6', 'ming@gmail.com', '0918111222', '2002-04-02', '台北市', '2021-04-07 10:25:03'),
(NULL, '李小明7', 'ming@gmail.com', '0918111222', '2002-04-02', '台北市', '2021-04-07 10:25:03'),
(NULL, '李小明8', 'ming@gmail.com', '0918111222', '2002-04-02', '台北市', '2021-04-07 10:25:03'),
(NULL, '李小明9', 'ming@gmail.com', '0918111222', '2002-04-02', '台北市', '2021-04-07 10:25:03'),
(NULL, '李小明10', 'ming@gmail.com', '0918111222', '2002-04-02', '台北市', '2021-04-07 10:25:03');

