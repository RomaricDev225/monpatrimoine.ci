<html>
    <?php 
        @include("../traitements/functions.php");
        $sql = "select * from categorie";
        $x = retrieveLineDB($sql);
        $col = 5;
        include "../pages/main-style.php" 
    ?>
    <body>
        <div class="space pb-5">
            <div class="row w-100 link_footer pb-5">
                <div class="col-lg-12 pt-5 text-center">
                    <a href="" class="text-muted"> Menu principal</a>
                    <span class="fas fa-angle-double-left"></span>
                    <a href="" class="text-orange b"> Vérifier un bien</a>
                </div>
            </div>
            <div class="libelle text-vert text-center">
                <h1><b>Vérifier un bien</b></h1>
                    <img src="assets/img/elements/accord.gif" class="small-img" alt="" >
                <h5>
                    Super ! Nous sommes heureux de savoir que vous vérifier la propriété d'un bien avant de l'acheter <br>
                    Vous devez choisir l'une des méthodes de vérification ci-dessous.
                </h5>
            </div>
            <hr>
            <div class="space-body">
                <div class="form px-3 px-lg-5">
                    <form action=""> 
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-6">
                                <div class="row px-lg-5">
                                    <div class="col-lg-12  px-3 px-lg-5 py-3">
                                        <?php 
                                            $sql = "select * from categorie";
                                            $x = retrieveLineDB($sql);
                                        ?>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <select name="" id="categ" class="form-control designed" style="height:55px">
                                                    <option value="0">-- Choisir la Catégorie --</option>
                                                <?php for ($i=0; $i < $x; $i++) {  ?>
                                                    <option value="<?php echo retrieveDB($sql, 5)[$i][0] ?>">
                                                        <?php echo retrieveDB($sql, 5)[$i][1] ?>
                                                    </option>
                                                <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12  px-3 px-lg-5 py-3 ">
                                        <div class="form-group">
                                            <select name="" id="marque" class="form-control designed" style="height:55px">
                                                <option value="0">-- Choisir la Marque --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=" px-3 px-lg-5 py-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control p-4 designed" required id="id_bien" placeholder="Saisir l'IMEI de l'appareil">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 px-3 px-lg-5 pb-3 pt-2 pt-lg-3">
                                        <button type="submit" class="btn btn-orange btn-block btn-lg">
                                            Rechercher <span class="fas fa-search"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 text-center">
                                <div class="row">
                                    <div class="col-lg-12 p-3">
                                        <img src="assets/img/elements/scan.png" class="x-small-img" alt="" >
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="button" class="btn btn-orange btn-block btn-lg">
                                            Rechercher <span class="fas fa-qrcode"></span>
                                        </button>
                                    </div>

                                </div>
                                
                            </div>  
                        </div>

                    </form>
                </div>
                <div class="row text-dark px-5 d-none search_resultat">
                    <div class="col-lg-12 box-result mt-lg-5 d-noe px-lg-5" style="min-height:699px">
                        <div class="text-center mt-5 pt-lg-5">
                            <h3 class="mt-5">Veuillez Patientz SVP ...</h3> 
                            <h1><span class="fas fa-spinner"></span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(()=>{
                $(".space-body .card").click(function () {
                    var ident_categ = $(this).find(".ident_categ").val()
                    
                    $("form #categ").find('option').remove()
                    $("form #categ").append('<option value="MARQUE">MARQUE</option>');
                    var q = 'select codeMarque, designation from marque WHERE categorie Like "%' + ident_categ + '%"'
                    $.post('../traitements/retrieve.php', {rqt:q, nbreCol:2}, function (data) {
                        var x = data.split('#$').length
                        
                        for (let i = 0; i < x-1; i++) {
                            var first_data = data.split('#$')[i]
                            var second_data = first_data.split('|')
                            var content = '<option value="' + second_data[1] + '">' + second_data[2] + '</option>'
                            $("form #categ").append(content)
                        }
                    })

                    $(".space-body .menu").fadeOut(200)
                    $(".space-body .form").fadeIn(500)

                    
                })

                $('.number').on('input',function(){
                    var valeur = $(this).val();
                    valeur = valeur.replace(/\D+/,'');
                    // on peut ajouter d'autres contrôles
                    $(this).val(valeur);
                });
                
                $(".link_footer a.text-orange").click(function () {return false})

                $("#categ").change(function(){
                    
                    $("#id_bien").val("")
                    var categ = $(this).val()
                    var sql = "select codeMarque, designation, categorie from marque where categorie LIKE '%" + categ + "%'"
                    
                    $.post('traitements/retrieve.php', {rqt:sql, nbreCol:3}, function (data) {
                        var first_data = data.split("#$")
                        var k = first_data.length
                        $("#marque").find("option").remove()
                        if (k>2) {
                            var options = '';
                            $("#id_bien").removeAttr("maxlength").removeClass("number")

                            for (i = 1; i < k-1; i++) {
                                var second_data = first_data[i].split("|")
                                // alert(first_data[i].split("|")[1])
                                options += '<option value="' + second_data[1] + '">' + second_data[2].toUpperCase() + '</option>'
                                $("#marque").html(options);
                                $("#marque").prepend("<option value='0'>-- Choisir la Marque --</option>");
                                $('#marque option[value="0"]').prop('selected', true);

                                
                                var alias = second_data[3]
                                if (alias.includes("AUDIO") || alias.includes("COP") || alias.includes("IMP") || alias.includes("EC") || alias.includes("PCP") || alias.includes("TV") || alias.includes("UC")) {
                                    $("#id_bien").attr("placeholder", "Saisir le N° de série")
                                } else {
                                    if(alias.includes("PHONE") || alias.includes("TAB")) {
                                        $("#id_bien").attr("placeholder", "Saisir l'IMEI de l'appareil")
                                        $("#id_bien").addClass("number").attr("maxlength", "17")
                                        
                                    }
                                    else{
                                        $("#id_bien").attr("placeholder", "Saisir le N° matricule ou de châssis du véhicule")
                                    }
                                }
                                // alert(alias)
                            }
                        }
                        else{
                            $("#marque").prepend("<option value='0'>-- Choisir la Marque --</option>");
                        }
                        
                    })
                })

                $("form .btn-orange").click(function(){
                    var inputVal = $("#id_bien").val()
                    var identifiant = $("#categ").val() + "#|" + inputVal
                    if (inputVal!="") {
                        $(".search_resultat").removeClass("d-none")
                        $(".form").addClass("d-none")
                        $.post('traitements/var_session.php', {var:identifiant})
                        $(".search_resultat").load("pages/search_result.php")
                        return false
                    } 
                    
                })
            })
        </script>
           
    </body>
</html>