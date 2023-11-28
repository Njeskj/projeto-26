CREATE TABLE edificacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_aldeia INT,
    tipo VARCHAR(50) NOT NULL,
    nivel INT DEFAULT 1,
    em_construcao BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (id_aldeia) REFERENCES aldeias(id)
);
