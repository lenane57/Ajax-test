# Ajax-test
Ajax-test

this is test code for Ajax calls from a MySQL DB to show data on a main Index.html homepage


you need to create a DB in MySQL first using this SQL Query
--
-- Database: `registration`
-- --------------------------------------------------------
-- Table structure for table `products`
CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `shop_name` varchar(50) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `pcode` varchar(50) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
