<?php
    if(isset($_POST['kullanici']) && isset($_POST['sifre'])) {
        $kullanici = $_POST['kullanici'];
        $sifre = $_POST['sifre'];
 
        if(empty($kullanici) || empty($sifre)) {
            echo 'Lütfen boş bırakmayın';
        } else {
            echo 'Girilen kullanıcı adı: ' . $kullanici . ' şifre: ' . $sifre;
        }
    } else {
        echo 'Lütfen formu kullanın';
    }
?>