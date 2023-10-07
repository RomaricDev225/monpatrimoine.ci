<?php 
session_start();
?>
<div class="col-md-12 col-sm-12 p-5">
    <p>
        Bonjour,<br>
        Ce code ci-dessous vous servira dà recupérer votre mot de passe.
    </p>
    <h3 class="text-primary">Code de vérification</h3>
    <p>Utiliser ce code ci-dessous</p>
    <h2 class="text-danger">
        <?php echo $_SESSION['publicVariable']  ?>
    </h2>
</div>