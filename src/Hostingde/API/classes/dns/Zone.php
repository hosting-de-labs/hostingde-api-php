<?php

namespace Hostingde\API\classes\dns;

use Hostingde\API\classes\GenericObject;

class Zone extends GenericObject {
	public $zoneConfig;
	public $records = array();

	public function _load() {
		$this->zoneConfig = new ZoneConfig();
	}
}
