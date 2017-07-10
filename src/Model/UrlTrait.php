<?php

namespace zaporylie\Tripletex\Model;

trait UrlTrait
{

    /**
     * Resource Url.
     *
     * @var int
     */
    protected $url;

    /**
     * Get Url.
     *
     * @return int
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set Url.
     *
     * @param int $url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }
}
