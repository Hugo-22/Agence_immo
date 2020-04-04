<?php
include 'connexion.php';
if ($_POST['select_implantation'] && $_POST['adresse'] && $_POST['superficie'] && $_POST['loyer'] && $_POST['select_type']) {

    $sql = "INSERT INTO
            logement 
            (adresse, superficie, loyer, id_quartier, id_type) 
            VALUES 
            ('".$_POST['adresse']."','".$_POST['superficie']."','".$_POST['loyer']."','".$_POST['select_implantation']."', '".$_POST['select_type']."')";
    $req = $bdd->query($sql);
        header('location: liste_logement.php');
    }
?>