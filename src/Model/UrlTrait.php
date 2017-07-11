<?php

namespace zaporylie\Tripletex\Model;

use JMS\Serializer\Annotation as Serializer;

trait UrlTrait
{

    /**
     * Resource Url.
     *
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $url;

    /**
     * Get Url.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set Url.
     *
     * @param string $url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }
}
