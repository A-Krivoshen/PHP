<?php
    ini_set("display_errors", "1");
    error_reporting(E_ALL);
    session_start();
    header ("Content-type: image/png");
    $img = imagecreate(960, 350)
    or die ("Ошибка при создании изображения");
    $colorBg = imagecolorallocate($img, 154, 199, 212);
    $col = imagecolorallocate($img,60,80,100);
    $font = 'font/lobster.ttf';
    $reiting = '';
    if($_SESSION['rightQuestion'] == $_SESSION['allQuestion']){
        $reiting = 'A+';
    }elseif($_SESSION['rightQuestion'] > ($_SESSION['allQuestion'] / 2) && $_SESSION['rightQuestion'] < $_SESSION['allQuestion']){
        $reiting = 'C';
    }else{
        $reiting = 'F';
    }

    imagettftext ($img , 18 , 0 , 100 , 100 , $col , $font , $_SESSION['name'] . ' вы прошли тест');
    imagettftext ($img , 18 , 0 , 100 , 150 , $col , $font , 'Из ' . '"' . $_SESSION['allQuestion'] . '"' . ' вопросов');
    imagettftext ($img , 18 , 0 , 100 , 200 , $col , $font , 'ответили правильно на ' . '"' . $_SESSION['rightQuestion'] . '"' . ' вопросов');
    imagettftext ($img , 18 , 0 , 100 , 250 , $col , $font , 'ваша оценка: ' . '"' . $reiting . '"');
    imagepng($img);
    imagedestroy($img);
?>
