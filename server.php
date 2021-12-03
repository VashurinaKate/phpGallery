<?php
include("config.php");

// $pathToSmall = "images/small/{$_FILES['photo']['name']}";
// $pathToBig = "images/big/{$_FILES['photo']['name']}";

$title = $_FILES['photo']['name'];
$size = $_FILES['photo']['size'];

// if(move_uploaded_file($_FILES['photo']['tmp_name'], $pathToSmall)) {
    // copy($pathToSmall, $pathToBig);
    $sql = "insert into images (title, alt, size) values ($title, '', $size)";
    $res = mysqli_query($connect, $sql);
    var_dump($connect); // false: ошибка int(1054) ["error"]=> string(40) "Unknown column '8S.jpeg' in 'field list'
    if (mysqli_query($connect, $sql)) {
        header("Location: index.php");
    }
// }

