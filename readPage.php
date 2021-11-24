<?php
    $page = file_get_contents("https://news.ru");
    // echo $page;
    if (file_put_contents("outer.php", $page)) {
        header("Location: outer.php");
    }
?>