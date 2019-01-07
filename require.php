<?php

require_once __DIR__ . '/src/classes/GenericObject.php';
require_once __DIR__ . '/src/classes/Filter.php';
require_once __DIR__ . '/src/classes/Sort.php';

require_once __DIR__ . '/src/classes/domain/Contact.php';
require_once __DIR__ . '/src/classes/domain/Domain.php';
require_once __DIR__ . '/src/classes/domain/DomainStatus.php';
require_once __DIR__ . '/src/classes/domain/TransferData.php';

require_once __DIR__ . '/src/classes/dns/Zone.php';
require_once __DIR__ . '/src/classes/dns/ZoneConfig.php';
require_once __DIR__ . '/src/classes/dns/Record.php';
require_once __DIR__ . '/src/classes/dns/SOAValues.php';
require_once __DIR__ . '/src/classes/dns/Template.php';
require_once __DIR__ . '/src/classes/dns/TemplateValues.php';
require_once __DIR__ . '/src/classes/dns/TemplateReplacements.php';
require_once __DIR__ . '/src/classes/dns/NameserverSet.php';

require_once __DIR__ . '/src/classes/ssl/Certificate.php';
require_once __DIR__ . '/src/classes/ssl/CertificateDetails.php';
require_once __DIR__ . '/src/classes/ssl/CertificateContact.php';
require_once __DIR__ . '/src/classes/ssl/CertificateOrder.php';

require_once __DIR__ . '/src/classes/webhosting/CronJob.php';
require_once __DIR__ . '/src/classes/webhosting/Vhost.php';
require_once __DIR__ . '/src/classes/webhosting/WebspaceAccess.php';
require_once __DIR__ . '/src/classes/webhosting/Webspace.php';

require_once __DIR__ . '/src/classes/email/Mailbox.php';
require_once __DIR__ . '/src/classes/email/MailingList.php';
require_once __DIR__ . '/src/classes/email/ImapMailbox.php';
require_once __DIR__ . '/src/classes/email/ExchangeMailbox.php';
require_once __DIR__ . '/src/classes/email/Forwarder.php';
require_once __DIR__ . '/src/classes/email/CatchAll.php';

require_once __DIR__ . '/src/GenericApi.php';
require_once __DIR__ . '/src/DomainApi.php';
require_once __DIR__ . '/src/DnsApi.php';
require_once __DIR__ . '/src/EmailApi.php';
require_once __DIR__ . '/src/SslApi.php';
require_once __DIR__ . '/src/WebhostingApi.php';