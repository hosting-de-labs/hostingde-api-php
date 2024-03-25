<?php

namespace Hostingde\API\classes\machine;

use Hostingde\API\classes\GenericObject;

class NetworkInterface extends GenericObject {
	public $id;
	public $ipAddresses = array();
	public $ipv4PrimaryAddress;
	public $ipv6PrimaryAddress;
	public $ipv6RoutedNetwork;
	public $ipv6TransferNetwork;
	public $mac;
	public $networkId;
	public $networkType;
	public $networkBandwidth;
}
