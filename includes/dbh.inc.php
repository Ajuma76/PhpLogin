<?php

$connection = mysqli_connect("localhost", "root", "", "phpproject01");

if (!isset($connection)){
    die("Connection Failed!!!");
}
