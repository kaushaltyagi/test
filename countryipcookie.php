<!DOCTYPE html>
<?php
setcookie("kaushal",getenv('REMOTE_ADDR'),time()+86400,"/");

?>
<html>
<head><title></title>
</head>
<body>
    <?php
  $ip= $_COOKIE['kaushal'];
  $deip=@json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip="."45.127.227.160"));
  echo 'country name:'.$deip->geoplugin_countryName;
  echo "<Br>";
  echo 'country currency:'.$deip->geoplugin_currencyCode;
    ?>
    </body>
    </html>
