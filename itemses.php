<?php

$db = mysqli_connect("localhost","root","","itemses");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>