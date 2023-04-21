<?php
/**
 * @author Ricardo Assing (ricardo@tsiana.ca)
 *
 * Some constants used within the project.
 */

namespace Omnipay\PowerTranz;

class Constants
{
    public const DRIVER_NAME = 'PowerTranz - 3DS2 Payment Gateway';

    public const API_STAGING = 'https://staging.ptranz.com/api/';
    public const API_PRODUCTION = 'https://gateway.ptranz.com/api/';
    public const SPI_STAGING = 'https://staging.ptranz.com/api/spi/';
    public const SPI_PRODUCTION = 'https://gateway.ptranz.com/api/spi/';

    public const PARAM_MERCHANT_RESPONSE_URL = 'merchantResponseURL';
    public const PARAM_POWERTRANZ_ID = 'PowerTranzId';
    public const PARAM_POWERTRANZ_PASSWORD = 'PowerTranzPassword';
    public const PARAM_POWERTRANZ_CREDENTIALS_REQUIRED = 'PowerTranzCredentialsFlag';
    public const PARAM_HTTP_METHOD = 'HttpMethod';
}
