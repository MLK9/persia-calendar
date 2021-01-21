<?php

namespace MLK9\Events;

class Event
{
    private $details = 'Nothing';
    private $is_holiday = true;
    private $date = [1,1,1970];

    public function __construct($details, $is_holiday, $date)
    {
        $this->details = $details;
        $this->is_holiday = $is_holiday;
        $this->date = $date;
    }

    public function GetDetails()
    {
        return $this->details;
    }

    public function GetIsHoliday()
    {
        return $this->is_holiday;
    }

    public function GetDate()
    {
        return $this->date;
    }
}
