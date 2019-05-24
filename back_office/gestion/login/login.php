<?php
/**
 * Created by PhpStorm.
 * Compte: quent
 * Date: 15/03/2019
 * Time: 09:22
 */
include('./../../templates/config.php');
$request = $db->prepare('SELECT id FROM admin WHERE login = :login AND mdp = :mdp');
$request->execute(array('login'=>$_POST['login'],'mdp'=>crypt($_POST['mdp'],"CRYPT_SHA256")));
$result = $request->fetch();


if ($result != null ) {
    header('location:./../../site/menu.php');
}
else
{
   $error = true;
   include('./../../site/public.php');
}