<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 2</title>
</head>

<body>
    <?php
   
    $imagesPath = __DIR__ . './image/image.png';//Засовываем изображение в переменную

    $old = imageCreateFrompng($imagesPath); //Созданем свое изображение на основе оригинала
    $info   = getimagesize($imagesPath);//получаем по нему информацию 
    $width  = $info[0]; //Ширина оригинала
    $height = $info[1]; //Длина оригинала
    $type   = $info[2]; //Тип картинки
    $w = $width * 0.08; ///Ширина из 2000 долно стать 200 а это 10% от изображения
                         //(У меея изображение 2560 так что я беру 0,08)
    $hs = $w / $width; //Коэффициент изменения
    $h = $height * $hs; //Высота с сохранинием пропорции 

    $new = imageCreateTrueColor($w, $h); //Созданм новое изображение 
    imageCopyResampled($new, $old, 0, 0, 0, 0, $w, $h, $width, $height);//копируем основное изображение и переделываем его под наши нужды
 
    imagepng($new, __DIR__ . './image/newfile.png');//Сораняем изображение в файл 
    imagedestroy($new);//избавляемся от нового изображения

  
    ?>

<img src="image/newfile.png" alt=""><!-- Показываем изображение в браузере -->

</body>

</html>