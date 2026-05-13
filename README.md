# hosting.de PHP API Client

This is a PHP client library for the hosting.de API.

### Supported API Services

- Domain (full)
- DNS (full)
- SSL (DV only)
- E-Mail (full)
- Webhosting (tbd)
- Database (full)
- Machine (tbd)

Keep in mind: At the moment we have not implemented any job or task API functions. This software is released as a beta. Use it in production on your own risk.

### Using Composer

You can now use composer to get the library, just edit your composer.json:

```
        "repositories": [
                {
                        "url": "https://github.com/hosting-de-labs/hostingde-api-php.git",
                        "type": "git"
                }
        ],
        "minimum-stability": "dev",
        "prefer-stable": true,
        "require": {
                "hostingde/api-php": "*"
        }
```

## Getting Status of query and errors

Every API class has some methods for getting information about the request:

- $api->getStatus(): returns the request status, can be error, pending or success
- $api->getErrors(): returns all API errors
- $api->getWarnings(): returns all API warnings

## Filtering and Sorting

Filters and Sorting can be used for every function which offers listing. Their function name contains `find`.

Filter Example:

```
$filter = new Filter();
$filter->addFilter('ContactHandle', $useContact);
$filter->addFilter('ContactType', 'Person');
```

Sorting Example:

```
$sort = new Sort();
$sort->field = 'ContactHandle';
$sort->value = 'ASC';
```

Please refer to our API documentation which fields are available for filtering and sorting.

## Domain

Available fields for filtering and sorting:
- [https://www.hosting.de/api/#listing-contacts](https://www.hosting.de/api/#listing-contacts)
- [https://www.hosting.de/api/#listing-domains](https://www.hosting.de/api/#listing-domains)

```
namespace Hostingde\API;
require_once("require.php");

$api = new DomainApi('ApiKey');
```

### Check availability of domainnames

- [https://www.hosting.de/api/#checking-domain-name-availability](https://www.hosting.de/api/#checking-domain-name-availability)

```
$check = $api->domainStatus(array("example.de", "example.com"));
```
$check contains an array:

```
Array
(
    [0] => Hostingde\API\DomainStatus Object
        (
            [domainName] => example.de
            [domainNameUnicode] => example.de
            [domainSuffix] => de
            [earlyAccessStart] =>
            [extension] => de
            [generalAvailabilityStart] => 2000-01-01T00:00:00Z
            [landrushStart] =>
            [launchPhase] => generalAvailability
            [premiumPrices] =>
            [registrarTag] =>
            [status] => registered
            [sunriseStart] =>
            [transferMethod] => authInfo
        )

    [1] => Hostingde\API\DomainStatus Object
        (
            [domainName] => example.com
            [domainNameUnicode] => example.com
            [domainSuffix] => com
            [earlyAccessStart] =>
            [extension] => com
            [generalAvailabilityStart] => 2000-01-01T00:00:00Z
            [landrushStart] =>
            [launchPhase] => generalAvailability
            [premiumPrices] =>
            [registrarTag] =>
            [status] => registered
            [sunriseStart] =>
            [transferMethod] => authInfo
        )
)
```

### Contact Objects

- [https://www.hosting.de/api/#the-contact-object](https://www.hosting.de/api/#the-contact-object)

### Listing Contacts

- [https://www.hosting.de/api/#listing-contacts](https://www.hosting.de/api/#listing-contacts)

```
$contacts = $api->contactsFind($filter);
```
$contacts is false if an error occurs, otherwise it is an array with Contact Objects.

### Retreiving specific contact

- [https://www.hosting.de/api/#retrieving-specific-contacts](https://www.hosting.de/api/#retrieving-specific-contacts)

```
$contact = $api->contactInfo($contactId);
```
$contactId can be a handle or an id of a contact. $contact is false if an error occurs, otherwise it is a Contact Object.

### Creating a contact

- [https://www.hosting.de/api/#creating-new-contacts](https://www.hosting.de/api/#creating-new-contacts)

Just create a new Contact Object and call contactCreate function:

```
$contact = new Contact();
$contact->set('emailAddress', 'noreply@example.com');
[...]
$contact = $api->contactCreate($contact);
```
$contact is false if an error occurs, otherwise it is a Contact Object (it has now an ID and Handle).

### Updating a contact

- [https://www.hosting.de/api/#updating-contacts](https://www.hosting.de/api/#updating-contacts)

```
$contact->set('emailAddress', 'noreply@example.com');
$contact = $api->contactUpdate($contact);
```
$contact is false if an error occurs, otherwise it is a Contact Object.

### Domain Objects

- [https://www.hosting.de/api/#the-domain-object](https://www.hosting.de/api/#the-domain-object)

### Listing Domains

- [https://www.hosting.de/api/#listing-domains](https://www.hosting.de/api/#listing-domains)

```
$filter = new Filter();
$filter->addFilter('DomainName', 'example.com');

$domains = $api->domainsFind($filter);
```
$domains is false if an error occurs, otherwise it is an array with Domain Objects.

### Retreiving specific domain

- [https://www.hosting.de/api/#retrieving-specific-domains](https://www.hosting.de/api/#retrieving-specific-domains)

```
$domain = $api->domainInfo($domainName);
```
$domainName must be the name of a domain. You can use unicode or ascii. $domain is false if an error occurs, otherwise it is a Domain Object.

### Registering a new domainname

- [https://www.hosting.de/api/#registering-new-domains](https://www.hosting.de/api/#registering-new-domains)

Just create a new Domain Object and call domainCreate function:

```
$domain = new Domain();
$domain->set('name', 'example.com'):
$domain->addContact('owner', $contactId);
$domain->addContact('admin', $contactId);
$domain->addContact('tech', $contactId);
$domain->addContact('zone', $contactId);
$domain->addNameserver('ns1.hosting.de');
$domain->addNameserver('ns2.hosting.de');
$domain->addNameserver('ns3.hosting.de');
$domain = $api->domainCreate($domain);
```
$domain is false if an error occurs, otherwise it is a Domain Object (it has now an ID).

### Updating a domainname

- [https://www.hosting.de/api/#updating-domains](https://www.hosting.de/api/#updating-domains)

```
$domain->addContact('owner', $contactId);
$domain = $api->domainUpdate($domain);
```
One can use addContact() to replace a contact. $domain is false if an error occurs, otherwise it is a Domain Object.

### Transferring a new domainname

- [https://www.hosting.de/api/#starting-transfer-ins](https://www.hosting.de/api/#starting-transfer-ins)

Just create a new Domain Object, a new TransferData Object and call domainTransfer function:

```
$domain = new Domain();
$domain->set('name', 'example.com');
$domain->addContact('owner', $contactId);
$domain->addContact('admin', $contactId);
$domain->addContact('tech', $contactId);
$domain->addContact('zone', $contactId);
$domain->addNameserver('ns1.hosting.de');
$domain->addNameserver('ns2.hosting.de');
$domain->addNameserver('ns3.hosting.de');
$transferData = new TransferData();
$transferData->authInfo = '123';
$domain = $api->domainTransfer($domain, $transferData);
```
$domain is false if an error occurs, otherwise it is a Domain Object (it has now an ID).

### Updating a domainname

- [https://www.hosting.de/api/#updating-domains](https://www.hosting.de/api/#updating-domains)

```
$domain->addContact('owner', $contactId);
$domain = $api->domainUpdate($domain);
```
One can use addContact() to replace a contact. $domain is false if an error occurs, otherwise it is a Domain Object.

### Deleting or withdrawing a domainname

- [https://www.hosting.de/api/#deleting-domains](https://www.hosting.de/api/#deleting-domains)
- [https://www.hosting.de/api/#withdrawing-domains](https://www.hosting.de/api/#withdrawing-domains)

```
$return = $api->domainDelete($domainName, $execDate);
$return = $api->domainWithdraw($domainName, $disconnect, $execDate);
```

$execDate can be a date in the future if you want to set a scheduled deletion. $disconnect is true or false, it disconnects the domainname from DNS if true. $return is true or false.

## DNS

Available fields for filtering and sorting:
- [https://www.hosting.de/api/#list-zoneconfigs](https://www.hosting.de/api/#list-zoneconfigs)
- [https://www.hosting.de/api/#listing-records](https://www.hosting.de/api/#listing-records)
- [https://www.hosting.de/api/#listing-zones](https://www.hosting.de/api/#listing-zones)

```
namespace Hostingde\API;
require_once("require.php");

$api = new DnsApi('ApiKey');
```

### Zone Objects

- [https://www.hosting.de/api/#the-zone-object](https://www.hosting.de/api/#the-zone-object)

### Listing Zones

- [https://www.hosting.de/api/#listing-zones](https://www.hosting.de/api/#listing-zones)

A Zone contains a ZoneConfig Object and an Array of Record Objects.

```
$filter = new Filter();
$filter->addFilter('ZoneName', 'example.com');

$zones = $api->zonesFind($filter);
```
$zones is false if an error occurs, otherwise it is an array with Zone Objects.

### ZoneConfig Objects

- [https://www.hosting.de/api/#the-zoneconfig-object](https://www.hosting.de/api/#the-zoneconfig-object)

### Listing ZoneConfigs

- [https://www.hosting.de/api/#listing-zoneconfigs](https://www.hosting.de/api/#listing-zoneconfigs)

```
$filter = new Filter();
$filter->addFilter('ZoneName', 'example.com');

$zoneConfigs = $api->zoneConfigsFind($filter);
```
$zoneConfigs is false if an error occurs, otherwise it is an array with ZoneConfig Objects.

### Record Objects

- [https://www.hosting.de/api/#the-record-object](https://www.hosting.de/api/#the-record-object)

### Listing Records

- [https://www.hosting.de/api/#listing-records](https://www.hosting.de/api/#listing-records)

```
$filter = new Filter();
$filter->addFilter('RecordName', 'www.example.com');
$filter->addFilter('RecordType', 'A');

$records = $api->recordsFind($filter);
```
$records is false if an error occurs, otherwise it is an array with Record Objects.

### Creating Zones

- [https://www.hosting.de/api/#creating-new-zones](https://www.hosting.de/api/#creating-new-zones)

Note: We will soon provide better construction of objects, e.g. an addRecord() Method.

```
$zoneConfig = new ZoneConfig();
$zoneConfig->set('name', 'example.com');
$zoneConfig->set('type', 'NATIVE');

$record1 = new Record();
$record1->set('name', 'example.com');
$record1->set('type', 'A');
$record1->set('content', '127.0.0.1');

$record2 = new Record();
$record2->set('name', 'example.com');
$record2->set('type', 'MX');
$record2->set('content', 'example.com');

$zone = $api->zoneCreate($zoneConfig, array($record1, $record2));
```
$zone is false if an error occurs, otherwise it is a Zone Object (it has now an ID).

### Recreating Zones

- [https://www.hosting.de/api/#recreating-new-zones](https://www.hosting.de/api/#recreating-new-zones)

Use recreateZone if you want to submit a complete Record Set for the Zone. The zoneConfig has to be the complete zoneConfig Object, therefore we retrieve it with ZoneConfigsFind. You may change values within the ZoneConfig if you want. If so, the ZoneConfig will also be updated.

```
$filter = new Filter();
$filter->addFilter('ZoneName', 'example.com');

$zoneConfigs = $api->zoneConfigsFind($filter);
$zoneConfig = $zoneConfigs[0];

$record1 = new Record();
$record1->set('name', 'example.com');
$record1->set('type', 'A');
$record1->set('content', '127.0.0.1');

$record2 = new Record();
$record2->set('name', 'example.com');
$record2->set('type', 'MX');
$record2->set('content', 'example.com');

$zone = $api->zoneRecreate($zoneConfig, array($record1, $record2));
```
$zone is false if an error occurs, otherwise it is a Zone Object.

### Updating Zones

- [https://www.hosting.de/api/#updating-zones](https://www.hosting.de/api/#updating-zones)

Use updateZone if you want to add or remove one or more records. The zoneConfig has to be the complete zoneConfig Object, therefore we retrieve it with ZoneConfigsFind. You may change values within the ZoneConfig if you want. If so, the ZoneConfig will also be updated.

```
$filter = new Filter();
$filter->addFilter('ZoneName', 'example.com');

$zoneConfigs = $api->zoneConfigsFind($filter);
$zoneConfig = $zoneConfigs[0];

$recordOld = new Record();
$recordOld->set('name', 'example.com');
$recordOld->set('type', 'MX');
$recordOld->set('content', 'example.com');

$recordNew = new Record();
$recordNew->set('name', 'example.com');
$recordNew->set('type', 'MX');
$recordNew->set('content', 'mail.hosting.de');

$zone = $api->zoneUpdate($zoneConfig, array($recordNew), array($recordOld));
```
$zone is false if an error occurs, otherwise it is a Zone Object.

## Deleting Zones

- [https://www.hosting.de/api/#deleting-zones](https://www.hosting.de/api/#deleting-zones)

Deleting with a Zones Name:

```
$query = $api->zoneDelete(NULL, 'example.com');
```

Deleting with an ID:
```
$query = $api->zoneDelete('000000000000000');
```
$query is false if an error occurs, otherwise it is true.


### more DNS Stuff

.. is implemented in the library but unitl now I had no time do document it here, sorry.



###### Please see example.php for more functions.