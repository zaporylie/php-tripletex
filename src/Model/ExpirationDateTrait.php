<?php

namespace zaporylie\Tripletex\Model;

use JMS\Serializer\Annotation as Serializer;

trait ExpirationDateTrait
{
    /**
     * @var \DateTimeInterface
     *
     * @Serializer\Type("DateTimeImmutable<'Y-m-d'>")
     */
    protected $expirationDate;

    /**
     * Gets expirationDate value.
     *
     * @return \DateTimeInterface
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Sets expirationDate variable.
     *
     * @param \DateTimeInterface $expirationDate
     *
     * @return $this
     */
    public function setExpirationDate(\DateTimeInterface $expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }
}
