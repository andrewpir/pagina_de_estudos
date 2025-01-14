<?php
    /*$files = $_FILES['file'];
    $names = $files['name'];
    $tmp_name = $files['tmp_name'];

    var_dump($names);
    die();

    foreach($names as $index => $names) {
        $extension = pathinfo($name, PATHINFO_EXTENSION);
        $newName = uniqid().'.'.$extension;
        move_uploaded_file($tmp_name[$index], 'uploads/'.$newName);
    }
    var_dump($_FILES);
