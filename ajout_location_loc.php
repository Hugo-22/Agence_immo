<?php
include 'connexion.php';
        if ($_POST['select_signataire']) {
        
                $sql_add_loca = "INSERT INTO location (id_locataire, id_logement) VALUES ('".$_POST['select_signataire']."', '".$_GET['id_log']."')";
                $req_add_loca = $bdd->query($sql_add_loca);
                header("location: liste_location.php");
        }
include 'navbar.php';
        ?>

        <div class="container">
        <h1 class="text-center mt-4">Ajout d'une nouvelle location</h1>

                <form action="" method="post" class="mt-4 d-flex flex-column">
                    <h5 class="text-center">Choix du signataire :</h5>
                        <select name="select_signataire" class="form-control border-dark custom-select w-25 align-self-center mt-3">
                                <option value="Signataire" disabled selected>Signataire</option>
                                <?php
                        $sql_loca = "SELECT * FROM locataire";
                        $req_loca = $bdd->query($sql_loca);
                        
                        while ($row = $req_loca->fetch()) {
                                echo "<option value='".$row['id']."'>".$row['nom']." ".$row['prenom']."</option>";
                        }
                        ?>
                        </select>
                        <input type="submit" value="Valider" class="form-control w-25 mx-auto btn-dark rounded mt-3">
                </form>
        </div>