<?php
/**
 * Created by PhpStorm.
 * User: quent
 * Date: 04/06/2019
 * Time: 14:28
 */

class Recruteur
{
    private $idRecruteur;
    private $idCompte;


    public function __construct($mIdCompte)
    {
        $this->idCompte=$mIdCompte;
    }

    public function getIdCompte()
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