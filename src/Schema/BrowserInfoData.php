<?php

namespace Omnipay\PowerTranz\Schema;

class BrowserInfoData extends AbstractSchema
{
    public ?string $AcceptHeader = null;
    public ?string $Language = null;
    public ?string $ScreenHeight = null;
    public ?string $ScreenWidth = null;
    public ?string $TimeZone = null;
    public ?string $UserAgent = null;
    public ?string $IP = null;
    public ?bool $JavaEnabled = null;
    public ?bool $JavascriptEnabled = null;
    public ?string $ColorDepth = null;
}
