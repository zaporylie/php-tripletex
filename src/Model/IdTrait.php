<?php

namespace zaporylie\Tripletex\Model;

use JMS\Serializer\Annotation as Serializer;

trait IdTrait
{

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}
