<?php
include 'connexion.php';
$sql = "DELETE FROM locataire WHERE id=".$_GET['id_loc']." ";
$req = $bdd->query($sql);
header("location: infos_locataire.php");
include 'navbar.php';


?>