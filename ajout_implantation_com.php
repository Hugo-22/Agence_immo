<?php
include 'connexion.php';
include 'navbar.php';
?>

<div class="container">
    <h1 class="text-center mt-4">Ajout d'une nouvelle implantation</h1>
    <form method="POST" action="ajout_implantation_q.php" class="mt-5">
    <h5 class="text-center">Indiquez la nouvelle commune :</h5>
    <input type='text' name='commune' class="form-control w-25 mx-auto text-center border-dark mt-2">
    <input type='submit' value='Ajouter' class="form-control w-25 mx-auto btn-dark rounded mt-3">
    </form>
</div>