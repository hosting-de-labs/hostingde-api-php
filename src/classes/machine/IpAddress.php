<?php

namespace Hostingde\API;

class NetworkInterface extends GenericObject {
	public $ip;
	public $gateway;
	public $netmask;
	public $primary;
	public $rdns;
	public $type;
}