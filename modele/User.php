<?php

require('modele/databaseHandler.php');
Class User {

    public  $nom;
    public  $prenom;
    public  $password;
    public  $mail;

    public function __construct($nom, $prenom, $password, $mail) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->password = $password;
        $this->mail = $mail;
    }

    public function getUser()
    {
        return DatabaseHandler::getInstance()->executeQuery("select * from users;");
    }

    public function createUser()
    {
        return DatabaseHandler::getInstance()->executeQuery("INSERT INTO users (nom, prenom, mdp, email) VALUES (:nom, :prenom, :mdp, :email)", array(
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'mdp' => $this->password,
            'email' => $this->mail
        ));
    }

    
    public function updateUser($id)
    {
        return DatabaseHandler::getInstance()->executeQuery("UPDATE users SET nom = :nom, prenom = :prenom, mdp = :mdp, email = :email WHERE id = :id", array(
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'mdp' => $this->password,
            'email' => $this->mail,
            'id' => $id
        ));
    }
    
    public function deleteUser($id)
    {
        return DatabaseHandler::getInstance()->executeQuery("DELETE FROM users WHERE id = :id", array(
            'id' => $id
        ));
    }
}
?>