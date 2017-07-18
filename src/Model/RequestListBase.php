<?php

namespace zaporylie\Tripletex\Model;

use JMS\Serializer\Annotation as Serializer;

abstract class RequestListBase extends RequestDetailsBase
{

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $from;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $count;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $sorting;

    /**
     * Gets from value.
     *
     * @return int
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Gets count value.
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Gets sorting value.
     *
     * @return string
     */
    public function getSorting()
    {
        return $this->sorting;
    }

    /**
     * Sets from variable.
     *
     * @param int $from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * Sets count variable.
     *
     * @param int $count
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * Sets sorting variable.
     *
     * @param string $sorting
     *
     * @return $this
     */
    public function setSorting($sorting)
    {
        $this->sorting = $sorting;
        return $this;
    }
}
