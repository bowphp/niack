<?php

// Change of the server's no
header("Server: Bow Server (" . PHP_OS . ")");

$uri = urldecode(
	parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH)
);

if ($uri !== "/" && file_exists(__DIR__."/public".$uri)) {
	return false;
}

require_once __DIR__."/public/index.php";
