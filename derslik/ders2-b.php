<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-2</title>
</head>
<body>
    <!--
ceil: herhangi bir ondalıklı sayıyı yukaru yuvarlamak için
floor: herhangi bir ondalıklı sayıyı aşağıya yuvarlamak için
round: herhangi bir ondalıklı sayıyı en yakına yuvarlama
-->

<h5>ceil</h5>
    <?php   
    $sayi1 =14.5;
    echo "sonuç:".ceil($sayi1);
 
    $sayi1 =14.5;
    echo "<br> \$sayi değişken değeri:".$sayi1;
    echo "<br>sonuç:".ceil($sayi1);

    ?>

<h5>floor</h5>
    <?php   
    $sayi1 =98.5;
    echo "sonuç:".floor($sayi1);
    ?>
   
   
   <h5>round</h5>
    <?php   
    $sayi1 =12.572245;
    echo "sonuç:".round($sayi1);

    $sayi1 =12.22245;
    echo "<br>sonuç:".round($sayi1);
    ?>



<h5>number format</h5>
    <?php   
    $sayi1 =9548.24568;
    echo "<br>sonuç:".number_format($sayi1);
    echo "<br>sonuç:".number_format($sayi1,2); //2 tane ondalıktan verdi
    echo "<br>sonuç:".number_format($sayi1,2,",",".");
    echo "<br>sonuç:".number_format($sayi1,0,",",".") ."TL";
   ?>
   
</body>
</html>