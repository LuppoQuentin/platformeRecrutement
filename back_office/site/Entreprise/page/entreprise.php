<?php $title = 'Admin for Compte'; $path = dirname(__DIR__);$clecrypt="sha256"?><!DOCTYPE html>
<html lang="fr">
<head>
    <?php include($path . '/../../templates/head.php'); ?>
    <meta charset="UTF-8">
    <title>Page Login</title>
    <base href="http://localhost/plateformeRecrutement/back_office/">
</head>
<?php
// Connexion à la base.
if(isset($errorInsert)){
    include($path . '/../../site/error/errorInsert.php');
    include($path.'/../templates/config.php');
}
else{
    include($path.'/../../templates/config.php');
}
$request = $db->prepare("select * from entreprise");
$data = $request->execute();
?>
	<table class="table">
		<caption>Liste des comptes</caption>
		<thead>
			<tr>
				<th>Nom</th>
				<th>Ville</th>
				<th>nb_employe</th>
			</tr>
		</thead>
	<tbody>
<?php
    while($data = $request->fetch()) {
	    ?>
	<tr>
		<td><?php echo $data['NOM']; ?></td>
		<td><?php echo $data['VILLE']; ?></td>
		<td><?php echo $data['NOMBRE_EMPLOYE']; ?></td>
		<td>
			<form method="post" action="./site/Entreprise/page/modifEntreprisePage.php">
				<input type="hidden" name="ID_ENTREPRISE" value="<?php echo $data['ID_ENTREPRISE']; ?>"><button style="display: block;" type="submit" class="btn btn-primary" name="modifer">Modifier</button>
			</form>
		</td>
		<td>
			<form method="post" action="./gestion/entreprise/deleteEntreprise.php">
				<input type="hidden" name="ID_ENTREPRISE" value="<?php echo $data['ID_ENTREPRISE']; ?>"><button style="display: block;" type="submit" class="btn btn-primary" name="supprimer">Supprimer</button>
			</form>
		</td>
	<?php
    	}
		$request->closeCursor();
    ?>
    </tbody>
    </table>
</table class="table">
    <body>
        <form method="post" action="./gestion/entreprise/insertEntreprise.php">
            <table>
                <tr><td>Nom : </td><td><input type="text" name="nom"/></td></tr>
                <tr><td>Ville : </td><td><input name="ville"/></td><td></td></tr>
                <tr><td>Nb_employe : </td><td><input type="text" name="nb_employe" /></td><td></td></tr>
                <tr><td>Saisir tous les champs</td><td><button style="display: block;" type="submit" class="btn btn-primary" name="submit">Valider</button><td></tr>
            </table>
        </form>
        <form action="./site/menu.php" method="post">
            <button style="float:right ;margin-right:20px;" type="submit" class="btn btn-primary" name="Menu">Retour menu</button>
        </form>
    </body>
</html>