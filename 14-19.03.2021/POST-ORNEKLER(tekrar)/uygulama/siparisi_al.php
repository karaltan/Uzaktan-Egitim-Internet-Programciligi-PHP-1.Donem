<html>
<html lang="tr">
<head> <title> Bilgisayar Parçaları Satışı</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9"></head>
<body>
<h1>Bilgisayar Parçaları Satışı</h1>
<h2>Sipariş Bilgileri</h2>
<?php
function birler_oku ($Gelen_Sayi){
switch ($Gelen_Sayi) {
case 0:
 $bir="";
 break;
case 1:
 $bir="BİR";
 break;
case 2:
 $bir="İKİ";
 break;
case 3:
 $bir="ÜÇ";
 break;
case 4:
 $bir="DÖRT";
 break;
case 5:
 $bir="BEŞ";
 break;
case 6:
 $bir="ALTI";
 break;
case 7:
 $bir="YEDİ";
 break;
case 8:
 $bir="SEKİZ";
 break;
case 9:
 $bir="DOKUZ";
 break;
}
return $bir;
}

function onlar_oku ($Gelen_Sayi)
{
switch ($Gelen_Sayi) {
case 0:
 $on="";
 break;
case 1:
 $on="ON";
 break;
case 2:
 $on="YİRMİ";
 break;
case 3:
 $on="OTUZ";
 break;
case 4:
 $on="KIRK";
 break;
case 5:
 $on="ELLİ";
 break;
case 6:
 $on="ALTMIŞ";
 break;
case 7:
 $on="YETMİŞ";
 break;
case 8:
 $on="SEKSEN";
 break;
case 9:
 $on="DOKSAN";
 break;}
return $on;}
function oku ($sayi){
$basamak_sayisi=strlen($sayi);
 switch ($basamak_sayisi) {
case 1:
 $sonuc=birler_oku((int)$sayi);
 break;
 case 2:
 $sonuc=onlar_oku((int)$sayi[0]).birler_oku((int)$sayi[1]);
 break;
 case 3:
 if ($sayi[0]=="1")
{
$sonuc="YÜZ".onlar_oku((int)$sayi[1]).birler_oku((int)$sayi[2]);
}
else
{
$sonuc=birler_oku((int)$sayi[0])."YÜZ".onlar_oku((int)$sayi[1]).birler_oku((int)$sayi[2]);
 }
 break;
case 4:
 if ($sayi[0]=="1")
{
if ($sayi[1]=="0" and $sayi[2]=="0")
{
$sonuc="BİN".birler_oku((int)$sayi[3]);
}
elseif ($sayi[1]=="0")
{
$sonuc="BİN".onlar_oku((int)$sayi[2]).birler_oku((int)$sayi[3]);
}
else
{
if ($sayi[1]=="1")
{
$sonuc="BİNYÜZ".onlar_oku((int)$sayi[2]).birler_oku((int)$sayi[3]);
}
else
{
$sonuc="BİN".birler_oku((int)$sayi[1])."YÜZ".onlar_oku((int)$sayi[2]).birler_oku(
(int)$sayi[3]);
}
}
}
else
{
if ($sayi[1]=="0" and $sayi[2]=="0")
{
$sonuc=birler_oku((int)$sayi[0])."BİN".birler_oku((int)$sayi[3]);
}
elseif ($sayi[1]=="0")
{
$sonuc=birler_oku((int)$sayi[0])."BİN".onlar_oku((int)$sayi[2]).birler_oku((int)$sayi[3]);
}
else
{ if ($sayi[1]=="1") {
$sonuc=birler_oku((int)$sayi[0])."BİNYÜZ".onlar_oku((int)$sayi[2]).birler_oku(
(int)$sayi[3]);
}
else {
$sonuc=birler_oku((int)$sayi[0])."BİN".birler_oku((int)$sayi[1])."YÜZ".onlar_oku(
(int)$sayi[2]).birler_oku((int)$sayi[3]);
}
}
}
 break;
 }
return $sonuc;
}
function TL_Oku ($para)
{
$noktayeri=strpos($para,".");
 if ($noktayeri<>0)
 {
 $tl=substr($para,0,$noktayeri);
 $kr=substr($para,$noktayeri+1,strlen($para)-$noktayeri);
 return oku($tl)." TL ".oku($kr)." Kr"; }
else
{
return oku($para)." TL";
}
}
echo "<p>Siparişiniz "; // Siparişle ilgili bütün detaylar bu php kodu
 // tarafından hesaplanmaktadır.
 echo date("j/m/y");
 echo " tarihinde, saat ";
 echo date("H:i");
 echo " itibarı ile işleme konmuştur.";
 echo "<p>Siparişinizle ilgili detaylar aşağıda verilmiştir:";
 echo "<p>";
 $kasa = (int)$_POST['kasa'];
 $anakart = (int)$_POST['anakart'];
 $islemci = (int)$_POST['islemci'];
 $sabitdisk = (int)$_POST['sabitdisk'];
 $cddvd = (int)$_POST['cddvd'];
 $bellek = (int)$_POST['bellek'];



define("kasa_ucreti", 85.50);
 define("anakart_ucreti", 150.0);
 define("islemci_ucreti", 275.30);
 define("sabitdisk_ucreti", 120.80);
 define("cddvd_ucreti", 90.0);
 define("bellek_ucreti", 134.20);
 define("kdv_orani", 15);

 $toplam_parca = 0;
 $toplam_tutar = 0.00;
 $toplam_parca = $kasa + $anakart + $islemci + $sabitdisk + $cddvd + $bellek;
 $toplam_birim_fiyat = kasa_ucreti + anakart_ucreti + islemci_ucreti
 + sabitdisk_ucreti + cddvd_ucreti + bellek_ucreti;
 $toplam_tutar = $kasa * kasa_ucreti
 + $anakart * anakart_ucreti
+ $islemci * islemci_ucreti
 + $sabitdisk * sabitdisk_ucreti
 + $cddvd * cddvd_ucreti
 + $bellek * bellek_ucreti;
 ?>
<table border=1>
 <tr bgcolor=#C399C3>
 <td width=150>Parça Adý</td>
 <td width=25>Adet</td>
 <td width=110 align=center>Birim Fiyat</td>
 <td width=110 align=center>Tutar</td>
 <td width=110 align=center>KDV (%<?php echo kdv_orani ?>)</td>
 <td width=110 align=center>KDV Dahil Tutar</td>
 </tr>
 <tr bgcolor=#D4FFD4>
 <td>Kasa</td>
 <td align=right><?php echo $kasa ?></td>
 <td align=right> <?php echo number_format(kasa_ucreti,2)." TL" ?></td>
 <td align=right> <?php echo number_format($kasa * kasa_ucreti,2)." TL"
?></td>
 <td align=right> <?php echo number_format($kasa * kasa_ucreti *
$kdv_orani,2)." TL" ?></td>
 <td align=right> <?php echo number_format($kasa * kasa_ucreti * (1 +
$kdv_orani),2)." TL" ?></td></tr>
 <tr bgcolor=#D4FFD4>
 <td>Anakart</td>
 <td align=right><?php echo $anakart ?></td>
 <td align=right>
<?php echo number_format(anakart_ucreti,2)." TL" ?></td>
 <td align=right> <?php echo number_format($anakart * anakart_ucreti,2)."
TL" ?></td>
 <td align=right> <?php echo number_format($anakart * anakart_ucreti *
kdv_orani,2)." TL" ?></td>
 <td align=right> <?php echo number_format($anakart * anakart_ucreti * (1 +
kdv_orani),2)." TL" ?></td></tr>
 <tr bgcolor=#D4FFD4>
 <td>Ýþlemci</td>
 <td align=right><?php echo $islemci ?></td>
 <td align=right> <?php echo number_format(islemci_ucreti,2)." TL" ?></td>
 <td align=right> <?php echo number_format($islemci * islemci_ucreti,2)."
TL" ?></td>
 <td align=right> <?php echo number_format($islemci * islemci_ucreti *
kdv_orani,2)." TL" ?></td>
 <td align=right> <?php echo number_format($islemci * islemci_ucreti * (1 +
kdv_orani),2)." TL" ?></td></tr>
 <tr bgcolor=#D4FFD4>
 <td>Sabit Disk</td>
 <td align=right><?php echo $sabitdisk ?></td>
<td align=right> <?php echo number_format(sabitdisk_ucreti,2)." TL" ?></td>
 <td align=right> <?php echo number_format($sabitdisk *
sabitdisk_ucreti,2)." TL" ?></td>
<td align=right> <?php echo number_format($sabitdisk * sabitdisk_ucreti *
kdv_orani,2)." TL" ?></td>
 <td align=right> <?php echo number_format($sabitdisk * sabitdisk_ucreti *
(1 + kdv_orani),2)." TL" ?></td>
 </tr>
 <tr bgcolor=#D4FFD4>
 <td>CD/DVD Sürücüsü</td>
 <td align=right><?php echo $cddvd ?></td>
 <td align=right> <?php echo number_format(cddvd_ucreti,2)." TL" ?></td>
 <td align=right> <?php echo number_format($cddvd * cddvd_ucreti,2)." TL"
?></td>
 <td align=right> <?php echo number_format($cddvd * cddvd_ucreti *
kdv_orani,2)." TL" ?></td>
 <td align=right> <?php echo number_format($cddvd * cddvd_ucreti * (1 +
kdv_orani),2)." TL" ?></td>
 </tr>
<tr bgcolor=#D4FFD4>
 <td>Bellek</td>
 <td align=right><?php echo $bellek ?></td>
 <td align=right> <?php echo number_format(bellek_ucreti,2)." TL" ?></td>
 <td align=right> <?php echo number_format($bellek * bellek_ucreti,2)." TL"
?></td>
<td align=right> <?php echo number_format($bellek * bellek_ucreti *
kdv_orani,2)." TL" ?></td>
 <td align=right> <?php echo number_format($bellek * bellek_ucreti * (1 +
kdv_orani),2)." TL" ?></td></tr>
 <tr bgcolor=#FFFFAA>
 <td>TOPLAM</td>
 <td align=right><?php echo $toplam_parca ?></td>
 <td align=right> <?php echo number_format($toplam_birim_fiyat,2)." TL"
?></td>
 <td align=right> <?php echo number_format($toplam_tutar,2)." TL" ?></td>
 <td align=right> <?php echo number_format($toplam_tutar * kdv_orani,2)."
TL" ?></td>
 <td align=right> <?php echo number_format($toplam_tutar * (1 +
kdv_orani),2)." TL" ?></td></tr></table>
<?php
 echo "<p>YAZI İLE : "; echo TL_Oku((string)(number_format($toplam_tutar * (1 +
kdv_orani),2)));
 echo "<p>TEŞEKKÜRLER..."; ?>
</body>
</html>