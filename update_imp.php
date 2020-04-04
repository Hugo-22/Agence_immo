<?php
include 'connexion.php';
?>

<?php

                $sql = "SELECT * FROM location JOIN type_logement ON location.id_type_logement = type_logement.id JOIN locataire ON location.id_locataire = locataire.id JOIN loyer ON locataire.id = loyer.id_locataire JOIN logement ON logement.id_l = location.id_logement JOIN quartier ON quartier.id = logement.id_quartier JOIN commune ON commune.id = quartier.id_commune WHERE ".$_GET['id_com']." = commune.id";
                $req = $bdd->query($sql);
                ?>
                <form method="post">
                <?php
                while ($row = $req->fetch()) {

                    echo "<input class='text-center border border-dark' type='text' name='input_commune' value='".$row['nom_commune']."' >";
                    echo "<input class='text-center border border-dark' type='text' name='input_quartier' value='".$row['nom_quartier']."' >";
                    echo "<input class='text-center border border-dark' type='text' name='input_nom' value='".$row['nom']."' >";
                    echo "<input class='text-center border border-dark' type='text' name='input_prenom' value='".$row['prenom']."' >";
                    echo "<input class='text-center border border-dark' type='text' name='input_adresse' value='".$row['adresse']."' >";
                    echo "<input class='text-center border border-dark' type='text' name='input_type' value='".$row['type']."' >";
                    echo "<input class='text-center border border-dark' type='text' name='input_superficie' value='".$row['superficie']."' >";
                    echo "<input class='text-center border border-dark' type='text' name='input_prix' value='".$row['prix']."' >";
                    echo "<input class='text-center border border-dark' type='text' name='input_charge' value='".$row['charge']."' >";
                }
                echo "<input type='submit' value='Mettre à jour' name='update'>";
                echo "</form>";

                if (isset($_POST['update'])) {
                    $sql_two = "UPDATE commune INNER JOIN quartier ON commune.id = quartier.id JOIN logement ON quartier.id = logement.id_quartier JOIN location ON logement.id_l = location.id_logement JOIN locataire ON location.id_locataire = locataire.id JOIN loyer ON locataire.id = loyer.id_locataire JOIN type_logement ON location.id_type_logement = type_logement.id SET commune.nom_commune = '".$_POST['input_commune']."', quartier.nom_quartier = '".$_POST['input_quartier']."', logement.adresse = '".$_POST['input_adresse']."', logement.superficie = '".$_POST['input_superficie']."', locataire.nom = '".$_POST['input_nom']."', locataire.prenom = '".$_POST['input_prenom']."', loyer.prix = '".$_POST['input_prix']."', type_logement.type = '".$_POST['input_type']."', type_logement.charge = '".$_POST['input_charge']."' WHERE commune.id = ".$_GET['id_com']." ";
                    
                    $req_two = $bdd->query($sql_two);

                    header("Location:implantation.php");
                }
                ?>