-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE autor (
cod_autor INTEGER PRIMARY KEY AUTO_INCREMENT,
nome_autor VARCHAR(400)
);

CREATE TABLE editora (
cod_editora INTEGER PRIMARY KEY AUTO_INCREMENT,
nome_editora VARCHAR(100)
);

CREATE TABLE genero (
cod_genero INTEGER PRIMARY KEY AUTO_INCREMENT,
descricao VARCHAR(50)
);

CREATE TABLE livro (
cod_livro INTEGER PRIMARY KEY AUTO_INCREMENT,
qtd_estoque INTEGER,
nome VARCHAR(400),
foto_livro VARCHAR(100),
preco DECIMAL(10),
cod_editora INTEGER,
FOREIGN KEY(cod_editora) REFERENCES editora (cod_editora)
);

CREATE TABLE forma_pagamento (
cod_pagamento INTEGER PRIMARY KEY AUTO_INCREMENT,
descricao VARCHAR(50)
);

CREATE TABLE usuario (
cod_cliente INTEGER PRIMARY KEY AUTO_INCREMENT,
cpf VARCHAR(20),
email VARCHAR(100),
senha VARCHAR(25)
);

CREATE TABLE compra (
cod_compra INTEGER PRIMARY KEY AUTO_INCREMENT,
valor_total DECIMAL(10),
data_compra DATE,
cod_pagamento INTEGER,
cod_cliente INTEGER
);

CREATE TABLE admin (
cod_admin INTEGER PRIMARY KEY AUTO_INCREMENT,
descricao VARCHAR(50),
cod_cliente INTEGER,
FOREIGN KEY(cod_cliente) REFERENCES usuario (cod_cliente)
);

CREATE TABLE autor_livro (
cod_autor INTEGER,
cod_livro INTEGER,
FOREIGN KEY(cod_autor) REFERENCES autor (cod_autor),
FOREIGN KEY(cod_livro) REFERENCES livro (cod_livro)
);

CREATE TABLE genero_livro (
cod_livro INTEGER,
cod_genero INTEGER,
FOREIGN KEY(cod_livro) REFERENCES livro (cod_livro),
FOREIGN KEY(cod_genero) REFERENCES genero (cod_genero)
);

CREATE TABLE compra_livro (
cod_livro INTEGER,
cod_compra INTEGER,
FOREIGN KEY(cod_livro) REFERENCES livro (cod_livro),
FOREIGN KEY(cod_compra) REFERENCES compra (cod_compra)
);

ALTER TABLE compra ADD FOREIGN KEY(cod_pagamento) REFERENCES forma_pagamento (cod_pagamento);
ALTER TABLE compra ADD FOREIGN KEY(cod_cliente) REFERENCES usuario (cod_cliente);

insert into autor(nome_autor) values ("J.K. Rownling"), ("Rick Riordan"), ("Stephenie Meyer"), ("Arthur Conan Doyle"), ("James Dashner"), ("Arnaldo Fritz");

insert into editora(nome_editora) values ("Rocco"), ("Intrinseca"), ("Nancy Richardson"), ("Zahar"), ("Dan Zimmerman"), ("Outlado");

insert into genero(descricao) values ("Fantasia"), ("Aventura"), ("Drama"), ("Misterio"), ("Acao"), ("Biografia");

insert into livro(qtd_estoque, nome, foto_livro, preco, cod_editora) values (30, "Harry Potter: O Enigma da Principe", "HP.jpg",15, 1), (20, "Magnus Chase: A Espada do Verao", "MGC.jpg", 30, 2), (15, "Crepusculo", "CP.jpg", 15, 3), (30, "Sherlock Holmes: O Cao dos Baskervilles", "SH.jpg", 20, 4), (25, "Maze Runner: Correr ou Morrer", "MR.jpg", 30, 5), (30, "O Diario de Arnaldo Fritz", "DA.jpg", 5000, 6);

insert into forma_pagamento(descricao) values ("pix"), ("pix"), ("credito"), ("debito"), ("debito"), ("credito");

insert into usuario(cpf, email, senha) values (95536243080, "dade@gmail.com", "ASDasdsad"), (39384717002, "livan@gmail.com", "comptonsoon"), (29113070037, "compton1@gmail.com", "freshcamin"), (63049482044, "hehehe@gmail.com", "roooooeo"), (60340272090, "brenonmoon@gmail.com", "repirar"), (16026903089, "dididi@gmail.com", "lalalal");

insert into compra(valor_total, data_compra, cod_pagamento, cod_cliente) values (30, "2022-09-14", 1, 1), (45, "2022-08-23", 1, 2), (60, "2022-08-20", 2, 3), (60, "2022-08-20", 3, 4), (60, "2022-08-20", 3, 5), (60, "2022-08-20", 2, 6);

insert into admin(descricao, cod_cliente) values ("ADM1", 1), ("ADM1", 2), ("ADM1", 3), ("ADM1", 4), ("ADM1", 5), ("ADM1", 6);

insert into autor_livro(cod_autor, cod_livro) values (1, 1), (2, 2), (3, 3), (4, 4), (5, 5), (6, 6);

insert into genero_livro(cod_livro, cod_genero) values (1, 1), (2, 2), (3, 3), (4, 4), (5, 5), (6, 6); 

insert into compra_livro(cod_livro, cod_compra) values (1, 1), (2, 2), (3, 3), (4, 4), (5, 5), (6, 6);