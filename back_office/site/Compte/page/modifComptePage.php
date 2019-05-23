<?php $title = 'Admin for Compte'; $path = $_SERVER["DOCUMENT_ROOT"];?><!DOCTYPE html>
<html lang="fr">
<head>
    <?php include($path.'/test/admin/templates/head.php') ; ?>
    <meta charset="UTF-8">
    <title>Page Login</title>
    <base href="http://localhost/test/admin/">
</head>
<?php
include($path . '/test/admin/gestion/compte/getCompte.php');
if(isset($errorInsert)){include($path.'/test/admin/site/errorInsert.php');}
?>

<form method="POST" action="./gestion/compte/updateCompte.php">
	    <input type="hidden" name="ID_COMPTE" value="<?php echo $compte->getId(); ?>">
        <input type="hidden" value="<?php $datecrea = DateTime::createFromFormat("Y-m-d", $compte->getDate()); echo $datecrea->format('d/m/Y'); ?>" name="DATE_CREATION"/>
		<a>Login : <input type="text" value="<?php echo $compte->getLogin(); ?>" id="login" name="LOGIN" /> Minimum 3 Caractères</a><br />
		<a>Mail  : <input type="text" value="<?php echo $compte->getMail(); ?>" id="mail" name="EMAIL"/> </a><br />
		<a>Password : <input type="text" value="<?php echo $compte->getMdp(); ?>" id="password" name="MOT_DE_PASSE"/> Minimum 8 Caractères (1maj, 1chiffre, 1caractere special)</a><br />
        <input type="submit" value="Valider"/>
</form>
<form method="POST" action="./page/prive.php">
    <input type="submit" value="Retour"/>
</form>