<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $pageTitle = "Tableau de bord"; ?>
    <title><?php echo $pageTitle ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
</head>
<body>
<?php 

@include("layouts/navbar.blade.php");
 
if ($_SESSION['auth']!="true") {
    header("location:/");
}


?>

<section class="bg-light">
    
    <div class="container-fluid pt-5 bg-white">
        <div class="row">
            <div class="col-lg-1 bg-sombre">
                <div class="row pt-5">
                    <div class="col-lg-12 text-center">
                        <img src="assets/img/elements/user.png" alt="User" class="rounded-circle w-75">
                    </div>
                    <div class="col-lg-12 py-3 text-center text-light">
                        <span class="name-profile">
                            <b><?php echo explode(" ", $_SESSION['name'])[0] . " " . explode(" ", $_SESSION['name'])[1]  ?></b>
                        </span>
                    </div>
                    <div class="col-lg-12 text-center">
                        <span class="badge badge-orange mx-1"><i class="fas fa-image"></i></span>
                        <span class="badge badge-orange mx-1"><i class="fas fa-power-off"></i></span>
                        <span class="badge badge-orange mx-1"><i class="fas fa-user-circle"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-11">
                <div id="pages_space">
                    <div class="row pt-5">
                        <div class="col-12 text-center px-5">
                            <h1 class="msg-welcome">
                                <b class="text-orange">BIENVENUE DANS VOTRE PATRIMOINE</b>
                            </h1>
                            <hr>
                            <h5 class="text-vert">Application de sauvegarde de biens de tout genre. N°1 en Côte d'ivoire</h5>
                            <input type="hidden" id="val_plomb" value="<?php if (isset($_SESSION['myVariable'])) {echo $_SESSION['myVariable'];}?>">
                        </div>
                        <div class="col-12 px-5">
                            <div class="row py-5 px-5">
                                <div class="col-3 btn-declaration">
                                    <a href="/declaration-de-bien" class="btn card btn-large border-warning">
                                        <img src="assets/img/elements/deposer.gif" alt="" class="normal-img">
                                        <h5 class="text-vert">Déclarer un bien</h5>
                                    </a>
                                </div>
                                <div class="col-3 btn-recevoir">
                                    <a href="/recevoir-un-bien" class="btn card btn-large border-warning">
                                        <img src="assets/img/elements/telecharger-un-fichier.gif" alt="" class="normal-img">
                                        <h5 class="text-vert">Récevoir un bien</h5>
                                    </a>
                                </div>
                                <div class="col-3 declaration-perte">
                                    <a href="/declaration-de-perte" class="btn card btn-large border-warning">
                                        <img src="assets/img/elements/perte.gif" alt="" class="normal-img">
                                        <h5 class="text-vert">Déclarer une perte</h5>
                                    </a>
                                </div>
                                <div class="col-3 offre-connecte">
                                    <a  href="/offres-connectees" class="btn card btn-large border-warning">
                                        <img src="assets/img/elements/offre_1.gif" alt="" class="normal-img">
                                        <h5 class="text-vert">Nos offres connectées</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 px-5">
                            <h2 class='mb-3'>Historique</h2>
                                <table id="dtBasicExample" class="table table-striped" width="100%">
                                    <thead>
                                        <tr>
                                        <th class="th-sm">Name
                                        </th>
                                        <th class="th-sm">Position
                                        </th>
                                        <th class="th-sm">Office
                                        </th>
                                        <th class="th-sm">Age
                                        </th>
                                        <th class="th-sm">Start date
                                        </th>
                                        <th class="th-sm">Salary
                                        </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                        </tr>
                                        <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                        </tr>
                                        <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                        </tr>
                                        <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                        </tr>
                                        <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                        </tr>
                                        <tr>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                        </tr>
                                        <tr>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                        </tr>
                                        <tr>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
                                        <td>$327,900</td>
                                        </tr>
                                        <tr>
                                        <td>Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                        </tr>
                                        <tr>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008/12/13</td>
                                        <td>$103,600</td>
                                        </tr>
                                        <tr>
                                        <td>Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>2008/12/19</td>
                                        <td>$90,560</td>
                                        </tr>
                                        <tr>
                                        <td>Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013/03/03</td>
                                        <td>$342,000</td>
                                        </tr>
                                        <tr>
                                        <td>Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                        </tr>
                                        <tr>
                                        <td>Haley Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td>43</td>
                                        <td>2012/12/18</td>
                                        <td>$313,500</td>
                                        </tr>
                                        <tr>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>19</td>
                                        <td>2010/03/17</td>
                                        <td>$385,750</td>
                                        </tr>
                                        <tr>
                                        <td>Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>London</td>
                                        <td>66</td>
                                        <td>2012/11/27</td>
                                        <td>$198,500</td>
                                        </tr>
                                        <tr>
                                        <td>Paul Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td>64</td>
                                        <td>2010/06/09</td>
                                        <td>$725,000</td>
                                        </tr>
                                        <tr>
                                        <td>Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
                                        </tr>
                                        <tr>
                                        <td>Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                        </tr>
                                        <tr>
                                        <td>Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>2012/09/26</td>
                                        <td>$217,500</td>
                                        </tr>
                                        <tr>
                                        <td>Jenette Caldwell</td>
                                        <td>Development Lead</td>
                                        <td>New York</td>
                                        <td>30</td>
                                        <td>2011/09/03</td>
                                        <td>$345,000</td>
                                        </tr>
                                        <tr>
                                        <td>Yuri Berry</td>
                                        <td>Chief Marketing Officer (CMO)</td>
                                        <td>New York</td>
                                        <td>40</td>
                                        <td>2009/06/25</td>
                                        <td>$675,000</td>
                                        </tr>
                                        <tr>
                                        <td>Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        <th>Name
                                        </th>
                                        <th>Position
                                        </th>
                                        <th>Office
                                        </th>
                                        <th>Age
                                        </th>
                                        <th>Start date
                                        </th>
                                        <th>Salary
                                        </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</section>
<section>
    <div class="modal fade bd-example-modal-lg" id="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        ...
        </div>
    </div>
    </div>
</section>
<?php 


?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>


<script>
    $(()=>{

        // 

        var val_plomb = $("#val_plomb").val()
        if (val_plomb=="plomber") {
            $("#pages_space").load("pages/declaration-de-bien.php")
        } 
        $(".btn-declaration").click(function () {
             $("#pages_space").load("pages/declaration-de-bien.php")
             
        })

        $(".btn-verification").click(function () {
             $("#pages_space").load("pages/verification-de-bien.php")
             
        })
       
        // $("#pages_space").load("pages/form-declaration-de-bien.php")


        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
        
        
    })
</script>

<?php @include("layouts/footer.blade.php") ?>
</body>
</html>