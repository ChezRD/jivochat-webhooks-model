<?php

namespace ChezRD\Jivochat\Webhooks\Model\EventRequest;

use ChezRD\Jivochat\Webhooks\Model\Request;
use ChezRD\Jivochat\Webhooks\Model\Request\Agent;
use InvalidArgumentException;

/**
 * @author Oleg Fedorov <olegf39@gmail.com>
 * @author Evgeny Rumiantsev <chezrd@gmail.com>
 * @package ChezRD\Jivochat\Webhooks\Model\Request
 */
class ChatUpdatedRequest extends Request
{
    /** @var Agent Object with information about the operator. See {@link Agent} for details. */
    public $agent;

    /**
     * Setter for {@link agent} property.
     *
     * @param Agent|array $data
     * @throws InvalidArgumentException
     */
    public function setAgent($data) {
        return $this->populateFieldData('agent', Agent::class, $data, false, true);
    }
}