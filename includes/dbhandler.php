<?php

$servename = "127.0.0.1";
$DBuname = "root";
$DBPass = "sqladmin123";
$DBname = "cs230";

$conn = mysqli_connect($servename, $DBuname, $DBPass, $DBname);

if (!$conn) {
    die("Connection failed...".mysqli_connect_error());
    # code...
}

