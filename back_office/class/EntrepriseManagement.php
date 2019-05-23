<?php
/**
 * Created by PhpStorm.
 * User: quent
 * Date: 23/05/2019
 * Time: 20:12
 */

class EntrepriseManagement
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

    public function add(entreprise $mEntreprise) {
        $q = $this->_db->prepare('INSERT INTO entreprise (NOM, VILLE, NOMBRE_EMPLOYE) VALUES (:nom, :ville, :nombre_employe)');
        $q->bindValue(':nom', $mEntreprise->getNom());
        $q->bindValue(':ville',$mEntreprise->getVille());
        $q->bindValue(':nombre_employe',$mEntreprise->getMNbEmploye());

        $q->execute();
    }

    public function delete($id) {
        $q = $this->_db->prepare('DELETE FROM entreprise where ID_ENTREPRISE = :id');
        $q->bindValue(':id',$id);
        $q->execute();
    }

    public function getEntreprise($id, entreprise $newObject) {
        $q = $this->_db->prepare('SELECT * FROM entreprise where ID_ENTREPRISE =  :id');
        $q->bindValue(':id',$id);
        $data = $q->execute();
        while($data = $q->fetch()) {
            $newObject->getEntreprise($data);
        }
        return $newObject;
    }

    public function updateEntreprise(entreprise $mEntreprise) {
        $q = $this->_db->prepare('UPDATE entreprise SET NOM = :nom, VILLE = :ville, NOMBRE_EMPLOYE = :nombre_employe WHERE ID_ENTREPRISE = :id');
        $q->bindValue(':id',$mEntreprise->getId());
        $q->bindValue(':nom',$mEntreprise->getNom());
        $q->bindValue(':ville',$mEntreprise->getVille());
        $q->bindValue(':nombre_employe', $mEntreprise->getMNbEmploye());
        $data = $q->execute();
    }

}