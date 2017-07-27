<?php
class CSSModule {
	// CSS Modules by ID
	private $collection = array();

	// Create a new CSS Modules collection
	public function __construct($css_file) {
		$this->collection = json_decode(file_get_contents($css_file . ".json"), true);
	}

	public function class_name($key) {
		$class_name = $this->collection[$key];
		return $class_name;
	}
}
?>
