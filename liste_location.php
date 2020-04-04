<?php
include 'connexion.php';
include 'navbar.php';  
?>

<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <br>
                <h1 class="text-center">Liste des locations</h1>
                <br>

                <table class="table mx-auto table-hover">
                <thead class="thead">
                        <tr>
                            <th class="text-center">Commune / Quartier</th>
                            <th class="text-center">Adresse</th>
                            <th class="text-center">Type / Superficie</th>
                            <th class="text-center">Loyer / Charge</th>
                            <th class="text-center">Signataire</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    
                    $sql = "SELECT * FROM location JOIN locataire ON location.id_locataire = locataire.id JOIN logement ON location.id_logement = logement.id_l JOIN type_logement ON logement.id_type = type_logement.id JOIN quartier ON logement.id_quartier = quartier.id JOIN commune ON quartier.id_commune = commune.id";
                    $req = $bdd->query($sql);

                    while ($row = $req->fetch()) {
                       
                        echo "<tr class='text-center'> <td>".$row['nom_commune']." / ".$row['nom_quartier']." </td> <td>".$row['adresse']." </td> <td>".$row['type']." / ".$row['superficie']." </td> <td>".$row['loyer']." / ".$row['charge']." </td> <td>".$row['nom']." ".$row['prenom']." </td> </tr>";
                    } 
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>