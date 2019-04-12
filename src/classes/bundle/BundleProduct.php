<?php

namespace Hostingde\API;

class BundleProduct extends GenericObject {
	public $accountId;
	public $id;
	public $contingents = array();
	public $productCode;
	public $addDate;
	public $lastChangeDate;
}