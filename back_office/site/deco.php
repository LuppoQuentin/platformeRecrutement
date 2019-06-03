<?php
/**
 * Created by PhpStorm.
 * User: quent
 * Date: 24/05/2019
 * Time: 16:36
 */
session_start();
session_unset();
session_destroy();
header('location:./public.php');