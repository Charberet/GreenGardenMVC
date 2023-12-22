<?php
session_start();
require_once 'routeur.php';

$route = new routeur();

$route->routerRequete();

?>