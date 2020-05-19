<?php

namespace Hostingde\API;

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