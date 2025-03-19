<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>global değişkenler</title>
</head>
<body>
   
<h3>global değişkenler</h3>
    <h4>$_FILES</h4>
   <li>form içerisinden bir dosya gönderimi olacaksa 
    enctype="multipart/form-data"
    mutlaka belirtilmelidir.</li> 
   

    <li>dosya gönderiminde get metodu kullanılmaz</li>

<form action="DERS-3D2" method="POST" enctype="multipart/form-data">   

<label for="">cv yükleyiniz:</label>
<input type="file" name="cv"> <br> <BR>
 <input type="submit" value="ÖZGEÇMİŞ GÖNDER">    



</form> 

<?php

?>

</body>
</html>