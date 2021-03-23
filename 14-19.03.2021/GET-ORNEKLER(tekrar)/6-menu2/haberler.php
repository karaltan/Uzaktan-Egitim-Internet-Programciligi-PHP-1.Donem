<?php
 
if(isset($_GET["v"]) && !empty($_GET["v"])) {
 $v = intval(trim($_GET["v"]));
 
 echo "$v. Haber İçeriğini Okuyorsunuz.";
 
 
}else {
 echo "Bu sayfaya anasayfadan gelmelisiniz.";
 
}
 
 
 
?>