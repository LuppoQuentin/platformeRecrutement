<?php
chdir('..');
chdir('..');
include('dbConnect.php');
global $dbConnect;
print_r($dbConnect);
print_r($_POST);
$request = $dbConnect->prepare('SELECT id FROM admin WHERE email = :email AND mdp = :mdp');
$request->execute(array('email'=>$_POST['email'],'mdp'=>$_POST['mdp']));
$result = $request->fetch();

print_r($dbConnect);
print_r($result);

/*if ($result != null ) {
    header('location:index.php');
    $_SESSION['idConnectedUser'] = $result
}
else
{
   $error = true;
   include('./../../site/public.php');
}*/