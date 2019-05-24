<?php
//chdir('..');
//chdir('..');

//include('dbConnect.php');
//include_once('include/Compte.php');
//include_once('include/CompteManagement.php');

print_r($_POST);
print_r($_GET);
/*
$compte = new compte($_POST['login'],$_POST['password'],$_POST['email']);
$verif = $compte->verifObject();
foreach ($verif as $key => $value){
    if($verif[$key] != 1 ) {
        $errorInsert = 1;
    }
}
if(!isset($errorInsert)) {
    $base = new CompteManagement($db);
    $base->add($compte);
}*/
?>

