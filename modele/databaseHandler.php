<?php


class DatabaseHandler
{

    private static $instance;
    private $pdo;

   

    private function __construct()
    {
        $dbname = "handihelp";
        $dbuser = "phpmyadmin";
      
        $dbpassword = "Password1011%";

        try {
            $this->pdo = new PDO("mysql:host=localhost;dbname=" . $dbname . ";charset=utf8;", $dbuser, $dbpassword);
        } catch (PDOException $exception) {
            die("Erreur connexion à la base de données");
        }
    }
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new DatabaseHandler();
        }

        return self::$instance;
    }

    function executeQuery($afficher)
    {
        $stmt = self::getInstance()->pdo->prepare($afficher);

        $stmt->execute();

        $data = $stmt->fetchAll(PDO::FETCH_OBJ); 
        return $data;  
    }
    // function getTask()
    // {
    //     $afficher = "SELECT * FROM task";

    //     $stmt = $this->instance->prepare($afficher);

    //     $stmt->execute();

    //     $data = $stmt->fetchAll(PDO::FETCH_OBJ);

    //     return $data;
    // }
}
