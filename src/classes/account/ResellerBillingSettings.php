<?php

namespace Hostingde\API;

class ResellerBillingSettings extends GenericObject {
	public $activePaymentMethods = array();
	public $availablePaymentMethods = array();
	public $defaultCreditLimitForSubaccounts;
	public $endUserCancellationPolicy;
	public $retailMarkup;
	public $showEndUserCancellationPolicyAboveAmount;
}