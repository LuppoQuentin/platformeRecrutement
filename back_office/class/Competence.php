<?php
/**
 * Created by PhpStorm.
 * User: quent
 * Date: 04/06/2019
 * Time: 14:34
 */

class Competence
{
    private $idCompetennce;
    private $nom;


    public function __construct($mNom)
    {
        $this->nom=$mNom;
    }

    public function getIdCompetence()
    {
        return $this->idCompte;
    }

    public function getIdEtudiant(){
        return $this->idRecruteur;
    }

    public function  getRecruteur(array $recruteur) {
        $this->idRecruteur=$recruteur['ID_RECRUTEUR'];
        $this->idCompte=$recruteur['ID_COMPTE'];
    }
}