<?php
/**
 * Created by PhpStorm.
 * Compte: quent
 * Date: 15/03/2019
 * Time: 16:24
 */

class Compte
{
    private $id;
    private $login;
    private $mail;
    private $mdp;
    private $datecrea;

    public function __construct($mLogin,$mMdp,$mMail)
    {
        $this->login=$mLogin;
        $this->mdp=$mMdp;
        $this->mail=$mMail;
        $this->setDate();
    }

    public function  getCompte(array $mCompte) {
        $this->id=$mCompte['ID_COMPTE'];
        $this->login=$mCompte['LOGIN'];
        $this->mdp=$mCompte['MOT_DE_PASSE'];
        $this->mail=$mCompte['EMAIL'];
        $this->datecrea=$mCompte['DATE_CREATION'];
    }

    public function getId(){
        return $this->id;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getDate() {
        return $this->datecrea;
    }

    public function getMail() {
        return $this->mail;
    }

    public function setMail($args) {
        $this->mail = $args;
    }

    public function getMdp() {
        return $this->mdp;
    }

    public function setMdp($args) {
        $this->mdp = $args;
    }

    public function verifLogin() {
        if (strlen($this->login) < 3) {
            return false;
        }

        return true;
    }


    public function verifMail() {
        if (strlen($this->mail) > 0) {
            if (! preg_match('/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/', $this->mail)) {
                return false;
            }
        } else {
            return false;
        }

        return true;
    }


    public function verifMdp() {
        if (strlen($this->mdp) >= 8) {
            if (! preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $this->mdp)) {
                return false;
            }
        } else {
            $this->mdp=crypt($this->mdp,"CRYPT_SHA256");
            return false;
        }

        return true;
    }


    public function verifObject() {
        $valid = array(
            'login' => "Problème avec le login.",
            'mail' => "Problème avec le mail.",
            'mdp' => "Problème avec le mot de passe.",
        );
        if ($this->verifLogin()) {
            $valid['login'] = 1;
        }
        if ($this->verifMail()) {
            $valid['mail'] = 1;
        }
        if ($this->verifMdp()) {
            $valid['mdp'] = 1;
        }

        return $valid;
    }

    public function setDate() {
        $this->datecrea = date('Y-m-d');
    }


}