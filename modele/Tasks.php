<?php
class Tasks
{
    public $nom;
    public $_date_crea;
    public $commentaires;
    public $id_demandeur;
    public $id_intervenant;
    public $urgence;
    public $statut;

    function __construct( $nom,$date_crea, $commentaires, int $id_demandeur, int $id_intervenant, $urgence, $statut)
    {
        $this->nom = $nom;
        $this->date_crea = $date_crea;
        $this->commentaires = $commentaires;
        $this->id_demandeur = $id_demandeur;
        $this->id_intervenant = $id_intervenant;
        $this->urgence = $urgence;
        $this->statut = $statut;

    }

    function getTasks()
    {
     
  return DatabaseHandler::getInstance()->executeQuery("SELECT * FROM tasks");
    }

    public function createTask()
    {
        return DatabaseHandler::getInstance()->executeQuery("INSERT INTO tasks (date_crea, commentaires,
         id_demandeur, id_intervenant, urgence, statut,nom) VALUES (:date_crea, :commentaires, :id_demandeur, :id_intervenant, :urgence, :statut,:nom)", array(
            'nom' => $this->nom,
            'date_crea' => $this->date_crea,
            'commentaires' => $this->commentaires,
            'id_demandeur' => $this->id_demandeur,
            'id_intervenant' => $this->id_intervenant,
            'urgence' => $this->urgence,
            'statut' => $this->statut
        ));
    }

    public function updateTask($id)
    {
        return DatabaseHandler::getInstance()->executeQuery("UPDATE tasks SET nom = :nom, date_crea = :date_crea, commentaires = :commentaires, id_demandeur = :id_demandeur, id_intervenant = :id_intervenant, urgence = :urgence, statut = :statut WHERE id = :id", array(
            'nom' => $this->nom,
            'date_crea' => $this->date_crea,
            'commentaires' => $this->commentaires,
            'id_demandeur' => $this->id_demandeur,
            'id_intervenant' => $this->id_intervenant,
            'urgence' => $this->urgence,
            'statut' => $this->statut,
            'id' => $id
          
      
        ));
    }

    public function deleteTask($id)
    {
        return DatabaseHandler::getInstance()->executeQuery("DELETE FROM tasks WHERE id = :id", array(
            'id' => $id
        ));
    }

    public static function jointureNomDemandeur($id)
    {
        return DatabaseHandler::getInstance()->executeQuery("SELECT users.nom FROM users INNER JOIN tasks ON users.id = tasks.id_demandeur where users.id = :id", array(
            'id' => $id
        ));
    }
}

