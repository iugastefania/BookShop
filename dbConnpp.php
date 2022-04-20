<?php

$db = mysqli_connect("localhost","root","","dpaulpoiret");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>