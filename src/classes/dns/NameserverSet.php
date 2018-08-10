<?php

namespace Hostingde\API;

class NameserverSet extends GenericObject {
	public $id;
	public $accountId;
	public $name;
	public $defaultNameserverSet;
	public $nameservers = array();
}