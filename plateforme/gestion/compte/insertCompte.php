<?php
chdir('..');
chdir('..');

include('dbConnect.php');
include_once('include/Compte.php');
include_once('include/CompteManagement.php');

global $dbConnect;
$compte = new compte($_POST['login'],$_POST['password'],$_POST['email']);
$verif = $compte->verifObject();
foreach ($verif as $key => $value){
    if($verif[$key] != 1 ) {
        $errorInsert = 1;
        $_SESSION['REGISTER']['ERROR'] = $value;
    }
}

if(!isset($errorInsert)) {
    $base = new CompteManagement($dbConnect);
    $base->add($compte);
}

include_once("register.php");
?>

