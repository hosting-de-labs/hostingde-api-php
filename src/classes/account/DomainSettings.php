<?php

namespace Hostingde\API;

class DomainSettings extends GenericObject {
	public $defaultContactAdminId;
	public $defaultContactOwnerId;
	public $defaultContactTechId;
	public $defaultContactZoneId;
	public $monthlyPaymentEnabled;
	public $type = "SubaccountDomainSettings";
}