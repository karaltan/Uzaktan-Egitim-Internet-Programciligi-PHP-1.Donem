<html>
<body>
<form action="" method="post">
<p>Adınız: <input type="text" name="ad"></p>
<p>Soyadınız: <input type="text" name="soyad"></p>
<p><input type="submit" name="dugme"></p>
</form>
<?php
 if(isset($_POST["dugme"])){
 $kullaniciAdi = $_POST['ad'];
$kullaniciSoyadi = $_POST['soyad'];
echo "Merhaba $kullaniciAdi $kullaniciSoyadi"; }
?>
</body>
</html>