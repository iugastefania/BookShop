<?php

include "itemsgc.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($db,"delete from booksgc where id = '$id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:recordsgabriellechanel.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>