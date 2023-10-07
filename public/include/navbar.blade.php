
<header>
    <!-- Header Start -->
    <input type="hidden" name="" id="ident_client" value="<?php if (isset($_SESSION['ident_client'])) {echo $_SESSION['ident_client'];}  ?>">
    <input type="hidden" name="" id="dateToday" value="<?php echo date("Y-m-d") ?>">
    <input type="hidden" name="" id="email_client" value="<?php if (isset($_SESSION['email'])) {echo $_SESSION['email'];} ?>">
    <style>
        .big-ico{
            font-size:300%
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

        
    </style>
    <div class="header-area header-transparrent">
        <div class="headder-top header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="/"><img src="assets/img/logo/cicuriz.png" alt=""></a>
                        </div>  
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="menu-wrapper">
                            <!-- Main-menu -->
                            <div class="main-menu">
                                <nav class="d-none d-lg-block">
                                    <ul id="navigation">
                                        <li><a href="/">Accueil</a></li>
                                        <li><a href="a-propos">A propos</a></li>
                                        <li><a href="contact">Nous contacter</a></li>
                                        <li class='d-lg-none'>
                                            <a href="#">
                                                <div class="header-btn">
                                                    <div class="border-rounded">
                                                        <?php echo '<img src="assets/img/blog/author.png" style="width:30px" class="cursor-pointer" alt=""> ' . explode(" ", $_SESSION['name'])[0]; ?>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="/home">Mon patrimoine</a></li>
                                                <li><a href="/mon-compte">Mon profil</a></li>
                                                <li><a href="" class="logout" class="bg-danger text-warning">Déconnexion</a></li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </nav>
                            </div>  
                            <div class="main-menu d-flex justify-content-right">
                                <nav class="d-none d-lg-block">
                                    <ul id="navigation">                                        
                                        <?php if (isset($_SESSION['auth'])) {?>
                                        <li>
                                            <a href="#">
                                                <div class="header-btn">
                                                    <div class="border-rounded">
                                                        <?php echo '<img src="assets/img/blog/author.png" style="width:30px" class="cursor-pointer" alt=""> ' . explode(" ", $_SESSION['name'])[0]; ?>
                                                    </div>
                                                </div>
                                                
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="/home">Mon patrimoine</a></li>
                                                <li><a href="/mon-compte">Mon profil</a></li>
                                                <li><a href="" class="logout" class="bg-danger text-warning">Déconnexion</a></li>
                                            </ul>
                                            
                                        </li>
                                        <?php }else{?>
                                        <li>
                                            <a href="#">Espace client</a>
                                            <ul class="submenu">
                                                <li><a href="inscription">Inscription</a></li>
                                                <li><a href="connexion">Connexion</a></li>
                                            </ul>
                                        </li>
                                        <?php }?>
                                    </ul>
                                </nav>
                            </div>          
                            <!-- Header-btn -->
                            
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script>
    $(()=>{
        $("ul.submenu li .logout").click(function () {
            $.post('traitements/logout.php', function (retour) {
                location.href = "/"
            })
            return false
        })
    })
</script>