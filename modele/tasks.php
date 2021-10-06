<?php

require('modele/databaseHandler.php');

class Tasks
{
    private $_id;
    private $_date_crea;
    private $_commentaires;
    private $id_demandeur;
    private $id_intervenant;
    private $urgence;
    private $statut;

    public function __construct(int $id, $date_crea, $commentaires, int $id_demandeur, int $id_intervenant, $urgence, $statut)
    {
        $this->_id = $id;
        $this->date_crea = $date_crea;
        $this->_commentaires = $commentaires;
        $this->id_demandeur = $id_demandeur;
        $this->id_intervenant = $id_intervenant;
        $this->urgence = $urgence;
        $this->statut = $statut;

    }

    // creer un task

    public function createTask()
    {
        return DatabaseHandler::getInstance()->executeQuery("INSERT INTO tasks (date_crea, commentaires, id_demandeur, id_intervenant, urgence, statut) VALUES ('?,?,?,?,?,?' )");
    }

    public function getTasks()
    {
        return DatabaseHandler::getInstance()->executeQuery("SELECT * FROM tasks");
    }

    public function getTaskById($id)
    {
        return DatabaseHandler::getInstance()->executeQuery("SELECT * FROM tasks WHERE id = :id");
    }

    public function deleteTask($id)
    {
        return DatabaseHandler::getInstance()->executeQuery("SELECT * FROM tasks");
    }

//     public function updateTask($id, $date_crea, $commentaires, $id_demandeur, $id_intervenant, $urgence, $statut)

//     return DatabaseHandler::getInstance()->executeQuery("UPDATE tasks SET 'date_crea' = $date_crea'");

//     UPDATE table
// SET nom_colonne_1 = 'nouvelle valeur'
// WHERE condition
}

