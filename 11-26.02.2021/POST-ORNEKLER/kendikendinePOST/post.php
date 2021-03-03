<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="isim"/>
      <input type="submit" value="Gönder"/>
    </form>
    <?php
        if($_POST)  {
        $isim=$_POST['isim'];
        echo $isim; }
     ?>
  </body>
</html>