<?php
include 'connexion.php';
include 'navbar.php';
session_start();
?>

    <div class="container">
        <h1 class="text-center mt-3">Ajout d'un quartier</h1>
    </div>

    <?php
    $sql = "SELECT * FROM commune";
    $req = $bdd->query($sql);


    ?>

    <form class="d-flex flex-column" action="ajout_quartier_ok.php" method="post">
        <select name="select_commune" class="form-control border-dark custom-select w-25 align-self-center mt-3" required>
            <option value="" disabled selected>Commune</option>
            <?php
            while ($row = $req->fetch()) {

                echo "<option value='".$row['id']."'>".$row['nom_commune']."</option>";

                }
                ?>
        </select>
        <input type="text" class="form-control w-25 mx-auto btn-light rounded border-dark text-center mt-3" name="nom_quart" placeholder="Nom du quartier" required>
        <input type="submit" value="Ajouter" class="form-control w-25 mx-auto btn-dark rounded mt-3">
    </form>