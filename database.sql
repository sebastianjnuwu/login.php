USE login;

CREATE TABLE `usuario` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(200) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`usuario_id`));
  
INSERT INTO `usuario` (`usuario`,`senha`) VALUES ('sebastianjn','senha123');