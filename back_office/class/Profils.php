<?php
/**
 * Created by PhpStorm.
 * User: quent
 * Date: 06/06/2019
 * Time: 09:40
 */

class Profils
{
    private $id;
    private $nom;
    private $prenom;
    private $datedenaissance;
    private $ville;
    private $num;

    public function __construct($mNom,$mPrenom,$mDatedenaissance,$mVille,$mNum)
    {
        $this->nom=$mNom;
        $this->prenom=$mPrenom;
        $this->datedenaissance=$mDatedenaissance;
        $this->ville=$mVille;
        $this->num=$mNum;
    }
    /**
    * @return mixed
    */
    public function getId()
    {
        return $this->id;
    }/**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }/**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }/**
     * @return mixed
     */
    public function getDatedenaissance()
    {
        return $this->datedenaissance;
    }/**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }/**
     * @return mixed
     */
    public function getNum()
    {
        return $this->num;
    }

    public function getProfils(array $mProfils) {
        $this->id=$mProfils['ID_PROFILS'];
        $this->nom=$mProfils['NOM'];
        $this->prenom=$mProfils['PRENOM'];
        $this->datedenaissance=$mProfils['DATE_NAISSANCE'];
        $this->ville=$mProfils['VILLE'];
        $this->num=$mProfils['NUMERO_TELEPHONE'];
    }

    public function verifNom() {
        if (strlen($this->nom) < 3) {
            return false;
        }

        return true;
    }

    public function verifPrenom() {
        if (strlen($this->prenom) < 3) {
            return false;
        }

        return true;
    }

    public function verifBirthDate() {
        if (! preg_match('/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/', $this->birthDate)) {
            return false;
        }

        return true;
    }

    public function verifObject() {
        $valid = array(
            'nom' => "Problème avec le nom.",
            'prenom' => "Problème avec le prénom.",
            'mail' => "Problème avec le mail.",
            'mdp' => "Problème avec le mot de passe.",
            'birthDate' => "Problème avec la date de naissance.",
        );
        if ($this->verifNom()) {
            $valid['nom'] = 1;
        }
        if ($this->verifPrenom()) {
            $valid['prenom'] = 1;
        }
        if ($this->verifBirthDate()) {
            $valid['birthDate'] = 1;
        }

        return $valid;
    }




}