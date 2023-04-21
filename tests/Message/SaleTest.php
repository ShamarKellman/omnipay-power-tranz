<?php

namespace Omnipay\PowerTranz\Tests\Message;

use Omnipay\PowerTranz\Constants;
use Omnipay\PowerTranz\Message\Request\SaleRequest;
use Omnipay\PowerTranz\Message\Response\AuthResponse;
use Omnipay\Tests\TestCase;

class SaleTest extends TestCase
{
    public SaleRequest $request;

    /**
     * @throws \ReflectionException
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->request = new SaleRequest($this->getHttpClient(), $this->getHttpRequest());
        $this->request->initialize([
            'testMode' => false,
            'currency' => 'USD',
            Constants::PARAM_POWERTRANZ_CREDENTIALS_REQUIRED => false,
            Constants::PARAM_HTTP_METHOD => 'GET',
        ]);
    }

    public function testSaleSuccess(): void
    {
        $this->setMockHttpResponse('SaleSuccess.txt');

        /** @var AuthResponse $response */
        $response = $this->request->send();

        self::assertTrue($response->isSuccessful());
        self::assertSame('00', $response->getCode());
        self::assertSame('Transaction is approved.', $response->getMessage());
    }

    public function testAuthorizeDecline(): void
    {
        $this->setMockHttpResponse('SaleDecline.txt');

        /** @var AuthResponse $response */
        $response = $this->request->send();

        self::assertFalse($response->isSuccessful());
        self::assertSame('SP4', $response->getCode());
        self::assertSame('SPI Preprocessing complete', $response->getMessage());
    }
}
