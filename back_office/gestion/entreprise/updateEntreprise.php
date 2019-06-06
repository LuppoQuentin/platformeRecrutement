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
include_once('../../class/Entreprise.php');
include_once('../../class/EntrepriseManagement.php');
$entreprise = new entreprise("","","");
$entreprise->getEntreprise($_POST);
$verif = $entreprise->verifObject();
foreach ($verif as $key => $value){
    if($verif[$key] != 1 ) {
        $errorInsert = 1;
    }
}

if(!isset($errorInsert)) {
    $base = new EntrepriseManagement($db);
    $base->updateEntreprise($entreprise);
    unset($_SESSION['start']);
    // le header ici fait que la session n'est lus active apres
    header('location:  ../../site/Entreprise/page/entreprise.php');
    exit();
} else {
    $_POST['ID_ENTREPRISE']=$entreprise->getId();
    include('../../site/Entreprise/page/modifEntreprisePage.php');
}
