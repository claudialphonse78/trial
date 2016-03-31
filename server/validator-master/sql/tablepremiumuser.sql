CREATE TABLE IF NOT EXISTS `premiumuser` (
  `pid` int(100) AUTO_INCREMENT,
`name` varchar(200) NOT NULL,
`occupation` varchar(200) NOT NULL,
  `pusername` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
`date` varchar(100) NOT NULL,
`password` varchar(200) NOT NULL,
`telephone` int(20) NOT NULL,
`Gender` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `registereduser1` (
  `username` varchar(200) NOT NULL,
`Amount` int(100) NOT NULL,
`Card Number` int(100) NOT NULL
);


CREATE TABLE IF NOT EXISTS `login1` (
  `formid` int(100)NOT NULL AUTO_INCREMENT,
`username` varchar(20) NOT NULL,
`password` varchar(20) NOT NULL,
PRIMARY KEY (`formid`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



CREATE TABLE customers (
    customer_id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(100)
);

CREATE TABLE orders (My
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    amount DOUBLE,
    FOREIGN KEY (customer_id) REFERENCES customers(customer_id)
);



CREATE TABLE IF NOT EXISTS `premiumuser2` (
  `pid` int(100)AUTO_INCREMENT,
`name` varchar(200) NOT NULL,
`occupation` varchar(200) NOT NULL,
  `pusername` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
`date` varchar(100) NOT NULL,
`password` varchar(200) NOT NULL,
`telephone` int(20) NOT NULL,
`Gender` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `registereduser3` (
  `fid` int(100),
`pid` int(100),
`amount` varchar(200) NOT NULL,
`edate` varchar(100) NOT NULL,
FOREIGN KEY (`fid`) REFERENCES `freeuser2`(`fid`) ON UPDATE CASCADE,
FOREIGN KEY (`pid`) REFERENCES `premiumuser2`(`pid`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `registereduser4` (
  `fid` int(100),
`pid` int(100),
`amount` varchar(200) NOT NULL,
`edate` varchar(100) NOT NULL,
FOREIGN KEY (`pid`) REFERENCES `premiumuser2`(`pid`) ON UPDATE CASCADE,
FOREIGN KEY (`fid`) REFERENCES `freeuser2`(`fid`) ON UPDATE CASCADE
) ENGINE=InnoDB ;