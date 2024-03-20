CREATE DATABASE cliente

USE cliente

CREATE TABLE cliente (
  id int(5) NOT NULL  PRIMARY KEY auto_increment,
  nome varchar(50) NOT NULL,
  quantidade int(3) NOT NULL,
  valor FLOAT NOT NULL,
  data_compra date NOT NULL

) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

INSERT INTO cliente  (nome, quantidade, valor, data_compra)  VALUES 
(1, 'maria', 30, '12', '2024-03-19'),
(2, 'Lucas', 22, '13', '2024-03-17'),
(3, 'Aline', 24, '14', '2024-03-21'),
(4, 'teste', 22, '15', '2024-03-20'); 