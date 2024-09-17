
CREATE TABLE users(
    Id int PRIMARY KEY AUTO_INCREMENT,
    Username varchar(200),
    Email varchar(200),
    Age int,
    Password varchar(200)
);

CREATE TABLE reception (
    numero_entree_document INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    expediteur VARCHAR(170) NOT NULL,
    reference_note VARCHAR(10) NOT NULL,
    date_reception DATE NOT NULL,
    objet VARCHAR(100) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE transmission (
    numero_sortie_document INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    expediteur VARCHAR(170) NOT NULL,
    reference_note VARCHAR(10) NOT NULL,
    date_reception DATE NOT NULL,
    objet VARCHAR(100) NOT NULL,
    orientation VARCHAR(50) NOT NULL
    num_entree_document INT, FOREIGN KEY (num_entree_document) REFERENCES reception(numero_entree_document) 
);