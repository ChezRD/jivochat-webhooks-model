<?php

namespace ChezRD\Jivochat\Webhooks\Model\EventRequest;

use ChezRD\Jivochat\Webhooks\Model\Request;
use ChezRD\Jivochat\Webhooks\Model\Request\Agent;
use InvalidArgumentException;

/**
 * @author Oleg Fedorov <olegf39@gmail.com>
 * @author Evgeny Rumaintsev <chezrd@gmail.com>
 * @package ChezRD\Jivochat\Webhooks\Model\Request
 */
class ChatAcceptedRequest extends Request
{
    /** @var int Chat id (e.g. 7180). */
    public $chat_id;
    
    /** @var Agent Object with information about the operator. See {@link Agent} for details. */
    public $agent;

    /**
     * Setter for {@link agent} property.
     *
     * @param Agent|array $data
     * @throws InvalidArgumentException
     */
    public function setAgent($data) {
        return $this->populateFieldData('agent', Agent::class, $data, false, false);
    }
}