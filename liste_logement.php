<?php
include 'connexion.php';
include 'navbar.php';
?>

<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <br>
                <h1 class="text-center">Liste des logements</h1>
                <br>

                <table class="table mx-auto table-hover">
                <thead class="thead-info">
                        <tr>
                            <th class="text-center">Commune / Quartier</th>
                            <th class="text-center">Adresse</th>
                            <th class="text-center">Type</th>
                            <th class="text-center">Superficie</th>
                            <th class="text-center">Loyer</th>
                            <th class="text-center">Charge</th>
                            <th class="text-center">Modifier</th>
                            <th class="text-center">Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php

                    $sql = "SELECT * FROM commune JOIN quartier ON commune.id = quartier.id_commune JOIN logement ON quartier.id = logement.id_quartier JOIN type_logement ON logement.id_type = type_logement.id";

                    // $sql = "SELECT * FROM type_logement JOIN logement ON type_logement.id = logement.id_type";
                    $req = $bdd->query($sql);

                    while ($row = $req->fetch()) {
                       
                        echo "<tr class='text-center'> <td class='font-weight-bold'>".$row['nom_commune']." / ".$row['nom_quartier']." </td> <td class='font-weight-bold'>".$row['adresse']." </td> <td class='font-weight-bold'>".$row['type']." </td> <td class='font-weight-bold'>".$row['superficie']." </td> <td class='font-weight-bold'>".$row['loyer']." </td> <td class='font-weight-bold'>".$row['charge']." </td> <td> <a class='p-1 badge blue darken-1'  href='update_log.php?id_log=" . $row['id_l'] . " '>Modifier</a></td> <td> <a class='badge red accent-3 p-1' href='delete_logement.php?id_log=" . $row['id_l'] . "'>Supprimer</a> </td> </tr>";
                    } 
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>