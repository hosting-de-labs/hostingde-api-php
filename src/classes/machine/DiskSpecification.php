<?php

namespace Hostingde\API;

class DiskSpecification extends GenericObject {
	public $size;
	public $readBps;
	public $readIops;
	public $writeBps;
	public $writeIops;
	public $type;
}