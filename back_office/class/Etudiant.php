<?php
/**
 * Created by PhpStorm.
 * User: quent
 * Date: 23/05/2019
 * Time: 19:58
 */

class Etudiant
{
    private $idEtudiant;
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
        return $this->idEtudiant;
    }

    public function  getEtudiant(array $Etudiant) {
        $this->idEtudiant=$Etudiant['ID_ETUDIANT'];
        $this->idCompte=$Etudiant['ID_COMPTE'];
    }

}