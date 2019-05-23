<?php
/**
 * Created by PhpStorm.
 * Compte: quent
 * Date: 15/03/2019
 * Time: 16:43
 */

$path = $_SERVER["DOCUMENT_ROOT"];
include($path.'/test/admin/templates/config.php');
include_once($path.'/test/admin/class/Compte.php');
include_once($path.'/test/admin/class/CompteManagement.php');
$base = new CompteManagement($db);
$compte = new compte("","","");
$compte = $base->getCompte($_POST['ID_COMPTE'],$compte);
