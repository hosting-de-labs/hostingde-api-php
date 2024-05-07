<?php

namespace Hostingde\API\classes\domain;

use Hostingde\API\classes\GenericObject;

class DomainStatus extends GenericObject {
	public $domainName;
	public $domainNameUnicode;
	public $domainSuffix;
	public $earlyAccessStart;
	public $extension;
	public $generalAvailabilityStart;
	public $landrushStart;
	public $launchPhase;
	public $premiumPrices;
	public $registrarTag;
	public $status;
	public $sunriseStart;
	public $transferMethod;
}
