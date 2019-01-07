<?php

namespace Hostingde\API;

class Mailinglist extends Mailbox {
	public $type = "MailingList";
	public $name;
	public $members;
	public $subjectPrefix;
	public $owners;
	public $digestSize;
	public $allowHtmlMails;
	public $accessMode;
	public $replyToEmailAddress;
	public $replyToMode;
}
