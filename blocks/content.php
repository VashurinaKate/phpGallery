    <!-- // print_r($_SERVER);

    // $path = "files/test.txt";
    // $file = fopen($path, "r");
    // while(!feof($file)) {
    //     echo fgets($file)."</br>";
    // }
    // fclose(); -->
<div class="images_wrapper">
    <?php
        $images = scandir("images");
        for ($i = 2; $i < count($images); $i++) {?>
            <a href="full_image.php?file=<?= $images[$i]?>" target="blank"><img src="images/<?= $images[$i]?>" alt="img" width="150"></a>
    <?php }?>
</div>
