START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


DROP TABLE IF EXISTS table_articles;

CREATE TABLE IF NOT EXISTS table_articles (
  id_article int NOT NULL AUTO_INCREMENT,
  column_ups_article varchar(12) DEFAULT NULL,
  column_name_article varchar(100) DEFAULT NULL,
  column_price_coste_article double DEFAULT NULL,
  column_price_sale_article double DEFAULT NULL,
  id_article_category int DEFAULT NULL,
  id_department int DEFAULT NULL,
  column_route_image_article varchar(255) DEFAULT NULL,
  id_articles_measure int DEFAULT NULL,
  column_internal_reference_article varchar(255) DEFAULT NULL,
  column_internal_notes_article varchar(255) DEFAULT NULL,
  active int NOT NULL DEFAULT '1',
  created datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id_article),
  KEY id_article_category (id_article_category),
  KEY FK_DEPARTMENT (id_department),
  KEY FK_ARTICLES_MEASURE (id_articles_measure)
);

DROP TABLE IF EXISTS table_articles_category;

CREATE TABLE IF NOT EXISTS table_articles_category (
  id_article_category int NOT NULL AUTO_INCREMENT,
  column_name_category varchar(50) DEFAULT NULL,
  active int NOT NULL DEFAULT '1',
  created datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id_article_category)
);

DROP TABLE IF EXISTS table_articles_measure;

CREATE TABLE IF NOT EXISTS table_articles_measure (
  id_articles_measure int NOT NULL AUTO_INCREMENT,
  column_name_measure varchar(50) DEFAULT NULL,
  active int NOT NULL DEFAULT '1',
  created datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id_articles_measure)
);

DROP TABLE IF EXISTS table_customers;

CREATE TABLE IF NOT EXISTS table_customers (
  id_customers int NOT NULL AUTO_INCREMENT,
  column_name_customers varchar(50) DEFAULT NULL,
  column_paternal_customers varchar(50) DEFAULT NULL,
  column_maternal_customers varchar(50) DEFAULT NULL,
  column_mail_customers varchar(50) DEFAULT NULL,
  column_phone_customers varchar(10) DEFAULT NULL,
  column_birth_customers date DEFAULT NULL,
  id_customers_category int DEFAULT NULL,
  active int NOT NULL DEFAULT '1',
  created datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id_customers),
  KEY FK_CUSTOMERS_CATEGORY (id_customers_category)
);

DROP TABLE IF EXISTS table_customers_category;

CREATE TABLE IF NOT EXISTS table_customers_category (
  id_customers_category int NOT NULL AUTO_INCREMENT,
  column_name_category varchar(50) DEFAULT NULL,
  active int NOT NULL DEFAULT '1',
  created datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id_customers_category)
);

DROP TABLE IF EXISTS table_department;

CREATE TABLE IF NOT EXISTS table_department (
  id_department int NOT NULL AUTO_INCREMENT,
  column_name_department varchar(50) DEFAULT NULL,
  active int NOT NULL DEFAULT '1',
  created datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id_department)
);

DROP TABLE IF EXISTS table_inventory;

CREATE TABLE IF NOT EXISTS table_inventory (
  id_inventory int NOT NULL AUTO_INCREMENT,
  id_article int NOT NULL,
  column_stock_article int NOT NULL,
  column_minimum_inventory int NOT NULL,
  updated datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id_inventory),
  KEY FK_ARTICLES (id_article)
);

DROP TABLE IF EXISTS table_personnel;
CREATE TABLE IF NOT EXISTS table_personnel (
  id_person int NOT NULL AUTO_INCREMENT,
  column_name_person varchar(50) DEFAULT NULL,
  column_paternal_person varchar(50) DEFAULT NULL,
  column_maternal_person varchar(50) DEFAULT NULL,
  active int NOT NULL DEFAULT '1',
  created datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id_person)
);

DROP TABLE IF EXISTS table_sales;

CREATE TABLE IF NOT EXISTS table_sales (
  id_sales int NOT NULL AUTO_INCREMENT,
  id_customers int NOT NULL,
  colum_total_sales double NOT NULL,
  active int NOT NULL DEFAULT '1',
  created datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id_sales),
  KEY FK_CUSTOMERS (id_customers)
);

DROP TABLE IF EXISTS table_sales_detail;

CREATE TABLE IF NOT EXISTS table_sales_detail (
  id_sales_detail int NOT NULL AUTO_INCREMENT,
  id_sales int NOT NULL,
  id_article int NOT NULL,
  colum_number_article double NOT NULL,
  colum_subtotal_sales double NOT NULL,
  active int NOT NULL DEFAULT '1',
  created datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id_sales_detail),
  KEY FK_SALES (id_sales),
  KEY FK_ARTICLE (id_article)
);

DROP TABLE IF EXISTS table_tickets;

CREATE TABLE IF NOT EXISTS table_tickets (
  id_ticket int NOT NULL AUTO_INCREMENT,
  column_total_ticket double DEFAULT NULL,
  id_sale int NOT NULL,
  active int NOT NULL DEFAULT '1',
  created datetime DEFAULT CURRENT_TIMESTAMP,
  updated datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id_ticket)
);

DROP TABLE IF EXISTS table_users;

CREATE TABLE IF NOT EXISTS table_users (
  id_user int NOT NULL AUTO_INCREMENT,
  column_name_user varchar(50) DEFAULT NULL,
  column_password_user varchar(200) NOT NULL,
  id_user_roll int DEFAULT NULL,
  active int NOT NULL DEFAULT '1',
  created datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id_user),
  KEY FK_USER_ROLL (id_user_roll)
);

DROP TABLE IF EXISTS table_users_rolls;

CREATE TABLE IF NOT EXISTS table_users_rolls (
  id_user_roll int NOT NULL AUTO_INCREMENT,
  column_name_user_roll varchar(50) DEFAULT NULL,
  active int NOT NULL DEFAULT '1',
  created datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id_user_roll)
);


ALTER TABLE table_articles
  ADD CONSTRAINT FK_ARTICLE_CATEGORY FOREIGN KEY (id_article_category) REFERENCES table_articles_category (id_article_category),
  ADD CONSTRAINT FK_ARTICLES_MEASURE FOREIGN KEY (id_articles_measure) REFERENCES table_articles_measure (id_articles_measure),
  ADD CONSTRAINT FK_DEPARTMENT FOREIGN KEY (id_department) REFERENCES table_department (id_department);

ALTER TABLE table_customers
  ADD CONSTRAINT FK_CUSTOMERS_CATEGORY FOREIGN KEY (id_customers_category) REFERENCES table_customers_category (id_customers_category);

ALTER TABLE table_inventory
  ADD CONSTRAINT FK_ARTICLES FOREIGN KEY (id_article) REFERENCES table_articles (id_article);

ALTER TABLE table_sales
  ADD CONSTRAINT FK_CUSTOMERS FOREIGN KEY (id_customers) REFERENCES table_customers (id_customers);

ALTER TABLE table_sales_detail
  ADD CONSTRAINT FK_ARTICLE FOREIGN KEY (id_article) REFERENCES table_articles (id_article),
  ADD CONSTRAINT FK_SALES FOREIGN KEY (id_sales) REFERENCES table_sales (id_sales);

ALTER TABLE table_users
  ADD CONSTRAINT FK_USER_ROLL FOREIGN KEY (id_user_roll) REFERENCES table_users_rolls (id_user_roll);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
