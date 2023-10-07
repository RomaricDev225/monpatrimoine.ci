<html>
    <?php 
        session_start();
        @include("../traitements/functions.php");
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
        <div class="space pb-5">
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

                        <a href="" class="text-orange link_3 link_false"> 
                            <?php echo ucfirst(strtolower(retrieveDB($q, 1)[0][0])) ?>
                        </a>
                        <span class="fas fa-angle-double-left d-none"></span>

                        <a href="" class="text-orange link_4 link_false"> </a>
                    </div>
                </div>
            </div>    
            <div class="libelle text-vert text-center">
                <h1><b>Déclaration de bien</b></h1>
                <h5>Ajouter un bien à votre patrimoine c'est confirmer qu'il vous appartient.</h5>
                <hr>
                
                <h4 class="text-sombre"><?php echo retrieveDB($q, 1)[0][0] ?></h4>
                <h64 class="text-muted"><?php echo $categories ?></h6>
            </div>
            
            
            <div class="space-body">
                <div class="choice_categ d-flex justify-content-center">
                    <div class="row px-5">
                        <?php for ($i=0; $i < $x; $i++) { ?>
                        <div class="<?php echo $class_col ?> pt-3">
                            <div class="card btn btn-light p-5 border-warning">
                                <img src="assets/img/elements/default/<?php echo retrieveDB($sql, $col)[$i][0] ?>.png" alt="" class="normal-img small-height">
                                <h3 class="designation"><?php echo ucfirst(strtolower(retrieveDB($sql, $col)[$i][1])) ?></h3>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
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

                $(".choice_categ .card").click(function(){
                    var categ = $(this).find(".designation").text()
                    $(".link_footer a.link_4").text(categ)
                    $(".fa-angle-double-left:eq(2)").removeClass("d-none")
                    var url = "pages/formulaires/formulaire-" + categ +".php"
                    $("#pages_space").load(url.replace(" ", "_"))

                })
            })
        </script>
           
    </body>
</html>