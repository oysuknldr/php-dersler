<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php ders-2</title>
</head>
<body>
    <h4>matematiksel ifadeler</h4>
    <h5>toplama işlemi</h5>

    <?php
    $sayi1=20; //sayı1 değişkeni tanımlandı
    $sayi2=17;
     $sonuc= $sayi1+$sayi2; 
    echo $sonuc;
    echo"<br> $sayi1 +$sayi2 = $sonuc";


    $deger =10;
    $ekdeger=59;
    echo "<br> sonuc: $deger + $ekdeger :" . $deger +=$ekdeger;
    echo "<br>değer değişkeni içeriği:" .$deger+=123;
    echo "<br> değer değişkeninin son içeriği: $deger";
    ?>
    
    <h5>çarpma işlemi </h5>

    <?php
    $sayi1=50; //sayı1 değişkeni tanımlandı
    $sayi2=77;
     $sonuc= $sayi1*$sayi2; 
    echo $sonuc;
    echo"<br> $sayi1 *$sayi2 = $sonuc";


    $deger =120;
    $ekdeger=72;
    echo "<br> sonuc: $deger * $ekdeger :" . $deger *=$ekdeger;
    echo "<br>değer değişkeni içeriği:" .$deger*=123;
    echo "<br> değer değişkeninin son içeriği: $deger" ;
    ?>
    <h5>bölme işlemi</h5>
     <?php
    $sayi1=50; //sayı1 değişkeni tanımlandı
    $sayi2=13;
     $sonuc= $sayi1/$sayi2; 
    echo $sonuc;
    echo"<br> $sayi1 /$sayi2 = $sonuc";


    $deger =120;
    $ekdeger=72;
    echo "<br> sonuc: $deger / $ekdeger= " . $deger /=$ekdeger;
    echo "<br>değer değişkeni içeriği:" .$deger/=123;
    echo "<br> değer değişkeninin son içeriği: $deger" ;


    //echo (20*12)+((30+25)/12);


    ?>
 <h5>mod işlemi</h5>
     <?php
    $sayi1=50; //sayı1 değişkeni tanımlandı
    $sayi2=13;
     $sonuc= $sayi1 % $sayi2; 
    echo $sonuc;
    echo "<br> $sayi1 % $sayi2 = $sonuc";

    ?>
     <h5>arttırma işlemi</h5>
     <?php
    $sayi1=50; //sayı1 değişkeni tanımlandı
   
    // $sonuc= $sayi1++;
    //echo $sonuc;  yazabiliriz
    echo "<br> arttırma işlemi yapıldı:".$sayi1++ ;// + konumu önemli solunda olursa önce artar sonra yazar sağda tam tersi

    echo "<br> işlemin sayi:".$sayi1++ ; 

    $sayi2=20; 
   
    echo "<br> arttırma işlemi yapıldı:".++$sayi2 ;// + konumu önemli solunda olursa önce artar sonra yazar sağda tam tersi

    echo "<br> işlemin sayi:".++$sayi2 ; 
  
    $sayi1=6;
    echo "<br>".$sayi1++."<br>";
    echo "<br>".$sayi1++."<br>";
    echo"<br>". $sayi1++."<br>";

    $sayi2=6;
    echo "<br>".++$sayi2."<br>";
    echo "<br>".++$sayi2."<br>";
    echo"<br>". ++$sayi2."<br>";
    
    $sayi1=6;
    echo "<br>".$sayi1--."<br>";
    echo "<br>".$sayi1--."<br>";
    echo"<br>". $sayi1--."<br>";

    ?>


</body>
</html>