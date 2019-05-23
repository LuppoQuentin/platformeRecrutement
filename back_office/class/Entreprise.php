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

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->Ville;
    }

    /**
     * @return mixed
     */
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

}