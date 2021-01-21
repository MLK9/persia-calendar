<?php

namespace MLK9\Events;

class Events
{
    private $events = [];

    public function Add($details, $is_holiday, $date)
    {
        $this->events[] = new Event($details, $is_holiday, $date);
    }

    public function Get($date=null, $match=false)
    {
        if (is_null($date)) {
            return $this->events;
        } else {
            $events = [];
            foreach ($this->events as $value) {
                if (!$match) {
                    if ($value->GetDate()[0]==$date[0] && $value->GetDate()[1]==$date[1]) {
                        $events[] = [
                            'Date' => $value->GetDate(),
                            'Holiday' => $value->GetIsHoliday(),
                            'Details' => $value->GetDetails(),
                        ];
                    }
                } else {
                    if ($value->GetDate()==$date) {
                        $events[] = [
                            'Date' => $value->GetDate(),
                            'Holiday' => $value->GetIsHoliday(),
                            'Details' => $value->GetDetails(),
                        ];
                    }
                }
            }
            return $events;
        }
    }
}
