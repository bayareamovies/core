<?php

class Template {
  public function __construct($template, $args = []) {
    $this->template = $template;
    $this->args = $args;
    $loader = new Mustache_Loader_FilesystemLoader(__DIR__ . '/../views');
    $this->engine = new Mustache_Engine(['loader' => $loader]);
  }

  public function render() {
    return $this->renderHeader()
      . $this->engine->render($this->template, $this->args)
      . $this->renderFooter();
  }

  private function renderHeader() {
    $args = [
      'cssUrl' => U('/css/main.css')
    ];

    return $this->engine->render('header', $args);
  }

  private function renderFooter() {
    $args = [
      'baseJsUrl' => U('/js')
    ];
    return $this->engine->render('footer', $args);
  }
}
