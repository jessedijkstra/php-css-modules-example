<?php
use League\Plates\Engine;
use League\Plates\Extension\ExtensionInterface;

require_once("./css_module.php");

class ComponentExtension implements ExtensionInterface {
  public function register(Engine $engine) {
    $engine->registerFunction('component', [$this, 'component']);
  }

  public function component($class, $arguments = []) {
    $component = new $class();

    return $component->render($arguments);
  }
}

class Component {
  public function __construct() {
    $this->templates = new League\Plates\Engine($this->template);
    $this->templates->loadExtension(new ComponentExtension());

    $this->stylesheet = new CSSModule($this->stylesheet);

    $this->templates->registerFunction("class_name", function($name) {
      return $this->stylesheet->class_name($name);
    });
  }

  public function render($arguments = []) {
    return $this->templates->render("template", $arguments);
  }
}
?>
