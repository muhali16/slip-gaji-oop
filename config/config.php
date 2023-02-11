<?php

define('BASE_URL', "http://" . $_SERVER['SERVER_NAME'] . ':5000/slip_gaji');


$uri = ltrim($_SERVER['REQUEST_URI'], '/');
$uri = explode('/', $uri);
$uri = $uri[1];
define('URI_PARAM', $uri);