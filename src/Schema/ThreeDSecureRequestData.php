<?php

namespace Omnipay\PowerTranz\Schema;

class ThreeDSecureRequestData extends AbstractSchema
{
    /**
     * ECI Indicator
     * @var string|null
     */
    public ?string $Eci = null;

    /**
     * CAVV value
     * @var string|null
     */
    public ?string $Cavv = null;

    /**
     * 3DS Transaction Id
     * @var string|null
     */
    public ?string $Xid = null;

    /**
     * 3DS Authentication Status
     * @var string|null
     */
    public ?string $AuthenticationStatus = null;

    /**
     * 3DS Protocol Version
     * @var string|null
     */
    public ?string $ProtocolVersion = null;

    /**
     * 3DS DirectoryServer Transaction Id
     * @var string|null
     */
    public ?string $DSTransId = null;

    /**
     * Mandatory Challenge window size for 3DS2. 1=250x400; 2=390x400; 3=500x600; 4=600x400; 5=100%
     * @var int
     */
    public int $ChallengeWindowSize;

    /**
     * 3DS2 Channel Indicator.
     * @var string|null
     */
    public ?string $ChannelIndicator = null;

    /**
     * 3DS2 3RI Indicator. Values currently accepted: "01" = Recurring transaction
     * @var string|null
     */
    public ?string $RiIndicator = null;

    /**
     * Requestor Challenge Indicator "01", "02", "03", or "04". Default is "01" (no preference)
     * 01 = No preference
     * 02 = No challenge requested
     * 03 = Challenge requested: 3DS Requestor Preference
     * 04 = Challenge requested: Mandate
     *
     * @var string|null
     */
    public ?string $ChallengeIndicator = null;

    /**
     * 3DS2 Authentication Indicator (threeDSRequestorAuthenticationInd). Defaults to "01" = Payment transaction
     * @var string|null
     */
    public ?string $AuthenticationIndicator = null;

    /**
     * 3DS2 Message Category. "01" = PA, "02" = NPA, etc.
     * @var string|null
     */
    public ?string $MessageCategory = null;

    /**
     * 3DS2 Transaction Type (transType). "01" = Goods/Service, "02" = Check Acceptance, etc.
     * @var string|null
     */
    public ?string $TransactionType = null;

    public ?AccountInfoRequestData $AccountInfo = null;
}
