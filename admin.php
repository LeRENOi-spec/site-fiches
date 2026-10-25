<?php
session_start();
if (empty($_SESSION['admin_id'])) {
    header('Location: connexion.php');
    exit;
}
require 'db.php';

function e($v) { return htmlspecialchars((string)$v); }

$fiche = null;
$details = [];
if (isset($_GET['id'])) {
    $stmt = $pdo->prepare('SELECT * FROM fiches WHERE id = ?');
    $stmt->execute([(int)$_GET['id']]);
    $fiche = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($fiche) {
        $details = json_decode($fiche['details'] ?? '[]', true) ?: [];
    }
} else {
    $fiches = $pdo->query('SELECT id, type, nom, email, created_at FROM fiches ORDER BY created_at DESC')
                  ->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiches reçues</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="admin">
<div class="page">
    <header>
        <h1><?= $fiche ? 'Fiche ' . e($fiche['type']) . ' n°' . (int)$fiche['id'] : 'Fiches reçues' ?></h1>
        <a href="deconnexion.php">Se déconnecter</a>
    </header>

<?php if (isset($_GET['id'])): ?>
    <p><a href="admin.php">← Retour à la liste</a></p>
    <?php if (!$fiche): ?>
        <p class="vide">Cette fiche n'existe pas.</p>
    <?php else: ?>
        <dl>
            <dt>Nom</dt><dd><?= e($fiche['nom']) ?></dd>
            <dt>E-mail</dt><dd><a href="mailto:<?= e($fiche['email']) ?>"><?= e($fiche['email']) ?></a></dd>
            <dt>Téléphone</dt><dd><?= e($fiche['telephone'] ?: 'Non renseigné') ?></dd>
            <dt>Budget</dt><dd><?= e($fiche['budget'] ?: 'Non renseigné') ?></dd>
            <dt>Délai</dt><dd><?= e($fiche['delai'] ?: 'Non renseigné') ?></dd>
            <dt>Description</dt><dd><?= e($fiche['description']) ?></dd>
        </dl>
        <h2>Réponses propres à la fiche <?= e($fiche['type']) ?></h2>
        <dl>
            <?php foreach ($details as $cle => $valeur): ?>
                <dt><?= e(ucfirst(str_replace('_', ' ', $cle))) ?></dt>
                <dd><?= e($valeur !== '' ? $valeur : 'Non renseigné') ?></dd>
            <?php endforeach; ?>
        </dl>
    <?php endif; ?>

<?php elseif (!$fiches): ?>
    <p class="vide">Aucune fiche reçue pour le moment.</p>
<?php else: ?>
    <div class="table-wrap">
        <table>
            <tr><th>Date</th><th>Type</th><th>Client</th><th>E-mail</th><th></th></tr>
            <?php foreach ($fiches as $f): ?>
                <tr>
                    <td><?= e(date('d/m/Y H:i', strtotime($f['created_at']))) ?></td>
                    <td><?= e($f['type']) ?></td>
                    <td><?= e($f['nom']) ?></td>
                    <td><?= e($f['email']) ?></td>
                    <td><a href="admin.php?id=<?= (int)$f['id'] ?>">Ouvrir</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
<?php endif; ?>
</div>
</body>
</html>
