<?php

namespace Hostingde\API\classes\machine;

use Hostingde\API\classes\GenericObject;

class Disk extends GenericObject {
	public $id;
	public $size;
	public $readBps;
	public $readIops;
	public $writeBps;
	public $writeIops;
	public $type;
}
