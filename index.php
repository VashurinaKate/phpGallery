<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
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
            margin-bottom: 50px;
        }
        .images_wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 30px;
        }
        footer {
            background-color: darkgrey;
            height: 50px;
            width: 100%;
            position: absolute;
            bottom: 0;
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
            <?php
                include "blocks/content.php";
                include "blocks/form.php";
            ?>
        </div>
        <footer>
            
        </footer>
    </div>
</body>
</html>