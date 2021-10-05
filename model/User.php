<?php

require('../modele/databaseHandler.php');
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

    static getUser()
    {
        return databaseHandler::getInstance();
    }





}
?>