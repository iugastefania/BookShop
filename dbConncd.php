<?php

$db = mysqli_connect("localhost","root","","db_feedback");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>