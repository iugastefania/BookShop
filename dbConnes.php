<?php

$db = mysqli_connect("localhost","root","","elsaschiaparelli");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>