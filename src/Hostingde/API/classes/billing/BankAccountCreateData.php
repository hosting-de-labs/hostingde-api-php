<?php

namespace Hostingde\API\classes\billing;

use Hostingde\API\classes\GenericObject;

class BankAccountCreateData extends GenericObject {
	public $create;
    public $iban;
    public $bic;
    public $accountHolder;
    public $signatory;
    public $dateOfBirth;
}

