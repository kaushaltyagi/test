<!DOCTYPE html>
<?php
setcookie("kaushal",getenv('REMOTE_ADDR'),time()+86400,"/");

?>
<html>
<head><title></title>
</head>
<body>
    <?php
    echo $_COOKIE['kaushal'];
    ?>
    </body>
    </html>
