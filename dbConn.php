<?php

$db  = mysqli_connect("localhost","root","","chart");
if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
