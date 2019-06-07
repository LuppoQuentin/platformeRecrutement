<?php
/**
 * Created by PhpStorm.
 * Compte: quent
 * Date: 15/03/2019
 * Time: 16:43
 */


if (!isset($_SESSION['start']))
{
    session_start();
    $_SESSION['start']=True;
}

include('../../templates/connexion.php');
include('../../templates/config.php');
include_once('../../class/Competence.php');
include_once('../../class/CompetenceManagement.php');
$competence = new competence($_POST['competence']);
$verif = $competence->verifObject();
foreach ($verif as $key => $value){
    if($verif[$key] != 1 ) {
        $errorInsert = 1;
    }
}


// mettre une erreur si il faut
if(!isset($errorInsert)) {
    $base = new CompetenceManagement($db);
    $base->add($competence);
}
include('../../site/Competence/page/competences.php');

