<?php

namespace Hostingde\API\classes\account;

use Hostingde\API\classes\GenericObject;

class DomainSettings extends GenericObject {
	public $defaultContactAdminId;
	public $defaultContactOwnerId;
	public $defaultContactTechId;
	public $defaultContactZoneId;
	public $monthlyPaymentEnabled;
	public $type = "SubaccountDomainSettings";
}
