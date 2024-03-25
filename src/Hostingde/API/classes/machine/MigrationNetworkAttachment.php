<?php

namespace Hostingde\API\classes\machine;

use Hostingde\API\classes\GenericObject;

class MigrationNetworkAttachment extends GenericObject {
	public $networkId;
	public $addresses = array();
	public $macAddress;
}
