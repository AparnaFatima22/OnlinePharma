<?php


ob_start(); //4) send request to php for redirection Ex: for header etc.

session_start(); 

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");  //2) DS used for forward-slash usage

defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");

//3) DATA-Base

defined("DB_HOST") ? null : define("DB_HOST", "localhost");
defined("DB_USER") ? null : define("DB_USER", "root");
defined("DB_PASS") ? null : define("DB_PASS", "");
defined("DB_NAME") ? null : define("DB_NAME", "ecom_db");

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME); //8) Connecting to Database
require_once("functions.php"); //7) adding it to index.php at line 1 