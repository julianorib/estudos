CREATE DATABASE produtos;

USE produtos;

CREATE TABLE produtos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  produtos VARCHAR(30),
  descricao VARCHAR(255),
  valor DECIMAL(10, 2)
);

