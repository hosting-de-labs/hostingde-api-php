<?php

namespace Hostingde\API\classes\dns;

use Hostingde\API\classes\GenericObject;

class SOAValues extends GenericObject {
	public $refresh = 86400;
	public $retry = 7200;
	public $expire = 3600000;
	public $ttl = 172800;
	public $negativeTtl = 3600;
}
