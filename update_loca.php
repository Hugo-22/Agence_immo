<?php
include 'connexion.php';
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['date']) && isset($_POST['telephone'])) {
    
    $sql_update = "UPDATE locataire SET nom='".$_POST['nom']."', prenom='".$_POST['prenom']."', date_de_naissance='".$_POST['date']."', telephone='".$_POST['telephone']."' WHERE id = ".$_GET['id_loc']." ";
    $req_update = $bdd->query($sql_update);
    header("Location: infos_locataire.php");
}
include 'navbar.php';
?>

<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <br>
                <br>
                <br>
                <h1 class="text-center">Modification d'informations d'un signataire</h1>
                <br>

                <table class="table mx-auto">
                <thead class="thead-info">
                        <tr>
                        <th class="text-center">Nom</th>
                            <th class="text-center">Prénom</th>
                            <th class="text-center">Date de naissance</th>
                            <th class="text-center">Téléphone</th>
                            <th class="text-center">Valider</th>
                        </tr>
                    </thead>
                    <tbody>
                    <form action="" method="post">
                    <?php

                    $sql = " SELECT * from locataire WHERE id = ".$_GET['id_loc']." ";
                    $req = $bdd ->query($sql);

                    while ($row = $req->fetch()) {
                        
                        echo "<tr class='text-center'> <td> <input class='text-center' type='text' name='nom' value='".$row['nom']."' > </td> <td> <input class='text-center' type='text' name='prenom' value='".$row['prenom']."' > </td> <td> <input class='text-center' type='text' name='date' value='".$row['date_de_naissance']."' > </td> <td> <input class='text-center' type='text' name='telephone' value='".$row['telephone']."' > </td> <td> <input class='btn-dark rounded' type='submit' value='Modifier'> </td> </tr>";
                        
                    } 
                    ?>
                    </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>