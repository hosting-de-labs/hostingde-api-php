<?php

namespace Hostingde\API;

class BillingSettings extends GenericObject {
	public $advSignedOn;
	public $creditLimit;
	public $dataProcessingAgreementSignedOn;
	public $paymentType;
	public $purchaseMarkup;
	public $renewalsReportEnabled;
	public $renewalsReportHorizonInDays;
	public $renewalsReportIntervalInDays;
	public $type = "SubaccountBillingSettings";
}