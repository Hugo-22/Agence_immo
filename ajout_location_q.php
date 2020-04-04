<?php
include 'connexion.php';
include 'navbar.php';

    $sql = "SELECT * FROM quartier WHERE id_commune = ".$_POST['select_commune']."";
    $req = $bdd->query($sql);
?>
        <div class="container">
        <h1 class="text-center mt-4">Ajout d'une nouvelle location</h1>
            <form action="ajout_location_log.php" method="post" class="mt-4 d-flex flex-column">
                <h5 class="text-center">Choix du quartier :</h5>
                <select name="select_q" class="form-control border-dark custom-select w-25 align-self-center mt-3">
                    <option value="Quartier" disabled selected>Quartier</option>
                    <?php
                            while ($row = $req->fetch()) {
                                echo "<option value='".$row['id']."'>".$row['nom_quartier']."</option>";
                            }
                            ?>
                            </select>
                            <input type="submit" value="Valider" class="form-control w-25 mx-auto btn-dark rounded mt-3">
                        </form>
        </div>
