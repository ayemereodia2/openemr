<?php
//  OpenEMR
//  MySQL Config
//  Referenced from /library/sqlconf.php.

global $disable_utf8_flag;
$disable_utf8_flag = false;

$host   = 'k00nzj7gqn4v73x1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$port   = '3306';
$login  = 'esjs58unjy4kxr5l';
$pass   = 'zf25y60jfliag9mr';
$dbase  = 'primary_app_db';

$sqlconf = array();
global $sqlconf;
$sqlconf["host"]= $host;
$sqlconf["port"] = $port;
$sqlconf["login"] = $login;
$sqlconf["pass"] = $pass;
$sqlconf["dbase"] = $dbase;

//////////////////////////
//////////////////////////
//////////////////////////
//////DO NOT TOUCH THIS///
$config = 0; /////////////
//////////////////////////
//////////////////////////
//////////////////////////
