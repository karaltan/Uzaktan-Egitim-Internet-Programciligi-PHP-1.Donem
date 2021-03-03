<head>
  <meta charset="UTF-8">
</head>

<?php
// örnek:
$x=15;
$y=4;
$kalan=fmod($x,$y);
echo "$x sayısının $y sayısına bölümünden kalan = $kalan <br>";
echo "$x%$y=",$x%$y,"<br><br>";
echo "54%8=",fmod(54,8),"<br>";
echo "54%8=",54%8,"<br><br>";
 
echo "32%4=",fmod(32,4),"<br>";
echo "17%10=",fmod(17,10),"<br>";
echo "49%5=",fmod(49,5),"<br><br>";
echo "$x sayısı ",(fmod($x,2)==0)?"çifttir":"tektir","<br>";
echo "$y sayısı ",(fmod($y,2)==0)?"çifttir":"tektir","<br>";




?>