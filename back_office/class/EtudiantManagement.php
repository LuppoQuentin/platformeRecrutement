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
        $q = $this->_db->prepare('INSERT INTO ETUDIANT (ID_COMPTE) VALUES (:id_compte)');
        $q->bindValue(':id_compte',$etudiant->getIdCompte());
        $q->execute();
    }

    public function delete($id) {
        $q = $this->_db->prepare('DELETE FROM etudiant where ID_ETUDIANT = :id');
        $q->bindValue(':id',$id);
        $q->execute();
    }

    public function getEtudiant($id, etudiant $newObject) {
        $q = $this->_db->prepare('SELECT * FROM etudiant where ID_ETUDIANT =  :id');
        $q->bindValue(':id',$id);
        $data = $q->execute();
        while($data = $q->fetch()) {
            $newObject->getEtudiant($data);
        }
        return $newObject;
    }

    public function deleteWithIdCompte($id) {
        $q = $this->_db->prepare('DELETE FROM etudiant where ID_COMPTE = :id');
        $q->bindValue(':id',$id);
        $q->execute();
    }

    public function existId($id) {
        $q = $this->_db->prepare('SELECT ID_ETUDIANT FROM etudiant WHERE ID_COMPTE = :id');
        $q->bindValue(':id',$id);
        $q->execute();
        $bool = false;
        while($data = $q->fetch()) {
            $existId = $data['ID_ETUDIANT'];
            if(!empty($existId)) {
                $bool = true;
            }
        }
        return $bool;
    }

}