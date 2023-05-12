<?php



function getConection()
{

    $host = "localhost";
    $port = 3306;
    $database = "percobaan";
    $username = "root";
    $password = "";

    return  new PDO("mysql:port=$host:$port;dbname=$database", $username, $password);
   
}
