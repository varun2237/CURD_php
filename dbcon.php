<?php

$con = mysqli_connect("localhost", "root", "", "php_curd");

if (!$con) {
    die('Connection failed' . mysqli_connect_error());
}
