<?php
$user_name = 'localhost';
$pass = 'root';
$connection =mysqli_connect( $user_name , $pass , '') ;

if (!$connection)
    echo "connection failed";

if(!mysqli_select_db($connection,'sectiongmt'))
    echo "database not created";
   
$name=$_POST['fnum'];
$pas=$_POST['snum'];
   
$insert_query = "INSERT INTO registration (name,password) VALUES('$name','$pas')";
if (mysqli_query($connection,$insert_query))
    echo "data inserted";
else
    echo "error in data insertion";

   
    // if(mysqli_connect( $user_name , $pass , '' ))
//     {
//         echo "connection created";
//     }
// else
//     echo "connection failed";


// // $connection =(mysqli_connect( $user_name , $pass , '' )
//  //mysqli_select_db($connection,'sectiongmt'); 
//  if(mysqli_select_db(mysqli_connect( $user_name , $pass , '' ),'sectiongmt'  ))
//     echo "database created";
// else 
//     echo "database not created";

?>