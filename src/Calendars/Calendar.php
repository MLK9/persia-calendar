<?php

namespace MLK9\Calendars;

class Calendar
{
    private static $zone = 'Asia/Tehran';
    private static $datetime;

    private $events = null;

    public function boot()
    {
        $m = date('m', Self::getTime());
        $d = date('d', Self::getTime());
        $y = date('Y', Self::getTime());
        return [$d,$m,$y];
    }

    public static function setTime($time=null, $zone='Asia/Tehran')
    {
        date_default_timezone_set(Self::$zone);

        if (is_null($time)) {
            Self::$datetime = time();
        } else {
            Self::$datetime = $time;
        }
    }

    public static function getTime()
    {
        return Self::$datetime;
    }

    public function Events($event=null)
    {
        $ev = $this->events;

        return $ev->Get($this->boot());
    }

    public function SetEvent($event)
    {
        $this->events = $event;
    }
}
