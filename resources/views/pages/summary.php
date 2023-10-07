<?php session_start() ?>
<html>
    <body>
        <div class="text-center">
            <h2 class="text-primary">
                On récapitule ?
                <h1 class="fas fa-smile "></h1>
            </h2>
        </div>
        <?php 
            $chaine = str_replace("init", "", $_SESSION['data_string_declaration_de_bien']) ;
            $data_string_tab_1 = explode("§end-string§", $chaine);
            //"init#|58014578023654875012#|58014578023654875012#|CZC01247SX#|hoc#|ALCATEL#|2023-06-29§end-string§";
            $phone = count($data_string_tab_1);
            // echo $phone;

        ?>
        <div class="">
            <h5 class="alert alert-warning">
                <span class="fas fa-exclamation-triangle"></span> 
                Vous allez déclarer dans votre patrimoine 
                <span class="nbre-app"><?php if (($phone-1)>1) {echo $phone -1 . " Téléphones";}else{echo $phone-1 . " Téléphone";} ?></span>.
                Cliquer sur terminer pour valider votre délcaration.
            </h5>
        </div>
        
        <div class="row">
            <?php for ($i=0; $i < $phone-1; $i++) { 
                $data_string_tab_2 = explode("#|", $data_string_tab_1[$i]);
                // echo $data_string_tab_1[$i] . "<br>"
                $total_col = 12;
                if ($phone<=4) {
                    $set_col = $total_col / ($phone-1);
                    $col = "col-md-" . $set_col;
                }
                else{
                    $col="col-md-4";
                }
                $create_date = date_create($data_string_tab_2[5]);
                
            ?>
            <div class="<?php echo $col ?> col-sm-12">
                <div class="card bg-light">
                    <div class="card-body">
                        <h3 class="modele"><?php echo $data_string_tab_2[3] . " (" . $data_string_tab_2[4] . ")"?></h3>
                        <small>IMEI</small>
                        <h5 class="imei"><?php echo $data_string_tab_2[1]?></h5>
                        <small>N° de série</small>
                        <h5 class="serial"><?php echo $data_string_tab_2[2]?></h5>
                        <h6 class="data-achat text-primary"><?php echo "Acheté le " . date_format($create_date, "d/m/Y")?></h6>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </body>
</html>