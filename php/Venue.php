<?php
/**
 * @author Nick Kaye <nick.c.kaye@gmail.com>
 * ©2013 Outright Mental Inc.
 * All Rights Reserved
 *
 * @property string $url
 * @property string $name
 * @property string $addressOne
 * @property string $addressTwo
 * @property string $twitterHandle
 * @property string $urlFacebook
 * @property string $urlFoursquare
 * @property string $contentPageMain
 */
class Venue
{
    public $url;
    public $name;
    public $addressOne;
    public $addressTwo;
    public $twitterHandle;
    public $urlFacebook;
    public $urlFoursquare;
    public $contentPageMain;


    /**
     * @param array $data
     */
    public function __construct($data = null)
    {
        if ($data !== null)
            $this->setAttributes($data);
    }

    /**
     * @param array $data
     */
    public function setAttributes($data)
    {
        foreach ($data as $key => $value)
            if (property_exists($this, $key))
                $this->$key = $value;
    }

    /**
     * @return string
     */
    public function urlTwitter()
    {
        return 'http://www.twitter.com/' . $this->twitterHandle;
    }

}
