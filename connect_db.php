<?php

$host = "127.0.0.1";
$port = 3306;
$socket = "";
$user = "root";
$password = "";
$dbname = "fullstack";
//$con = new \mysqli($host, $user, $password, $dbname, $port, $socket);
$con = new PDO("mysql:host=$host;dbname=$dbname", $user, $password );

return [
    'con' => $con
];

