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
        $q = $this->_db->prepare('INSERT INTO recruteur (ID_COMPTE) VALUES (:id_compte)');
        $q->bindValue(':id_compte',$recruteur->getIdCompte());
        $q->execute();
    }

    public function delete($id) {
        $q = $this->_db->prepare('DELETE FROM recruteur where ID_RECRUTEUR = :id');
        $q->bindValue(':id',$id);
        $q->execute();
    }

    public function getRecruteur($id, etudiant $newObject) {
        $q = $this->_db->prepare('SELECT * FROM recruteur where ID_RECRUTEUR =  :id');
        $q->bindValue(':id',$id);
        $data = $q->execute();
        while($data = $q->fetch()) {
            $newObject->getEtudiant($data);
        }
        return $newObject;
    }

    public function deleteWithIdCompte($id) {
        $q = $this->_db->prepare('DELETE FROM recruteur where ID_COMPTE = :id');
        $q->bindValue(':id',$id);
        $q->execute();
    }

    public function existId($id) {
        $q = $this->_db->prepare('SELECT ID_RECRUTEUR FROM recruteur WHERE ID_COMPTE = :id');
        $q->bindValue(':id',$id);
        $q->execute();
        $bool = false;
        while($data = $q->fetch()) {
            $existId = $data['ID_RECRUTEUR'];
            if(!empty($existId)) {
                $bool = true;
            }
        }
        return $bool;
    }

}