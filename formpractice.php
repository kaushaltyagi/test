<?php
$textname=$_POST['textname'];
$textname2=$_POST['textname2'];
echo $textname;


$dt=(mysqli_connect("localhost","root","","databasekaushal"));//servername,username,password,databasename.

$que="INSERT into name(FIRSTNAME,LASTNAME) values('$textname','$textname2')";
if(mysqli_query($dt,$que)){
    echo "connection created";

}else{
    echo "connection error";

}

?>
