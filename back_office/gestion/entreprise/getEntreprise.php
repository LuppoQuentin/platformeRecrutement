<?php
/**
 * Created by PhpStorm.
 * Compte: quent
 * Date: 15/03/2019
 * Time: 16:43
 */

$path = getcwd();
if(isset($errorInsert)){
    include($path.'/../../templates/config.php');
    include_once($path.'/../../class/Entreprise.php');
    include_once($path.'/../../class/EntrepriseManagement.php');
}
else {
    include($path.'/../../../templates/config.php');
    include_once($path.'/../../../class/Entreprise.php');
    include_once($path.'/../../../class/EntrepriseManagement.php');
}
$base = new EntrepriseManagement($db);
$entreprise = new entreprise("","","");
$entreprise = $base->getEntreprise($_POST['ID_ENTREPRISE'],$entreprise);
