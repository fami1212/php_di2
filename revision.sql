-- 1. Jointure Interne (INNER JOIN)
-- Elle récupère seulement les enregistrements
--  correspondants dans les deux tables.

SELECT utilisateurs.nom, commandes.produit
FROM utilisateurs
INNER JOIN commandes ON utilisateurs.id = commandes.utilisateur_id;

-- ➡️ Renvoie une liste des utilisateurs et
--  leurs commandes si une correspondance existe.

-- 2. Jointure Gauche (LEFT JOIN)
-- Elle récupère tous les enregistrements de 
-- la première table (utilisateurs), même
--  s’il n’y a pas de correspondance dans commandes.

SELECT utilisateurs.nom, commandes.produit
FROM utilisateurs
LEFT JOIN commandes ON utilisateurs.id = commandes.utilisateur_id;
-- ➡️ Affiche tous les utilisateurs, même ceux qui n’ont pas passé
--  de commande (valeur NULL si aucune commande).

-- 3. Jointure Droite (RIGHT JOIN)
-- Elle est similaire au LEFT JOIN, mais garde tous les enregistrements
--  de la deuxième table (commandes).

SELECT utilisateurs.nom, commandes.produit
FROM utilisateurs
RIGHT JOIN commandes ON utilisateurs.id = commandes.utilisateur_id;

-- ➡️ Affiche toutes les commandes, même si l’utilisateur n’existe plus.


-- 4. Jointure Complète (FULL OUTER JOIN)
-- ⚠️ Non disponible en MySQL, mais possible en PostgreSQL ou via une union :


-- ➡️ Récupère tous les utilisateurs et toutes 
--  commandes, qu’il y ait une correspondance ou non.


