<?php

<<<<<<< HEAD
require('modele/databaseHandler.php');
=======
require('../modele/databaseHandler.php');
>>>>>>> 403be812b4711a26b44abea5dd0b4b4beba8e377
Class User {

    public String $nom;
    public String $prenom;
    public String $password;
    public String $mail;

    public function __construct($nom, $prenom, $password, $mail) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->password = $password;
        $this->mail = $mail;
    }

<<<<<<< HEAD
    public function getUser()
    {
        return DatabaseHandler::getInstance()->executeQuery("select * from users;");
    }

=======
    static getUser()
    {
        return databaseHandler::getInstance();
    }





>>>>>>> 403be812b4711a26b44abea5dd0b4b4beba8e377
}
?>