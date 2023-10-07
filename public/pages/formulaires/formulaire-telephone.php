<html>
    <link rel="stylesheet" href="../../../../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../../../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../../../../assets/css/themify-icons.css">
    <?php 
        session_start();
        @include("../../traitements/functions.php");
        $groupe = $_SESSION["myVariable"];
        $sql = "select * from categorie where groupe=" . $_SESSION["myVariable"];
        $x = retrieveLineDB($sql);
        $col = 6;

        if ($x==1) {
            $class_col = "col-lg-12";
        } else {
            $class_col = "col-lg-6";
        }
        
    ?>
    <body>
        <div class="space">
            <?php 
                $q = "select designation from groupe_bien where id=" . $_SESSION["myVariable"];
            ?>
           
            <div class="libelle text-vert text-center">
                <h1><b>Déclaration de bien</b></h1>
                <h5>Ajouter un bien à votre patrimoine c'est confirmer qu'il vous appartient.</h5>
                <hr>
                
                <h4 class="text-sombre"><?php echo retrieveDB($q, 1)[0][0] ?></h4>
                <h64 class="text-muted">Téléphone</h6>
            </div>
            
            
            <div class="space-body">
                <?php include "../../pages/main-style.php" ?>
                <div class="formulaire container ">
                    <form action="" method="post" id="form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="" class="b">Marque</label>
                                    <input list="brow" type="text" class="form-control designed" id="marque" required>
                                    <?php 
                                        $rqt = "select designation from marque WHERE categorie LIKE '%" . retrieveDB($sql, $col)[0][0] . "%'";
                                        $nbline = retrieveLineDB($rqt);
                                    ?>
                                    <datalist id="brow">
                                        <?php for ($i=0; $i < $nbline ; $i++) { ?>
                                        <option value="<?php echo retrieveDB($rqt, 1)[$i][0] ?>">
                                        <?php } ?>
                                    </datalist>  
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="" class="b">Modèle</label>
                                    <input type="text" class="form-control designed required" id="modele" required>
                                    <span class="labError text-danger w-100 p-2 b"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group p-0">
                                    <label for="" class="b">IMEI</label>
                                    <input type="text" class="form-control designed required number" maxlength="17" id="id" required>
                                    <span class="labError text-danger w-100 p-2 b d-none">* Veuillez l'IMEI</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="" class="b">Confirmer IMEI</label>
                                    <input type="text" class="form-control designed required number" maxlength="17" id="confirm_id" required>
                                    <span class="labError text-danger w-100 p-2 b"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-lg-6 border-bottom text-center fileImage box-id" >
                                        <div class="row">
                                            <div class="col-12">
                                                <h6>Image de l'IMEI sur le carton (obligatoire)</h6>
                                                <input type="hidden" id="filename">
                                                <img src="../../assets/img/elements/default/imei.png" alt="" class="x-small-max-height x-small-img">
                                                <input type="file" class="d-none required" required id="fileImage-id" accept=".jpg" >
                                            </div>
                                            <p class="alert-info h6 p-2 mt-2 d-none">Chargement de l'image ...</p>
                                            <p class="alert-danger h6 p-2 mt-2 d-none"></p>
                                            <div class="col-12 pt-3">
                                                <button type="button" class="btn btn-orange"><sapn class="fas fa-plus"></sapn></button>
                                                <button type="button" class="btn btn-sombre"><sapn class="fas fa-camera"></sapn></button>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            Si vous ne retrouvez plus carton de votre téléphone, 
                                            en remplacement vous pouvez composer <span class="h3 b text-danger">*#06#</span> <br>
                                            puis nous envoyer la photo ou la capture d'écran portant le Numéro I
                                            MEI de votre téléphone.  
                                            <br>
                                            <span class="text-danger b" style="cursor:pointer" data-toggle="modal" data-target="#tuto-imei">
                                                (Cliquer ici pour voir un exemple)
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 border-bottom text-center fileImage pb-3 box-recu">
                                        <div class="row">
                                            <div class="col-12">
                                                <h6>Photo reçu d'achat </h6>
                                                <input type="hidden" id="filename">
                                                <img src="../../assets/img/elements/default/reçu.png" alt="" class="small-max-height x-small-img">
                                                <input type="file" class="d-none" id="fileImage-phone-recu" accept=".jpg" >
                                            </div>
                                            <p class="alert-success h6 p-2 mt-2 d-none">Chargement de l'image ...</p>
                                            <p class="alert-danger h6 p-2 mt-2 d-none"></p>
                                            <div class="col-12 pt-3">
                                                <button type="button" class="btn btn-orange"><sapn class="fas fa-plus"></sapn></button>
                                                <button type="button" class="btn btn-sombre"><sapn class="fas fa-camera"></sapn></button>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            Il est important d'ajouter la photo votre reçu d'achat. Mais vous pouvez 
                                            le faire plus tard dans votre patrimoine.
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 border-bottom text-center border-bottom fileImage py-3 box-phone-1">
                                        <div class="row">
                                            <div class="col-12">
                                                <input type="hidden" id="filename">
                                                <img src="../../assets/img/elements/default/phone.png" alt="" class="x-small-max-height x-small-img">
                                                <input type="file" class="d-none required" required id="fileImage-phone-recto" accept=".jpg" >
                                            </div>
                                            <p class="alert-success h6 p-2 mt-2 d-none required">Chargement de l'image ...</p>
                                            <p class="alert-danger h6 p-2 mt-2 d-none"></p>
                                            <h6 class="pt-3">Photo du téléphone recto (obligatoire)</h6>
                                            <div class="col-12 pt-3">
                                                <button type="button" class="btn btn-orange"><sapn class="fas fa-plus"></sapn></button>
                                                <button type="button" class="btn btn-sombre"><sapn class="fas fa-camera"></sapn></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 border-bottom text-center border-bottom fileImage py-3 box-phone-2">
                                        <div class="row">
                                            <div class="col-12">
                                                <input type="hidden" id="filename">
                                                <img src="../../assets/img/elements/default/phone-back.png" alt="" class="x-small-max-height  x-small-img">
                                                <input type="file" class="d-none " id="fileImage-phone-verso" accept=".jpg" >
                                            </div>
                                            <p class="alert-success h6 p-2 mt-2 d-none">Chargement de l'image ...</p>
                                            <h6 class="pt-3">Photo du téléphone verso</h6>
                                            <div class="col-12 pt-3">
                                                <button type="button" class="btn btn-orange"><sapn class="fas fa-plus"></sapn></button>
                                                <button type="button" class="btn btn-sombre"><sapn class="fas fa-camera"></sapn></button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-12 text-center py-5">
                                <button type="button" class="btn btn-lg btn-sombre mt-5 btn-previous">
                                    <span class="fas fa-arrow-circle-left"></span>&nbsp;
                                    <span class="text">Précedent</span>
                                </button>
                                <button class="btn btn-lg btn-vert mt-5 btn-valider">
                                    <span class="text">Ajouter maintenant</span>&nbsp;
                                    <span class="fas fa-arrow-circle-down"></span>
                                </button>
                            </div>
                        </div>
                    </form>    
                </div>
                <div class="successful-msg d-none p-5 text-center">
                    <h3 class="b text-sombre mt-5">Veuillez patienter ...</h3>
                </div>

                <div class="modal fade bd-example-modal-lg" id="tuto-imei" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header bg-sombre">
                                <div class="modal-title">Tutoriel</div>
                            </div>
                            <div class="modal-body">
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    
                                    <div class="carousel-inner">
                                        <div class="carousel-item active tuto-1">
                                            <div class="pt-3 text-center">
                                                <h6>L'IMEI se trouve à l'arrière de l'embalage de votre téléphone</h6>
                                            </div>
                                            <img src="../../assets/img/elements/tuto-1.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item tuto-2">
                                            <div class="pt-3 text-center">
                                                <h6>Ou bien composer le *#06# dans le téléphone concerné pour voir le numéro IMEI</h6>
                                            </div>
                                            <img src="../../assets/img/elements/tuto-2.png" style="display:no ne" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
                      
            </div>

            
           
           
        </div>
        <script src="../../../assets/js/jquery-3.2.1.slim.min.js"></script>
        <script src="../../../assets/js/bootstrap.min.js" ></script>

        <!-- for method post -->
        <script src="../../../assets/js/jquery.min.js"></script>
        <script>
            $(()=>{

                // $(".successful-msg").load("pages/successful-page.php")

                $(".carousel-control-next").click(function () {
                    $(".tuto-1").removeClass("active")
                    $(".tuto-2").addClass("active")
                })
                $(".carousel-control-prev").click(function () {
                    $(".tuto-1").addClass("active")
                    $(".tuto-2").removeClass("active")
                })

                $(".link_footer a.link_false").click(function () {return false})
                $(".link_footer a.link_2").click(function () {
                    $("#pages_space").load("pages/declaration-de-bien.php")
                    return false
                })

                $(".link_footer a.link_3, .btn-sombre").click(function () {
                    $("#pages_space").load("pages/form-declaration-de-bien.php")
                    return false
                })

                $(".choice_categ .card").click(function(){
                    var categ = $(this).find(".designation").text()
                    $(".link_footer a.link_4").text(categ)
                    $(".fa-angle-double-left:eq(2)").removeClass("d-none")
                    

                })

                $(".fileImage .btn-orange").click(function () {
                    $(this).closest(".fileImage").find("input[type='file']").click()
                })

                $(".fileImage input[type='file']").change(function () {
                    var idInputFile = $(this).closest(".fileImage").find("input[type='file']").attr("id")
                    var classClosest = $(this).closest(".fileImage").attr("class").split(" ").pop()
                    loadImage(idInputFile, classClosest)
                    // alert($(this).val())
                })

                $("form input.required").focusout(function () {
                    var myId = $(this).attr("id")
                    var imei = $(this).val()
                    if (myId=="id") {
                        if (imei.length<15) {
                            if ($(this).val()!="") {
                                $(this).closest(".form-group").find("span").removeClass("d-none").text("* IMEI invalide !")
                                $(".btn-valider").addClass("disabled")
                            } 
                            else{
                                $(this).closest(".form-group").find("span").addClass("d-none")
                            }
                            
                        } else if (imei.length>=15 ) {
                            if (imei.length<18) {
                                var q = "select * from biens where identifiant='" + imei + "'"
                                var r = 0
                                $.post('traitements/test.php', {rqt:q}, function(resultat){
                                    if (resultat==1) {
                                        $("#id").closest(".form-group").find("span").removeClass("d-none").text("* Cet IMEI est déjà déclaré")
                                        $(".btn-valider").addClass("disabled")
                                    } 
                                    else{
                                        $("#id").closest(".form-group").find("span").addClass("d-none")
                                        if (imei!=$("#confirm_id").val() && $("#confirm_id").val()!="") {
                                            $(".btn-valider").addClass("disabled")
                                        } else {
                                            $(".btn-valider").removeClass("disabled")
                                        }
                                        
                                    }
                                })
                            } else {
                                $(this).closest(".form-group").find("span").removeClass("d-none").text("* IMEI invalide !")
                            }
                            
                        }
                        else{
                            $(this).closest(".form-group").find("span").addClass("d-none")
                        }
                    } else if (myId=="confirm_id"){
                        if (imei.length>=15) {
                            if (imei!="" && imei==$("#id").val()) {
                                $(this).closest(".form-group").find("span").addClass("d-none")
                                $(".btn-valider").removeClass("disabled")
                            } else {
                                $(this).closest(".form-group").find("span").removeClass("d-none").text("* IMEI non-conforme !")
                                $(".btn-valider").addClass("disabled")
                            }
                            
                        } else {
                            if (imei=="") {
                                $(this).closest(".form-group").find("span").addClass("d-none")
                            } else {
                                $(this).closest(".form-group").find("span").removeClass("d-none").text("* IMEI invalide !")
                                $(".btn-valider").addClass("disabled")
                            }
                            
                        }
                    }    
                    $(this).removeClass("border-danger")
                })

                $('.number').on('input',function(){
                    var valeur = $(this).val();
                    valeur = valeur.replace(/\D+/,'');
                    // on peut ajouter d'autres contrôles
                    $(this).val(valeur);
                });

                $(".btn-valider").click(function(){
                    var etat = $(this).attr("class")
                    if (etat.includes("disabled")==false) {                      
                        var compteInput = $("form input.required").length
                        var vide = compteInput
                        for (let i = 0; i < compteInput ; i++) {
                            var selectorInput = "form input.required:eq(" + i + ")"
                            if ($(selectorInput).val()!="") {
                                vide = parseInt(vide) - 1 
                                $(selectorInput).closest(".fileImage").find("p.alert-danger").addClass("d-none")
                                $(selectorInput).removeClass("border-danger")
                            }
                            else{
                                $(selectorInput).closest(".fileImage").find("p.alert-danger").removeClass("d-none").text("Veuillez choisir une image")
                                $(selectorInput).addClass("border-danger")
                            }
                        }

                        if (vide==0) {
                            var id_declaration = Math.floor((Math.random() * 10000000000000) + 10000000000000)
                            var ident = $("#id").val()
                            var modele = $("#modele").val()
                            var marque = $("#marque").val()
                            var categ ="PHONE"
                            var client = $("#ident_client").val()
                            var aujourdhui = dateActuelle()
                            var nameFileTab = [categ + "_imei_", categ + "_recu_", categ + "_1_", categ +  "_2_"]
                            
                            var sql = 'insert into biens values("' + id_declaration + '","' + ident +'","' + modele + '","' + marque + '","' + categ + '","' + client + '",0,"' + aujourdhui + '","' + aujourdhui + '")'
                            $.post("traitements/query.php",{rqt:sql}, function (resultat) {
                                if (resultat==1) {
                                    
                                    for (let x = 0; x < 4; x++) {
                                        var sel = ".fileImage:eq("+ x + ") #filename" 
                                        var link_img = $(sel).val()
                                        $.post("traitements/move_file_image.php", {origine:link_img, ident:client, nameFile:nameFileTab[x] + id_declaration}, function (data) {})
                                    }

                                    $(".formulaire").addClass("d-none")

                                    $(".successful-msg").load("pages/successful-page.php")
                                } else {
                                    sql = 'insert into marque values("' + marque + '","' + marque + '","' + categ + '","' + aujourdhui + '","' + aujourdhui + '")'
                                    $.post("traitements/query.php", {rqt:sql}, function (data) {
                                        if (data==1) {
                                            sql = 'insert into biens values("' + id_declaration + '","' + ident +'","' + modele + '","' + marque + '","' + categ + '","' + client + '",0,"' + aujourdhui + '","' + aujourdhui + '")'
                                            $.post("traitements/query.php",{rqt:sql}, function (r) {
                                                if (r==1) {
                                                    for (let x = 0; x < 2; x++) {
                                                        var sel = ".fileImage:eq("+ x + ") #filename" 
                                                        var link_img = $(sel).val()
                                                        $.post("traitements/move_file_image.php", {origine:link_img, ident:client, nameFile:nameFileTab[x] + id_declaration}, function (data) {})
                                                        $(".formulaire").addClass("d-none")                                                    
                                                        $(".successful-msg").load("pages/successful-page.php")
                                                    }
                                                } else {
                                                    alert("Désolé : Une erreur s'est produite !!")
                                                }
                                            })
                                            
                                        } else {
                                            alert("Désolé : Une erreur s'est produite !!")
                                        }
                                    })
                                }
                            })
                            $(".successful-msg").removeClass("d-none")
                            $('.box-id img').attr("src", "assets/img/elements/default/imei.png")
                            $('.box-recu img').attr("src", "assets/img/elements/default/reçu.png")
                            $('.box-phone-1 img').attr("src", "assets/img/elements/default/phone.png")
                            $('.box-phone-2 img').attr("src", "assets/img/elements/default/phone-back.png")
                            $("#form")[0].reset()
                            return false
                        } else {
                            
                        }
                    }    
                })
                
                
                                        
                

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
                    var sel_1 = "." + parent_selector_inputfile + " p.alert-success"
                    var sel_2 = "." + parent_selector_inputfile + " p.alert-danger"
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
                                $(sel_1).removeClass('d-none').removeClass('alert-danger').addClass("alert-info").text("Chargement du fichier ...");
                            },
                            success : function (data) {
                                $(sel_1).addClass('d-none');
                                $(sel_2).addClass('d-none');
                                $(sel_3).attr('src', data)
                                var sel_4 = "." + parent_selector_inputfile + " #filename"
                                $(sel_4).val(data)
                                // nom_image = data
                                alert(data)
                            }
                        })
                        
                    }
                }
            })
        </script>
           
    </body>
</html>