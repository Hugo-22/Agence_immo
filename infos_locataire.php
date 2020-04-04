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
                <h1 class="text-center">Informations relatives aux signataires</h1>
                <br>
                <table class="table mx-auto table-hover">
                <thead class="thead-info">
                        <tr>
                            <th class="text-center">Nom</th>
                            <th class="text-center">Prénom</th>
                            <th class="text-center">Date de naissance</th>
                            <th class="text-center">Téléphone</th>
                            <th class="text-center">Modifier</th>
                            <th class="text-center">Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                    <form action="" method="get">
                    <?php
                    
                    $sql = " SELECT * from locataire";
                    $req = $bdd ->query($sql);
                    setlocale(LC_ALL, 'fr_FR');
                    while ($row = $req->fetch()) {
                        
                        echo "<tr class='text-center'> <td>".$row['nom']." </td> <td>".$row['prenom']." </td> <td>".$row['date_de_naissance']." </td> <td>".$row['telephone']." </td> <td> <a class='badge blue darken-1'  href='update_loca.php?id_loc=" . $row['id'] . " '>Modifier</a></td> <td> <a class='badge red accent-3' href='delete_loca.php?id_loc=" . $row['id'] . "'>Supprimer</a> </td> </tr>";
                        
                    } ?>
                    </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>