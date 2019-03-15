<?php
/**
 * Created by PhpStorm.
 * User: quent
 * Date: 15/03/2019
 * Time: 09:22
 */

$db = new PDO('mysql:host=localhost;dbname=plateformerecrutement','root','');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$request = $db->prepare('SELECT id FROM admin WHERE login = :login AND mdp = :mdp');
$request->execute(array('login'=>$_POST['login'],'mdp'=>$_POST['mdp']));
$result = $request->fetch();


if ($result != null ) {
   include('./../page/prive.php');
}
else
{
   $error = true;
   include('./../page/public.php');
}