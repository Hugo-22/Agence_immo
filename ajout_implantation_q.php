<?php
session_start();
include 'connexion.php';
include 'navbar.php';
?>
<div class="container">
    <h1 class="text-center mt-4">Ajout d'une nouvelle implantation</h1>
<?php
        if ($_POST['commune']) {

                $sql_com = "INSERT INTO commune (nom_commune) VALUES ('" . addslashes($_POST['commune']) . "')";
                // $req_com = $bdd->query($sql_com);
                $bdd->exec($sql_com);
                $_SESSION['last_id'] = $bdd->lastInsertId();
                $_SESSION['nom_com'] = $_POST['commune'];

                // echo "Last inserted ID is: " . $_SESSION['last_id'];
               
                echo "<form method='POST' action='recap_ajout_imp.php' class='mt-5'>";
                echo "<h5 class='text-center'>Indiquez un quartier :</h5>";
                echo "<input type='text' name='quartier' class='form-control w-25 mx-auto text-center border-dark mt-2'>";
                echo "<input type='submit' value='Ajouter' class='form-control w-25 mx-auto btn-dark rounded mt-3'>";
                echo "</form>";
            }
?>
</div>