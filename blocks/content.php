
<div class="images_wrapper">
    <?php
        $pathToSmall = "images/small";
        $pathToBig = "images/big";
        $images = array_slice(scandir($pathToSmall), 2);

        for ($i = 0; $i < count($images); $i++) {?>
            <a href="<?=$pathToBig."/".$images[$i]?>" target="blank"><img src="<?=$pathToSmall."/".$images[$i]?>" alt="img"></a>
    <?php }?>
</div>
