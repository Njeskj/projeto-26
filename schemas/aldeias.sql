CREATE TABLE aldeias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT,
    nome VARCHAR(50) NOT NULL,
    coordenadas_x INT,
    coordenadas_y INT,
    recursos_ouro INT DEFAULT 1000,
    recursos_madeira INT DEFAULT 1000,
    recursos_pedra INT DEFAULT 1000,
    recursos_comida INT DEFAULT 1000,
    populacao INT DEFAULT 3,
    consumo_comida INT DEFAULT 3,
    defesa INT DEFAULT 0,
    nivel_edificacoes JSON,
    unidades JSON,
    eventos JSON,
    bonus_especiais JSON,
    informacoes_gerais JSON,
    notas_jogador TEXT,
    alianca VARCHAR(50), -- Nome da aliança à qual a aldeia pertence
    ultima_atualizacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    eventos_em_andamento JSON,
    FOREIGN KEY (id_usuario) REFERENCES users(id)
);


ALTER TABLE aldeias
ADD COLUMN id_tribo INT,
ADD FOREIGN KEY (id_tribo) REFERENCES tribos(id);
