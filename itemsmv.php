<?php

$db = mysqli_connect("localhost","root","","itemsmv");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>