<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 


$dizi = array("elma", "armut", "üzüm", "kavun", "karpuz");

echo "<pre>";
print_r($dizi);
echo "</pre>";

echo "<hr>";

echo $dizi[0];
echo " ";
echo $dizi[1];
echo " ";
echo $dizi[2];
echo " ";
echo $dizi[3];
echo " ";
echo $dizi[4];
echo " ";

echo "<hr>";

for ($i=0; $i <=5; $i++) { 
   echo $dizi[$i]; echo " ";
}

echo"<hr>";

//* Foreach döngüsü
foreach ($dizi as $meyve) { // sadece diziler için üretilmiş bir döngü
    echo $meyve; echo " ";
}

?>
   
</body>
</html>