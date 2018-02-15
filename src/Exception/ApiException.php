<?php

namespace zaporylie\Tripletex\Exception;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class ApiException extends \Exception
{

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $message;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $code;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $link;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $status;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $developerMessage;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection|\zaporylie\Tripletex\Exception\ValidationError[]
     *
     * @Serializer\Type("ArrayCollection<zaporylie\Tripletex\Exception\ValidationError>")
     */
    protected $validationMessages;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $requestId;

    /**
     * Gets link value.
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets link variable.
     *
     * @param string $link
     *
     * @return $this
     */
    public function setLink($link)
    {
        $this->link = $link;
        return $this;
    }

    /**
     * Gets status value.
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets status variable.
     *
     * @param int $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets developerMessage value.
     *
     * @return string
     */
    public function getDeveloperMessage()
    {
        return $this->developerMessage;
    }

    /**
     * Sets developerMessage variable.
     *
     * @param string $developerMessage
     *
     * @return $this
     */
    public function setDeveloperMessage($developerMessage)
    {
        $this->developerMessage = $developerMessage;
        return $this;
    }

    /**
     * Gets validationMessages value.
     *
     * @return \Doctrine\Common\Collections\ArrayCollection|\zaporylie\Tripletex\Exception\ValidationError[]
     */
    public function getValidationMessages()
    {
        return $this->validationMessages;
    }

    /**
     * Sets validationMessages variable.
     *
     * @param ArrayCollection|ValidationError[] $validationMessages
     *
     * @return $this
     */
    public function setValidationMessages($validationMessages)
    {
        $this->validationMessages = $validationMessages;
        return $this;
    }

    /**
     * Gets requestId value.
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * Sets requestId variable.
     *
     * @param string $requestId
     *
     * @return $this
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
        return $this;
    }
}
