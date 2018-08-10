<?php

namespace Hostingde\API;

class Record extends GenericObject {
	public $id;
	public $zoneId;
	public $recordTemplateId;
	public $name;
	public $type;
	public $content;
	public $ttl;
	public $priority;
	public $lastChangeDate;
}