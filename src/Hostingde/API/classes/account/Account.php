<?php

namespace Hostingde\API\classes\account;

use Hostingde\API\classes\GenericObject;

class Account extends GenericObject {
	public $id;
	public $parentAccountId;
	public $type = "Subaccount";
	public $rightsTemplateId;
	public $isCommercialCustomer;
	public $customerNumber;
	public $name;
	public $addition;
	public $street;
	public $zipCode;
	public $city;
	public $phoneNumber;
	public $faxNumber;
	public $emailAddress;
	public $emailAddressInvoice;
	public $emailAddressNewsletter;
	public $emailAddressTechnicalContact;
	public $country;
	public $language;
	public $addDate;
	public $lastChangeDate;
	public $billingSettings;
	public $comments;
	public $enabled;
	public $dnsSettings;
	public $domainSettings;
	public $messageSettings;
	public $resellerBillingSettings;
	public $resellerDefaults;
	public $resellerWhiteLabelSettings;
	public $rights = array();
	public $salesTaxID;

	public function _load() {
		$this->billingSettings = new BillingSettings();
		$this->dnsSettings = new DnsSettings();
		$this->domainSettings = new DomainSettings();
		$this->messageSettings = new MessageSettings();
	}
}
