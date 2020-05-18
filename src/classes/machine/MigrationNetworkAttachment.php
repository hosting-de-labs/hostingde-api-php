<?php

namespace Hostingde\API;

class MigrationNetworkAttachment extends GenericObject {
	public $networkId;
	public $addresses = array();
	public $macAddress;
}