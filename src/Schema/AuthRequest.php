<?php

namespace Omnipay\PowerTranz\Schema;

class AuthRequest extends AbstractSchema
{
    /**
     * Transaction identifier. String representation of a GUID.
     * Max length 36
     * @var string
     */
    public string $TransactionIdentifier;

    /**
     * Total amount to authorize
     * DEC(18,3)
     * @var string
     */
    public string $TotalAmount;

    /**
     * Tip amount
     * @var float|null
     */
    public ?float $TipAmount = null;

    /**
     * Tax amount
     * @var float|null
     */
    public ?float $TaxAmount = null;

    /**
     * CashBackAmount or other amount
     * @var float|null
     */
    public ?float $OtherAmount = null;

    /**
     * Currency code ISO 4217
     * @var string
     */
    public string $CurrencyCode;

    /**
     * Local time at transaction initiation hhmmss
     * @var string|null
     */
    public ?string $LocalTime = null;

    /**
     * Local date at transaction initiation YYYYMMDD
     * @var string|null
     */
    public ?string $LocalDate;

    /**
     * If true, an AVS check will be peformed
     * @var bool
     */
    public bool $AddressVerification;

    /**
     * If true, perform 3DSecure processing with the transaction if present
     * @var bool
     */
    public bool $ThreeDSecure;

    /**
     * If true, a BIN Check is performed with the transaction
     * @var bool|null
     */
    public ?bool $BinCheck = null;

    /**
     * If true, Fraud Check will be performed with the transaction
     * @var bool|null
     */
    public ?bool $FraudCheck = null;

    /**
     * If true, this is the first transaction in a recurring series
     * @var bool|null
     */
    public ?bool $RecurringInitial = null;

    /**
     * If true, this transaction is part of a recurring series
     * @var bool|null
     */
    public ?bool $Recurring = null;

    /**
     * If true, this transaction is a Card-on-file transaction
     * @var bool|null
     */
    public ?bool $CardOnFile = null;

    /**
     * If true, perform an account verification
     * @var bool|null
     */
    public ?bool $AccountVerification = null;

    /**
     * Credit or Debit Source Card Data
     * @var Source
     */
    public Source $Source;

    public ?string $TerminalId = null;
    public ?string $TerminalCode = null;
    public ?string $TerminalSerialNumber = null;

    /**
     * External identifier for the transaction
     * @var string|null
     */
    public ?string $ExternalIdentifier = null;

    /**
     * External identifier for the transaction's batch
     * @var string|null
     */
    public ?string $ExternalBatchIdentifier = null;

    /**
     * Optional external group identifier
     * @var string|null
     */
    public ?string $ExternalGroupIdentifier = null;

    /**
     * Order identifier - Order ID assigned by the merchant
     * @var string|null
     */
    public ?string $OrderIdentifier = null;

    public Address $BillingAddress;
    public ?Address $ShippingAddress = null;

    /**
     * Indicates whether ShippingAddress is the same as BillingAddress
     * @var bool|null
     */
    public ?bool $AddressMatch = false;

    public ExtendedRequestData $ExtendedData;
}
