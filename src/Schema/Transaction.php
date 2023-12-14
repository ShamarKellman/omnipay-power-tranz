<?php

namespace Omnipay\PowerTranz\Schema;

class Transaction extends AbstractSchema
{
    public ?string $AuthorizationCode = null;
    public ?string $AvsResponseCode = null;
    public ?string $CustomData = null;
    public ?string $CvvResponseCode = null;
    public ?string $ExternalBatchIdentifier = null;
    public ?string $ExternalGroupIdentifier = null;
    public ?string $ExternalIdentifier = null;
    public ?string $InternalResultCode = null;
    public ?string $IsoResponseCode = null;
    public ?float $OtherAmount = null;
    public ?float $TaxAmount = null;
    public ?float $TipAmount = null;
    public ?float $TotalAmount = null;
    public ?string $TransactionDateTime = null;
    public ?string $TransactionIdentifier = null;
    public ?int $TransactionType = null;
}
