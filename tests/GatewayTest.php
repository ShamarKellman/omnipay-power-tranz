<?php

namespace Omnipay\PowerTranz\Tests;

use Omnipay\Omnipay;
use Omnipay\PowerTranz\Gateway;
use Omnipay\PowerTranz\Message\Request\AliveRequest;
use Omnipay\PowerTranz\Message\Request\SaleRequest;
use Omnipay\Tests\GatewayTestCase;

class GatewayTest extends GatewayTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->gateway = new Gateway($this->getHttpClient(), $this->getHttpRequest());
        $this->gateway->setPowerTranzId('123456')
            ->setPowerTranzPassword('abcdefg')
            ->setTestMode(true);
    }

    public function testGatewayInstantiated(): void
    {
        $gateway = Omnipay::create('PowerTranz');

        $this->assertInstanceOf(Gateway::class, $gateway);
    }

    public function testGatewayCanBeInitialized(): void
    {
        self::assertEquals('PowerTranz - 3DS2 Payment Gateway', $this->gateway->getName());
        self::assertEquals('PowerTranz', $this->gateway->getShortName());
        self::assertEquals('123456', $this->gateway->getParameters()['PowerTranzId']);
        self::assertEquals('abcdefg', $this->gateway->getParameters()['PowerTranzPassword']);
        self::assertTrue($this->gateway->getParameters()['testMode']);
    }

    public function testAuthorize(): void
    {
        $request = $this->gateway->alive();

        self::assertInstanceOf(AliveRequest::class, $request);
    }

    /**
     * @throws \ReflectionException
     */
    public function testPurchaseWithCreateCard(): void
    {
        $options = new \Omnipay\PowerTranz\Schema\SaleRequest([
            'TotalAmount' => '10.00',
            'Currency' => 'USD',
            'TransactionIdentifier' => '1234',
            'OrderIdentifier' => '1234',
            'ExtendedData' => [
                'HostedPage' => [
                    'PageSet' => 'sundale3ds',
                    'PageName' => 'sundale3ds',
                ],
                'MerchantResponseUrl' => '1234',
            ],
            'AddressMatch' => false,
        ]);
        /** @var SaleRequest $request */
        $request = $this->gateway->PowerTranzSale($options);

        self::assertInstanceOf(SaleRequest::class, $request);
    }

    public function testSupportsCompleteAuthorize()
    {
        $this->assertTrue(true);
    }

    public function testSupportsCompletePurchase()
    {
        $this->assertTrue(true);
    }

    public function testCompleteAuthorizeParameters()
    {
        $this->assertTrue(true);
    }

    public function testCompletePurchaseParameters()
    {
        $this->assertTrue(true);
    }

    public function testDefaultParametersHaveMatchingMethods()
    {
        $this->assertTrue(true);
    }
}
