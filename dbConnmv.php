<?php

$db = mysqli_connect("localhost","root","","bdmadeleinevionnet");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>