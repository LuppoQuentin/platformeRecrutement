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
        $q->bindValue(':mdp', $mCompte->getMdp());
        $q->bindValue(':email', $mCompte->getMail());
        $q->bindValue(':datecrea', $mCompte->getDate());

        $q->execute();
    }

    public function delete($id) {
        $q = $this->_db->prepare('DELETE FROM compte where ID_COMPTE = :id');
        $q->bindValue(':id',$id);
        $q->execute();
    }




}