<?php
if (isset($_SESSION['id'])) {
	header('location:index.php');
}
$title = 'Connexion';
ob_start(); ?>

<div class="container">
	<h1>Se connecter</h1>
	<form method="post" class="form-group" action="index.php?action=connecter">
		<label for="pseudo">Pseudo</label>
		<input type="text" name="login" id="pseudo" placeholder="Pseudo" class="form-control" required>
		<label for="mdp">Mot de passe</label>
		<input type="password" name="pass" id="mdp" placeholder="Mot de passe" class="form-control" required>
		<br>
		<input type="submit" value="Se connecter" class="button">
	</form>
</div>

<?php
$content = ob_get_clean();
require 'template.php';
?>