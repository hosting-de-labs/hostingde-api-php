<?php

namespace Hostingde\API;
use Hostingde\API\Hostingde\API\DomainApi;

require_once("require.php");

$useContact = 'Handle, bspw. XX1234';
$useDomain = 'Domainname, bspw. example.com';

$api = new DomainApi('ApiKey');

if ($check = $api->domainStatus(array("example.de", "example.com", "123.hosting"))) {
	// print_r($check);
} else {
	print_r($api->getErrors());
	die();
}

$filter = new Filter();
$filter->addFilter('ContactHandle', $useContact);
$filter->addFilter('ContactType', 'Person');

// Filter mit OR statt AND verbinden
// $filter->set('subFilterConnective', 'OR');

$contacts = $api->contactsFind($filter);

if ($contact = $api->contactInfo($useContact)) {
	// laden erfolgreich
} else {
	// Errors anzeigen
	print_r($api->getErrors());
}

$contact->set('emailAddress', 'noreply@example.com');
if ($contact = $api->contactUpdate($contact)) {
	// Update erfolgreich
} else {
	// Errors anzeigen
	print_r($api->getErrors());
}

// bestimmte Domain finden
if ($domain = $api->domainInfo($useDomain)) {
	// laden erfolgreich
} else {
	// Errors anzeigen
	print_r($api->getErrors());
}

// Kontakt setzen oder austauschen
$domain->addContact('admin', $useContact);

if ($domain = $api->domainUpdate($domain)) {
	// Update erfolgreich
} else {
	// Errors anzeigen
	print_r($api->getErrors());
}
