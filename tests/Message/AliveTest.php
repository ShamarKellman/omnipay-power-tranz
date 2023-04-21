<?php

namespace Omnipay\PowerTranz\Tests\Message;

use Omnipay\Common\Exception\InvalidResponseException;
use Omnipay\PowerTranz\Constants;
use Omnipay\PowerTranz\Message\Request\AliveRequest;
use Omnipay\PowerTranz\Message\Response\AliveResponse;
use Omnipay\Tests\TestCase;

class AliveTest extends TestCase
{
    public AliveRequest $request;

    /**
     * @throws \ReflectionException
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->request = new AliveRequest($this->getHttpClient(), $this->getHttpRequest());
        $this->request->initialize([
            'testMode' => false,
            'currency' => 'USD',
            Constants::PARAM_POWERTRANZ_CREDENTIALS_REQUIRED => false,
            Constants::PARAM_HTTP_METHOD => 'GET',
        ]);
    }

    public function testAliveSuccessRequest(): void
    {
        $this->setMockHttpResponse('AliveSuccess.txt');

        /** @var AliveResponse $response */
        $response = $this->request->send();

        self::assertTrue($response->isSuccessful());
    }

    public function testAliveFailResponse(): void
    {
        $this->setMockHttpResponse('AliveFail.txt');

        $this->expectException(InvalidResponseException::class);

        $this->request->send();
    }

    public function testErrorOnEmptyData(): void
    {
        $this->setMockHttpResponse('AliveError.txt');

        $this->expectException(InvalidResponseException::class);

        $this->request->send();
    }
}
