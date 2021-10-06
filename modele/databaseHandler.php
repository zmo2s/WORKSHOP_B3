<?php

class DatabaseHandler
{

<<<<<<< HEAD
    private static $instance;
    private $pdo;

    private function __construct()
=======
    private static $_dbh;

   private function __construct()
>>>>>>> 403be812b4711a26b44abea5dd0b4b4beba8e377
    {
        $dbname = "handihelp";
        $dbuser = "root";
        $dbpassword = "";

<<<<<<< HEAD
        try {
            $this->pdo = new PDO("mysql:host=localhost;dbname=" . $dbname . ";charset=utf8;", $dbuser, $dbpassword);
=======
      /*  try {
            $this->_dbh = new PDO("mysql:host=localhost;dbname=" . $dbname . ";charset=utf8;", $dbuser, $dbpassword);
>>>>>>> 403be812b4711a26b44abea5dd0b4b4beba8e377
        } catch (PDOException $exception) {
            die("Erreur connexion à la base de données");
        }
        */
    }
    public static function getInstance(): Singleton
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls];
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
<<<<<<< HEAD
        $stmt = self::getInstance()->pdo->prepare($afficher);
=======
        $stmt = $this->_dbh->prepare($afficher);
>>>>>>> 403be812b4711a26b44abea5dd0b4b4beba8e377

        $stmt->execute();

        $data = $stmt->fetchAll(PDO::FETCH_OBJ); 
        return $data;  
    }
    function getTask()
    {
        $afficher = "SELECT * FROM task";

        $stmt = $this->instance->prepare($afficher);

        $stmt->execute();

        $data = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $data;
    }
}
