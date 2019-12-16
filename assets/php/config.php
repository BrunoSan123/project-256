<?php


//nome da base
define('DB_NAME', 'dbase');

//usuario
define('DB_USER', 'user');

//senha
define('DB_PASSWORD','pswd');

//hostname
define('DB_HOST','localhost');


//caminho absoluto
if(!defined('ABSPATH'))
	define('ABSPATH', dirname(__FILE__).'/');

//caminho no server para o sistema
if(!defined('BASEURL'))
	define('BASEURL', '/project-256/');


//caminho  para arquivo de  banco de dados
if(!defined('DBAPI'))
	define('DBAPI', ABSPATH.'assets/php/connect.php');




?>