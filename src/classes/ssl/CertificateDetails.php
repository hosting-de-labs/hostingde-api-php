<?php

namespace Hostingde\API;

class CertificateDetails extends GenericObject {
	public $id;
	public $addDate;
	public $adminContact;
	public $techContact;
	public $approverEmailAddress;
	public $csr;
	public $lastChangeDate;
	public $type;
	public $validationKey;
	public $validationType;
	public $validationValue;
}