<?php
// Copie ce fichier en "db.php" puis adapte les valeurs à ton serveur.
// db.php est ignoré par Git : il ne sera jamais publié.
$pdo = new PDO(
    'mysql:host=localhost;dbname=site_fiches;charset=utf8mb4',
    'root',   // utilisateur MySQL
    '',       // mot de passe MySQL
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
