<?php

namespace Omnipay\PowerTranz\Schema;

class VoidRequest extends AbstractSchema
{
    public string $TransactionIdentifier;
    public ?string $ExternalIdentifier = null;
    public ?string $ExternalGroupIdentifier = null;
    public ?string $EmvData = null;
    public string $TerminalCode;
    public ?string $TerminalSerialNumber = null;
    public bool $AutoReversal = false;
}
