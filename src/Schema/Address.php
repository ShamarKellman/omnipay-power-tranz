<?php

namespace Omnipay\PowerTranz\Schema;

class Address extends AbstractSchema
{
    public ?string $FirstName = null;
    public ?string $LastName = null;
    public ?string $Line1 = null;
    public ?string $Line2 = null;
    public ?string $City = null;
    public ?string $County = null;

    /**
     * State – if supplied must be the country subdivision code defined in ISO 3166-2.
     * For US addresses only correct abbreviations are allowed valid samples :FL ,CA
     *
     * @var string|null
     */
    public ?string $State = null;

    /**
     * Postal code or zip code
     * @var string
     */
    public string $PostalCode;

    /**
     * Country code - 3 digit ISO code
     * Must contain valid numeric country code (ISO 3166) Must be supplied if State is populated.
     *
     * @var string
     */
    public string $CountryCode;

    public ?string $EmailAddress = null;

    /**
     * Valid phone number including country code
     * Valid examples: 35301176543210 35301176543210 01176543210
     * (must include CountryCode)
     *
     * @var string|null
     */
    public ?string $PhoneNumber = null;
    public ?string $PhoneNumber2 = null;
    public ?string $PhoneNumber3 = null;
}
