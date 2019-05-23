<?php
/**
 * Created by PhpStorm.
 * Compte: quent
 * Date: 15/03/2019
 * Time: 16:43
 */
include('../../templates/config.php');
include_once('../../class/Compte.php');
include_once('../../class/CompteManagement.php');
$base = new CompteManagement($db);
$base->delete($_POST['ID_COMPTE']);
include('../../site/Compte/page/prive.php');
