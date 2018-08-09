<?php

namespace Hostingde\API;

class CertificateOrder extends GenericObject {
	public $adminContact;
	public $techContact;
	public $csr;
	public $productCode = "ssl-geotrust-rapidssl-12m";
	public $approverEmailAddress;
	public $type = "DomainValidatedCertificateOrder";
	public $supplierName = "GeoTrust";
	public $validationType;
	public $validitySpanMonth = 12;
	public $autoRenew = false;
	public $synchronous = false;

	public function setContact($type, $contact) {
		if ($type == "admin") {
			$this->adminContact = $contact;
		} elseif ($type == "tech") {
			$this->techContact = $contact;
		}
	}
}
