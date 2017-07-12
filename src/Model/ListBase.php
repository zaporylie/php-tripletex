<?php

namespace zaporylie\Tripletex\Model;

use JMS\Serializer\Annotation as Serializer;

abstract class ListBase
{

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $fullResultSize;

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
     * Used to know if list has changed.
     *
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $versionDigest;

    /**
     * Gets fullResultSize value.
     *
     * @return int
     */
    public function getFullResultSize()
    {
        return $this->fullResultSize;
    }

    /**
     * Sets fullResultSize variable.
     *
     * @param int $fullResultSize
     *
     * @return $this
     */
    public function setFullResultSize($fullResultSize)
    {
        $this->fullResultSize = $fullResultSize;
        return $this;
    }

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
     * Gets count value.
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
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
     * Gets versionDigest value.
     *
     * @return string
     */
    public function getVersionDigest()
    {
        return $this->versionDigest;
    }

    /**
     * Sets versionDigest variable.
     *
     * @param string $versionDigest
     *
     * @return $this
     */
    public function setVersionDigest($versionDigest)
    {
        $this->versionDigest = $versionDigest;
        return $this;
    }
}
