<?php

$db = mysqli_connect("localhost","root","","laurent");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>