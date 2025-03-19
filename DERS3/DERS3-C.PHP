<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>global değişkenler</title>
</head>
<body>
    <h3>global değişkenler</h3>
    <h4>$_REQUEST</h4>

<form action="" method="POST">
    <H5>veri post veya get ile gönderilebilir. her iki yöntemlede veri $_request ile alınabilir.</H5>

<label for="kullanici">kullanıcı adı:</label> 
<input type="text" name="username" id="kullanici">
<br>
<label for="">şifrenizi giriniz:</label>
<input type="password" name="password" id="sifre">
<br>
 <input type="submit" value=" giriş yap">    
<!-- üsteki buton ekleme 
 formda kullanılan metod get ise parametrik bir şekilde gönderilir parametrik bi şeiklde göndermek için ne nereye bilmek lazım tüm inputlarda
 bir name olur
 genellikle bütün gönderim işleri post-->


</form> 

<?php
$kullanici_adi     =@$_REQUEST["username"];
$kullanici_sifresi =@$_POST["password"];
// POST VE GET GLOBAL DEĞİŞKENLER 
//İSTEDĞİMİZ ŞEKİLDE YUKARDAKİ GİB YAKALAYABİLİRİZ.

echo "formdan gelen kullanıcı adı: $kullanici_adi <br>";
echo "formdan gelen kullanıcı şifresi: $kullanici_sifresi <br>"; 

if ($kullanici_adi=="ali" & $kullanici_sifresi==123 )
{ echo "kullanıcı adı ve şifre doğru";
}

?>



</body>
</html>