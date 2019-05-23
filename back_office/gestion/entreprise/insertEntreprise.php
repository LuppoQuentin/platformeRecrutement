<?php
/**
 * Created by PhpStorm.
 * Compte: quent
 * Date: 15/03/2019
 * Time: 16:43
 */
$path = getcwd();;
include($path.'/../../templates/config.php');
include_once($path.'/../../class/Entreprise.php');
include_once($path.'/../../class/EntrepriseManagement.php');
$entreprise = new entreprise($_POST['nom'],$_POST['ville'],$_POST['nb_employe']);
// mettre une erreur si il faut
if(!isset($errorInsert)) {
    $base = new EntrepriseManagement($db);
    $base->add($entreprise);
}
include('../../site/Entreprise/page/entreprise.php');

