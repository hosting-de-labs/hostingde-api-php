<?php

namespace Hostingde\API;

class SpamFilter extends GenericObject {
	public $bannedFilesChecks;
	public $deleteSpam;
	public $headerChecks;
	public $malwareChecks;
	public $modifySubjectOnSpam;
	public $spamChecks;
	public $spamLevel;
	public $useGreylisting;
}
