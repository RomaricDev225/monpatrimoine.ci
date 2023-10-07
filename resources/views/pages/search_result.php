<?php session_start();

@include("../traitements/functions.php");

$designation = explode("#|", $_SESSION["myVariable"])[0];
$bien = explode("#|", $_SESSION["myVariable"])[1];
$sql = "select Name, Surname, modele, marque, bien, datePerte from perte, biens, client, categorie where biens.type_bien=categorie.idType and perte.bien=biens.identifiant and client.idClient=biens.client and biens.type_bien='" . $designation . "' and perte.bien='". $bien . "'";
$line = retrieveLineDB($sql);
$col = 6;
if ($line<1) {?>
<div class="row p-lg-5 text-center">
    <div class="col-lg-12">
        <h3 class="text-vert">Resultats de la recherche</h3>
    </div>
    <div class="col-lg-12 py-3"> 
        <h1 class="text-vert"><span class="fas fa-check-circle" style="font-size:200%"></span></h1>
    </div>
    <div class="col-lg-12">
        <h5>Recherche pour :</h5>
        <h6>
            <?php $q = 'select designation from categorie where idType="' . $designation . '"'; ?>
            Catégorie : <b class='categ'><?php echo retrieveDB($q, 1)[0][0] ?></b><br>
            IMEI/N°Série/N°Mle/N°Châssis : <b class='ident'><?php echo $bien ?></b><br>

        </h6>
    </div>
    <div class="col-lg-12 py-3">
        <div class="alert alert-success">
            Ce bien ne fait objet d'aucun litige. 
            Vous pouvez donc l'ajouter à votre patrimoine.
        </div>
    </div>
    <div class="col-lg-12 py-3">
        <button type='button' class="btn btn-orange btn-previous"><span class="fas fa-arrow-circle-left"></span> Revenir</button>
        <button type='button' class="btn btn-primary btn-add-biens" data-dismiss="modal" data-toggle="modal" data-target="#add-biens"><span class="fas fa-plus-circle"></span> Ajouter à mon patrimoine</button>
    </div>
</div> 
<?php }else{
    $name = retrieveDB($sql, $col)[0][0] . " " . retrieveDB($sql, $col)[0][1];
    $modele = retrieveDB($sql, $col)[0][2];
    $marque = retrieveDB($sql, $col)[0][3];
    $id = retrieveDB($sql, $col)[0][4];
    $orgDate = retrieveDB($sql, $col)[0][5];
    $datePerte = date("d-m-Y", strtotime($orgDate));  

    
    ?>  
<div class="row p-5 text-center message">
    <div class="col-lg-12">
        <h3 class="text-vert">Resultats de la recherche</h3>
    </div>
    <div class="col-lg-12 py-3"> 
        <h1 class="text-orange"><span class="fas fa-exclamation-triangle" style="font-size:200%"></span></h1>
    </div>
    <div class="col-lg-12 py-3">
        <div class="alert alert-warning">
            Ce bien fait objet de litige, il a été certainement égaré ou volé.
            Vous riquez d'être arrété(e) si vous l'achetez !
        </div>
    </div>
    <div class="col-lg-12 py-3">
        <button type='button' class="btn btn-orange btn-previous"><span class="fas fa-arrow-circle-left"></span> Revenir</button>
        <button type='button' class="btn btn-info btn-detail"><span class="fas fa-info-circle"></span> Détails</button>
    </div>
</div> 
<div class="row p-5 text-center detail d-none">
    <div class="col-lg-12">
        <h3 class="text-vert">Resultats de la recherche</h3>
    </div>
    <div class="col-lg-12 py-3"> 
        <h1 class="text-orange"><span class="fas fa-info-circle" style="font-size:200%"></span></h1>
        <h5 class="text-white">Informations du plaignant</h5>
    </div>
    <div class="col-lg-12 py-3 text-light">
        <div class="form-group">
            <label for="">Nom et Prénoms</label>
            <h5><b><?php echo $name; ?></b></h5>
        </div>
        <label for="">A propos du bien</label>
        <div class="form-group py-3 row">
            <h5 id="modele" class="col-lg-6 col-sm-12">
                <small>Modèle</small><br>
                <b><?php echo $modele; ?></b>
            </h5>
            <h5 id="marque" class="col-lg-6 col-sm-12">
                <small>Marque</small><br>
                <b><?php echo $marque; ?></b>
            </h5>
            <h5 id="id" class="col-lg-6 col-sm-12">
                <small>Identifiant</small><br>
                <b><?php echo $id; ?></b>
            </h5>
            <h5 id="datePerte" class="col-lg-6 col-sm-12">
                <small>Perdu le</small><br>
                <b><?php echo $datePerte; ?></b>
            </h5>
        </div>
    </div>
    <div class="col-lg-12 py-3">
        <button type='button' class="btn btn-orange btn-previous"><span class="fas fa-arrow-circle-left"></span> Revenir</button>
        <button type='button' class="btn btn-info btn-detail"><span class="fas fa-info-circle"></span> Détails</button>
    </div>
</div>
<?php }?>  
<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script>
        $(()=>{
            $(".btn-previous").click(function () {
                $("#section_verif .box-search").removeClass("d-none")
                $("#section_verif .box-result").addClass("d-none")
                $('#section_verif .form-verification')[0].reset()
                $("#section_verif #id_search").attr("placeholder", "")
                $("#section_verif .box-result").html('<div class="text-center mt-5 pt-5 text-light"><h3 class="text-light mt-5">Veuillez Patientz SVP ...</h3> <h1><span class="fas fa-spinner"></span></h1></div>')
                $(this).removeClass("d-none")

                
                $("#section_verif select#categorie").val("0")
                $("#section_verif #id_search").val("").attr("placeholder", "")
            })

            // $("#verifier_bien .btn-previous, #verifier_bien .btn-add-biens").click(function () {
            //     $("#verifier_bien .box-search").removeClass("d-none")
            //     $("#verifier_bien .box-result").addClass("d-none")
            //     $('#verifier_bien form')[0].reset()
            //     $("#verifier_bien #id_search").attr("placeholder", "")
            //     $("#verifier_bien .box-result").html('<div class="text-center mt-5 pt-5 text-light"><h3 class="text-light mt-5">Veuillez Patientz SVP ...</h3> <h1><span class="fas fa-spinner"></span></h1></div>')
            //     $(this).removeClass("d-none")

                
            //     $("#verifier_bien select#categorie").val("0")
            // })


            $(".btn-detail").click(function () {
                $(".detail").removeClass("d-none")
                $(".message").addClass("d-none")
                $(".btn-detail").addClass("d-none")
            })

            $("#section_verif .btn-add-biens").click(function(){                
                var ident = $("#section_verif").find(".col-lg-12 h6 b.ident").text()
                var categ = $("#section_verif").find(".col-lg-12 h6 b.categ").text()
                
                $("#add-biens form")[0].reset()
                $("#add-bien .box-img").hide()
                $("#add-bien .box-field").show()

                if (categ=="VOITURE" || categ=="MOTO") {
                    if (ident.length<=8) {
                        $("#add-biens form #ident-2 input").val(ident).addClass("disabled")
                        $("#add-biens form #ident-1 input").removeClass("disabled")
                    } else {
                        $("#add-biens form #ident-1 input").val(ident).addClass("disabled")
                        $("#add-biens form #ident-2 input").removeClass("disabled")
                    }
                    $("#add-biens form #ident-2").removeClass("d-none")
                    $("#add-biens form #ident-1").addClass("col-lg-6").removeClass("col-lg-12")

                    $("#add-biens form #ident-1 label").text("N° de châssis")
                    $("#add-biens form #ident-2 label").text("Immatriculation")
                } 
                else {
                    if (categ=="AUDIO" || categ=="UNITE CENTRALE" || categ=="COPIEUR" || categ=="MONITEUR" || categ=="IMPRIMANTE" || categ=="TELEVISION" || categ=="PC PORTABLE"){
                        $("#add-biens form #ident-2").addClass("d-none")
                        $("#add-biens form #ident-1").addClass("col-lg-12").removeClass("col-lg-6")

                        $("#add-biens form #ident-1 label").text("N° de série")
                    }
                    else {
                        $("#add-biens form #ident-2").addClass("d-none")
                        $("#add-biens form #ident-1").addClass("col-lg-12").removeClass("col-lg-6")

                        $("#add-biens form #ident-1 label").text("N° IMEI")
                    }
                    $("#add-biens form #ident-1 input").val(ident).addClass("disabled")
                }
                
                $("#add-biens form #categ input").val(categ)
            })

            $("#verifier_bien .btn-add-biens").click(function(){
                var ident = $("#verifier_bien").find(".col-lg-12 h6 b.ident").text()
                var categ = $("#verifier_bien").find(".col-lg-12 h6 b.categ").text()

                $("#add-biens form")[0].reset()
                $("#add-bien .box-field").show()
                $("#add-bien .box-img").hide()

                if (categ=="VOITURE" || categ=="MOTO") {
                    if (ident.length<=8) {
                        $("#add-biens form #ident-2 input").val(ident).addClass("disabled")
                        $("#add-biens form #ident-1 input").removeClass("disabled")
                    } else {
                        $("#add-biens form #ident-1 input").val(ident).addClass("disabled")
                        $("#add-biens form #ident-2 input").removeClass("disabled")
                    }
                    $("#add-biens form #ident-2").removeClass("d-none")
                    $("#add-biens form #ident-1").addClass("col-lg-6").removeClass("col-lg-12")

                    $("#add-biens form #ident-1 label").text("N° de châssis")
                    $("#add-biens form #ident-2 label").text("Immatriculation")
                } 
                else {
                    if (categ=="AUDIO" || categ=="UNITE CENTRALE" || categ=="COPIEUR" || categ=="MONITEUR" || categ=="IMPRIMANTE" || categ=="TELEVISION" || categ=="PC PORTABLE"){
                        $("#add-biens form #ident-2").addClass("d-none")
                        $("#add-biens form #ident-1").addClass("col-lg-12").removeClass("col-lg-6")

                        $("#add-biens form #ident-1 label").text("N° de série")
                    }
                    else {
                        $("#add-biens form #ident-2").addClass("d-none")
                        $("#add-biens form #ident-1").addClass("col-lg-12").removeClass("col-lg-6")

                        $("#add-biens form #ident-1 label").text("N° IMEI")
                    }
                    $("#add-biens form #ident-1 input").val(ident).addClass("disabled")
                }
                
                $("#add-biens form #categ input").val(categ)
            })

        })
    </script> 