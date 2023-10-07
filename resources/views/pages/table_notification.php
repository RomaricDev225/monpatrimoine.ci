<html>
<?php 
session_start();
include "../traitements/functions.php";
    $sql = "SELECT client.Name, client.Surname FROM transfert, appareil, client 
    WHERE transfert.confirmation=0 and transfert.appareil=appareil.IMEI and appareil.client=client.idClient and transfert.destinataire='" . $_SESSION['ident_client'] . "'";
    $x = retrieveLineDB($sql);
    $col=2;
    
    // echo $sql;
?>

<div class="row box">
    <?php
    if ($x>0) {
    for ($i=0; $i < $x; $i++) { 
        $name = retrieveDB($sql, $col)[$i][0] . " " . retrieveDB($sql, $col)[$i][1];
    ?>
    <div class="col-md-4 col-sm-6">
        <a href="#" class="card bg-warning">
            <div class="card-body text-center">
                <span class="fas fa-envelope h1" style="font-size:500%"></span>
                <h5 class="text"><?php echo $name ?></h5>
                <h6>Vous a transféré un appareil, voulez-vous confirmer ?</h6>
            </div>
            <div class="card-footer">
                <button class="genric-btn success-border">
                    <span class="fas fa-check-square"></span> Confirmer
                </button>
                <button class="genric-btn danger-border">
                    <span class="fas fa-times"></span> Rejeter
                </button>
                
            </div>
        </a>
    </div>
    <?php }}else{ ?>
        <h4 class="w-100 text-center">Aucune notification disponible</h4>
        <?php } ?>
</div>

<div class="row d-none validation">
    <div class="col-md-12 col-sm-12">
        <div class="mt-3">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-sm-12 text-center alert alert-info h4">
                    <span class="fas fa-exclamation-circle"></span> Veuillez saisir le code transfert que vous avez reçu de votre correspondant
                </div>
                <div class="col-md-4 col-sm-12 text-center">
                    <form action="">
                        <label for="">Code transfert</label>
                        <input type="text" class="form-control text-center h2" required placeholder="XXXX" maxlength="5">
                        <p class="labError alert-danger p-1 d-none">Code de transfert erroné !</p>
                        <button type="submit" class="genric-btn primary-border btn-block">VALIDER</button>
                        <button class="genric-btn danger-border btn-block">ANNULER</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row d-none msg-finish">
    <div class="col-md-12 col-sm-12">
        <div class="mt-3">
            <div class="row d-flex justify-content-center alert alert-success">
                <div class="col-md-10 col-sm-12 text-center h4">
                    <h1 class="text-success"><span class="fas fa-check-circle"></span> Félicitaion !</h1>
                    <h3>L'appareil est desormais admis dans votre patrimoine</h3> 
                    <div class="mt-5">
                        <label for="">Code patrimoine</label>
                        <h2>PAT-PHONE-00000000</h2>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-center">
                    <button type="button" class="genric-btn success-border btn-block">
                        <span class="fas fa-back"></span> OK
                    </button>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Jquery, Popper, Bootstrap -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script>
    $(()=>{
        
        $(".msg-finish .success-border").click(function () {
            $(".box").removeClass("d-none")
            $(".validation").addClass("d-none")
            $(".msg-finish").addClass('d-none')
        })

        $(".notification .validation .danger-border").click(function () {
            $(".notification .box").removeClass("d-none")
            $(".notification .validation").addClass("d-none")
            return false
        })

        $(".notification .validation .primary-border").click(function () {
            var code = $(".notification .validation input").val()
            var client = $("#ident_client").val()
            if (code!="") {
                var q = 'select destinataire, destinateur, appareil from transfert where codeTransfert="' + code + '"'
                $.post('traitements/retrieve.php', {rqt:q, nbreCol:3}, function (data) {
                    if (data!="" && data.includes("ERROR")==false) {
                        var sql = "update appareil set client='" + data.split("|")[1] + "' where client='" + data.split("|")[2] + "'"
                        $.post('traitements/query.php', {rqt:sql}, function (retour) {
                            if (retour=="1") {
                                sql = 'update transfert set confirmation=1 where codeTransfert="' + code + '"'
                                $.post('traitements/query.php', {rqt:sql}, function (ret) {
                                    if (ret==1) {                                        
                                        var fileName = "IMEI_DEC_" + data.split("|")[3]
                                        var provenance = "assets/img/post/" + data.split("|")[2] +"/" + fileName + ".jpg"                                        
                                        $.post('traitements/move_file_image.php', {origine:provenance, ident:client, nameFile:fileName}, function (resultat) {alert(resultat)})
                                        
                                        fileName = "Phone_DEC_" + data.split("|")[3]
                                        provenance = "assets/img/post/" + data.split("|")[2] +"/" + fileName + ".jpg"
                                        $.post('traitements/move_file_image.php', {origine:provenance, ident:client, nameFile:fileName}, function (resultat) {alert(resultat)})
                                        
                                        $(".notification .msg-finish").removeClass('d-none')
                                        $(".notification .validation").addClass('d-none')

                                    } else {
                                        alert("Une erreur s'est produite : \n" + retour)
                                        
                                    }
                                })
                            }
                            else{
                                alert("Une erreur s'est produite : \n" + retour)
                            }
                            
                        })
                        
                        // alert(sql)
                        $(".validation p.labError").addClass('d-none')
                    }
                    else{
                        alert(data)
                        $(".validation p.labError").removeClass('d-none')
                    }
                })
                return false
            } else {
                
            }
        })

        $(".notification .box .card").click(function () {
            $(".notification .box").addClass("d-none")
            $(".notification .validation").removeClass("d-none")
            return false
        })
    })
</script>
</html>