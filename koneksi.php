<?php

//  Koneksi ke database menggunakan PDO

function koneksi()
{
    $host      = "localhost";
    $port      = 3308;
    $database  = "todolist_a";
    $username  = "root";
    $password  = "";

    return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}

koneksi();
