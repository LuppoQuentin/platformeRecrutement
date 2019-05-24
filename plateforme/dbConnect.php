<?php
// connexion à la base
global $dbConnect;
$dbConnect = new PDO('mysql:host=localhost;dbname=dbadmin','root','');
$dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>