<?php
/**
 * Created by PhpStorm.
 * User: quent
 * Date: 21/03/2019
 * Time: 22:54
 */
$path = $_SERVER["DOCUMENT_ROOT"];
include($path.'/test/admin/templates/config.php');
include_once($path.'/test/admin/class/Compte.php');
include_once($path.'/test/admin/class/CompteManagement.php');
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
    header('location: http://localhost/test/admin/site/prive.php');
} else {
    $_POST['ID_COMPTE']=$compte->getId();
    include($path.'/test/admin/site/modifComptePage.php');
}
