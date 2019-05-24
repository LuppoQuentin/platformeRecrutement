<?php $title = 'Admin for Compte'; $path = getcwd();?><!DOCTYPE html>
<html lang="fr">
<head>
    <?php include($path.'/../../../templates/head.php') ; ?>
    <meta charset="UTF-8">
    <title>Page Login</title>
</head>
<?php
include($path . '/../../../gestion/entreprise/getEntreprise.php');
if(isset($errorInsert)){include($path.'/../../../site/error/errorInsert.php');}
?>

<form method="POST" action="../../../gestion/entreprise/updateEntreprise.php">
	    <input type="hidden" name="ID_ENTREPRISE" value="<?php echo $compte->getId(); ?>">
		<a> Nom        : <input type="text" value="<?php echo $compte->getNom(); ?>" id="NOM" name="NOM" /></a><br />
		<a> Ville      : <input type="text" value="<?php echo $compte->getVille(); ?>" id="VILLE" name="VILLE"/> </a><br />
		<a> Nb_employe : <input type="text" value="<?php echo $compte->getMNbEmploye(); ?>" id="NOMBRE_EMPLOYE" name="NOMBRE_EMPLOYE"/></a><br />
        <button style="display: block;margin-left: 10px;" type="submit" class="btn btn-primary" name="submit">Valider</button>
</form>
<br />
<form method="POST" action="../../../site/Entreprise/page/entreprise.php">
    <button style="display: block;margin-left: 10px;" type="submit" class="btn btn-primary" name="Retour">Retour</button>
</form>
