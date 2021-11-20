<!DOCTYPE html>
<?php
setcookie("kaushal",get_current_user(),time()+86400,"/");

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
