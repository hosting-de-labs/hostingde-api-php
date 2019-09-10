<?php

namespace Hostingde\API;

class IpAddress extends GenericObject {
	public $ip;
	public $gateway;
	public $netmask;
	public $primary;
	public $rdns;
	public $type;
}