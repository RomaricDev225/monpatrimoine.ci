<html>
<?php 
session_start();
include "../traitements/functions.php";
    $sql = "SELECT codeTransfert, dateTransfert, Modele, marque, destinataire FROM transfert, appareil, client 
            WHERE transfert.appareil=appareil.IMEI and appareil.client=client.idClient and client.idClient='" . $_SESSION['ident_client'] . "' 
            and transfert.destinateur='" . $_SESSION['ident_client'] . "'";
    $x = retrieveLineDB($sql);
    $col=5;
    // echo $sql;
?>

    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Code </th>
            <th scope="col">Date</th>
            <th scope="col">Appareil transféré</th>
            <th scope="col">Destinataire</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if ($x==0) {?>
            <tr>
                <td class="text-center" colspan="6">
                    Aucune donnée
                </td>
            </tr>
            <?php }else{ 
                for ($i=0; $i < $x; $i++) { 
                    $destinataire =  retrieveDB($sql, $col)[$i][4];
                    $q = "SELECT Name, Surname FROM client WHERE idClient='" . $destinataire . "'";
                    $t = retrieveLineDB($q);
                    if ($t==1) {
                        $nom_prenom = retrieveDB($q, 2)[0][0] . " " . retrieveDB($q, 2)[0][1];
                    } else {
                        $nom_prenom = "";
                    }
                    
                    
            ?>
            <tr>
                <th scope="row"><?php echo $i + 1 ?></th>
                <td><?php echo retrieveDB($sql, $col)[$i][0] ?></td>
                <td><?php echo retrieveDB($sql, $col)[$i][1] ?></td>
                <td>
                    <h5 class="nom-appareil">
                        <?php echo retrieveDB($sql, $col)[$i][2] ?> <br>
                        <small><?php echo retrieveDB($sql, $col)[$i][3] ?> </small>
                    </h5>
                    
                </td>
                <td>
                    <?php echo $nom_prenom ?>
                </td>
                <td class="action">
                    <a href="" class="badge badge-primary p-3">
                        <span class="fas fa-eye"></span>
                    </a>
                    <a href="" class="badge badge-danger p-3">
                        <span class="fas fa-trash"></span>
                    </a>
                    <a href="" class="badge badge-warning p-3">
                        <span class="fas fa-undo"></span>
                    </a>
                </td>
            </tr>
            <?php }} ?>
        </tbody>
    </table>
</html>