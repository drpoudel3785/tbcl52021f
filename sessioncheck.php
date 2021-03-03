<?php
session_start();
if(!isset($_SESSION['username']) && !isset($_SESSION['sid']))
{
    header("Location: login.php");
}
?>