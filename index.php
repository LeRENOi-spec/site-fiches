<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quel est votre projet ?</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'fond.php'; ?>

    <main class="accueil">
        <h1>Quel est votre projet ?</h1>
        <p class="intro">Choisissez le type de création souhaité et remplissez la fiche correspondante.</p>

        <div class="choix">
            <a href="fiche-site.php"><strong>Site web</strong><span>Site vitrine, boutique, blog, portfolio</span></a>
            <a href="fiche-app.php"><strong>Application</strong><span>Application mobile, web ou ordinateur</span></a>
            <a href="fiche-jeu.php"><strong>Jeu vidéo</strong><span>Jeu mobile, PC, navigateur ou console</span></a>
            <a href="fiche-logo.php"><strong>Logo</strong><span>Identité visuelle de votre marque</span></a>
        </div>
    </main>
</body>
</html>
