<?php

$mysql = new mysqli(
    "localhost",
    "root",
    "",
    "android"
);
if ($mysql->connect_error){
    die("failed to conexion" . $mysql->connect_error);

}