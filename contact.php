<?php
require_once 'fonctions.php';
[$test] = form();
?>

<?php require_once 'header.php'; ?>
<?php require_once 'navbar.php'; ?>

<?php foreach($test as $donnee): ?>
<h2>Formulaire de contact</h2>
<form action="/ma-page-de-traitement" method="post">
  <ul>
    <li>
      <label for="name"><?= $donnee["name"] ?></label>
      <input type="text" id="name" name="user_name" />
    </li>
    <li>
      <label for="mail"><?= $donnee["mail"] ?></label>
      <input type="email" id="mail" name="user_mail" />
    </li>
    <li>
      <label for="msg"><?= $donnee["message"] ?></label>
      <textarea id="msg" name="user_message"></textarea>
    </li>
  </ul>
</form>
<?php endforeach; ?>

<?php require_once 'footer.php'; ?>