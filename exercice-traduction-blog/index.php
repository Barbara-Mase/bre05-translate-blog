<?php

session_start();

$lang = "en";
$_SESSION["lang"] = $lang;

require "config/autoload.php";

$router = new Router();
$router->handleRequest($_GET);