<?php

if ($_FILES['file']['name'] !='') {
    $test = explode('.', $_FILES['file']['name']);
    $extension = end($test);
    $name = rand(100, 999) . '.' . $extension;
    $location = "assets/img/tmp/" . $name;
    move_uploaded_file($_FILES['file']['tmp_name'], '../' . $location);
    // echo '<img src=' . $location . ' height="850" width="825" class="img-thumbnail" />';
    echo $location;

} else {
    # code...
}
