<?php

$db = mysqli_connect("localhost","root","","itemscb");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>