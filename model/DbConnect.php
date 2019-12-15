<?php
class DbConnect
{
    function Connect()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        return $pdo;
    }
}
