<?php

namespace Hostingde\API\classes\account;

use Hostingde\API\classes\GenericObject;

class BillingSettings extends GenericObject {
	public $creditLimit;
	public $dataProcessingAgreementSignedOn;
	public $paymentType;
	public $postpaidType;
	public $purchaseMarkup;
	public $renewalsReportSettings;
	public $type = "SubaccountBillingSettings";
}
