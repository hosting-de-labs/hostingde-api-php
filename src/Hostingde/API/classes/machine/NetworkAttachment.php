<?php

namespace Hostingde\API\classes\machine;

use Hostingde\API\classes\GenericObject;

class NetworkAttachment extends GenericObject {
	public $networkId;
	public $addresses = array();
}
