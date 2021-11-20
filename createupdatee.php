<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $name = $_POST['name'];
    $course = $_POST['course'];
    $section = $_POST['section'];
    $unirollno = $_POST['unirollno'];
   

    function connect()
    {
        $db = "details";
        $username = "root";
        $password = "";
        $host = "localhost";

        $connection = mysqli_connect($host,$username,$password,$db);
        return $connection;

    }
    function create()
    {
        
        global $name , $course, $section,$unirollno;
        $con = connect();
        $query = "insert into information(name,course,section,unirollno) values('$name','$course','$section','$unirollno')";
        mysqli_query($con, $query);
    }

    function update()
    {
        global $name , $course, $section,$unirollno;
        $con = connect();
        $query = "UPDATE information SET name='$name',course='$course',section='$section',unirollno='$unirollno' WHERE name='$name'";
        mysqli_query($con, $query);
    }
    function delete()
    {
        global $name , $course, $section,$unirollno;
        $con = connect();
        $query = "DELETE FROM information WHERE information.name = '$name'";
        mysqli_query($con, $query);
    }


    if (isset($_POST['create'])) 
    {
        create();
    } 

    else if (isset($_POST['update'])) 
    {   
        update();
    }
    else if (isset($_POST['delete'])) 
    {   
        delete();
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <table>
        <form method="POST">
            <tr>
                <td>NAME :</td>
                <td colspan="2"><input type="text" name="name" ></td> 
            </tr>
            <tr>
                <td>COURSE :</td>
                <td colspan="2"><input type="text" name="course" ></td>
            </tr>
            <tr > 
                <td>SECTION : </td>
                <td colspan="2"><input type="text" name="section" ></td>   
            </tr>
            <tr > 
                <td>UNIROLLNO : </td>
                <td colspan="2"><input type="text" name="unirollno" ></td>   
            </tr>
            <tr>
                <td><input type="submit" name="create" value= "create"></td>
                <td><input type="submit" name="update" value= "update"></td>
                <td><input type="submit" name="delete" value= "delete"></td>
                
            </tr>
        </form>
    </table>
</body>
</html>