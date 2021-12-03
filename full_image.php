<?php
include("config.php");

$id = $_GET['id'];
$count = $_GET['count'];
$sql = "select * from images where id=$id";
$res = mysqli_query($connect, $sql);

if (mysqli_query($connect, $sql)) {
    $image = mysqli_fetch_assoc(mysqli_query($connect, $sql));
    $update = "update images set count=count+1 where id=$id";
    mysqli_query($connect, $update);
}
?>

<img src="images/big/<?= $image['title']?>" alt="<?= $image['alt']?>" ></br>
<h1>Просмотры: <?= $image['count']?> </h1>
<a href="<?= $_SERVER['HTTP_REFERER']?>">Back</a>
