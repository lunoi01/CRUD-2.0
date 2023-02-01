<?php
session_start();
$con = mysqli_connect("localhost","root","","youtube");

if(isset($_POST['stud_delete_btn']))
{
    $id = $_POST['delete_stud_id'];

    $query = "DELETE FROM student WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Deleted Successfully";
        header("Location: index.php");
    }
    else
    {
        $_SESSION['status'] = "Data Not Deleted";
        header("Location: index.php");
    }
}

?>