<?php session_start();
if (isset($_SESSION["auth"])) {
    header("location:/");
}

?>
<!doctype html>
<html class="no-js" lang="zxx">
    <?php $pageTitle = "Tableau de bord"; @include("include/head.blade.php") ?>

   <body>
   <?php @include("include/preload.blade.php") ?>
    <!-- Preloader Start -->

    <?php @include("include/navbar.blade.php"); @include('traitements/functions.php'); ?>
    
    <main>

        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>BIENVENU DANS VOTRE PATRIMOINE</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-12 d-none d-lg-block">
                    <div class="row d-flex justify-content-center">
                        <div class=" col-lg-2 col-sm-2 p-2">
                            <a href="/declaration-de-bien" class="card bg-dark">
                                <div class="card-body text-center">
                                    <h1 class="text-light">
                                        <span class="fas fa-plus-circle big-ico"></span>
                                    </h1>
                                    <h4 class="text-light">Ajouter un bien</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2 col-sm-2 p-2">
                            <a href="/recevoir-un-bien" class="card bg-warning">
                                <div class="card-body text-center">
                                    <h1 class="text-light">
                                        <span class="fas fa-download big-ico"></span>
                                    </h1>
                                    <h4 class="text-light">Recevoir un bien</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2 col-sm-2 p-2">
                            <a href="/tranferer-un-bien" class="card bg-success">
                                <div class="card-body text-center">
                                    <h1 class="text-light">
                                        <span class="fas fa-retweet big-ico"></span>
                                    </h1>
                                    <h4 class="text-light">transferer un bien</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2 col-sm-2 p-2">
                            <a href="/decalration-de-perte" class="card bg-danger">
                                <div class="card-body text-center">
                                    <h1 class="text-light">
                                        <span class="fas fa-exclamation-triangle big-ico"></span>
                                    </h1>
                                    <h4 class="text-light">déclarer une perte</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2 col-sm-2 p-2">
                            <a href="/historique" class="card bg-info">
                                <div class="card-body text-center">
                                    <h1 class="text-light">
                                        <span class="fas fa-list-alt big-ico"></span>
                                    </h1>
                                    <h4 class="text-light">Historique</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 d-lg-none">
                    <div class="main-menu">
                        <nav class="text-dark">
                            <ul id="navigation" class="mb-3 text-white d-flex justify-content-center">
                                <li>
                                    <a href="/declaration-de-bien" class="h4 card bg-dark p-4 m-2">
                                        <span class="fas fa-plus-circle"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/recevoir-un-bien" class="h4 card bg-warning p-4 m-2"><span class="fas fa-download"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/tranferer-un-bien" class="h4 card bg-success p-4 m-2"><span class="fas fa-retweet"></span></a>
                                </li>
                                <li>
                                    <a href="/decalration-de-perte" class="h4 card bg-danger p-4 m-2"><span class="fas fa-exclamation-triangle"></span></a>
                                </li>
                                <li>
                                    <a href="/historique" class="h4 card bg-info p-4 m-2"><span class="fas fa-list-alt"></span></a>
                                </li>
                                <!--  -->
                                
                            </ul>
                        </nav>
                    </div>    
                </div>
                <!-- <div class="col-sm-12 d-lg-none">
                    <div class="row overflow-auto" style="max-height: 180px;">
                        <div class=" col-lg-2 col-sm-2 p-2">
                            <a href="#" class="card bg-dark">
                                <div class="card-body text-center">
                                    <h1 class="text-light">
                                        <span class="fas fa-plus-circle big-ico"></span>
                                    </h1>
                                    <h4 class="text-light">Ajouter un bien</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2 col-sm-2 p-2">
                            <a href="#" class="card bg-warning">
                                <div class="card-body text-center">
                                    <h1 class="text-light">
                                        <span class="fas fa-download big-ico"></span>
                                    </h1>
                                    <h4 class="text-light">Recevoir un bien</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2 col-sm-2 p-2">
                            <a href="#" class="card bg-success">
                                <div class="card-body text-center">
                                    <h1 class="text-light">
                                        <span class="fas fa-retweet big-ico"></span>
                                    </h1>
                                    <h4 class="text-light">transferer un bien</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2 col-sm-2 p-2">
                            <a href="#" class="card bg-danger">
                                <div class="card-body text-center">
                                    <h1 class="text-light">
                                        <span class="fas fa-exclamation-triangle big-ico"></span>
                                    </h1>
                                    <h4 class="text-light">déclarer une perte</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2 col-sm-2 p-2">
                            <a href="#" class="card bg-info">
                                <div class="card-body text-center">
                                    <h1 class="text-light">
                                        <span class="fas fa-list-alt big-ico"></span>
                                    </h1>
                                    <h4 class="text-light">Historique</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- Hero Area End -->
        <!-- Support Company Start-->
        <div class="support-company-area container">
            <div class="container-fluid">
                <div class="card historique d-none">
                    <div class="card-header">
                        <div class="card-title">
                            <h2><span class="fas fa-list-alt"></span> HISTORIQUE DE TACHES</h2>
                        </div>
                    </div>
                    
                    <div class="card-body pt-0">
                        <div class="row entete pt-2 bg-dark text-white" style="height:50px">
                            <div class="col-md-2"><h5 class="text-white">Image</h5> </div>
                            <div class="col-md-4"><h5 class="text-white">Informations</h5></div>
                            <div class="col-md-4"><h5 class="text-white">S/N ou IMEI</h5></div>
                            <div class="col-md-2"><h5 class="text-white">Action</h5></div>
                        </div>
                        <div class="row corps pt-2">
                            <div class="col-md-2"><img src="assets/img/elements/phone.png" alt="" class="w-25"></div>
                            <div class="col-md-4">
                                <h5>GALAXY SA12</h5>
                                <h6>SAMSUNG</h6>
                            </div>
                            <div class="col-md-4">
                                <h5>4511201145775885</h5>
                            </div>
                            <div class="col-md-2 text-center">
                                <a href="" class="badge badge-primary h3 p-3"><spa class="fas fa-eye"></spa> </a>
                                <a href="" class="badge badge-danger h3 p-3"><spa class="fas fa-trash"></spa> </a>
                                <a href="" class="badge badge-success h3 p-3"><spa class="fas fa-edit"></spa> </a>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <?php 
                    $sql = "select identifiant, modele, designation, type_bien, code from biens, marque WHERE biens.marque=marque.codeMarque";
                    $col = 5;
                    $t = retrieveLineDB($sql);
                    ?>
                <div class="card mon-patrimoine">
                    <div class="card-header">
                        <div class="card-title">
                            <h2><span class="fas fa-fenêtre-maximiser"></span> MON PARTRIMONE</h2>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row entete pt-2 bg-dark text-white" style="height:50px">
                            <div class="col-md-2"><h5 class="text-white">Image</h5> </div>
                            <div class="col-md-4"><h5 class="text-white">Informations</h5></div>
                            <div class="col-md-4"><h5 class="text-white">S/N - IMEI - IMAT°</h5></div>
                            <div class="col-md-2"><h5 class="text-white">Action</h5></div>
                        </div>
                        <?php 
                                for ($i=0; $i < $t; $i++) { 
                                    $ident = retrieveDB($sql, $col)[$i][0];
                                    $modele = retrieveDB($sql, $col)[$i][1];
                                    $designation = retrieveDB($sql, $col)[$i][2];
                                    $type_bien = retrieveDB($sql, $col)[$i][3];
                                    $code = retrieveDB($sql, $col)[$i][4];
                                ?>
                        <div class="row corps pt-2 border-bottom">
                            <div class="col-md-2">
                                <?php $path = "assets/img/post/" . $_SESSION['ident_client'] . "/" . $code . ".jpg"; 
                                    if (!file_exists($path)) { 
                                        $path="assets/img/elements/phone.png";
                                    }
                                ?>
                                <img src="<?php echo $path ?>" alt="" class="w-25">
                            </div>
                            <div class="col-md-4">
                                <h5><?php echo $modele ?></h5>
                                <h6><?php echo $designation; ?></h6>
                            </div>
                            <div class="col-md-4">
                                <h5><?php try {
                                    echo explode("~", $ident)[1];
                                } catch (\Throwable $th) {
                                    echo $ident;
                                }; ?></h5>
                            </div>
                            <div class="col-md-2 text-center">
                                <a href="" class="badge badge-primary h3 p-3"><spa class="fas fa-eye"></spa> </a>
                                <a href="" class="badge badge-danger h3 p-3"><spa class="fas fa-trash"></spa> </a>
                                <a href="" class="badge badge-success h3 p-3"><spa class="fas fa-edit"></spa> </a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <?php include "include/footer.blade.php" ?>

	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <script src="./assets/js/price_rangs.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>

        <script>
            $(()=>{
                if ($("#ident_client").val()=="") {
                    location.href="/"   
                }
            })
        </script>
        
    </body>
</html>