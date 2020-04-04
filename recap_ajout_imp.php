<?php
session_start();
include 'connexion.php';
include 'navbar.php';

            $_SESSION['nom_quartier'] = $_POST['quartier'];

            $sql_quartier = "INSERT INTO quartier (id_commune, nom_quartier) VALUES ('" . $_SESSION['last_id']. "', '".$_SESSION['nom_quartier']."') ";
            $req_quartier = $bdd->query($sql_quartier);
?>

<div class="container">
    <h1 class="text-center mt-4">Nouvelle implantation ajoutée avec succès !</h1>
    <br>
    <div class="recap">

        <p class='text-center mt-2'>Nom de la commune : <?php echo $_SESSION['nom_com']; ?></p>
        <p class='text-center mb-2'>Nom du quartier : <?php echo $_SESSION['nom_quartier']; ?></p>

    </div>