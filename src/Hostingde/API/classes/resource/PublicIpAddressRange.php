<?php

namespace Hostingde\API\classes\resource;

use Hostingde\API\classes\GenericObject;

class PublicIpAddressRange extends GenericObject {
	public $id;
	public $networkId;
	public $dataCenter;
	public $routingNetworkId;
	public $networkUsage;
	public $ipVersion;
	public $staticRoutingIpAddress;
	public $gatewayIpAddress;
}
