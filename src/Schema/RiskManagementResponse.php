<?php

namespace Omnipay\PowerTranz\Schema;

/**
 * RiskManagementResponse Model
 */
class RiskManagementResponse extends AbstractSchema
{
    public ?string $AvsResponseCode = null;
    public ?string $CvvResponseCode = null;
    public ?ThreeDSecureResponse $ThreeDSecure = null;
    public ?object $FraudCheck = null;
}
