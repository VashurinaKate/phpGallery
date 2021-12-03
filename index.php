<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
        }

        header {
            background-color: lightcyan;
            padding: 50px;
            text-align: center;
            margin-bottom: 30px;
        }
        .content {
            padding-bottom: 100px;
        }
        .images_wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 30px;
            flex-wrap: wrap;
            max-width: 900px;
            margin: 0 auto;
        }

    </style>
</head>
<body>
    <div class="wrapper">
        <header>
            <?php
                include "blocks/header.php";
            ?>
        </header>
        <div class="content">
            <div class="images_wrapper">
            <?php
                // include "blocks/content.php";
                include "config.php";

                $sql = "select * from images";
                $res = mysqli_query($connect, $sql);

                while($data = mysqli_fetch_assoc($res)):?>
                    <a href="full_image.php?id=<?=$data['id']?>" target="blank">
                        <img src="images/small/<?=$data['title']?>" alt="<?= $data['alt']?>">
                    </a>
                <?php endwhile; ?>
            </div>
            <?php include "blocks/form.php"; ?>
        </div>
        <footer>
            
        </footer>
    </div>
</body>
</html>