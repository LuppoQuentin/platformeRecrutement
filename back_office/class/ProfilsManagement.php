<?php
/**
 * Created by PhpStorm.
 * User: quent
 * Date: 06/06/2019
 * Time: 10:04
 */

class ProfilsManagement
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

    public function add(Profils $mProfil) {
        $q = $this->_db->prepare('INSERT INTO PROFILS (NOM, PRENOM, DATE_NAISSANCE, VILLE, NUMERO_TELEPHONE) VALUES (:nom, :prenom, :datebirth, :ville,:num)');
        $q->bindValue(':nom', $mProfil->getNom());
        $q->bindValue(':prenom',$mProfil->getPrenom());
        $q->bindValue(':datebirth', $mProfil->getDatedenaissance());
        $q->bindValue(':ville', $mProfil->getVille());
        $q->bindValue(':num', $mProfil->getNum());

        $q->execute();
    }

    public function delete($id) {
        $q = $this->_db->prepare('DELETE FROM PROFILS where ID_PROFILS = :id');
        $q->bindValue(':id',$id);
        $q->execute();
    }

    public function getProfils($id, Profils $newObject) {
        $q = $this->_db->prepare('SELECT * FROM PROFILS where ID_PROFILS =  :id');
        $q->bindValue(':id',$id);
        $data = $q->execute();
        while($data = $q->fetch()) {
            $newObject->getProfils($data);
        }
        return $newObject;
    }

    public function updateProfils(profils $mProfil) {
        $q = $this->_db->prepare('UPDATE PROFILS SET NOM = :nom, PRENOM = :prenom, DATE_NAISSANCE = :datebirth, VILLE= :ville, NUMERO_TELEPHONE = :num WHERE ID_PROFILS = :id');
        $q->bindValue(':nom', $mProfil->getNom());
        $q->bindValue(':prenom',$mProfil->getPrenom());
        $q->bindValue(':datebirth', $mProfil->getDatedenaissance());
        $q->bindValue(':ville', $mProfil->getVille());
        $q->bindValue(':num', $mProfil->getNum());
        $data = $q->execute();
    }
}