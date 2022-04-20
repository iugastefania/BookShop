<?php

$db = mysqli_connect("localhost","root","","itemspp");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>