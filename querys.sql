CREATE DATABASE dashboard COLLATE utf8_unicode_ci;

USE dashboard;

CREATE TABLE tb_vendas(
  id INT NOT NULL PRIMARY KEY auto_increment,
  data_venda DATETIME DEFAULT current_timestamp,
  total FLOAT(10, 2) NOT NULL
);

CREATE TABLE tb_clientes(
  id INT NOT NULL PRIMARY KEY auto_increment,
  cliente_ativo BOOLEAN DEFAULT true
);

CREATE TABLE tb_contatos(
  id INT NOT NULL PRIMARY KEY auto_increment,
  tipo_contato INT NOT NULL
);

CREATE TABLE tb_despesas(
  id INT NOT NULL PRIMARY KEY auto_increment,
  data_despesa DATETIME DEFAULT current_timestamp,
  total FLOAT(10, 2) NOT NULL
);

INSERT INTO tb_vendas(data_venda, total)VALUES('2023-08-15', 150.20);
INSERT INTO tb_vendas(data_venda, total)VALUES('2023-08-16', 255.36);
INSERT INTO tb_vendas(data_venda, total)VALUES('2023-08-18', 70.95);
INSERT INTO tb_vendas(data_venda, total)VALUES('2023-09-01', 35.00);
INSERT INTO tb_vendas(data_venda, total)VALUES('2023-09-11', 2047.12);
INSERT INTO tb_vendas(data_venda, total)VALUES('2023-09-19', 122.85);
INSERT INTO tb_vendas(data_venda, total)VALUES('2023-09-23', 957.14);
INSERT INTO tb_vendas(data_venda, total)VALUES('2023-10-01', 333.55);
INSERT INTO tb_vendas(data_venda, total)VALUES('2023-10-02', 100.33);
INSERT INTO tb_vendas(data_venda, total)VALUES('2023-10-03', 1853.12);
INSERT INTO tb_vendas(data_venda, total)VALUES('2023-10-04', 47.99);

-- true/1 = ativo | false/0 = inativo
INSERT INTO tb_clientes(cliente_ativo)VALUES(true);
INSERT INTO tb_clientes(cliente_ativo)VALUES(true);
INSERT INTO tb_clientes(cliente_ativo)VALUES(true);
INSERT INTO tb_clientes(cliente_ativo)VALUES(true);
INSERT INTO tb_clientes(cliente_ativo)VALUES(true);
INSERT INTO tb_clientes(cliente_ativo)VALUES(true);
INSERT INTO tb_clientes(cliente_ativo)VALUES(true);
INSERT INTO tb_clientes(cliente_ativo)VALUES(true);
INSERT INTO tb_clientes(cliente_ativo)VALUES(true);
INSERT INTO tb_clientes(cliente_ativo)VALUES(true);
INSERT INTO tb_clientes(cliente_ativo)VALUES(true);
INSERT INTO tb_clientes(cliente_ativo)VALUES(true);
INSERT INTO tb_clientes(cliente_ativo)VALUES(true);
INSERT INTO tb_clientes(cliente_ativo)VALUES(true);
INSERT INTO tb_clientes(cliente_ativo)VALUES(true);

-- 1 = crítica | 2 = sugestão | 3 = elogio
INSERT INTO tb_contatos(tipo_contato)VALUES(1);
INSERT INTO tb_contatos(tipo_contato)VALUES(1);
INSERT INTO tb_contatos(tipo_contato)VALUES(2);
INSERT INTO tb_contatos(tipo_contato)VALUES(1);
INSERT INTO tb_contatos(tipo_contato)VALUES(3);
INSERT INTO tb_contatos(tipo_contato)VALUES(2);
INSERT INTO tb_contatos(tipo_contato)VALUES(1);
INSERT INTO tb_contatos(tipo_contato)VALUES(1);
INSERT INTO tb_contatos(tipo_contato)VALUES(3);
INSERT INTO tb_contatos(tipo_contato)VALUES(3);
INSERT INTO tb_contatos(tipo_contato)VALUES(3);
INSERT INTO tb_contatos(tipo_contato)VALUES(1);
INSERT INTO tb_contatos(tipo_contato)VALUES(2);
INSERT INTO tb_contatos(tipo_contato)VALUES(2);
INSERT INTO tb_contatos(tipo_contato)VALUES(1);

INSERT INTO tb_despesas(data_despesa, total)VALUES('2023-08-20', 93.47);
INSERT INTO tb_despesas(data_despesa, total)VALUES('2023-09-01', 350.27);
INSERT INTO tb_despesas(data_despesa, total)VALUES('2023-09-04', 108.12);
INSERT INTO tb_despesas(data_despesa, total)VALUES('2023-09-20', 15.66);
INSERT INTO tb_despesas(data_despesa, total)VALUES('2023-10-03', 83.55);