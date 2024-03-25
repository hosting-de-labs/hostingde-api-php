<?php

namespace Hostingde\API\classes\ssl;

use Hostingde\API\classes\GenericObject;

class Certificate extends GenericObject {
	public $id;
	public $accountId;
	public $addDate;
	public $additionalDomainNames;
	public $autoRenew;
	public $brand;
	public $cancelableUntil;
	public $commonName;
	public $endDate;
	public $externalOrderId;
	public $intermediateCert;
	public $isManaged;
	public $lastChangeDate;
	public $orderStatus;
	public $product;
	public $productCode;
	public $renewDate;
	public $rootCert;
	public $serialNumber;
	public $serverCert;
	public $startDate;
	public $status;
	public $validitySpanMonth;
}
