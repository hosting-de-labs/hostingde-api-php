<?php

require_once __DIR__ . '/src/Hostingde/API/classes/GenericObject.php';
require_once __DIR__ . '/src/Hostingde/API/classes/Filter.php';
require_once __DIR__ . '/src/Hostingde/API/classes/Sort.php';
require_once __DIR__ . '/src/Hostingde/API/classes/TriggeredBy.php';
require_once __DIR__ . '/src/Hostingde/API/classes/Job.php';

require_once __DIR__ . '/src/Hostingde/API/classes/account/Account.php';
require_once __DIR__ . '/src/Hostingde/API/classes/account/BillingSettings.php';
require_once __DIR__ . '/src/Hostingde/API/classes/account/DnsSettings.php';
require_once __DIR__ . '/src/Hostingde/API/classes/account/DomainSettings.php';
require_once __DIR__ . '/src/Hostingde/API/classes/account/MessageSettings.php';
require_once __DIR__ . '/src/Hostingde/API/classes/account/ResellerBillingSettings.php';
require_once __DIR__ . '/src/Hostingde/API/classes/account/WhiteLabelSettings.php';
require_once __DIR__ . '/src/Hostingde/API/classes/account/AccountUser.php';

require_once __DIR__ . '/src/Hostingde/API/classes/domain/Contact.php';
require_once __DIR__ . '/src/Hostingde/API/classes/domain/Domain.php';
require_once __DIR__ . '/src/Hostingde/API/classes/domain/DomainStatus.php';
require_once __DIR__ . '/src/Hostingde/API/classes/domain/TransferData.php';

require_once __DIR__ . '/src/Hostingde/API/classes/dns/Zone.php';
require_once __DIR__ . '/src/Hostingde/API/classes/dns/ZoneConfig.php';
require_once __DIR__ . '/src/Hostingde/API/classes/dns/Record.php';
require_once __DIR__ . '/src/Hostingde/API/classes/dns/SOAValues.php';
require_once __DIR__ . '/src/Hostingde/API/classes/dns/Template.php';
require_once __DIR__ . '/src/Hostingde/API/classes/dns/TemplateValues.php';
require_once __DIR__ . '/src/Hostingde/API/classes/dns/TemplateReplacements.php';
require_once __DIR__ . '/src/Hostingde/API/classes/dns/NameserverSet.php';

require_once __DIR__ . '/src/Hostingde/API/classes/ssl/Certificate.php';
require_once __DIR__ . '/src/Hostingde/API/classes/ssl/CertificateDetails.php';
require_once __DIR__ . '/src/Hostingde/API/classes/ssl/CertificateContact.php';
require_once __DIR__ . '/src/Hostingde/API/classes/ssl/CertificateOrder.php';

require_once __DIR__ . '/src/Hostingde/API/classes/webhosting/CronJob.php';
require_once __DIR__ . '/src/Hostingde/API/classes/webhosting/User.php';
require_once __DIR__ . '/src/Hostingde/API/classes/webhosting/Vhost.php';
require_once __DIR__ . '/src/Hostingde/API/classes/webhosting/WebspaceAccess.php';
require_once __DIR__ . '/src/Hostingde/API/classes/webhosting/Webspace.php';
require_once __DIR__ . '/src/Hostingde/API/classes/webhosting/Redirection.php';
require_once __DIR__ . '/src/Hostingde/API/classes/webhosting/PhpIni.php';
require_once __DIR__ . '/src/Hostingde/API/classes/webhosting/PhpIniValue.php';
require_once __DIR__ . '/src/Hostingde/API/classes/webhosting/SslSettings.php';

require_once __DIR__ . '/src/Hostingde/API/classes/email/Mailbox.php';
require_once __DIR__ . '/src/Hostingde/API/classes/email/MailingList.php';
require_once __DIR__ . '/src/Hostingde/API/classes/email/ImapMailbox.php';
require_once __DIR__ . '/src/Hostingde/API/classes/email/ExchangeMailbox.php';
require_once __DIR__ . '/src/Hostingde/API/classes/email/Forwarder.php';
require_once __DIR__ . '/src/Hostingde/API/classes/email/CatchAll.php';
require_once __DIR__ . '/src/Hostingde/API/classes/email/SmtpForwarder.php';
require_once __DIR__ . '/src/Hostingde/API/classes/email/Organization.php';
require_once __DIR__ . '/src/Hostingde/API/classes/email/AutoResponder.php';
require_once __DIR__ . '/src/Hostingde/API/classes/email/SpamFilter.php';

require_once __DIR__ . '/src/Hostingde/API/classes/database/Database.php';
require_once __DIR__ . '/src/Hostingde/API/classes/database/DatabaseAccess.php';
require_once __DIR__ . '/src/Hostingde/API/classes/database/DatabaseUser.php';

require_once __DIR__ . '/src/Hostingde/API/classes/machine/Disk.php';
require_once __DIR__ . '/src/Hostingde/API/classes/machine/IpAddress.php';
require_once __DIR__ . '/src/Hostingde/API/classes/machine/NetworkAttachment.php';
require_once __DIR__ . '/src/Hostingde/API/classes/machine/NetworkInterface.php';
require_once __DIR__ . '/src/Hostingde/API/classes/machine/VirtualMachine.php';
require_once __DIR__ . '/src/Hostingde/API/classes/machine/VirtualMachineSpecification.php';
require_once __DIR__ . '/src/Hostingde/API/classes/machine/MigrationNetworkAttachment.php';

require_once __DIR__ . '/src/Hostingde/API/classes/billing/ArticlePurchasePrice.php';

require_once __DIR__ . '/src/Hostingde/API/GenericApi.php';
require_once __DIR__ . '/src/Hostingde/API/AccountApi.php';
require_once __DIR__ . '/src/Hostingde/API/DomainApi.php';
require_once __DIR__ . '/src/Hostingde/API/DnsApi.php';
require_once __DIR__ . '/src/Hostingde/API/EmailApi.php';
require_once __DIR__ . '/src/Hostingde/API/SslApi.php';
require_once __DIR__ . '/src/Hostingde/API/WebhostingApi.php';
require_once __DIR__ . '/src/Hostingde/API/DatabaseApi.php';
require_once __DIR__ . '/src/Hostingde/API/BillingApi.php';
require_once __DIR__ . '/src/Hostingde/API/BundleApi.php';
require_once __DIR__ . '/src/Hostingde/API/ProductApi.php';
require_once __DIR__ . '/src/Hostingde/API/MachineApi.php';
