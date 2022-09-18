<?php

namespace Omnipay\PowerTranz\Message\Request;

use Omnipay\PowerTranz\Schema\CaptureRequest as SchemaCaptureRequest;

class CaptureRequest extends \Omnipay\PowerTranz\Message\AbstractRequest
{
    const ENDPOINT = 'Capture';

    /**
     * @inheritDoc
     */
    protected function getEndpoint(): string
    {
        return $this->getApiEndpoint().self::ENDPOINT;
    }

    /**
     * @inheritDoc
     */
    public function getData()
    {
        return array_intersect_key($this->parameters->all(), array_flip(SchemaCaptureRequest::getSchemaProperties()));
    }
}