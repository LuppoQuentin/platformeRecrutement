<?php $title = 'Admin for Compte'; $path = dirname(__DIR__);?><!DOCTYPE html>
<html lang="fr">
<head>
    <?php include($path . '/templates/head.php'); ?>
    <meta charset="UTF-8">
    <title>Page Login</title>
    <base href="http://localhost/test/admin/">
</head>
<?php
// Connexion à la base.
if(isset($errorInsert)){
    include($path . '/page/errorInsert.php');}
include($path . '/templates/config.php');
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
			<form method="post" action="./page/modifComptePage.php">
				<input type="hidden" name="ID_COMPTE" value="<?php echo $data['ID_COMPTE']; ?>"><input type="submit" value="Modifier" id="Modifier" />
			</form>
		</td>
		<td>
			<form method="post" action="./gestion/compte/deleteCompte.php">
				<input type="hidden" name="ID_COMPTE" value="<?php echo $data['ID_COMPTE']; ?>"><input type="submit" value="Supprimer" id="Supprimer" />
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
        <form method="post" action="./gestion/compte/insertCompte.php">
            <table>
                <tr><td>Email : </td><td><input type="text" name="email"/></td></tr>
                <tr><td>Login : </td><td><input name="login"/></td><td>Minimum 3 Caractère</td></tr>
                <tr><td>Password : </td><td><input type="password" name="password" /></td><td>Minimum 8 Caractères (1maj, 1chiffre, 1caractere special)</td></tr>
                <tr><td>Saisir tous les champs</td><td><input type="submit" value="Valider" /><td></tr>
            </table>
        </form>
    </body>
</html>