<form method="GET" action=""> 
	<input type="text" name="girdi"/>
	<input type="submit"/>
</form>
 
<?php
   if($_GET){  // eğer girdi adında bir GET varsa
          $degisken = $_GET["girdi"]; // GET değerini değişkene aktarıyoruz
          echo $degisken; // değişkene aktardığımız GET değerini ekrana yazdırıyoruz
	}
?>