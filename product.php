<?php
require_once 'fonctions.php';
[$produits] = product();
?>

<?php require_once 'header.php'; ?>
<?php require_once 'navbar.php'; ?>

<?php foreach($produits as $produit): ?>
    <section>
        <h2><?= $produit["produit"] ?></h2>
        <p><?= $produit["couleur"] ?></p>
    </section>
<?php endforeach; ?>

<?php require_once 'footer.php'; ?>