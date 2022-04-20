<?php

$db = mysqli_connect("localhost","root","","itemsjl");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>