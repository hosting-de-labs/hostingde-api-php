<?php

namespace Hostingde\API;

class PublicIpAddressRange extends GenericObject {
	public $id;
	public $dataCenter;
	public $routingNetworkId;
	public $networkUsage;
	public $ipVersion;
	public $staticRoutingIpAddress;
}