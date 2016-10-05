<?php
set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__ . DIRECTORY_SEPARATOR  . 'Utility');
spl_autoload_extensions('.php');
spl_autoload_register(function($class) {
    $parts = explode('\\', $class);
    require_once end($parts) . '.php';
});