<?php

namespace Hostingde\API;

class PhpIni extends GenericObject {
	public $values = array();
	public $vhostId;

	public function add($key, $value) {
		$this->values[$key] = $value;
	}
}