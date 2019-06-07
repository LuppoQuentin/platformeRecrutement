<?php
/**
 * Created by PhpStorm.
 * User: quent
 * Date: 04/06/2019
 * Time: 14:34
 */

class CompetenceManagement
{

    private $_db;

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }

    public function add(competence $mCompetence){
        $q = $this->_db->prepare('INSERT INTO competence (NOM) VALUES(:competence)');
        $q->bindValue(':competence', $mCompetence->getCompetence());
    }

    public function delete($id){
        $q = $this->_db->prepare('DELETE FROM competence where ID_COMPETENCE = :id');
        $q->bindValue(':id',$id);
        $q->execute();
    }

    public function getCompetence($id, competence $newObject) {
        $q = $this->_db->prepare('SELECT * FROM competence where ID_COMPETENCE =  :id');
        $q->bindValue(':id',$id);
        $data = $q->execute();
        while($data = $q->fetch()) {
            $newObject->getCompetence($data);
        }
        return $newObject;
    }

    public function updateCompetence(competence $mCompetence) {
        $q = $this->_db->prepare('UPDATE competence SET COMPETENCE = :competence WHERE ID_COMPETENCE = :id');
        $q->bindValue(':id',$mCompetence->getId());
        $q->bindValue(':login', $mCompetence->getLogin());
        $data = $q->execute();
    }

    public function returnLastId() {
        $q = $this->_db->lastInsertId();
        return $q;
    }

}

