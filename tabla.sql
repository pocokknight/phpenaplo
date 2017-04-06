CREATE SCHEMA `enaplo` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci ;
CREATE TABLE `enaplo`.`ev` (
  `ev` INT NOT NULL,
  PRIMARY KEY (`ev`));

INSERT INTO `enaplo`.`ev`(ev) VALUES(2015);
INSERT INTO `enaplo`.`ev`(ev) VALUES(2016);
INSERT INTO `enaplo`.`ev`(ev) VALUES(2017);