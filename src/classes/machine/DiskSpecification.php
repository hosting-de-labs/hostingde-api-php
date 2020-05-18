<?php

namespace Hostingde\API;

class DiskSpecification extends GenericObject {
	public $readBps;
	public $readIops;
	public $writeBps;
	public $writeIops;
	public $type;
}