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
$verif = $compte->verifObject();
foreach ($verif as $key => $value){
    if($verif[$key] != 1 ) {
        $errorInsert = 1;
    }
}
if(!isset($errorInsert)) {
    $base = new CompteManagement($db);
    $base->add($compte);
}
include('../../site/Compte/page/prive.php');

