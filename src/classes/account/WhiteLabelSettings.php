<?php

namespace Hostingde\API;

class WhiteLabelSettings extends GenericObject {
	public $confirmationUrl;
	public $domainRegistrationTermsUrl;
	public $fromEmailAddress = "";
	public $fromName = "";
	public $name;
	public $whiteLabelSettingsEnabled = false;
	public $type;
}