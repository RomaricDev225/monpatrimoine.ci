<?php
session_start();
$origine = "../" . $_POST['origine'];
$id = $_POST['ident'];
$nameFile = $_POST['nameFile'];
try {
    $path = "../assets/img/post/" . $id;
    if (!is_dir($path)) {
        mkdir($path, 0777, true);
    }
    copy($origine, "../assets/img/post/" . $id . "/" . $nameFile . ".jpg");
    $_SESSION['idBien'] = $nameFile;
    // move_uploaded_file($origine, "img/membre/" . $mle . ".jpg");
} catch (\Throwable $th) {
    echo "../assets/img/post/" . $id . "/" . $nameFile . ".jpg";
    echo $th;
    copy($origine, "../assets/img/post/" . $id . "/" . $nameFile . ".jpg");
}

echo $_SESSION['idBien']



?>