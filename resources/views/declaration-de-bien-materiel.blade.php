<?php 
    $pageTitle = "Déclaration de bien"; 
    session_start();
    include "traitements/functions.php";
    if ($_SESSION['auth']!="true") {
        header("location:/");
    }
?>
@extends("layouts.app")

@section("content")
<section class="bg-light">
    <div class="container-fluid bg-white">
        <div class="space py-5">
            <div class="space-body pb-5">
                <div class="formulaire container p-5 text-center">
                    <div class="pt-5">
                        <input type="hidden" id="seconde" value="0">
                        <img src="../../assets/img/icon/loading.gif" class='w-25' alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="../../assets/js/jquery-3.2.1.slim.min.js"></script>
<script src="../../assets/js/bootstrap.min.js" ></script>

<!-- for method post -->
<script src="../../assets/js/jquery.min.js"></script>
<script>
    $(()=>{
        var seconde = $("#seconde").val()
        var categorie = $(location).attr("href").split("/").pop()
        var url = "/formulaire/" + categorie
        // alert(url)
        $("title").html("Déclaration de biens - Formulaire");
        var compteur = setInterval(
            function() {
                seconde = parseInt(seconde) + 1
                $("#seconde").val(seconde)
                if (seconde==1) {
                    clearInterval(compteur);
                    $(".space-body .formulaire").load(url)
                } 
            }, 
            1000
        );

        
        // 
    })
</script>
@endsection