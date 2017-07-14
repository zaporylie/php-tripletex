<?php

namespace zaporylie\Tripletex\Model;

abstract class ModelBase implements ModelInterface
{

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $id;

    /**
     * @var integer
     *
     * @Serializer\Type("integer")
     */
    protected $version;

    /**
     * Resource Url.
     *
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $url;

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

    /**
     * Get Url.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
