<?php
session_start();

if(isset($_SESSION['microgram_userid']))
{
    $_SESSION['microgram_userid'] = NULL;
    unset($_SESSION['microgram_userid']);
}
 header("Location: login.php");
    die;

