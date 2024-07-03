<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    //* For döngüsü ile dizi yazdırma

    $dizi = array("elma", "armut", "üzüm", "kavun", "karpuz", "Mert", "BritishSide", "Hüseyin", " Ahmet");

    echo "<pre>";
    print_r($dizi);
    echo "</pre>";
    echo "<hr>";

    $say = count($dizi);
    echo "Toplam Eleman Sayısı: " . $say . "<br><br>";

    for ($i = 0; $i < $say; $i++) { 
        echo $dizi[$i] . " ";
    }
?>

</body>
</html>
