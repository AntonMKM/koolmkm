<?php
$title = 'Inscription';
ob_start();
?>

<div class="form">
    <form action="index.php?action=inscription" method="post" enctype="multipart/form-data">

        <label for="pseudo">Pseudo</label>
        <br>
        <input type="text" name="login" required>
        <br>
        <label for="email">Email</label>
        <br>
        <input type="email" name="email" required>
        <br>
        <label for="mdp">Mot de passe</label>
        <br>
        <input type="password" name="pass" required>
        <br>
        <br><br>
        <input type="submit" name="inscription" value="Inscription" class="button">

    </form>
</div>

<?php
$content = ob_get_clean();
require 'template.php';
?>