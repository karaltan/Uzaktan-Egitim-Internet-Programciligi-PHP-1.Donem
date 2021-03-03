<?php
 
$v = isset($_GET["v"]) ? intval(trim($_GET["v"])) : 1;
// eğer $_GET["v"] değişkenimiz yoksa biz anasayfadayızdır bu yüzden indisi 1 yaptık. 
 
// linklerimiz Tüm Sayfalarda Görünsün.
echo '
<a href="?v=1">Anasayfa</a> | 
 <a href="?v=2">Hakkımızda</a> | 
 <a href="?v=3">Haberler</a> | <hr>
 
';
 
 
if($v == 1) {
 // Burada Anasayfa Görünür.
 
 echo '
 Merhaba Anasayfadasın.';
 
}else if($v == 2) {
 // Burada Hakkımızda Görünür.
 echo "Merhaba Hakkımızda Sayfasındasın.";
}else if($v == 3) {
 // Burada Haberler Görünür.
 echo "Merhaba Haberler Sayfasındasın.";
}else {
 // Burasıda Farklı Bir İndis Gelirse Yapılan İşlemlerimiz.
 echo "Üzgünüm Bu Sayfa Henüz Oluşturulmadı. Bunun Bir Hata Olduğunu Düşünüyorsan Bize Bildir... ";
 
}
 
?>