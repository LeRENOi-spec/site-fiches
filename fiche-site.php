<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche site web</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'fond.php'; ?>
    <div class="fiche">
        <a class="retour" href="index.php">← Retour à l'accueil</a>
        <h1>Fiche : création de site web</h1>
        <p class="intro">Remplissez cette fiche pour que je comprenne bien votre besoin. Les champs marqués * sont obligatoires.</p>

        <form action="envoyer_fiche.php" method="post">
            <input type="hidden" name="type" value="site">
            <input class="piege" type="text" name="website_url" tabindex="-1" autocomplete="off" aria-hidden="true">

            <h2>Vos coordonnées</h2>
            <label for="nom">Nom *</label>
            <input type="text" id="nom" name="nom" required>
            <label for="email">E-mail *</label>
            <input type="email" id="email" name="email" required>
            <label for="telephone">Téléphone</label>
            <input type="tel" id="telephone" name="telephone">

            <h2>Votre projet</h2>
            <label for="nom_projet">Nom du site ou de l'entreprise *</label>
            <input type="text" id="nom_projet" name="nom_projet" required>
            <label for="type_site">Type de site *</label>
            <select id="type_site" name="type_site" required>
                <option value="">Choisir…</option>
                <option>Site vitrine</option>
                <option>Boutique en ligne</option>
                <option>Blog</option>
                <option>Portfolio</option>
                <option>Autre</option>
            </select>
            <label for="description">Décrivez votre projet en quelques lignes *</label>
            <textarea id="description" name="description" required></textarea>
            <label for="objectif">Quel est l'objectif principal du site ?</label>
            <input type="text" id="objectif" name="objectif" placeholder="Ex. : trouver des clients, vendre en ligne, présenter mes travaux">
            <label for="public_cible">Qui sont vos visiteurs ?</label>
            <input type="text" id="public_cible" name="public_cible" placeholder="Ex. : jeunes de 18 à 30 ans, entreprises locales">

            <h2>Contenu du site</h2>
            <label for="pages">Pages souhaitées</label>
            <textarea id="pages" name="pages" placeholder="Ex. : accueil, à propos, services, contact"></textarea>
            <label for="fonctionnalites">Fonctionnalités souhaitées</label>
            <textarea id="fonctionnalites" name="fonctionnalites" placeholder="Ex. : formulaire de contact, paiement en ligne, galerie photos, multilingue"></textarea>
            <label for="contenu_pret">Avez-vous déjà vos textes et vos images ?</label>
            <select id="contenu_pret" name="contenu_pret">
                <option value="">Choisir…</option>
                <option>Oui, tout est prêt</option>
                <option>En partie</option>
                <option>Non, j'ai besoin d'aide</option>
            </select>

            <h2>Style et technique</h2>
            <label for="style_couleurs">Style et couleurs souhaités</label>
            <input type="text" id="style_couleurs" name="style_couleurs">
            <label for="exemples">Sites que vous aimez (liens)</label>
            <textarea id="exemples" name="exemples"></textarea>
            <label for="domaine">Avez-vous déjà un nom de domaine et un hébergement ?</label>
            <select id="domaine" name="domaine">
                <option value="">Choisir…</option>
                <option>Les deux</option>
                <option>Seulement le nom de domaine</option>
                <option>Aucun des deux</option>
                <option>Je ne sais pas</option>
            </select>

            <h2>Budget et délai</h2>
            <label for="budget">Budget</label>
            <input type="text" id="budget" name="budget">
            <label for="delai">Date de livraison souhaitée</label>
            <input type="text" id="delai" name="delai" placeholder="Ex. : dans 1 mois">

            <button type="submit">Envoyer la fiche</button>
        </form>
    </div>
</body>
</html>
