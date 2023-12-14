<?php

namespace Omnipay\PowerTranz\Message\Response;

use Omnipay\PowerTranz\Message\AbstractResponse;

class AliveResponse extends AbstractResponse
{
    public ?string $Affinity = null;
    public ?string $ApiVersion = null;
    public ?string $AssemblyVersion = null;
    public ?string $Name = null;
    public ?string $Type = null;

    public function isSuccessful(): bool
    {
        return true;
    }
}
