<?php
require 'db.php';

// Questions propres à chaque type de fiche (liste blanche : seuls ces champs sont enregistrés)
$types = [
    'logo' => ['nom_marque', 'slogan', 'secteur', 'style', 'couleurs', 'exemples'],
    'site' => ['nom_projet', 'type_site', 'objectif', 'public_cible', 'pages', 'fonctionnalites', 'contenu_pret', 'style_couleurs', 'exemples', 'domaine'],
    'app'  => ['nom_app', 'probleme', 'public_cible', 'plateforme', 'fonctionnalites', 'compte_utilisateur', 'hors_ligne', 'services_externes', 'monetisation', 'maquettes', 'style_couleurs', 'exemples'],
    'jeu'  => ['nom_jeu', 'genre', 'univers', 'public_cible', 'plateforme', 'dimension', 'mode_jeu', 'mecaniques', 'monetisation', 'style_visuel', 'elements_graphiques', 'musique', 'jeux_inspirants'],
];

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: fiche-logo.php');
    exit;
}

// Anti-spam : ce champ est invisible, seul un robot le remplit
if (!empty($_POST['website_url'])) {
    exit;
}

$type = $_POST['type'] ?? '';
if (!isset($types[$type])) {
    http_response_code(400);
    exit('Type de fiche inconnu.');
}

$nom   = trim($_POST['nom'] ?? '');
$email = trim($_POST['email'] ?? '');
if ($nom === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    exit('Nom ou e-mail invalide. Revenez en arrière et corrigez la fiche.');
}

$details = [];
foreach ($types[$type] as $champ) {
    $details[$champ] = trim($_POST[$champ] ?? '');
}

$stmt = $pdo->prepare(
    'INSERT INTO fiches (type, nom, email, telephone, budget, delai, description, details)
     VALUES (?, ?, ?, ?, ?, ?, ?, ?)'
);
$stmt->execute([
    $type,
    $nom,
    $email,
    trim($_POST['telephone'] ?? ''),
    trim($_POST['budget'] ?? ''),
    trim($_POST['delai'] ?? ''),
    trim($_POST['description'] ?? ''),
    json_encode($details, JSON_UNESCAPED_UNICODE),
]);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche envoyée</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'fond.php'; ?>
    <div class="merci">
        <div class="coche">✓</div>
        <h1>Fiche envoyée</h1>
        <p>Merci <?= htmlspecialchars($nom) ?>, j'ai bien reçu votre fiche. Je reviens vers vous très vite à l'adresse <?= htmlspecialchars($email) ?>.</p>
        <a class="bouton" href="index.php">Retour à l'accueil</a>
    </div>
</body>
</html>
