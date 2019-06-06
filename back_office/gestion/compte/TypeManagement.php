<?php
/**
 * Created by PhpStorm.
 * User: quent
 * Date: 06/06/2019
 * Time: 10:15
 */
if(isset($errorInsert)){
    include($path.'/../templates/config.php');
    include_once($path.'/../class/Etudiant.php');
    include_once($path.'/../class/EtudiantManagement.php');
    include_once($path.'/../class/Recruteur.php');
    include_once($path.'/../class/RecruteurManagement.php');
}
else {
    include($path.'/../../templates/config.php');
    include_once($path.'/../../class/Etudiant.php');
    include_once($path.'/../../class/EtudiantManagement.php');
    include_once($path.'/../../class/Recruteur.php');
    include_once($path.'/../../class/RecruteurManagement.php');
}


$base = new EtudiantManagement($db);
$base2 = new RecruteurManagement($db);
if ($base->existId($data['ID_COMPTE'])) {
    $data['TYPE'] = "etudiant";
}
else {
    $data['TYPE'] = "recruteur";
}
