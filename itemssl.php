<?php

$db = mysqli_connect("localhost","root","","itemssl");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>