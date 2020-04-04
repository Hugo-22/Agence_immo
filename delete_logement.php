<?php
include 'connexion.php';
$sql = "DELETE FROM logement WHERE id_l=".$_GET['id_log']." ";
$req = $bdd->query($sql);
header("location: liste_logement.php");
?>