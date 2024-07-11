<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
   /* function yaz($a){

        return $a;
    }*/

    if (function_exists("yaz")) { //! function_exists  fonksiyonu var yok işlemi yapar... 
        echo"fonksiyon var";
    }else {
        echo "fonksiyon yok";
    }
    ?>
</body>
</html>