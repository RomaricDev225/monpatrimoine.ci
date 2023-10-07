<html>
    <?php 
        session_start();
        @include("../../traitements/functions.php");
        $groupe = $_SESSION["myVariable"];
        $sql = "select * from categorie where groupe=" . $_SESSION["myVariable"];
        $x = retrieveLineDB($sql);
        $col = 6;
        $categories = "";
        for ($k=0; $k < $x; $k++) { 
            if ($k<$x-1) {
                $categories = $categories . ucfirst(strtolower(retrieveDB($sql, $col)[$k][1])) . "/";
            }
            else{
                $categories = $categories . ucfirst(strtolower(retrieveDB($sql, $col)[$k][1]));
            }
            
        }

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
            <div class="link_footer pb-3">
                <div class="row w-100 ">
                    <div class="col-lg-12 pt-5 text-center">
                        <a href="" class="text-muted link_1"> Menu principal</a>
                        <span class="fas fa-angle-double-left"></span>

                        <a href="" class="text-muted link_2"> Déclarer un bien</a>
                        <span class="fas fa-angle-double-left"></span>

                        <a href="" class="text-muted link_3"> 
                            <?php echo ucfirst(strtolower(retrieveDB($q, 1)[0][0])) ?>
                        </a>
                        <span class="fas fa-angle-double-left"></span>

                        <a href="" class="text-orange link_4 link_false b">Voiture</a>
                    </div>
                </div>
            </div>       
            <div class="libelle text-vert text-center">
                <h1><b>Déclaration de bien</b></h1>
                <h5>Ajouter un bien à votre patrimoine c'est confirmer qu'il vous appartient.</h5>
                <hr>
                <h4 class="text-sombre"><?php echo retrieveDB($q, 1)[0][0] ?></h4>
                <h64 class="text-muted">Voiture</h6>
            </div>
            
            
            <div class="space-body">
                <?php include "../../pages/main-style.php" ?>
                <div class="formulaire container p-5">
                    <form action="" method="post" id="form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="" class="b">Marque</label>
                                    <input list="brow" type="text" class="form-control p-4 designed required" id="marque" required>
                                    <?php 
                                        $rqt = "select designation from marque WHERE categorie LIKE '%" . retrieveDB($sql, $col)[1][0] . "%'";
                                        $nbline = retrieveLineDB($rqt);
                                    ?>
                                    <datalist id="brow">
                                        <?php for ($i=0; $i < $nbline ; $i++) { ?>
                                        <option value="<?php echo retrieveDB($rqt, 1)[$i][0] ?>">
                                        <?php } ?>
                                    </datalist>  
                                    <span class="labError text-danger w-100 p-2 b"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="" class="b">Modèle</label>
                                    <input type="text" class="form-control p-4 designed required" id="modele" required>
                                    <span class="labError text-danger w-100 p-2 b"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="" class="b">N° de châssis</label>
                                    <input type="text" class="form-control p-4 designed required" id="chassis" required>
                                    <span class="labError text-danger w-100 p-2 b"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group p-0">
                                    <label for="" class="b">N° d'immatriculation</label>
                                    <input type="text" class="form-control p-4 designed required" id="mle" required>
                                    <span class="labError text-danger w-100 p-2 b"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-lg-6 border-bottom text-center fileImage pb-3 box-mle">
                                        <div class="row">
                                            <div class="col-12">
                                                <input type="hidden" id="filename">
                                                <img src="assets/img/elements/default/mle.png" alt="" class="small-max-height x-small-img">
                                                <input type="file" class="d-none" id="fileImage-mle" accept=".jpg" >
                                            </div>
                                            <p class="alert-success h6 p-2 mt-2 d-none">Chargement de l'image ...</p>
                                            <p class="alert-danger h6 p-2 mt-2 d-none"></p>
                                            <h6 class="pt-3">Photo de la plaque d'immatriculation </h6>
                                            <div class="col-12 pt-3">
                                                <button type="button" class="btn btn-orange"><sapn class="fas fa-plus"></sapn></button>
                                                <button type="button" class="btn btn-sombre"><sapn class="fas fa-camera"></sapn></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 border-bottom text-center fileImage pb-3 box-mutation">
                                        <div class="row">
                                            <div class="col-12">
                                                <input type="hidden" id="filename">
                                                <img src="assets/img/elements/default/fiche.jpg" alt="" class="small-max-height x-small-img">
                                                <input type="file" class="d-none" id="fileImage-mutation" accept=".jpg" >
                                            </div>
                                            <p class="alert-success h6 p-2 mt-2 d-none">Chargement de l'image ...</p>
                                            <p class="alert-danger h6 p-2 mt-2 d-none"></p>
                                            <h6 class="pt-3">Fiche de mutation </h6>
                                            <div class="col-12 pt-3">
                                                <button type="button" class="btn btn-orange"><sapn class="fas fa-plus"></sapn></button>
                                                <button type="button" class="btn btn-sombre"><sapn class="fas fa-camera"></sapn></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 border-bottom text-center border-bottom fileImage py-3 box-photo">
                                        <div class="row">
                                            <div class="col-12">
                                                <input type="hidden" id="filename">
                                                <img src="assets/img/elements/default/car.png" alt="" class="x-small-max-height x-small-img">
                                                <input type="file" class="d-none required" required id="fileImage-phone-recto" accept=".jpg" >
                                            </div>
                                            <p class="alert-success h6 p-2 mt-2 d-none">Chargement de l'image ...</p>
                                            <p class="alert-danger h6 p-2 mt-2 d-none"></p>
                                            <h6 class="pt-3">Photo de la Voiture (obligatoire)</h6>
                                            <div class="col-12 pt-3">
                                                <button type="button" class="btn btn-orange"><sapn class="fas fa-plus"></sapn></button>
                                                <button type="button" class="btn btn-sombre"><sapn class="fas fa-camera"></sapn></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 border-bottom text-center fileImage pb-3 box-recu">
                                        <div class="row">
                                            <div class="col-12">
                                                <h6>Photo de reçu d'achat </h6>
                                                <input type="hidden" id="filename">
                                                <img src="assets/img/elements/default/reçu.png" alt="" class="small-max-height x-small-img">
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
            </div>

            
           
           
        </div>

        <script>
            $(()=>{

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

                $(".btn-valider").click(function(){

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
                        var ident = $("#chassis").val() + "~" + $("#mle").val()
                        var modele = $("#modele").val()
                        var marque = $("#marque").val()
                        var categ ="VOITURE"
                        var client = $("#ident_client").val()
                        var aujourdhui = dateActuelle()
                        var nameFileTab = [categ + "_Mle_1_", categ + "_fiche_", categ + "_1_", categ + "_recu_"]

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
                        $('.box-photo img').attr("src", "assets/img/elements/default/car.png")
                        $('.box-recu img').attr("src", "assets/img/elements/default/reçu.png")
                        $("#form")[0].reset()

                        return false
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
                                // alert(data)
                            }
                            
                        })
                        
                    }
                }
            })
        </script>
           
    </body>
</html>