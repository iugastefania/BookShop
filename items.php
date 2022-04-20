<?php

$db = mysqli_connect("localhost","root","","items");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>