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
include_once('../../class/Compte.php');
include_once('../../class/CompteManagement.php');
$compte = new compte($_POST['login'],$_POST['password'],$_POST['email']);
$base = new CompteManagement($db);
$verif = $compte->verifObject();
if(isset($_POST['recruteur']) && isset($_POST['etudiant'])) {
    $verif['type']='Problème avec le type';
} elseif (isset($_POST['recruteur'])) {
    $verif['type']=1;
} elseif (isset($_POST['etudiant'])) {
    $verif['type']=1;
} else {
    $verif['type']='Problème avec le type';
}
if($base->verifMailExist($_POST['email'])) {
    $verif['mail']='duplicate mail ! ';
}
if($base->verifLoginExist($_POST['login'])) {
    $verif['login']='duplicate login ! ';
}
foreach ($verif as $key => $value){
    if($verif[$key] != 1 ) {
        $errorInsert = 1;
    }
}
if(!isset($errorInsert)) {
    $base->add($compte);
    $id = $base->returnLastId();
    if(isset($_POST['recruteur'])) {
        include_once('../../class/Recruteur.php');
        include_once('../../class/RecruteurManagement.php');
        $datarecru = new RecruteurManagement($db);
        $recruteur = new Recruteur($id);
        $datarecru->add($recruteur);
    } else {
        include_once('../../class/Etudiant.php');
        include_once('../../class/EtudiantManagement.php');
        $dataetud = new EtudiantManagement($db);
        $etudiant = new Etudiant($id);
        $dataetud->add($etudiant);
    }
}
include('../../site/Compte/page/prive.php');

