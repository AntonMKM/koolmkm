<?php
$title = 'Gestion';

if (isset($_SESSION['status']) and $_SESSION['status'] == 'admin') {
    ob_start();
    ?>
    <h2>Gestion des membres </h2>
    <form id='formModif' method="POST" enctype="multipart/form-data">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">pseudo</th>
                    <th scope="col">email</th>
                    <th scope="col">status</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($members as $member) : ?>

                    <tr id="infos<?= $member->getId() ?>">
                        <td><?= $member->getId() ?></td>
                        <td id="login<?= $member->getId() ?>"><?= $member->getLogin() ?></td>
                        <td id="email<?= $member->getId() ?>"><?= $member->getEmail() ?></td>
                        <td id="status<?= $member->getId() ?>"><?= $member->getStatus() ?></td>
                        <!-- <td id="pass<?= $member->getId() ?>"><?= $member->getPass() ?></td> -->
                        <td id="bouton<?= $member->getId() ?>"><span class="btn btn-success boutonModif" onclick="modif(<?= $member->getId() ?>)" value="<?= $member->getId() ?>">Modifier</span></td>
                        <td><span onclick="confirmation(<?= $member->getId() ?>)" class="btn btn-danger">Supprimer</span></td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </form>
<?php
}
$content = ob_get_clean();
require 'template.php';
?>