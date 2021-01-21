<?php

namespace MLK9;

use MLK9\Calendars\Calendar;
use MLK9\Calendars\GhamariCalendar;
use MLK9\Calendars\JalaliCalendar;
use MLK9\Events\Events;
use MLK9\Events\GhamariEvent;
use MLK9\Events\JalaliEvent;
use MLK9\Events\MiladiEvent;

class PCalendar
{
    private static $jalili;
    private static $ghamari;
    private static $miladi;

    private static $jalili_events;
    private static $ghamari_events;
    private static $miladi_events;

    private static function Config()
    {
        if (is_null(Self::$jalili)) {
            Self::$jalili = new JalaliCalendar();
            Self::$jalili_events = new Events();
            JalaliEvent::boot();
        }
        if (is_null(Self::$ghamari)) {
            Self::$ghamari = new GhamariCalendar();
            Self::$ghamari_events = new Events();
            GhamariEvent::boot();
        }
        if (is_null(Self::$miladi)) {
            Self::$miladi = new Calendar();
            Self::$miladi_events = new Events();
            MiladiEvent::boot();
        }
        Self::$ghamari->SetEvent(Self::$ghamari_events);
        Self::$jalili->SetEvent(Self::$jalili_events);
        Self::$miladi->SetEvent(Self::$miladi_events);
    }

    public static function JalaliEvent()
    {
        return Self::$jalili_events;
    }
    public static function GhamariEvent()
    {
        return Self::$ghamari_events;
    }
    public static function MiladiEvent()
    {
        return Self::$miladi_events;
    }

    public static function Today()
    {
        Self::Config();
        Calendar::setTime();
        return array_merge(Self::$jalili->Events(), Self::$ghamari->Events(), Self::$miladi->Events());
    }
    
    public static function Time($timestamp)
    {
        Self::Config();
        Calendar::setTime($timestamp);
        return array_merge(Self::$jalili->Events(), Self::$ghamari->Events(), Self::$miladi->Events());
    }

    public static function IsHoliday($timestamp=null)
    {
        Self::Config();
        if (is_null($timestamp)) {
            Calendar::setTime();
        } else {
            Calendar::setTime($timestamp);
        }
        $events = array_merge(Self::$jalili->Events(), Self::$ghamari->Events(), Self::$miladi->Events());

        foreach ($events as $value) {
            if ($value['Holiday']) {
                return true;
            }
        }

        return false;
    }
}
