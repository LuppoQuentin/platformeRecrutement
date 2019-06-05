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
include_once('../../class/Compte.php');
include_once('../../class/CompteManagement.php');
$compte = new compte("","","");
$compte->getCompte($_POST);
$verif = $compte->verifObject();
foreach ($verif as $key => $value){
    if($verif[$key] != 1 ) {
        $errorInsert = 1;
    }
}
if(!isset($errorInsert)) {
    $base = new CompteManagement($db);
    $base->updateCompte($compte);
    unset($_SESSION['start']);
    // le header ici fait que la session n'est lus active apres
    header('location:  ../../site/Compte/page/prive.php');
    exit();
} else {
    $_POST['ID_COMPTE']=$compte->getId();
    include('../../site/Compte/page/modifComptePage.php');
}
