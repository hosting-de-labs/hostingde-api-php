<?php

namespace Hostingde\API;

class PhpIni extends GenericObject {
	public $values = array();
	public $vhostId;

	public function set($key, $value) {
		foreach($this->values as $id => $setting) {
			if ($setting->key == $key) {
				unset($this->values[$id]);
			}
		}
		$phpIniValue = new PhpIniValue();
		$phpIniValue->key = (string) $key;
		$phpIniValue->value = (string) $value;
		$this->values = array_merge($this->values, array($phpIniValue));
	}
}