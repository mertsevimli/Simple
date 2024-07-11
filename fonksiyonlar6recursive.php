<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    //* Kendini çağıran recursive fonksiyonlar ? 
$sabit=1;
function faktoriyel($a){
global $sabit;
if ($a>1) {
    $sabit=$sabit*$a;
    $a--;
    faktoriyel($a);
}
return $sabit;
}
    echo faktoriyel(20);
    
    ?>
</body>
</html>