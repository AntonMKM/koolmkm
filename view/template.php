<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css" type="text/css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
</head>

<body class="container">
    <!--barre de navigation-->
    <div class="topnav" id="myTopnav">
        <a href="index.php" class="active">Accueil</a>
        <a href="index.php?action=story">Histoire</a>
        <a href="index.php?action=races">Races jouables</a>
        <?php if (isset($_SESSION['status']) and $_SESSION['status'] == 'admin') : ?>
            <a href="index.php?action=manage">Gestion</a>
        <?php endif; ?>
        <?php if (!isset($_SESSION['id'])) : ?>
            <a href="index.php?action=signin">S'inscrire</a>
        <?php endif; ?>
        <?php if (isset($_SESSION['id'])) : ?>
            <a href="index.php?action=deconnexion">Se déconnecter</a>
        <?php endif; ?>
        <?php if (!isset($_SESSION['id'])) : ?>
            <a href="index.php?action=connexion">Se connecter</a>
        <?php endif; ?>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div id="banner">
    </div>
    <?php if (isset($_SESSION['login'])) echo 'Bienvenue ' . $_SESSION['login'] ?>
    <br><br>
    <?= $content ?>

    <script type="text/javascript" src="public/js/script.js"></script>
</body>

</html>