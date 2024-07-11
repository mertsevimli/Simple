<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // Fonksiyonlarda global değişken kullanımı ? 
    //*  Bir fonk içerisinde tanımladığımız değişkeni dışarıdan başka değişkenle müdale edilemez.
    $b = 10;
    function ekle($a)
    {
        global $b; // global fonksiyonlar bu arkadas global arkadas sen bunu kabul et diyourz. $b fonksiyonu dısarıdan bir fonksiyondur.
        return $a + $b;
    }
    echo ekle(20);

    //*Dışardan gelen değişkeni sevmezler




    ?>
</body>

</html>