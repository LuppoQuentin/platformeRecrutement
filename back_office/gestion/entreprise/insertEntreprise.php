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
include('/../../templates/config.php');
include_once('/../../class/Entreprise.php');
include_once('/../../class/EntrepriseManagement.php');
$entreprise = new entreprise($_POST['nom'],$_POST['ville'],$_POST['nb_employe']);
$verif = $entreprise->verifObject();
foreach ($verif as $key => $value){
    if($verif[$key] != 1 ) {
        $errorInsert = 1;
    }
}

// mettre une erreur si il faut
if(!isset($errorInsert)) {
    $base = new EntrepriseManagement($db);
    $base->add($entreprise);
}
include('../../site/Entreprise/page/entreprise.php');

