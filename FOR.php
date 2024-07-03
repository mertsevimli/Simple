<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // for döngüsüü

// $i=0 ; => başlangıç
// $ i < ; koşul
// $i ++ => artış kısmı

// for döngüsü sonsuza gitmez limitli döngüdür.

// Bunlar neden i sadece değişken her hangi bir ismi verebiliriz.



    for ($i=0; $i < 10; $i++) { ?>
        <?php echo $i ?> <br>

  
<?php }?>

<br><br><br><br><br>

<?php




?>
 <!-- <select >

<?php  

for ($i=1; $i <=84; $i++) { ?>
   <option value="<?php echo $i  ?>"><?php echo $i  ?></option>  
<?php
}
?> 


</select>  -->

<br>

<?php 
// for döngüsü içerisinde if koşulu

/*for ($i=1; $i <=100 ; $i++) { 
   echo$i." ";

   if ($i==50){
    echo "<br>";
    echo $i." sayıya ulaştık";
    echo "<br>";
   }
}*/
// for döngüsü ile 100 e kadar sayı yazdırıp bunların tek yada çift sayı olduklarını bulalım tek ve  çift sayı adedinide görelim
echo "<br>";
echo "<hr>";

$tek=0;
$cift=0;

for ($i=1; $i <=100 ; $i++) { 
 echo " $i. Sayı : ". $i; 
if ($i%2==0) {
   echo " Bu Sayı çift";
   $tek++;
}else {
    echo " Bu Sayı Tektir.";
    $cift++;
}
echo "<br>";
echo "<hr>";
}
echo "<hr>";

echo " Çift Sayı $cift adet var "; echo "<br>";
echo " Tek Sayı $tek adet var."; echo "<br>";

?>


</body>
</html>