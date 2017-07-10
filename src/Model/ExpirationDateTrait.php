<?php

namespace zaporylie\Tripletex\Model;

trait ExpirationDateTrait
{
    /**
     * @var \DateTime
     */
    protected $expirationDate;

    /**
     * Gets expirationDate value.
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Sets expirationDate variable.
     *
     * @param \DateTime $expirationDate
     *
     * @return $this
     */
    public function setExpirationDate(\DateTime $expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }
}
