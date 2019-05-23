<?php
/**
 * Created by PhpStorm.
 * User: quent
 * Date: 21/03/2019
 * Time: 22:54
 */
$path = getcwd();
include($path.'../../../templates/config.php');
include_once($path.'../../../class/Compte.php');
include_once($path.'../../../class/CompteManagement.php');
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
    echo $path;
    header('location:  ../../site/Compte/page/prive.php');
} else {
    $_POST['ID_COMPTE']=$compte->getId();
    include($path.'../../../site/modifComptePage.php');
}
