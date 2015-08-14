<?php

require_once(__DIR__ . '/vendor/autoload.php');
spl_autoload_register([new Autoloader(), 'load']);

class Autoloader {
  public function load($name) {
    $path = __DIR__ . '/classes/' . mb_strtolower($name) . '.php';
    if (file_exists($path)) {
      require_once($path);
    }
  }
}

function U($path) {
  return $path;
}
