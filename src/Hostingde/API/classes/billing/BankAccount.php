<?php

namespace Hostingde\API\classes\billing;

use Hostingde\API\classes\GenericObject;

class BankAccount extends GenericObject {
	public $id;
    public $accountId;
    public $iban;
    public $bic;
    public $bankName;
    public $accountHolder;
    public $signedOn;
    public $status;
    public $addDate;
    public $lastChangeDate;
}
