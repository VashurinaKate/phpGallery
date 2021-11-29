<?php
$pathToSmall = "images/small/{$_FILES['photo']['name']}";
$pathToBig = "images/big/{$_FILES['photo']['name']}";

// Проверка на тип и размер изображения
$types = array('image/gif', 'image/png', 'image/jpeg', 'image/jpg');
$size = 1024000;

if(!in_array($_FILES['photo']['type'], $types))
    die('Запрещенный тип файла');

if ($_FILES['photo']['size'] > $size)
    die('Слишком большой размер файла');

if(move_uploaded_file($_FILES['photo']['tmp_name'], $pathToSmall)) {
    // Копирование изображения в папку big
    copy($pathToSmall, $pathToBig);

    // Изменение размера изображения, в данном случае остается 20%
    $persent = 0.2;
    // Получаю размер исходного изображения 
    list($width, $height) = getimagesize($pathToSmall);
    // Рассчет нового размера
    $newwidth = $width * $persent;
    $newheight = $height * $persent;

    $thumb = imagecreatetruecolor($newwidth, $newheight);

    // Установка исходного источника изображения с учетом типа
    if ($_FILES['photo']['type'] == 'image/jpeg')
        $source = imagecreatefromjpeg($pathToSmall);
    elseif ($_FILES['photo']['type'] == 'image/png')
        $source = imagecreatefrompng($pathToSmall);
    elseif ($_FILES['photo']['type'] == 'image/gif')
        $source = imagecreatefromgif($pathToSmall);
    else return false;

    imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
    // Вывод изображения в папку small с учетом типа
    if ($_FILES['photo']['type'] == 'image/jpeg')
        imagejpeg($thumb, $pathToSmall);
    elseif ($_FILES['photo']['type'] == 'image/png')
        imagepng($thumb, $pathToSmall);
    elseif ($_FILES['photo']['type'] == 'image/gif')
        imagegif($thumb, $pathToSmall);
    
    header("Location: index.php");
};
