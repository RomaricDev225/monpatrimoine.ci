<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corps mail</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-sm-12">
                <div class="card mt-5">
                    <div class="card-title p-2 text-center bg-success">
                        <!-- <div class="text-light">Code de validation</h3> -->
                    </div>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-md-12 col-sm-12">
                                <img src="cicuriz.png" alt="">
                            </div>
                            <div class="col-md-12 col-sm-12 p-5">
                                <p>
                                    Bonjour,<br>
                                    Vous devez confirmer votre adresse Email pour continuer l'inscription.
                                </p>
                                <h3 class="text-primary">Code de vérification</h3>
                                <p>Utiliser ce code ci-dessous</p>
                                <h1 class="text-danger"><?php echo $_SESSION['publicVariable']  ?></h1>
                                <h6 class="mt-5">Ce code est un gage de votre inscription, veuillez le conserver jusqu'à la validation de votre espace.</h6>
                            </div>
                        </div>
                        <hr>
                        <small><span class="fa fa-web"></span> monpatrimoine.ci | +225 +5 01 08 44 24</small>
                    </div>
                </div>
            </div>
        </div>    
    </div>      

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>