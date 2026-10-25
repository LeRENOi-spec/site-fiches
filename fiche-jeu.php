<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche jeu vidéo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'fond.php'; ?>
    <div class="fiche">
        <a class="retour" href="index.php">← Retour à l'accueil</a>
        <h1>Fiche : création de jeu vidéo</h1>
        <p class="intro">Remplissez cette fiche pour que je comprenne bien votre idée. Les champs marqués * sont obligatoires.</p>

        <form action="envoyer_fiche.php" method="post">
            <input type="hidden" name="type" value="jeu">
            <input class="piege" type="text" name="website_url" tabindex="-1" autocomplete="off" aria-hidden="true">

            <h2>Vos coordonnées</h2>
            <label for="nom">Nom *</label>
            <input type="text" id="nom" name="nom" required>
            <label for="email">E-mail *</label>
            <input type="email" id="email" name="email" required>
            <label for="telephone">Téléphone</label>
            <input type="tel" id="telephone" name="telephone">

            <h2>Votre jeu</h2>
            <label for="nom_jeu">Nom du jeu (ou nom provisoire) *</label>
            <input type="text" id="nom_jeu" name="nom_jeu" required>
            <label for="description">Décrivez votre idée en quelques lignes *</label>
            <textarea id="description" name="description" required></textarea>
            <label for="genre">Genre du jeu *</label>
            <select id="genre" name="genre" required>
                <option value="">Choisir…</option>
                <option>Action</option>
                <option>Aventure</option>
                <option>Puzzle / réflexion</option>
                <option>Course</option>
                <option>Stratégie</option>
                <option>Jeu de rôle (RPG)</option>
                <option>Plateforme</option>
                <option>Simulation</option>
                <option>Autre</option>
            </select>
            <label for="univers">Univers et histoire</label>
            <textarea id="univers" name="univers" placeholder="Où se passe le jeu ? Qui est le héros ? Y a-t-il une histoire ?"></textarea>
            <label for="public_cible">Qui sont les joueurs visés ?</label>
            <input type="text" id="public_cible" name="public_cible" placeholder="Ex. : enfants, jeunes adultes, joueurs occasionnels">

            <h2>Fonctionnement</h2>
            <label for="plateforme">Où sera joué le jeu ? *</label>
            <select id="plateforme" name="plateforme" required>
                <option value="">Choisir…</option>
                <option>Mobile (Android / iPhone)</option>
                <option>Ordinateur (PC)</option>
                <option>Navigateur web</option>
                <option>Console</option>
                <option>Plusieurs plateformes</option>
                <option>Je ne sais pas</option>
            </select>
            <label for="dimension">2D ou 3D ?</label>
            <select id="dimension" name="dimension">
                <option value="">Choisir…</option>
                <option>2D</option>
                <option>3D</option>
                <option>Je ne sais pas</option>
            </select>
            <label for="mode_jeu">Mode de jeu</label>
            <select id="mode_jeu" name="mode_jeu">
                <option value="">Choisir…</option>
                <option>Solo</option>
                <option>Multijoueur local</option>
                <option>Multijoueur en ligne</option>
                <option>Solo et multijoueur</option>
            </select>
            <label for="mecaniques">Comment joue-t-on ? Mécaniques principales *</label>
            <textarea id="mecaniques" name="mecaniques" placeholder="Ex. : sauter entre des plateformes, collecter des pièces, affronter des ennemis, niveaux de difficulté croissante" required></textarea>
            <label for="monetisation">Comment le jeu sera-t-il rentabilisé ?</label>
            <select id="monetisation" name="monetisation">
                <option value="">Choisir…</option>
                <option>Gratuit</option>
                <option>Payant</option>
                <option>Achats dans le jeu</option>
                <option>Publicité</option>
                <option>Je ne sais pas</option>
            </select>

            <h2>Graphismes et ambiance</h2>
            <label for="style_visuel">Style visuel souhaité</label>
            <input type="text" id="style_visuel" name="style_visuel" placeholder="Ex. : pixel art, cartoon, réaliste, minimaliste">
            <label for="elements_graphiques">Avez-vous déjà des dessins, personnages ou sons ?</label>
            <select id="elements_graphiques" name="elements_graphiques">
                <option value="">Choisir…</option>
                <option>Oui, tout est prêt</option>
                <option>En partie</option>
                <option>Non, j'ai besoin d'aide</option>
            </select>
            <label for="musique">Musique et sons</label>
            <input type="text" id="musique" name="musique" placeholder="Ex. : musique calme, rythmée, effets sonores rétro">
            <label for="jeux_inspirants">Jeux qui vous inspirent</label>
            <textarea id="jeux_inspirants" name="jeux_inspirants"></textarea>

            <h2>Budget et délai</h2>
            <label for="budget">Budget</label>
            <input type="text" id="budget" name="budget">
            <label for="delai">Date de livraison souhaitée</label>
            <input type="text" id="delai" name="delai" placeholder="Ex. : dans 4 mois">

            <button type="submit">Envoyer la fiche</button>
        </form>
    </div>
</body>
</html>
