CREATE TABLE IF NOT EXISTS `freeuser` (
  `fid` int(100) NOT NULL AUTO_INCREMENT,
`name` varchar(200) NOT NULL,
  `fusername` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
`password` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `products_bought` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(200) NOT NULL,
  `item_names` varchar(200) NOT NULL,
  `prices` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `freeuser1` (
  `fid` int(100) NOT NULL AUTO_INCREMENT,
`name` varchar(200) NOT NULL,
  `fusername` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
`password` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL,
`edate` varchar(100) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE freeuser1 (
    customer_id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(100)
);

CREATE TABLE loginfree (
    logid INT AUTO_INCREMENT PRIMARY KEY,fid INT(100),
    username varchar(30),
    password varchar(30),
    FOREIGN KEY (fid) REFERENCES freeuser1(fid));


CREATE TABLE orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    amount DOUBLE,
    FOREIGN KEY (customer_id) REFERENCES customers(customer_id)
);

CREATE TABLE IF NOT EXISTS `freeuser2` (
  `fid` int(100) AUTO_INCREMENT,
`name` varchar(200) NOT NULL,
  `fusername` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
`password` varchar(200) NOT NULL,
  `rdate` varchar(100) NOT NULL,
`edate` varchar(100) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `loginfree` (
  `logid` int(100) AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
`password` varchar(200) NOT NULL,
  PRIMARY KEY (`logid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `applicant` (
  `appid` int(100) NOT NULL AUTO_INCREMENT,
  `fid` int(100) NOT NULL,
`pid` int(100) NOT NULL,
`count` int(100) NOT NULL,
  PRIMARY KEY (`appid`),
FOREIGN KEY (`fid`) REFERENCES `freeuser2`(`fid`),
FOREIGN KEY (`pid`) REFERENCES `premiumuser2`(`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `registereduser2` (
  `fid` int(100),
`amount` varchar(200) NOT NULL,
`edate` varchar(100) NOT NULL,
FOREIGN KEY (`fid`) REFERENCES `freeuser2`(`fid`) ON UPDATE CASCADE
) ENGINE=InnoDB ;

