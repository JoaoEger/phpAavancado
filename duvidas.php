<?php
session_start();
$_SESSION['TESTE'] = $_POST;
echo "<pre>";
print_r($_SESSION);
echo "</pre>";