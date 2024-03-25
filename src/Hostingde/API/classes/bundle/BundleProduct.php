<?php

namespace Hostingde\API\classes\bundle;

use Hostingde\API\classes\GenericObject;

class BundleProduct extends GenericObject {
	public $accountId;
	public $id;
	public $contingents = array();
	public $productCode;
	public $addDate;
	public $lastChangeDate;
}
