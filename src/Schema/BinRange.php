<?php

namespace Omnipay\PowerTranz\Schema;

class BinRange extends AbstractSchema
{
    /**
     * CardType Id
     * @var int|null
     */
    public ?int $CardTypeId = null;

    /**
     * Card brand (Visa, Mastercard,etc.)
     * @var string|null
     */
    public ?string $CardBrand = null;

    /**
     * Bin range start value
     * @var string|null
     */
    public ?string $RangeStart = null;

    /**
     * Bin range end value
     * @var string|null
     */
    public ?string $RangeEnd = null;

    /**
     * Indicates whether the card is Local Debit
     * @var bool|null
     */
    public ?bool $LocalDebit = null;
}
