<?php
ob_start();
$title = "KoolMKM";
?>

<!-- Formulaire d'ajout d'article -->
<?php if (isset($_SESSION['status']) and $_SESSION['status'] == 'admin') : ?>
    <h3>Ajouter un article</h3>
    <form action="index.php?action=sendArticle" method="post" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Titre de l'article">
        <br><br>
        <textarea name="content" rows="5" placeholder="Texte de l'article"></textarea>
        <br><br>
        <input type="file" name="img" id="img" accept=".png, .jpg, .jpeg" class="btn btn-orange" hidden>
        <label for="img" class="browse">Choisir illustration</label>
        <input type="submit" value="Envoi" name="send">
    </form>
    <br>
<?php endif; ?>

<!-- Affichage des articles -->
<?php
foreach ($myArticles as $article) {
    $date = new DateTime($article->getDate());
    $datenew = $date->format("d/m/Y à H:i");
?>

    <div class="heightArticle">
        <h3><?= $article->getTitle() ?></h3>
        <br>
        <img class="picture" src="public/img/<?= $article->getImg() ?>">
        <p class="content"><?= $article->getContent() ?></p>
    </div>
    <br>
    <div class="blocNext">
        <span class="dateAuthor">Posté le <?= $datenew ?> par : <?= $article->getAuthor() ?></span>
        <a href="index.php?action=fullArticle&id=<?= $article->getId() ?>">Lire la suite</a>
    </div>
    <hr>
<?php } ?>


<?php $content = ob_get_clean();
require 'view/template.php'; ?>