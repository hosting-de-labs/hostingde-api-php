<?php

namespace Hostingde\API;

class SOAValues extends GenericObject {
	public $refresh = 86400;
	public $retry = 7200;
	public $expire = 3600000;
	public $ttl = 172800;
	public $negativeTtl = 3600;
}