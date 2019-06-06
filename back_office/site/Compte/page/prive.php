<?php $title = 'Admin for Compte'; $path = dirname(__DIR__);$clecrypt="sha256"?><!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    if (!isset($_SESSION['start']))
    {
        session_start();
        $_SESSION['start']=True;
    }
    include($path . '/../../templates/head.php');
    include($path . '/../../templates/connexion.php');
    ?>
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
$request = $db->prepare("select * from compte");
$data = $request->execute();
?>
	<table class="table">
		<caption>Liste des comptes</caption>
		<thead>
			<tr>
				<th>Email</th>
				<th>Login</th>
				<th>password</th>
				<th>Date_creation</th>
                <th>Type</th>
			</tr>
		</thead>
	<tbody>
<?php
    while($data = $request->fetch()) {
	    ?>
	<tr>
		<td><?php echo $data['EMAIL']; ?></td>
		<td><?php echo $data['LOGIN']; ?></td>
		<td><?php echo $data['MOT_DE_PASSE']; ?></td>
		<td><?php echo $data['DATE_CREATION']; ?></td>
        <?php
        if(isset($errorInsert)) {
            include($path.'/../gestion/compte/TypeManagement.php');
        } else {
            include($path.'/../../gestion/compte/TypeManagement.php');
        }
        ?>
        <td><?php echo $data['TYPE']; ?></td>
		<td>
			<form method="post" action="./site/Compte/page/modifComptePage.php">
				<input type="hidden" name="ID_COMPTE" value="<?php echo $data['ID_COMPTE']; ?>"><button style="display: block;" type="submit" class="btn btn-primary" name="modifer">Modifier</button>
			</form>
		</td>
		<td>
			<form method="post" action="./gestion/compte/deleteCompte.php">
				<input type="hidden" name="ID_COMPTE" value="<?php echo $data['ID_COMPTE']; ?>"><button style="display: block;" type="submit" class="btn btn-primary" name="supprimer">Supprimer</button>
			</form>
		</td>
	<?php
    	}
		$request->closeCursor();
    ?>
    </tbody>
    </table>
    <body>
        <form method="post" action="./gestion/compte/insertCompte.php">
                <div class="form" >
                    <div class="form">
                        <label for="email">Email :</label>
                        <input style="width: 200px;" type="text" class="form-control" id="email" name="email" aria-describedby="loginHelp" placeholder="Enter Email" value="">
                    </div>
                    <div class="form">
                        <label for="login">Login :</label>
                        <input style="width: 200px;" type="login" class="form-control" name="login" placeholder="Enter Login" value=""><td>Minimum 3 Caractère</td>
                    </div>
                    <div class="form">
                        <label for="login">Password :</label>
                        <input style="width: 200px;" type="password" class="form-control" name="password" placeholder="Enter Password" value=""><td>Minimum 8 Caractères (1maj, 1chiffre, 1caractere special)</td>
                    </div>
                    <div class="form">
                        <label class="form-check-label" for="etudiant">Etudiant</label>
                        <input type="checkbox" class="form-check-input" id="etudiant" name="etudiant" value="">
                    </div>
                    <div class="form">
                        <label class="form-check-label" for="recruteur">Recruteur</label>
                        <input type="checkbox" class="form-check-input" id="recruteur" name="recruteur" value="">
                    </div>
                    <div class="form">
                        <td>Saisir tous les champs</td><td><button style="display: block;" type="submit" class="btn btn-primary" name="submit">Valider</button><td>
                    </div>
                </div>
        </form>
        <form action="./site/menu.php" method="post">
            <button style="float:right ;margin-right:20px;" type="submit" class="btn btn-primary" name="Menu">Retour menu</button>
        </form>
    </body>
</html>