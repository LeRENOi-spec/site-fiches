<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche application</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'fond.php'; ?>
    <div class="fiche">
        <a class="retour" href="index.php">← Retour à l'accueil</a>
        <h1>Fiche : création d'application</h1>
        <p class="intro">Remplissez cette fiche pour que je comprenne bien votre besoin. Les champs marqués * sont obligatoires.</p>

        <form action="envoyer_fiche.php" method="post">
            <input type="hidden" name="type" value="app">
            <input class="piege" type="text" name="website_url" tabindex="-1" autocomplete="off" aria-hidden="true">

            <h2>Vos coordonnées</h2>
            <label for="nom">Nom *</label>
            <input type="text" id="nom" name="nom" required>
            <label for="email">E-mail *</label>
            <input type="email" id="email" name="email" required>
            <label for="telephone">Téléphone</label>
            <input type="tel" id="telephone" name="telephone">

            <h2>Votre application</h2>
            <label for="nom_app">Nom de l'application (ou nom provisoire) *</label>
            <input type="text" id="nom_app" name="nom_app" required>
            <label for="description">Décrivez votre idée en quelques lignes *</label>
            <textarea id="description" name="description" required></textarea>
            <label for="probleme">Quel problème l'application résout-elle ?</label>
            <textarea id="probleme" name="probleme"></textarea>
            <label for="public_cible">Qui sont les utilisateurs ?</label>
            <input type="text" id="public_cible" name="public_cible" placeholder="Ex. : étudiants, commerçants, grand public">

            <h2>Fonctionnement</h2>
            <label for="plateforme">Où sera utilisée l'application ? *</label>
            <select id="plateforme" name="plateforme" required>
                <option value="">Choisir…</option>
                <option>Android</option>
                <option>iPhone (iOS)</option>
                <option>Android et iPhone</option>
                <option>Application web (navigateur)</option>
                <option>Ordinateur</option>
                <option>Je ne sais pas</option>
            </select>
            <label for="fonctionnalites">Fonctionnalités principales *</label>
            <textarea id="fonctionnalites" name="fonctionnalites" placeholder="Ex. : créer un profil, envoyer des messages, payer en ligne, recevoir des notifications" required></textarea>
            <label for="compte_utilisateur">Les utilisateurs doivent-ils avoir un compte ?</label>
            <select id="compte_utilisateur" name="compte_utilisateur">
                <option value="">Choisir…</option>
                <option>Oui</option>
                <option>Non</option>
                <option>Je ne sais pas</option>
            </select>
            <label for="hors_ligne">Doit-elle fonctionner sans Internet ?</label>
            <select id="hors_ligne" name="hors_ligne">
                <option value="">Choisir…</option>
                <option>Oui</option>
                <option>Non</option>
                <option>Partiellement</option>
                <option>Je ne sais pas</option>
            </select>
            <label for="services_externes">Services externes à connecter (paiement, cartes, réseaux sociaux…)</label>
            <input type="text" id="services_externes" name="services_externes">
            <label for="monetisation">Comment l'application sera-t-elle rentabilisée ?</label>
            <select id="monetisation" name="monetisation">
                <option value="">Choisir…</option>
                <option>Gratuite</option>
                <option>Payante</option>
                <option>Abonnement</option>
                <option>Publicité</option>
                <option>Je ne sais pas</option>
            </select>

            <h2>Design</h2>
            <label for="maquettes">Avez-vous déjà des maquettes ou un design ?</label>
            <select id="maquettes" name="maquettes">
                <option value="">Choisir…</option>
                <option>Oui, tout est prêt</option>
                <option>J'ai des croquis</option>
                <option>Non, j'ai besoin d'aide</option>
            </select>
            <label for="style_couleurs">Style et couleurs souhaités</label>
            <input type="text" id="style_couleurs" name="style_couleurs">
            <label for="exemples">Applications qui vous inspirent</label>
            <textarea id="exemples" name="exemples"></textarea>

            <h2>Budget et délai</h2>
            <label for="budget">Budget</label>
            <input type="text" id="budget" name="budget">
            <label for="delai">Date de livraison souhaitée</label>
            <input type="text" id="delai" name="delai" placeholder="Ex. : dans 3 mois">

            <button type="submit">Envoyer la fiche</button>
        </form>
    </div>
</body>
</html>
