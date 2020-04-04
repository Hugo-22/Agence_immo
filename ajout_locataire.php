<?php
include 'connexion.php';
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['date']) && isset($_POST['telephone'])) {
    
    $sql = "INSERT INTO locataire (nom, prenom, date_de_naissance, telephone) VALUES ('".$_POST['nom']."', '".$_POST['prenom']."', '".$_POST['date']."', '".$_POST['telephone']."')";
    $req = $bdd->query($sql);
    header("Location: infos_locataire.php");
}
include 'navbar.php';


?>

            <h1 class="text-center mt-3">Ajouter un nouveau signataire</h1>


            <div class="d-flex mt-3 form">

              <form method="POST" action=''>

                  <input name="nom" type="text" class='form-control w-75 mx-auto rounded border-dark text-center' placeholder="Nom">
                  
                  <input name="prenom" type="text" class='form-control w-75 mx-auto rounded border-dark text-center mt-3' placeholder="Prénom">
                  
                  <input name="date" type="date" class='form-control w-75 mx-auto rounded border-dark text-center mt-3'>
                  
                  <input name="telephone" type="text" class='form-control w-75 mx-auto rounded border-dark text-center mt-3' placeholder="06.00.00.00.00">
                  
                  <input type="submit" class="form-control w-25 mx-auto btn-dark rounded mt-3" value="Ajouter">
              </form>
            </div>