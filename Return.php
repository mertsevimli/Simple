<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    //*Return ile değer döndürme ve Fonksiyon ile Toplama işlemi


    //! Returnün amacı  echo yu pasif ediyor. Bu fonks yazdığımızda ekrana vermesin istediğimiz zaman ekrana yazdırabiliyoruz.
    
    function topla ($sayi1,$sayi2) { 

        return $sayi1+$sayi2; 
        }
        topla(5,5); // Başına echo yazarsam ekrana yazdırır.
    
    ?>
</body>
</html>