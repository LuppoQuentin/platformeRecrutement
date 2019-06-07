<?php
/**
 * Created by PhpStorm.
 * User: quent
 * Date: 04/06/2019
 * Time: 14:34
 */

class Competence
{
    private $idCompetence;
    private $competence;


    public function __construct( $mCompetence)
    {
        $this->competence=$mCompetence;
    }

     function getIdCompetence()
    {
        return $this->idCompetence;
    }

    public function getCompetence(array $mCompetence){
        $this->competence=$mCompetence['ID_COMPETENCE'];
    }

    public function verifCompetence() {
        if (strlen($this->competence) < 0) {
            return false;
        }

        return true;
    }

    public function verifObject(){
        $valid = array(
            'competence' => "Problème avec la compétence."
        );
        if($this->verifCompetence()){
            $valid['competence'] = 1;
        }
        return $valid;
    }
}