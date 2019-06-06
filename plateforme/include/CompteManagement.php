<?php
/**
 * Created by PhpStorm.
 * User: quent
 * Date: 21/03/2019
 * Time: 13:55
 */

class CompteManagement
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

    public function add(Compte $mCompte) {
        $q = $this->_db->prepare('INSERT INTO compte (LOGIN, MOT_DE_PASSE, EMAIL, DATE_CREATION) VALUES (:login, :mdp, :email, :datecrea)');
        $q->bindValue(':login', $mCompte->getLogin());
        $q->bindValue(':mdp',$mCompte->getMdp());
        $q->bindValue(':email', $mCompte->getMail());
        $q->bindValue(':datecrea', $mCompte->getDate());

        $q->execute();
    }

    public function delete($id) {
        $q = $this->_db->prepare('DELETE FROM compte where ID_COMPTE = :id');
        $q->bindValue(':id',$id);
        $q->execute();
    }

    public function getCompte($id, compte $newObject) {
        $q = $this->_db->prepare('SELECT * FROM compte where ID_COMPTE =  :id');
        $q->bindValue(':id',$id);
        $data = $q->execute();
        while($data = $q->fetch()) {
             $newObject->getCompte($data);
        }
        return $newObject;
    }

    public function updateCompte(compte $mCompte) {
        $q = $this->_db->prepare('UPDATE compte SET LOGIN = :login, MOT_DE_PASSE = :mdp, EMAIL = :mail, DATE_CREATION= :datecrea WHERE ID_COMPTE = :id');
        $q->bindValue(':id',$mCompte->getId());
        $q->bindValue(':login', $mCompte->getLogin());
        $q->bindValue(':mdp',$mCompte->getMdp());
        $q->bindValue(':mail', $mCompte->getMail());
        $date = DateTime::createFromFormat("d/m/Y", $mCompte->getDate());
        $q->bindValue(':datecrea', $date->format('Y-m-d'));
        $data = $q->execute();
    }



}