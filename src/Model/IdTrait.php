<?php

namespace zaporylie\Tripletex\Model;

trait IdTrait
{

    /**
    * @var int
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
     * @param int $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}
