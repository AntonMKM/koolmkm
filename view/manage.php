<?php
$title = 'Gestion';

if (isset($_SESSION['status']) and $_SESSION['status'] == 'admin') {
    ob_start();
?>
    <h3>Gestion des membres </h3>
    <br>
    <form id='formModif' method="POST" enctype="multipart/form-data">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Pseudo</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($members as $member) : ?>
                    <tr id="infos<?= $member->getId() ?>">
                        <td><?= $member->getId() ?></td>
                        <td id="login<?= $member->getId() ?>"><?= $member->getLogin() ?></td>
                        <td id="email<?= $member->getId() ?>"><?= $member->getEmail() ?></td>
                        <td id="status<?= $member->getId() ?>"><?= $member->getStatus() ?></td>
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