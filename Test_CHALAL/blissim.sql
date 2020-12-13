DROP TABLE commande;
DROP TABLE client;
DROP TABLE produit;
CREATE TABLE client
(
    id_client int(10) PRIMARY KEY AUTO_INCREMENT,
    nom  varchar(255) NOT NULL,
    prenom varchar(255) NOT NULL
);


CREATE TABLE produit
(
    id_produit int(10) PRIMARY KEY AUTO_INCREMENT,
    nom_produit varchar (255) NOT NULL,
    description varchar (255) NOT NULL,
    quantite int (10) NOT NULL
);

CREATE TABLE commande
(
    id_commande int(10) PRIMARY KEY AUTO_INCREMENT,
    date_commade date NOT NULL,
    id_client int(10),
    id_produit int(10),
    FOREIGN KEY (id_client) REFERENCES client(id_client),
    FOREIGN KEY (id_produit) REFERENCES produit(id_produit)
);

DELETE FROM client;
INSERT INTO client (nom, prenom)
VALUES 
('NOM1', 'Prenom1'),
('NOM2', 'Prenom2'),
('NOM3', 'Prenom3'),
('NOM4', 'Prenom4'),
('NOM5', 'Prenom5'),
('NOM6', 'Prenom6');

DELETE FROM produit;
INSERT INTO produit (nom_produit, description,quantite)
VALUES 
('produit1', 'description de produit1',2),
('produit2', 'description de produit2',1),
('produit3', 'description de produit3',5),
('produit4', 'description de produit4',10),
('produit5', 'description de produit5',10),
('produit6', 'description de produit6',10);



DELETE FROM commande;
INSERT INTO commande (id_client,id_produit,date_commade)
VALUES 
(1,1,'2020-11-01'),
(1,2,'2020-12-01'),
(1,3,'2020-12-02'),
(1,4,'2020-12-04'),
(2,1,'2020-12-12'),
(2,2,'2020-12-10'),
(2,3,'2020-12-11'),
(4,1,'2020-12-12'),
(3,3,'2020-12-01'),
(3,4,'2020-11-12');



-- Récupérer le prénom et le nom de famille de tous les clients qui ont commandé le produit PRODUIT_1;
SELECT distinct nom,prenom FROM `commande` NATURAL join client WHERE id_produit = 1;

-- Récupérer tous les noms et quantités des produits vendus sur les 7 derniers jours.
SELECT DISTINCT nom_produit,quantite FROM `commande` NATURAL JOIN `produit` WHERE DATEDIFF(DATE (NOW()),DATE_ADD(date_commade, INTERVAL 7 DAY)) >=0;

