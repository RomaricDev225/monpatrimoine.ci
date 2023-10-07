
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    @if(str_contains(url()->current(), '/mobile') || str_contains(url()->current(), '/ecran') || str_contains(url()->current(), '/imprimantes') || str_contains(url()->current(), '/automobile') || str_contains(url()->current(), '/multimedia') || str_contains(url()->current(), '/ordinateur'))

        <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo-ico.png">
                    
        <link rel="stylesheet" href="../../assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="../../assets/css/themify-icons.css">
        <link rel="stylesheet" href="../../assets/css/themify-icons.css">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="../../assets/css/responsive.css">
    @else
        
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo-ico.png">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="assets/css/responsive.css">
    @endif


    <style>
        body{
            font-family: 'montserrat', sans-serif;
        }

        .b{
            font-weight:bold;
        }

        .pointer{
            cursor:pointer
        }

        form input.designed{
            border: 2px solid forestgreen;                        
            font-weight:bold;
            padding:4%
        }

        form select.designed{
            border: 2px solid forestgreen;                        
            font-weight:bold;
            height:50px;
            padding:2%
        }

        .x-big-ico{font-size:500%}
        .big-ico{font-size:200%}
        .medium-ico{font-size:150%}
        .normal-ico{font-size:100%}
        .x-small-ico{font-size:50%}
        .small-ico{font-size:10%}
        
        .v-big-img{width:200%}
        .x-big-img{width:150%}
        .big-img{width:120%}
        .normal-img{width:100%}
        .medium-img{width:70%}
        .x-small-img{width:30%}
        .small-img{width:15%}
        .v-small-img{width:10%}

        .v-big-max-height{max-height:1500px}
        .x-big-max-height{max-height:1000px}
        .big-max-height{max-height:800px}
        .medium-max-height{max-height:600px}
        .x-small-max-height{max-height:400px}
        .small-max-height{max-height:200px}
        .v-small-max-height{max-height:80px}

        .v-big-min-height{min-height:1500px}
        .x-big-min-height{min-height:1000px}
        .big-min-height{min-height:800px}
        .medium-min-height{min-height:600px}
        .x-small-min-height{min-height:400px}
        .small-min-height{min-height:200px}
        .v-small-min-height{min-height:80px}

        .v-big-height{height:1500px}
        .x-big-height{height:1000px}
        .big-height{height:800px}
        .medium-height{height:600px}
        .x-small-height{height:400px}
        .small-height{height:200px}
        .v-small-height{height:80px}

        .bg-vert, .badge-vert{
            background:#096E49;
            color:#ffff;
            cursor:pointer
        }
        .bg-vert-dark, .badge-vert:hover{
            background:#063222;
            color:#ffff;
            cursor:pointer
        }
        .text-vert{
            color:#096E49;
        }

        .btn-vert{
            background:#096E49;
            color:#ffff;
        }
        .btn-vert:hover{
            background:#063222;
            color:#ffff;
        }

        .bg-orange{
            background:#F46520;
        }
        .text-orange{
            color:#F46520;
        }
        .btn-orange, .badge-orange{
            color:#ffff;
            background:#F46520;
            cursor:pointer
        }
        .btn-orange:hover, .badge-orange:hover{
            color:#ffff;
            background:#C5490D;
            cursor:pointer
        }

        .bg-sombre{
            background:#0D1926;
            color:#fff;
        }

        .btn-sombre{
            background:#0D1926;
            color:#fff
        }

        .text-sombre{
            color:#0D1926;
        }

        body a.unlined{
            text-decoration:none;
        }

        body a.unlined:hover{
            color:orange
        }

        .fadingOut {
            transition:opacity 0.3s linear;
            opacity:0;
        }
        .fadingIn {
            transition:opacity 0.3s linear;
            opacity:100;
        }

        .step{
            display:none;
            transition:0.3s;
        }

        .disabled {
            pointer-events: none;
            opacity: 0.4;
        }

        .box-conx .myForm .form-group i{
            position: absolute;
            top:190px;
            right: 30px;
            cursor:pointer
        }

        .box-insc .myForm .form-group i{
            position: absolute;
            top:50px;
            right: 25px;
            cursor:pointer
        }

        .box-reset-password .myForm .form-group i{
            position: absolute;
            top:50px;
            right: 25px;
            cursor:pointer
        }
        .box-reset-password .myForm .form-group span{
            position: absolute;
            top:140px;
            right: 25px;
            cursor:pointer
        }

        .option-user, .badge{
            cursor:pointer
        }

        .collapse-user-items a{
            transition:0.5s
        }
        .collapse-user-items a:hover{
            background:#096E49;
        }

        .capitalize{text-transform: capitalize;}

        

        
    </style>
    <title><?php echo $pageTitle ?></title>
  </head>
  
<section>
    <input type="hidden" name="" id="ident_client" value="<?php if (isset($_SESSION['ident_client'])) {echo $_SESSION['ident_client'];}  ?>">
    <input type="hidden" name="" id="dateToday" value="<?php echo date("Y-m-d") ?>">
    <input type="hidden" name="" id="email_client" value="<?php if (isset($_SESSION['email'])) {echo $_SESSION['email'];} ?>">
    <input type="hidden" name="" id="auth" value="<?php if (isset($_SESSION['auth'])) {echo $_SESSION['auth'];} ?>">
    
    <?php 
        if (isset($_SESSION['ident_client'])){
            $sql ="select * from biens where client='" . $_SESSION['ident_client'] . "'";
        }
        else{
            $sql ="select * from biens where client=''";
        }

        $line = retrieveLineDB($sql); 
        $compte = $line;
        
    ?>

    <div class="nav position-fixed bg-vert w-100 px-lg-3" style="height:75px; z-index:1001">
        <div class="d-none d-lg-block w-100">
            <div class="row">
                <div class="col-9 menu">
                    <div class="d-flex justify-content-end">
                        <a href="/" class="logo d-none d-lg-block pt-2">
                        @if(str_contains(url()->current(), '/mobile') || str_contains(url()->current(), '/ecran') || str_contains(url()->current(), '/imprimantes') || str_contains(url()->current(), '/automobile') || str_contains(url()->current(), '/multimedia') || str_contains(url()->current(), '/ordinateur'))
                            <img src="../../assets/img/logo/logo-ico.png" alt="monpatrimoine.ci logo" class="w-50">
                        @else
                        <img src="assets/img/logo/logo-ico.png" class="w-50" alt="monpatrimoine.ci logo">
                        @endif
                        </a>
                        <div class="d-inline-flex navbar-expand-lg w-100">
                            <ul class="nav navbar-nav d-inline-flex">
                                <li class="nav-item">
                                    <ul class="list-inline-mb-0 my-4">
                                        <li class="list-inline-item">
                                            <a href="/" class="mx-3 text-white unlined"><span class="fas fa-home"></span>&nbsp;Accueil</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="/comment-ca-marche" class="mx-3 text-white unlined"><span class="fas fa-info-circle"></span>&nbsp;Comment ça marche ?</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="/a-propos" class="mx-3 text-white unlined"><span class="fas fa-indent"></span>&nbsp;A propos</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>   
                <div class="col-3">
                    <div class="row">
                        <?php if (!isset($_SESSION['auth']))  {?>
                        <div class="col-12 pt-4 text-white">
                            <a href="" class="unlined text-light" data-toggle="modal" data-target=".connexion-modal">
                                <h5><span class="fas fa-user"></span> Espace membre</h5>
                            </a>
                        </div>
                        <?php }else {?>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-9 pt-3 m-0 option-user">
                                            <img src="assets/img/elements/user.png" class="v-small-img" alt="">&nbsp;
                                            <span class="customer text-white h6"><?php echo explode(" ", $_SESSION['name'])[0] . " " . explode(" ", $_SESSION['name'])[1]  ?></span>
                                        </div>
                                        <div class="col-2 text-white badge btn-orange p-1 mt-3" data-toggle="modal" data-target="#mes-biens">
                                            <sup class="badge badge-danger position-absolute p-2 ml-3 medium-ico"><?php echo $compte; ?></sup>
                                            <h3><span class="fas fa-shopping-basket"></span></h3>
                                        </div>
                                        <div class="col-12 p-0 collapse-user-items option-user d-none" >
                                            <div class="list-group mt-4">
                                                <a href="/profile" class="list-group-item text-sombre unlined"><sapn class="fas fa-user"></sapn> Mon Profil</a>
                                                <a href="/home" class="list-group-item text-sombre unlined pat_link">
                                                    <sapn class="fas fa-shopping-basket"></sapn> Gérer mon patrimoine
                                                </a>
                                                <a href=""  class="list-group-item text-sombre unlined link_verif_bien" data-toggle="modal" data-target="#verifier_bien">
                                                    <span class="fas fa-search"></span> Vérifier un bien
                                                </a>
                                                <a href="" class="list-group-item text-sombre unlined">
                                                    <span class="fas fa-question-circle"></span> Besoin d'aide
                                                </a>
                                                <a href="" class="list-group-item text-sombre unlined logout">
                                                    <span class="fas fa-sign-out-alt"></span> Deconnexion
                                                </a>                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>  
                        <?php } ?>       
                    </div>        
                </div>
            </div>    
        </div>    
        <div class="w-100 bg-vert">
            <div class="d-lg-none">
                <div class="row">
                    <div class="col-sm-12 pt-2 px-5">
                        <div class="w-100">
                            <div class="float-left">
                                <a href="/" class="logo">
                                    <img src="assets/img/logo/logo-ico.png" class="w-50" alt="">
                                </a>
                            </div>
                            <div class="float-right pb-3">
                                <button class="btn-vert btn border-dark menu">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 pt-3 collapse-menu close" style="display:none">
                        <div class="row">
                            <div class="col-sm-12 py-1 border-bottom">
                                <a href="/" class="mx-3 text-white unlined"><span class="fas fa-home"></span> Accueil</a>
                            </div>
                            <div class="col-sm-12 py-1 border-bottom">
                                <a href="/comment-ca-marche" class="mx-3 text-white unlined"><span class="fas fa-info-circle"></span> Comment ça marche ?</a>
                            </div>
                            <div class="col-sm-12 py-1 border-bottom">
                                <a href="/a-propos" class="mx-3 text-white unlined"><span class="fas fa-indent"></span> A propos</a>
                            </div>
                            <?php if (!isset($_SESSION['auth']))  {?>
                            <div class="col-sm-12 py-1 border-bottom espace-mbre-item">
                                <a href="" class="mx-3 text-white unlined" data-toggle="modal" data-target=".connexion-modal"><span class="fas fa-lock"></span> Espace membre</a>
                            </div>
                            <?php }else {?>
                            <div class="col-sm-12 py-1 border-bottom espace-mbre-item option-user">
                                <img src="assets/img/elements/user.png" class="v-small-img" alt="">&nbsp;
                                <span class="customer text-white h6"><?php echo explode(" ", $_SESSION['name'])[0] . " " . explode(" ", $_SESSION['name'])[2]  ?></span>
                                <div class="row">
                                    <div class="col-12 p-0 collapse-user-items" style="display:none">
                                        <div class="list-group mt-4">
                                            <a href="/profile" class="list-group-item text-sombre unlined"><sapn class="fas fa-user"></sapn> Mon Profil</a>
                                            <a href="/home" class="list-group-item text-sombre unlined">
                                                <sapn class="fas fa-shopping-basket"></sapn> Gérer mon patrimoine
                                            </a>
                                            <a href="" class="list-group-item text-sombre unlined link_verif_bien" data-toggle="modal" data-target="#mes-biens">
                                                <span class="fas fa-search"></span> Vérifier un bien
                                            </a>
                                            <a href="" class="list-group-item text-sombre unlined">
                                                <span class="fas fa-question-circle"></span> Besoin d'aide
                                            </a>
                                            <a href="" class="list-group-item text-sombre unlined logout">
                                                <span class="fas fa-sign-out-alt"></span> Deconnexion
                                            </a>                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    
    
</section>


<section id="modals">
    <div class="modal fade bd-example-modal-lg" id="mes-biens" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-sombre">
                    <h5 class="text-orange modal-title">
                        <b>
                            <span class="fas fa-shopping-basket"></span> Mes biens
                        </b>
                    </h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body p-0">
                    <div class="w-100 p-3 shadow box-filter text-center">
                        <?php
                        $q = "select DISTINCT type_bien, designation from categorie, biens where idType=type_bien";
                        $x = retrieveLineDB($q);
                        if ($x>0) {?>
                        <div class="row">
                            <div class="col-lg-12 filter-1">
                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option value="0">Aucun filtre</option>
                                        <option value="1">FIltrer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 filter-2" style="display:none">
                                <div class="form-group w-100 d-flex justify-content-center">
                                    <select name="" id="filtre" class="form-control w-100 p-2 text-center">
                                        <option value="0">TOUT</option>
                                        <?php for ($i=0; $i < $x; $i++) { ?>
                                        <option class="text-sombre" value="<?php echo retrieveDB($q, 2)[$i][0] ?>">
                                            <?php echo retrieveDB($q, 2)[$i][1] ?>
                                        </option>
                                        <?php }?>
                                    </select>
                                </div> 
                            </div>
                        </div>
                           
                        <?php } ?>
                        <p>
                            <h6 class="d-none">Resultat du filtre : <b></b></h6>
                        </p>
                    </div>
                    <div class="p-3 medium-max-height" style="overflow-y: scroll;">
                        <h5 class="text-sombre text-center m-3">Résumé de mes biens</h5>
                        <!-- <img src="https://api.qrserver.com/v1/create-qr-code/?size=170x170&data=${13542645507064-monpatrimoine.ci-VOITURE}" alt="" class="w-50"> -->
                        <?php 
                        
                        // $line =0;
                        $col = 9;
                        ?>
                        <input type="hidden" id="nbreBien" value="<?php echo $line ?>">
                        <input type="hidden" id="myProcess">
                        <?php
                        if ($line>0) {
                            for ($i=0; $i < $line ; $i++) { 
                                $categorie = retrieveDB($sql, $col)[$i][4];
                        ?>
                        <div class="card border-success shadow my-4 data-list <?php echo strtolower(retrieveDB($sql, $col)[$i][4]) ?>">
                            <div class="card-body">
                                <div class="row box-info">
                                    @if(str_contains(url()->current(), '/mobile') || str_contains(url()->current(), '/ecran') || str_contains(url()->current(), '/imprimantes') || str_contains(url()->current(), '/automobile') || str_contains(url()->current(), '/multimedia') || str_contains(url()->current(), '/ordinateur'))
                                    <div class="col-lg-3">
                                        <?php
                                            $defaultPath = "../../assets/img/post/" . $_SESSION['ident_client'] . "/" . $categorie . "_1_" . retrieveDB($sql, $col)[$i][0] . ".jpg";
                                        ?>
                                        <img src="<?php echo $defaultPath ?>" alt="<?php echo retrieveDB($sql, $col)[$i][2] ?>" class="medium-img small-height w-100">

                                        
                                    </div>
                                    @else
                                    <div class="col-lg-3">
                                        <?php
                                        $defaultPath = "assets/img/post/" . $_SESSION['ident_client'] . "/" . $categorie . "_". retrieveDB($sql, $col)[$i][0] . ".jpg";
                                        if (!file_exists($defaultPath)) {?>
                                            <img src="<?php echo "assets/img/elements/default/phone.png" ?>" class="medium-img small-height">
                                        <?php } else{ ?>
                                            <img src="<?php echo $defaultPath ?>" alt="<?php echo retrieveDB($sql, $col)[$i][2] ?>" class="medium-img small-height w-100">
                                        <?php } ?>
                                        
                                    </div>
                                    @endif
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-12 text-center text-vert h5">
                                                <b class="num_bien"><?php echo "Bien N°" . retrieveDB($sql, $col)[$i][0] ?></b>
                                            </div>
                                            <div class="col-lg-12 propriete mt-3">
                                                <div class="row">
                                                    <div class="col-lg-5 text-right px-0">Marque : </div>
                                                    <div class="col-lg-7 text-left h5 px-0"><b>&nbsp; <?php echo retrieveDB($sql, $col)[$i][3] ?></b></div>
                                                    <div class="col-lg-5 text-right px-0">Modèle : </div>
                                                    <div class="col-lg-7 text-left h5 px-0"><b>&nbsp; <?php echo retrieveDB($sql, $col)[$i][2] ?></b></div>
                                                    <?php if ($categorie=="UC" || $categorie=="PCP") {
                                                        $label = "S/N|Adresse MAC";
                                                    } else if ($categorie=="PHONE" || $categorie=="TAB") {
                                                        $label = "IMEI";
                                                    }
                                                    else if ($categorie=="MOTO" || $categorie=="VOITURE") {
                                                        $label = "N°Châssis|Immatriculation";
                                                    }
                                                    else{
                                                        $label = "N° de série";
                                                    }
                                                        ?>
                                                    <?php if ($categorie=="MOTO" || $categorie=="VOITURE") {?>
                                                    <div class="col-lg-5 text-right ident_var px-0">N° de châssis : </div>
                                                    <div class="col-lg-7 text-left h5 px-0"><b>&nbsp; <?php echo explode("~", retrieveDB($sql, $col)[$i][1])[0] ?></b></div>
                                                    <div class="col-lg-5 text-right ident_var px-0">Immatriculation : </div>
                                                    <div class="col-lg-7 text-left h5 px-0"><b>&nbsp;<?php echo explode("~", retrieveDB($sql, $col)[$i][1])[1] ?></b></div>
                                                    <?php }else if ($categorie=="UC" || $categorie=="PCP") {?>
                                                    <div class="col-lg-5 text-right ident_var px-0">N° série : </div>
                                                    <div class="col-lg-7 text-left h5 px-0"><b>&nbsp;<?php echo explode("~", retrieveDB($sql, $col)[$i][1])[0] ?></b></div>
                                                    <div class="col-lg-5 text-right ident_var px-0">Adresse Mac : </div>
                                                    <div class="col-lg-7 text-left h5 px-0"><b>&nbsp;<?php echo explode("~", retrieveDB($sql, $col)[$i][1])[1] ?></b></div>
                                                    <?php }else {?>
                                                    <div class="col-lg-5 text-right ident_var px-0"><?php echo $label ?> : </div>
                                                    <div class="col-lg-7 text-left h5 px-0"><b>&nbsp;<?php echo retrieveDB($sql, $col)[$i][1] ?></b></div>
                                                    <?php }?>
                                                    <div class="col-lg-5 text-right px-0">Enrégistrer le : </div>
                                                    <div class="col-lg-7 text-left h5 text-orange px-0"><b>&nbsp;<?php echo substr(retrieveDB($sql, $col)[$i][7], 0, 10) ?></b></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 p-0 my-3">
                                                <div class="row">
                                                    <?php
                                                    $rqt = "select * from biens where codepatrimoine=0 and code='" . retrieveDB($sql, $col)[$i][0]. "'";
                                                    $x = retrieveLineDB($rqt);
                                                    if ($x==0) {?>
                                                    <div class="col-3 mx-2">
                                                        <button class="btn btn-sombre btn-delete">
                                                            Supprimer 
                                                            <span class="fas fa-trash"></span>
                                                        </button>
                                                    </div>
                                                    <div class="col-3 ml-4 mr-3">
                                                        <button class="btn btn-sombre btn-share">
                                                            Tranférer 
                                                            <span class="fas fa-share"></span>
                                                        </button>
                                                    </div>
                                                    <?php 
                                                        $rqt = "select * from perte where bien='" . retrieveDB($sql, $col)[$i][1] . "'";
                                                        $cpt = retrieveLineDB($rqt);
                                                        if ($cpt==1) {?>
                                                            <div class="col-3 mx-2">
                                                                <button class="btn btn-danger btn-statut">
                                                                    <span class="text">Retrouvé ?</span> 
                                                                    <span class="fas fa-times"></span>
                                                                </button>
                                                            </div>
                                                        <?php } else {?>
                                                            <div class="col-3 mx-3">
                                                                <button class="btn btn-sombre btn-statut">
                                                                    <span class="text">Perdu ?</span> 
                                                                    <span class="fas fa-check-circle"></span>
                                                                </button>
                                                            </div>
                                                        <?php }
                                                        }
                                                    ?>
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <?php 
                                            $q = "select code_info from qr_code, biens where id=codePatrimoine and id='" . retrieveDB($sql, $col)[$i][6] . "'";
                                        ?>
                                        <div class="row text-center">
                                            <div class="col-lg-12">
                                                <input type="hidden" id="code_qrcode" value="<?php echo retrieveDB($q, 1)[0][0] ?>">
                                                <input type="hidden" id="ident_qrcode" value="<?php echo retrieveDB($sql, $col)[$i][6] ?>">
                                                <input type="hidden" id="code_bien" value="<?php echo retrieveDB($sql, $col)[$i][0] ?>">
                                                <input type="hidden" id="ident_bien" value="<?php echo retrieveDB($sql, $col)[$i][1] ?>">
                                                <input type="hidden" id="categ_bien" value="<?php echo strtolower(retrieveDB($sql, $col)[$i][4]) ?>">
                                                <img src="assets/img/elements/default/qrCode-error.png" alt="" class="normal-img qr-code-img">
                                            </div>
                                            <div class="col-lg-12 pt-2">
                                                <small class="badge btn-success p-2 w-100">Demander autolocolant</small><br>
                                                <small><i>L'autocolant doit être collé au dos du bien</i></small>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-12 text-center">
                                        <small class="text-danger b">
                                            Ce bien est en cours de validation donc pourrait-être validé ou rejeté de votre patrimoine 
                                            <br>(Délai de traitement 24h).
                                        </small>
                                    </div>
                                </div>
                                <div class="row box-alert" style="display:none">
                                    <div class="col-lg-12">
                                        <h6 class="text-sombre text-center">
                                            Attention ! Vous êtes sur le point de supprimer ce bien de votre patrimoine.
                                            <br>
                                            <b> Vous perdrez immédiatement sa propiété. </b>
                                        </h6>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <button class="btn btn-large btn-secondary btn-cancel">Annuler</button>
                                        <button class="btn btn-large btn-danger btn-confirmer">Confirmer</button>
                                    </div>
                                </div>
                                <div class="row box-transfert" style="display:none">
                                    <div class="col-lg-12 box-menu">
                                        <div class="row">
                                            <div class="col-lg-6 mt-3 scan">
                                                <div class="card btn btn-orange">
                                                    <div class="row py-3">
                                                        <div class="col-12">
                                                            <img src="assets/img/elements/default/qrcode.png" alt="" class="w-50">
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <h5>Transfert par scan</h5>
                                                            <small>Si votre correspondant est près de vous</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mt-3">
                                                <div class="card btn btn-orange code">
                                                    <div class="row py-3">
                                                        <div class="col-12">
                                                            <img src="assets/img/elements/default/code.png" alt="" class="w-50">
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <h5>Transfert par code</h5>
                                                            <small>Si votre correspondant n'est pas avec vous</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 box-form-transfert d-none">
                                        <div class="row text-center form-transfert">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="">Saisir le numéro de téléphone du correspondant</label>
                                                    <input type="text" class="form-control number text-center" maxlength="10">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <button class="btn btn-orange">
                                                    <span class="text">Confirmer</span> <span class="fas fa-share"></span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row result-transfert py-3 text-center d-none">
                                            <div class="col-lg-12">
                                                <h3 class="text-vert">
                                                    <b>Bien transféré avec succès <span class="fas fa-check-circle"></span></b>
                                                </h3>
                                                <h6>Le code de transfert est : <br> <b class="text-danger h2">XB524</b> </h6>
                                                <small>&Agrave; communiquer à votre correspondant</small>
                                            </div>
                                            <div class="col-lg-12 pt-2">
                                                <button class="btn btn-vert">
                                                    <span class="text">Merci</span> <span class="fas fa-thumbs-up"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }}else{ ?>
                        <div class="row pt-5 data-empty-0">
                            <div class="col-lg-12 text-center small-min-height text-muted">
                                <h3>Vous n'avez aucun bien dans votre patrimoine</h3>
                                <h1><span class="fas fa-exclamation-triangle big-ico"></span></h1>
                                <a href="" class="btn btn-vert btn-large mt-3 unlined"><span class="fas fa-plus-circle"></span> Ajouter un bien</a>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="row pt-5 data-empty-1 d-none">
                            <div class="col-lg-12 text-center small-min-height text-muted">
                                <h3>Aucun de vos biens ne correspond à cette catégorie</h3>
                                <h1><span class="fas fa-exclamation-triangle big-ico"></span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            
                
            </div>
        </div>
    </div>

    <div class="modal fade connexion-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog" id="espace-mbre">
            <div class="modal-content">
                <div class="modal-header text-vert">
                    <h5 class="modal-title" id="exampleModalLabel"><sapn class="fas fa-user"></sapn> Espace membre</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-sombre pb-5">
                    <div class="box-conx">
                        <form action="" class="myForm">
                            <div class="row px-3">
                                <div class="col-12 text-center text-light">
                                    <span class="big-ico"><i class="fas fa-user"></i></span>
                                    <h3 class="text-orange">Connexion</h3>
                                    <h6>Saisissez vos coordonnées pour accéder à <br> votre espace membre.</h6>
                                </div>
                                <div class="col-12 pt-5">
                                    <p class="labReturn alert-danger p-2 text-center" style="display:none">Identifiant ou mot de passe incorrect !</p>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label text-light">Identifiant de connexion</label>
                                        <input type="text" class="form-control" id="email" required placeholder="Numéro de téléphone ou Adresse mail">
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label text-light">Mot de passe</label>
                                        <i class="fas fa-eye text-dark"></i>
                                        <input type="password" class="form-control" id="password" required>
                                    </div>
                                </div>
                                <div class="col-12 pt-3 text-center text-light myBtn-login">
                                    <button type="submit" class="btn btn-orange btn-lg btn-block">
                                        <span class="text">Se connecter</span> &nbsp; <i class="fas fa-arrow-circle-right"></i>
                                    </button>
                                    <br>
                                    <p class="mt-2">Mot de passe oublié ? <a href="" class="unlined text-orange reset_link">Cliquez-ci</a></p>
                                </div>
                                <div class="col-12 mt-2 myBtn-account">
                                    <p class="text-light text-center">Pas encore membre ?</p>
                                    <button type="button" class="btn btn-success btn-lg btn-block">
                                        Créer un compte &nbsp; <i class="fas fa-unlock"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="box-insc" style="display:none">
                        <form action="" class="myForm">
                            <div class="row px-3">
                                <div class="col-12 text-center text-light">
                                    <span class="big-ico"><i class="fas fa-user"></i></span>
                                    <h3 class="text-orange">Inscription</h3>
                                    <h6>Saisissez vos coordonnées pour la création <br> de votre espace membre</h6>
                                    <input type="hidden" id="ident" value="<?php echo uniqid() ?>">
                                </div>
                                <div class="col-12 pt-4">
                                    <div class="step-one d- none">
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label for="recipient-name" class="col-form-label text-light">Nom</label>
                                                <input type="text" class="form-control" required id="nom" placeholder="Nom de famille">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="recipient-name" class="col-form-label text-light">Prénom(s)</label>
                                                <input type="text" class="form-control" required id="prenom" placeholder="Prénom personnel">
                                            </div>
                                            <div class="form-group col-lg-6 email-group">
                                                <label for="recipient-name" class="col-form-label text-light">Adresse mail </label>
                                                <input type="email" class="form-control" required id="email" placeholder="monmail@exemple.com">
                                                <small class="h6 text-orange p-2 mt-2 w-100 d-none">* Cet adresse est déjà utilisé</small>    
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="recipient-name" class="col-form-label text-light">Contact téléphonique</label>
                                                <input type="text" class="form-control number" maxlength="10" required id="tel" placeholder="xx xx xx xx xx">
                                            </div>
                                            <div class="form-group col-lg-6 password-group">
                                                <label for="recipient-name" class="col-form-label text-light">Mot de passe</label>
                                                <input type="password" class="form-control" required id="password" placeholder=""> 
                                                <i class="fas fa-eye"></i>  
                                                <small for="" class="h6 text-orange px-1 mt-1 w-100 d-none"></small>                                             
                                            </div>
                                            <div class="form-group col-lg-6 confirm-password-group">
                                                <label for="recipient-name" class="col-form-label text-light">Confirmer le mot de passe</label>
                                                <input type="password" class="form-control" required id="confirm_paswd" placeholder="">
                                                <i class="fas fa-eye"></i> 
                                                <small for="" class="h6 text-orange px-1 mt-1 w-100 d-none">* Mot de passe non-identique</small>
                                            </div>
                                        </div> 
                                    </div>  
                                    <div class="step-two d-none">
                                        <div class="row">
                                            <div class="col-lg-12 alert-visual">
                                                <div class="alert alert-info text-center">
                                                    <h5>Patientez SVP ...</h5>
                                                    <h6>Veuillez le saisir ici</h6>
                                                    <input type="hidden" id="return-thread">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-12 code text-center d-none">
                                                <label for="recipient-name" class="col-form-label text-light">Veuillez le saisir ici</label>
                                                <input type="text" class="form-control text-center" required id="code-validation" placeholder="XXXXX">
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="step-three d-none">
                                        <h6 class="text-center text-light">
                                            <i>
                                                Pour utliser toutes les fonctionnalités de votre compte,
                                                vous devez confirmez votre identité <br>
                                                CNI/Permis de conduirer/Passeport/Attestation d'indentité <br>
                                                <span class="text-vert">(Etape recommandée)</span>
                                            </i>
                                        </h6>
                                        <div class="card-group p-2">
                                            <div class="card recto mx-3">
                                                <div class="save-data-link-image">
                                                    <input type="text" class="fileImage-recto d-none">
                                                </div>
                                                <div class="card-header h3 bg-info text-center text-light">RECTO</div>
                                                
                                                <div class="card-body text-center">
                                                    <img class="card-img-top" src="assets/img/elements/icon-image.png" alt="Card image cap w-25" style="max-height:200px">
                                                    <small class="alert-danger  p-2 mt-2 d-none w-100">
                                                        <span class="fa fa-times"></span>
                                                        <span class="errorLab"></span>
                                                    </small>
                                                    <small class="alert-success p-2 mt-2 d-none w-100">Chargement de l'image ...</small>
                                                </div>
                                                <div class="card-footer">
                                                    <input type="file" class="d-none" name="fileImage-recto" id="fileImage-recto"  >
                                                    <button type="button" class="btn btn-orange btn-lg btn-add-file"><i class="fa fa-plus"></i></button>
                                                    <button type="button" class="btn btn-orange btn-lg d-lg-none btn-camera"><i class="fa fa-camera"></i></button>
                                                </div>
                                            </div>
                                            <div class="card verso mx-3">
                                                <div class="save-data-link-image">
                                                    <input type="text" class="fileImage-verso d-none">
                                                </div>
                                                <div class="card-header h3 bg-info text-center text-light">VERSO</div>
                                                
                                                <div class="card-body text-center">
                                                    <img class="card-img-top" src="assets/img/elements/icon-image.png" alt="Card image cap w-25" style="max-height:200px">
                                                    <small class="alert-danger p-2 mt-2 w-100 d-none">
                                                        <span class="fa fa-times"></span>
                                                        <span class="errorLab"></span>
                                                    </small>
                                                    <small class="alert-success p-2 mt-2 d-none w-100">Chargement de l'image ...</small>
                                                </div>
                                                <div class="card-footer">
                                                    <input type="file" class="d-none" name="fileImage-verso" id="fileImage-verso"  >
                                                    <button type="button" class="btn btn-orange btn-lg btn-add-file"><i class="fa fa-plus"></i></button>
                                                    <button type="button" class="btn btn-orange btn-lg d-lg-none btn-camera"><i class="fa fa-camera"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="step-final d-none">
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <div class="alert alert-success">
                                                    <img src="assets/img/elements/super.png" alt="" class="small-img">
                                                    <h2><b>SUPER</b></h2>
                                                    <h3>Votre compte a été crée avec succès</h3>
                                                </div>
                                            </div>
                                            <div class="col-12 text-center">
                                                <a href="/home" class="btn btn-lg btn-success">Terminer <span class="fas fa-thumbs-up"></span></a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-12 pt-3 text-center text-light myBtn-account">
                                    <button type="submit" class="btn btn-orange btn-lg btn-block">
                                        <span class="text">Créer son compte</span> &nbsp; <i class="fas fa-arrow-circle-right"></i>
                                    </button>
                                    <br>
                                </div>
                                <div class="col-12 mt-2 myBtn-login">
                                    <p class="text-light text-center">Déjà membre ?</p>
                                    <button type="button" class="btn btn-success btn-lg btn-block">
                                        Se connecter &nbsp; <i class="fas fa-unlock"></i>
                                    </button>
                                </div>
                            </div>
                             
                             
                        </form>
                    </div>
                    <div class="box-reset-password" style="display:none">
                        <form action="" class="myForm">
                            <div class="row px-3">
                                <div class="col-12 text-center text-light">
                                    <span class="big-ico"><i class="fas fa-user"></i></span>
                                    <h3 class="text-orange">Modification</h3>
                                    <h6>Modifier votre mot de passse en toute<br> sécurité.</h6>
                                </div>
                                <input type="hidden" id="code-reset" value="<?php echo uniqid() ?>">
                                <div class="col-12 part-email">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label text-light">Email</label>
                                                <input type="text" class="form-control" id="email" required placeholder="Saisir votre adresse mail">
                                                <small class="labError d-none text-orange">Cet adresse n'appartient à un aucun</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                                <div class="col-12 part-verification" style="display:none">
                                    <div class="row">
                                        <div class="col-12 pt-5">
                                            <div class="form-group text-center">
                                                <label for="recipient-name" class="col-form-label text-light">Code de vérification</label>
                                                <input type="text" class="form-control text-center h5" required id="code_verification" placeholder="XXXXXXXXXXXXXXX">
                                                <small class="labError d-none text-orange">Veuillez saisir un code de vérification valide</small>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-12 part-reset-password" style="display:none">
                                    <div class="sub-box-1">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group new_password">
                                                    <label for="recipient-name" class="col-form-label text-light">Nouveau mot de passe</label>
                                                    <input type="password" class="form-control" id="new_password" placeholder="" required>
                                                    <i class="fas fa-eye"></i>  
                                                    <small class="labError d-none text-orange">Cet adresse n'appartient à un aucun</small>
                                                </div>
                                                <div class="form-group verif_new_password">
                                                    <label for="recipient-name" class="col-form-label text-light">Confirmation mot de passe</label>
                                                    <input type="password" class="form-control" id="verif_new_password" placeholder="" required>
                                                    <span class="fas fa-eye"></span>  
                                                    <small class="labError d-none text-orange">Cet adresse n'appartient à un aucun</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-box-2" style="display:none">
                                        <div class="row text-center">
                                            <div class="col-12">
                                                <div class="alert alert-success">
                                                    <img src="assets/img/elements/super.png" alt="" class="small-img">
                                                    <h2><b>SUPER</b></h2>
                                                    <h3>Votre a été modifié avec succès !</h3>
                                                </div>
                                            </div>
                                            <div class="col-12 text-center">
                                                <a href="/home" class="btn btn-lg btn-success">Terminer <span class="fas fa-thumbs-up"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 pt-3 text-center text-light myBtn-reset">
                                    <button type="submit" class="btn btn-orange btn-lg btn-block">
                                        <span class="text">Vérifier</span> &nbsp; <i class="fas fa-arrow-circle-right"></i>
                                    </button>
                                    <br>
                                    <p class="mt-2">Se connecter ? <a href="" class="unlined text-orange conx_link">Cliquez-ci</a></p>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="add-biens" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-sombre">
                    <h5 class="text-orange modal-title">
                        <b>
                            <span class="fas fa-shopping-basket"></span> Ajouter un bien
                        </b>
                    </h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body p-0">
                    <form action="" class="p-5">
                        <div class="row">
                            <div class="col-lg-12 box-field">
                                <div class="row">
                                    <div class="col-lg-12" id="ident-1">
                                        <label for="">Identifiant</label>
                                        <div class="form-group">
                                            <input type="text" required class="form-control disabled p-0 px-3 b designed not_char_spec">
                                        </div>
                                    </div>
                                    <div class="col-lg-6" id="ident-2">
                                        <label for="">Identifiant</label>
                                        <div class="form-group">
                                            <input type="text" required class="form-control p-0 px-3 b designed">
                                        </div>
                                    </div>
                                    <div class="col-lg-12" id="categ">
                                        <label for="">Catégorie</label>
                                        <div class="form-group">
                                            <input type="text" required class="form-control disabled p-0 px-3 b designed">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12" id="modele">
                                        <label for="">Modèle</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control b designed p-0 px-3" required>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                            <div class="col-lg-12 box-img pt-3 pb-5" style="display:none">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-3 text-center photo phone tab">
                                        <img src="assets/img/elements/default/fiche.jpg" alt="" class="w-100">
                                        <h6>IMEI</h6>
                                        <button type="button" class="btn btn-orange"><span class="fas fa-plus"></span></button>
                                        <button type="button" class="btn btn-sombre"><span class="fas fa-camera"></span></button>
                                    </div>
                                    <div class="col-lg-3 text-center photo phone tab">
                                        <img src="assets/img/elements/default/fiche.jpg" alt="" class="w-100">
                                        <h6>Recto du téléphone</h6>
                                        <button type="button" class="btn btn-orange"><span class="fas fa-plus"></span></button>
                                        <button type="button" class="btn btn-sombre"><span class="fas fa-camera"></span></button>
                                    </div>
                                    <div class="col-lg-3 text-center photo phone tab">
                                        <img src="assets/img/elements/default/fiche.jpg" alt="" class="w-100">
                                        <h6>Verso du téléphone</h6>
                                        <button type="button" class="btn btn-orange"><span class="fas fa-plus"></span></button>
                                        <button type="button" class="btn btn-sombre"><span class="fas fa-camera"></span></button>
                                    </div>
                                    <div class="col-lg-3 text-center photo moto voiture">
                                        <img src="assets/img/elements/default/fiche.jpg" alt="" class="w-100">
                                        <h6>Immatriculation</h6>
                                        <button type="button" class="btn btn-orange"><span class="fas fa-plus"></span></button>
                                        <button type="button" class="btn btn-sombre"><span class="fas fa-camera"></span></button>
                                    </div>
                                    <div class="col-lg-3 text-center photo audio cop ec imp pcp tv uc">
                                        <img src="assets/img/elements/default/fiche.jpg" alt="" class="w-100">
                                        <h6>photo de l'équipement</h6>
                                        <button type="button" class="btn btn-orange"><span class="fas fa-plus"></span></button>
                                        <button type="button" class="btn btn-sombre"><span class="fas fa-camera"></span></button>
                                    </div>
                                    <div class="col-lg-3 text-center photo moto voiture">
                                        <img src="assets/img/elements/default/fiche.jpg" alt="" class="w-100">
                                        <h6>Photo engin</h6>
                                        <button type="button" class="btn btn-orange"><span class="fas fa-plus"></span></button>
                                        <button type="button" class="btn btn-sombre"><span class="fas fa-camera"></span></button>
                                    </div>
                                    <div class="col-lg-3 text-center photo phone audio cop ec imp moto pcp tab tv uc voiture">
                                        <img src="assets/img/elements/default/fiche.jpg" alt="" class="w-100">
                                        <h6>Photo reçu</h6>
                                        <button type="button" class="btn btn-orange"><span class="fas fa-plus"></span></button>
                                        <button type="button" class="btn btn-sombre"><span class="fas fa-camera"></span></button>
                                    </div>
                                    <div class="col-lg-3 text-center photo moto voiture">
                                        <img src="assets/img/elements/default/fiche.jpg" alt="" class="w-100">
                                        <h6>Fiche de mutation</h6>
                                        <button type="button" class="btn btn-orange"><span class="fas fa-plus"></span></button>
                                        <button type="button" class="btn btn-sombre"><span class="fas fa-camera"></span></button>
                                    </div>
                                </div>
                            </div>    
                            <div class="col-lg-3">
                                <button class="btn btn-block btn-vert"><span class="text">Suivant</span>  <span class="fas fa-arrow-alt-circle-right"></span></button>
                            </div>
                            <div class="col-lg-3">
                                <button class="btn btn-block btn-danger" data-dismiss="modal"><span class="fas fa-times"></span> Annuler</button>
                            </div>
                        </div>
                    </form>
                </div>
            
                
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="verifier_bien" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-sombre">
                    <h5 class="text-orange modal-title">
                        <b>
                            <span class="fas fa-shopping-basket"></span> Verifier un bien
                        </b>
                    </h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body p-0">
                    <form action="" class="p-5">
                        <div class="row">
                            <div class="col-lg-12 box-search">
                                <form action="" class="form-verification">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 text-center px-5 py-2">
                                            <div class="text-vert h3 b">Vérifier la propriété d'un bien en 3 clics</div>
                                            <p class="h5 text-vert">Ordinateur, TV, Téléphone, Audio, Imprimante, Motos, Voitures etc...</p>
                                        </div>
                                        <div class="col-lg-12 col-sm-12 pt-4">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <?php 
                                                        $sql = "select * from categorie";
                                                        $line = retrieveLineDB($sql);
                                                        $col = 6;
                                                    ?>
                                                
                                                    <div class="form-group">
                                                        <select name="" id="categorie" class="form-control">
                                                            <option value="0" id="default"><b>CATEGORIE DU BIEN</b> </option>
                                                            <?php for ($i=0; $i < $line; $i++) { ?>
                                                            <option value="<?php echo retrieveDB($sql, $col)[$i][0] ?>" id="<?php echo retrieveDB($sql, $col)[$i][2] ?>">
                                                                <?php echo retrieveDB($sql, $col)[$i][1] ?>
                                                            </option>
                                                            <?php } ?>
                                                        </select>
                                                        <small for="" class="text-danger b d-none">* Choisir une catégorie</small>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" required class="form-control" id="id_search" placeholder="Saisir le N° de série">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12 pt-3 pb-3 d-flex justify-content-center">
                                            <button type="submit" class="btn btn-block btn-orange w-50 btn-search">
                                                Rechercher <span class="fas fa-search"></span>
                                            </button>
                                        </div>
                                        
                                        <div class="col-lg-12 col-sm-12 pt-3 d-lg-none">
                                            <div class="row">
                                                <div class="col-lg-12 col-sm-12 d-flex justify-content-center">
                                                    <img src="assets/img/elements/scan-qr.png" alt="" class="w-50">
                                                </div>
                                                <div class="col-lg-12 col-sm-12 d-flex justify-content-center">
                                                    <button type="button" class="btn btn-block btn-orange w-75 btn-scan">
                                                        Scanner le QR code <span class="fas fa-qrcode"></span>
                                                    </button>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-12 box-result d-none">
                                <div class="text-center py-5 text-sombre">
                                    <h3 class="text-sombre b mt-5">Veuillez Patientz SVP ...</h3> 
                                    <h1><span class="fas fa-spinner"></span></h1>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            
                
            </div>
        </div>
    </div>
</section>

@if(str_contains(url()->current(), '/mobile') || str_contains(url()->current(), '/ecran') || str_contains(url()->current(), '/imprimantes') || str_contains(url()->current(), '/automobile') || str_contains(url()->current(), '/multimedia') || str_contains(url()->current(), '/ordinateur'))
<!-- main js-bootstrap -->
<script src="../../assets/js/jquery-3.2.1.slim.min.js"></script>
<script src="../../assets/js/bootstrap.min.js" ></script>

<script src="../../assets/js/jquery.min.js"></script>
@else
<!-- main js-bootstrap -->
<script src="assets/js/jquery-3.2.1.slim.min.js"></script>
<script src="assets/js/bootstrap.min.js" ></script>

<script src="assets/js/jquery.min.js"></script>
@endif

<!-- for method post -->

<script>
    $(()=>{


        $("#add-biens .btn-vert").click(function () {
            var modele = $("#add-bien #modele input").val()
            $(this).find(".text").text("Valider")
            if (modele!="") {
                var categId = $(this).closest("#add-biens").find("#categ input").val()
                var q = "select idType from categorie where designation='" + categId + "'"
                $.post("traitements/retrieve.php", {rqt:q, nbreCol:1}, function (data) {
                    var idCateg = data.replace("#$", "").split("|")[1].toLowerCase()
                    var myClass = $("#add-biens .photo").attr("class")
                    var sel = "#add-biens ." + idCateg
                    $("#add-biens .photo").addClass("d-none")
                    $(sel).removeClass("d-none")
                })
                $(".box-img").fadeIn(500)
                $(".box-field").fadeOut(2)

                return false
            } 
            
        })


        $(".not_char_spec").on('keypress', function (event) {
            var regex = new RegExp("^[a-zA-Z0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });

        

        $(".link_verif_bien").click(function(){
            $("#verifier_bien select#categorie").val("0")
            $("#verifier_bien #id_search").val("").attr("placeholder", "")
            $("#verifier_bien .box-search").removeClass("d-none")
            $("#verifier_bien .box-result").addClass("d-none")
            $('#verifier_bien form')[0].reset()
            $("#verifier_bien #id_search").attr("placeholder", "")
            $("#verifier_bien .box-result").html('<div class="text-center mt-5 pt-5 text-light"><h3 class="text-light mt-5">Veuillez Patientz SVP ...</h3> <h1><span class="fas fa-spinner"></span></h1></div>')

        })

        
        $("#verifier_bien select#categorie").change(function () {
            var idAttr = $(this).find("option:selected").attr("id")
            var placeholder = ""

            if (idAttr=="serial") {
                placeholder = "Saisir le N° de série"
            } else if (idAttr=="mle"){ 
                placeholder = "Saisir le N° de châssis ou l'immatriculation"
            }
            else{
                placeholder = "Saisir l'IMEI"
            }
            $("#verifier_bien #id_search").attr("placeholder", placeholder).val("")
        })

        $("#verifier_bien .btn-search").click(function () {
            var inputVal = $(this).closest("#verifier_bien").find("#id_search").val()
            var identifiant = $(this).closest("#verifier_bien").find("#categorie").val()
            var data = identifiant + "#|" + inputVal
            if (inputVal!='' && identifiant!="0") {
                $(this).closest("#verifier_bien").find(".box-result").removeClass("d-none")
                $(this).closest("#verifier_bien").find(".box-search").addClass("d-none")
                $.post('traitements/var_session.php', {var:data})
                $(this).closest("#verifier_bien").find(".box-result").load("pages/search_result.php")
                $(this).closest("#verifier_bien").find("#id_search").removeClass('bg-danger')
                $(this).closest("#verifier_bien").find("#categorie").removeClass("border-danger")
                $(this).closest("#verifier_bien").find("#categorie").next("small").addClass("d-none")
                return false

            } else if (inputVal!='' && identifiant=="0"){
                $(this).closest("#verifier_bien").find("#categorie").addClass("border-danger")
                $(this).closest("#verifier_bien").find("#categorie").next("small").removeClass("d-none")
                return false
            }
            else if (inputVal=='' && identifiant!="0"){
                $(this).closest("#verifier_bien").find("#id_search").addClass('bg-danger')
                $(this).closest("#verifier_bien").find("#categorie").removeClass("border-danger")
                $(this).closest("#verifier_bien").find("#categorie").next("small").addClass("d-none")
            }
            else{
                $(this).closest("#verifier_bien").find("#id_search").addClass('bg-danger')
                $(this).closest("#verifier_bien").find("#categorie").addClass("border-danger")
                $(this).closest("#verifier_bien").find("#categorie").next("small").removeClass("d-none")
                
            }
        })

        $("#verifier_bien #categorie").change(function () {
            var c = $(this).val()
            if (c=="0") {
                $(this).addClass("border-danger")
                $(this).next("small").removeClass("d-none")
            } else {
                $(this).removeClass("border-danger")
                $(this).next("small").addClass("d-none")
            }
        })

        $("#verifier_bien #id_search").keydown(function () {
            $(this).removeClass('bg-danger')
        })

        $("#verifier_bien .btn-detail").click(function () {
            $("#verifier_bien .detail").removeClass("d-none")
            $("#verifier_bien .message").addClass("d-none")
            $(this).addClass("d-none")
        })

        $(".option-user .link_verif_bien").click(function () {
            //return false
        })

        $(".data-empty-0 a").click(function(){
            $(".close").click()
            var url = $(location).attr("href");
			if (url.includes("/home")==true) {
                $("#pages_space").load("pages/declaration-de-bien.php")
            } else {
                $.post("traitements/var_session.php", {var:"plomber"}, function (data) {})
                location.href="/home"
            }
             return false
        })

        $(".pat_link").click(function () {
            $.post("traitements/var_session.php", {var:""}, function (data) {})
        })

        $(".filter-1").change(function () {
            if ($(this).find("select").val()=="0") {
                $(this).addClass("col-lg-12").removeClass("col-lg-6")
                $(".filter-2").hide(300)                
                $("#mes-biens .card").show(500)
                $(".data-empty-1").addClass("d-none")
                $(".filter-2").find("select").val("0")
                $(".box-filter h6").addClass("d-none")
            } else {
                $(".filter-2").show(500)
                $(this).addClass("col-lg-6").removeClass("col-lg-12")
                
            }
        })

        $("#filtre").change(function () {
            var filter = $(this).val().toLowerCase()
            var client = $("#ident_client").val()
            if (filter=="0") {
                $("#mes-biens .card").show(500)
                $(".box-filter h6").addClass("d-none")
            } else {
                $(".box-filter h6").removeClass("d-none")
                var selector_filter = "." + filter 
                $("#mes-biens .card").hide(100)
                $(selector_filter).show(500)

                var q = "select * from biens where type_bien='" + filter + "' and client='" + client + "'"
                $.post("traitements/test.php", {rqt:q}, function (data) {
                    if (data>1) {
                        $(".box-filter h6 b").text(data + " biens repertoriés")
                        $(".data-empty-1").addClass("d-none")
                    } else {
                        if (data==0) {
                            $(".data-empty-1").removeClass("d-none")
                        }
                        else{
                            $(".data-empty-1").addClass("d-none")
                        }
                        $(".box-filter h6 b").text(data + " bien repertorié")
                    }
                    
                })
            }
            
        })



        $("#mes-biens .card").each(function () {
            // var code_qrcode = $(this).find("input#code_qrcode").val()
            // var urlqrcode = "https://api.qrserver.com/v1/create-qr-code/?size=170x170&data=" + code_qrcode + ""
            // $(this).find("img.qr-code-img").attr('src', urlqrcode)
            
        })

        $("button.menu").click(function(){
            var myClass = $(".collapse-menu").attr("class")
            if (myClass.includes("open")==true) {
                $(".collapse-menu").addClass("close").removeClass('open')
                $(".collapse-menu").slideUp(500)
            } else {
                $(".collapse-menu").addClass("open").removeClass('close')
                $(".collapse-menu").slideDown(500)
            }
        })

        $(".espace-mbre-item a").click(function () {
            $(".box-conx").show()
            $(".box-insc").hide()
            $(".box-reset-password").hide()
            $("#espace-mbre").removeClass("modal-lg")
            $(".myForm")[0].reset()
            $(".myForm")[1].reset()
            $(".myForm")[2].reset()
        })

        $('html').click(function () {
            $(".collapse-user-items").addClass("d-none")
            $(".collapse-user-items").addClass("d-none").removeClass("active")
        });

        $(".option-user").click(function(event){
            var myClass = $(".collapse-user-items").attr("class")
            if (myClass.includes('active')==true) {
                $(".collapse-user-items").addClass("d-none")
                $(".collapse-user-items").addClass("d-none").removeClass("active")
                
            } else {
                event.stopPropagation();
                $(".collapse-user-items").removeClass("d-none")
                $(".collapse-user-items").removeClass("d-none").addClass("active")
            }
        })

        $('.number').on('input',function(){
            var valeur = $(this).val();
            valeur = valeur.replace(/\D+/,'');
            // on peut ajouter d'autres contrôles
            $(this).val(valeur);
        });

        $(".btn-delete").click(function(){
            $(".box-info").show(100)
            $(".box-alert").hide(100)
            $("#myProcess").val("deleting")
            $(".box-alert h6").html("Attention ! Vous êtes sur le point de supprimer ce bien de votre patrimoine.<br><b> Vous perdrez immédiatement sa propiété. </b>")
            $(this).closest(".box-info").hide(100)
            $(this).closest(".box-info").next(".box-alert").show(500)   
        })

        $(".btn-cancel").click(function(){
            $(this).closest(".box-alert").hide(100)
            $(this).closest(".box-alert").prev(".box-info").show(500)
            
        })

        $(".btn-confirmer").click(function(){
            var myProcess = $("#myProcess").val()
            if (myProcess=="deleting") {
                var client = $("#ident_client").val()
                var code_bien = $(this).closest(".card").find("#code_bien").val()
                var sql = "delete from biens where client='" + client + "' and code='" + code_bien + "'"
                $.post('traitements/query.php',{rqt:sql}, function(ret){})
                
                $(this).closest(".card").slideUp()
                var childs = $(this).closest(".modal-body").find(".card").length
                var biens = $("#nbreBien").val()
                var x = parseInt(biens) - 1
                $("#nbreBien").val(x) 
                var val = $("#nbreBien").val()
                if (val==0) {
                    $('.data-list').addClass("d-none")
                    $('.data-empty-1').removeClass("d-none")
                } 
            } else {
                var dt = new Date(); 
                var currentDate = dt.getFullYear() + "-" + (dt.getMonth()+1) + "-" +  dt.getDate()
                var id_bien = $(this).closest(".data-list").find('#ident_bien').val()
                var code_declaration = Math.floor((Math.random() * 1000000) + 1000000)
                
                var rqt = "insert into perte values(" + code_declaration + ",'" + currentDate + "','" + id_bien + "','" + dateActuelle() + "','" + dateActuelle() + "')"
                $.post("traitements/query.php", {rqt:rqt}, function (retour) {})
                $(this).closest(".card").find(".btn-statut").addClass("btn-danger").removeClass("btn-sombre")
                $(this).closest(".card").find(".btn-statut").find(".text").text("Retrouvé ?")
                $(this).closest(".card").find(".btn-statut").find(".fas").addClass("fa-times").removeClass("fa-check-circle")

                
                $(this).closest(".box-alert").hide(100)
                $(this).closest(".box-alert").prev(".box-info").show(500)
            }
            
        })

        $(".btn-statut").click(function(){
            var id_bien = $(this).closest(".data-list").find('#ident_bien').val()
            
            var myClass = $(this).attr("class")
            
            if (myClass.includes("btn-danger")) {
                var rqt = "delete from perte where bien='" + id_bien + "'"
                $.post("traitements/query.php", {rqt:rqt}, function (retour) {})
                $(this).addClass("btn-sombre").removeClass("btn-danger")
                $(this).find(".text").text("Perdu ?")
                $(this).find(".fas").removeClass("fa-times").addClass("fa-check-circle")

            } else {
                $("#myProcess").val("perte")
                $(".box-alert h6").html("Attention ! Une alerte sera envoyée pour empêcher son rachat par les membres de la communauté.<br><small>Vous devez cependant enrégistrer une déclaration de perte dans le commissariat de police le plus proche. </small><b> Souhaitez-vous déclarer la perte de ce bien ? </b>")
                $(this).closest(".box-info").hide(100)
                $(this).closest(".box-info").next(".box-alert").show(500)

            }

            
        })

        $(".btn-share").click(function(){
            $(this).closest(".box-info").siblings(".box-transfert").show(500)
            $(this).closest(".box-info").hide(100)
        })

        $(".box-transfert .box-menu .code").click(function () {
            $(this).closest(".box-menu").addClass("d-none")
            $(this).closest(".box-menu").siblings(".box-form-transfert").removeClass("d-none")
            
            
        })

        $(".box-form-transfert .btn-orange").click(function(){
            $(this).closest(".form-transfert").addClass("d-none")
            $(this).closest(".form-transfert").next(".result-transfert").removeClass("d-none")
        })

        

        $("a.logout").click(function () {
            $.post("traitements/logout.php", function (ret) {
                location.href="/"
            })
            return false
        })

        //https://api.qrserver.com/v1/create-qr-code/?size=170x170&data=${13542645507064-monpatrimoine.ci-VOITURE}
        
        
        function dateActuelle() {
            var d = new Date();

            var month = d.getMonth()+1;
            var day = d.getDate();
            var minutes = d.getMinutes();
            var heures = d.getHours();
            var secondes = d.getSeconds();

            var datetime = (day<10 ? '0' : '') + day + '/' + (month<10 ? '0' : '') + month + "/" + d.getFullYear() + " " + (heures<10 ? '0' : '') + heures + ":" + (minutes<10 ? '0' : '') + minutes + ":" + (secondes<10 ? '0' : '') + secondes;
            return datetime;
        }
    })
</script>