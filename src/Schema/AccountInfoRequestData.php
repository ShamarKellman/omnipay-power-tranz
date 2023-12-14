<?php

namespace Omnipay\PowerTranz\Schema;

class AccountInfoRequestData extends AbstractSchema
{
    public ?string $AccountAgeIndicator = null;
    public ?string $AccountChangeDate = null;
    public ?string $AccountChangeIndicator = null;
    public ?string $AccountDate = null;
    public ?string $AccountPasswordChangeDate = null;
    public ?string $AccountPasswordChangeIndicator = null;
    public ?string $AccountPurchaseCount = null;
    public ?string $AccountProvisioningAttempts = null;
    public ?string $AccountDayTransactions = null;
    public ?string $AccountYearTransactions = null;
    public ?string $PaymentAccountAge = null;
    public ?string $PaymentAccountAgeIndicator = null;
    public ?string $ShipAddressUsageDate = null;
    public ?string $ShipAddressUsageIndicator = null;
    public ?string $ShipNameIndicator = null;
    public ?string $SuspiciousAccountActivity = null;
}
