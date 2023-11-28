CREATE TABLE tropas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_aldeia INT,
    tipo VARCHAR(50) NOT NULL,
    quantidade INT DEFAULT 0,
    em_treinamento BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (id_aldeia) REFERENCES aldeias(id)
);
