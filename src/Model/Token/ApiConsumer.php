<?php

namespace zaporylie\Tripletex\Model\Token;

use zaporylie\Tripletex\Model\ModelInterface;

class ApiConsumer implements ModelInterface
{

    /**
     * @var string
     */
    protected $consumerName;

    /**
     * @var string
     */
    protected $emails;

    /**
     * Gets consumerName value.
     *
     * @return string
     */
    public function getConsumerName()
    {
        return $this->consumerName;
    }

    /**
     * Sets consumerName variable.
     *
     * @param string $consumerName
     *
     * @return $this
     */
    public function setConsumerName($consumerName)
    {
        $this->consumerName = $consumerName;
        return $this;
    }

    /**
     * Gets emails value.
     *
     * @return string
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * Sets emails variable.
     *
     * @param string $emails
     *
     * @return $this
     */
    public function setEmails($emails)
    {
        $this->emails = $emails;
        return $this;
    }
}
