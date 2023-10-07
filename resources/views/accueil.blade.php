

<?php 
    $pageTitle = "Accueil"; 
    session_start(); 
    include "traitements/functions.php";
?>
@extends("layouts.app")

@section("content")
<body>
    <section>
        <div class="row">
            <div class="col-md-12 bg-orange" style="height:80px;"></div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-8 col-sm-12">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="assets/img/banner/1.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="assets/img/banner/2.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="assets/img/banner/3.jpg" alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="assets/img/banner/4.jpg" alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="assets/img/banner/5.jpg" alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="assets/img/banner/6.jpg" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 bg-orange d-none d-lg-block p-3" style="height:110px">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-3 text-light text-center h5">
                                        <h1 class="fas fa-map-marker-alt"></h1><br> 
                                        Abidjan, Cocody, CIV
                                    </div>
                                    <div class="col-lg-3 text-light text-center h5">
                                        <h1 class="fas fa-clock"></h1><br>
                                        Traitment en 24h
                                    </div>
                                    <div class="col-lg-3 text-light text-center h5">
                                        <h1 class="fas fa-phone-square"></h1> <br>
                                        +225 05 01 08 44 24
                                    </div>
                                </div>
                            </div>
                        </div>       
                    </div>
                    <div class="col-lg-4 col-sm-12 bg-sombre" id="section_verif" style="min-height:699px">
                        <div class="row">
                            <div class="col-lg-12 box-search">
                                <form action="" class="form-verification">
                                    <div class="row p-5">
                                        <div class="col-lg-12 col-sm-12 text-center px-5 py-2">
                                            <div class="text-vert h3">Vérifier la propriété d'un bien en 3 clics</div>
                                            <p class="h5 text-white">Ordinateur, TV, Téléphone, Audio, Imprimante, Motos, Voitures etc...</p>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <?php 
                                                $sql = "select * from categorie";
                                                $line = retrieveLineDB($sql);
                                                $col = 6;
                                            ?>
                                        
                                            <div class="form-group pt-3">
                                                <select name="" id="categorie" class="form-control">
                                                    <option value="0" id="default"><b>CATEGORIE DU BIEN</b> </option>
                                                    <?php for ($i=0; $i < $line; $i++) { ?>
                                                    <option value="<?php echo retrieveDB($sql, $col)[$i][0] ?>" id="<?php echo retrieveDB($sql, $col)[$i][2] ?>">
                                                        <?php echo retrieveDB($sql, $col)[$i][1] ?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                                <small class="text-orange b d-none">* Choisir une catégorie</small>
                                            </div>
                                            <div class="form-group py-2">
                                                <input type="text" required class="form-control" id="id_search" placeholder="">
                                                
                                            </div>
                                        
                                        </div>
                                        <div class="col-lg-12 col-sm-12 d-flex justify-content-center">
                                            <button type="submit" class="btn btn-block btn-orange w-75 btn-search">
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
                            <div class="col-lg-12 box-result mt-5 d-none">
                                <div class="text-center mt-5 pt-5 text-light">
                                    <h3 class="text-light mt-5">Veuillez Patientz SVP ...</h3> 
                                    <h1><span class="fas fa-spinner"></span></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div> 
    </section>
    <section class="pb-3">
        <div class="row p-3">
            <div class="col-lg-12 col-sm-12 text-center">
                <h1 class="text-sombre"><b>Avantages de la plateforme</b> </h1>
                <h3 class="text-vert">Monpatrimoine.ci</h3>
            </div>
            <div class="col-lg-4 col-sm-12 mt-5">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="assets/img/elements/man.jpg" alt="" class="card-img-top w-50">
                        <h5 class="text-orange my-3">STOP au rachat de biens dérobés</h5>
                        <h6>Je n'encourage pas les acteurs d'agressions ou de cambriolages.
                            Je vérifie la propriété d'un bien avant l'achat.
                        </h6>
                        <a href="" class="text-vert">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 mt-5">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="assets/img/elements/scan-qr.png" alt="" class="card-img-top w-75">
                        <h5 class="text-orange my-3">Déclaration en ligne d'une perte</h5>
                        <h6>
                            Je déclare mon bien comme étant " Volé " 
                            et j'empêche un individu de se rendre coupable de recel.
                        </h6>
                        <a href="" class="text-vert">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 mt-5">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="assets/img/elements/persons.png" alt="" class="card-img-top w-100">
                        <h5 class="text-orange my-3">
                            Donnez une traçabilité à vos biensRejoignez-la communauté
                        </h5>
                        <h6>
                            Des solutions innovantes pour surveiller ou retrouver vos biens d'entreprises dans les meilleurs délais.
                        </h6>
                        <a href="" class="text-vert">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script>
    $(()=>{
        
        $(".form-verification select#categorie").change(function () {
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
            $("#section_verif #id_search").attr("placeholder", placeholder)
        })

        $("#section_verif .btn-search").click(function () {
            var inputVal = $(this).closest("#section_verif").find("#id_search").val()
            var identifiant = $(this).closest("#section_verif").find("#categorie").val()
            var data = identifiant + "#|" + inputVal
            if (inputVal!='' && identifiant!="0") {
                $(this).closest("#section_verif").find(".box-result").removeClass("d-none")
                $(this).closest("#section_verif").find(".box-search").addClass("d-none")
                $.post('traitements/var_session.php', {var:data})
                $(this).closest("#section_verif").find(".box-result").load("pages/search_result.php")
                $(this).closest("#section_verif").find("#id_search").removeClass('bg-danger')
                $(this).closest("#section_verif").find("#categorie").removeClass("border-danger")
                $(this).closest("#section_verif").find("#categorie").next("small").addClass("d-none")
                $(this).closest("#section_verif").find("#categorie").removeClass("border-danger")
                $(this).closest("#section_verif").find("#categorie").next("small").addClass("d-none")

                return false
            } 
            else if (inputVal!='' && identifiant=="0"){
                $(this).closest("#section_verif").find("#categorie").addClass("border-danger")
                $(this).closest("#section_verif").find("#categorie").next("small").removeClass("d-none")
                return false
            }
            else if (inputVal=='' && identifiant!="0"){
                $(this).closest("#section_verif").find("#id_search").addClass('bg-danger')
                $(this).closest("#section_verif").find("#categorie").removeClass("border-danger")
                $(this).closest("#section_verif").find("#categorie").next("small").addClass("d-none")
            }
            else{
                $(this).closest("#section_verif").find("#id_search").addClass('bg-danger')
                $(this).closest("#section_verif").find("#categorie").removeClass("border-danger")
                $(this).closest("#section_verif").find("#categorie").next("small").addClass("d-none")
            }
            
        })

        $("#section_verif #categorie").change(function () {
            var c = $(this).val()
            if (c=="0") {
                $(this).addClass("border-danger")
                $(this).next("small").removeClass("d-none")
            } else {
                $(this).removeClass("border-danger")
                $(this).next("small").addClass("d-none")
            }
        })

        $("#section_verif #id_search").keydown(function () {
            $(this).removeClass('bg-danger')
        })

        $("#section_verif .btn-detail").click(function () {
            $("#section_verif .detail").removeClass("d-none")
            $("#section_verif .message").addClass("d-none")
            $(this).addClass("d-none")
        })






        $(".box-conx .myBtn-account .btn-success").click(function(){
            $(this).closest('.box-conx').slideUp()
            $('.box-insc').slideDown()
            $("#espace-mbre").addClass("modal-lg")
        })

        $(".box-insc .myBtn-login .btn-success").click(function(){
            $(this).closest('.box-insc').slideUp()
            $('.box-conx').slideDown()
            $("#espace-mbre").removeClass("modal-lg")
        })

        $(".box-conx .reset_link").click(function(){
            $(this).closest('.box-conx').slideUp()
            $('.box-reset-password').slideDown()
            $("#espace-mbre").removeClass("modal-lg")
            return false
        })

        $(".box-reset-password .conx_link").click(function(){
            $(this).closest('.box-reset-password').slideUp()
            $('.box-conx').slideDown()
            $("#espace-mbre").removeClass("modal-lg")
            return false
        })

        $(".box-conx .myForm .btn-orange").click(function () {
            //$(this).text("Patientez ...")
            var username = $(".box-conx .myForm #email").val()
            var password = $(".box-conx .myForm #password").val()
            var sql = ""
           
            if (username!="" && password!="") {
                if (username.includes("@")==true) {
                    // sql = 'SELECT client.Name, client.Surname, client.idClient, client.Phone, client.Email, utilisateur.mot_de_passe, utilisateur.dateCreationUTC FROM utilisateur, client WHERE utilisateur.Email="' + username + '" and utilisateur.mot_de_passe="' + password + '" and client.Email=utilisateur.Email'
                    sql = 'SELECT client.Name, client.Surname, client.idClient, client.Phone, client.Email, utilisateur.mot_de_passe, utilisateur.dateCreationUTC FROM utilisateur, client WHERE utilisateur.Email="' + username + '" and client.Email=utilisateur.Email'
                    $(".box-conx .myForm").addClass("disabled")
                    $.post("traitements/test.php", {rqt:sql}, function (resultat) {
                        if (resultat==1) {
                            sql = 'SELECT client.Name, client.Surname, client.idClient, client.Phone, client.Email, utilisateur.mot_de_passe, utilisateur.dateCreationUTC FROM utilisateur, client WHERE utilisateur.Email="' + username + '" and utilisateur.mot_de_passe="' + password + '" and client.Email=utilisateur.Email'
                            $.post("traitements/login.php", {rqt:sql}, function (result) {
                                if (result==1) {
                                    // alert(result)
                                    $(".box-conx .myForm .btn-orange").text("Patientez ...")
                                    
                                    location.href="/home"
                                    $("p.labReturn").slideUp()
                                } else {
                                    $("p.labReturn").slideDown().text("Mot de passe sont incorrecte !")
                                    $(".box-conx .myForm .btn-orange").find("span").text("Se connecter")
                                    $(".box-conx .myForm .btn-orange").find("i").addClass("d-none")
                                    $(".box-conx .myForm").removeClass("disabled")
                                }
                            })
                        } else {
                            sql = 'SELECT client.Name, client.Surname, client.idClient, client.Phone, client.Email, utilisateur.mot_de_passe, utilisateur.dateCreationUTC FROM utilisateur, client WHERE utilisateur.mot_de_passe="' + password + '" and client.Email=utilisateur.Email'
                            $.post("traitements/test.php", {rqt:sql}, function (result) {
                                if (result==1) {
                                    $("p.labReturn").slideDown().text("L'adresse mail saisie est incorrecte !")
                                } else {
                                    $("p.labReturn").slideDown().text("L'adresse mail saisie et le mot de passe saisis sont incorrectes !")
                                }
                            })
                            $(".box-conx .myForm .btn-orange").find("span").text("Se connecter")
                            $(".box-conx .myForm .btn-orange").find("i").addClass("d-none")
                            $(".box-conx .myForm").removeClass("disabled")
                        }
                    })
                } else {
                    sql = 'SELECT client.Name, client.Surname, client.idClient, client.Phone, client.Email, utilisateur.mot_de_passe, utilisateur.dateCreationUTC FROM utilisateur, client WHERE client.Phone LIKE "%' + username + '%" and client.Email=utilisateur.Email'
                    $(".box-conx .myForm").addClass("disabled")
                    $.post("traitements/test.php", {rqt:sql}, function (resultat) {
                        if (resultat==1) {
                            sql = 'SELECT client.Name, client.Surname, client.idClient, client.Phone, client.Email, utilisateur.mot_de_passe, utilisateur.dateCreationUTC FROM utilisateur, client WHERE client.Phone LIKE "%' + username + '%" and utilisateur.mot_de_passe="' + password + '" and client.Email=utilisateur.Email'
                            
                            $.post("traitements/login.php", {rqt:sql}, function (result) {
                                if (result==1) {
                                    $(".login-input button").text("Patientez ...")
                                    $.post("traitements/login.php", {rqt:sql}, function (r) {
                                        $("p.labReturn").slideUp()
                                        location.href="/home"
                                    })
                                } else {
                                    $("p.labReturn").slideDown().text("Mot de passe incorrecte !")
                                    $(".box-conx .myForm .btn-orange").find("span").text("Se connecter")
                                    $(".box-conx .myForm .btn-orange").find("i").addClass("d-none")
                                    $(".box-conx .myForm").removeClass("disabled")
                                }
                            })
                        } else {
                            sql = 'SELECT client.Name, client.Surname, client.idClient, client.Phone, client.Email, utilisateur.mot_de_passe, utilisateur.dateCreationUTC FROM utilisateur, client WHERE utilisateur.mot_de_passe="' + password + '" and client.Email=utilisateur.Email'
                            $.post("traitements/test.php", {rqt:sql}, function (result) {
                                if (result==1) {
                                    $("p.labReturn").slideDown().text("Numéro de téléphone incorrecte !")
                                } else {
                                    $("p.labReturn").slideDown().text("Numéro de téléphone et mot de passe incorrectes !")
                                }
                            })
                            $(".box-conx .myForm .btn-orange").find("span").text("Se connecter")
                            $(".box-conx .myForm .btn-orange").find("i").removeClass("d-none")
                            $(".box-conx .myForm").removeClass("disabled")
                        }
                        
                    })
                }

                return false; 
            }  
              
        })

        $(".box-insc .myForm .myBtn-account .btn-orange").click(function () {
            var id = $("#ident").val()
            var email = $(".box-insc .myForm #email").val()
            var nom = $(".box-insc .myForm #nom").val().toUpperCase()
            var prenom = $(".box-insc .myForm #prenom").val().toUpperCase()
            var tel = $(".box-insc .myForm #tel").val()
            var password = $(".box-insc .myForm #password").val()
            var confirmPassword = $(".box-insc .myForm #confirm_paswd").val()
            var laDate = dateActuelle()
            

            if ($(this).find(".text").text()=="Valider") {
                $(this).find(".text").text("Patientez ...")
                var link_recto = $(".fileImage-recto").val()
                var link_verso = $(".fileImage-verso").val()
                var sql =""
                var certificate = 0
                if (link_recto!="" && link_verso!="") {
                    certificate = 1
                } 
                sql = 'INSERT INTO client VALUES("' + id + '","' + nom + '","' + prenom + '","' + tel + '","' + email + '","' + certificate + '","' + laDate + '","' + laDate + '")'
                $.post("traitements/query.php", {rqt:sql}, function (data) {
                    if (data==1) {
                        var rqt = 'INSERT INTO utilisateur VALUES("' + id + '","' + email + '","' + password + '","' + laDate + '","' + laDate + '")'
                        $.post("traitements/query.php", {rqt:rqt}, function (datas) {
                            // alert(data)
                            if (datas==1) {
                                $.post("traitements/move_file_image.php", {origine:link_recto, ident:id, nameFile:"CNI_RECTO"}, function () {})
                                $.post("traitements/move_file_image.php", {origine:link_verso, ident:id, nameFile:"CNI_VERSO"}, function () {})
                                $(".myForm .step-one").addClass('d-none')
                                $(".myForm .step-two").addClass('d-none')
                                $(".myForm .step-three").addClass('d-none')
                                $(".myForm .step-final").removeClass('d-none')  
                                $(".box-insc .myForm .myBtn-account .btn-success").addClass("d-none")                          
                            } else {
                                alert("Une erreur s'est produite, nous regrettons de ne pas donner suite au traitement !")
                                sql = 'DELETE FROM client WHERE id="' + id + '"'
                                $.post("traitements/query.php", {rqt:sql}, function (data) {
                                    location.href = "/"
                                })
                            }
                        })
                        
                    } else {
                        alert("Une erreur s'est produite, nous regrettons de ne pas donner suite au traitement !")
                    }
                }) 
                return false 
            } 
            else if ($(this).find(".text").text()=="Suivant") {
                $(".myForm .step-one").addClass('d-none')
                $(".myForm .step-two").addClass('d-none')
                $(".myForm .step-three").removeClass('d-none')
                $(".myForm .step-final").addClass('d-none')
                $(this).find(".text").text("Valider")
                $(this).addClass("btn-success").removeClass("btn-orange")
                $(".myBtn-login").addClass("d-none")
                return false 
            }
            else{
                var q_verif = 'SELECT * FROM client WHERE Email="' + email + '"' 
                if (email!="" && nom!="" && prenom!="" && tel!="" && password!="") { 
                    if (email.includes("@")==true) {
                        $.post("traitements/test.php", {rqt:q_verif}, function (ret) {                        
                            if (ret==0 && confirmPassword==password) { //si le mail n'existe pas et les mot de passe conformes
                                if (password.length>=6) {
                                    if (password.match(/[A-Z]/, 'g')) {
                                        var code_valid = Math.floor(Math.random() * 100000)
                                        $(".alert-visual #return-thread").val(code_valid)
                                        $.post('traitements/public_var.php', {var:code_valid}, function (code) {})
                                        $(".myForm .step-one").addClass('d-none')
                                        $(".myForm .step-two").removeClass('d-none')
                                        $(".myForm .step-three").addClass('d-none')
                                        $(".myForm .step-final").addClass('d-none')
                                        var urlParam = "/verification-inscription/" + email
                                        $.get(urlParam, function (retour) {
                                            if (retour=="success") {
                                                $(".alert-visual h5").text("Un code de validation a été envoyé à l'adresse e-mail")
                                                $(".alert-visual h6").text(email)
                                                $(".code").removeClass('d-none')
                                                $(".box-insc .myForm .btn-orange").find(".text").text("Suivant")
                                                
                                            } else {

                                            }
                                        })
                                    } else {
                                        alert(ret)
                                        $(".password-group .text-orange").removeClass('d-none').text("* Doit contenir au moins une lettre Majuscule")
                                    }
                                } else {
                                    $(".password-group .text-orange").removeClass('d-none').text("* Doit comporter au moins 6 caractères")
                                    
                                }
                                $(".confirm-password-group .text-orange").addClass('d-none')
                                return false;
                            } else if (ret==1 && confirmPassword==password){//si le mail existe et les mot de passe conformes
                                $(".email-group .text-orange").removeClass('d-none')
                                $(".confirm-password-group .text-orange").addClass('d-none')
                                $(".password-group .text-orange").addClass('d-none')
                                return false;
                            }
                            else if (ret==1 && confirmPassword!=password){//si le mail existe et les mot de passe non-conformes
                                $(".email-group .text-orange").removeClass('d-none')
                                $(".password-group .text-orange").addClass('d-none')
                                $(".confirm_password-group .text-orange").addClass('d-none')
                                return false;
                            }
                            else {//si le mail n'existe pas et les mot de passe non-conformes
                                
                                $(".email-group .text-orange").addClass('d-none')
                                $(".password-group .text-orange").addClass('d-none')
                                $(".confirm-password-group .text-orange").removeClass('d-none')
                                return false;
                            }
                        })
                        return false;
                    } 
                }

            }  
        })

        $(".recto .btn-add-file").click(function(){
            $("#fileImage-recto").click()
        })

        $(".verso .btn-add-file").click(function(){
            $("#fileImage-verso").click()
        })

        $(".recto #fileImage-recto").change(function(){
            loadImage("fileImage-recto", "recto")
        })

        $(".verso #fileImage-verso").change(function(){
            loadImage("fileImage-verso", "verso")
        })

        $(".box-reset-password .myBtn-reset .btn-orange").click(function () {
            
            var email = $(".part-email #email").val()
            var code_valid = $("#code-reset").val().toUpperCase()
            var code_verification = $(".part-verification #code_verification").val()
            var fadeTransition = 500
            var sql = "SELECT * FROM utilisateur WHERE Email='" + email + "'"
            if ($(this).find(".text").text()=="Vérifier") {
                $(".box-reset-password").addClass("disabled")
                $(this).find(".fas").addClass("d-none")
                $(this).find(".text").text("Patientez ...")
                if (email!="") {
                    $.post('traitements/test.php', {rqt:sql}, function (retour) {
                        if (retour == "1"){
                            $.post('traitements/public_var.php', {var:code_valid}, function (code) {})
                            var urlParam = "/reset-password/" + email
                            $.get(urlParam, function (data) { 
                                //alert(data)  
                                if (data="success") {
                                    
                                    $(".box-reset-password .part-email").hide(fadeTransition)
                                    $(".box-reset-password .part-verification").show(fadeTransition)
                                    $(".box-reset-password .part-reset-password").hide()
                                    $(".box-reset-password").removeClass("disabled")
                                    $(".box-reset-password .myBtn-reset .btn-orange").find(".text").text("Suivant")
                                    $(".box-reset-password .myBtn-reset .btn-orange").find(".fas").removeClass("d-none")
                                    $(".part-verification label").text("Le code de vérification a été envoyé à " + email)
                                } else {
                                    alert("ERREUR DE TRAITEMENTS \n Une erreur s'est produite, veuillez contacter votre administrateur ! \n Erreur : \n" + ret)
                                }
                            })
                        }
                        else{
                            $(".part-email p.labError").removeClass("d-none")
                        }
                    })
                    
                }
                return false
            } 
            else if ($(this).find(".text").text()=="Suivant"){
                if (code_verification!="") {
                    if (code_verification===code_valid) {
                        $(this).find(".fas").addClass("d-none")
                        $(this).find(".text").text("Patientez ...")

                        $(".box-reset-password").addClass("disabled")
                        $(".box-reset-password .part-email").hide()
                        $(".box-reset-password .part-verification").hide(fadeTransition)
                        $(".box-reset-password").removeClass("disabled")
                        $(".box-reset-password .part-reset-password").show(fadeTransition)
                        $(this).addClass("btn-vert").removeClass("btn-orange")

                        $(this).find(".fas").removeClass("d-none").addClass("fa-check-circle").removeClass("fa-arrow-circle-right")
                        $(this).find(".text").text("Sauvegarder")
                        $(".part-verification .labError").addClass('d-none')
                    }
                    else{
                        $(".part-verification .labError").removeClass('d-none')
                    }
                    return false
                } 
                //alert(email)
            }
            else{
                var new_password = $(".part-reset-password #new_password").val()
                var confirm_password = $(".part-reset-password #verif_new_password").val()
                if (new_password!="" && confirm_password!="") {
                    if (new_password===confirm_password) {
                        if (new_password.match(/[A-Z]/, 'g') && new_password.length>=6) {
                            var sql='Update utilisateur set mot_de_passe="' + new_password + '" WHERE Email="' + email + '"'
                            $.post("traitements/query.php", {rqt:sql}, function(ret){
                                if (ret=="1") {
                                    $(".part-reset-password .sub-box-1").hide(100)
                                    $(".part-reset-password .sub-box-2").show(500)
                                    $(".new_password .labError").addClass("d-none")
                                    $(".verif_new_password .labError").addClass("d-none")
                                    $(".myBtn-reset").addClass("d-none")
                                } else {
                                    alert("IMPOSSIBLE DE MODIFIER LE MOT DE PASSE \n Une erreur s'est produite, veuillez contacter votre administrateur ! \n Erreur : \n" + ret)
                                }
                            })
                        }  
                        else{
                            $(".verif_new_password .labError").addClass('d-none')
                            $(".new_password .labError").removeClass('d-none').text("le mot de pase doit comporter 6 cararctère au moins une lettre maujuscule")
                        }  
                    } else {
                        $(".new_password .labError").addClass('d-none')
                        $(".verif_new_password .labError").removeClass('d-none').text("Le mot de passe n'est pas identique !")
                    }
                    return false
                }
            }

        })

        $(".part-reset-password .sub-box-2 .btn-success").click(function(){
            var username = $(".part-email #email").val()
            var password = $(".part-reset-password #new_password").val()
            var sql = 'SELECT client.Name, client.Surname, client.idClient, client.Phone, client.Email, utilisateur.mot_de_passe, utilisateur.dateCreationUTC FROM utilisateur, client WHERE utilisateur.Email="' + username + '" and utilisateur.mot_de_passe="' + password + '" and client.Email=utilisateur.Email'
            $.post("traitements/login.php", {rqt:sql}, function (result) {
                location.href="/home"
            })
            return false
        })

        $(".myForm .form-group i.fa-eye, .myForm .form-group span.fa-eye").click(function () {
            var typeInput = $(this).closest(".form-group").find("input").attr("type")
            if (typeInput=="password") {
                $(this).removeClass("fa-eye").addClass("fa-eye-slash")
                $(this).closest(".form-group").find("input").attr("type", "text")
            } else {
                $(this).addClass("fa-eye").removeClass("fa-eye-slash")
                $(this).closest(".form-group").find("input").attr("type", "password")
            }
            
        })

        // for (let i = 1; i <3 ; i++) {
        //     var tab_categ
        //     var sql = "select idType from categorie"
        //     $.post("traitements/retrieve.php", {rqt:sql, nbreCol:1}, function name(data) {
        //         var x = data.split('|').length
        //         for (j = 1; j <x; j++) {
        //             var id = parseInt(Math.floor((Math.random() * 1000000) + 1000000))
        //             var information_qr_code = (parseInt(Date.now()) * j) + "-monpatrimoine.ci-" + data.split('|')[j].replace("#$", "")
        //             sql = "insert into qr_code values('" + id + "','" + information_qr_code + "','" + dateActuelle() + "','" + dateActuelle() + "')"
        //             $.post("traitements/query.php", {rqt:sql}, function (params) {})
        //         }
        //     })
        // }
        
        
        
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
       

        function loadImage(selector_inputfile, parent_selector_inputfile){
            var sel_1 = "." + parent_selector_inputfile + " .alert-success"
            var sel_2 = "." + parent_selector_inputfile + " .alert-danger"
            var sel_3 = "." + parent_selector_inputfile + " img"
            $(sel_1).addClass('d-none');
            var property = document.getElementById(selector_inputfile).files[0];
            var image_name = property.name;
            var image_extension = image_name.split('.').pop().toLowerCase();

            var image_size = property.size;
            if (image_size>2000000) {
                $(sel_1).text("* La taille de l'image est trop grande !").removeClass('d-none').addClass("alert-danger");
            } else {
                var form_data = new FormData();
                form_data.append("file", property);
                $.ajax({
                    url : "traitements/upload.php",
                    method : "POST",
                    data : form_data,
                    contentType : false,
                    cache : false,
                    processData : false,
                    beforeSend : function (){
                        $(sel_1).removeClass('d-none');
                    },
                    success : function (data) {
                        $(sel_1).addClass('d-none');
                        $(sel_2).addClass('d-none');
                        $(sel_3).attr('src', data)
                        var sel_4 = ".save-data-link-image ." + selector_inputfile
                        $(sel_4).val(data)
                        // nom_image = data
                        // alert(data)
                    }
                    
                })
                
            }
        }

    })
</script>
@endsection