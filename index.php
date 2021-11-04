<?php

$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']), 'https') === FALSE ? 'http' : 'https';
define("DOMAIN_URL", $protocol . '://' . $_SERVER['HTTP_HOST']);

const PROJECT_DIR = __DIR__;
const TEMPLATE_DIR = PROJECT_DIR . '/resources/view';

require_once 'app/bootstrap.php';
require_once 'routes/web.php';
