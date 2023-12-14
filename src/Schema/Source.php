<?php

namespace Omnipay\PowerTranz\Schema;

use Omnipay\Common\CreditCard;

/**
 * Credit or Debit Source Card Data
 */
class Source extends AbstractSchema
{
    /**
     * Whether the source card was present. If this is true, the card is present.
     * @var bool
     */
    public bool $CardPresent;

    /**
     * Whether the card data present is for an EMV fallback
     * @var bool
     */
    public bool $CardEmvFallback;

    /**
     * ManualEntry payment mode
     * @var bool
     */
    public bool $ManualEntry;

    /**
     * Set to true if this is Debit. False indicates Credit.
     * @var bool
     */
    public bool $Debit;

    /**
     * CP: "01" = Checking, "02" = Savings ECOM: "01" = Not Applicable, "02" = Credit "03" = Debit
     * @var string|null
     */
    public ?string $AccountType = null;

    /**
     * Whether or not the source was delivered via contactless (e.g. NFC) technology
     * @var bool
     */
    public bool $Contactless;

    /**
     * Card primary account number
     * @var string
     */
    public string $CardPan;

    /**
     * Card masked primary account number. Required for routing.
     * @var string
     */
    public string $MaskedPan;

    /**
     * Card verification code
     * @var string|null
     */
    public ?string $CardCvv = null;

    /**
     * Card expiration date YYMM
     * @var string
     */
    public string $CardExpiration;

    public ?string $Token = null;
    public ?string $TokenType = null;
    public ?string $CardTrack1Data = null;
    public ?string $CardTrack2Data = null;
    public ?string $CardTrack3Data = null;

    /**
     * Card track data (ambiguous as to track separation)
     * @var string|null
     */
    public ?string $CardTrackData = null;

    public ?string $EncryptedCardTrack1Data = null;
    public ?string $EncryptedCardTrack2Data = null;
    public ?string $EncryptedCardTrack3Data = null;

    /**
     * Encrypted card track data (ambiguous as to track separation)
     * @var string|null
     */
    public ?string $EncryptedCardTrackData = null;

    public ?string $Ksn = null;
    public ?string $EncryptedPinBlock = null;
    public ?string $PinBlockKsn = null;
    public ?string $CardEmvData = null;

    /**
     * 2-45 characters
     * Required for 3DS transactions
     * @var string
     */
    public string $CardholderName;

    /**
     * @param array|null $Card - Expects data fields for a Omnipay\Common\CreditCard object
     * @throws \ReflectionException
     */
    public function __construct(array $Card = null, bool $CardIsOmnipayCreditCard = false)
    {
        if (is_array($Card) && $CardIsOmnipayCreditCard === true) {
            $Card = new CreditCard($Card);

            $map = [
                'CardPan' => $Card->getNumber(),
                'CardCvv' => $Card->getCvv(),
                'CardExpiration' => $Card->getExpiryDate('ym'),
                'CardholderName' => $Card->getName(),
            ];
        } else {
            $map = $Card;
        }

        parent::__construct($map ?? []);
    }
}
