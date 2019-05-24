<?php $title = 'Admin'; $path = dirname(__DIR__);?><!DOCTYPE html>
<html lang="fr">
<head>
    <?php include($path . '/templates/head.php'); ?>
    <meta charset="UTF-8">
    <title>Page Menu</title>
</head>
<body>
<form action="../site/Compte/page/prive.php" method="post">
    <button style="display: block;margin : auto;" type="submit" class="btn btn-primary" name="compte">Compte</button>
</form>
<form action="../site/Entreprise/page/entreprise.php" method="post">
    <button style="display: block;margin : auto;" type="submit" class="btn btn-primary" name="connexion">Entreprise</button>
</form>
<form action="../site/Compte/page/prive.php" method="post">
    <button style="display: block;margin : auto;" type="submit" class="btn btn-primary" name="connexion">En Cour</button>
</form>
<form action="../site/Compte/page/prive.php" method="post">
    <button style="display: block;margin : auto;" type="submit" class="btn btn-primary" name="connexion">En Cour</button>
</form>
<form action="../site/public.php" method="post">
    <button style="float:right ;margin-right:20px;" type="submit" class="btn btn-primary" name="Menu">Deco</button>
</form>
</body>
</html>