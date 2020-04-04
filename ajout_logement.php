<?php
include 'connexion.php';
include 'navbar.php';
session_start();
?>
    <div class="container">
    <h1 class="text-center mt-3">Ajout d'un logement</h1>
    </div>
    <?php
    $sql = "SELECT * FROM commune JOIN quartier ON commune.id = quartier.id_commune";
    $req = $bdd->query($sql);

    $sql_type = "SELECT * from type_logement";
    $req_type = $bdd->query($sql_type);
    ?>
<div class="form">

    <form class="d-flex flex-column" action="ajout_log_ok.php" method="post">
        <select name="select_implantation" class="form-control border-dark custom-select w-75 align-self-center mt-3" required>
            <option value="" disabled selected>Commune / Quartier</option>
            
            <?php
            while ($row_imp = $req->fetch()) {
                
                echo "<option value='".$row_imp['id']."'>".$row_imp['nom_commune']." / ".$row_imp['nom_quartier']."</option>";
                
            }
            ?>
        </select>
        <div class="d-flex mt-3">

        <input class='form-control w-75 mx-auto rounded border-dark text-center' type="text" name="adresse" required placeholder="Adresse">
        </div>
        
        <!-- <label for="">Superficie du logement</label> -->
        <input class='form-control w-75 mx-auto rounded mt-3 border-dark text-center' type="text" name="superficie" required placeholder="Superficie">
        
        <!-- <label for="">Loyer</label> -->
        <input class='form-control w-75 mx-auto rounded mt-3 border-dark text-center' type="text" name="loyer" required placeholder="Loyer">
        
        <select name="select_type" class="form-control text-center border-dark custom-select w-75 align-self-center mt-3" required>
            <option value="Type" disabled selected>Logement - Charge</option>
            <?php
        while ($row_type = $req_type->fetch()) {
            echo "<option value='".$row_type['id']."'>".$row_type['type']." - ".$row_type['charge']."</option>";
        }
        ?>
        </select>
        <input type="submit" value="Ajouter" class="form-control w-25 mx-auto btn-dark rounded mt-3">
    </form>
</div>