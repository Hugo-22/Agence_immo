<?php
include 'connexion.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Implantation</title>
</head>
<body>
        <form action="" method="post">
        <select name="select_commune" id="">
        
        <?php
        $sql = "SELECT * from commune";
        $req = $bdd->query($sql);

        while ($row = $req->fetch()) {

            echo " <option value='".$row['id']. "'> " . $row['nom_commune'] . "</option>";
        }
        ?>
        </select>
        <input type="submit" value="Afficher">
        </form>
        
        
        <?php
        $sql_two = "SELECT * FROM location JOIN type_logement ON location.id_type_logement = type_logement.id JOIN locataire ON location.id_locataire = locataire.id JOIN logement ON logement.id_l = location.id_logement JOIN quartier ON quartier.id = logement.id_quartier JOIN commune ON commune.id = quartier.id_commune WHERE $_POST[select_commune] = commune.id";
        $req_two = $bdd->query($sql_two);


        if ($_POST['select_commune']) {

            while ($row_two = $req_two->fetch()) {
    
                echo "<h1>".$row_two['nom_commune']." </h1>";
                echo "<li>".$row_two['nom_quartier']." </li>";
                echo "<li>".$row_two['nom']." </li>";
                echo "<li>".$row_two['prenom']." </li>";
                echo "<li>".$row_two['adresse']." </li>";
                echo "<li>".$row_two['type']." </li>";
                echo "<li>".$row_two['superficie']." </li>";
                echo "<li>".$row_two['loyer']." </li>";
                echo "<li>".$row_two['charge']." </li>";
                
                echo "<a class=''  href='update_imp.php?id_com=" . $row_two['id'] . " '>Modifier</a>";
            }
        }
        ?>
    
</body>
</html>