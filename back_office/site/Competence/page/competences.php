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
$request = $db->prepare("select * from competence");
$data = $request->execute();
?>
<table class="table">
    <caption>Liste des compétences</caption>
    <thead>
    <tr>
        <th>Compétences</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while($data = $request->fetch()) {
    ?>
    <tr>
        <td><?php echo $data['COMPETENCES']; ?></td>
        <td>
            <form method="post" action="./site/Competence/page/modifCompetencesPage.php">
                <input type="hidden" name="ID_COMPETENCE" value="<?php echo $data['ID_COMPETENCE']; ?>"><button style="display: block;" type="submit" class="btn btn-primary" name="modifer">Modifier</button>
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
<form method="post" action="./gestion/competences/insertCompetences.php">


    <div class="form" >
        <div class="form">
            <label for="email">Nom compétence :</label>
            <input style="width: 200px;" type="text" class="form-control" id="nom" name="nom" aria-describedby="loginHelp" placeholder="Enter nom compétence" value="">
        </div>
    </div>
    <div class="form">
        <td>Saisir tous les champs</td><td><button style="display: block;" type="submit" class="btn btn-primary" name="submit">Valider</button><td>
    </div>

</form>
<form action="./site/menu.php" method="post">
    <button style="float:right ;margin-right:20px;" type="submit" class="btn btn-primary" name="Menu">Retour menu</button>
</form>
</body>
</html>