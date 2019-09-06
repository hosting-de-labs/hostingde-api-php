<?php

namespace Hostingde\API;

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
}