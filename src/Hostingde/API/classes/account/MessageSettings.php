<?php

namespace Hostingde\API\classes\account;

use Hostingde\API\classes\GenericObject;

class MessageSettings extends GenericObject {
	public $defaultHtmlFrame;
	public $defaultPlainTextFrame;
	public $eventDeliveryMethods = array();
	public $eventDocumentFormat;
	public $eventHumanReadableEmailAddresses = array();
	public $eventMachineReadableEmailAddresses = array();
	public $eventWebhookUrl;
	public $messageTemplateBehavior;
	public $receiveSubaccountEvents;
	public $type = "SubaccountMessageSettings";
}
