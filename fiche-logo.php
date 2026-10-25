<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche logo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'fond.php'; ?>
    <div class="fiche">
        <a class="retour" href="index.php">← Retour à l'accueil</a>
        <h1>Fiche : création de logo</h1>
        <p class="intro">Remplissez cette fiche pour que je comprenne bien votre besoin. Les champs marqués * sont obligatoires.</p>

        <form action="envoyer_fiche.php" method="post">
            <input type="hidden" name="type" value="logo">
            <input class="piege" type="text" name="website_url" tabindex="-1" autocomplete="off" aria-hidden="true">

            <h2>Vos coordonnées</h2>
            <label for="nom">Nom *</label>
            <input type="text" id="nom" name="nom" required>
            <label for="email">E-mail *</label>
            <input type="email" id="email" name="email" required>
            <label for="telephone">Téléphone</label>
            <input type="tel" id="telephone" name="telephone">

            <h2>Votre marque</h2>
            <label for="nom_marque">Nom de la marque ou du projet *</label>
            <input type="text" id="nom_marque" name="nom_marque" required>
            <label for="slogan">Slogan (si vous en avez un)</label>
            <input type="text" id="slogan" name="slogan">
            <label for="secteur">Secteur d'activité *</label>
            <input type="text" id="secteur" name="secteur" placeholder="Ex. : restauration, mode, technologie" required>
            <label for="description">Décrivez votre projet en quelques lignes *</label>
            <textarea id="description" name="description" required></textarea>

            <h2>Style souhaité</h2>
            <label for="style">Style du logo</label>
            <select id="style" name="style">
                <option value="">Je ne sais pas encore</option>
                <option>Minimaliste</option>
                <option>Moderne</option>
                <option>Classique</option>
                <option>Ludique</option>
                <option>Luxe</option>
            </select>
            <label for="couleurs">Couleurs souhaitées ou à éviter</label>
            <input type="text" id="couleurs" name="couleurs">
            <label for="exemples">Logos que vous aimez (liens ou noms de marques)</label>
            <textarea id="exemples" name="exemples"></textarea>

            <h2>Budget et délai</h2>
            <label for="budget">Budget</label>
            <input type="text" id="budget" name="budget">
            <label for="delai">Date de livraison souhaitée</label>
            <input type="text" id="delai" name="delai" placeholder="Ex. : dans 2 semaines">

            <button type="submit">Envoyer la fiche</button>
        </form>
    </div>
</body>
</html>
