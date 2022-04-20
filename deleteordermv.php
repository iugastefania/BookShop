<?php

include "itemsmv.php"; // Using database connection file here

$order_id = $_GET['order_id']; // get id through query string

$del = mysqli_query($db,"delete from ordersmv where order_id = '$order_id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:recordsmadeleinevionnet.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>