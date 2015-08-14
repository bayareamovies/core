<?php

require_once(__DIR__ . '/bayareamovies-www.php');

class Home {
  public function main() {
    return (new Template('home'))->render();
  }
}

echo ((new Home())->main());
