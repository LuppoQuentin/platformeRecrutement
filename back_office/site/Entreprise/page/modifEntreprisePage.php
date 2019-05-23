<?php $title = 'Admin for Compte'; $path = getcwd();?><!DOCTYPE html>
<html lang="fr">
<head>
    <?php include($path.'/../../../templates/head.php') ; ?>
    <meta charset="UTF-8">
    <title>Page Login</title>
    <base href="http://localhost/test/admin/">
</head>
<?php
include($path . '/../../../gestion/entreprise/getEntreprise.php');
if(isset($errorInsert)){include($path.'/../../../site/error/errorInsert.php');}
?>

<form method="POST" action="./back_office/gestion/entreprise/updateEntreprise.php">
	    <input type="hidden" name="ID_ENTREPRISE" value="<?php echo $entreprise->getId(); ?>">
		<a> Nom        : <input type="text" value="<?php echo $entreprise->getNom(); ?>" id="NOM" name="NOM" /></a><br />
		<a> Ville      : <input type="text" value="<?php echo $entreprise->getVille(); ?>" id="VILLE" name="VILLE"/> </a><br />
		<a> Nb_employe : <input type="text" value="<?php echo $entreprise->getMNbEmploye(); ?>" id="NOMBRE_EMPLOYE" name="NOMBRE_EMPLOYE"/></a><br />
        <button style="display: block;margin-left: 10px;" type="submit" class="btn btn-primary" name="submit">Valider</button>
</form>
<br />
<form method="POST" action="./back_office/site/Entreprise/page/entreprise.php">
    <button style="display: block;margin-left: 10px;" type="submit" class="btn btn-primary" name="Retour">Retour</button>
</form>
