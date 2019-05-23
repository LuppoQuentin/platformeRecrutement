<?php
/**
 * Created by PhpStorm.
 * User: quent
 * Date: 21/03/2019
 * Time: 22:54
 */
$path = getcwd();
include($path.'../../../templates/config.php');
include_once($path.'../../../class/Entreprise.php');
include_once($path.'../../../class/EntrepriseManagement.php');
$entreprise = new entreprise("","","");
$entreprise->getEntreprise($_POST);
// verif mettre une erreur

if(!isset($errorInsert)) {
    $base = new EntrepriseManagement($db);
    $base->updateEntreprise($entreprise);
    header('location:  ../../site/Entreprise/page/entreprise.php');
} else {
    $_POST['ID_ENTREPRISE']=$entreprise->getId();
    include($path.'../../../site/modifComptePage.php');
}
