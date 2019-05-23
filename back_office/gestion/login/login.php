<?php
/**
 * Created by PhpStorm.
 * Compte: quent
 * Date: 15/03/2019
 * Time: 09:22
 */
include('../templates/config.php');
$request = $db->prepare('SELECT id FROM admin WHERE login = :login AND mdp = :mdp');
$request->execute(array('login'=>$_POST['login'],'mdp'=>$_POST['mdp']));
$result = $request->fetch();


if ($result != null ) {
    header('location:./../site/page_pack_office/menu.php');
}
else
{
   $error = true;
   include('./../site/public.php');
}