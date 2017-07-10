<?php

namespace zaporylie\Tripletex\Model;

trait RevisionTrait
{

    /**
    * Version number.
    *
    * @var int
    */
    protected $version;

    /**
    * Get version number.
    *
    * @return int
    */
    public function getVersion()
    {
        return $this->version;
    }

    /**
    * Set version number.
    *
    * @param int $version
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

}
