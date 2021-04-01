<?php
include_once "database.php";

setcookie('nickName', 'Art', time() + (86400 * 30), "/");

varDump($_COOKIE);
