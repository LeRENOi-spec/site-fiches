CREATE DATABASE IF NOT EXISTS site_fiches CHARACTER SET utf8mb4;
USE site_fiches;

-- Une seule table pour toutes les fiches : champs communs + "details" (JSON) pour les questions propres à chaque type
CREATE TABLE IF NOT EXISTS fiches (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    type        VARCHAR(30)  NOT NULL,          -- logo, site, app, jeu...
    nom         VARCHAR(100) NOT NULL,
    email       VARCHAR(150) NOT NULL,
    telephone   VARCHAR(30),
    budget      VARCHAR(50),
    delai       VARCHAR(50),
    description TEXT,
    details     JSON,
    statut      VARCHAR(20)  NOT NULL DEFAULT 'nouvelle',
    created_at  DATETIME     DEFAULT CURRENT_TIMESTAMP
);

-- Ton compte à toi, pour consulter les fiches (un seul compte, créé à la main)
CREATE TABLE IF NOT EXISTS admins (
    id           INT AUTO_INCREMENT PRIMARY KEY,
    email        VARCHAR(150) NOT NULL UNIQUE,
    mot_de_passe VARCHAR(255) NOT NULL          -- hashé avec password_hash()
);
