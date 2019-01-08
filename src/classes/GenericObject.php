<?php

namespace Hostingde\API;

class GenericObject {
	public function __construct($object = NULL) {
		if ($object) {
			foreach(get_object_vars($this) as $key => $default) {
				$this->set($key, $object->{$key});
			}
		}
		$this->_load();
	}

	public function _load() { }

	public function get($key) {
		return $this->{$key};
	}
	
	public function set($key, $value) {
		$this->{$key} = $value;
	}
}
