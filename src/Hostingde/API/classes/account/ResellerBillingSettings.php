<?php

namespace Hostingde\API\classes\account;

use Hostingde\API\classes\GenericObject;

class ResellerBillingSettings extends GenericObject {
	public $activePaymentMethods = array();
	public $availablePaymentMethods = array();
	public $defaultCreditLimitForSubaccounts;
	public $endUserCancellationPolicy;
	public $retailMarkup;
	public $showEndUserCancellationPolicyAboveAmount;
}
