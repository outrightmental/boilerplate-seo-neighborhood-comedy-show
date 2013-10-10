<?php
/**
 * @author Nick Kaye <nick.c.kaye@gmail.com>
 * ©2013 Outright Mental Inc.
 * All Rights Reserved
 */
class Show
{
    /** @var Venue */
    public $venue;

    /** @var string */
    public $url;
    /** @var string */
    public $date;
    /** @var string */
    public $dateSlug;
    /** @var string */
    public $dayOfWeek;
    /** @var string */
    public $time;
    /** @var string */
    public $year;
    /** @var string */
    public $timeDoors;
    /** @var string */
    public $host;
    /** @var string */
    public $headlinerOne;
    /** @var string */
    public $headlinerTwo;
    /** @var string */
    public $name;
    /** @var string */
    public $slogan;
    /** @var string */
    public $title;
    /** @var string */
    public $description;
    /** @var string */
    public $urlYoutube;
    /** @var string */
    public $urlFacebook;
    /** @var string */
    public $urlPoster;

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
            if (property_exists('Show', $key))
                $this->$key = $value;
    }

    /**
     * @return string
     */
    public function urlPosterLinkTo()
    {
        return $this->urlFacebook;
    }

    /**
     * @return string
     */
    public function content()
    {
        return  $this->name . ". " . $this->dayOfWeek . ", " . $this->date . ".  " . $this->time . "PM (Doors " . $this->timeDoors . ").  Your Host: " . $this->host . ".  Featuring " . $this->headlinerOne . " and " . $this->headlinerTwo . ".  " . $this->slogan . "  " . $this->url . ". " . $this->venue->addressTwo . ", " . $this->venue->addressTwo . ".";
    }

    /**
     * @return string
     */
    public function datePretty()
    {
       return $this->dayOfWeek . ', '.  $this->date . ' ' . $this->year;
    }

}
