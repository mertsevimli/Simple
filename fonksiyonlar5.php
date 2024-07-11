<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    function yaz($ad,$soyad="Soy isim girilmedi!"){
return $ad." ".$soyad;


    }
    echo yaz("Mert","Sevimli"); // burada soyad yazılmazsa hata veriyor. Yukarıya fuctionda ="Soy isim girilmedi" yazarsak  ==> Mert Soy isim girilmedi diyor.

    
    ?>
</body>
</html>