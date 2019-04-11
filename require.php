<?php

require_once __DIR__ . '/src/classes/GenericObject.php';
require_once __DIR__ . '/src/classes/Filter.php';
require_once __DIR__ . '/src/classes/Sort.php';
require_once __DIR__ . '/src/classes/TriggeredBy.php';
require_once __DIR__ . '/src/classes/Job.php';

require_once __DIR__ . '/src/classes/account/Account.php';
require_once __DIR__ . '/src/classes/account/BillingSettings.php';
require_once __DIR__ . '/src/classes/account/DnsSettings.php';
require_once __DIR__ . '/src/classes/account/DomainSettings.php';
require_once __DIR__ . '/src/classes/account/MessageSettings.php';
require_once __DIR__ . '/src/classes/account/ResellerBillingSettings.php';
require_once __DIR__ . '/src/classes/account/WhiteLabelSettings.php';
require_once __DIR__ . '/src/classes/account/AccountUser.php';

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
require_once __DIR__ . '/src/classes/webhosting/User.php';
require_once __DIR__ . '/src/classes/webhosting/Vhost.php';
require_once __DIR__ . '/src/classes/webhosting/WebspaceAccess.php';
require_once __DIR__ . '/src/classes/webhosting/Webspace.php';

require_once __DIR__ . '/src/classes/email/Mailbox.php';
require_once __DIR__ . '/src/classes/email/MailingList.php';
require_once __DIR__ . '/src/classes/email/ImapMailbox.php';
require_once __DIR__ . '/src/classes/email/ExchangeMailbox.php';
require_once __DIR__ . '/src/classes/email/Forwarder.php';
require_once __DIR__ . '/src/classes/email/CatchAll.php';
require_once __DIR__ . '/src/classes/email/Organization.php';
require_once __DIR__ . '/src/classes/email/AutoResponder.php';
require_once __DIR__ . '/src/classes/email/SpamFilter.php';

require_once __DIR__ . '/src/classes/database/Database.php';
require_once __DIR__ . '/src/classes/database/DatabaseAccess.php';
require_once __DIR__ . '/src/classes/database/DatabaseUser.php';

require_once __DIR__ . '/src/classes/billing/ArticlePurchasePrice.php';

require_once __DIR__ . '/src/GenericApi.php';
require_once __DIR__ . '/src/AccountApi.php';
require_once __DIR__ . '/src/DomainApi.php';
require_once __DIR__ . '/src/DnsApi.php';
require_once __DIR__ . '/src/EmailApi.php';
require_once __DIR__ . '/src/SslApi.php';
require_once __DIR__ . '/src/WebhostingApi.php';
require_once __DIR__ . '/src/DatabaseApi.php';
require_once __DIR__ . '/src/BillingApi.php';
require_once __DIR__ . '/src/ProductApi.php';