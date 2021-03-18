<?php

namespace Hostingde\API;

class Disk extends GenericObject {
	public $id;
	public $size;
	public $readBps;
	public $readIops;
	public $writeBps;
	public $writeIops;
	public $type;
}