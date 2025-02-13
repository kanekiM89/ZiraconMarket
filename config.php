<?php
// HTTP
define('HTTP_SERVER', 'http://localhost/Ziracon/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/Ziracon/');

// DIR
define('DIR_APPLICATION', 'C:/xampp/htdocs/ziracon/catalog/');
define('DIR_SYSTEM', 'C:/xampp/htdocs/ziracon/system/');
define('DIR_IMAGE', 'C:/xampp/htdocs/ziracon/image/');
define('DIR_STORAGE', 'C:/xampp/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'norukura');
define('DB_PASSWORD', '12345678');
define('DB_DATABASE', 'ziracon');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');