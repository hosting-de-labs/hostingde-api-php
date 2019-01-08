<?php

namespace Hostingde\API;

class Zone extends GenericObject {
	public $zoneConfig;
	public $records = array();

	public function _load() {
		$this->zoneConfig = new ZoneConfig();
	}
}