<?php
/**
 * Created by PhpStorm.
 * User: quent
 * Date: 04/06/2019
 * Time: 16:19
 */

class EtudiantManagement
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

    public function add(Etudiant $etudiant) {
        $q = $this->_db->prepare('INSERT INTO etudiant (ID_OOMPTE) VALUES (:id_compte)');
        $q->bindValue(':id_compte',$etudiant->getIdCompte());
        $q->execute();
    }
}