<meta charset="UTF-8"> <!-- Türkçe karakter desteği -->

<?php

$sicaklik=101;

if ($sicaklik<=0)
    echo "su katı haldedir";
else if ($sicaklik>0 && $sicaklik<100)
    echo "su sıvı haldedir";
else
    echo "su gaz haldedir";

?>