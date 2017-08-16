<?php

namespace Struzik\EPPClient\Response\Domain;

use Struzik\EPPClient\Response\AbstractCommonResponse;

/**
 * Object representation of the response of domain deleting command.
 */
class Delete extends AbstractCommonResponse
{
    /**
     * {@inheritdoc}
     */
    public function isSuccess()
    {
        return in_array($this->getResultCode(), [self::RC_SUCCESS, self::RC_SUCCESS_ACTION_PENDING]);
    }
}
