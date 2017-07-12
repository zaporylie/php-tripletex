<?php

namespace zaporylie\Tripletex\Model;

use JMS\Serializer\Annotation as Serializer;

trait NameTrait
{

    /**
     * Name.
     *
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $name;

    /**
     * Get Url.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Url.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
