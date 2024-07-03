<?php
print " Hello from php";
echo " istanbul";

?>
<hr>
<?php

echo  "British Side" . "<br>" . "Mert Sevimli"; // *nokta ile birleştirebiliyoruz.
?>

<?php

//* Değişkenler $ işareti ile gösterilir. Ad diye değişken tanımladık. Echo ise ekrana yazdırmak için kullanılır.
// //$ad="mert";
// $soyad="Sevimli";
// $egitimplatformu='udemy';
// $no=100;
//$AdSoyad="Mert Sevimli 404 Bir düzeneğin ";

//echo $AdSoyad; 

// $ad1="Mert";
$ad = "mert sevimli";
echo "<br>";
$unvan = "Udemy eğitimi";
echo "<br>";
echo $ad . $unvan;
echo "<br>";
$ad = "Udemy";
echo "<br>";
echo $ad . $unvan . "<br>";
//echo"<br>";
//echo"<br />";
echo "Udemy Kursları";


//*string metinsel ifadelerdir. int değeri sayılsal değerdir.
//* Değişkenler $ işareti kullanılır.
//* Değişkene değer ataması yapılırken = işareti kullanılır.
//* Değişkene metinsel ifadeler aktarılırken direkt olarak " " veya ' ' kullanılabilir.
// * Değişkene integer sayısal değer aktarılırken direkt olarak yazabiliriz.
//* Değişkenlerde ufak büyük harf ayrımı vardır.
//* Değişkenlerde rakam ile başlmaıyoruz. Ama rakam ile bitirebiliyoruz. Özel karakterlerle bitirebiliriz.
//* Değişkenlerde boşluk bırakmıyoruz. Ama alt çizgi kullanabiliyoruz.
//* Değişkenlerde türkçe karakter kullanmıyoruz. --> --!>
// * Ya echonun yanında nokta kullanarak çağırdığın listesinin orda boşluk bırakacaksın  yada echo  "<br>" ;ifadesi ile boşluk bırakacaksın ya alt satıra inip yazıcaksın

?>

<?php

// ad, soyad , no değişkenlerini tanımlayalım. İçeriğine bilgileri girelim. Ad ve Soyad ayrı alınıp birleştirelerek yazılsın. Altına No değeri yazılsın ve arada çizgiler kullanalım




$ad = "Mert";
$soyad = "Sevimli";
$no = 1500;


echo "<h1>Bilgilerim</h1>";
echo "<hr>";


echo " Adınız ve Soyadınız ... :" . $ad . " " . $soyad;
echo "<br>";
echo "numaranız ........." . $no;

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";
echo "<br>";


?>

<?php

//* Matematiksel işlemler + Toplama işlemini sağlar
//* - çıkarma işareti
//* / bölme işlemi yapacak
//* Çarpma işlemi



$numara1 = 50;
$numara2 = 23;
// echo $numara1+$numara2;
echo "Toplma İşlemi";
$topla = $numara1 + $numara2;
echo "<br>";
echo "$numara1 + $numara2 = $topla"; // işlemsel böyle görünmekte

echo "<br>";
echo "<hr>";

echo "Çıkarma İşlemi";
echo "<br>";
$cikar = $numara1-$numara2;
echo "$numara1 -$numara2 = $cikar";
echo "<br>";
echo "<hr>";

echo "Bölme İşlemi";
echo "<br>";
$bolme = $numara1/$numara2;
echo "$numara1 / $numara2 = $bolme";
echo "<br>";
echo "<hr>";


echo "Çarpma İşlemi";
echo "<br>";
$carpma = $numara1*$numara2;
echo "$numara1 * $numara2 = $carpma";
echo "<br>";
echo "<hr>";
echo "<br>";
// if ($topla>50 ) {
//     echo"elliden büyük";
// }

echo "<br>";echo "<br>";echo "<br>";echo "<br>";
echo "<hr>";

echo " Atama işlemleri" ; 
echo "<hr>";
$atama=400;
echo " Atama değişkeninin değeri : " . $atama;
echo "<hr>";

$atama+=500;
echo " Atama değişkeninin değeri : " . $atama;
echo "<hr>";
$atama-=500;
echo " Atama değişkeninin değeri : " . $atama;
echo "<hr>";
$atama/=500;
echo " Atama değişkeninin değeri : " . $atama;
echo "<hr>";
$atama*=500;
echo " Atama değişkeninin değeri : " . $atama;
echo "<hr>";

//* Arttırma ve eksiltme operatörleri ++ +1 arttırır
$atama++;
echo " Artırma  değişkeninin değeri : " . $atama;
echo "<hr>";

//* -- ise -1 olarak olur.
$atama--;
echo " Artırma  değişkeninin değeri : " . $atama;
echo "<hr>";
echo "<br>";
// * Hazır fonksiyonlara bakış
// * Rand belirlenen aralıkta sayı üretir. her sayfayı yenilediğinde farklı farklı sayı ile karşılasacaksın 0 ile 10 arası sayı üreticek

echo $sayi=rand(0,10); echo "<br>";

if ($sayi>5)
{
    echo " kazandın";
}else {
echo "Kaybettin Dostum";
}


// ! Çift tırnak ve Tek tırnak arasındaki farklar
echo "<br>";
$ad = "Mert";
$soyad= "Sevimli";
echo " Benim Adım $ad"; // * Tek Tırnak içerisinde 
echo "<br>";
echo 'Benim Adım $ad'; // * Tek tırnak içerisinde değişken içeriklerini okumaz 

//* Yok Sayma İşaretleri TERS SLASH OPT +  ?
echo "<br>";echo "<br>";
echo " Ben  $ad \"Udemy\" Kursuna Kayıt Oldum";

echo "<br>";


//** Hazır string fonksiyonlar */



 
// ** strtolower = > büyük metni ufak metine çevirir.
echo $yazi=" BEN UDEMY KURSUNA GİDİYOM";
echo "<br>";
echo strtolower($yazi);

echo "<br>";
echo $yazi=ucwords ($yazi);


//** strtoupper => Metni ufak metinden büyüğe çevirir.

echo "<br>";
echo strtoupper($yazi);
echo "<br>";
echo strtolower($yazi); // bu test için ufak metne çevirrdik.

//** ucwords => Metnin ilk harflerini büyük yazar





?>