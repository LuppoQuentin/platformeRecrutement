<?php
chdir('..');
chdir('..');
include('dbConnect.php');
include_once('include/Compte.php');
include_once('include/CompteManagement.php');

print_r($_POST);
die;
/*$compte = new compte("","","");
$compte->getCompte($_POST);
$verif = $compte->verifObject();
foreach ($verif as $key => $value){
    if($verif[$key] != 1 ) {
        $errorInsert = 1;
    }
}
if(!isset($errorInsert)) {
    $base = new CompteManagement($db);
    $base->updateCompte($entreprise);
    header('location:  ../../site/Compte/page/prive.php');
} else {
    $_POST['ID_COMPTE']=$entreprise->getId();
    include('../../site/Compte/page/modifComptePage.php');
}
*/
?>