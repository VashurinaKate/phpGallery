<?php
include "../config.php";
$action = $_GET['action'];
$id = $_GET['id'];

if ($action == 'delete') {
    $sql = "delete from goods where id=$id";
    if (mysqli_query($connect, $sql)) {
        header("Location: index.php");
    }
} elseif ($action == "edit") {
    $price = $_GET['price'];
    $sql = "update goods set price=$price where id=$id";
    if (mysqli_query($connect, $sql)) {
        $quety = "select title from goods where id=$id";
        $res = mysqli_query($connect, $sql);
        $title = mysqli_fetch_assoc($res)['title'];
        header("Location: index.php?title=$title");
    }
}
