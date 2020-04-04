<?php
include 'connexion.php';
include 'navbar.php';  
?>

<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <br>
                <br>
                <br>
                <h1 class="text-center">Choix du logement</h1>
                <br>
                <table class="table-fill">
                <thead class="">
                        <tr>
                            <th class="text-left">Adresse</th>
                            <th class="text-left">Type</th>
                            <th class="text-left">Superficie</th>
                            <th class="text-left">Loyer</th>
                            <th class="text-left">Charges</th>
                            <th class="text-left">Valider</th>
                        </tr>
                    </thead>
                    <tbody class="table-hover">
                <form action="" method="get">
                    <?php
                    
                    $sql = "SELECT * 
                            FROM logement
                            JOIN type_logement
                            ON logement.id_type = type_logement.id
                            JOIN quartier
                            ON logement.id_quartier = quartier.id
                            WHERE quartier.id = '".$_POST['select_q']."' AND logement.id_l NOT IN (SELECT DISTINCT location.id_logement FROM location)
                            ";
                  
                    $req = $bdd->query($sql);
                   
                    while ($row = $req->fetch()) {
                        
                        echo "<tr class=''> <td class='text-left'>".$row['adresse']." </td> <td class='text-left'>".$row['type']." </td> <td class='text-left'>".$row['superficie']." </td> <td class='text-left'>".$row['loyer']." </td> <td class='text-left'>".$row['charge']." </td> <td class='text-left'> <a name='test' class='badge blue darken-1'           
                        
                        href='ajout_location_loc.php?id_log=".$row['id_l']."'>Ajouter</a> </td> </tr>";
                    }
                    ?>
                </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>