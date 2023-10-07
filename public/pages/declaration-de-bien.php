<html>
    <?php 
        @include("../traitements/functions.php");
        $sql = "select * from groupe_bien";
        $x = retrieveLineDB($sql);
        $col = 6;
    ?>
    <body>
        <div class="space pb-5">
            <div class="row w-100 link_footer pb-5">
                <div class="col-lg-12 pt-5 text-center">
                    <a href="" class="text-muted"> Menu principal</a>
                    <span class="fas fa-angle-double-left"></span>
                    <a href="" class="text-orange"> Déclarer un bien</a>
                </div>
            </div>
            <div class="libelle text-vert text-center">
                <h1><b>Déclaration de bien</b></h1>
                <h5>Vous êtes sur le point d'ajouter un bien à votre patrimoine en ligne</h5>
            </div>
            <hr>
            <div class="space-body d-flex justify-content-center">
                <div class="row px-5 container">
                    <?php for ($i=0; $i < $x; $i++) { ?>
                    <div class="col-lg-4 pt-3">
                        <div class="card btn btn-light p-5 border-warning"> 
                            <input type="hidden" class="ident_group" value="<?php echo retrieveDB($sql, $col)[$i][0] ?>">
                            <img src="assets/img/elements/default/<?php echo $i + 1 ?>.png" alt="" class="w-100 small-height">
                            <h3 class=""><?php echo retrieveDB($sql, $col)[$i][1] ?></h3>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            
           
        </div>
        <script>
            $(()=>{
                $(".space-body .card").click(function () {
                    var ident_group = $(this).find(".ident_group").val()
                    $.post("traitements/var_session.php", {var:ident_group}, function (data) {
                        $("#pages_space").load("pages/form-declaration-de-bien.php")
                    })
                })

                $(".link_footer a.text-orange").click(function () {return false})
            })
        </script>
           
    </body>
</html>