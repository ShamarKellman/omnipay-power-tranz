<?php

namespace Omnipay\PowerTranz\Message\Request;

use Omnipay\PowerTranz\Message\AbstractRequest;
use Omnipay\PowerTranz\Schema\VoidRequest as SchemaVoidRequest;

class VoidRequest extends AbstractRequest
{
    public const ENDPOINT = 'Void';

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
        return array_intersect_key($this->parameters->all(), array_flip(SchemaVoidRequest::getSchemaProperties()));
    }
}
