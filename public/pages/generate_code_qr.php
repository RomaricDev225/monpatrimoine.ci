<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR code Generate</title>
</head>
<body>
    <?php
        @include('../traitements/library/phpqrcode/qrlib.php'); //On inclut la librairie au projet
        @include('../traitements/functions.php');
        // $_SESSION['data_string_declaration_de_bien'] = '#|58014578023654875013#|CV34W100CM#|HOC#|APPLE#|2023-06-29#|ASSETS/IMG/TMP/467.JPG#|ASSETS/IMG/TMP/365.JPG#|PAT-PHONE-15165771944346§END-STRING§#|58014578041784875013#|SYD5W100CM#|IPHONE14 PRO MAX#|APPLE#|2021-06-29#|ASSETS/IMG/TMP/467.JPG#|ASSETS/IMG/TMP/365.JPG#|PAT-PHONE-15165771947106§END-STRING§';
        $id = $_SESSION['idBien'];
        $sql = "select identifiant, modele, designation, type_bien from biens, marque WHERE biens.marque=marque.codeMarque and code='" . $id . "'";
        $col = 4;
        $ident = retrieveDB($sql, $col)[0][0];
        $designation = retrieveDB($sql, $col)[0][1];
        $marque = retrieveDB($sql, $col)[0][2];
        $categ = retrieveDB($sql, $col)[0][3];
        $t = count(explode("~", $ident));
        if ($t>1) {
            $mle = explode("~", $ident)[1];
            $chassis = explode("~", $ident)[0];
        }
        
        
    ?>
    <div class="alert alert-success text-center">
        <h2 class="text-success">
            <span class="fas fa-check-circle"></span> BRAVO !
        </h2>
        <h4> Vous avez associé ce QR Code à votre bien</h4>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card p-2">
                            <div class="row">
                                <div class="col-md-2">
                                    <?php $path = "assets/img/post/" . $_SESSION['ident_client'] . "/" . $id . ".jpg"; 
                                    if (file_exists($path)) { 
                                        $path="assets/img/elements/icon-image.png";
                                    }
                                    ?>
                                    <img src="<?php echo $path; ?>" alt="appareil image" class="w-100" style="max-height:200px">
                                </div>
                                <div class="col-md-4 col-sm-12 text-left main-info">
                                    <h4 class="text-dark"><?php echo $designation?></h4> 
                                    <h5 class="text-dark"><?php echo $marque?></h5>  
                                </div>
                                <div class="col-md-4 text-left aux-info">
                                    <div class="row">
                                        <?php if ($categ=="PHONE") { ?>
                                        <div class="col-md-8 col-sm-12 id">
                                            <small>IMEI</small>
                                            <h5 class="text-dark"><?php echo $ident?></h5> 
                                        </div>
                                        <?php } ?>
                                        <?php if ($categ=="EC" || $categ=="UC" || $categ=="AUDIO") { ?>
                                        <div class="col-md-8 col-sm-12 serial">
                                            <small>N° de séries</small>
                                            <h5 class="text-dark"><?php echo $ident?></h5> 
                                        </div>
                                        <?php } ?>
                                        <?php if ($categ=="VOITURE" || $categ=="MOTO" ) { ?>
                                        <div class="col-md-12 col-sm-12 chassis">
                                            <small>N° de châssis</small>
                                            <h5 class="text-dark"><?php echo $chassis?></h5> 
                                        </div>
                                        <div class="col-md-12 col-sm-12 mle">
                                            <small>Immatriculation</small>
                                            <h5 class="text-dark"><?php echo $mle?></h5> 
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img src="assets/img/elements/qrCode.png" alt="appareil image" class="w-75" style="max-height:200px">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <h5 class="mt-3 alert alert-info">
            <span class="fas fa-exclamation-triangle h2"></span> 
            <br>Pour faciliter sa recherche ou empêcher son rachat en cas de perte vous devez coller le QR code sur votre bien
        </h5>
        <a href="/declaration-de-bien" class="btn btn-success btn-terminer">
            <span class="text"><span class="fas fa-thumbs-up h4"></span> J'ai compris</span>
        </a>
    </div>
</body>
</html>