<?php
/**
 * Created by PhpStorm.
 * User: quent
 * Date: 21/03/2019
 * Time: 22:54
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
$comptence = new competence("");
$compte->getComptence($_POST);
$verif = $compte->verifObject();
foreach ($verif as $key => $value){
    if($verif[$key] != 1 ) {
        $errorInsert = 1;
    }
}
if(!isset($errorInsert)) {
    $base = new CompetenceManagement($db);
    $base->updateCompetence($competence);
    unset($_SESSION['start']);
    // le header ici fait que la session n'est lus active apres
    header('location:  ../../site/Competence/page/comptences.php');
    exit();
} else {
    $_POST['ID_COMPETENCE']=$competence->getId();
    include('../../site/Competence/page/competences.php');
}
