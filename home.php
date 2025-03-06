<?php
require_once 'fonctions.php';
[$homepage] = home();
?>

<?php require_once 'header.php'; ?>
<?php require_once 'navbar.php'; ?>

<?php foreach($homepage as $home): ?>
    <section>
        <h1><?= $home["titre"] ?></h1>
        <p><?= $home["sous-titre"] ?></p>
    </section>
<?php endforeach; ?>

<?php require_once 'footer.php'; ?>