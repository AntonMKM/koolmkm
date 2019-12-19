<?php
session_start();

spl_autoload_register(function ($class) {
    $directories = ["class", "model", "controller"];
    foreach ($directories as $dir) {
        $file = $dir . "/" . $class . ".php";
        if (file_exists($file)) {
            require_once $file;
        }
    }
});

$memberController = new MembersController();
$articleController = new ArticleController();

if (!empty($_GET)) {
    extract($_GET);
    if (isset($action)) {
        switch ($action) {
            case 'accueil':
                $articleController->getArticles();
                break;
            case 'sendArticle':
                $articleController->sendArticle();
                break;
            case 'fullArticle':
                $articleController->getFullArticle($id);
                break;
            case 'sendComment':
                $articleController->sendComment();
                break;
            case 'manage':
                $memberController->viewMembers();
                break;
            case 'inscription':
                $memberController->inscription();
                break;
            case 'update':
                $memberController->update($id);
                break;
            case 'delete':
                $memberController->delete($id);
                break;
            case 'connecter':
                $memberController->connexion();
                break;
            case 'story':
                require 'view/story.php';
                break;
            case 'races':
                require 'view/races.php';
                break;
            case 'connexion':
                require 'view/connexion.php';
                break;
            case 'signin':
                require 'view/inscription.php';
                break;
            case 'deconnexion':
                $memberController->disconnect();
                break;
            default:
                require 'view/error.php';
                break;
        }
    } else {
        require 'view/error.php';
    }
} else {
    $articleController->getArticles();
}
