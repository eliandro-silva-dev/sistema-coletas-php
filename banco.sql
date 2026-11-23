CREATE DATABASE IF NOT EXISTS coletas CHARACTER SET utf8mb4;
USE coletas;

CREATE TABLE cliente (
  codigo INT PRIMARY KEY,
  nome VARCHAR(50) NOT NULL,
  endereco VARCHAR(100) NOT NULL,
  telefone VARCHAR(15)
);

CREATE TABLE funcionario (
  codigo INT PRIMARY KEY,
  nome VARCHAR(50) NOT NULL,
  tipo VARCHAR(15) NOT NULL
);

CREATE TABLE coleta (
  codigo INT PRIMARY KEY,
  status VARCHAR(15),
  data_solicitacao DATE NOT NULL,
  codigo_cliente INT NOT NULL,
  codigo_funcionario INT NOT NULL,
  FOREIGN KEY (codigo_cliente) REFERENCES cliente(codigo),
  FOREIGN KEY (codigo_funcionario) REFERENCES funcionario(codigo)
);