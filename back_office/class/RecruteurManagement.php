<?php
/**
 * Created by PhpStorm.
 * User: quent
 * Date: 04/06/2019
 * Time: 16:32
 */

class RecruteurManagement
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

    public function add(Recruteur $recruteur) {
        $q = $this->_db->prepare('INSERT INTO recruteur (ID_OOMPTE) VALUES (:recruteur)');
        $q->bindValue(':id_compte',$recruteur->getIdCompte());

        $q->execute();
    }
}