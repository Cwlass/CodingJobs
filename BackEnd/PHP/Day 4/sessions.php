<?php
include_once "database.php";
session_start();

$_SESSION["cart"] = 'tshirt';
$_SESSION["elements"] = 1;

varDump($_SESSION);
