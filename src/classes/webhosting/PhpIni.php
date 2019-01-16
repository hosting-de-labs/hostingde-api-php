<?php

namespace Hostingde\API;

class PhpIni extends GenericObject {
	public $values = array();
	public $vhostId;

	public function set($key, $var) {
		foreach($this->values as $id => $setting) {
			if (isset($setting[$key])) {
				unset($this->values[$id]);
			}
		}
		$this->values = array_merge($this->values, array(array($key => $var)));
	}
}