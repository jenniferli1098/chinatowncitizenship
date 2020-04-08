<?php

$server = "localhost";
$username = "phyljqqr_phylz";
$password = "phylliszhang";
$database = "phyljqqr_CCit";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
    die("Connection failed: ". mysqli_connect_error());
}