<?php
session_start();
if(empty($_SESSION["name"]) && empty($_SESSION["password"])) {

    header("location: login.php");
    exit;
    }
include 'connexion.php';
include 'navbar.php';
?>
<div class="container">
    <h1 class="text-center mt-5">Back Office Agence Immobillière FH</h1>
</div>