# hosting.de PHP API Client

This is a PHP client library for the hosting.de API.

### Supported API Services

- Domain (full)
- DNS (full)
- SSL (DV only)
- E-Mail (tbd)
- Webhosting (tbd)
- Database (tbd)
- Machine (tbd)

Keep in mind: At the moment we have not implemented any job or task API functions.

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
$domain->set('name', 'example.com'):
$domain->addContact('owner', $contactId);
$domain->addContact('admin', $contactId);
$domain->addContact('tech', $contactId);
$domain->addContact('zone', $contactId);
$domain->addNameserver('ns1.hosting.de');
$domain->addNameserver('ns2.hosting.de');
$domain->addNameserver('ns3.hosting.de');
$transferData = new TransferData();
$transferData->authCode = '123';
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

###### Please see example.php for more functions.