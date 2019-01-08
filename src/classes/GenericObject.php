<?php

namespace Hostingde\API;

class GenericObject {
	public function __construct($object = NULL) {
		$this->_load();
		if ($object) {
			foreach(get_object_vars($this) as $key => $default) {
				if (is_object($this->{$key})) {
					$className = get_class($this->{$key});
					$this->{$key} = new $className($object->{$key});
				} else {
					$this->set($key, $object->{$key});
				}
			}
		}
	}

	public function _load() { }

	public function get($key) {
		return $this->{$key};
	}
	
	public function set($key, $value) {
		$this->{$key} = $value;
	}
}
