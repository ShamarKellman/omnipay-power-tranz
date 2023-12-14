<?php

namespace Omnipay\PowerTranz\Schema;

class HostedPageRequestData extends AbstractSchema
{
    /**
     * Hosted page set name
     * @var string|null
     */
    public ?string $PageSet = null;

    /**
     * Hosted page name
     * @var string|null
     */
    public ?string $PageName = null;
}
