<?php
use pdo\Mysql;
require_once "AutoLoad.php";
$load = new AutoLoad();
const config = [
    "host" => "localhost",
    "dbname" => "entra21",
    "username" => "root",
    "password" => ""
];
session_start();