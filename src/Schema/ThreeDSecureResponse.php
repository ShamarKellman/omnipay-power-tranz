<?php

namespace Omnipay\PowerTranz\Schema;

/**
 * 3DS Response Model
 */
class ThreeDSecureResponse extends AbstractSchema
{
    /**
     * ECI Indicator
     * @var string|null
     */
    public ?string $Eci = null;

    /**
     * CAVV Value
     * @var string|null
     */
    public ?string $Cavv = null;

    /**
     * 3DS Transaction Id
     * @var string|null
     */
    public ?string $Xid = null;

    /**
     * Authentication Status
     * @var string|null
     */
    public ?string $AuthenticationStatus = null;

    /**
     * Authentication Status Reason
     * @var string|null
     */
    public ?string $StatusReason = null;

    /**
     * 3DS redirect form data
     * @var string|null
     */
    public ?string $RedirectData = null;

    /**
     * 3DS redirect url for the Authentication
     * @var string|null
     */
    public ?string $AuthenticateUrl = null;

    /**
     * 3DS1 Card enrolled flag
     * @var string|null
     */
    public ?string $CardEnrolled = null;

    /**
     * 3DS Protocol version
     * @var string|null
     */
    public ?string $ProtocolVersion = null;

    /**
     * Fingerprint Indicator
     * @var string|null
     */
    public ?string $FingerprintIndicator = null;

    /**
     * 3DS Directory Server Transaction Id
     * @var string|null
     */
    public ?string $DsTransId = null;

    /**
     * IsoResponseCode from 3DS portion of an Auth/Sale with 3DS
     * @var string|null
     */
    public ?string $ResponseCode = null;

    /**
     * Information for the Cardholder from the ACS
     * @var string|null
     */
    public ?string $CardholderInfo = null;
}
