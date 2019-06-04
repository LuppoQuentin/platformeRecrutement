<?php
/**
 * Created by PhpStorm.
 * User: quent
 * Date: 23/05/2019
 * Time: 20:03
 */

class Entreprise
{
    private $id;
    private $Nom;
    private $Ville;
    private $Nbemploye;

    public function __construct($mNom,$mVille,$mNbEmploye)
    {
        $this->Nom = $mNom;
        $this->Ville = $mVille;
        $this->Nbemploye = $mNbEmploye;
    }

    public function getNom()
    {
        return $this->Nom;
    }

    public function getVille()
    {
        return $this->Ville;
    }

    public function getMNbEmploye()
    {
        return $this->Nbemploye;
    }

    public function getId(){
        return $this->id;
    }

    public function getEntreprise(array $mEntreprise)
    {
        $this->id=$mEntreprise['ID_ENTREPRISE'];
        $this->Nom=$mEntreprise['NOM'];
        $this->Ville=$mEntreprise['VILLE'];
        $this->Nbemploye=$mEntreprise['NOMBRE_EMPLOYE'];
    }

    public function verifNom()
    {
        if (strlen($this->Nom) < 3) {
            return false;
        }
        return true;
    }

    public function verifVille()
    {
        if (strlen($this->Ville) < 3) {
            return false;
        }
        return true;
    }

    public function verifNbEmploye()
    {
        if (($this->Nbemploye) < 1){
            return false;
        }
        return true;
    }

    public function verifObject()
    {
        $valid = array(
            'Nom' => "Problème avec le nom d'entreprise.",
            'Ville' => "Problème avec le nom de la ville.",
            'Nbemploye' => "Problème avec le nombre d'employé.",
        );

        if ($this->verifNom()) {
            $valid['Nom'] = 1;
        }
        if ($this->verifVille()) {
            $valid['Ville'] = 1;
        }
        if ($this->verifNbEmploye()) {
            $valid['Nbemploye'] = 1;
        }

        return $valid;
    }

}