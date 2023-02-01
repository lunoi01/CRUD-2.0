<?php
session_start();
$con = mysqli_connect("localhost","root","","youtube");

if(isset($_POST['save_checkbox']))
{
    $name = $_POST['name'];
    $agree = $_POST['agree'];

    $query = "INSERT INTO demoA (name,agree) VALUES ('$name','$agree')";
    $query_run = mysqli_query($con, $query);
    
    if($query_run)
    {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: index.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        header("Location: index.php");
    }
}
?>