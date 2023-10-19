<?php $pageTitle = "Déclaration de bien - Mobile"; ?>
@extends("layouts.app")
<?php 
    session_start();
    include "traitements/functions.php";
    if ($_SESSION['auth']!="true") {
        header("location:/");
    }
    $url = "";
   
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        $url = "https://";
    }
    else {
        $url = "http://";
    }
    
    // hôte (nom de domaine voire adresse IP)
    $url = $url . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $array_url = explode("/", $url);
    $groupe = end($array_url) ; 
    $q = "select distinct categorie.groupe from categorie, groupe_bien where groupe_bien.designation='" . $groupe . "' and groupe_bien.id=categorie.groupe";
    $id_groupe = retrieveDB($q, 1)[0][0];
    if ($_SESSION['auth']!="true") {
        header("location:/");
    }

    $sql = "select * from categorie where groupe=" . $id_groupe;
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

@section("content")
<section class="bg-light">
    <div class="container-fluid pt-5 bg-white">
        <div class="row">
            <div class="col-lg-11">
                <div class="space py-5">
                    <div class="row w-100 mx-5">
                        <div class="col-lg-1">
                            <div class="btn btn-lg big-ico" onclick="window.history.back();">
                                <h1><span class="fas fa-angle-left"></span></h1>
                            </div>
                        </div>
                        <div class="col-lg-11">
                            <div class="libelle text-vert text-center" id="title">
                                <h1><b>Déclaration de bien</b></h1>
                                <h5>Ajouter un bien à votre patrimoine c'est confirmer qu'il vous appartient.</h5>
                            </div>
                        </div>
                    </div>
                    
                    <div class="space pb-5">
                        <div class="space-body pt-5">
                            <div class="choice_categ d-flex justify-content-center">
                                <div class="row px-5">
                                    <?php for ($i=0; $i < $x; $i++) { ?>
                                    <div class="<?php echo $class_col ?> pt-3">
                                        <a href="" class="card btn btn-light p-5 border-warning">
                                            <img src="../assets/img/elements/default/<?php echo retrieveDB($sql, $col)[$i][0] ?>.png" alt="" class="normal-img small-height">
                                            <h3 class="designation"><?php echo ucfirst(strtolower(retrieveDB($sql, $col)[$i][1])) ?></h3>
                                        </a>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="../assets/js/jquery-3.2.1.slim.min.js"></script>
<script src="../assets/js/bootstrap.min.js" ></script>

<!-- for method post -->
<script src="../assets/js/jquery.min.js"></script>
<script>
    $(()=>{
        
        var title_categ = $(location).attr("href").split("/").pop()
        $("title").html("Déclaration de biens - " + title_categ);

        $(".space-body a").click(function(){
            var categ = $(this).find("h3").text()
            location.href="/declaration-de-bien/" + title_categ + "/" + categ.toLowerCase().replace(" ", "_")
            return false
        })
    })
</script>
@endsection