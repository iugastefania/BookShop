<?php

$db = mysqli_connect("localhost","root","","itemsgc");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>