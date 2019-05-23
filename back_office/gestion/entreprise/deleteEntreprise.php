<?php
/**
 * Created by PhpStorm.
 * Compte: quent
 * Date: 15/03/2019
 * Time: 16:43
 */
include('../../templates/config.php');
include_once('../../class/Entreprise.php');
include_once('../../class/EntrepriseManagement.php');
$base = new EntrepriseManagement($db);
$base->delete($_POST['ID_ENTREPRISE']);
include('../../site/Entreprise/page/entreprise.php');
