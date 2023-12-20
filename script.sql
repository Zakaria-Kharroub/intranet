CREATE DATABASE intranet;

USE intranet;

CREATE TABLE utilisateurs (
    id_utilisateur INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(100),
    password VARCHAR(100),
    id_role INT,
    FOREIGN KEY (id_role) REFERENCES roles(id_role)
);

CREATE TABLE roles (
    id_role INT PRIMARY KEY AUTO_INCREMENT,
    role_name VARCHAR(50),
    description VARCHAR(255)
);

CREATE TABLE classes (
    id_class INT PRIMARY KEY AUTO_INCREMENT,
    name_class VARCHAR(100),
    id_formateur INT,
    FOREIGN KEY (id_formateur) REFERENCES utilisateurs(id_utilisateur)
);

CREATE TABLE appartenance (
    id_appartenance INT PRIMARY KEY AUTO_INCREMENT, 
    id_utilisateur INT,
    id_class INT,
    FOREIGN KEY (id_utilisateur) REFERENCES utilisateurs(id_utilisateur),
    FOREIGN KEY (id_class) REFERENCES classes(id_class)
);

CREATE TABLE statistiques (
    id_statistiques INT PRIMARY KEY AUTO_INCREMENT,
    id_utilisateur INT,
    donnees_stats VARCHAR(255),
    FOREIGN KEY (id_utilisateur) REFERENCES utilisateurs(id_utilisateur)
);




-- inserttion dans la table roles
INSERT INTO roles (role_name, description) VALUES
('admin', 'administration de youcode '),
('formateur', 'Formateur dans youcode '),
('apprenant', 'Apprenant dans youcode');

