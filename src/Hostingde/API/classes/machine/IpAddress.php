<?php

namespace Hostingde\API\classes\machine;

use Hostingde\API\classes\GenericObject;

class IpAddress extends GenericObject {
	public $ip;
	public $gateway;
	public $netmask;
	public $primary;
	public $rdns;
	public $type;
}
