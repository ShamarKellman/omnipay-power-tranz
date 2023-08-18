<?php

namespace Omnipay\PowerTranz\Schema;

trait AuthTrait
{
    /**
     * Auth = 1, Sale = 2, Capture = 3, Void = 4, Refund = 5, Credit = 6
     * @var int
     */
    public int $TransactionType;

    /**
     * Whether or not the authorization was approved
     * @var bool
     */
    public bool $Approved;

    /**
     * Authorization code
     * @var string|null
     */
    public ?string $AuthorizationCode = null;

    /**
     * Transaction identifier
     * @var string|null
     */
    public ?string $TransactionIdentifier = null;

    /**
     * Approved total amount
     * @var float|null
     */
    public ?float $TotalAmount = null;

    /**
     * Currency code
     * @var string|null
     */
    public ?string $CurrencyCode = null;

    /**
     * Retrieval Reference Number
     * @var string|null
     */
    public ?string $RRN = null;

    /**
     * Host Retrieval Reference Number
     * @var string|null
     */
    public ?string $HostRRN = null;

    /**
     * Brand of the card used
     * @var string|null
     */
    public ?string $CardBrand = null;

    /**
     * Standard ISO response code
     * @var string|null
     */
    public ?string $IsoResponseCode = null;

    /**
     * Standard response code
     * @var string|null
     */
    public ?string $ResponseCode = null;

    /**
     * Issuer authentication data for EMV purposes; used with the EMV card
     * @var string|null
     */
    public ?string $EmvIssuerAuthenticationData = null;

    /**
     * Issuer scripts for EMV purposes; executed against the EMV card
     * @var string|null
     */
    public ?string $EmvIssuerScripts = null;

    /**
     * Authorization Response Code in response EMV data
     * @var string|null
     */
    public ?string $EmvResponseCode = null;

    /**
     * Response message
     * @var string|null
     */
    public ?string $ResponseMessage;

    public ?RiskManagementResponse $RiskManagement;
    public ?object $CustomData = null;
    public ?object $Host = null;

    /**
     * PowerTranz Token for the Pan
     * @var string|null
     */
    public ?string $PanToken = null;

    /**
     * External identifier for the transaction
     * @var string|null
     */
    public ?string $ExternalIdentifier = null;

    /**
     * OrderIdentifier mirrored from request
     * @var string|null
     */
    public ?string $OrderIdentifier = null;

    public ?array $Errors = null;

    /**
     * HTML redirect data required for various integration types
     * @var string|null
     */
    public ?string $RedirectData = null;

    /**
     * Single use integration token
     * @var string|null
     */
    public ?string $SpiToken;

    public ?Address $BillingAddress = null;
}
