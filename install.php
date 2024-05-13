<?php
include_once("connection.php");
$stmt = $conn->prepare("DROP TABLE IF EXISTS tblClient;
CREATE TABLE tblClient
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Surname VARCHAR(20) NOT NULL,
Forename VARCHAR(20) NOT NULL,
Password VARCHAR(200) NOT NULL
);");
$stmt->execute();
$stmt->closeCursor();
$stmt = $conn->prepare("DROP TABLE IF EXISTS tblBasket;
CREATE TABLE tblBooks 
(BookID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
bookName VARCHAR(60) NOT NULL,
authorName VARCHAR(50) NOT NULL,
genre VARCHAR(40) NOT NULL,
publishYear INT(4) NOT NULL
);");
$stmt->execute();
$stmt->closeCursor();
$stmt = $conn->prepare("DROP TABLE IF EXISTS tblWeighIn;
CREATE TABLE tblLoaned 
(BookID INT(4) NOT NULL PRIMARY KEY,
loaned TINYINT(1) NOT NULL
);");
$stmt->execute();
$stmt->closeCursor();
$stmt = $conn->prepare("DROP TABLE IF EXISTS tblClientDiets;
CREATE TABLE tblusers 
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Surname VARCHAR(20) NOT NULL,
Forename VARCHAR(20) NOT NULL,
Password VARCHAR(200) NOT NULL
);");
$stmt->execute();
$stmt->closeCursor();$stmt = $conn->prepare("DROP TABLE IF EXISTS tblAdvisors;
CREATE TABLE tblusers 
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Surname VARCHAR(20) NOT NULL,
Forename VARCHAR(20) NOT NULL,
Password VARCHAR(200) NOT NULL
);");
$stmt->execute();
$stmt->closeCursor();$stmt = $conn->prepare("DROP TABLE IF EXISTS tblProducts;
CREATE TABLE tblusers 
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Surname VARCHAR(20) NOT NULL,
Forename VARCHAR(20) NOT NULL,
Password VARCHAR(200) NOT NULL
);");
$stmt->execute();
$stmt->closeCursor();
?>