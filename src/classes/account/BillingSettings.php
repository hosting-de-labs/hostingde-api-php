<?php

namespace Hostingde\API;

class BillingSettings extends GenericObject {
	public $creditLimit;
	public $dataProcessingAgreementSignedOn;
	public $paymentType;
	public $postpaidType;
	public $purchaseMarkup;
	public $renewalsReportSettings;
	public $type = "SubaccountBillingSettings";
}