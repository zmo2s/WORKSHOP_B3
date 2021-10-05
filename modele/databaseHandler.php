<?php
class DatabaseHandler
{

    private static $_dbh;

   private function __construct()
    {
        $dbname = "handihelp";
        $dbuser = "root";
        $dbpassword = "";

      /*  try {
            $this->_dbh = new PDO("mysql:host=localhost;dbname=" . $dbname . ";charset=utf8;", $dbuser, $dbpassword);
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

    function executeQuery($afficher)
    {
        $stmt = $this->_dbh->prepare($afficher);

        $stmt->execute();

        $data = $stmt->fetchAll(PDO::FETCH_OBJ); 
        return $data;  
    }
    function getTask()
    {
        $afficher = "SELECT * FROM task";

        $stmt = $this->_dbh->prepare($afficher);

        $stmt->execute();

        $data = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $data;
    }
}
$dbh = new DatabaseHandler();
