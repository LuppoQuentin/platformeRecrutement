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
// ici pour delete id etud ou id recru
include_once('../../class/Etudiant.php');
include_once('../../class/EtudiantManagement.php');
include_once('../../class/Recruteur.php');
include_once('../../class/RecruteurManagement.php');

$baseEtud = new EtudiantManagement($db);
if ($baseEtud->existId($_POST['ID_COMPTE'])) {
    $baseEtud->deleteWithIdCompte($_POST['ID_COMPTE']);
}
else {
    $baseRecu = new RecruteurManagement($db);
    $baseRecu->deleteWithIdCompte($_POST['ID_COMPTE']);
}
