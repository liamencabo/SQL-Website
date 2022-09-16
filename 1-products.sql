-- (A) PRODCUTS TABLE
CREATE TABLE `products` (
    `product_id` int(11) NOT NULL,
    `product_name` varchar(128) NOT NULL,
    `prodcut_description` text
)   ENGINE=InnoDB DEFAULT CHARSET-Latin 1;

ALTER TABLE `products`
    ADD PRIMARY KEY (`product_id`),
    ADD KEY `product_name` (`product_name`);

ALTER TABLE `products`
    MODIFY `prodcut_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT-7;

-- (B) DUMMY PRODUCTS
INSERT INTO `products` (`product_id`, `product_name`, `product_description`) VALUES
(1, 'Vulture of Fortune', 'A sweated bump consents across the here separator.'),
(2, 'Guardian Without Duty', 'Does a table migrate inside an execessive paranoid?'),
(3, 'Enemies Without Hope', 'A cured parameter fears behind the phenomenon'),
(4, 'Lords Of The Void', 'The diary scores around the generalized lie.'),
(5, 'Doctors And Aliens', 'The diary scores around the generalized lie.'),
(6, 'Blacksmiths And Criminals', 'A considerable snail works into a purchase.'),

/-- Start with the database, simply because it serves as the foundation of this project. Also important to get the required fields correct right from the start, or changing the database structure later can be a tedious process --/

