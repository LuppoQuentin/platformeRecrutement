<?php
/**
 * Created by PhpStorm.
 * Compte: quent
 * Date: 15/03/2019
 * Time: 16:43
 */

$path = getcwd();
include($path.'/../../../templates/config.php');
include_once($path.'/../../../class/Compte.php');
include_once($path.'/../../../class/CompteManagement.php');
$base = new CompteManagement($db);
$compte = new compte("","","");
$compte = $base->getCompte($_POST['ID_COMPTE'],$compte);
