<?php
class Tasks
{
    public $_id;
    public $_date_crea;
    public $commentaires;
    public $id_demandeur;
    public $id_intervenant;
    public $urgence;
    public $statut;

    function __construct( $date_crea, $commentaires, int $id_demandeur, int $id_intervenant, $urgence, $statut)
    {
     
        $this->date_crea = $date_crea;
        $this->commentaires = $commentaires;
        $this->id_demandeur = $id_demandeur;
        $this->id_intervenant = $id_intervenant;
        $this->urgence = $urgence;
        $this->statut = $statut;

    }

    function getTasks()
    {
        $afficher = "SELECT * FROM tasks";

        $stmt = $this->_dbh->prepare($afficher);

        $stmt->execute();

        $data = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $data;
    }

    public function createTask()
    {
        return DatabaseHandler::getInstance()->executeQuery("INSERT INTO tasks (date_crea, commentaires,
         id_demandeur, id_intervenant, urgence, statut) VALUES (:date_crea, :commentaires, :id_demandeur, :id_intervenant, :urgence, :statut)", array(
            'date_crea' => $this->date_crea,
            'commentaires' => $this->commentaires,
            'id_demandeur' => $this->id_demandeur,
            'id_intervenant' => $this->id_intervenant,
            'urgence' => $this->urgence,
            'statut' => $this->statut
        ));
    }
}

