<?php $title = 'Admin for Compte'; $path = dirname(__DIR__);?><!DOCTYPE html>
<html lang="fr">
<head>
    <?php include($path . '/../../templates/head.php'); ?>
    <meta charset="UTF-8">
    <title>Page Login</title>
    <base href="http://localhost/test/admin/">
</head>
<?php
// Connexion à la base.
if(isset($errorInsert)){
    include($path . '/../../site/Compte/error/errorInsert.php');}
include($path . '/../../templates/config.php');
$request = $db->prepare("select * from compte");
$data = $request->execute();
?>
	<table class="table">
		<caption>Liste des comptes</caption>
		<thead>
			<tr>
				<th>Id</th>
				<th>Email</th>
				<th>Login</th>
				<th>password</th>
				<th>Date_creation</th>
			</tr>
		</thead>
	<tbody>
<?php
    while($data = $request->fetch()) {
	    ?>
	<tr>
		<td><?php echo $data['ID_COMPTE']; ?></td>
		<td><?php echo $data['EMAIL']; ?></td>
		<td><?php echo $data['LOGIN']; ?></td>
		<td><?php echo $data['MOT_DE_PASSE']; ?></td>
		<td><?php echo $data['DATE_CREATION']; ?></td>
		<td>
			<form method="post" action="./back_office/site/Compte/page/modifComptePage.php">
				<input type="hidden" name="ID_COMPTE" value="<?php echo $data['ID_COMPTE']; ?>"><button style="display: block;" type="submit" class="btn btn-primary" name="modifer">Modifier</button>
			</form>
		</td>
		<td>
			<form method="post" action="./back_office/gestion/compte/deleteCompte.php">
				<input type="hidden" name="ID_COMPTE" value="<?php echo $data['ID_COMPTE']; ?>"><button style="display: block;" type="submit" class="btn btn-primary" name="supprimer">Supprimer</button>
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
        <form method="post" action="./back_office/gestion/compte/insertCompte.php">
            <table>
                <tr><td>Email : </td><td><input type="text" name="email"/></td></tr>
                <tr><td>Login : </td><td><input name="login"/></td><td>Minimum 3 Caractère</td></tr>
                <tr><td>Password : </td><td><input type="password" name="password" /></td><td>Minimum 8 Caractères (1maj, 1chiffre, 1caractere special)</td></tr>
                <tr><td>Saisir tous les champs</td><td><button style="display: block;" type="submit" class="btn btn-primary" name="submit">Valider</button><td></tr>
            </table>
        </form>
        <form action="./back_office/site/menu.php" method="post">
            <button style="float:right ;margin-right:20px;" type="submit" class="btn btn-primary" name="Menu">Retour menu</button>
        </form>
    </body>
</html>