# Site de fiches

Site web en PHP et MySQL qui permet à un client de décrire sa demande de création digitale (site web, application, jeu vidéo, logo) en remplissant une fiche adaptée. Les fiches reçues sont consultables dans un espace administrateur protégé.

## Fonctionnalités

- Page d'accueil pour choisir le type de projet
- Quatre fiches : site web, application, jeu vidéo, logo
- Enregistrement des réponses en base de données (champs communs + questions propres à chaque type)
- Espace admin : connexion, liste des fiches reçues, détail de chaque fiche
- Design adapté mobile et ordinateur, avec un fond 3D (Spline) sur grand écran

## Technologies

PHP (PDO), MySQL, HTML, CSS, JavaScript

## Installation en local

1. Installer XAMPP (ou WAMP) et démarrer Apache et MySQL.
2. Copier le projet dans `htdocs/site-fiches`.
3. Dans phpMyAdmin, importer `schema.sql`.
4. Copier `db.example.php` en `db.php` et adapter les identifiants si besoin.
5. Créer le compte admin : ajouter une ligne dans la table `admins` avec un mot de passe hashé par `password_hash()`.
6. Ouvrir `http://localhost/site-fiches/`.

## Structure

| Fichier | Rôle |
|---|---|
| `index.php` | Accueil, choix du type de fiche |
| `fiche-logo.php`, `fiche-site.php`, `fiche-app.php`, `fiche-jeu.php` | Formulaires clients |
| `envoyer_fiche.php` | Validation et enregistrement, page de confirmation |
| `connexion.php`, `deconnexion.php`, `admin.php` | Espace administrateur |
| `style.css`, `fond.php` | Design partagé |
| `schema.sql` | Structure de la base de données |

## Sécurité

Requêtes SQL préparées, échappement des sorties, mots de passe hashés, champ anti-spam invisible. Les identifiants de la base (`db.php`) ne sont pas publiés.
