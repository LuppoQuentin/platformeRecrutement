<?php
/**
 * Created by PhpStorm.
 * User: quent
 * Date: 03/06/2019
 * Time: 14:06
 */
    if(!isset($_SESSION['status'])) {
        header('location:http://localhost/plateformeRecrutement/back_office/site/public.php');
        exit();
    }
    ?>