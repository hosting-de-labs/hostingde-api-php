<?php

namespace Hostingde\API;

class RoutingNetwork extends GenericObject {
	public $id;
	public $refIdRipeAllocation;
	public $dataCenter;
	public $nameservers;
	public $ipVersion;
	public $minIpAddress;
	public $maxIpAddress;
	public $comments;
	public $addDate;
	public $lastChangeDate;
}