<?php $title = 'Admin for Entreprise'; $path = getcwd();?><!DOCTYPE html>
<html lang="fr">
<head>

    <?php
    if(isset($errorInsert)) {
        if (!isset($_SESSION['start']))
        {
            session_start();
            $_SESSION['start']=True;
        }
        include($path.'/../../templates/head.php');
        include($path . '/../../templates/connexion.php');
    }
    else {
        if (!isset($_SESSION['start']))
        {
            session_start();
            $_SESSION['start']=True;
        }
        include($path . '/../../../templates/head.php');
        include($path . '/../../../templates/connexion.php');
    }
    ?>

    <meta charset="UTF-8">
    <title>Page Login</title>
    <base href="http://localhost/plateformeRecrutement/back_office/">
</head>
<?php
if(isset($errorInsert)){
    include($path.'/../../site/error/errorInsert.php');
    include($path . '/../gestion/entreprise/getEntreprise.php');
}
else {
    include($path . '/../../../gestion/entreprise/getEntreprise.php');
}
?>

<form method="POST" action="./gestion/entreprise/updateEntreprise.php">
	    <input type="hidden" name="ID_ENTREPRISE" value="<?php echo $entreprise->getId(); ?>">
		<a> Nom        : <input type="text" value="<?php echo $entreprise->getNom(); ?>" id="NOM" name="NOM" /></a><br />
		<a> Ville      : <input type="text" value="<?php echo $entreprise->getVille(); ?>" id="VILLE" name="VILLE"/> </a><br />
		<a> Nb_employe : <input type="text" value="<?php echo $entreprise->getMNbEmploye(); ?>" id="NOMBRE_EMPLOYE" name="NOMBRE_EMPLOYE"/></a><br />
        <button style="display: block;margin-left: 10px;" type="submit" class="btn btn-primary" name="submit">Valider</button>
</form>
<br />
<form method="POST" action="./site/Entreprise/page/entreprise.php">
    <button style="display: block;margin-left: 10px;" type="submit" class="btn btn-primary" name="Retour">Retour</button>
</html>
