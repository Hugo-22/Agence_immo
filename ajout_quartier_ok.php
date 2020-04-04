<?php
include 'connexion.php';
include 'navbar.php';
session_start();
?>

    <div class="container">
            <?php


            if ($_POST['nom_quart'] && $_POST['select_commune']) {
    
                echo "<h1 class='text-center mt-3'>Nouveau quartier ajouté avec succès !</h1>";
                   
                $sql = "INSERT INTO
                        quartier 
                        (nom_quartier, id_commune) 
                        VALUES 
                        ('".$_POST['nom_quart']."','".$_POST['select_commune']."')";
                $req = $bdd->query($sql);

                }
            ?>
    </div>