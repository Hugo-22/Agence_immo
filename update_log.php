<?php
include 'connexion.php';
    if (isset($_POST['adresse']) && isset($_POST['superficie']) && isset($_POST['loyer']) ) {
    
        $sql_update = "UPDATE logement SET adresse='".$_POST['adresse']."', superficie='".$_POST['superficie']."', loyer='".$_POST['loyer']."' WHERE id_l = ".$_GET['id_log']." ";
        $req_update = $bdd->query($sql_update);
        header("Location:liste_logement.php");
    }
include 'navbar.php';

?>

<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <br>
                <br>
                <br>
                <h1 class="text-center">Modification d'un logement</h1>
                <br>

                <table class="table mx-auto">
                <thead class="thead-info">
                        <tr>
                            <th class="text-center">Adresse</th>
                            <th class="text-center">Type</th>
                            <th class="text-center">Superficie</th>
                            <th class="text-center">Loyer</th>
                            <th class="text-center">Charge</th>
                            <th class="text-center">Valider</th>
                        </tr>
                    </thead>
                    <tbody>
                    <form action="" method="post">
                    <?php
                    $sql = "SELECT * FROM type_logement JOIN logement ON type_logement.id = logement.id_type WHERE logement.id_l = ".$_GET['id_log']." ";
                    $req = $bdd->query($sql);

                    while ($row = $req->fetch()) {
                        
                        echo "<tr class='text-center'> <td> <input class='form-control text-center border-dark' type='text' name='adresse' value='".$row['adresse']."' > </td> <td class='font-weight-bold'> ".$row['type']." </td> <td> <input class='form-control text-center border-dark' type='text' name='superficie' value='".$row['superficie']."' > </td> <td> <input class='form-control text-center border-dark' type='text' name='loyer' value='".$row['loyer']."' > </td> <td class='font-weight-bold'> ".$row['charge']." </td> <td> <input class='form-control primary-color text-white' type='submit' value='Modifier'> </td> </tr>";
                        
                    } 
                    ?>
                    </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>