<?php

namespace Omnipay\PowerTranz\Schema;

class Order extends AbstractSchema
{
    public ?int $CaptureCount = null;
    public ?int $CreditCount = null;
    public ?string $CurrencyCode = null;
    public ?string $LastCaptureDateTime = null;
    public ?string $LastCreditDateTime = null;
    public ?string $OrderIdentifier = null;
    public ?string $OriginalTrxnDateTime = null;
    public ?string $OriginalTrxnIdentifier = null;
    public ?float $SettledAmount = null;
    public ?float $TotalCaptureAmount = null;
    public ?float $TotalCreditAmount = null;
    public ?string $VoidDateTime = null;
}
