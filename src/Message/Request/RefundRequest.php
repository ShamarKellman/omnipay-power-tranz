<?php

namespace Omnipay\PowerTranz\Message\Request;

use Omnipay\PowerTranz\Message\AbstractRequest;
use Omnipay\PowerTranz\Schema\RefundRequest as SchemaRefundRequest;

class RefundRequest extends AbstractRequest
{
    public const ENDPOINT = 'Refund';

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
        return array_intersect_key($this->parameters->all(), array_flip(SchemaRefundRequest::getSchemaProperties()));
    }
}
