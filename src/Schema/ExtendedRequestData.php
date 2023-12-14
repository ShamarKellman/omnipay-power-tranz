<?php

namespace Omnipay\PowerTranz\Schema;

class ExtendedRequestData extends AbstractSchema
{
    public ?Address $SecondaryAddress = null;
    public ?object $CustomData = null;
    public ?object $Level2CustomData = null;
    public ?object $Level3CustomData = null;
    public ThreeDSecureRequestData $ThreeDSecure;
    public ?RecurringRequestData $Recurring = null;
    public ?BrowserInfoData $BrowserInfo = null;

    /**
     * Url to redirect the cardholder to when then the transaction is complete
     * @var string|null
     */
    public ?string $MerchantResponseUrl = null;

    public ?HostedPageRequestData $HostedPage = null;
}
