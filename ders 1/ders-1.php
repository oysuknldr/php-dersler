<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DERSLERİ</title>
</head>
<body>
 <?php
     
     
     
     //phpinfo(); /* bu fonksiyon yüklü olan php versiyonu ve kurulu paketlerin bilgisini yazdırır */
     echo"aydın adnan menderes üni";
     //php içerisinde html etiketleri kullanılabilir

     echo"<br>aydın adnan menderes üni";
     echo"<br>aydın adnan menderes üni";

     $metin ="<br>aydın adnan menderes üni";
     echo $metin;

     // değişken içerisindeki metinsel ifadenin büyük küçük harflere dönüşümü
     echo $bharf = strtoupper($metin); //kelimelerin hepsi büyük harfle
     echo $kharf = strtolower($metin);

     echo $bharf2 = mb_strtoupper($metin);
     echo $kharf2 = mb_strtolower($bharf2);


 
    ?>
</body>
</html>