<?php $title = 'LoginPage';?><!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('../templates/head.php'); ?>
    <meta charset="UTF-8">
    <title>Page Login</title>
</head>
<body>
<form action="../gestion/login.php" method="post">
    <?php if(isset($error)){include('errorlogin.php');}?>
    <div class="form-group">
        <label for="login">Login</label>
        <input type="text" class="form-control" id="login" name="login" aria-describedby="loginHelp" placeholder="Enter Login" value="">
        <small id="loginHelp" class="form-text text-muted">Login admin needed</small>
    </div>
    <div class="form-group">
        <label for="mpd">Password</label>
        <input type="password" class="form-control" name="mdp" placeholder="Password" value="">
    </div>
    <button type="submit" class="btn btn-primary" name="connexion">Connexion</button>
</form>
</body>
</html>
