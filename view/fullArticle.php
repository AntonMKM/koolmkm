<?php ob_start();
$title = "News"; ?>

<!-- Affichage article entier -->
<div id="article">
        <h3> <?= $myArticle->getTitle() ?> </h3>
        <img class="picture2" src="public/img/<?= $myArticle->getImg() ?>">
        <p> <?= $myArticle->getContent() ?> </p>
        <?php $date = new DateTime($myArticle->getDate());
                                                $datenews = $date->format("d/m/Y à H:i"); ?>
        <span class="dateAuthor">Posté le <?= $datenews ?> par : <?= $myArticle->getAuthor() ?></span>
</div>
<hr>
<?php if (isset($_SESSION['id'])) : ?>
        <form action="index.php?action=sendComment" method="POST">
                <input type="text" hidden name="id_article" value=<?= $myArticle->getId() ?>>
                <textarea rows="2" cols="100" name="comment" placeholder="Votre commentaire" required></textarea>
                <input type="submit" value="Envoi" name="send">
        </form>
<?php endif ?>
<br>
<!--Commentaires-->
<h3>Commentaires de l'article</h3>
<br>
<?php foreach ($myComments as $comment) { ?>

        <p><?= $comment->getComment() ?></p>
        <h6>Posté par <?= $comment->getLogin() ?>
                le <?php $dateC = new DateTime($comment->getDate_comment());
                                                                                $dateCnews = $dateC->format("d/m/Y H:i"); ?>
                <?= $dateCnews ?></h6>
        <hr>
<?php }
                                                                        $content = ob_get_clean();
                                                                        require 'template.php';
?>