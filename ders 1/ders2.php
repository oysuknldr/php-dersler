<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php dersleri</title>
</head>
<body>
    <h3>sık kullanılan hazır fonksiyonlar</h3>
    <?php
    $metin = "<b>aydın adnan menderes üni</b>";
     $byazi= strtoupper($metin); //yazıyı büyük harfe dönüştür
    $kyazi=strtolower($byazi);// yazıyı küçük harfe dönüştür
    $mb_byazi = mb_strtoupper($kyazi); //bunlarda aynı ama aradaki fark kullanılan kütüphaneler
    $mb_kyazi = mb_strtolower($mb_byazi);
    $ilkharf_buyuk_paragraf = ucfirst($mb_kyazi);// ilk harfi büyütür
     $ilkharf_buyuk_kelime = ucwords($mb_kyazi); // baş harfleri büyütür
     
     "Karakter sayısı:" .strlen($metin); // karakter sayısı yazdırma
     "<br> metnin belirli bir karakter sayısı:" .substr($metin,0,11); // neren nereye karakter yazdırılacak 
    ?>
    
    
   


    <h4> uygulama :</h4>
    <p> lorem metninin ilk 100 karakterini alın devamında bir buton ile adü web sitesine yönlendirin </p>
    <?php
    $lorem ="Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae neque accusantium 
    maxime ex? Quasi at sed eligendi velit sapiente doloremque
    , molestiae esse distinctio optio maiores deleniti expedita a ab laboriosam.";
    
    echo substr($lorem,0,100)."...";
//echo '  <a href="https://www.adu.edu.tr/" target="_blank"> Devamını oku </a>' // htmle geçmeden yapmak için

    ?>
    <a href="https://www.adu.edu.tr/" target="_blank"> Devamını oku </a>
 
</body>
</html>