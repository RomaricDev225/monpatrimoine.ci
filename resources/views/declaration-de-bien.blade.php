<?php 

session_start(); 
$pageTitle = "Déclaration de bien";
if ($_SESSION['auth']!="true") {
    header("location:/");
}
?>
<?php 
    include "traitements/functions.php";
    $sql = "select * from groupe_bien";
    $x = retrieveLineDB($sql);
    $col = 6;
?>

@extends("layouts.app")

@section("content")
   
    <section class="bg-light">
        <div class="space py-5">
            <div class="libelle text-vert text-center">
                <h1><b>Déclaration de bien</b></h1>
                <h5>Vous êtes sur le point d'ajouter un bien à votre patrimoine en ligne</h5>
            </div>
            <hr>
            <div class="space-body d-flex justify-content-center">
                <div class="row px-5 container">
                    <?php for ($i=0; $i < $x; $i++) { ?>
                    <div class="col-lg-4 pt-3">
                        <a href="" class="card btn btn-light p-5 border-warning"> 
                            <input type="hidden" class="ident_group" value="<?php echo retrieveDB($sql, $col)[$i][0] ?>">
                            <img src="assets/img/elements/default/<?php echo $i + 1 ?>.png" alt="" class="w-100 small-height">
                            <h3 class=""><?php echo retrieveDB($sql, $col)[$i][1] ?></h3>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    
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
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>


<script>
    $(()=>{

        // 

        $(".space a").click(function(){
            var categ = $(this).find("h3").text()
            location.href="/declaration-de-bien/" + categ.toLowerCase()
            return false
        })
        
        
    })
</script>
@endsection

