--exec 1
CREATE DATABASE Bena COLLATE latin7_general_ci;

--2
CREATE TABLE Jogador (
                id_jogador INT AUTO_INCREMENT PRIMARY KEY ,
                id_equipa INT(5) DEFAULT 0 ,
                nome VARCHAR(254),
                n_golos_marcados INT(5) DEFAULT 0 ,
                n_golos_sofridos INT(5) DEFAULT 0 ,
                n_jogos INT(5) DEFAULT 0 ,
                n_assistencias INT(5) DEFAULT 0 ,
                n_cartoes_amarelos INT(5) DEFAULT 0 ,
                minutos_jogados REAL DEFAULT 0.0 ,
                n_treinos INT(5) DEFAULT 0 ,
                numero_camisola SMALLINT(5),
                data_nascimento DATETIME
);

CREATE TABLE Equipa (
                id_equipa INT(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
                total_jogos INT(5) DEFAULT 0 NOT NULL,
                total_treinos INT(5) DEFAULT 0 NOT NULL,
                n_golos_marcados INT(5) DEFAULT 0 NOT NULL,
                n_golos_sofridos INT(5) DEFAULT 0 NOT NULL,
                n_vitorias INT(5) DEFAULT 0 NOT NULL,
                n_empates INT(5) DEFAULT 0 NOT NULL,
                n_derrotas INT(5) DEFAULT 0 NOT NULL,
                n_cartoes_amarelos INT(5) DEFAULT 0 NOT NULL,
                n_cartoes_vermelhos INT(5) DEFAULT 0 NOT NULL,
);

CREATE TABLE Estatistica_Equipa (
                id_jogo INT(5) NOT NULL,
                id_equipa INT(5) NOT NULL,
                golos_marcados INT(5) DEFAULT 0 NOT NULL,
                golos_sofridos INT(5) DEFAULT 0 NOT NULL,
                cartoes_amarelos INT(5) DEFAULT 0 NOT NULL,
                cartoes_vermelhos INT(5) DEFAULT 0 NOT NULL,
                CONSTRAINT id_ee PRIMARY KEY (id_jogo, id_equipa)
);
CREATE TABLE Estatistica_Jogador (
                id_jogador INT(5) NOT NULL,
                id_jogo INT(5) NOT NULL,
                golos_marcados INT(5) DEFAULT 0 NOT NULL,
                golos_sofridos INT(5) DEFAULT 0 NOT NULL,
                assistencias INT(5) DEFAULT 0 DEFAULT 0 DEFAULT 0 NOT NULL,
                cartoes_amarelos INT(5) DEFAULT 0 DEFAULT 0 NOT NULL,
                cartoes_vermelhos INT(5) DEFAULT 0 NOT NULL,
                minutos_jogados DECIMAL(9,1) DEFAULT 0 NOT NULL,
                CONSTRAINT id_ej PRIMARY KEY (id_jogador, id_jogo)
);
CREATE TABLE Jogador_Treino (
                id_jogador INT(5) NOT NULL,
                id_treino INT(5) NOT NULL,
                CONSTRAINT id_jt PRIMARY KEY (id_jogador, id_treino)
);
CREATE TABLE Jogo (
                id_jogo INT(5) PRIMARY KEY NOT NULL,
                tipo_jogo VARCHAR NOT NULL,
                duracao decimal(9,1) NOT NULL,
                data DATETIME NOT NULL,
                local VARCHAR NOT NULL,
                golos_equipa_local INT(5) DEFAULT 0 NOT NULL,
                golos_equipa_visitante INT(5) DEFAULT 0 NOT NULL,
                n_cartoes_amarelos_local INT(5) DEFAULT 0 NOT NULL,
                n_cartoes_amarelos_visitante INT(5) DEFAULT 0 NOT NULL,
                n_cartoes_vermelhos_visitante INT(5) DEFAULT 0 NOT NULL,
                n_cartoes_vermelhos_visitante_1 INT(5) DEFAULT 0 NOT NULL
);
CREATE TABLE Treino (
                id_treino INT(5) PRIMARY KEY NOT NULL,
                data DATETIME NOT NULL,
                n_presencas INT(5) NOT NULL,
                local VARCHAR(254) NOT NULL,
                equipa VARCHAR(254) NOT NULL,
                hora_inicio DATETIME NOT NULL,
                hora_fim DATETIME NOT NULL,
                n_pinos INT(5) NOT NULL,
                n_cones INT(5) NOT NULL,
                n_bolas INT(5) NOT NULL,
                n_cones_1 INT(5) NOT NULL,
                n_balizas INT(5) DEFAULT 2 NOT NULL,
                n_coletes INT(5) NOT NULL
);

CREATE TABLE Users (
                id_user INT AUTO_INCREMENT PRIMARY KEY ,
                username VARCHAR(15),
                nome VARCHAR(254),
                email VARCHAR(254),
                password VARCHAR(254),
                admin BIT DEFAULT 0,
                treinador BIT DEFAULT 0
);

-insert user admin

insert into Users (username,nome,email,password,admin,treinador) values('admin','Administrador','admin@admin.pt', SHA1('Administrador'),1,1)
